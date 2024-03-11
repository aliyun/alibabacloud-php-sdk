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
            'ap-southeast-5' => 'dysmsapi.ap-southeast-5.aliyuncs.com',
            'cn-beijing'     => 'dysmsapi-proxy.cn-beijing.aliyuncs.com',
            'cn-hongkong'    => 'dysmsapi-xman.cn-hongkong.aliyuncs.com',
            'eu-central-1'   => 'dysmsapi.eu-central-1.aliyuncs.com',
            'us-east-1'      => 'dysmsapi.us-east-1.aliyuncs.com',
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
     * *   You cannot call the BatchSendMessageToGlobe operation to send messages to the Chinese mainland.
     *   * *   You can call the BatchSendMessageToGlobe operation to send notifications and promotional messages to a limited number of mobile phone numbers at a time. To send messages to a large number of mobile phone numbers at a time, use the mass messaging feature of the SMS console.
     *   * *   For time-sensitive related messages, we recommend that you use the [SendMessageToGlobe](https://www.alibabacloud.com/help/zh/sms/developer-reference/api-dysmsapi-2018-05-01-batchsendmessagetoglobe) operation to ensure that messages are delivered on time.
     *   * *   In each request, you can send messages to up to 1,000 mobile phone numbers.
     *   * ### [](#qps)QPS limits
     *   * You can call this operation only once per second. If the number of calls per second exceeds this limit, throttling will be triggered. This can potentially impact your business operations. Therefore, we recommend that you take note of this limit when making calls to this operation.
     *   *
     * @param BatchSendMessageToGlobeRequest $request BatchSendMessageToGlobeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSendMessageToGlobeResponse BatchSendMessageToGlobeResponse
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
        if (!Utils::isUnset($request->validityPeriod)) {
            $query['ValidityPeriod'] = $request->validityPeriod;
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
     * *   You cannot call the BatchSendMessageToGlobe operation to send messages to the Chinese mainland.
     *   * *   You can call the BatchSendMessageToGlobe operation to send notifications and promotional messages to a limited number of mobile phone numbers at a time. To send messages to a large number of mobile phone numbers at a time, use the mass messaging feature of the SMS console.
     *   * *   For time-sensitive related messages, we recommend that you use the [SendMessageToGlobe](https://www.alibabacloud.com/help/zh/sms/developer-reference/api-dysmsapi-2018-05-01-batchsendmessagetoglobe) operation to ensure that messages are delivered on time.
     *   * *   In each request, you can send messages to up to 1,000 mobile phone numbers.
     *   * ### [](#qps)QPS limits
     *   * You can call this operation only once per second. If the number of calls per second exceeds this limit, throttling will be triggered. This can potentially impact your business operations. Therefore, we recommend that you take note of this limit when making calls to this operation.
     *   *
     * @param BatchSendMessageToGlobeRequest $request BatchSendMessageToGlobeRequest
     *
     * @return BatchSendMessageToGlobeResponse BatchSendMessageToGlobeResponse
     */
    public function batchSendMessageToGlobe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSendMessageToGlobeWithOptions($request, $runtime);
    }

    /**
     * Metrics:
     *   * *   Requested OTP messages
     *   * *   Verified OTP messages
     *   * An OTP conversion rate is calculated based on the following formula: OTP conversion rate = Number of verified OTP messages/Number of requested OTP messages.
     *   *
     * @param ConversionDataRequest $request ConversionDataRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ConversionDataResponse ConversionDataResponse
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
     * Metrics:
     *   * *   Requested OTP messages
     *   * *   Verified OTP messages
     *   * An OTP conversion rate is calculated based on the following formula: OTP conversion rate = Number of verified OTP messages/Number of requested OTP messages.
     *   *
     * @param ConversionDataRequest $request ConversionDataRequest
     *
     * @return ConversionDataResponse ConversionDataResponse
     */
    public function conversionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->conversionDataWithOptions($request, $runtime);
    }

    /**
     * ### QPS limit
     *   * You can call this operation up to 300 times per second. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param QueryMessageRequest $request QueryMessageRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMessageResponse QueryMessageResponse
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
     * ### QPS limit
     *   * You can call this operation up to 300 times per second. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *   *
     * @param QueryMessageRequest $request QueryMessageRequest
     *
     * @return QueryMessageResponse QueryMessageResponse
     */
    public function queryMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessageWithOptions($request, $runtime);
    }

    /**
     * ### Usage notes
     *   * You cannot call the SendMessageToGlobe operation to send messages to the Chinese mainland.
     *   * ### QPS limit
     *   * You may call this operation up to 300 times per second. If the number of calls per second exceeds this limit, throttling will be triggered. This can potentially impact your business operations. Therefore, we recommend that you take note of this limit when making calls to this operation.
     *   *
     * @param SendMessageToGlobeRequest $request SendMessageToGlobeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SendMessageToGlobeResponse SendMessageToGlobeResponse
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
        if (!Utils::isUnset($request->validityPeriod)) {
            $query['ValidityPeriod'] = $request->validityPeriod;
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
     * ### Usage notes
     *   * You cannot call the SendMessageToGlobe operation to send messages to the Chinese mainland.
     *   * ### QPS limit
     *   * You may call this operation up to 300 times per second. If the number of calls per second exceeds this limit, throttling will be triggered. This can potentially impact your business operations. Therefore, we recommend that you take note of this limit when making calls to this operation.
     *   *
     * @param SendMessageToGlobeRequest $request SendMessageToGlobeRequest
     *
     * @return SendMessageToGlobeResponse SendMessageToGlobeResponse
     */
    public function sendMessageToGlobe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageToGlobeWithOptions($request, $runtime);
    }

    /**
     * ### Usage notes
     *   * You can call the SendMessageWithTemplate operation to send messages only to the Chinese mainland.
     *   *
     * @param SendMessageWithTemplateRequest $request SendMessageWithTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SendMessageWithTemplateResponse SendMessageWithTemplateResponse
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
        if (!Utils::isUnset($request->validityPeriod)) {
            $query['ValidityPeriod'] = $request->validityPeriod;
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
     * ### Usage notes
     *   * You can call the SendMessageWithTemplate operation to send messages only to the Chinese mainland.
     *   *
     * @param SendMessageWithTemplateRequest $request SendMessageWithTemplateRequest
     *
     * @return SendMessageWithTemplateResponse SendMessageWithTemplateResponse
     */
    public function sendMessageWithTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageWithTemplateWithOptions($request, $runtime);
    }

    /**
     * Metrics:
     *   * *   Requested OTP messages
     *   * *   Verified OTP messages
     *   * An OTP conversion rate is calculated based on the following formula: OTP conversion rate = Number of verified OTP messages/Number of requested OTP messages.
     *   * > If you call the SmsConversion operation to query OTP conversion rates, your business may be affected. We recommend that you perform the following operations:
     *   * > * Call the SmsConversion operation in an asynchronous manner by configuring queues or events.
     *   * > * Manually degrade your services or use a circuit breaker to automatically degrade services.
     *   *
     * @param SmsConversionRequest $request SmsConversionRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SmsConversionResponse SmsConversionResponse
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
     * Metrics:
     *   * *   Requested OTP messages
     *   * *   Verified OTP messages
     *   * An OTP conversion rate is calculated based on the following formula: OTP conversion rate = Number of verified OTP messages/Number of requested OTP messages.
     *   * > If you call the SmsConversion operation to query OTP conversion rates, your business may be affected. We recommend that you perform the following operations:
     *   * > * Call the SmsConversion operation in an asynchronous manner by configuring queues or events.
     *   * > * Manually degrade your services or use a circuit breaker to automatically degrade services.
     *   *
     * @param SmsConversionRequest $request SmsConversionRequest
     *
     * @return SmsConversionResponse SmsConversionResponse
     */
    public function smsConversion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smsConversionWithOptions($request, $runtime);
    }
}
