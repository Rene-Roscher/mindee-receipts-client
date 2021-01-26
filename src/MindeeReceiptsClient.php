<?php

namespace RServices;

use GuzzleHttp\Client;

class MindeeReceiptsClient
{
    private Client $client;
    private $response;
    private $predictedCategory;
    private $predictedPrice;
    private $probability;
    private $processingTime;

    public function __construct($apiKey)
    {
        $this->client = new Client([
            'headers' => [
                'X-Inferuser-Token' => $apiKey,
                'Content-Type' => 'multipart/form-data'
            ]
        ]);
    }

    public function predict($contents)
    {
        $response = $this->client->request('POST', 'https://api.mindee.net/products/expense_receipts/v3/predict', [
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => base64_encode($contents)
                ],
            ]
        ]);
        $this->response = json_decode($response->getBody()->getContents(), true);
        $this->handlePredication();
        return $this;
    }

    function handlePredication()
    {
        if (is_null($this->response) || !is_array($this->response) || !is_object($this->response))
            throw new \LogicException('there was no response to process');
        if (array_key_exists('predictions', $this->response) && count($predictions = $this->response['predictions']) > 0) {
            $obj = $predictions[0];
            $this->predictedPrice = $obj['total_incl']['value'];
            $this->probability = $obj['total_incl']['probability'];
            $this->predictedCategory = $obj['category']['value'];
            $this->processingTime = $this->response['call']['processing_time'];
        }
    }


    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return mixed
     */
    public function getPredictedCategory()
    {
        return $this->predictedCategory;
    }

    /**
     * @return mixed
     */
    public function getPredictedPrice()
    {
        return $this->predictedPrice;
    }

    /**
     * @return mixed
     */
    public function getProbability()
    {
        return $this->probability;
    }

    /**
     * @return mixed
     */
    public function getProcessingTime()
    {
        return $this->processingTime;
    }

}
