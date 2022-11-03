<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\ChangeApplicationInfoRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\ChangeApplicationInfoResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\ChargeFlowRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\ChargeFlowResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\CreateApplicationInfoRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\CreateApplicationInfoResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetAliyunXgipTokenResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetApplicationRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetApplicationResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowInstanceRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowInstanceResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowProductListRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowProductListResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowUsageRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowUsageResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowUsageStatisticRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowUsageStatisticResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetInventoryInfoRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetInventoryInfoResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetItemInstListRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetItemInstListResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetItemListRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetItemListResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetOrderFreeFlowProductStatusRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetOrderFreeFlowProductStatusResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetOrderItemListResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetQosFlowUsageRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetQosFlowUsageResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetQosUsageStatisticRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetQosUsageStatisticResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetUatDataListRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetUatDataListResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetUatSpecCtDataRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetUatSpecCtDataResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\MockGetOrderFreeFlowProductStatusRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\MockGetOrderFreeFlowProductStatusResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\MockOrderFreeFlowProductRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\MockOrderFreeFlowProductResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\ModifyApplicationRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\ModifyApplicationResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\OrderFreeFlowProductRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\OrderFreeFlowProductResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\OrderQosProductRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\OrderQosProductResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\QueryOrderListRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\QueryOrderListResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\SaveApplicationInfoRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\SaveApplicationInfoResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkChargeFlowRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkChargeFlowResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkGetInventoryInfoRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkGetInventoryInfoResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkGetItemInstListRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkGetItemInstListResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkOrderQosProductRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkOrderQosProductResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkValidateStatusRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\SdkValidateStatusResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\ValidateStatusRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\ValidateStatusResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\ValidControllerAuthorRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\ValidControllerAuthorResponse;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\ValidFlowRequest;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\ValidFlowResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class XgipPop extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('xgippop', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ChangeApplicationInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ChangeApplicationInfoResponse
     */
    public function changeApplicationInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliUid)) {
            $body['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appTypeList)) {
            $body['AppTypeList'] = $request->appTypeList;
        }
        if (!Utils::isUnset($request->appingList)) {
            $body['AppingList'] = $request->appingList;
        }
        if (!Utils::isUnset($request->itemCode)) {
            $body['ItemCode'] = $request->itemCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeApplicationInfo',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeApplicationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeApplicationInfoRequest $request
     *
     * @return ChangeApplicationInfoResponse
     */
    public function changeApplicationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeApplicationInfoWithOptions($request, $runtime);
    }

    /**
     * @param ChargeFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ChargeFlowResponse
     */
    public function chargeFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->itemCode)) {
            $query['ItemCode'] = $request->itemCode;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->UId)) {
            $query['UId'] = $request->UId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChargeFlow',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChargeFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChargeFlowRequest $request
     *
     * @return ChargeFlowResponse
     */
    public function chargeFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chargeFlowWithOptions($request, $runtime);
    }

    /**
     * @param CreateApplicationInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateApplicationInfoResponse
     */
    public function createApplicationInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliUid)) {
            $body['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appTypeList)) {
            $body['AppTypeList'] = $request->appTypeList;
        }
        if (!Utils::isUnset($request->appingList)) {
            $body['AppingList'] = $request->appingList;
        }
        if (!Utils::isUnset($request->itemCode)) {
            $body['ItemCode'] = $request->itemCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApplicationInfo',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApplicationInfoRequest $request
     *
     * @return CreateApplicationInfoResponse
     */
    public function createApplicationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationInfoWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetAliyunXgipTokenResponse
     */
    public function getAliyunXgipTokenWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetAliyunXgipToken',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAliyunXgipTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetAliyunXgipTokenResponse
     */
    public function getAliyunXgipToken()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAliyunXgipTokenWithOptions($runtime);
    }

    /**
     * @param GetApplicationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplication',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetApplicationRequest $request
     *
     * @return GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationWithOptions($request, $runtime);
    }

    /**
     * @param GetFreeFlowInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetFreeFlowInstanceResponse
     */
    public function getFreeFlowInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFreeFlowInstance',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFreeFlowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFreeFlowInstanceRequest $request
     *
     * @return GetFreeFlowInstanceResponse
     */
    public function getFreeFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFreeFlowInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetFreeFlowProductListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetFreeFlowProductListResponse
     */
    public function getFreeFlowProductListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFreeFlowProductList',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFreeFlowProductListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFreeFlowProductListRequest $request
     *
     * @return GetFreeFlowProductListResponse
     */
    public function getFreeFlowProductList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFreeFlowProductListWithOptions($request, $runtime);
    }

    /**
     * @param GetFreeFlowUsageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetFreeFlowUsageResponse
     */
    public function getFreeFlowUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFreeFlowUsage',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFreeFlowUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFreeFlowUsageRequest $request
     *
     * @return GetFreeFlowUsageResponse
     */
    public function getFreeFlowUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFreeFlowUsageWithOptions($request, $runtime);
    }

    /**
     * @param GetFreeFlowUsageStatisticRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetFreeFlowUsageStatisticResponse
     */
    public function getFreeFlowUsageStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFreeFlowUsageStatistic',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFreeFlowUsageStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFreeFlowUsageStatisticRequest $request
     *
     * @return GetFreeFlowUsageStatisticResponse
     */
    public function getFreeFlowUsageStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFreeFlowUsageStatisticWithOptions($request, $runtime);
    }

    /**
     * @param GetInventoryInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetInventoryInfoResponse
     */
    public function getInventoryInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInventoryInfo',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInventoryInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInventoryInfoRequest $request
     *
     * @return GetInventoryInfoResponse
     */
    public function getInventoryInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInventoryInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetItemInstListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetItemInstListResponse
     */
    public function getItemInstListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetItemInstList',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetItemInstListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetItemInstListRequest $request
     *
     * @return GetItemInstListResponse
     */
    public function getItemInstList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getItemInstListWithOptions($request, $runtime);
    }

    /**
     * @param GetItemListRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetItemListResponse
     */
    public function getItemListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetItemList',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetItemListRequest $request
     *
     * @return GetItemListResponse
     */
    public function getItemList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getItemListWithOptions($request, $runtime);
    }

    /**
     * @param GetOrderFreeFlowProductStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetOrderFreeFlowProductStatusResponse
     */
    public function getOrderFreeFlowProductStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOrderFreeFlowProductStatus',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOrderFreeFlowProductStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOrderFreeFlowProductStatusRequest $request
     *
     * @return GetOrderFreeFlowProductStatusResponse
     */
    public function getOrderFreeFlowProductStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderFreeFlowProductStatusWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetOrderItemListResponse
     */
    public function getOrderItemListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetOrderItemList',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOrderItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetOrderItemListResponse
     */
    public function getOrderItemList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderItemListWithOptions($runtime);
    }

    /**
     * @param GetQosFlowUsageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetQosFlowUsageResponse
     */
    public function getQosFlowUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQosFlowUsage',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQosFlowUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQosFlowUsageRequest $request
     *
     * @return GetQosFlowUsageResponse
     */
    public function getQosFlowUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQosFlowUsageWithOptions($request, $runtime);
    }

    /**
     * @param GetQosUsageStatisticRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetQosUsageStatisticResponse
     */
    public function getQosUsageStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQosUsageStatistic',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQosUsageStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQosUsageStatisticRequest $request
     *
     * @return GetQosUsageStatisticResponse
     */
    public function getQosUsageStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQosUsageStatisticWithOptions($request, $runtime);
    }

    /**
     * @param GetUatDataListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetUatDataListResponse
     */
    public function getUatDataListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUatDataList',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUatDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUatDataListRequest $request
     *
     * @return GetUatDataListResponse
     */
    public function getUatDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUatDataListWithOptions($request, $runtime);
    }

    /**
     * @param GetUatSpecCtDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetUatSpecCtDataResponse
     */
    public function getUatSpecCtDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUatSpecCtData',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUatSpecCtDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUatSpecCtDataRequest $request
     *
     * @return GetUatSpecCtDataResponse
     */
    public function getUatSpecCtData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUatSpecCtDataWithOptions($request, $runtime);
    }

    /**
     * @param MockGetOrderFreeFlowProductStatusRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return MockGetOrderFreeFlowProductStatusResponse
     */
    public function mockGetOrderFreeFlowProductStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MockGetOrderFreeFlowProductStatus',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MockGetOrderFreeFlowProductStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MockGetOrderFreeFlowProductStatusRequest $request
     *
     * @return MockGetOrderFreeFlowProductStatusResponse
     */
    public function mockGetOrderFreeFlowProductStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mockGetOrderFreeFlowProductStatusWithOptions($request, $runtime);
    }

    /**
     * @param MockOrderFreeFlowProductRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return MockOrderFreeFlowProductResponse
     */
    public function mockOrderFreeFlowProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->customerFlowRequestId)) {
            $query['CustomerFlowRequestId'] = $request->customerFlowRequestId;
        }
        if (!Utils::isUnset($request->flowProductId)) {
            $query['FlowProductId'] = $request->flowProductId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lasting)) {
            $query['Lasting'] = $request->lasting;
        }
        if (!Utils::isUnset($request->mobileNumber)) {
            $query['MobileNumber'] = $request->mobileNumber;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->operator)) {
            $query['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->purchaseOrderId)) {
            $query['PurchaseOrderId'] = $request->purchaseOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MockOrderFreeFlowProduct',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MockOrderFreeFlowProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MockOrderFreeFlowProductRequest $request
     *
     * @return MockOrderFreeFlowProductResponse
     */
    public function mockOrderFreeFlowProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mockOrderFreeFlowProductWithOptions($request, $runtime);
    }

    /**
     * @param ModifyApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyApplicationResponse
     */
    public function modifyApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliUid)) {
            $body['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->appCode)) {
            $body['AppCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appTypeList)) {
            $body['AppTypeList'] = $request->appTypeList;
        }
        if (!Utils::isUnset($request->appingList)) {
            $body['AppingList'] = $request->appingList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyApplication',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyApplicationRequest $request
     *
     * @return ModifyApplicationResponse
     */
    public function modifyApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApplicationWithOptions($request, $runtime);
    }

    /**
     * @param OrderFreeFlowProductRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return OrderFreeFlowProductResponse
     */
    public function orderFreeFlowProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->customerFlowRequestId)) {
            $query['CustomerFlowRequestId'] = $request->customerFlowRequestId;
        }
        if (!Utils::isUnset($request->flowProductId)) {
            $query['FlowProductId'] = $request->flowProductId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lasting)) {
            $query['Lasting'] = $request->lasting;
        }
        if (!Utils::isUnset($request->mobileNumber)) {
            $query['MobileNumber'] = $request->mobileNumber;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->operator)) {
            $query['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->purchaseOrderId)) {
            $query['PurchaseOrderId'] = $request->purchaseOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderFreeFlowProduct',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderFreeFlowProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OrderFreeFlowProductRequest $request
     *
     * @return OrderFreeFlowProductResponse
     */
    public function orderFreeFlowProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderFreeFlowProductWithOptions($request, $runtime);
    }

    /**
     * @param OrderQosProductRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OrderQosProductResponse
     */
    public function orderQosProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->provice)) {
            $query['Provice'] = $request->provice;
        }
        $body = [];
        if (!Utils::isUnset($request->aliUid)) {
            $body['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->IPv6)) {
            $body['IPv6'] = $request->IPv6;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipType)) {
            $body['IpType'] = $request->ipType;
        }
        if (!Utils::isUnset($request->mobileNumber)) {
            $body['MobileNumber'] = $request->mobileNumber;
        }
        if (!Utils::isUnset($request->operator)) {
            $body['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->privateIpv4)) {
            $body['PrivateIpv4'] = $request->privateIpv4;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->publicIpv4)) {
            $body['PublicIpv4'] = $request->publicIpv4;
        }
        if (!Utils::isUnset($request->qosRequestId)) {
            $body['QosRequestId'] = $request->qosRequestId;
        }
        if (!Utils::isUnset($request->targetIpList)) {
            $body['TargetIpList'] = $request->targetIpList;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->unitNum)) {
            $body['UnitNum'] = $request->unitNum;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OrderQosProduct',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderQosProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OrderQosProductRequest $request
     *
     * @return OrderQosProductResponse
     */
    public function orderQosProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderQosProductWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryOrderListResponse
     */
    public function queryOrderListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderList',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderListRequest $request
     *
     * @return QueryOrderListResponse
     */
    public function queryOrderList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderListWithOptions($request, $runtime);
    }

    /**
     * @param SaveApplicationInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SaveApplicationInfoResponse
     */
    public function saveApplicationInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliUid)) {
            $body['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appTypeList)) {
            $body['AppTypeList'] = $request->appTypeList;
        }
        if (!Utils::isUnset($request->appingList)) {
            $body['AppingList'] = $request->appingList;
        }
        if (!Utils::isUnset($request->itemCode)) {
            $body['ItemCode'] = $request->itemCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveApplicationInfo',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveApplicationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveApplicationInfoRequest $request
     *
     * @return SaveApplicationInfoResponse
     */
    public function saveApplicationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveApplicationInfoWithOptions($request, $runtime);
    }

    /**
     * @param SdkChargeFlowRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SdkChargeFlowResponse
     */
    public function sdkChargeFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelCode)) {
            $query['ChannelCode'] = $request->channelCode;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->itemCode)) {
            $query['ItemCode'] = $request->itemCode;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->outBizNo)) {
            $query['OutBizNo'] = $request->outBizNo;
        }
        if (!Utils::isUnset($request->UId)) {
            $query['UId'] = $request->UId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SdkChargeFlow',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SdkChargeFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SdkChargeFlowRequest $request
     *
     * @return SdkChargeFlowResponse
     */
    public function sdkChargeFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkChargeFlowWithOptions($request, $runtime);
    }

    /**
     * @param SdkGetInventoryInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SdkGetInventoryInfoResponse
     */
    public function sdkGetInventoryInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SdkGetInventoryInfo',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SdkGetInventoryInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SdkGetInventoryInfoRequest $request
     *
     * @return SdkGetInventoryInfoResponse
     */
    public function sdkGetInventoryInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGetInventoryInfoWithOptions($request, $runtime);
    }

    /**
     * @param SdkGetItemInstListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SdkGetItemInstListResponse
     */
    public function sdkGetItemInstListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SdkGetItemInstList',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SdkGetItemInstListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SdkGetItemInstListRequest $request
     *
     * @return SdkGetItemInstListResponse
     */
    public function sdkGetItemInstList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGetItemInstListWithOptions($request, $runtime);
    }

    /**
     * @param SdkOrderQosProductRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SdkOrderQosProductResponse
     */
    public function sdkOrderQosProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->ctToken)) {
            $query['CtToken'] = $request->ctToken;
        }
        if (!Utils::isUnset($request->IPv6)) {
            $query['IPv6'] = $request->IPv6;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipType)) {
            $query['IpType'] = $request->ipType;
        }
        if (!Utils::isUnset($request->mobileNumber)) {
            $query['MobileNumber'] = $request->mobileNumber;
        }
        if (!Utils::isUnset($request->operator)) {
            $query['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->privateIpv4)) {
            $query['PrivateIpv4'] = $request->privateIpv4;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->provice)) {
            $query['Provice'] = $request->provice;
        }
        if (!Utils::isUnset($request->publicIpv4)) {
            $query['PublicIpv4'] = $request->publicIpv4;
        }
        if (!Utils::isUnset($request->qosRequestId)) {
            $query['QosRequestId'] = $request->qosRequestId;
        }
        if (!Utils::isUnset($request->targetIpList)) {
            $query['TargetIpList'] = $request->targetIpList;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->unitNum)) {
            $query['UnitNum'] = $request->unitNum;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SdkOrderQosProduct',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SdkOrderQosProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SdkOrderQosProductRequest $request
     *
     * @return SdkOrderQosProductResponse
     */
    public function sdkOrderQosProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkOrderQosProductWithOptions($request, $runtime);
    }

    /**
     * @param SdkValidateStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SdkValidateStatusResponse
     */
    public function sdkValidateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SdkValidateStatus',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SdkValidateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SdkValidateStatusRequest $request
     *
     * @return SdkValidateStatusResponse
     */
    public function sdkValidateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkValidateStatusWithOptions($request, $runtime);
    }

    /**
     * @param ValidControllerAuthorRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ValidControllerAuthorResponse
     */
    public function validControllerAuthorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidControllerAuthor',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidControllerAuthorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidControllerAuthorRequest $request
     *
     * @return ValidControllerAuthorResponse
     */
    public function validControllerAuthor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validControllerAuthorWithOptions($request, $runtime);
    }

    /**
     * @param ValidFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ValidFlowResponse
     */
    public function validFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidFlow',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidFlowRequest $request
     *
     * @return ValidFlowResponse
     */
    public function validFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validFlowWithOptions($request, $runtime);
    }

    /**
     * @param ValidateStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ValidateStatusResponse
     */
    public function validateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidateStatus',
            'version'     => '2022-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidateStatusRequest $request
     *
     * @return ValidateStatusResponse
     */
    public function validateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateStatusWithOptions($request, $runtime);
    }
}
