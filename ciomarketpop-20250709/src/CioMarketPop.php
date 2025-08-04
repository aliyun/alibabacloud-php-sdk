<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CioMarketPop\V20250709;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CioMarketPop\V20250709\Models\GetEveryOneSellsFormListRequest;
use AlibabaCloud\SDK\CioMarketPop\V20250709\Models\GetEveryOneSellsFormListResponse;
use AlibabaCloud\SDK\CioMarketPop\V20250709\Models\PushEveryOneSellMsgRequest;
use AlibabaCloud\SDK\CioMarketPop\V20250709\Models\PushEveryOneSellMsgResponse;
use AlibabaCloud\SDK\CioMarketPop\V20250709\Models\PushEveryOneSellMsgShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class CioMarketPop extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ciomarketpop', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 全员营销
     *  *
     * @param GetEveryOneSellsFormListRequest $request GetEveryOneSellsFormListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEveryOneSellsFormListResponse GetEveryOneSellsFormListResponse
     */
    public function getEveryOneSellsFormListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEveryOneSellsFormList',
            'version' => '2025-07-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'array',
        ]);

        return GetEveryOneSellsFormListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 全员营销
     *  *
     * @param GetEveryOneSellsFormListRequest $request GetEveryOneSellsFormListRequest
     *
     * @return GetEveryOneSellsFormListResponse GetEveryOneSellsFormListResponse
     */
    public function getEveryOneSellsFormList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEveryOneSellsFormListWithOptions($request, $runtime);
    }

    /**
     * @summary 推送钉钉消息
     *  *
     * @param PushEveryOneSellMsgRequest $tmpReq  PushEveryOneSellMsgRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return PushEveryOneSellMsgResponse PushEveryOneSellMsgResponse
     */
    public function pushEveryOneSellMsgWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PushEveryOneSellMsgShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dingIdList)) {
            $request->dingIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dingIdList, 'DingIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dingIdListShrink)) {
            $body['DingIdList'] = $request->dingIdListShrink;
        }
        if (!Utils::isUnset($request->pushMsg)) {
            $body['PushMsg'] = $request->pushMsg;
        }
        if (!Utils::isUnset($request->pushType)) {
            $body['PushType'] = $request->pushType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushEveryOneSellMsg',
            'version' => '2025-07-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'string',
        ]);

        return PushEveryOneSellMsgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 推送钉钉消息
     *  *
     * @param PushEveryOneSellMsgRequest $request PushEveryOneSellMsgRequest
     *
     * @return PushEveryOneSellMsgResponse PushEveryOneSellMsgResponse
     */
    public function pushEveryOneSellMsg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushEveryOneSellMsgWithOptions($request, $runtime);
    }
}
