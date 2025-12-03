<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CioMarketPop\V20250709;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\CioMarketPop\V20250709\Models\GetEveryOneSellsFormListRequest;
use AlibabaCloud\SDK\CioMarketPop\V20250709\Models\GetEveryOneSellsFormListResponse;
use AlibabaCloud\SDK\CioMarketPop\V20250709\Models\PushEveryOneSellMsgRequest;
use AlibabaCloud\SDK\CioMarketPop\V20250709\Models\PushEveryOneSellMsgResponse;
use AlibabaCloud\SDK\CioMarketPop\V20250709\Models\PushEveryOneSellMsgShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class CioMarketPop extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 全员营销
     *
     * @param request - GetEveryOneSellsFormListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEveryOneSellsFormListResponse
     *
     * @param GetEveryOneSellsFormListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetEveryOneSellsFormListResponse
     */
    public function getEveryOneSellsFormListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetEveryOneSellsFormListResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 全员营销
     *
     * @param request - GetEveryOneSellsFormListRequest
     *
     * @returns GetEveryOneSellsFormListResponse
     *
     * @param GetEveryOneSellsFormListRequest $request
     *
     * @return GetEveryOneSellsFormListResponse
     */
    public function getEveryOneSellsFormList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEveryOneSellsFormListWithOptions($request, $runtime);
    }

    /**
     * 推送钉钉消息.
     *
     * @param tmpReq - PushEveryOneSellMsgRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushEveryOneSellMsgResponse
     *
     * @param PushEveryOneSellMsgRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return PushEveryOneSellMsgResponse
     */
    public function pushEveryOneSellMsgWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PushEveryOneSellMsgShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dingIdList) {
            $request->dingIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dingIdList, 'DingIdList', 'json');
        }

        $body = [];
        if (null !== $request->dingIdListShrink) {
            @$body['DingIdList'] = $request->dingIdListShrink;
        }

        if (null !== $request->pushMsg) {
            @$body['PushMsg'] = $request->pushMsg;
        }

        if (null !== $request->pushType) {
            @$body['PushType'] = $request->pushType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return PushEveryOneSellMsgResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 推送钉钉消息.
     *
     * @param request - PushEveryOneSellMsgRequest
     *
     * @returns PushEveryOneSellMsgResponse
     *
     * @param PushEveryOneSellMsgRequest $request
     *
     * @return PushEveryOneSellMsgResponse
     */
    public function pushEveryOneSellMsg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushEveryOneSellMsgWithOptions($request, $runtime);
    }
}
