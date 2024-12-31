<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bss\V20140714;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CreateOrderRequest $request CreateOrderRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrderResponse CreateOrderResponse
     */
    public function createOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->paramStr)) {
            $query['paramStr'] = $request->paramStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrder',
            'version'     => '2014-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrderRequest $request CreateOrderRequest
     *
     * @return CreateOrderResponse CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderWithOptions($request, $runtime);
    }

    /**
     * @summary 获取现金明细
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCashDetailResponse DescribeCashDetailResponse
     */
    public function describeCashDetailWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeCashDetail',
            'version'     => '2014-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCashDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取现金明细
     *  *
     * @return DescribeCashDetailResponse DescribeCashDetailResponse
     */
    public function describeCashDetail()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCashDetailWithOptions($runtime);
    }

    /**
     * @param DescribeCouponListRequest $request DescribeCouponListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCouponListResponse DescribeCouponListResponse
     */
    public function describeCouponListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDeliveryTime)) {
            $query['EndDeliveryTime'] = $request->endDeliveryTime;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDeliveryTime)) {
            $query['StartDeliveryTime'] = $request->startDeliveryTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCouponList',
            'version'     => '2014-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCouponListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCouponListRequest $request DescribeCouponListRequest
     *
     * @return DescribeCouponListResponse DescribeCouponListResponse
     */
    public function describeCouponList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCouponListWithOptions($request, $runtime);
    }

    /**
     * @summary OpenCallback
     *  *
     * @param OpenCallbackRequest $request OpenCallbackRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenCallbackResponse OpenCallbackResponse
     */
    public function openCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->paramStr)) {
            $query['paramStr'] = $request->paramStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenCallback',
            'version'     => '2014-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary OpenCallback
     *  *
     * @param OpenCallbackRequest $request OpenCallbackRequest
     *
     * @return OpenCallbackResponse OpenCallbackResponse
     */
    public function openCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openCallbackWithOptions($request, $runtime);
    }

    /**
     * @param QueryForCssOrderRequest $request QueryForCssOrderRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryForCssOrderResponse QueryForCssOrderResponse
     */
    public function queryForCssOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->paramStr)) {
            $query['paramStr'] = $request->paramStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryForCssOrder',
            'version'     => '2014-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryForCssOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryForCssOrderRequest $request QueryForCssOrderRequest
     *
     * @return QueryForCssOrderResponse QueryForCssOrderResponse
     */
    public function queryForCssOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryForCssOrderWithOptions($request, $runtime);
    }

    /**
     * @param VnoBatchRefundOrderRequest $request VnoBatchRefundOrderRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return VnoBatchRefundOrderResponse VnoBatchRefundOrderResponse
     */
    public function vnoBatchRefundOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->paramStr)) {
            $query['paramStr'] = $request->paramStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'vnoBatchRefundOrder',
            'version'     => '2014-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VnoBatchRefundOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VnoBatchRefundOrderRequest $request VnoBatchRefundOrderRequest
     *
     * @return VnoBatchRefundOrderResponse VnoBatchRefundOrderResponse
     */
    public function vnoBatchRefundOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vnoBatchRefundOrderWithOptions($request, $runtime);
    }
}
