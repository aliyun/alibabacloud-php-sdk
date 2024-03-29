<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CancelByMsgIdRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CancelByMsgIdResponse
     */
    public function cancelByMsgIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->msgId)) {
            $body['MsgId'] = $request->msgId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelByMsgId',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/CancelByMsgId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelByMsgIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryMsgStatRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMsgStatResponse
     */
    public function queryMsgStatWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->msgId)) {
            $body['MsgId'] = $request->msgId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMsgStat',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/QueryMsgStat',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMsgStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SendByAliasRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SendByAliasResponse
     */
    public function sendByAliasWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendByAliasShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->androidPayload)) {
            $request->androidPayloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->androidPayload, 'AndroidPayload', 'json');
        }
        if (!Utils::isUnset($tmpReq->channelProperties)) {
            $request->channelPropertiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->channelProperties, 'ChannelProperties', 'json');
        }
        if (!Utils::isUnset($tmpReq->iosPayload)) {
            $request->iosPayloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->iosPayload, 'IosPayload', 'json');
        }
        if (!Utils::isUnset($tmpReq->policy)) {
            $request->policyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->alias)) {
            $body['Alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->aliasType)) {
            $body['AliasType'] = $request->aliasType;
        }
        if (!Utils::isUnset($request->androidPayloadShrink)) {
            $body['AndroidPayload'] = $request->androidPayloadShrink;
        }
        if (!Utils::isUnset($request->channelPropertiesShrink)) {
            $body['ChannelProperties'] = $request->channelPropertiesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->iosPayloadShrink)) {
            $body['IosPayload'] = $request->iosPayloadShrink;
        }
        if (!Utils::isUnset($request->policyShrink)) {
            $body['Policy'] = $request->policyShrink;
        }
        if (!Utils::isUnset($request->productionMode)) {
            $body['ProductionMode'] = $request->productionMode;
        }
        if (!Utils::isUnset($request->receiptType)) {
            $body['ReceiptType'] = $request->receiptType;
        }
        if (!Utils::isUnset($request->receiptUrl)) {
            $body['ReceiptUrl'] = $request->receiptUrl;
        }
        if (!Utils::isUnset($request->thirdPartyId)) {
            $body['ThirdPartyId'] = $request->thirdPartyId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendByAlias',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/SendByAlias',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendByAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SendByAliasFileIdRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return SendByAliasFileIdResponse
     */
    public function sendByAliasFileIdWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendByAliasFileIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->androidPayload)) {
            $request->androidPayloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->androidPayload, 'AndroidPayload', 'json');
        }
        if (!Utils::isUnset($tmpReq->channelProperties)) {
            $request->channelPropertiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->channelProperties, 'ChannelProperties', 'json');
        }
        if (!Utils::isUnset($tmpReq->iosPayload)) {
            $request->iosPayloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->iosPayload, 'IosPayload', 'json');
        }
        if (!Utils::isUnset($tmpReq->policy)) {
            $request->policyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->aliasType)) {
            $body['AliasType'] = $request->aliasType;
        }
        if (!Utils::isUnset($request->androidPayloadShrink)) {
            $body['AndroidPayload'] = $request->androidPayloadShrink;
        }
        if (!Utils::isUnset($request->channelPropertiesShrink)) {
            $body['ChannelProperties'] = $request->channelPropertiesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->iosPayloadShrink)) {
            $body['IosPayload'] = $request->iosPayloadShrink;
        }
        if (!Utils::isUnset($request->policyShrink)) {
            $body['Policy'] = $request->policyShrink;
        }
        if (!Utils::isUnset($request->productionMode)) {
            $body['ProductionMode'] = $request->productionMode;
        }
        if (!Utils::isUnset($request->receiptType)) {
            $body['ReceiptType'] = $request->receiptType;
        }
        if (!Utils::isUnset($request->receiptUrl)) {
            $body['ReceiptUrl'] = $request->receiptUrl;
        }
        if (!Utils::isUnset($request->thirdPartyId)) {
            $body['ThirdPartyId'] = $request->thirdPartyId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendByAliasFileId',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/SendByAliasFileId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendByAliasFileIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SendByAppRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return SendByAppResponse
     */
    public function sendByAppWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendByAppShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->androidPayload)) {
            $request->androidPayloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->androidPayload, 'AndroidPayload', 'json');
        }
        if (!Utils::isUnset($tmpReq->channelProperties)) {
            $request->channelPropertiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->channelProperties, 'ChannelProperties', 'json');
        }
        if (!Utils::isUnset($tmpReq->iosPayload)) {
            $request->iosPayloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->iosPayload, 'IosPayload', 'json');
        }
        if (!Utils::isUnset($tmpReq->policy)) {
            $request->policyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->androidPayloadShrink)) {
            $body['AndroidPayload'] = $request->androidPayloadShrink;
        }
        if (!Utils::isUnset($request->channelPropertiesShrink)) {
            $body['ChannelProperties'] = $request->channelPropertiesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->iosPayloadShrink)) {
            $body['IosPayload'] = $request->iosPayloadShrink;
        }
        if (!Utils::isUnset($request->policyShrink)) {
            $body['Policy'] = $request->policyShrink;
        }
        if (!Utils::isUnset($request->productionMode)) {
            $body['ProductionMode'] = $request->productionMode;
        }
        if (!Utils::isUnset($request->receiptType)) {
            $body['ReceiptType'] = $request->receiptType;
        }
        if (!Utils::isUnset($request->receiptUrl)) {
            $body['ReceiptUrl'] = $request->receiptUrl;
        }
        if (!Utils::isUnset($request->thirdPartyId)) {
            $body['ThirdPartyId'] = $request->thirdPartyId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendByApp',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/SendByApp',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SendByDeviceRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return SendByDeviceResponse
     */
    public function sendByDeviceWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendByDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->androidPayload)) {
            $request->androidPayloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->androidPayload, 'AndroidPayload', 'json');
        }
        if (!Utils::isUnset($tmpReq->channelProperties)) {
            $request->channelPropertiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->channelProperties, 'ChannelProperties', 'json');
        }
        if (!Utils::isUnset($tmpReq->iosPayload)) {
            $request->iosPayloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->iosPayload, 'IosPayload', 'json');
        }
        if (!Utils::isUnset($tmpReq->policy)) {
            $request->policyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->androidPayloadShrink)) {
            $body['AndroidPayload'] = $request->androidPayloadShrink;
        }
        if (!Utils::isUnset($request->channelPropertiesShrink)) {
            $body['ChannelProperties'] = $request->channelPropertiesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->deviceTokens)) {
            $body['DeviceTokens'] = $request->deviceTokens;
        }
        if (!Utils::isUnset($request->iosPayloadShrink)) {
            $body['IosPayload'] = $request->iosPayloadShrink;
        }
        if (!Utils::isUnset($request->policyShrink)) {
            $body['Policy'] = $request->policyShrink;
        }
        if (!Utils::isUnset($request->productionMode)) {
            $body['ProductionMode'] = $request->productionMode;
        }
        if (!Utils::isUnset($request->receiptType)) {
            $body['ReceiptType'] = $request->receiptType;
        }
        if (!Utils::isUnset($request->receiptUrl)) {
            $body['ReceiptUrl'] = $request->receiptUrl;
        }
        if (!Utils::isUnset($request->thirdPartyId)) {
            $body['ThirdPartyId'] = $request->thirdPartyId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendByDevice',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/SendByDevice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SendByDeviceFileIdRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SendByDeviceFileIdResponse
     */
    public function sendByDeviceFileIdWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendByDeviceFileIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->androidPayload)) {
            $request->androidPayloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->androidPayload, 'AndroidPayload', 'json');
        }
        if (!Utils::isUnset($tmpReq->channelProperties)) {
            $request->channelPropertiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->channelProperties, 'ChannelProperties', 'json');
        }
        if (!Utils::isUnset($tmpReq->iosPayload)) {
            $request->iosPayloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->iosPayload, 'IosPayload', 'json');
        }
        if (!Utils::isUnset($tmpReq->policy)) {
            $request->policyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->androidPayloadShrink)) {
            $body['AndroidPayload'] = $request->androidPayloadShrink;
        }
        if (!Utils::isUnset($request->channelPropertiesShrink)) {
            $body['ChannelProperties'] = $request->channelPropertiesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->iosPayloadShrink)) {
            $body['IosPayload'] = $request->iosPayloadShrink;
        }
        if (!Utils::isUnset($request->policyShrink)) {
            $body['Policy'] = $request->policyShrink;
        }
        if (!Utils::isUnset($request->productionMode)) {
            $body['ProductionMode'] = $request->productionMode;
        }
        if (!Utils::isUnset($request->receiptType)) {
            $body['ReceiptType'] = $request->receiptType;
        }
        if (!Utils::isUnset($request->receiptUrl)) {
            $body['ReceiptUrl'] = $request->receiptUrl;
        }
        if (!Utils::isUnset($request->thirdPartyId)) {
            $body['ThirdPartyId'] = $request->thirdPartyId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendByDeviceFileId',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/SendByDeviceFileId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendByDeviceFileIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SendByFilterRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return SendByFilterResponse
     */
    public function sendByFilterWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendByFilterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->androidPayload)) {
            $request->androidPayloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->androidPayload, 'AndroidPayload', 'json');
        }
        if (!Utils::isUnset($tmpReq->channelProperties)) {
            $request->channelPropertiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->channelProperties, 'ChannelProperties', 'json');
        }
        if (!Utils::isUnset($tmpReq->iosPayload)) {
            $request->iosPayloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->iosPayload, 'IosPayload', 'json');
        }
        if (!Utils::isUnset($tmpReq->policy)) {
            $request->policyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->androidPayloadShrink)) {
            $body['AndroidPayload'] = $request->androidPayloadShrink;
        }
        if (!Utils::isUnset($request->channelPropertiesShrink)) {
            $body['ChannelProperties'] = $request->channelPropertiesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->filter)) {
            $body['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->iosPayloadShrink)) {
            $body['IosPayload'] = $request->iosPayloadShrink;
        }
        if (!Utils::isUnset($request->policyShrink)) {
            $body['Policy'] = $request->policyShrink;
        }
        if (!Utils::isUnset($request->productionMode)) {
            $body['ProductionMode'] = $request->productionMode;
        }
        if (!Utils::isUnset($request->receiptType)) {
            $body['ReceiptType'] = $request->receiptType;
        }
        if (!Utils::isUnset($request->receiptUrl)) {
            $body['ReceiptUrl'] = $request->receiptUrl;
        }
        if (!Utils::isUnset($request->thirdPartyId)) {
            $body['ThirdPartyId'] = $request->thirdPartyId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendByFilter',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/SendByFilter',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendByFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UploadDeviceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UploadDeviceResponse
     */
    public function uploadDeviceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deviceTokens)) {
            $body['DeviceTokens'] = $request->deviceTokens;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadDevice',
            'version'     => '2022-02-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/UploadDevice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
