<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateShortParamRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateShortParamResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendSmsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Dysmsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'ap-northeast-1'     => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2-pop' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-south-1'         => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-1'     => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'     => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'     => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'     => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'cn-beijing'         => 'dysmsapi-proxy.cn-beijing.aliyuncs.com',
            'eu-central-1'       => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'eu-west-1'          => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'eu-west-1-oxs'      => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'me-east-1'          => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'rus-west-1-pop'     => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'us-east-1'          => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'us-west-1'          => 'dysmsapi.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dysmsapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddShortUrlRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddShortUrlResponse
     */
    public function addShortUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddShortUrlResponse::fromMap($this->doRPCRequest('AddShortUrl', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddShortUrlRequest $request
     *
     * @return AddShortUrlResponse
     */
    public function addShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addShortUrlWithOptions($request, $runtime);
    }

    /**
     * @param AddSmsSignRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddSmsSignResponse
     */
    public function addSmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSmsSignResponse::fromMap($this->doRPCRequest('AddSmsSign', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddSmsSignRequest $request
     *
     * @return AddSmsSignResponse
     */
    public function addSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSmsSignWithOptions($request, $runtime);
    }

    /**
     * @param AddSmsTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddSmsTemplateResponse
     */
    public function addSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSmsTemplateResponse::fromMap($this->doRPCRequest('AddSmsTemplate', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddSmsTemplateRequest $request
     *
     * @return AddSmsTemplateResponse
     */
    public function addSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateShortParamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateShortParamResponse
     */
    public function createShortParamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateShortParamResponse::fromMap($this->doRPCRequest('CreateShortParam', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateShortParamRequest $request
     *
     * @return CreateShortParamResponse
     */
    public function createShortParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createShortParamWithOptions($request, $runtime);
    }

    /**
     * @param DeleteShortUrlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteShortUrlResponse
     */
    public function deleteShortUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteShortUrlResponse::fromMap($this->doRPCRequest('DeleteShortUrl', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteShortUrlRequest $request
     *
     * @return DeleteShortUrlResponse
     */
    public function deleteShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteShortUrlWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteSmsSignResponse
     */
    public function deleteSmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSmsSignResponse::fromMap($this->doRPCRequest('DeleteSmsSign', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSmsSignRequest $request
     *
     * @return DeleteSmsSignResponse
     */
    public function deleteSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmsSignWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSmsTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSmsTemplateResponse::fromMap($this->doRPCRequest('DeleteSmsTemplate', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSmsTemplateRequest $request
     *
     * @return DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ModifySmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifySmsSignResponse
     */
    public function modifySmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySmsSignResponse::fromMap($this->doRPCRequest('ModifySmsSign', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySmsSignRequest $request
     *
     * @return ModifySmsSignResponse
     */
    public function modifySmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmsSignWithOptions($request, $runtime);
    }

    /**
     * @param ModifySmsTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySmsTemplateResponse
     */
    public function modifySmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySmsTemplateResponse::fromMap($this->doRPCRequest('ModifySmsTemplate', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySmsTemplateRequest $request
     *
     * @return ModifySmsTemplateResponse
     */
    public function modifySmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param QuerySendDetailsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySendDetailsResponse
     */
    public function querySendDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySendDetailsResponse::fromMap($this->doRPCRequest('QuerySendDetails', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySendDetailsRequest $request
     *
     * @return QuerySendDetailsResponse
     */
    public function querySendDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendDetailsWithOptions($request, $runtime);
    }

    /**
     * @param QueryShortUrlRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryShortUrlResponse
     */
    public function queryShortUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryShortUrlResponse::fromMap($this->doRPCRequest('QueryShortUrl', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryShortUrlRequest $request
     *
     * @return QueryShortUrlResponse
     */
    public function queryShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryShortUrlWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmsSignRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QuerySmsSignResponse
     */
    public function querySmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySmsSignResponse::fromMap($this->doRPCRequest('QuerySmsSign', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySmsSignRequest $request
     *
     * @return QuerySmsSignResponse
     */
    public function querySmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmsTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySmsTemplateResponse
     */
    public function querySmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySmsTemplateResponse::fromMap($this->doRPCRequest('QuerySmsTemplate', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySmsTemplateRequest $request
     *
     * @return QuerySmsTemplateResponse
     */
    public function querySmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SendBatchSmsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SendBatchSmsResponse
     */
    public function sendBatchSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendBatchSmsResponse::fromMap($this->doRPCRequest('SendBatchSms', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendBatchSmsRequest $request
     *
     * @return SendBatchSmsResponse
     */
    public function sendBatchSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendBatchSmsWithOptions($request, $runtime);
    }

    /**
     * @param SendSmsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SendSmsResponse
     */
    public function sendSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendSmsResponse::fromMap($this->doRPCRequest('SendSms', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendSmsRequest $request
     *
     * @return SendSmsResponse
     */
    public function sendSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSmsWithOptions($request, $runtime);
    }
}
