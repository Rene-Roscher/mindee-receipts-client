<?php

namespace RServices;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \RServices\MindeeReceiptsClient predict($contents);
 * @method static string getPredictedCategory();
 * @method static float getPredictedPrice();
 * @method static string getProbability();
 * @method static int getProcessingTime();
 * @method static array|mixed getResponse();
 * @method static Client getClient();
 * @see \RServices\MindeeReceiptsClient\MindeeReceiptsClient
 */
class MindeeReceiptsClientFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mindee-receipts-client';
    }
}
