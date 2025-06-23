<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Wss\V20211221\Models\CreateMultiOrderRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\CreateMultiOrderResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\CreateMultiOrderShrinkRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribePackageDeductionsRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribePackageDeductionsResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\ModifyInstancePropertiesRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\ModifyInstancePropertiesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Wss extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('wss', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 多商品组合下单.
     *
     * @param tmpReq - CreateMultiOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMultiOrderResponse
     *
     * @param CreateMultiOrderRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateMultiOrderResponse
     */
    public function createMultiOrderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMultiOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->properties) {
            $request->propertiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->properties, 'Properties', 'json');
        }

        $query = [];
        if (null !== $request->orderItems) {
            @$query['OrderItems'] = $request->orderItems;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->propertiesShrink) {
            @$query['Properties'] = $request->propertiesShrink;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMultiOrder',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMultiOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 多商品组合下单.
     *
     * @param request - CreateMultiOrderRequest
     *
     * @returns CreateMultiOrderResponse
     *
     * @param CreateMultiOrderRequest $request
     *
     * @return CreateMultiOrderResponse
     */
    public function createMultiOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMultiOrderWithOptions($request, $runtime);
    }

    /**
     * 查询物流地址
     *
     * @param request - DescribeDeliveryAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeliveryAddressResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDeliveryAddressResponse
     */
    public function describeDeliveryAddressWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDeliveryAddress',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeliveryAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询物流地址
     *
     * @returns DescribeDeliveryAddressResponse
     *
     * @return DescribeDeliveryAddressResponse
     */
    public function describeDeliveryAddress()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeliveryAddressWithOptions($runtime);
    }

    /**
     * 批量询价.
     *
     * @param request - DescribeMultiPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMultiPriceResponse
     *
     * @param DescribeMultiPriceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMultiPriceResponse
     */
    public function describeMultiPriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderItems) {
            @$query['OrderItems'] = $request->orderItems;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->packageCode) {
            @$query['PackageCode'] = $request->packageCode;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMultiPrice',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMultiPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量询价.
     *
     * @param request - DescribeMultiPriceRequest
     *
     * @returns DescribeMultiPriceResponse
     *
     * @param DescribeMultiPriceRequest $request
     *
     * @return DescribeMultiPriceResponse
     */
    public function describeMultiPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMultiPriceWithOptions($request, $runtime);
    }

    /**
     * 查询核时包抵扣明细.
     *
     * @param request - DescribePackageDeductionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePackageDeductionsResponse
     *
     * @param DescribePackageDeductionsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePackageDeductionsResponse
     */
    public function describePackageDeductionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->packageIds) {
            @$query['PackageIds'] = $request->packageIds;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePackageDeductions',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePackageDeductionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询核时包抵扣明细.
     *
     * @param request - DescribePackageDeductionsRequest
     *
     * @returns DescribePackageDeductionsResponse
     *
     * @param DescribePackageDeductionsRequest $request
     *
     * @return DescribePackageDeductionsResponse
     */
    public function describePackageDeductions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackageDeductionsWithOptions($request, $runtime);
    }

    /**
     * 更新实例属性.
     *
     * @param request - ModifyInstancePropertiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstancePropertiesResponse
     *
     * @param ModifyInstancePropertiesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInstancePropertiesResponse
     */
    public function modifyInstancePropertiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceProperties',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstancePropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实例属性.
     *
     * @param request - ModifyInstancePropertiesRequest
     *
     * @returns ModifyInstancePropertiesResponse
     *
     * @param ModifyInstancePropertiesRequest $request
     *
     * @return ModifyInstancePropertiesResponse
     */
    public function modifyInstanceProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstancePropertiesWithOptions($request, $runtime);
    }
}
