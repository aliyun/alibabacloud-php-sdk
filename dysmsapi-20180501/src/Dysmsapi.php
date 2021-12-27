<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\BatchSendMessageToGlobeRequest;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\BatchSendMessageToGlobeResponse;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\ConversionDataRequest;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\ConversionDataResponse;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\QueryMessageRequest;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\QueryMessageResponse;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\SendMessageToGlobeRequest;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\SendMessageToGlobeResponse;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\SendMessageWithTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\SendMessageWithTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\SmsConversionRequest;
use AlibabaCloud\SDK\Dysmsapi\V20180501\Models\SmsConversionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dysmsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'ap-southeast-1' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'dysmsapi-xman.ap-southeast-5.aliyuncs.com',
            'cn-beijing'     => 'dysmsapi-proxy.cn-beijing.aliyuncs.com',
            'cn-hongkong'    => 'dysmsapi-xman.cn-hongkong.aliyuncs.com',
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
     * @param BatchSendMessageToGlobeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchSendMessageToGlobeResponse
     */
    public function batchSendMessageToGlobeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchSendMessageToGlobe',
            'version'     => '2018-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSendMessageToGlobeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchSendMessageToGlobeRequest $request
     *
     * @return BatchSendMessageToGlobeResponse
     */
    public function batchSendMessageToGlobe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSendMessageToGlobeWithOptions($request, $runtime);
    }

    /**
     * @param ConversionDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ConversionDataResponse
     */
    public function conversionDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->conversionRate)) {
            $body['ConversionRate'] = $request->conversionRate;
        }
        if (!Utils::isUnset($request->reportTime)) {
            $body['ReportTime'] = $request->reportTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConversionData',
            'version'     => '2018-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConversionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConversionDataRequest $request
     *
     * @return ConversionDataResponse
     */
    public function conversionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->conversionDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryMessageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMessageResponse
     */
    public function queryMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->messageId)) {
            $query['MessageId'] = $request->messageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMessage',
            'version'     => '2018-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMessageRequest $request
     *
     * @return QueryMessageResponse
     */
    public function queryMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessageWithOptions($request, $runtime);
    }

    /**
     * @param SendMessageToGlobeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SendMessageToGlobeResponse
     */
    public function sendMessageToGlobeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendMessageToGlobe',
            'version'     => '2018-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendMessageToGlobeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendMessageToGlobeRequest $request
     *
     * @return SendMessageToGlobeResponse
     */
    public function sendMessageToGlobe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageToGlobeWithOptions($request, $runtime);
    }

    /**
     * @param SendMessageWithTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SendMessageWithTemplateResponse
     */
    public function sendMessageWithTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->smsUpExtendCode)) {
            $query['SmsUpExtendCode'] = $request->smsUpExtendCode;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateParam)) {
            $query['TemplateParam'] = $request->templateParam;
        }
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendMessageWithTemplate',
            'version'     => '2018-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendMessageWithTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendMessageWithTemplateRequest $request
     *
     * @return SendMessageWithTemplateResponse
     */
    public function sendMessageWithTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageWithTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SmsConversionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SmsConversionResponse
     */
    public function smsConversionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->conversionTime)) {
            $query['ConversionTime'] = $request->conversionTime;
        }
        if (!Utils::isUnset($request->delivered)) {
            $query['Delivered'] = $request->delivered;
        }
        if (!Utils::isUnset($request->messageId)) {
            $query['MessageId'] = $request->messageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SmsConversion',
            'version'     => '2018-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SmsConversionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SmsConversionRequest $request
     *
     * @return SmsConversionResponse
     */
    public function smsConversion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smsConversionWithOptions($request, $runtime);
    }
}
