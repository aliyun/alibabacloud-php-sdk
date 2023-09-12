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
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetProductRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetProductResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetProductSaleInfoRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetProductSaleInfoResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetPurchaseOrderStatusResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetRefundOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\GetShopResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListLogisticsOrdersResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListProductGeneralBillsRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListProductGeneralBillsResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListProductSaleInfosRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListProductSaleInfosResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListProductsRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListProductsResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListShopsRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListShopsResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListSkuSaleInfosRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\ListSkuSaleInfosResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\QueryChildDivisionCodeRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\QueryChildDivisionCodeResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\QueryOrdersRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\QueryOrdersResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\RenderPurchaseOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\RenderPurchaseOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\RenderRefundOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20230930\Models\RenderRefundOrderResponse;
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/refunds/' . OpenApiUtilClient::getEncodeParam($disputeId) . '/commands/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ConfirmDisburseRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ConfirmDisburseResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/orders/commands/confirmDisburse',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ConfirmDisburseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateGoodsShippingNoticeRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateGoodsShippingNoticeResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/refunds/command/createGoodsShippingNotice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGoodsShippingNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreatePurchaseOrderRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePurchaseOrderResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/purchaseOrders',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePurchaseOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateRefundOrderRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRefundOrderResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/refunds',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/orders/' . OpenApiUtilClient::getEncodeParam($orderId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string            $productId
     * @param GetProductRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetProductResponse
     */
    public function getProductWithOptions($productId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->distributorShopId)) {
            $query['distributorShopId'] = $request->distributorShopId;
        }
        if (!Utils::isUnset($request->divisionCode)) {
            $query['divisionCode'] = $request->divisionCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProduct',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/products/' . OpenApiUtilClient::getEncodeParam($productId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $productId
     * @param GetProductRequest $request
     *
     * @return GetProductResponse
     */
    public function getProduct($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductWithOptions($productId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $productId
     * @param GetProductSaleInfoRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetProductSaleInfoResponse
     */
    public function getProductSaleInfoWithOptions($productId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->distributorShopId)) {
            $query['distributorShopId'] = $request->distributorShopId;
        }
        if (!Utils::isUnset($request->divisionCode)) {
            $query['divisionCode'] = $request->divisionCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProductSaleInfo',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/products/' . OpenApiUtilClient::getEncodeParam($productId) . '/saleInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProductSaleInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $productId
     * @param GetProductSaleInfoRequest $request
     *
     * @return GetProductSaleInfoResponse
     */
    public function getProductSaleInfo($productId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductSaleInfoWithOptions($productId, $request, $headers, $runtime);
    }

    /**
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/purchaseOrders/' . OpenApiUtilClient::getEncodeParam($purchaseOrderId) . '/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPurchaseOrderStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/refunds/' . OpenApiUtilClient::getEncodeParam($disputeId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string         $shopId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetShopResponse
     */
    public function getShopWithOptions($shopId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetShop',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/shops/' . OpenApiUtilClient::getEncodeParam($shopId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetShopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $shopId
     *
     * @return GetShopResponse
     */
    public function getShop($shopId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getShopWithOptions($shopId, $headers, $runtime);
    }

    /**
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/orders/' . OpenApiUtilClient::getEncodeParam($orderId) . '/logisticsOrders',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogisticsOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListProductGeneralBillsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListProductGeneralBillsResponse
     */
    public function listProductGeneralBillsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ListProductGeneralBills',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/productGeneralBills',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductGeneralBillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProductGeneralBillsRequest $request
     *
     * @return ListProductGeneralBillsResponse
     */
    public function listProductGeneralBills($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductGeneralBillsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProductSaleInfosRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListProductSaleInfosResponse
     */
    public function listProductSaleInfosWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ListProductSaleInfos',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/products/saleInfo/commands/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductSaleInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProductSaleInfosRequest $request
     *
     * @return ListProductSaleInfosResponse
     */
    public function listProductSaleInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductSaleInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProductsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->distributorShopId)) {
            $query['distributorShopId'] = $request->distributorShopId;
        }
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
            'action'      => 'ListProducts',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/products',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProductsRequest $request
     *
     * @return ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListShopsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListShopsResponse
     */
    public function listShopsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelSupplierId)) {
            $query['channelSupplierId'] = $request->channelSupplierId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->shopId)) {
            $query['shopId'] = $request->shopId;
        }
        if (!Utils::isUnset($request->shopName)) {
            $query['shopName'] = $request->shopName;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListShops',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/shops',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListShopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListShopsRequest $request
     *
     * @return ListShopsResponse
     */
    public function listShops($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShopsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSkuSaleInfosRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListSkuSaleInfosResponse
     */
    public function listSkuSaleInfosWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ListSkuSaleInfos',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/skus/saleInfo/commands/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSkuSaleInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSkuSaleInfosRequest $request
     *
     * @return ListSkuSaleInfosResponse
     */
    public function listSkuSaleInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSkuSaleInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryChildDivisionCodeRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryChildDivisionCodeResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/division/commands/queryChildDivisionCode',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryChildDivisionCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryOrdersRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return QueryOrdersResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/orders/commands/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RenderPurchaseOrderRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RenderPurchaseOrderResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/purchaseOrders/commands/render',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenderPurchaseOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RenderRefundOrderRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return RenderRefundOrderResponse
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
            'pathname'    => '/opensaas-s2b/opensaas-s2b-biz-trade/v1/refunds/commands/render',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenderRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
}
