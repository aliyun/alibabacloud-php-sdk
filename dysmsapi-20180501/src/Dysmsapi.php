<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dysmsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap = [
            'ap-southeast-1' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'dysmsapi.ap-southeast-5.aliyuncs.com',
            'cn-beijing' => 'dysmsapi-proxy.cn-beijing.aliyuncs.com',
            'cn-hongkong' => 'dysmsapi-xman.cn-hongkong.aliyuncs.com',
            'eu-central-1' => 'dysmsapi.eu-central-1.aliyuncs.com',
            'us-east-1' => 'dysmsapi.us-east-1.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Sends a message to multiple recipients in countries or regions outside the Chinese mainland.
     *
     * @remarks
     * ## Usage notes
     * *   You cannot call the BatchSendMessageToGlobe operation to send messages to the Chinese mainland.
     * *   You can call the BatchSendMessageToGlobe operation to send notifications and promotional messages to a small number of mobile phone numbers at a time. To send messages to a large number of mobile phone numbers at a time, use the mass messaging feature of the SMS console.
     * *   To ensure that messages can be sent on time, call the [SendMessageToGlobe](https://help.aliyun.com/document_detail/406238.html) operation.
     * *   In each request, you can send messages to up to 1,000 mobile phone numbers.
     *
     * @param request - BatchSendMessageToGlobeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSendMessageToGlobeResponse
     *
     * @param BatchSendMessageToGlobeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchSendMessageToGlobeResponse
     */
    public function batchSendMessageToGlobeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->to) {
            @$query['To'] = $request->to;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->validityPeriod) {
            @$query['ValidityPeriod'] = $request->validityPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchSendMessageToGlobe',
            'version' => '2018-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchSendMessageToGlobeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a message to multiple recipients in countries or regions outside the Chinese mainland.
     *
     * @remarks
     * ## Usage notes
     * *   You cannot call the BatchSendMessageToGlobe operation to send messages to the Chinese mainland.
     * *   You can call the BatchSendMessageToGlobe operation to send notifications and promotional messages to a small number of mobile phone numbers at a time. To send messages to a large number of mobile phone numbers at a time, use the mass messaging feature of the SMS console.
     * *   To ensure that messages can be sent on time, call the [SendMessageToGlobe](https://help.aliyun.com/document_detail/406238.html) operation.
     * *   In each request, you can send messages to up to 1,000 mobile phone numbers.
     *
     * @param request - BatchSendMessageToGlobeRequest
     *
     * @returns BatchSendMessageToGlobeResponse
     *
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
     * This API, sends conversion data to the Alibaba SMS service.
     *
     * @remarks
     * Metrics:
     * *   Requested OTP messages
     * *   Verified OTP messages
     * An OTP conversion rate is calculated based on the following formula: OTP conversion rate = Number of verified OTP messages/Number of requested OTP messages.
     *
     * @param request - ConversionDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConversionDataResponse
     *
     * @param ConversionDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ConversionDataResponse
     */
    public function conversionDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conversionRate) {
            @$body['ConversionRate'] = $request->conversionRate;
        }

        if (null !== $request->reportTime) {
            @$body['ReportTime'] = $request->reportTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConversionData',
            'version' => '2018-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConversionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API, sends conversion data to the Alibaba SMS service.
     *
     * @remarks
     * Metrics:
     * *   Requested OTP messages
     * *   Verified OTP messages
     * An OTP conversion rate is calculated based on the following formula: OTP conversion rate = Number of verified OTP messages/Number of requested OTP messages.
     *
     * @param request - ConversionDataRequest
     *
     * @returns ConversionDataResponse
     *
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
     * Queries the delivery report of a message.
     *
     * @remarks
     * ### QPS limit
     * You can call this operation up to 300 times per second. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *
     * @param request - QueryMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMessageResponse
     *
     * @param QueryMessageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMessageResponse
     */
    public function queryMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMessage',
            'version' => '2018-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the delivery report of a message.
     *
     * @remarks
     * ### QPS limit
     * You can call this operation up to 300 times per second. If the number of the calls per second exceeds a limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limits when you call this operation.
     *
     * @param request - QueryMessageRequest
     *
     * @returns QueryMessageResponse
     *
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
     * Sends a message to regions outside the Chinese mainland.
     *
     * @remarks
     * ### [](#)
     * The SendMessageToGlobe API operation does not support message delivery to the Chinese mainland.
     * ### [](#qps-)QPS limit
     * You can call this operation up to 2,000 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *
     * @param request - SendMessageToGlobeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendMessageToGlobeResponse
     *
     * @param SendMessageToGlobeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SendMessageToGlobeResponse
     */
    public function sendMessageToGlobeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->to) {
            @$query['To'] = $request->to;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->validityPeriod) {
            @$query['ValidityPeriod'] = $request->validityPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendMessageToGlobe',
            'version' => '2018-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendMessageToGlobeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a message to regions outside the Chinese mainland.
     *
     * @remarks
     * ### [](#)
     * The SendMessageToGlobe API operation does not support message delivery to the Chinese mainland.
     * ### [](#qps-)QPS limit
     * You can call this operation up to 2,000 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *
     * @param request - SendMessageToGlobeRequest
     *
     * @returns SendMessageToGlobeResponse
     *
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
     * Sends a message to the Chinese mainland by using a message template.
     *
     * @remarks
     * ### Usage notes
     * You can call the SendMessageWithTemplate operation to send messages only to the Chinese mainland.
     *
     * @param request - SendMessageWithTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendMessageWithTemplateResponse
     *
     * @param SendMessageWithTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SendMessageWithTemplateResponse
     */
    public function sendMessageWithTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        if (null !== $request->smsUpExtendCode) {
            @$query['SmsUpExtendCode'] = $request->smsUpExtendCode;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateParam) {
            @$query['TemplateParam'] = $request->templateParam;
        }

        if (null !== $request->to) {
            @$query['To'] = $request->to;
        }

        if (null !== $request->validityPeriod) {
            @$query['ValidityPeriod'] = $request->validityPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendMessageWithTemplate',
            'version' => '2018-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendMessageWithTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a message to the Chinese mainland by using a message template.
     *
     * @remarks
     * ### Usage notes
     * You can call the SendMessageWithTemplate operation to send messages only to the Chinese mainland.
     *
     * @param request - SendMessageWithTemplateRequest
     *
     * @returns SendMessageWithTemplateResponse
     *
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
     * Delivers one-time password (OTP) message statuses to Alibaba Cloud, which calculates and monitors OTP conversion rates.
     *
     * @remarks
     * Metrics:
     * *   Requested OTP messages
     * *   Verified OTP messages
     * An OTP conversion rate is calculated based on the following formula: OTP conversion rate = Number of verified OTP messages/Number of requested OTP messages.
     * > If you call the SmsConversion operation to query OTP conversion rates, your business may be affected. We recommend that you perform the following operations:
     * >*   Call the SmsConversion operation in an asynchronous manner by configuring queues or events.
     * >*   Manually degrade your services or use a circuit breaker to automatically degrade services.
     *
     * @param request - SmsConversionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SmsConversionResponse
     *
     * @param SmsConversionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SmsConversionResponse
     */
    public function smsConversionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversionTime) {
            @$query['ConversionTime'] = $request->conversionTime;
        }

        if (null !== $request->delivered) {
            @$query['Delivered'] = $request->delivered;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        if (null !== $request->to) {
            @$query['To'] = $request->to;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SmsConversion',
            'version' => '2018-05-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SmsConversionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delivers one-time password (OTP) message statuses to Alibaba Cloud, which calculates and monitors OTP conversion rates.
     *
     * @remarks
     * Metrics:
     * *   Requested OTP messages
     * *   Verified OTP messages
     * An OTP conversion rate is calculated based on the following formula: OTP conversion rate = Number of verified OTP messages/Number of requested OTP messages.
     * > If you call the SmsConversion operation to query OTP conversion rates, your business may be affected. We recommend that you perform the following operations:
     * >*   Call the SmsConversion operation in an asynchronous manner by configuring queues or events.
     * >*   Manually degrade your services or use a circuit breaker to automatically degrade services.
     *
     * @param request - SmsConversionRequest
     *
     * @returns SmsConversionResponse
     *
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
