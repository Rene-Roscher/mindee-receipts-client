<?php

namespace RServices\MindeeReceiptsClient;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Facade;

/**
 * @method \RServices\MindeeReceiptsClient\MindeeReceiptsClient predict($contents);
 * @method string getPredictedCategory();
 * @method float getPredictedPrice();
 * @method string getProbability();
 * @method int getProcessingTime();
 * @method array|mixed getResponse();
 * @method Client getClient();
 * @see \RServices\MindeeReceiptsClient\MindeeReceiptsClient
 */
class MindeeReceiptsClientFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mindee-receipts-client';
    }
}
