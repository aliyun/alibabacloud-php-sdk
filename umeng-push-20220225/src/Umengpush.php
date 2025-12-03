<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\CancelByMsgIdRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\CancelByMsgIdResponse;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\QueryMsgStatRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\QueryMsgStatResponse;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAliasFileIdRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAliasFileIdResponse;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAliasFileIdShrinkRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAliasRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAliasResponse;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAliasShrinkRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAppRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAppResponse;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAppShrinkRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByDeviceFileIdRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByDeviceFileIdResponse;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByDeviceFileIdShrinkRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByDeviceRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByDeviceResponse;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByDeviceShrinkRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByFilterRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByFilterResponse;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByFilterShrinkRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\UploadDeviceRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\UploadDeviceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Umengpush extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('umeng-push', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 根据消息ID取消发送
     *
     * @param request - CancelByMsgIdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelByMsgIdResponse
     *
     * @param CancelByMsgIdRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CancelByMsgIdResponse
     */
    public function cancelByMsgIdWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->msgId) {
            @$body['MsgId'] = $request->msgId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelByMsgId',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/CancelByMsgId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelByMsgIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据消息ID取消发送
     *
     * @param request - CancelByMsgIdRequest
     *
     * @returns CancelByMsgIdResponse
     *
     * @param CancelByMsgIdRequest $request
     *
     * @return CancelByMsgIdResponse
     */
    public function cancelByMsgId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelByMsgIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 消息状态查询.
     *
     * @param request - QueryMsgStatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMsgStatResponse
     *
     * @param QueryMsgStatRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMsgStatResponse
     */
    public function queryMsgStatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->msgId) {
            @$body['MsgId'] = $request->msgId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMsgStat',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/QueryMsgStat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMsgStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 消息状态查询.
     *
     * @param request - QueryMsgStatRequest
     *
     * @returns QueryMsgStatResponse
     *
     * @param QueryMsgStatRequest $request
     *
     * @return QueryMsgStatResponse
     */
    public function queryMsgStat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryMsgStatWithOptions($request, $headers, $runtime);
    }

    /**
     * 指定别名发送
     *
     * @param tmpReq - SendByAliasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendByAliasResponse
     *
     * @param SendByAliasRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SendByAliasResponse
     */
    public function sendByAliasWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SendByAliasShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->androidPayload) {
            $request->androidPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidPayload, 'AndroidPayload', 'json');
        }

        if (null !== $tmpReq->androidShortPayload) {
            $request->androidShortPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidShortPayload, 'AndroidShortPayload', 'json');
        }

        if (null !== $tmpReq->channelProperties) {
            $request->channelPropertiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->channelProperties, 'ChannelProperties', 'json');
        }

        if (null !== $tmpReq->harmonyPayload) {
            $request->harmonyPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->harmonyPayload, 'HarmonyPayload', 'json');
        }

        if (null !== $tmpReq->iosPayload) {
            $request->iosPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->iosPayload, 'IosPayload', 'json');
        }

        if (null !== $tmpReq->policy) {
            $request->policyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }

        $body = [];
        if (null !== $request->alias) {
            @$body['Alias'] = $request->alias;
        }

        if (null !== $request->aliasType) {
            @$body['AliasType'] = $request->aliasType;
        }

        if (null !== $request->androidPayloadShrink) {
            @$body['AndroidPayload'] = $request->androidPayloadShrink;
        }

        if (null !== $request->androidShortPayloadShrink) {
            @$body['AndroidShortPayload'] = $request->androidShortPayloadShrink;
        }

        if (null !== $request->channelPropertiesShrink) {
            @$body['ChannelProperties'] = $request->channelPropertiesShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->harmonyPayloadShrink) {
            @$body['HarmonyPayload'] = $request->harmonyPayloadShrink;
        }

        if (null !== $request->iosPayloadShrink) {
            @$body['IosPayload'] = $request->iosPayloadShrink;
        }

        if (null !== $request->policyShrink) {
            @$body['Policy'] = $request->policyShrink;
        }

        if (null !== $request->productionMode) {
            @$body['ProductionMode'] = $request->productionMode;
        }

        if (null !== $request->receiptType) {
            @$body['ReceiptType'] = $request->receiptType;
        }

        if (null !== $request->receiptUrl) {
            @$body['ReceiptUrl'] = $request->receiptUrl;
        }

        if (null !== $request->thirdPartyId) {
            @$body['ThirdPartyId'] = $request->thirdPartyId;
        }

        if (null !== $request->callbackParams) {
            @$body['callbackParams'] = $request->callbackParams;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendByAlias',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/SendByAlias',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendByAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 指定别名发送
     *
     * @param request - SendByAliasRequest
     *
     * @returns SendByAliasResponse
     *
     * @param SendByAliasRequest $request
     *
     * @return SendByAliasResponse
     */
    public function sendByAlias($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendByAliasWithOptions($request, $headers, $runtime);
    }

    /**
     * 指定别名文件发送
     *
     * @param tmpReq - SendByAliasFileIdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendByAliasFileIdResponse
     *
     * @param SendByAliasFileIdRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return SendByAliasFileIdResponse
     */
    public function sendByAliasFileIdWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SendByAliasFileIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->androidPayload) {
            $request->androidPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidPayload, 'AndroidPayload', 'json');
        }

        if (null !== $tmpReq->androidShortPayload) {
            $request->androidShortPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidShortPayload, 'AndroidShortPayload', 'json');
        }

        if (null !== $tmpReq->channelProperties) {
            $request->channelPropertiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->channelProperties, 'ChannelProperties', 'json');
        }

        if (null !== $tmpReq->harmonyPayload) {
            $request->harmonyPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->harmonyPayload, 'HarmonyPayload', 'json');
        }

        if (null !== $tmpReq->iosPayload) {
            $request->iosPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->iosPayload, 'IosPayload', 'json');
        }

        if (null !== $tmpReq->policy) {
            $request->policyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }

        $body = [];
        if (null !== $request->aliasType) {
            @$body['AliasType'] = $request->aliasType;
        }

        if (null !== $request->androidPayloadShrink) {
            @$body['AndroidPayload'] = $request->androidPayloadShrink;
        }

        if (null !== $request->androidShortPayloadShrink) {
            @$body['AndroidShortPayload'] = $request->androidShortPayloadShrink;
        }

        if (null !== $request->channelPropertiesShrink) {
            @$body['ChannelProperties'] = $request->channelPropertiesShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->fileId) {
            @$body['FileId'] = $request->fileId;
        }

        if (null !== $request->harmonyPayloadShrink) {
            @$body['HarmonyPayload'] = $request->harmonyPayloadShrink;
        }

        if (null !== $request->iosPayloadShrink) {
            @$body['IosPayload'] = $request->iosPayloadShrink;
        }

        if (null !== $request->policyShrink) {
            @$body['Policy'] = $request->policyShrink;
        }

        if (null !== $request->productionMode) {
            @$body['ProductionMode'] = $request->productionMode;
        }

        if (null !== $request->receiptType) {
            @$body['ReceiptType'] = $request->receiptType;
        }

        if (null !== $request->receiptUrl) {
            @$body['ReceiptUrl'] = $request->receiptUrl;
        }

        if (null !== $request->thirdPartyId) {
            @$body['ThirdPartyId'] = $request->thirdPartyId;
        }

        if (null !== $request->callbackParams) {
            @$body['callbackParams'] = $request->callbackParams;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendByAliasFileId',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/SendByAliasFileId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendByAliasFileIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 指定别名文件发送
     *
     * @param request - SendByAliasFileIdRequest
     *
     * @returns SendByAliasFileIdResponse
     *
     * @param SendByAliasFileIdRequest $request
     *
     * @return SendByAliasFileIdResponse
     */
    public function sendByAliasFileId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendByAliasFileIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 广播.
     *
     * @param tmpReq - SendByAppRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendByAppResponse
     *
     * @param SendByAppRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return SendByAppResponse
     */
    public function sendByAppWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SendByAppShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->androidPayload) {
            $request->androidPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidPayload, 'AndroidPayload', 'json');
        }

        if (null !== $tmpReq->androidShortPayload) {
            $request->androidShortPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidShortPayload, 'AndroidShortPayload', 'json');
        }

        if (null !== $tmpReq->channelProperties) {
            $request->channelPropertiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->channelProperties, 'ChannelProperties', 'json');
        }

        if (null !== $tmpReq->harmonyPayload) {
            $request->harmonyPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->harmonyPayload, 'HarmonyPayload', 'json');
        }

        if (null !== $tmpReq->iosPayload) {
            $request->iosPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->iosPayload, 'IosPayload', 'json');
        }

        if (null !== $tmpReq->policy) {
            $request->policyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }

        $body = [];
        if (null !== $request->androidPayloadShrink) {
            @$body['AndroidPayload'] = $request->androidPayloadShrink;
        }

        if (null !== $request->androidShortPayloadShrink) {
            @$body['AndroidShortPayload'] = $request->androidShortPayloadShrink;
        }

        if (null !== $request->channelPropertiesShrink) {
            @$body['ChannelProperties'] = $request->channelPropertiesShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->harmonyPayloadShrink) {
            @$body['HarmonyPayload'] = $request->harmonyPayloadShrink;
        }

        if (null !== $request->iosPayloadShrink) {
            @$body['IosPayload'] = $request->iosPayloadShrink;
        }

        if (null !== $request->policyShrink) {
            @$body['Policy'] = $request->policyShrink;
        }

        if (null !== $request->productionMode) {
            @$body['ProductionMode'] = $request->productionMode;
        }

        if (null !== $request->receiptType) {
            @$body['ReceiptType'] = $request->receiptType;
        }

        if (null !== $request->receiptUrl) {
            @$body['ReceiptUrl'] = $request->receiptUrl;
        }

        if (null !== $request->thirdPartyId) {
            @$body['ThirdPartyId'] = $request->thirdPartyId;
        }

        if (null !== $request->callbackParams) {
            @$body['callbackParams'] = $request->callbackParams;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendByApp',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/SendByApp',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 广播.
     *
     * @param request - SendByAppRequest
     *
     * @returns SendByAppResponse
     *
     * @param SendByAppRequest $request
     *
     * @return SendByAppResponse
     */
    public function sendByApp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendByAppWithOptions($request, $headers, $runtime);
    }

    /**
     * 指定设备发送
     *
     * @param tmpReq - SendByDeviceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendByDeviceResponse
     *
     * @param SendByDeviceRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return SendByDeviceResponse
     */
    public function sendByDeviceWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SendByDeviceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->androidPayload) {
            $request->androidPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidPayload, 'AndroidPayload', 'json');
        }

        if (null !== $tmpReq->androidShortPayload) {
            $request->androidShortPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidShortPayload, 'AndroidShortPayload', 'json');
        }

        if (null !== $tmpReq->channelProperties) {
            $request->channelPropertiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->channelProperties, 'ChannelProperties', 'json');
        }

        if (null !== $tmpReq->harmonyPayload) {
            $request->harmonyPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->harmonyPayload, 'HarmonyPayload', 'json');
        }

        if (null !== $tmpReq->iosPayload) {
            $request->iosPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->iosPayload, 'IosPayload', 'json');
        }

        if (null !== $tmpReq->policy) {
            $request->policyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }

        $body = [];
        if (null !== $request->androidPayloadShrink) {
            @$body['AndroidPayload'] = $request->androidPayloadShrink;
        }

        if (null !== $request->androidShortPayloadShrink) {
            @$body['AndroidShortPayload'] = $request->androidShortPayloadShrink;
        }

        if (null !== $request->channelPropertiesShrink) {
            @$body['ChannelProperties'] = $request->channelPropertiesShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->deviceTokens) {
            @$body['DeviceTokens'] = $request->deviceTokens;
        }

        if (null !== $request->harmonyPayloadShrink) {
            @$body['HarmonyPayload'] = $request->harmonyPayloadShrink;
        }

        if (null !== $request->iosPayloadShrink) {
            @$body['IosPayload'] = $request->iosPayloadShrink;
        }

        if (null !== $request->policyShrink) {
            @$body['Policy'] = $request->policyShrink;
        }

        if (null !== $request->productionMode) {
            @$body['ProductionMode'] = $request->productionMode;
        }

        if (null !== $request->receiptType) {
            @$body['ReceiptType'] = $request->receiptType;
        }

        if (null !== $request->receiptUrl) {
            @$body['ReceiptUrl'] = $request->receiptUrl;
        }

        if (null !== $request->thirdPartyId) {
            @$body['ThirdPartyId'] = $request->thirdPartyId;
        }

        if (null !== $request->callbackParams) {
            @$body['callbackParams'] = $request->callbackParams;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendByDevice',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/SendByDevice',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 指定设备发送
     *
     * @param request - SendByDeviceRequest
     *
     * @returns SendByDeviceResponse
     *
     * @param SendByDeviceRequest $request
     *
     * @return SendByDeviceResponse
     */
    public function sendByDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendByDeviceWithOptions($request, $headers, $runtime);
    }

    /**
     * 指定设备文件发送
     *
     * @param tmpReq - SendByDeviceFileIdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendByDeviceFileIdResponse
     *
     * @param SendByDeviceFileIdRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SendByDeviceFileIdResponse
     */
    public function sendByDeviceFileIdWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SendByDeviceFileIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->androidPayload) {
            $request->androidPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidPayload, 'AndroidPayload', 'json');
        }

        if (null !== $tmpReq->androidShortPayload) {
            $request->androidShortPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidShortPayload, 'AndroidShortPayload', 'json');
        }

        if (null !== $tmpReq->channelProperties) {
            $request->channelPropertiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->channelProperties, 'ChannelProperties', 'json');
        }

        if (null !== $tmpReq->harmonyPayload) {
            $request->harmonyPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->harmonyPayload, 'HarmonyPayload', 'json');
        }

        if (null !== $tmpReq->iosPayload) {
            $request->iosPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->iosPayload, 'IosPayload', 'json');
        }

        if (null !== $tmpReq->policy) {
            $request->policyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }

        $body = [];
        if (null !== $request->androidPayloadShrink) {
            @$body['AndroidPayload'] = $request->androidPayloadShrink;
        }

        if (null !== $request->androidShortPayloadShrink) {
            @$body['AndroidShortPayload'] = $request->androidShortPayloadShrink;
        }

        if (null !== $request->channelPropertiesShrink) {
            @$body['ChannelProperties'] = $request->channelPropertiesShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->fileId) {
            @$body['FileId'] = $request->fileId;
        }

        if (null !== $request->harmonyPayloadShrink) {
            @$body['HarmonyPayload'] = $request->harmonyPayloadShrink;
        }

        if (null !== $request->iosPayloadShrink) {
            @$body['IosPayload'] = $request->iosPayloadShrink;
        }

        if (null !== $request->policyShrink) {
            @$body['Policy'] = $request->policyShrink;
        }

        if (null !== $request->productionMode) {
            @$body['ProductionMode'] = $request->productionMode;
        }

        if (null !== $request->receiptType) {
            @$body['ReceiptType'] = $request->receiptType;
        }

        if (null !== $request->receiptUrl) {
            @$body['ReceiptUrl'] = $request->receiptUrl;
        }

        if (null !== $request->thirdPartyId) {
            @$body['ThirdPartyId'] = $request->thirdPartyId;
        }

        if (null !== $request->callbackParams) {
            @$body['callbackParams'] = $request->callbackParams;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendByDeviceFileId',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/SendByDeviceFileId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendByDeviceFileIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 指定设备文件发送
     *
     * @param request - SendByDeviceFileIdRequest
     *
     * @returns SendByDeviceFileIdResponse
     *
     * @param SendByDeviceFileIdRequest $request
     *
     * @return SendByDeviceFileIdResponse
     */
    public function sendByDeviceFileId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendByDeviceFileIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 根据筛选条件发送
     *
     * @param tmpReq - SendByFilterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendByFilterResponse
     *
     * @param SendByFilterRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return SendByFilterResponse
     */
    public function sendByFilterWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SendByFilterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->androidPayload) {
            $request->androidPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidPayload, 'AndroidPayload', 'json');
        }

        if (null !== $tmpReq->channelProperties) {
            $request->channelPropertiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->channelProperties, 'ChannelProperties', 'json');
        }

        if (null !== $tmpReq->harmonyPayload) {
            $request->harmonyPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->harmonyPayload, 'HarmonyPayload', 'json');
        }

        if (null !== $tmpReq->iosPayload) {
            $request->iosPayloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->iosPayload, 'IosPayload', 'json');
        }

        if (null !== $tmpReq->policy) {
            $request->policyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }

        $body = [];
        if (null !== $request->androidPayloadShrink) {
            @$body['AndroidPayload'] = $request->androidPayloadShrink;
        }

        if (null !== $request->androidShortPayload) {
            @$body['AndroidShortPayload'] = $request->androidShortPayload;
        }

        if (null !== $request->channelPropertiesShrink) {
            @$body['ChannelProperties'] = $request->channelPropertiesShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->harmonyPayloadShrink) {
            @$body['HarmonyPayload'] = $request->harmonyPayloadShrink;
        }

        if (null !== $request->iosPayloadShrink) {
            @$body['IosPayload'] = $request->iosPayloadShrink;
        }

        if (null !== $request->policyShrink) {
            @$body['Policy'] = $request->policyShrink;
        }

        if (null !== $request->productionMode) {
            @$body['ProductionMode'] = $request->productionMode;
        }

        if (null !== $request->receiptType) {
            @$body['ReceiptType'] = $request->receiptType;
        }

        if (null !== $request->receiptUrl) {
            @$body['ReceiptUrl'] = $request->receiptUrl;
        }

        if (null !== $request->thirdPartyId) {
            @$body['ThirdPartyId'] = $request->thirdPartyId;
        }

        if (null !== $request->callbackParams) {
            @$body['callbackParams'] = $request->callbackParams;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendByFilter',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/SendByFilter',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendByFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据筛选条件发送
     *
     * @param request - SendByFilterRequest
     *
     * @returns SendByFilterResponse
     *
     * @param SendByFilterRequest $request
     *
     * @return SendByFilterResponse
     */
    public function sendByFilter($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendByFilterWithOptions($request, $headers, $runtime);
    }

    /**
     * 上传设备列表创建设备文件.
     *
     * @param request - UploadDeviceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadDeviceResponse
     *
     * @param UploadDeviceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UploadDeviceResponse
     */
    public function uploadDeviceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceTokens) {
            @$body['DeviceTokens'] = $request->deviceTokens;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadDevice',
            'version' => '2022-02-25',
            'protocol' => 'HTTPS',
            'pathname' => '/UploadDevice',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传设备列表创建设备文件.
     *
     * @param request - UploadDeviceRequest
     *
     * @returns UploadDeviceResponse
     *
     * @param UploadDeviceRequest $request
     *
     * @return UploadDeviceResponse
     */
    public function uploadDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadDeviceWithOptions($request, $headers, $runtime);
    }
}
