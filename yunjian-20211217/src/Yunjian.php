<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\AcceptFulfillmentDecisionRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\AcceptFulfillmentDecisionResponse;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\CreateDemandPlanHeaders;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\CreateDemandPlanRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\CreateDemandPlanResponse;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\CreateDemandPlanV2Headers;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\CreateDemandPlanV2Request;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\CreateDemandPlanV2Response;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\DeleteUrgentDemandItemHeaders;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\DeleteUrgentDemandItemRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\DeleteUrgentDemandItemResponse;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\DeleteUrgentDemandPlanHeaders;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\DeleteUrgentDemandPlanRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\DeleteUrgentDemandPlanResponse;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\DeliveryItemDetailSynHeaders;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\DeliveryItemDetailSynRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\DeliveryItemDetailSynResponse;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandItemListHeaders;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandItemListRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandItemListResponse;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandPlanDetailHeaders;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandPlanDetailRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandPlanDetailResponse;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandPlanListHeaders;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandPlanListRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandPlanListResponse;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\PushResourcePlanHeaders;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\PushResourcePlanRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\PushResourcePlanResponse;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\QueryDeliveredSupplyItemsRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\QueryDeliveredSupplyItemsResponse;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\QueryPeriodBudgetBillRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\QueryPeriodBudgetBillResponse;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\SaveUrgentDemandItemHeaders;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\SaveUrgentDemandItemRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\SaveUrgentDemandItemResponse;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\SubmitUrgentDemandPlanHeaders;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\SubmitUrgentDemandPlanRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\SubmitUrgentDemandPlanResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Yunjian extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yunjian', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - CreateDemandPlanRequest
     * @param headers - CreateDemandPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDemandPlanResponse
     *
     * @param CreateDemandPlanRequest $request
     * @param CreateDemandPlanHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDemandPlanResponse
     */
    public function createDemandPlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['userId'] = $request->userId;
        }

        $body = [];
        if (null !== $request->accountId) {
            @$body['accountId'] = $request->accountId;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->period) {
            @$body['period'] = $request->period;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->targetCid) {
            @$body['targetCid'] = $request->targetCid;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->yunUserId) {
            @$realHeaders['Yun-User-Id'] = '' . $headers->yunUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDemandPlan',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/demand/urgent/saveUrgentDemandPlanItem',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDemandPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateDemandPlanRequest
     *
     * @returns CreateDemandPlanResponse
     *
     * @param CreateDemandPlanRequest $request
     *
     * @return CreateDemandPlanResponse
     */
    public function createDemandPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDemandPlanHeaders([]);

        return $this->createDemandPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建plan2.0版本.
     *
     * @param request - CreateDemandPlanV2Request
     * @param headers - CreateDemandPlanV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDemandPlanV2Response
     *
     * @param CreateDemandPlanV2Request $request
     * @param CreateDemandPlanV2Headers $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDemandPlanV2Response
     */
    public function createDemandPlanV2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['userId'] = $request->userId;
        }

        $body = [];
        if (null !== $request->accountId) {
            @$body['accountId'] = $request->accountId;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        if (null !== $request->targetCid) {
            @$body['targetCid'] = $request->targetCid;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->yunUserId) {
            @$realHeaders['Yun-User-Id'] = '' . $headers->yunUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDemandPlanV2',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/demand/urgent/saveDemandPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDemandPlanV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建plan2.0版本.
     *
     * @param request - CreateDemandPlanV2Request
     *
     * @returns CreateDemandPlanV2Response
     *
     * @param CreateDemandPlanV2Request $request
     *
     * @return CreateDemandPlanV2Response
     */
    public function createDemandPlanV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDemandPlanV2Headers([]);

        return $this->createDemandPlanV2WithOptions($request, $headers, $runtime);
    }

    /**
     * 紧急需求单ite 删除.
     *
     * @param request - DeleteUrgentDemandItemRequest
     * @param headers - DeleteUrgentDemandItemHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUrgentDemandItemResponse
     *
     * @param DeleteUrgentDemandItemRequest $request
     * @param DeleteUrgentDemandItemHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteUrgentDemandItemResponse
     */
    public function deleteUrgentDemandItemWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->modifier) {
            @$query['modifier'] = $request->modifier;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->yunUserId) {
            @$realHeaders['Yun-User-Id'] = '' . $headers->yunUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUrgentDemandItem',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/demand/urgent/deleteUrgentDemandItem',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUrgentDemandItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 紧急需求单ite 删除.
     *
     * @param request - DeleteUrgentDemandItemRequest
     *
     * @returns DeleteUrgentDemandItemResponse
     *
     * @param DeleteUrgentDemandItemRequest $request
     *
     * @return DeleteUrgentDemandItemResponse
     */
    public function deleteUrgentDemandItem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteUrgentDemandItemHeaders([]);

        return $this->deleteUrgentDemandItemWithOptions($request, $headers, $runtime);
    }

    /**
     * 紧急需求单plan删除.
     *
     * @param request - DeleteUrgentDemandPlanRequest
     * @param headers - DeleteUrgentDemandPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUrgentDemandPlanResponse
     *
     * @param DeleteUrgentDemandPlanRequest $request
     * @param DeleteUrgentDemandPlanHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteUrgentDemandPlanResponse
     */
    public function deleteUrgentDemandPlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->modifier) {
            @$query['modifier'] = $request->modifier;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->yunUserId) {
            @$realHeaders['Yun-User-Id'] = '' . $headers->yunUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUrgentDemandPlan',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/demand/urgent/deleteUrgentDemandPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUrgentDemandPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 紧急需求单plan删除.
     *
     * @param request - DeleteUrgentDemandPlanRequest
     *
     * @returns DeleteUrgentDemandPlanResponse
     *
     * @param DeleteUrgentDemandPlanRequest $request
     *
     * @return DeleteUrgentDemandPlanResponse
     */
    public function deleteUrgentDemandPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteUrgentDemandPlanHeaders([]);

        return $this->deleteUrgentDemandPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * 交付信息同步.
     *
     * @param request - DeliveryItemDetailSynRequest
     * @param headers - DeliveryItemDetailSynHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeliveryItemDetailSynResponse
     *
     * @param DeliveryItemDetailSynRequest $request
     * @param DeliveryItemDetailSynHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeliveryItemDetailSynResponse
     */
    public function deliveryItemDetailSynWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channel) {
            @$body['channel'] = $request->channel;
        }

        if (null !== $request->deliveryItemDetailDTOS) {
            @$body['deliveryItemDetailDTOS'] = $request->deliveryItemDetailDTOS;
        }

        if (null !== $request->deliveryItemId) {
            @$body['deliveryItemId'] = $request->deliveryItemId;
        }

        if (null !== $request->deliveryPlanId) {
            @$body['deliveryPlanId'] = $request->deliveryPlanId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->yunUserId) {
            @$realHeaders['Yun-User-Id'] = '' . $headers->yunUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeliveryItemDetailSyn',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/supply/deliveryItemDataSync',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeliveryItemDetailSynResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 交付信息同步.
     *
     * @param request - DeliveryItemDetailSynRequest
     *
     * @returns DeliveryItemDetailSynResponse
     *
     * @param DeliveryItemDetailSynRequest $request
     *
     * @return DeliveryItemDetailSynResponse
     */
    public function deliveryItemDetailSyn($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeliveryItemDetailSynHeaders([]);

        return $this->deliveryItemDetailSynWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询报备单中报备项列表.
     *
     * @param request - GetUrgentDemandItemListRequest
     * @param headers - GetUrgentDemandItemListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUrgentDemandItemListResponse
     *
     * @param GetUrgentDemandItemListRequest $request
     * @param GetUrgentDemandItemListHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetUrgentDemandItemListResponse
     */
    public function getUrgentDemandItemListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->commodityCode) {
            @$body['commodityCode'] = $request->commodityCode;
        }

        if (null !== $request->commodityTypeCode) {
            @$body['commodityTypeCode'] = $request->commodityTypeCode;
        }

        if (null !== $request->current) {
            @$body['current'] = $request->current;
        }

        if (null !== $request->planId) {
            @$body['planId'] = $request->planId;
        }

        if (null !== $request->region) {
            @$body['region'] = $request->region;
        }

        if (null !== $request->size) {
            @$body['size'] = $request->size;
        }

        if (null !== $request->zone) {
            @$body['zone'] = $request->zone;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->yunUserId) {
            @$realHeaders['Yun-User-Id'] = '' . $headers->yunUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUrgentDemandItemList',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/demand/urgent/getUrgentDemandItemList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUrgentDemandItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询报备单中报备项列表.
     *
     * @param request - GetUrgentDemandItemListRequest
     *
     * @returns GetUrgentDemandItemListResponse
     *
     * @param GetUrgentDemandItemListRequest $request
     *
     * @return GetUrgentDemandItemListResponse
     */
    public function getUrgentDemandItemList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUrgentDemandItemListHeaders([]);

        return $this->getUrgentDemandItemListWithOptions($request, $headers, $runtime);
    }

    /**
     * getUrgentDemandPlanDetail.
     *
     * @param request - GetUrgentDemandPlanDetailRequest
     * @param headers - GetUrgentDemandPlanDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUrgentDemandPlanDetailResponse
     *
     * @param GetUrgentDemandPlanDetailRequest $request
     * @param GetUrgentDemandPlanDetailHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetUrgentDemandPlanDetailResponse
     */
    public function getUrgentDemandPlanDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->planId) {
            @$body['planId'] = $request->planId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->yunUserId) {
            @$realHeaders['Yun-User-Id'] = '' . $headers->yunUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUrgentDemandPlanDetail',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/demand/urgent/getUrgentDemandPlanDetail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUrgentDemandPlanDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * getUrgentDemandPlanDetail.
     *
     * @param request - GetUrgentDemandPlanDetailRequest
     *
     * @returns GetUrgentDemandPlanDetailResponse
     *
     * @param GetUrgentDemandPlanDetailRequest $request
     *
     * @return GetUrgentDemandPlanDetailResponse
     */
    public function getUrgentDemandPlanDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUrgentDemandPlanDetailHeaders([]);

        return $this->getUrgentDemandPlanDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询报备单列表.
     *
     * @param request - GetUrgentDemandPlanListRequest
     * @param headers - GetUrgentDemandPlanListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUrgentDemandPlanListResponse
     *
     * @param GetUrgentDemandPlanListRequest $request
     * @param GetUrgentDemandPlanListHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetUrgentDemandPlanListResponse
     */
    public function getUrgentDemandPlanListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->current) {
            @$body['current'] = $request->current;
        }

        if (null !== $request->period) {
            @$body['period'] = $request->period;
        }

        if (null !== $request->planType) {
            @$body['planType'] = $request->planType;
        }

        if (null !== $request->size) {
            @$body['size'] = $request->size;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->yunUserId) {
            @$realHeaders['Yun-User-Id'] = '' . $headers->yunUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUrgentDemandPlanList',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/demand/urgent/getUrgentDemandPlanList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUrgentDemandPlanListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询报备单列表.
     *
     * @param request - GetUrgentDemandPlanListRequest
     *
     * @returns GetUrgentDemandPlanListResponse
     *
     * @param GetUrgentDemandPlanListRequest $request
     *
     * @return GetUrgentDemandPlanListResponse
     */
    public function getUrgentDemandPlanList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUrgentDemandPlanListHeaders([]);

        return $this->getUrgentDemandPlanListWithOptions($request, $headers, $runtime);
    }

    /**
     * ecs资源方案.
     *
     * @param request - PushResourcePlanRequest
     * @param headers - PushResourcePlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushResourcePlanResponse
     *
     * @param PushResourcePlanRequest $request
     * @param PushResourcePlanHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return PushResourcePlanResponse
     */
    public function pushResourcePlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bufferCnt) {
            @$body['bufferCnt'] = $request->bufferCnt;
        }

        if (null !== $request->demandCount) {
            @$body['demandCount'] = $request->demandCount;
        }

        if (null !== $request->demandId) {
            @$body['demandId'] = $request->demandId;
        }

        if (null !== $request->methodList) {
            @$body['methodList'] = $request->methodList;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->requireCnt) {
            @$body['requireCnt'] = $request->requireCnt;
        }

        if (null !== $request->subDemandId) {
            @$body['subDemandId'] = $request->subDemandId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->yunUserId) {
            @$realHeaders['Yun-User-Id'] = '' . $headers->yunUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushResourcePlan',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/supply/resourcePlan/push',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PushResourcePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ecs资源方案.
     *
     * @param request - PushResourcePlanRequest
     *
     * @returns PushResourcePlanResponse
     *
     * @param PushResourcePlanRequest $request
     *
     * @return PushResourcePlanResponse
     */
    public function pushResourcePlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PushResourcePlanHeaders([]);

        return $this->pushResourcePlanWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询accountId下所有存在交付状态（包括部分）的报备数据, 以及开通数据情况.
     *
     * @param request - QueryDeliveredSupplyItemsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDeliveredSupplyItemsResponse
     *
     * @param QueryDeliveredSupplyItemsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryDeliveredSupplyItemsResponse
     */
    public function queryDeliveredSupplyItemsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['accountId'] = $request->accountId;
        }

        if (null !== $request->commodityTypeCode) {
            @$query['commodityTypeCode'] = $request->commodityTypeCode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDeliveredSupplyItems',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/supply/queryDeliveredSupplyItems',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return QueryDeliveredSupplyItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询accountId下所有存在交付状态（包括部分）的报备数据, 以及开通数据情况.
     *
     * @param request - QueryDeliveredSupplyItemsRequest
     *
     * @returns QueryDeliveredSupplyItemsResponse
     *
     * @param QueryDeliveredSupplyItemsRequest $request
     *
     * @return QueryDeliveredSupplyItemsResponse
     */
    public function queryDeliveredSupplyItems($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDeliveredSupplyItemsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询账单预算数据.
     *
     * @param request - QueryPeriodBudgetBillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPeriodBudgetBillResponse
     *
     * @param QueryPeriodBudgetBillRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QueryPeriodBudgetBillResponse
     */
    public function queryPeriodBudgetBillWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->objectIds) {
            @$query['objectIds'] = $request->objectIds;
        }

        if (null !== $request->objectType) {
            @$query['objectType'] = $request->objectType;
        }

        if (null !== $request->period) {
            @$query['period'] = $request->period;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPeriodBudgetBill',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/annual/budget/queryPeriodBudgetBill',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryPeriodBudgetBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询账单预算数据.
     *
     * @param request - QueryPeriodBudgetBillRequest
     *
     * @returns QueryPeriodBudgetBillResponse
     *
     * @param QueryPeriodBudgetBillRequest $request
     *
     * @return QueryPeriodBudgetBillResponse
     */
    public function queryPeriodBudgetBill($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryPeriodBudgetBillWithOptions($request, $headers, $runtime);
    }

    /**
     * 紧急需求单item新增.
     *
     * @param request - SaveUrgentDemandItemRequest
     * @param headers - SaveUrgentDemandItemHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveUrgentDemandItemResponse
     *
     * @param SaveUrgentDemandItemRequest $request
     * @param SaveUrgentDemandItemHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return SaveUrgentDemandItemResponse
     */
    public function saveUrgentDemandItemWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['accountId'] = $request->accountId;
        }

        if (null !== $request->creator) {
            @$body['creator'] = $request->creator;
        }

        if (null !== $request->effectTime) {
            @$body['effectTime'] = $request->effectTime;
        }

        if (null !== $request->modifier) {
            @$body['modifier'] = $request->modifier;
        }

        if (null !== $request->networkType) {
            @$body['networkType'] = $request->networkType;
        }

        if (null !== $request->payDuration) {
            @$body['payDuration'] = $request->payDuration;
        }

        if (null !== $request->payDurationUnit) {
            @$body['payDurationUnit'] = $request->payDurationUnit;
        }

        if (null !== $request->payType) {
            @$body['payType'] = $request->payType;
        }

        if (null !== $request->planId) {
            @$body['planId'] = $request->planId;
        }

        if (null !== $request->region) {
            @$body['region'] = $request->region;
        }

        if (null !== $request->urgentDemandEbsRequest) {
            @$body['urgentDemandEbsRequest'] = $request->urgentDemandEbsRequest;
        }

        if (null !== $request->urgentDemandEcsRequest) {
            @$body['urgentDemandEcsRequest'] = $request->urgentDemandEcsRequest;
        }

        if (null !== $request->zone) {
            @$body['zone'] = $request->zone;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->yunUserId) {
            @$realHeaders['Yun-User-Id'] = '' . $headers->yunUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveUrgentDemandItem',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/demand/urgent/saveUrgentDemandItem',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SaveUrgentDemandItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 紧急需求单item新增.
     *
     * @param request - SaveUrgentDemandItemRequest
     *
     * @returns SaveUrgentDemandItemResponse
     *
     * @param SaveUrgentDemandItemRequest $request
     *
     * @return SaveUrgentDemandItemResponse
     */
    public function saveUrgentDemandItem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SaveUrgentDemandItemHeaders([]);

        return $this->saveUrgentDemandItemWithOptions($request, $headers, $runtime);
    }

    /**
     * submitUrgentDemandPlan.
     *
     * @param request - SubmitUrgentDemandPlanRequest
     * @param headers - SubmitUrgentDemandPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitUrgentDemandPlanResponse
     *
     * @param SubmitUrgentDemandPlanRequest $request
     * @param SubmitUrgentDemandPlanHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitUrgentDemandPlanResponse
     */
    public function submitUrgentDemandPlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->planId) {
            @$query['planId'] = $request->planId;
        }

        if (null !== $request->userId) {
            @$query['userId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->yunUserId) {
            @$realHeaders['Yun-User-Id'] = '' . $headers->yunUserId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitUrgentDemandPlan',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/demand/urgent/submitUrgentDemandPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitUrgentDemandPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * submitUrgentDemandPlan.
     *
     * @param request - SubmitUrgentDemandPlanRequest
     *
     * @returns SubmitUrgentDemandPlanResponse
     *
     * @param SubmitUrgentDemandPlanRequest $request
     *
     * @return SubmitUrgentDemandPlanResponse
     */
    public function submitUrgentDemandPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SubmitUrgentDemandPlanHeaders([]);

        return $this->submitUrgentDemandPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * 云产品交付决策反馈回调.
     *
     * @param request - AcceptFulfillmentDecisionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AcceptFulfillmentDecisionResponse
     *
     * @param AcceptFulfillmentDecisionRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return AcceptFulfillmentDecisionResponse
     */
    public function acceptFulfillmentDecisionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->decisionConclusion) {
            @$body['DecisionConclusion'] = $request->decisionConclusion;
        }

        if (null !== $request->decisionType) {
            @$body['DecisionType'] = $request->decisionType;
        }

        if (null !== $request->orderId) {
            @$body['OrderId'] = $request->orderId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'acceptFulfillmentDecision',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/acceptFulfillmentDecision',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AcceptFulfillmentDecisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 云产品交付决策反馈回调.
     *
     * @param request - AcceptFulfillmentDecisionRequest
     *
     * @returns AcceptFulfillmentDecisionResponse
     *
     * @param AcceptFulfillmentDecisionRequest $request
     *
     * @return AcceptFulfillmentDecisionResponse
     */
    public function acceptFulfillmentDecision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->acceptFulfillmentDecisionWithOptions($request, $headers, $runtime);
    }
}
