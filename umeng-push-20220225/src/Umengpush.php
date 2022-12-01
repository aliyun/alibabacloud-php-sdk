<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAppRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAppResponse;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByAppShrinkRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByDeviceRequest;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByDeviceResponse;
use AlibabaCloud\SDK\Umengpush\V20220225\Models\SendByDeviceShrinkRequest;
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
}
