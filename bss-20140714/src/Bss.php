<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bss\V20140714;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Bss\V20140714\Models\CreateOrderRequest;
use AlibabaCloud\SDK\Bss\V20140714\Models\CreateOrderResponse;
use AlibabaCloud\SDK\Bss\V20140714\Models\DescribeCashDetailResponse;
use AlibabaCloud\SDK\Bss\V20140714\Models\DescribeCouponListRequest;
use AlibabaCloud\SDK\Bss\V20140714\Models\DescribeCouponListResponse;
use AlibabaCloud\SDK\Bss\V20140714\Models\OpenCallbackRequest;
use AlibabaCloud\SDK\Bss\V20140714\Models\OpenCallbackResponse;
use AlibabaCloud\SDK\Bss\V20140714\Models\QueryForCssOrderRequest;
use AlibabaCloud\SDK\Bss\V20140714\Models\QueryForCssOrderResponse;
use AlibabaCloud\SDK\Bss\V20140714\Models\VnoBatchRefundOrderRequest;
use AlibabaCloud\SDK\Bss\V20140714\Models\VnoBatchRefundOrderResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Bss extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bss', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建订单.
     *
     * @param request - CreateOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrderResponse
     *
     * @param CreateOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramStr) {
            @$query['paramStr'] = $request->paramStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOrder',
            'version' => '2014-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建订单.
     *
     * @param request - CreateOrderRequest
     *
     * @returns CreateOrderResponse
     *
     * @param CreateOrderRequest $request
     *
     * @return CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderWithOptions($request, $runtime);
    }

    /**
     * 获取现金明细.
     *
     * @param request - DescribeCashDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCashDetailResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCashDetailResponse
     */
    public function describeCashDetailWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeCashDetail',
            'version' => '2014-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCashDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取现金明细.
     *
     * @returns DescribeCashDetailResponse
     *
     * @return DescribeCashDetailResponse
     */
    public function describeCashDetail()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCashDetailWithOptions($runtime);
    }

    /**
     * 查询卡券列表.
     *
     * @param request - DescribeCouponListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCouponListResponse
     *
     * @param DescribeCouponListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCouponListResponse
     */
    public function describeCouponListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDeliveryTime) {
            @$query['EndDeliveryTime'] = $request->endDeliveryTime;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDeliveryTime) {
            @$query['StartDeliveryTime'] = $request->startDeliveryTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCouponList',
            'version' => '2014-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCouponListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询卡券列表.
     *
     * @param request - DescribeCouponListRequest
     *
     * @returns DescribeCouponListResponse
     *
     * @param DescribeCouponListRequest $request
     *
     * @return DescribeCouponListResponse
     */
    public function describeCouponList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCouponListWithOptions($request, $runtime);
    }

    /**
     * 生产开通回调接口.
     *
     * @param request - OpenCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenCallbackResponse
     *
     * @param OpenCallbackRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return OpenCallbackResponse
     */
    public function openCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramStr) {
            @$query['paramStr'] = $request->paramStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenCallback',
            'version' => '2014-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生产开通回调接口.
     *
     * @param request - OpenCallbackRequest
     *
     * @returns OpenCallbackResponse
     *
     * @param OpenCallbackRequest $request
     *
     * @return OpenCallbackResponse
     */
    public function openCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openCallbackWithOptions($request, $runtime);
    }

    /**
     * 订单询价.
     *
     * @param request - QueryForCssOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryForCssOrderResponse
     *
     * @param QueryForCssOrderRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryForCssOrderResponse
     */
    public function queryForCssOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramStr) {
            @$query['paramStr'] = $request->paramStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryForCssOrder',
            'version' => '2014-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryForCssOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 订单询价.
     *
     * @param request - QueryForCssOrderRequest
     *
     * @returns QueryForCssOrderResponse
     *
     * @param QueryForCssOrderRequest $request
     *
     * @return QueryForCssOrderResponse
     */
    public function queryForCssOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryForCssOrderWithOptions($request, $runtime);
    }

    /**
     * vnoBatchRefundOrder.
     *
     * @param request - VnoBatchRefundOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VnoBatchRefundOrderResponse
     *
     * @param VnoBatchRefundOrderRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return VnoBatchRefundOrderResponse
     */
    public function vnoBatchRefundOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramStr) {
            @$query['paramStr'] = $request->paramStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'vnoBatchRefundOrder',
            'version' => '2014-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VnoBatchRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * vnoBatchRefundOrder.
     *
     * @param request - VnoBatchRefundOrderRequest
     *
     * @returns VnoBatchRefundOrderResponse
     *
     * @param VnoBatchRefundOrderRequest $request
     *
     * @return VnoBatchRefundOrderResponse
     */
    public function vnoBatchRefundOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vnoBatchRefundOrderWithOptions($request, $runtime);
    }
}
