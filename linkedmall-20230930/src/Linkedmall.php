<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\URL;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\CancelRefundOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ConfirmDisburseRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ConfirmDisburseResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\CreateGoodsShippingNoticeRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\CreateGoodsShippingNoticeResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\CreatePurchaseOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\CreatePurchaseOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\CreateRefundOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\CreateRefundOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetPurchaseOrderStatusResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetPurchaserShopResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetRefundOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetSelectionProductRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetSelectionProductResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetSelectionProductSaleInfoRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetSelectionProductSaleInfoResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListCategoriesRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListCategoriesResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListLogisticsOrdersResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListPurchaserShopsRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListPurchaserShopsResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListSelectionProductSaleInfosRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListSelectionProductSaleInfosResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListSelectionProductsRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListSelectionProductsResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListSelectionSkuSaleInfosRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListSelectionSkuSaleInfosResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\QueryChildDivisionCodeRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\QueryChildDivisionCodeResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\QueryOrdersRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\QueryOrdersResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\RenderPurchaseOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\RenderPurchaseOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\RenderRefundOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\RenderRefundOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\SearchProductsRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\SearchProductsResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\SelectionGroupAddProductRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\SelectionGroupAddProductResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\SelectionGroupRemoveProductRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\SelectionGroupRemoveProductResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\SplitPurchaseOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\SplitPurchaseOrderResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Linkedmall extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'                 => 'linkedmall.aliyuncs.com',
            'cn-shanghai'                 => 'linkedmall.aliyuncs.com',
            'ap-northeast-1'              => 'linkedmall.aliyuncs.com',
            'ap-northeast-2-pop'          => 'linkedmall.aliyuncs.com',
            'ap-south-1'                  => 'linkedmall.aliyuncs.com',
            'ap-southeast-1'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-2'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-3'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-5'              => 'linkedmall.aliyuncs.com',
            'cn-beijing'                  => 'linkedmall.aliyuncs.com',
            'cn-beijing-finance-1'        => 'linkedmall.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'linkedmall.aliyuncs.com',
            'cn-beijing-gov-1'            => 'linkedmall.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'linkedmall.aliyuncs.com',
            'cn-chengdu'                  => 'linkedmall.aliyuncs.com',
            'cn-edge-1'                   => 'linkedmall.aliyuncs.com',
            'cn-fujian'                   => 'linkedmall.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-finance'         => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'linkedmall.aliyuncs.com',
            'cn-hongkong'                 => 'linkedmall.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'linkedmall.aliyuncs.com',
            'cn-huhehaote'                => 'linkedmall.aliyuncs.com',
            'cn-north-2-gov-1'            => 'linkedmall.aliyuncs.com',
            'cn-qingdao'                  => 'linkedmall.aliyuncs.com',
            'cn-qingdao-nebula'           => 'linkedmall.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'linkedmall.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'linkedmall.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'linkedmall.aliyuncs.com',
            'cn-shanghai-inner'           => 'linkedmall.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'linkedmall.aliyuncs.com',
            'cn-shenzhen'                 => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-inner'           => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'linkedmall.aliyuncs.com',
            'cn-wuhan'                    => 'linkedmall.aliyuncs.com',
            'cn-yushanfang'               => 'linkedmall.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'linkedmall.aliyuncs.com',
            'cn-zhangjiakou'              => 'linkedmall.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'linkedmall.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'linkedmall.aliyuncs.com',
            'eu-central-1'                => 'linkedmall.aliyuncs.com',
            'eu-west-1'                   => 'linkedmall.aliyuncs.com',
            'eu-west-1-oxs'               => 'linkedmall.aliyuncs.com',
            'me-east-1'                   => 'linkedmall.aliyuncs.com',
            'rus-west-1-pop'              => 'linkedmall.aliyuncs.com',
            'us-east-1'                   => 'linkedmall.aliyuncs.com',
            'us-west-1'                   => 'linkedmall.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('linkedmall', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 取消逆向单.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CancelRefundOrderResponse
     *
     * @param string         $disputeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelRefundOrderResponse
     */
    public function cancelRefundOrderWithOptions($disputeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CancelRefundOrder',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/' . URL::percentEncode($disputeId) . '/commands/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelRefundOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 取消逆向单.
     *
     * @returns CancelRefundOrderResponse
     *
     * @param string $disputeId
     *
     * @return CancelRefundOrderResponse
     */
    public function cancelRefundOrder($disputeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelRefundOrderWithOptions($disputeId, $headers, $runtime);
    }

    /**
     * 确认收货（订单）.
     *
     * @param request - ConfirmDisburseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ConfirmDisburseResponse
     *
     * @param ConfirmDisburseRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ConfirmDisburseResponse
     */
    public function confirmDisburseWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ConfirmDisburse',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/commands/confirmDisburse',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ConfirmDisburseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfirmDisburseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 确认收货（订单）.
     *
     * @param request - ConfirmDisburseRequest
     * @returns ConfirmDisburseResponse
     *
     * @param ConfirmDisburseRequest $request
     *
     * @return ConfirmDisburseResponse
     */
    public function confirmDisburse($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->confirmDisburseWithOptions($request, $headers, $runtime);
    }

    /**
     * 提交运单信息.
     *
     * @param request - CreateGoodsShippingNoticeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateGoodsShippingNoticeResponse
     *
     * @param CreateGoodsShippingNoticeRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateGoodsShippingNoticeResponse
     */
    public function createGoodsShippingNoticeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateGoodsShippingNotice',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/command/createGoodsShippingNotice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateGoodsShippingNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateGoodsShippingNoticeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交运单信息.
     *
     * @param request - CreateGoodsShippingNoticeRequest
     * @returns CreateGoodsShippingNoticeResponse
     *
     * @param CreateGoodsShippingNoticeRequest $request
     *
     * @return CreateGoodsShippingNoticeResponse
     */
    public function createGoodsShippingNotice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGoodsShippingNoticeWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建采购单.
     *
     * @param request - CreatePurchaseOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreatePurchaseOrderResponse
     *
     * @param CreatePurchaseOrderRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePurchaseOrderResponse
     */
    public function createPurchaseOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreatePurchaseOrder',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePurchaseOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePurchaseOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建采购单.
     *
     * @param request - CreatePurchaseOrderRequest
     * @returns CreatePurchaseOrderResponse
     *
     * @param CreatePurchaseOrderRequest $request
     *
     * @return CreatePurchaseOrderResponse
     */
    public function createPurchaseOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPurchaseOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建逆向单.
     *
     * @param request - CreateRefundOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateRefundOrderResponse
     *
     * @param CreateRefundOrderRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRefundOrderResponse
     */
    public function createRefundOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateRefundOrder',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRefundOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建逆向单.
     *
     * @param request - CreateRefundOrderRequest
     * @returns CreateRefundOrderResponse
     *
     * @param CreateRefundOrderRequest $request
     *
     * @return CreateRefundOrderResponse
     */
    public function createRefundOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRefundOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询主单详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetOrderResponse
     *
     * @param string         $orderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetOrderResponse
     */
    public function getOrderWithOptions($orderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetOrder',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/' . URL::percentEncode($orderId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询主单详情.
     *
     * @returns GetOrderResponse
     *
     * @param string $orderId
     *
     * @return GetOrderResponse
     */
    public function getOrder($orderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrderWithOptions($orderId, $headers, $runtime);
    }

    /**
     * 查询采购单状态
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPurchaseOrderStatusResponse
     *
     * @param string         $purchaseOrderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPurchaseOrderStatusResponse
     */
    public function getPurchaseOrderStatusWithOptions($purchaseOrderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPurchaseOrderStatus',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/' . URL::percentEncode($purchaseOrderId) . '/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPurchaseOrderStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPurchaseOrderStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询采购单状态
     *
     * @returns GetPurchaseOrderStatusResponse
     *
     * @param string $purchaseOrderId
     *
     * @return GetPurchaseOrderStatusResponse
     */
    public function getPurchaseOrderStatus($purchaseOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPurchaseOrderStatusWithOptions($purchaseOrderId, $headers, $runtime);
    }

    /**
     * 查询分销商店铺.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPurchaserShopResponse
     *
     * @param string         $purchaserId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPurchaserShopResponse
     */
    public function getPurchaserShopWithOptions($purchaserId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPurchaserShop',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaserShops/' . URL::percentEncode($purchaserId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPurchaserShopResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPurchaserShopResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询分销商店铺.
     *
     * @returns GetPurchaserShopResponse
     *
     * @param string $purchaserId
     *
     * @return GetPurchaserShopResponse
     */
    public function getPurchaserShop($purchaserId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPurchaserShopWithOptions($purchaserId, $headers, $runtime);
    }

    /**
     * 查询逆向单详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRefundOrderResponse
     *
     * @param string         $disputeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRefundOrderResponse
     */
    public function getRefundOrderWithOptions($disputeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRefundOrder',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/' . URL::percentEncode($disputeId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRefundOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询逆向单详情.
     *
     * @returns GetRefundOrderResponse
     *
     * @param string $disputeId
     *
     * @return GetRefundOrderResponse
     */
    public function getRefundOrder($disputeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRefundOrderWithOptions($disputeId, $headers, $runtime);
    }

    /**
     * 查询选品池商品详情.
     *
     * @param request - GetSelectionProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSelectionProductResponse
     *
     * @param string                     $productId
     * @param GetSelectionProductRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetSelectionProductResponse
     */
    public function getSelectionProductWithOptions($productId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->divisionCode) {
            @$query['divisionCode'] = $request->divisionCode;
        }

        if (null !== $request->purchaserId) {
            @$query['purchaserId'] = $request->purchaserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSelectionProduct',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/' . URL::percentEncode($productId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSelectionProductResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSelectionProductResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询选品池商品详情.
     *
     * @param request - GetSelectionProductRequest
     * @returns GetSelectionProductResponse
     *
     * @param string                     $productId
     * @param GetSelectionProductRequest $request
     *
     * @return GetSelectionProductResponse
     */
    public function getSelectionProduct($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSelectionProductWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * 查询选品池商品库存.
     *
     * @param request - GetSelectionProductSaleInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSelectionProductSaleInfoResponse
     *
     * @param string                             $productId
     * @param GetSelectionProductSaleInfoRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return GetSelectionProductSaleInfoResponse
     */
    public function getSelectionProductSaleInfoWithOptions($productId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->divisionCode) {
            @$query['divisionCode'] = $request->divisionCode;
        }

        if (null !== $request->purchaserId) {
            @$query['purchaserId'] = $request->purchaserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSelectionProductSaleInfo',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/' . URL::percentEncode($productId) . '/saleInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSelectionProductSaleInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSelectionProductSaleInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询选品池商品库存.
     *
     * @param request - GetSelectionProductSaleInfoRequest
     * @returns GetSelectionProductSaleInfoResponse
     *
     * @param string                             $productId
     * @param GetSelectionProductSaleInfoRequest $request
     *
     * @return GetSelectionProductSaleInfoResponse
     */
    public function getSelectionProductSaleInfo($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSelectionProductSaleInfoWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * 查询类目.
     *
     * @param request - ListCategoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListCategoriesResponse
     *
     * @param ListCategoriesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListCategoriesResponse
     */
    public function listCategoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ListCategories',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/categories/commands/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCategoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询类目.
     *
     * @param request - ListCategoriesRequest
     * @returns ListCategoriesResponse
     *
     * @param ListCategoriesRequest $request
     *
     * @return ListCategoriesResponse
     */
    public function listCategories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCategoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询物流信息（订单）.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListLogisticsOrdersResponse
     *
     * @param string         $orderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListLogisticsOrdersResponse
     */
    public function listLogisticsOrdersWithOptions($orderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListLogisticsOrders',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/' . URL::percentEncode($orderId) . '/logisticsOrders',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLogisticsOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLogisticsOrdersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询物流信息（订单）.
     *
     * @returns ListLogisticsOrdersResponse
     *
     * @param string $orderId
     *
     * @return ListLogisticsOrdersResponse
     */
    public function listLogisticsOrders($orderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogisticsOrdersWithOptions($orderId, $headers, $runtime);
    }

    /**
     * 采购方店铺列表查询.
     *
     * @param request - ListPurchaserShopsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPurchaserShopsResponse
     *
     * @param ListPurchaserShopsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListPurchaserShopsResponse
     */
    public function listPurchaserShopsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPurchaserShops',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaserShops',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPurchaserShopsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPurchaserShopsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 采购方店铺列表查询.
     *
     * @param request - ListPurchaserShopsRequest
     * @returns ListPurchaserShopsResponse
     *
     * @param ListPurchaserShopsRequest $request
     *
     * @return ListPurchaserShopsResponse
     */
    public function listPurchaserShops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPurchaserShopsWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量查询选品池商品库存.
     *
     * @param request - ListSelectionProductSaleInfosRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSelectionProductSaleInfosResponse
     *
     * @param ListSelectionProductSaleInfosRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListSelectionProductSaleInfosResponse
     */
    public function listSelectionProductSaleInfosWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ListSelectionProductSaleInfos',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/saleInfo/commands/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSelectionProductSaleInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSelectionProductSaleInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量查询选品池商品库存.
     *
     * @param request - ListSelectionProductSaleInfosRequest
     * @returns ListSelectionProductSaleInfosResponse
     *
     * @param ListSelectionProductSaleInfosRequest $request
     *
     * @return ListSelectionProductSaleInfosResponse
     */
    public function listSelectionProductSaleInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSelectionProductSaleInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询商品列表.
     *
     * @param request - ListSelectionProductsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSelectionProductsResponse
     *
     * @param ListSelectionProductsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListSelectionProductsResponse
     */
    public function listSelectionProductsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->purchaserId) {
            @$query['purchaserId'] = $request->purchaserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSelectionProducts',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSelectionProductsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSelectionProductsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询商品列表.
     *
     * @param request - ListSelectionProductsRequest
     * @returns ListSelectionProductsResponse
     *
     * @param ListSelectionProductsRequest $request
     *
     * @return ListSelectionProductsResponse
     */
    public function listSelectionProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSelectionProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量查询选品池商品SKU库存.
     *
     * @param request - ListSelectionSkuSaleInfosRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSelectionSkuSaleInfosResponse
     *
     * @param ListSelectionSkuSaleInfosRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSelectionSkuSaleInfosResponse
     */
    public function listSelectionSkuSaleInfosWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ListSelectionSkuSaleInfos',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/skus/saleInfo/commands/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSelectionSkuSaleInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSelectionSkuSaleInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量查询选品池商品SKU库存.
     *
     * @param request - ListSelectionSkuSaleInfosRequest
     * @returns ListSelectionSkuSaleInfosResponse
     *
     * @param ListSelectionSkuSaleInfosRequest $request
     *
     * @return ListSelectionSkuSaleInfosResponse
     */
    public function listSelectionSkuSaleInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSelectionSkuSaleInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询地址divisionCode.
     *
     * @param request - QueryChildDivisionCodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryChildDivisionCodeResponse
     *
     * @param QueryChildDivisionCodeRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryChildDivisionCodeResponse
     */
    public function queryChildDivisionCodeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'QueryChildDivisionCode',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/division/commands/queryChildDivisionCode',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryChildDivisionCodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryChildDivisionCodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询地址divisionCode.
     *
     * @param request - QueryChildDivisionCodeRequest
     * @returns QueryChildDivisionCodeResponse
     *
     * @param QueryChildDivisionCodeRequest $request
     *
     * @return QueryChildDivisionCodeResponse
     */
    public function queryChildDivisionCode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryChildDivisionCodeWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询主单列表.
     *
     * @param request - QueryOrdersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryOrdersResponse
     *
     * @param QueryOrdersRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return QueryOrdersResponse
     */
    public function queryOrdersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrders',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/commands/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryOrdersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询主单列表.
     *
     * @param request - QueryOrdersRequest
     * @returns QueryOrdersResponse
     *
     * @param QueryOrdersRequest $request
     *
     * @return QueryOrdersResponse
     */
    public function queryOrders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryOrdersWithOptions($request, $headers, $runtime);
    }

    /**
     * 渲染采购单.
     *
     * @param request - RenderPurchaseOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RenderPurchaseOrderResponse
     *
     * @param RenderPurchaseOrderRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RenderPurchaseOrderResponse
     */
    public function renderPurchaseOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'RenderPurchaseOrder',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/commands/render',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RenderPurchaseOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenderPurchaseOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 渲染采购单.
     *
     * @param request - RenderPurchaseOrderRequest
     * @returns RenderPurchaseOrderResponse
     *
     * @param RenderPurchaseOrderRequest $request
     *
     * @return RenderPurchaseOrderResponse
     */
    public function renderPurchaseOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renderPurchaseOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * 逆向单渲染.
     *
     * @param request - RenderRefundOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RenderRefundOrderResponse
     *
     * @param RenderRefundOrderRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return RenderRefundOrderResponse
     */
    public function renderRefundOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'RenderRefundOrder',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/commands/render',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RenderRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenderRefundOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 逆向单渲染.
     *
     * @param request - RenderRefundOrderRequest
     * @returns RenderRefundOrderResponse
     *
     * @param RenderRefundOrderRequest $request
     *
     * @return RenderRefundOrderResponse
     */
    public function renderRefundOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renderRefundOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * 搜索商品
     *
     * @param request - SearchProductsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchProductsResponse
     *
     * @param SearchProductsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SearchProductsResponse
     */
    public function searchProductsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->brandName) {
            @$body['brandName'] = $request->brandName;
        }

        if (null !== $request->categoryIds) {
            @$body['categoryIds'] = $request->categoryIds;
        }

        if (null !== $request->createEndTime) {
            @$body['createEndTime'] = $request->createEndTime;
        }

        if (null !== $request->createStartTime) {
            @$body['createStartTime'] = $request->createStartTime;
        }

        if (null !== $request->distributionHighPrice) {
            @$body['distributionHighPrice'] = $request->distributionHighPrice;
        }

        if (null !== $request->distributionHighPriceRatio) {
            @$body['distributionHighPriceRatio'] = $request->distributionHighPriceRatio;
        }

        if (null !== $request->distributionLowPrice) {
            @$body['distributionLowPrice'] = $request->distributionLowPrice;
        }

        if (null !== $request->distributionLowPriceRatio) {
            @$body['distributionLowPriceRatio'] = $request->distributionLowPriceRatio;
        }

        if (null !== $request->highMarkPrice) {
            @$body['highMarkPrice'] = $request->highMarkPrice;
        }

        if (null !== $request->highPrice) {
            @$body['highPrice'] = $request->highPrice;
        }

        if (null !== $request->inGroup) {
            @$body['inGroup'] = $request->inGroup;
        }

        if (null !== $request->inGroupEndTime) {
            @$body['inGroupEndTime'] = $request->inGroupEndTime;
        }

        if (null !== $request->inGroupStartTime) {
            @$body['inGroupStartTime'] = $request->inGroupStartTime;
        }

        if (null !== $request->inventoryRiskLevel) {
            @$body['inventoryRiskLevel'] = $request->inventoryRiskLevel;
        }

        if (null !== $request->lmItemId) {
            @$body['lmItemId'] = $request->lmItemId;
        }

        if (null !== $request->lowMarkPrice) {
            @$body['lowMarkPrice'] = $request->lowMarkPrice;
        }

        if (null !== $request->lowPrice) {
            @$body['lowPrice'] = $request->lowPrice;
        }

        if (null !== $request->modifyEndTime) {
            @$body['modifyEndTime'] = $request->modifyEndTime;
        }

        if (null !== $request->modifyStartTime) {
            @$body['modifyStartTime'] = $request->modifyStartTime;
        }

        if (null !== $request->orderBy) {
            @$body['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$body['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$body['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->platform) {
            @$body['platform'] = $request->platform;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productName) {
            @$body['productName'] = $request->productName;
        }

        if (null !== $request->productStatus) {
            @$body['productStatus'] = $request->productStatus;
        }

        if (null !== $request->purchaserId) {
            @$body['purchaserId'] = $request->purchaserId;
        }

        if (null !== $request->taxRate) {
            @$body['taxRate'] = $request->taxRate;
        }

        if (null !== $request->tradeModeAndCredit) {
            @$body['tradeModeAndCredit'] = $request->tradeModeAndCredit;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchProducts',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/selection-group/product/command/searchProduct',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchProductsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchProductsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 搜索商品
     *
     * @param request - SearchProductsRequest
     * @returns SearchProductsResponse
     *
     * @param SearchProductsRequest $request
     *
     * @return SearchProductsResponse
     */
    public function searchProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * 入库操作.
     *
     * @param request - SelectionGroupAddProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SelectionGroupAddProductResponse
     *
     * @param SelectionGroupAddProductRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return SelectionGroupAddProductResponse
     */
    public function selectionGroupAddProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->productIds) {
            @$body['productIds'] = $request->productIds;
        }

        if (null !== $request->purchaserId) {
            @$body['purchaserId'] = $request->purchaserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SelectionGroupAddProduct',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/selection-group/product/command/addProduct',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SelectionGroupAddProductResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SelectionGroupAddProductResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 入库操作.
     *
     * @param request - SelectionGroupAddProductRequest
     * @returns SelectionGroupAddProductResponse
     *
     * @param SelectionGroupAddProductRequest $request
     *
     * @return SelectionGroupAddProductResponse
     */
    public function selectionGroupAddProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectionGroupAddProductWithOptions($request, $headers, $runtime);
    }

    /**
     * 出库操作.
     *
     * @param request - SelectionGroupRemoveProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SelectionGroupRemoveProductResponse
     *
     * @param SelectionGroupRemoveProductRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return SelectionGroupRemoveProductResponse
     */
    public function selectionGroupRemoveProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->productIds) {
            @$body['productIds'] = $request->productIds;
        }

        if (null !== $request->purchaserId) {
            @$body['purchaserId'] = $request->purchaserId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SelectionGroupRemoveProduct',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/selection-group/product/command/removeProduct',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SelectionGroupRemoveProductResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SelectionGroupRemoveProductResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 出库操作.
     *
     * @param request - SelectionGroupRemoveProductRequest
     * @returns SelectionGroupRemoveProductResponse
     *
     * @param SelectionGroupRemoveProductRequest $request
     *
     * @return SelectionGroupRemoveProductResponse
     */
    public function selectionGroupRemoveProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectionGroupRemoveProductWithOptions($request, $headers, $runtime);
    }

    /**
     * 渲染拆分采购单.
     *
     * @param request - SplitPurchaseOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SplitPurchaseOrderResponse
     *
     * @param SplitPurchaseOrderRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SplitPurchaseOrderResponse
     */
    public function splitPurchaseOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'SplitPurchaseOrder',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/commands/split',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SplitPurchaseOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SplitPurchaseOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 渲染拆分采购单.
     *
     * @param request - SplitPurchaseOrderRequest
     * @returns SplitPurchaseOrderResponse
     *
     * @param SplitPurchaseOrderRequest $request
     *
     * @return SplitPurchaseOrderResponse
     */
    public function splitPurchaseOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->splitPurchaseOrderWithOptions($request, $headers, $runtime);
    }
}
