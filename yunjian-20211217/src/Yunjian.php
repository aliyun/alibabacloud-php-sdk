<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Yunjian\V20211217\Models\PageDemandPlanWithDemandInfoHeaders;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\PageDemandPlanWithDemandInfoRequest;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\PageDemandPlanWithDemandInfoResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CreateDemandPlanRequest $request CreateDemandPlanRequest
     * @param CreateDemandPlanHeaders $headers CreateDemandPlanHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDemandPlanResponse CreateDemandPlanResponse
     */
    public function createDemandPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['userId'] = $request->userId;
        }
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['accountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->period)) {
            $body['period'] = $request->period;
        }
        if (!Utils::isUnset($request->source)) {
            $body['source'] = $request->source;
        }
        if (!Utils::isUnset($request->targetCid)) {
            $body['targetCid'] = $request->targetCid;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->yunUserId)) {
            $realHeaders['Yun-User-Id'] = Utils::toJSONString($headers->yunUserId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @param CreateDemandPlanRequest $request CreateDemandPlanRequest
     *
     * @return CreateDemandPlanResponse CreateDemandPlanResponse
     */
    public function createDemandPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDemandPlanHeaders([]);

        return $this->createDemandPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建plan2.0版本
     *  *
     * @param CreateDemandPlanV2Request $request CreateDemandPlanV2Request
     * @param CreateDemandPlanV2Headers $headers CreateDemandPlanV2Headers
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDemandPlanV2Response CreateDemandPlanV2Response
     */
    public function createDemandPlanV2WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['userId'] = $request->userId;
        }
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['accountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['productType'] = $request->productType;
        }
        if (!Utils::isUnset($request->targetCid)) {
            $body['targetCid'] = $request->targetCid;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->yunUserId)) {
            $realHeaders['Yun-User-Id'] = Utils::toJSONString($headers->yunUserId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 创建plan2.0版本
     *  *
     * @param CreateDemandPlanV2Request $request CreateDemandPlanV2Request
     *
     * @return CreateDemandPlanV2Response CreateDemandPlanV2Response
     */
    public function createDemandPlanV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDemandPlanV2Headers([]);

        return $this->createDemandPlanV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 紧急需求单ite 删除
     *  *
     * @param DeleteUrgentDemandItemRequest $request DeleteUrgentDemandItemRequest
     * @param DeleteUrgentDemandItemHeaders $headers DeleteUrgentDemandItemHeaders
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUrgentDemandItemResponse DeleteUrgentDemandItemResponse
     */
    public function deleteUrgentDemandItemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->modifier)) {
            $query['modifier'] = $request->modifier;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->yunUserId)) {
            $realHeaders['Yun-User-Id'] = Utils::toJSONString($headers->yunUserId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 紧急需求单ite 删除
     *  *
     * @param DeleteUrgentDemandItemRequest $request DeleteUrgentDemandItemRequest
     *
     * @return DeleteUrgentDemandItemResponse DeleteUrgentDemandItemResponse
     */
    public function deleteUrgentDemandItem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteUrgentDemandItemHeaders([]);

        return $this->deleteUrgentDemandItemWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 紧急需求单plan删除
     *  *
     * @param DeleteUrgentDemandPlanRequest $request DeleteUrgentDemandPlanRequest
     * @param DeleteUrgentDemandPlanHeaders $headers DeleteUrgentDemandPlanHeaders
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUrgentDemandPlanResponse DeleteUrgentDemandPlanResponse
     */
    public function deleteUrgentDemandPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->modifier)) {
            $query['modifier'] = $request->modifier;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->yunUserId)) {
            $realHeaders['Yun-User-Id'] = Utils::toJSONString($headers->yunUserId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 紧急需求单plan删除
     *  *
     * @param DeleteUrgentDemandPlanRequest $request DeleteUrgentDemandPlanRequest
     *
     * @return DeleteUrgentDemandPlanResponse DeleteUrgentDemandPlanResponse
     */
    public function deleteUrgentDemandPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteUrgentDemandPlanHeaders([]);

        return $this->deleteUrgentDemandPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 交付信息同步
     *  *
     * @param DeliveryItemDetailSynRequest $request DeliveryItemDetailSynRequest
     * @param DeliveryItemDetailSynHeaders $headers DeliveryItemDetailSynHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeliveryItemDetailSynResponse DeliveryItemDetailSynResponse
     */
    public function deliveryItemDetailSynWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channel)) {
            $body['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->deliveryItemDetailDTOS)) {
            $body['deliveryItemDetailDTOS'] = $request->deliveryItemDetailDTOS;
        }
        if (!Utils::isUnset($request->deliveryItemId)) {
            $body['deliveryItemId'] = $request->deliveryItemId;
        }
        if (!Utils::isUnset($request->deliveryPlanId)) {
            $body['deliveryPlanId'] = $request->deliveryPlanId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->yunUserId)) {
            $realHeaders['Yun-User-Id'] = Utils::toJSONString($headers->yunUserId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 交付信息同步
     *  *
     * @param DeliveryItemDetailSynRequest $request DeliveryItemDetailSynRequest
     *
     * @return DeliveryItemDetailSynResponse DeliveryItemDetailSynResponse
     */
    public function deliveryItemDetailSyn($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeliveryItemDetailSynHeaders([]);

        return $this->deliveryItemDetailSynWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询报备单中报备项列表
     *  *
     * @param GetUrgentDemandItemListRequest $request GetUrgentDemandItemListRequest
     * @param GetUrgentDemandItemListHeaders $headers GetUrgentDemandItemListHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUrgentDemandItemListResponse GetUrgentDemandItemListResponse
     */
    public function getUrgentDemandItemListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['commodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->commodityTypeCode)) {
            $body['commodityTypeCode'] = $request->commodityTypeCode;
        }
        if (!Utils::isUnset($request->current)) {
            $body['current'] = $request->current;
        }
        if (!Utils::isUnset($request->planId)) {
            $body['planId'] = $request->planId;
        }
        if (!Utils::isUnset($request->region)) {
            $body['region'] = $request->region;
        }
        if (!Utils::isUnset($request->size)) {
            $body['size'] = $request->size;
        }
        if (!Utils::isUnset($request->zone)) {
            $body['zone'] = $request->zone;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->yunUserId)) {
            $realHeaders['Yun-User-Id'] = Utils::toJSONString($headers->yunUserId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询报备单中报备项列表
     *  *
     * @param GetUrgentDemandItemListRequest $request GetUrgentDemandItemListRequest
     *
     * @return GetUrgentDemandItemListResponse GetUrgentDemandItemListResponse
     */
    public function getUrgentDemandItemList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUrgentDemandItemListHeaders([]);

        return $this->getUrgentDemandItemListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary getUrgentDemandPlanDetail
     *  *
     * @param GetUrgentDemandPlanDetailRequest $request GetUrgentDemandPlanDetailRequest
     * @param GetUrgentDemandPlanDetailHeaders $headers GetUrgentDemandPlanDetailHeaders
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUrgentDemandPlanDetailResponse GetUrgentDemandPlanDetailResponse
     */
    public function getUrgentDemandPlanDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->planId)) {
            $body['planId'] = $request->planId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->yunUserId)) {
            $realHeaders['Yun-User-Id'] = Utils::toJSONString($headers->yunUserId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary getUrgentDemandPlanDetail
     *  *
     * @param GetUrgentDemandPlanDetailRequest $request GetUrgentDemandPlanDetailRequest
     *
     * @return GetUrgentDemandPlanDetailResponse GetUrgentDemandPlanDetailResponse
     */
    public function getUrgentDemandPlanDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUrgentDemandPlanDetailHeaders([]);

        return $this->getUrgentDemandPlanDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询报备单列表
     *  *
     * @param GetUrgentDemandPlanListRequest $request GetUrgentDemandPlanListRequest
     * @param GetUrgentDemandPlanListHeaders $headers GetUrgentDemandPlanListHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUrgentDemandPlanListResponse GetUrgentDemandPlanListResponse
     */
    public function getUrgentDemandPlanListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['current'] = $request->current;
        }
        if (!Utils::isUnset($request->period)) {
            $body['period'] = $request->period;
        }
        if (!Utils::isUnset($request->planType)) {
            $body['planType'] = $request->planType;
        }
        if (!Utils::isUnset($request->size)) {
            $body['size'] = $request->size;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->yunUserId)) {
            $realHeaders['Yun-User-Id'] = Utils::toJSONString($headers->yunUserId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询报备单列表
     *  *
     * @param GetUrgentDemandPlanListRequest $request GetUrgentDemandPlanListRequest
     *
     * @return GetUrgentDemandPlanListResponse GetUrgentDemandPlanListResponse
     */
    public function getUrgentDemandPlanList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUrgentDemandPlanListHeaders([]);

        return $this->getUrgentDemandPlanListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 报备列表查询
     *  *
     * @param PageDemandPlanWithDemandInfoRequest $request PageDemandPlanWithDemandInfoRequest
     * @param PageDemandPlanWithDemandInfoHeaders $headers PageDemandPlanWithDemandInfoHeaders
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return PageDemandPlanWithDemandInfoResponse PageDemandPlanWithDemandInfoResponse
     */
    public function pageDemandPlanWithDemandInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->approvalStatus)) {
            $body['approvalStatus'] = $request->approvalStatus;
        }
        if (!Utils::isUnset($request->createTimeEnd)) {
            $body['createTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $body['createTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->creatorStaffId)) {
            $body['creatorStaffId'] = $request->creatorStaffId;
        }
        if (!Utils::isUnset($request->demandDeliveryStatus)) {
            $body['demandDeliveryStatus'] = $request->demandDeliveryStatus;
        }
        if (!Utils::isUnset($request->demandId)) {
            $body['demandId'] = $request->demandId;
        }
        if (!Utils::isUnset($request->demandPlanId)) {
            $body['demandPlanId'] = $request->demandPlanId;
        }
        if (!Utils::isUnset($request->demandPlanStatus)) {
            $body['demandPlanStatus'] = $request->demandPlanStatus;
        }
        if (!Utils::isUnset($request->operator)) {
            $body['operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->roCode)) {
            $body['roCode'] = $request->roCode;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->yunUserId)) {
            $realHeaders['Yun-User-Id'] = Utils::toJSONString($headers->yunUserId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PageDemandPlanWithDemandInfo',
            'version' => '2021-12-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/demand/getDemandPlanList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PageDemandPlanWithDemandInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 报备列表查询
     *  *
     * @param PageDemandPlanWithDemandInfoRequest $request PageDemandPlanWithDemandInfoRequest
     *
     * @return PageDemandPlanWithDemandInfoResponse PageDemandPlanWithDemandInfoResponse
     */
    public function pageDemandPlanWithDemandInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PageDemandPlanWithDemandInfoHeaders([]);

        return $this->pageDemandPlanWithDemandInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary ecs资源方案
     *  *
     * @param PushResourcePlanRequest $request PushResourcePlanRequest
     * @param PushResourcePlanHeaders $headers PushResourcePlanHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return PushResourcePlanResponse PushResourcePlanResponse
     */
    public function pushResourcePlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bufferCnt)) {
            $body['bufferCnt'] = $request->bufferCnt;
        }
        if (!Utils::isUnset($request->demandCount)) {
            $body['demandCount'] = $request->demandCount;
        }
        if (!Utils::isUnset($request->demandId)) {
            $body['demandId'] = $request->demandId;
        }
        if (!Utils::isUnset($request->methodList)) {
            $body['methodList'] = $request->methodList;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['requestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->requireCnt)) {
            $body['requireCnt'] = $request->requireCnt;
        }
        if (!Utils::isUnset($request->subDemandId)) {
            $body['subDemandId'] = $request->subDemandId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->yunUserId)) {
            $realHeaders['Yun-User-Id'] = Utils::toJSONString($headers->yunUserId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary ecs资源方案
     *  *
     * @param PushResourcePlanRequest $request PushResourcePlanRequest
     *
     * @return PushResourcePlanResponse PushResourcePlanResponse
     */
    public function pushResourcePlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PushResourcePlanHeaders([]);

        return $this->pushResourcePlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询accountId下所有存在交付状态（包括部分）的报备数据, 以及开通数据情况
     *  *
     * @param QueryDeliveredSupplyItemsRequest $request QueryDeliveredSupplyItemsRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDeliveredSupplyItemsResponse QueryDeliveredSupplyItemsResponse
     */
    public function queryDeliveredSupplyItemsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['accountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->commodityTypeCode)) {
            $query['commodityTypeCode'] = $request->commodityTypeCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询accountId下所有存在交付状态（包括部分）的报备数据, 以及开通数据情况
     *  *
     * @param QueryDeliveredSupplyItemsRequest $request QueryDeliveredSupplyItemsRequest
     *
     * @return QueryDeliveredSupplyItemsResponse QueryDeliveredSupplyItemsResponse
     */
    public function queryDeliveredSupplyItems($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDeliveredSupplyItemsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询账单预算数据
     *  *
     * @param QueryPeriodBudgetBillRequest $request QueryPeriodBudgetBillRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPeriodBudgetBillResponse QueryPeriodBudgetBillResponse
     */
    public function queryPeriodBudgetBillWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->objectIds)) {
            $query['objectIds'] = $request->objectIds;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['objectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['period'] = $request->period;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询账单预算数据
     *  *
     * @param QueryPeriodBudgetBillRequest $request QueryPeriodBudgetBillRequest
     *
     * @return QueryPeriodBudgetBillResponse QueryPeriodBudgetBillResponse
     */
    public function queryPeriodBudgetBill($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryPeriodBudgetBillWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 紧急需求单item新增
     *  *
     * @param SaveUrgentDemandItemRequest $request SaveUrgentDemandItemRequest
     * @param SaveUrgentDemandItemHeaders $headers SaveUrgentDemandItemHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveUrgentDemandItemResponse SaveUrgentDemandItemResponse
     */
    public function saveUrgentDemandItemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['accountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->creator)) {
            $body['creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->effectTime)) {
            $body['effectTime'] = $request->effectTime;
        }
        if (!Utils::isUnset($request->modifier)) {
            $body['modifier'] = $request->modifier;
        }
        if (!Utils::isUnset($request->networkType)) {
            $body['networkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->payDuration)) {
            $body['payDuration'] = $request->payDuration;
        }
        if (!Utils::isUnset($request->payDurationUnit)) {
            $body['payDurationUnit'] = $request->payDurationUnit;
        }
        if (!Utils::isUnset($request->payType)) {
            $body['payType'] = $request->payType;
        }
        if (!Utils::isUnset($request->planId)) {
            $body['planId'] = $request->planId;
        }
        if (!Utils::isUnset($request->region)) {
            $body['region'] = $request->region;
        }
        if (!Utils::isUnset($request->urgentDemandEbsRequest)) {
            $body['urgentDemandEbsRequest'] = $request->urgentDemandEbsRequest;
        }
        if (!Utils::isUnset($request->urgentDemandEcsRequest)) {
            $body['urgentDemandEcsRequest'] = $request->urgentDemandEcsRequest;
        }
        if (!Utils::isUnset($request->zone)) {
            $body['zone'] = $request->zone;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->yunUserId)) {
            $realHeaders['Yun-User-Id'] = Utils::toJSONString($headers->yunUserId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 紧急需求单item新增
     *  *
     * @param SaveUrgentDemandItemRequest $request SaveUrgentDemandItemRequest
     *
     * @return SaveUrgentDemandItemResponse SaveUrgentDemandItemResponse
     */
    public function saveUrgentDemandItem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SaveUrgentDemandItemHeaders([]);

        return $this->saveUrgentDemandItemWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary submitUrgentDemandPlan
     *  *
     * @param SubmitUrgentDemandPlanRequest $request SubmitUrgentDemandPlanRequest
     * @param SubmitUrgentDemandPlanHeaders $headers SubmitUrgentDemandPlanHeaders
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitUrgentDemandPlanResponse SubmitUrgentDemandPlanResponse
     */
    public function submitUrgentDemandPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->planId)) {
            $query['planId'] = $request->planId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['userId'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->yunUserId)) {
            $realHeaders['Yun-User-Id'] = Utils::toJSONString($headers->yunUserId);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary submitUrgentDemandPlan
     *  *
     * @param SubmitUrgentDemandPlanRequest $request SubmitUrgentDemandPlanRequest
     *
     * @return SubmitUrgentDemandPlanResponse SubmitUrgentDemandPlanResponse
     */
    public function submitUrgentDemandPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SubmitUrgentDemandPlanHeaders([]);

        return $this->submitUrgentDemandPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 云产品交付决策反馈回调
     *  *
     * @param AcceptFulfillmentDecisionRequest $request AcceptFulfillmentDecisionRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AcceptFulfillmentDecisionResponse AcceptFulfillmentDecisionResponse
     */
    public function acceptFulfillmentDecisionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->decisionConclusion)) {
            $body['DecisionConclusion'] = $request->decisionConclusion;
        }
        if (!Utils::isUnset($request->decisionType)) {
            $body['DecisionType'] = $request->decisionType;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 云产品交付决策反馈回调
     *  *
     * @param AcceptFulfillmentDecisionRequest $request AcceptFulfillmentDecisionRequest
     *
     * @return AcceptFulfillmentDecisionResponse AcceptFulfillmentDecisionResponse
     */
    public function acceptFulfillmentDecision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->acceptFulfillmentDecisionWithOptions($request, $headers, $runtime);
    }
}
