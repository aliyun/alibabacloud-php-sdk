<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClustersRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClustersResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\RebootNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\RebootNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\RebootNodesShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReimageNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReimageNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReimageNodesShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Eflocontroller extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eflo-controller', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->components)) {
            $request->componentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->components, 'Components', 'json');
        }
        if (!Utils::isUnset($tmpReq->networks)) {
            $request->networksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->networks, 'Networks', 'json');
        }
        if (!Utils::isUnset($tmpReq->nimizVSwitches)) {
            $request->nimizVSwitchesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nimizVSwitches, 'NimizVSwitches', 'json');
        }
        if (!Utils::isUnset($tmpReq->nodeGroups)) {
            $request->nodeGroupsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeGroups, 'NodeGroups', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->clusterDescription)) {
            $body['ClusterDescription'] = $request->clusterDescription;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $body['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $body['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->componentsShrink)) {
            $body['Components'] = $request->componentsShrink;
        }
        if (!Utils::isUnset($request->hpnZone)) {
            $body['HpnZone'] = $request->hpnZone;
        }
        if (!Utils::isUnset($request->ignoreFailedNodeTasks)) {
            $body['IgnoreFailedNodeTasks'] = $request->ignoreFailedNodeTasks;
        }
        if (!Utils::isUnset($request->networksShrink)) {
            $body['Networks'] = $request->networksShrink;
        }
        if (!Utils::isUnset($request->nimizVSwitchesShrink)) {
            $body['NimizVSwitches'] = $request->nimizVSwitchesShrink;
        }
        if (!Utils::isUnset($request->nodeGroupsShrink)) {
            $body['NodeGroups'] = $request->nodeGroupsShrink;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeClusterResponse
     */
    public function describeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCluster',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterRequest $request
     *
     * @return DescribeClusterResponse
     */
    public function describeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNodeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeNodeResponse
     */
    public function describeNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeNode',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNodeRequest $request
     *
     * @return DescribeNodeResponse
     */
    public function describeNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $body['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTaskResponse
     */
    public function describeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTask',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTaskRequest $request
     *
     * @return DescribeTaskResponse
     */
    public function describeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $body['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @param ExtendClusterRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ExtendClusterResponse
     */
    public function extendClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExtendClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ipAllocationPolicy)) {
            $request->ipAllocationPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ipAllocationPolicy, 'IpAllocationPolicy', 'json');
        }
        if (!Utils::isUnset($tmpReq->nodeGroups)) {
            $request->nodeGroupsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeGroups, 'NodeGroups', 'json');
        }
        if (!Utils::isUnset($tmpReq->vpdSubnets)) {
            $request->vpdSubnetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vpdSubnets, 'VpdSubnets', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ignoreFailedNodeTasks)) {
            $body['IgnoreFailedNodeTasks'] = $request->ignoreFailedNodeTasks;
        }
        if (!Utils::isUnset($request->ipAllocationPolicyShrink)) {
            $body['IpAllocationPolicy'] = $request->ipAllocationPolicyShrink;
        }
        if (!Utils::isUnset($request->nodeGroupsShrink)) {
            $body['NodeGroups'] = $request->nodeGroupsShrink;
        }
        if (!Utils::isUnset($request->vpdSubnetsShrink)) {
            $body['VpdSubnets'] = $request->vpdSubnetsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExtendCluster',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExtendClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExtendClusterRequest $request
     *
     * @return ExtendClusterResponse
     */
    public function extendCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extendClusterWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterNodesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListClusterNodesResponse
     */
    public function listClusterNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $body['NodeGroupId'] = $request->nodeGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListClusterNodes',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterNodesRequest $request
     *
     * @return ListClusterNodesResponse
     */
    public function listClusterNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterNodesWithOptions($request, $runtime);
    }

    /**
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * @param ListFreeNodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListFreeNodesResponse
     */
    public function listFreeNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hpnZone)) {
            $body['HpnZone'] = $request->hpnZone;
        }
        if (!Utils::isUnset($request->machineType)) {
            $body['MachineType'] = $request->machineType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFreeNodes',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFreeNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFreeNodesRequest $request
     *
     * @return ListFreeNodesResponse
     */
    public function listFreeNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFreeNodesWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param RebootNodesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return RebootNodesResponse
     */
    public function rebootNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RebootNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodes)) {
            $request->nodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodes, 'Nodes', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ignoreFailedNodeTasks)) {
            $body['IgnoreFailedNodeTasks'] = $request->ignoreFailedNodeTasks;
        }
        if (!Utils::isUnset($request->nodesShrink)) {
            $body['Nodes'] = $request->nodesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RebootNodes',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebootNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RebootNodesRequest $request
     *
     * @return RebootNodesResponse
     */
    public function rebootNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootNodesWithOptions($request, $runtime);
    }

    /**
     * @param ReimageNodesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ReimageNodesResponse
     */
    public function reimageNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ReimageNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodes)) {
            $request->nodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodes, 'Nodes', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ignoreFailedNodeTasks)) {
            $body['IgnoreFailedNodeTasks'] = $request->ignoreFailedNodeTasks;
        }
        if (!Utils::isUnset($request->nodesShrink)) {
            $body['Nodes'] = $request->nodesShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReimageNodes',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReimageNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReimageNodesRequest $request
     *
     * @return ReimageNodesResponse
     */
    public function reimageNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reimageNodesWithOptions($request, $runtime);
    }

    /**
     * @param ShrinkClusterRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ShrinkClusterResponse
     */
    public function shrinkClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ShrinkClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodeGroups)) {
            $request->nodeGroupsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeGroups, 'NodeGroups', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ignoreFailedNodeTasks)) {
            $body['IgnoreFailedNodeTasks'] = $request->ignoreFailedNodeTasks;
        }
        if (!Utils::isUnset($request->nodeGroupsShrink)) {
            $body['NodeGroups'] = $request->nodeGroupsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ShrinkCluster',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ShrinkClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ShrinkClusterRequest $request
     *
     * @return ShrinkClusterResponse
     */
    public function shrinkCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->shrinkClusterWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2022-12-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
