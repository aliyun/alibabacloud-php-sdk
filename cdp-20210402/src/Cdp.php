<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cdp\V20210402\Models\CancelOrderRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\CancelOrderResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\CheckClusterNameRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\CheckClusterNameResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ConfirmNoticeRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ConfirmNoticeResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\GetClusterDetailRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\GetClusterDetailResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\HasDefaultRoleResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\InitializeClouderaDataPlatformResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ListDefaultComponentsRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ListDefaultComponentsResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ListNodeGroupConstraintsRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ListNodeGroupConstraintsResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ListNodesRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ListNodesResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ListOperationsRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ListOperationsResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ListZonesRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ListZonesResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryOrderRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryOrderResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryPriceRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryPriceResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryRenewOrderRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryRenewOrderResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryRenewPriceRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryRenewPriceResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryScaleUpOrderRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryScaleUpOrderResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryScaleUpPriceRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryScaleUpPriceResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ReleaseClusterRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ReleaseClusterResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ScaleUpClusterRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\ScaleUpClusterResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\SearchClusterInstancesRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\SearchClusterInstancesResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\SingleOrderRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\SingleOrderResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\UpdateClusterNameRequest;
use AlibabaCloud\SDK\Cdp\V20210402\Models\UpdateClusterNameResponse;
use AlibabaCloud\SDK\Cdp\V20210402\Models\UploadLicenseResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cdp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cdp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CancelOrderRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CancelOrderResponse
     */
    public function cancelOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelOrder',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/order/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelOrderRequest $request
     *
     * @return CancelOrderResponse
     */
    public function cancelOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CheckClusterNameRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CheckClusterNameResponse
     */
    public function checkClusterNameWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckClusterName',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/check/cluster_name',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckClusterNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckClusterNameRequest $request
     *
     * @return CheckClusterNameResponse
     */
    public function checkClusterName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkClusterNameWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ConfirmNoticeRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ConfirmNoticeResponse
     */
    public function confirmNoticeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmNotice',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/cluster/confirm_notice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ConfirmNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmNoticeRequest $request
     *
     * @return ConfirmNoticeResponse
     */
    public function confirmNotice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->confirmNoticeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterInfo)) {
            $query['ClusterInfo'] = $request->clusterInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/cluster/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetClusterDetailRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetClusterDetailResponse
     */
    public function getClusterDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetClusterDetail',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/cluster/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetClusterDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetClusterDetailRequest $request
     *
     * @return GetClusterDetailResponse
     */
    public function getClusterDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return HasDefaultRoleResponse
     */
    public function hasDefaultRoleWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'HasDefaultRole',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/user/has_default_role',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HasDefaultRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return HasDefaultRoleResponse
     */
    public function hasDefaultRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->hasDefaultRoleWithOptions($headers, $runtime);
    }

    /**
     * @param string         $ClientToken
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return InitializeClouderaDataPlatformResponse
     */
    public function initializeClouderaDataPlatformWithOptions($ClientToken, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'InitializeClouderaDataPlatform',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/user/create_default_role',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InitializeClouderaDataPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClientToken
     *
     * @return InitializeClouderaDataPlatformResponse
     */
    public function initializeClouderaDataPlatform($ClientToken)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initializeClouderaDataPlatformWithOptions($ClientToken, $headers, $runtime);
    }

    /**
     * @param ListDefaultComponentsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListDefaultComponentsResponse
     */
    public function listDefaultComponentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->securityMode)) {
            $query['SecurityMode'] = $request->securityMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDefaultComponents',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/cdp/defaultComponents',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDefaultComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDefaultComponentsRequest $request
     *
     * @return ListDefaultComponentsResponse
     */
    public function listDefaultComponents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDefaultComponentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListNodeGroupConstraintsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListNodeGroupConstraintsResponse
     */
    public function listNodeGroupConstraintsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodeGroupConstraints',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/cdp/nodeGroupConstraints',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListNodeGroupConstraintsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodeGroupConstraintsRequest $request
     *
     * @return ListNodeGroupConstraintsResponse
     */
    public function listNodeGroupConstraints($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNodeGroupConstraintsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListNodesRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/cluster/nodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListOperationsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListOperationsResponse
     */
    public function listOperationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        if (!Utils::isUnset($request->parentOperationNodeId)) {
            $query['ParentOperationNodeId'] = $request->parentOperationNodeId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOperations',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/cluster/operations',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOperationsRequest $request
     *
     * @return ListOperationsResponse
     */
    public function listOperations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOperationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/region/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegionsWithOptions($headers, $runtime);
    }

    /**
     * @param ListZonesRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListZonesResponse
     */
    public function listZonesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListZones',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/user/zones',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListZonesRequest $request
     *
     * @return ListZonesResponse
     */
    public function listZones($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listZonesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryOrderRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return QueryOrderResponse
     */
    public function queryOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrder',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/order/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderRequest $request
     *
     * @return QueryOrderResponse
     */
    public function queryOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryPriceRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return QueryPriceResponse
     */
    public function queryPriceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeGroupSpecs)) {
            $query['NodeGroupSpecs'] = $request->nodeGroupSpecs;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPrice',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/buy/query_price',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPriceRequest $request
     *
     * @return QueryPriceResponse
     */
    public function queryPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryRenewOrderRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryRenewOrderResponse
     */
    public function queryRenewOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRenewOrder',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/order/query_renew_order',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryRenewOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRenewOrderRequest $request
     *
     * @return QueryRenewOrderResponse
     */
    public function queryRenewOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRenewOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryRenewPriceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryRenewPriceResponse
     */
    public function queryRenewPriceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        if (!Utils::isUnset($request->instances)) {
            $query['Instances'] = $request->instances;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRenewPrice',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/buy/query_renew_price',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryRenewPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRenewPriceRequest $request
     *
     * @return QueryRenewPriceResponse
     */
    public function queryRenewPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRenewPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryScaleUpOrderRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryScaleUpOrderResponse
     */
    public function queryScaleUpOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryScaleUpOrder',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/order/query_scale_up_order',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryScaleUpOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryScaleUpOrderRequest $request
     *
     * @return QueryScaleUpOrderResponse
     */
    public function queryScaleUpOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryScaleUpOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryScaleUpPriceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryScaleUpPriceResponse
     */
    public function queryScaleUpPriceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        if (!Utils::isUnset($request->coreNumber)) {
            $query['CoreNumber'] = $request->coreNumber;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->nodeGroupType)) {
            $query['NodeGroupType'] = $request->nodeGroupType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryScaleUpPrice',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/buy/query_scale_up_price',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryScaleUpPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryScaleUpPriceRequest $request
     *
     * @return QueryScaleUpPriceResponse
     */
    public function queryScaleUpPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryScaleUpPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ReleaseClusterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ReleaseClusterResponse
     */
    public function releaseClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseCluster',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/cluster/release',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseClusterRequest $request
     *
     * @return ReleaseClusterResponse
     */
    public function releaseCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RenewInstanceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        if (!Utils::isUnset($request->instances)) {
            $query['Instances'] = $request->instances;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewInstance',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/order/renew_instance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ScaleUpClusterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ScaleUpClusterResponse
     */
    public function scaleUpClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        if (!Utils::isUnset($request->coreNumber)) {
            $query['CoreNumber'] = $request->coreNumber;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->nodeGroupType)) {
            $query['NodeGroupType'] = $request->nodeGroupType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScaleUpCluster',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/cluster/scale_up',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScaleUpClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScaleUpClusterRequest $request
     *
     * @return ScaleUpClusterResponse
     */
    public function scaleUpCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleUpClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SearchClusterInstancesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return SearchClusterInstancesResponse
     */
    public function searchClusterInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchClusterInstances',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/order/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchClusterInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchClusterInstancesRequest $request
     *
     * @return SearchClusterInstancesResponse
     */
    public function searchClusterInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchClusterInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SingleOrderRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SingleOrderResponse
     */
    public function singleOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SingleOrder',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/order/single',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SingleOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SingleOrderRequest $request
     *
     * @return SingleOrderResponse
     */
    public function singleOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->singleOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateClusterNameRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateClusterNameResponse
     */
    public function updateClusterNameWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateClusterName',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/cluster/update_name',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateClusterNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateClusterNameRequest $request
     *
     * @return UpdateClusterNameResponse
     */
    public function updateClusterName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateClusterNameWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $RegionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UploadLicenseResponse
     */
    public function uploadLicenseWithOptions($RegionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UploadLicense',
            'version'     => '2021-04-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/webapi/user/upload',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UploadLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $RegionId
     *
     * @return UploadLicenseResponse
     */
    public function uploadLicense($RegionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadLicenseWithOptions($RegionId, $headers, $runtime);
    }
}
