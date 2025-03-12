<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 取消逆向单
     *  *
     * @param string         $disputeId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return CancelRefundOrderResponse CancelRefundOrderResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/' . OpenApiUtilClient::getEncodeParam($disputeId) . '/commands/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CancelRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelRefundOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 取消逆向单
     *  *
     * @param string $disputeId
     *
     * @return CancelRefundOrderResponse CancelRefundOrderResponse
     */
    public function cancelRefundOrder($disputeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelRefundOrderWithOptions($disputeId, $headers, $runtime);
    }

    /**
     * @summary 确认收货（订单）
     *  *
     * @param ConfirmDisburseRequest $request ConfirmDisburseRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfirmDisburseResponse ConfirmDisburseResponse
     */
    public function confirmDisburseWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ConfirmDisburseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfirmDisburseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 确认收货（订单）
     *  *
     * @param ConfirmDisburseRequest $request ConfirmDisburseRequest
     *
     * @return ConfirmDisburseResponse ConfirmDisburseResponse
     */
    public function confirmDisburse($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->confirmDisburseWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 提交运单信息
     *  *
     * @param CreateGoodsShippingNoticeRequest $request CreateGoodsShippingNoticeRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGoodsShippingNoticeResponse CreateGoodsShippingNoticeResponse
     */
    public function createGoodsShippingNoticeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateGoodsShippingNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateGoodsShippingNoticeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交运单信息
     *  *
     * @param CreateGoodsShippingNoticeRequest $request CreateGoodsShippingNoticeRequest
     *
     * @return CreateGoodsShippingNoticeResponse CreateGoodsShippingNoticeResponse
     */
    public function createGoodsShippingNotice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGoodsShippingNoticeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建采购单
     *  *
     * @param CreatePurchaseOrderRequest $request CreatePurchaseOrderRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePurchaseOrderResponse CreatePurchaseOrderResponse
     */
    public function createPurchaseOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreatePurchaseOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePurchaseOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建采购单
     *  *
     * @param CreatePurchaseOrderRequest $request CreatePurchaseOrderRequest
     *
     * @return CreatePurchaseOrderResponse CreatePurchaseOrderResponse
     */
    public function createPurchaseOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPurchaseOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建逆向单
     *  *
     * @param CreateRefundOrderRequest $request CreateRefundOrderRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRefundOrderResponse CreateRefundOrderResponse
     */
    public function createRefundOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRefundOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建逆向单
     *  *
     * @param CreateRefundOrderRequest $request CreateRefundOrderRequest
     *
     * @return CreateRefundOrderResponse CreateRefundOrderResponse
     */
    public function createRefundOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRefundOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询主单详情
     *  *
     * @param string         $orderId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOrderResponse GetOrderResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/' . OpenApiUtilClient::getEncodeParam($orderId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询主单详情
     *  *
     * @param string $orderId
     *
     * @return GetOrderResponse GetOrderResponse
     */
    public function getOrder($orderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrderWithOptions($orderId, $headers, $runtime);
    }

    /**
     * @summary 查询采购单状态
     *  *
     * @param string         $purchaseOrderId
     * @param string[]       $headers         map
     * @param RuntimeOptions $runtime         runtime options for this request RuntimeOptions
     *
     * @return GetPurchaseOrderStatusResponse GetPurchaseOrderStatusResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/' . OpenApiUtilClient::getEncodeParam($purchaseOrderId) . '/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetPurchaseOrderStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPurchaseOrderStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询采购单状态
     *  *
     * @param string $purchaseOrderId
     *
     * @return GetPurchaseOrderStatusResponse GetPurchaseOrderStatusResponse
     */
    public function getPurchaseOrderStatus($purchaseOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPurchaseOrderStatusWithOptions($purchaseOrderId, $headers, $runtime);
    }

    /**
     * @summary 查询分销商店铺
     *  *
     * @param string         $purchaserId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetPurchaserShopResponse GetPurchaserShopResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaserShops/' . OpenApiUtilClient::getEncodeParam($purchaserId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetPurchaserShopResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPurchaserShopResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询分销商店铺
     *  *
     * @param string $purchaserId
     *
     * @return GetPurchaserShopResponse GetPurchaserShopResponse
     */
    public function getPurchaserShop($purchaserId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPurchaserShopWithOptions($purchaserId, $headers, $runtime);
    }

    /**
     * @summary 查询逆向单详情
     *  *
     * @param string         $disputeId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetRefundOrderResponse GetRefundOrderResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/' . OpenApiUtilClient::getEncodeParam($disputeId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRefundOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询逆向单详情
     *  *
     * @param string $disputeId
     *
     * @return GetRefundOrderResponse GetRefundOrderResponse
     */
    public function getRefundOrder($disputeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRefundOrderWithOptions($disputeId, $headers, $runtime);
    }

    /**
     * @summary 查询选品池商品详情
     *  *
     * @param string                     $productId
     * @param GetSelectionProductRequest $request   GetSelectionProductRequest
     * @param string[]                   $headers   map
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetSelectionProductResponse GetSelectionProductResponse
     */
    public function getSelectionProductWithOptions($productId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->divisionCode)) {
            $query['divisionCode'] = $request->divisionCode;
        }
        if (!Utils::isUnset($request->purchaserId)) {
            $query['purchaserId'] = $request->purchaserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSelectionProduct',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/' . OpenApiUtilClient::getEncodeParam($productId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSelectionProductResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSelectionProductResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询选品池商品详情
     *  *
     * @param string                     $productId
     * @param GetSelectionProductRequest $request   GetSelectionProductRequest
     *
     * @return GetSelectionProductResponse GetSelectionProductResponse
     */
    public function getSelectionProduct($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSelectionProductWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询选品池商品库存
     *  *
     * @param string                             $productId
     * @param GetSelectionProductSaleInfoRequest $request   GetSelectionProductSaleInfoRequest
     * @param string[]                           $headers   map
     * @param RuntimeOptions                     $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetSelectionProductSaleInfoResponse GetSelectionProductSaleInfoResponse
     */
    public function getSelectionProductSaleInfoWithOptions($productId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->divisionCode)) {
            $query['divisionCode'] = $request->divisionCode;
        }
        if (!Utils::isUnset($request->purchaserId)) {
            $query['purchaserId'] = $request->purchaserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSelectionProductSaleInfo',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/' . OpenApiUtilClient::getEncodeParam($productId) . '/saleInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSelectionProductSaleInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSelectionProductSaleInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询选品池商品库存
     *  *
     * @param string                             $productId
     * @param GetSelectionProductSaleInfoRequest $request   GetSelectionProductSaleInfoRequest
     *
     * @return GetSelectionProductSaleInfoResponse GetSelectionProductSaleInfoResponse
     */
    public function getSelectionProductSaleInfo($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSelectionProductSaleInfoWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询类目
     *  *
     * @param ListCategoriesRequest $request ListCategoriesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCategoriesResponse ListCategoriesResponse
     */
    public function listCategoriesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCategoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询类目
     *  *
     * @param ListCategoriesRequest $request ListCategoriesRequest
     *
     * @return ListCategoriesResponse ListCategoriesResponse
     */
    public function listCategories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCategoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询物流信息（订单）
     *  *
     * @param string         $orderId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLogisticsOrdersResponse ListLogisticsOrdersResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/' . OpenApiUtilClient::getEncodeParam($orderId) . '/logisticsOrders',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLogisticsOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLogisticsOrdersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询物流信息（订单）
     *  *
     * @param string $orderId
     *
     * @return ListLogisticsOrdersResponse ListLogisticsOrdersResponse
     */
    public function listLogisticsOrders($orderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogisticsOrdersWithOptions($orderId, $headers, $runtime);
    }

    /**
     * @summary 采购方店铺列表查询
     *  *
     * @param ListPurchaserShopsRequest $request ListPurchaserShopsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPurchaserShopsResponse ListPurchaserShopsResponse
     */
    public function listPurchaserShopsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListPurchaserShopsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPurchaserShopsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 采购方店铺列表查询
     *  *
     * @param ListPurchaserShopsRequest $request ListPurchaserShopsRequest
     *
     * @return ListPurchaserShopsResponse ListPurchaserShopsResponse
     */
    public function listPurchaserShops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPurchaserShopsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量查询选品池商品库存
     *  *
     * @param ListSelectionProductSaleInfosRequest $request ListSelectionProductSaleInfosRequest
     * @param string[]                             $headers map
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSelectionProductSaleInfosResponse ListSelectionProductSaleInfosResponse
     */
    public function listSelectionProductSaleInfosWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSelectionProductSaleInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSelectionProductSaleInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 批量查询选品池商品库存
     *  *
     * @param ListSelectionProductSaleInfosRequest $request ListSelectionProductSaleInfosRequest
     *
     * @return ListSelectionProductSaleInfosResponse ListSelectionProductSaleInfosResponse
     */
    public function listSelectionProductSaleInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSelectionProductSaleInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询商品列表
     *  *
     * @param ListSelectionProductsRequest $request ListSelectionProductsRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSelectionProductsResponse ListSelectionProductsResponse
     */
    public function listSelectionProductsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->purchaserId)) {
            $query['purchaserId'] = $request->purchaserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSelectionProductsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSelectionProductsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询商品列表
     *  *
     * @param ListSelectionProductsRequest $request ListSelectionProductsRequest
     *
     * @return ListSelectionProductsResponse ListSelectionProductsResponse
     */
    public function listSelectionProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSelectionProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量查询选品池商品SKU库存
     *  *
     * @param ListSelectionSkuSaleInfosRequest $request ListSelectionSkuSaleInfosRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSelectionSkuSaleInfosResponse ListSelectionSkuSaleInfosResponse
     */
    public function listSelectionSkuSaleInfosWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSelectionSkuSaleInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSelectionSkuSaleInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 批量查询选品池商品SKU库存
     *  *
     * @param ListSelectionSkuSaleInfosRequest $request ListSelectionSkuSaleInfosRequest
     *
     * @return ListSelectionSkuSaleInfosResponse ListSelectionSkuSaleInfosResponse
     */
    public function listSelectionSkuSaleInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSelectionSkuSaleInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询地址divisionCode
     *  *
     * @param QueryChildDivisionCodeRequest $request QueryChildDivisionCodeRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryChildDivisionCodeResponse QueryChildDivisionCodeResponse
     */
    public function queryChildDivisionCodeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryChildDivisionCodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryChildDivisionCodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询地址divisionCode
     *  *
     * @param QueryChildDivisionCodeRequest $request QueryChildDivisionCodeRequest
     *
     * @return QueryChildDivisionCodeResponse QueryChildDivisionCodeResponse
     */
    public function queryChildDivisionCode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryChildDivisionCodeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询主单列表
     *  *
     * @param QueryOrdersRequest $request QueryOrdersRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryOrdersResponse QueryOrdersResponse
     */
    public function queryOrdersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryOrdersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询主单列表
     *  *
     * @param QueryOrdersRequest $request QueryOrdersRequest
     *
     * @return QueryOrdersResponse QueryOrdersResponse
     */
    public function queryOrders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryOrdersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 渲染采购单
     *  *
     * @param RenderPurchaseOrderRequest $request RenderPurchaseOrderRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RenderPurchaseOrderResponse RenderPurchaseOrderResponse
     */
    public function renderPurchaseOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RenderPurchaseOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenderPurchaseOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 渲染采购单
     *  *
     * @param RenderPurchaseOrderRequest $request RenderPurchaseOrderRequest
     *
     * @return RenderPurchaseOrderResponse RenderPurchaseOrderResponse
     */
    public function renderPurchaseOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renderPurchaseOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 逆向单渲染
     *  *
     * @param RenderRefundOrderRequest $request RenderRefundOrderRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RenderRefundOrderResponse RenderRefundOrderResponse
     */
    public function renderRefundOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RenderRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenderRefundOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 逆向单渲染
     *  *
     * @param RenderRefundOrderRequest $request RenderRefundOrderRequest
     *
     * @return RenderRefundOrderResponse RenderRefundOrderResponse
     */
    public function renderRefundOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renderRefundOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 搜索商品
     *  *
     * @param SearchProductsRequest $request SearchProductsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchProductsResponse SearchProductsResponse
     */
    public function searchProductsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->brandName)) {
            $body['brandName'] = $request->brandName;
        }
        if (!Utils::isUnset($request->categoryIds)) {
            $body['categoryIds'] = $request->categoryIds;
        }
        if (!Utils::isUnset($request->createEndTime)) {
            $body['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            $body['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->distributionHighPrice)) {
            $body['distributionHighPrice'] = $request->distributionHighPrice;
        }
        if (!Utils::isUnset($request->distributionHighPriceRatio)) {
            $body['distributionHighPriceRatio'] = $request->distributionHighPriceRatio;
        }
        if (!Utils::isUnset($request->distributionLowPrice)) {
            $body['distributionLowPrice'] = $request->distributionLowPrice;
        }
        if (!Utils::isUnset($request->distributionLowPriceRatio)) {
            $body['distributionLowPriceRatio'] = $request->distributionLowPriceRatio;
        }
        if (!Utils::isUnset($request->highMarkPrice)) {
            $body['highMarkPrice'] = $request->highMarkPrice;
        }
        if (!Utils::isUnset($request->highPrice)) {
            $body['highPrice'] = $request->highPrice;
        }
        if (!Utils::isUnset($request->inGroup)) {
            $body['inGroup'] = $request->inGroup;
        }
        if (!Utils::isUnset($request->inGroupEndTime)) {
            $body['inGroupEndTime'] = $request->inGroupEndTime;
        }
        if (!Utils::isUnset($request->inGroupStartTime)) {
            $body['inGroupStartTime'] = $request->inGroupStartTime;
        }
        if (!Utils::isUnset($request->inventoryRiskLevel)) {
            $body['inventoryRiskLevel'] = $request->inventoryRiskLevel;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $body['lmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->lowMarkPrice)) {
            $body['lowMarkPrice'] = $request->lowMarkPrice;
        }
        if (!Utils::isUnset($request->lowPrice)) {
            $body['lowPrice'] = $request->lowPrice;
        }
        if (!Utils::isUnset($request->modifyEndTime)) {
            $body['modifyEndTime'] = $request->modifyEndTime;
        }
        if (!Utils::isUnset($request->modifyStartTime)) {
            $body['modifyStartTime'] = $request->modifyStartTime;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderDirection)) {
            $body['orderDirection'] = $request->orderDirection;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productName)) {
            $body['productName'] = $request->productName;
        }
        if (!Utils::isUnset($request->productStatus)) {
            $body['productStatus'] = $request->productStatus;
        }
        if (!Utils::isUnset($request->purchaserId)) {
            $body['purchaserId'] = $request->purchaserId;
        }
        if (!Utils::isUnset($request->taxRate)) {
            $body['taxRate'] = $request->taxRate;
        }
        if (!Utils::isUnset($request->tradeModeAndCredit)) {
            $body['tradeModeAndCredit'] = $request->tradeModeAndCredit;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchProductsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchProductsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 搜索商品
     *  *
     * @param SearchProductsRequest $request SearchProductsRequest
     *
     * @return SearchProductsResponse SearchProductsResponse
     */
    public function searchProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 入库操作
     *  *
     * @param SelectionGroupAddProductRequest $request SelectionGroupAddProductRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SelectionGroupAddProductResponse SelectionGroupAddProductResponse
     */
    public function selectionGroupAddProductWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->productIds)) {
            $body['productIds'] = $request->productIds;
        }
        if (!Utils::isUnset($request->purchaserId)) {
            $body['purchaserId'] = $request->purchaserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SelectionGroupAddProductResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SelectionGroupAddProductResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 入库操作
     *  *
     * @param SelectionGroupAddProductRequest $request SelectionGroupAddProductRequest
     *
     * @return SelectionGroupAddProductResponse SelectionGroupAddProductResponse
     */
    public function selectionGroupAddProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectionGroupAddProductWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 出库操作
     *  *
     * @param SelectionGroupRemoveProductRequest $request SelectionGroupRemoveProductRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SelectionGroupRemoveProductResponse SelectionGroupRemoveProductResponse
     */
    public function selectionGroupRemoveProductWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->productIds)) {
            $body['productIds'] = $request->productIds;
        }
        if (!Utils::isUnset($request->purchaserId)) {
            $body['purchaserId'] = $request->purchaserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SelectionGroupRemoveProductResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SelectionGroupRemoveProductResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 出库操作
     *  *
     * @param SelectionGroupRemoveProductRequest $request SelectionGroupRemoveProductRequest
     *
     * @return SelectionGroupRemoveProductResponse SelectionGroupRemoveProductResponse
     */
    public function selectionGroupRemoveProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectionGroupRemoveProductWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 渲染拆分采购单
     *  *
     * @param SplitPurchaseOrderRequest $request SplitPurchaseOrderRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SplitPurchaseOrderResponse SplitPurchaseOrderResponse
     */
    public function splitPurchaseOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SplitPurchaseOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SplitPurchaseOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 渲染拆分采购单
     *  *
     * @param SplitPurchaseOrderRequest $request SplitPurchaseOrderRequest
     *
     * @return SplitPurchaseOrderResponse SplitPurchaseOrderResponse
     */
    public function splitPurchaseOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->splitPurchaseOrderWithOptions($request, $headers, $runtime);
    }
}
