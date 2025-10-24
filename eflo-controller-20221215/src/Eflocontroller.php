<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ApproveOperationRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ApproveOperationResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ChangeNodeGroupRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ChangeNodeGroupResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ChangeNodeGroupShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CloseSessionRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CloseSessionResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNetTestTaskRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNetTestTaskResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNetTestTaskShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNodeGroupRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNodeGroupResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNodeGroupShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateSessionRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateSessionResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateVscRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateVscResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DeleteNodeGroupRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DeleteNodeGroupResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DeleteNodeRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DeleteNodeResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DeleteVscRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DeleteVscResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeDiagnosticResultRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeDiagnosticResultResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeInvocationsResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeTypeRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeTypeResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeSendFileResultsRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeSendFileResultsResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeTaskResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeVscRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeVscResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\GetHyperNodeRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\GetHyperNodeResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterHyperNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterHyperNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClustersRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClustersResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListDiagnosticResultsRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListDiagnosticResultsResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeHyperNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeHyperNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListHyperNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListHyperNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListImagesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListImagesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineNetworkInfoRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineNetworkInfoResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineNetworkInfoShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNodeGroupsRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNodeGroupsResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListUserClusterTypesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListVscsRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListVscsResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListVscsShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\RebootNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\RebootNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\RebootNodesShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReimageNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReimageNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReimageNodesShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReportNodesStatusRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReportNodesStatusResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ReportNodesStatusShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\RunCommandRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\RunCommandResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\RunCommandShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\SendFileRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\SendFileResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\SendFileShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ShrinkClusterShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\StopInvocationRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\StopInvocationResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\StopInvocationShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\StopNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\StopNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\StopNodesShrinkRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\UpdateNodeGroupRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\UpdateNodeGroupResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Approves an O\\&M operation.
     *
     * @param request - ApproveOperationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApproveOperationResponse
     *
     * @param ApproveOperationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ApproveOperationResponse
     */
    public function approveOperationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->operationType) {
            @$body['OperationType'] = $request->operationType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApproveOperation',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApproveOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Approves an O\\&M operation.
     *
     * @param request - ApproveOperationRequest
     *
     * @returns ApproveOperationResponse
     *
     * @param ApproveOperationRequest $request
     *
     * @return ApproveOperationResponse
     */
    public function approveOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveOperationWithOptions($request, $runtime);
    }

    /**
     * 修改节点的节点组.
     *
     * @param tmpReq - ChangeNodeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeNodeGroupResponse
     *
     * @param ChangeNodeGroupRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ChangeNodeGroupResponse
     */
    public function changeNodeGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChangeNodeGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodes) {
            $request->nodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodes, 'Nodes', 'json');
        }

        $query = [];
        if (null !== $request->ignoreFailedNodeTasks) {
            @$query['IgnoreFailedNodeTasks'] = $request->ignoreFailedNodeTasks;
        }

        if (null !== $request->targetNodeGroupId) {
            @$query['TargetNodeGroupId'] = $request->targetNodeGroupId;
        }

        $body = [];
        if (null !== $request->nodesShrink) {
            @$body['Nodes'] = $request->nodesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeNodeGroup',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeNodeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改节点的节点组.
     *
     * @param request - ChangeNodeGroupRequest
     *
     * @returns ChangeNodeGroupResponse
     *
     * @param ChangeNodeGroupRequest $request
     *
     * @return ChangeNodeGroupResponse
     */
    public function changeNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeNodeGroupWithOptions($request, $runtime);
    }

    /**
     * Moves a resource from one resource group to another.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moves a resource from one resource group to another.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
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
     * Disconnect Connection.
     *
     * @param request - CloseSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseSessionResponse
     *
     * @param CloseSessionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CloseSessionResponse
     */
    public function closeSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->sessionToken) {
            @$body['SessionToken'] = $request->sessionToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloseSession',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloseSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disconnect Connection.
     *
     * @param request - CloseSessionRequest
     *
     * @returns CloseSessionResponse
     *
     * @param CloseSessionRequest $request
     *
     * @return CloseSessionResponse
     */
    public function closeSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeSessionWithOptions($request, $runtime);
    }

    /**
     * Create a large-scale computing cluster.
     *
     * @param tmpReq - CreateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->components) {
            $request->componentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->components, 'Components', 'json');
        }

        if (null !== $tmpReq->networks) {
            $request->networksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->networks, 'Networks', 'json');
        }

        if (null !== $tmpReq->nimizVSwitches) {
            $request->nimizVSwitchesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nimizVSwitches, 'NimizVSwitches', 'json');
        }

        if (null !== $tmpReq->nodeGroups) {
            $request->nodeGroupsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeGroups, 'NodeGroups', 'json');
        }

        $query = [];
        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->clusterDescription) {
            @$body['ClusterDescription'] = $request->clusterDescription;
        }

        if (null !== $request->clusterName) {
            @$body['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->clusterType) {
            @$body['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->componentsShrink) {
            @$body['Components'] = $request->componentsShrink;
        }

        if (null !== $request->hpnZone) {
            @$body['HpnZone'] = $request->hpnZone;
        }

        if (null !== $request->ignoreFailedNodeTasks) {
            @$body['IgnoreFailedNodeTasks'] = $request->ignoreFailedNodeTasks;
        }

        if (null !== $request->networksShrink) {
            @$body['Networks'] = $request->networksShrink;
        }

        if (null !== $request->nimizVSwitchesShrink) {
            @$body['NimizVSwitches'] = $request->nimizVSwitchesShrink;
        }

        if (null !== $request->nodeGroupsShrink) {
            @$body['NodeGroups'] = $request->nodeGroupsShrink;
        }

        if (null !== $request->openEniJumboFrame) {
            @$body['OpenEniJumboFrame'] = $request->openEniJumboFrame;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCluster',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a large-scale computing cluster.
     *
     * @param request - CreateClusterRequest
     *
     * @returns CreateClusterResponse
     *
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
     * Creates a diagnostics task.
     *
     * @param tmpReq - CreateDiagnosticTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDiagnosticTaskResponse
     *
     * @param CreateDiagnosticTaskRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDiagnosticTaskResponse
     */
    public function createDiagnosticTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDiagnosticTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aiJobLogInfo) {
            $request->aiJobLogInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aiJobLogInfo, 'AiJobLogInfo', 'json');
        }

        if (null !== $tmpReq->nodeIds) {
            $request->nodeIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeIds, 'NodeIds', 'simple');
        }

        $body = [];
        if (null !== $request->aiJobLogInfoShrink) {
            @$body['AiJobLogInfo'] = $request->aiJobLogInfoShrink;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->diagnosticType) {
            @$body['DiagnosticType'] = $request->diagnosticType;
        }

        if (null !== $request->nodeIdsShrink) {
            @$body['NodeIds'] = $request->nodeIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDiagnosticTask',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDiagnosticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a diagnostics task.
     *
     * @param request - CreateDiagnosticTaskRequest
     *
     * @returns CreateDiagnosticTaskResponse
     *
     * @param CreateDiagnosticTaskRequest $request
     *
     * @return CreateDiagnosticTaskResponse
     */
    public function createDiagnosticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosticTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a network test task.
     *
     * @remarks
     * The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *
     * @param tmpReq - CreateNetTestTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNetTestTaskResponse
     *
     * @param CreateNetTestTaskRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateNetTestTaskResponse
     */
    public function createNetTestTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateNetTestTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->commTest) {
            $request->commTestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->commTest, 'CommTest', 'json');
        }

        if (null !== $tmpReq->delayTest) {
            $request->delayTestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->delayTest, 'DelayTest', 'json');
        }

        if (null !== $tmpReq->trafficTest) {
            $request->trafficTestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->trafficTest, 'TrafficTest', 'json');
        }

        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$body['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->commTestShrink) {
            @$body['CommTest'] = $request->commTestShrink;
        }

        if (null !== $request->delayTestShrink) {
            @$body['DelayTest'] = $request->delayTestShrink;
        }

        if (null !== $request->netTestType) {
            @$body['NetTestType'] = $request->netTestType;
        }

        if (null !== $request->networkMode) {
            @$body['NetworkMode'] = $request->networkMode;
        }

        if (null !== $request->port) {
            @$body['Port'] = $request->port;
        }

        if (null !== $request->trafficTestShrink) {
            @$body['TrafficTest'] = $request->trafficTestShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateNetTestTask',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNetTestTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a network test task.
     *
     * @remarks
     * The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *
     * @param request - CreateNetTestTaskRequest
     *
     * @returns CreateNetTestTaskResponse
     *
     * @param CreateNetTestTaskRequest $request
     *
     * @return CreateNetTestTaskResponse
     */
    public function createNetTestTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetTestTaskWithOptions($request, $runtime);
    }

    /**
     * Create Node Group under Cluster.
     *
     * @param tmpReq - CreateNodeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNodeGroupResponse
     *
     * @param CreateNodeGroupRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNodeGroupResponse
     */
    public function createNodeGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateNodeGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodeGroup) {
            $request->nodeGroupShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeGroup, 'NodeGroup', 'json');
        }

        if (null !== $tmpReq->nodeUnit) {
            $request->nodeUnitShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeUnit, 'NodeUnit', 'json');
        }

        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->nodeGroupShrink) {
            @$body['NodeGroup'] = $request->nodeGroupShrink;
        }

        if (null !== $request->nodeUnitShrink) {
            @$body['NodeUnit'] = $request->nodeUnitShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateNodeGroup',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNodeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Node Group under Cluster.
     *
     * @param request - CreateNodeGroupRequest
     *
     * @returns CreateNodeGroupResponse
     *
     * @param CreateNodeGroupRequest $request
     *
     * @return CreateNodeGroupResponse
     */
    public function createNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a Web Terminal session.
     *
     * @remarks
     * The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *
     * @param request - CreateSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSessionResponse
     *
     * @param CreateSessionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSessionResponse
     */
    public function createSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->sessionType) {
            @$body['SessionType'] = $request->sessionType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSession',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Web Terminal session.
     *
     * @remarks
     * The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *
     * @param request - CreateSessionRequest
     *
     * @returns CreateSessionResponse
     *
     * @param CreateSessionRequest $request
     *
     * @return CreateSessionResponse
     */
    public function createSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSessionWithOptions($request, $runtime);
    }

    /**
     * Creates a virtual storage channel (VSC).
     *
     * @param request - CreateVscRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVscResponse
     *
     * @param CreateVscRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateVscResponse
     */
    public function createVscWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->vscName) {
            @$body['VscName'] = $request->vscName;
        }

        if (null !== $request->vscType) {
            @$body['VscType'] = $request->vscType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVsc',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVscResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a virtual storage channel (VSC).
     *
     * @param request - CreateVscRequest
     *
     * @returns CreateVscResponse
     *
     * @param CreateVscRequest $request
     *
     * @return CreateVscResponse
     */
    public function createVsc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVscWithOptions($request, $runtime);
    }

    /**
     * Deletes a Lingjun cluster.
     *
     * @param request - DeleteClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCluster',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Lingjun cluster.
     *
     * @param request - DeleteClusterRequest
     *
     * @returns DeleteClusterResponse
     *
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
     * 删除一个未使用节点.
     *
     * @param request - DeleteNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNodeResponse
     *
     * @param DeleteNodeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteNodeResponse
     */
    public function deleteNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteNode',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除一个未使用节点.
     *
     * @param request - DeleteNodeRequest
     *
     * @returns DeleteNodeResponse
     *
     * @param DeleteNodeRequest $request
     *
     * @return DeleteNodeResponse
     */
    public function deleteNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodeWithOptions($request, $runtime);
    }

    /**
     * 删除节点分组.
     *
     * @param request - DeleteNodeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNodeGroupResponse
     *
     * @param DeleteNodeGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNodeGroupResponse
     */
    public function deleteNodeGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->nodeGroupId) {
            @$body['NodeGroupId'] = $request->nodeGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteNodeGroup',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNodeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除节点分组.
     *
     * @param request - DeleteNodeGroupRequest
     *
     * @returns DeleteNodeGroupResponse
     *
     * @param DeleteNodeGroupRequest $request
     *
     * @return DeleteNodeGroupResponse
     */
    public function deleteNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodeGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a virtual storage channel (VSC).
     *
     * @param request - DeleteVscRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVscResponse
     *
     * @param DeleteVscRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteVscResponse
     */
    public function deleteVscWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->vscId) {
            @$body['VscId'] = $request->vscId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVsc',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVscResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a virtual storage channel (VSC).
     *
     * @param request - DeleteVscRequest
     *
     * @returns DeleteVscResponse
     *
     * @param DeleteVscRequest $request
     *
     * @return DeleteVscResponse
     */
    public function deleteVsc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVscWithOptions($request, $runtime);
    }

    /**
     * Queries information about a Lingjun cluster.
     *
     * @param request - DescribeClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterResponse
     *
     * @param DescribeClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeClusterResponse
     */
    public function describeClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCluster',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a Lingjun cluster.
     *
     * @param request - DescribeClusterRequest
     *
     * @returns DescribeClusterResponse
     *
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
     * Queries the results of a diagnostic task.
     *
     * @remarks
     * The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *
     * @param request - DescribeDiagnosticResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnosticResultResponse
     *
     * @param DescribeDiagnosticResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDiagnosticResultResponse
     */
    public function describeDiagnosticResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->diagnosticId) {
            @$body['DiagnosticId'] = $request->diagnosticId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnosticResult',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnosticResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the results of a diagnostic task.
     *
     * @remarks
     * The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *
     * @param request - DescribeDiagnosticResultRequest
     *
     * @returns DescribeDiagnosticResultResponse
     *
     * @param DescribeDiagnosticResultRequest $request
     *
     * @return DescribeDiagnosticResultResponse
     */
    public function describeDiagnosticResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosticResultWithOptions($request, $runtime);
    }

    /**
     * Queries the execution list and status of O\\&M Assistant commands.
     *
     * @param request - DescribeInvocationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInvocationsResponse
     *
     * @param DescribeInvocationsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInvocationsResponse
     */
    public function describeInvocationsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->contentEncoding) {
            @$body['ContentEncoding'] = $request->contentEncoding;
        }

        if (null !== $request->includeOutput) {
            @$body['IncludeOutput'] = $request->includeOutput;
        }

        if (null !== $request->invokeId) {
            @$body['InvokeId'] = $request->invokeId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInvocations',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInvocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution list and status of O\\&M Assistant commands.
     *
     * @param request - DescribeInvocationsRequest
     *
     * @returns DescribeInvocationsResponse
     *
     * @param DescribeInvocationsRequest $request
     *
     * @return DescribeInvocationsResponse
     */
    public function describeInvocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationsWithOptions($request, $runtime);
    }

    /**
     * Query Network Test Result.
     *
     * @param request - DescribeNetTestResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNetTestResultResponse
     *
     * @param DescribeNetTestResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeNetTestResultResponse
     */
    public function describeNetTestResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->testId) {
            @$body['TestId'] = $request->testId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeNetTestResult',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNetTestResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Network Test Result.
     *
     * @param request - DescribeNetTestResultRequest
     *
     * @returns DescribeNetTestResultResponse
     *
     * @param DescribeNetTestResultRequest $request
     *
     * @return DescribeNetTestResultResponse
     */
    public function describeNetTestResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetTestResultWithOptions($request, $runtime);
    }

    /**
     * Queries a list of nodes.
     *
     * @param request - DescribeNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNodeResponse
     *
     * @param DescribeNodeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeNodeResponse
     */
    public function describeNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeNode',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of nodes.
     *
     * @param request - DescribeNodeRequest
     *
     * @returns DescribeNodeResponse
     *
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
     * 创建Web Terminal会话.
     *
     * @param request - DescribeNodeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNodeTypeResponse
     *
     * @param DescribeNodeTypeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeNodeTypeResponse
     */
    public function describeNodeTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->nodeType) {
            @$body['NodeType'] = $request->nodeType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeNodeType',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNodeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Web Terminal会话.
     *
     * @param request - DescribeNodeTypeRequest
     *
     * @returns DescribeNodeTypeResponse
     *
     * @param DescribeNodeTypeRequest $request
     *
     * @return DescribeNodeTypeResponse
     */
    public function describeNodeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeTypeWithOptions($request, $runtime);
    }

    /**
     * Queries a list of regions.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of regions.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
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
     * Queries the files that are sent by an O\\&M assistant and the status of the files.
     *
     * @param request - DescribeSendFileResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSendFileResultsResponse
     *
     * @param DescribeSendFileResultsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSendFileResultsResponse
     */
    public function describeSendFileResultsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->invokeId) {
            @$body['InvokeId'] = $request->invokeId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSendFileResults',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSendFileResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the files that are sent by an O\\&M assistant and the status of the files.
     *
     * @param request - DescribeSendFileResultsRequest
     *
     * @returns DescribeSendFileResultsResponse
     *
     * @param DescribeSendFileResultsRequest $request
     *
     * @return DescribeSendFileResultsResponse
     */
    public function describeSendFileResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSendFileResultsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a task.
     *
     * @param request - DescribeTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTaskResponse
     *
     * @param DescribeTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTaskResponse
     */
    public function describeTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTask',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a task.
     *
     * @param request - DescribeTaskRequest
     *
     * @returns DescribeTaskResponse
     *
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
     * Queries information about a virtual storage channel (VSC).
     *
     * @param request - DescribeVscRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVscResponse
     *
     * @param DescribeVscRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeVscResponse
     */
    public function describeVscWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->vscId) {
            @$body['VscId'] = $request->vscId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeVsc',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVscResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a virtual storage channel (VSC).
     *
     * @param request - DescribeVscRequest
     *
     * @returns DescribeVscResponse
     *
     * @param DescribeVscRequest $request
     *
     * @return DescribeVscResponse
     */
    public function describeVsc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVscWithOptions($request, $runtime);
    }

    /**
     * Queries a list of zones.
     *
     * @param request - DescribeZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of zones.
     *
     * @param request - DescribeZonesRequest
     *
     * @returns DescribeZonesResponse
     *
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
     * Cluster Scaling.
     *
     * @param tmpReq - ExtendClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExtendClusterResponse
     *
     * @param ExtendClusterRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ExtendClusterResponse
     */
    public function extendClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExtendClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ipAllocationPolicy) {
            $request->ipAllocationPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ipAllocationPolicy, 'IpAllocationPolicy', 'json');
        }

        if (null !== $tmpReq->nodeGroups) {
            $request->nodeGroupsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeGroups, 'NodeGroups', 'json');
        }

        if (null !== $tmpReq->vpdSubnets) {
            $request->vpdSubnetsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vpdSubnets, 'VpdSubnets', 'json');
        }

        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ignoreFailedNodeTasks) {
            @$body['IgnoreFailedNodeTasks'] = $request->ignoreFailedNodeTasks;
        }

        if (null !== $request->ipAllocationPolicyShrink) {
            @$body['IpAllocationPolicy'] = $request->ipAllocationPolicyShrink;
        }

        if (null !== $request->nodeGroupsShrink) {
            @$body['NodeGroups'] = $request->nodeGroupsShrink;
        }

        if (null !== $request->vSwitchZoneId) {
            @$body['VSwitchZoneId'] = $request->vSwitchZoneId;
        }

        if (null !== $request->vpdSubnetsShrink) {
            @$body['VpdSubnets'] = $request->vpdSubnetsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExtendCluster',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExtendClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cluster Scaling.
     *
     * @param request - ExtendClusterRequest
     *
     * @returns ExtendClusterResponse
     *
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
     * 查询节点列表.
     *
     * @param request - GetHyperNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHyperNodeResponse
     *
     * @param GetHyperNodeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetHyperNodeResponse
     */
    public function getHyperNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->hyperNodeId) {
            @$body['HyperNodeId'] = $request->hyperNodeId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetHyperNode',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHyperNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询节点列表.
     *
     * @param request - GetHyperNodeRequest
     *
     * @returns GetHyperNodeResponse
     *
     * @param GetHyperNodeRequest $request
     *
     * @return GetHyperNodeResponse
     */
    public function getHyperNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHyperNodeWithOptions($request, $runtime);
    }

    /**
     * 集群下的主机分组列表，分组下的主机列表.
     *
     * @param request - ListClusterHyperNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterHyperNodesResponse
     *
     * @param ListClusterHyperNodesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListClusterHyperNodesResponse
     */
    public function listClusterHyperNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nodeGroupId) {
            @$body['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListClusterHyperNodes',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClusterHyperNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 集群下的主机分组列表，分组下的主机列表.
     *
     * @param request - ListClusterHyperNodesRequest
     *
     * @returns ListClusterHyperNodesResponse
     *
     * @param ListClusterHyperNodesRequest $request
     *
     * @return ListClusterHyperNodesResponse
     */
    public function listClusterHyperNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterHyperNodesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of nodes in a cluster.
     *
     * @param request - ListClusterNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterNodesResponse
     *
     * @param ListClusterNodesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListClusterNodesResponse
     */
    public function listClusterNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nodeGroupId) {
            @$body['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->operatingStates) {
            @$body['OperatingStates'] = $request->operatingStates;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListClusterNodes',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClusterNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of nodes in a cluster.
     *
     * @param request - ListClusterNodesRequest
     *
     * @returns ListClusterNodesResponse
     *
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
     * Queries a list of clusters.
     *
     * @param request - ListClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListClusters',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of clusters.
     *
     * @param request - ListClustersRequest
     *
     * @returns ListClustersResponse
     *
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
     * List of Diagnostic Tasks.
     *
     * @param request - ListDiagnosticResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDiagnosticResultsResponse
     *
     * @param ListDiagnosticResultsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDiagnosticResultsResponse
     */
    public function listDiagnosticResultsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->diagType) {
            @$body['DiagType'] = $request->diagType;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDiagnosticResults',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDiagnosticResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List of Diagnostic Tasks.
     *
     * @param request - ListDiagnosticResultsRequest
     *
     * @returns ListDiagnosticResultsResponse
     *
     * @param ListDiagnosticResultsRequest $request
     *
     * @return ListDiagnosticResultsResponse
     */
    public function listDiagnosticResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDiagnosticResultsWithOptions($request, $runtime);
    }

    /**
     * 可用rack物理机列表.
     *
     * @param request - ListFreeHyperNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFreeHyperNodesResponse
     *
     * @param ListFreeHyperNodesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListFreeHyperNodesResponse
     */
    public function listFreeHyperNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->hpnZone) {
            @$body['HpnZone'] = $request->hpnZone;
        }

        if (null !== $request->machineType) {
            @$body['MachineType'] = $request->machineType;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFreeHyperNodes',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFreeHyperNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 可用rack物理机列表.
     *
     * @param request - ListFreeHyperNodesRequest
     *
     * @returns ListFreeHyperNodesResponse
     *
     * @param ListFreeHyperNodesRequest $request
     *
     * @return ListFreeHyperNodesResponse
     */
    public function listFreeHyperNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFreeHyperNodesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of nodes that are not used.
     *
     * @param request - ListFreeNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFreeNodesResponse
     *
     * @param ListFreeNodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListFreeNodesResponse
     */
    public function listFreeNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $body = [];
        if (null !== $request->hpnZone) {
            @$body['HpnZone'] = $request->hpnZone;
        }

        if (null !== $request->machineType) {
            @$body['MachineType'] = $request->machineType;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->operatingStates) {
            @$body['OperatingStates'] = $request->operatingStates;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFreeNodes',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFreeNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of nodes that are not used.
     *
     * @param request - ListFreeNodesRequest
     *
     * @returns ListFreeNodesResponse
     *
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
     * 机器列表.
     *
     * @param request - ListHyperNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHyperNodesResponse
     *
     * @param ListHyperNodesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListHyperNodesResponse
     */
    public function listHyperNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterName) {
            @$body['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->hpnZone) {
            @$body['HpnZone'] = $request->hpnZone;
        }

        if (null !== $request->hyperNodeId) {
            @$body['HyperNodeId'] = $request->hyperNodeId;
        }

        if (null !== $request->machineType) {
            @$body['MachineType'] = $request->machineType;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nodeGroupName) {
            @$body['NodeGroupName'] = $request->nodeGroupName;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListHyperNodes',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHyperNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机器列表.
     *
     * @param request - ListHyperNodesRequest
     *
     * @returns ListHyperNodesResponse
     *
     * @param ListHyperNodesRequest $request
     *
     * @return ListHyperNodesResponse
     */
    public function listHyperNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHyperNodesWithOptions($request, $runtime);
    }

    /**
     * Lists available images.
     *
     * @param request - ListImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->architecture) {
            @$body['Architecture'] = $request->architecture;
        }

        if (null !== $request->imageVersion) {
            @$body['ImageVersion'] = $request->imageVersion;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListImages',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists available images.
     *
     * @param request - ListImagesRequest
     *
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $request
     *
     * @return ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesWithOptions($request, $runtime);
    }

    /**
     * Query machine network configuration using HPNZone and machine type.
     *
     * @param tmpReq - ListMachineNetworkInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMachineNetworkInfoResponse
     *
     * @param ListMachineNetworkInfoRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ListMachineNetworkInfoResponse
     */
    public function listMachineNetworkInfoWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListMachineNetworkInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->machineHpnInfo) {
            $request->machineHpnInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->machineHpnInfo, 'MachineHpnInfo', 'json');
        }

        $body = [];
        if (null !== $request->machineHpnInfoShrink) {
            @$body['MachineHpnInfo'] = $request->machineHpnInfoShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMachineNetworkInfo',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMachineNetworkInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query machine network configuration using HPNZone and machine type.
     *
     * @param request - ListMachineNetworkInfoRequest
     *
     * @returns ListMachineNetworkInfoResponse
     *
     * @param ListMachineNetworkInfoRequest $request
     *
     * @return ListMachineNetworkInfoResponse
     */
    public function listMachineNetworkInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMachineNetworkInfoWithOptions($request, $runtime);
    }

    /**
     * Queries a list of instance types that are available to users.
     *
     * @param request - ListMachineTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMachineTypesResponse
     *
     * @param ListMachineTypesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListMachineTypesResponse
     */
    public function listMachineTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMachineTypes',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMachineTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of instance types that are available to users.
     *
     * @param request - ListMachineTypesRequest
     *
     * @returns ListMachineTypesResponse
     *
     * @param ListMachineTypesRequest $request
     *
     * @return ListMachineTypesResponse
     */
    public function listMachineTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMachineTypesWithOptions($request, $runtime);
    }

    /**
     * Lists the results of network test results.
     *
     * @remarks
     * The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *
     * @param request - ListNetTestResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNetTestResultsResponse
     *
     * @param ListNetTestResultsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListNetTestResultsResponse
     */
    public function listNetTestResultsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->netTestType) {
            @$body['NetTestType'] = $request->netTestType;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNetTestResults',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNetTestResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the results of network test results.
     *
     * @remarks
     * The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *
     * @param request - ListNetTestResultsRequest
     *
     * @returns ListNetTestResultsResponse
     *
     * @param ListNetTestResultsRequest $request
     *
     * @return ListNetTestResultsResponse
     */
    public function listNetTestResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetTestResultsWithOptions($request, $runtime);
    }

    /**
     * Queries node groups in a cluster.
     *
     * @param request - ListNodeGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodeGroupsResponse
     *
     * @param ListNodeGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListNodeGroupsResponse
     */
    public function listNodeGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nodeGroupId) {
            @$body['NodeGroupId'] = $request->nodeGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNodeGroups',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNodeGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries node groups in a cluster.
     *
     * @param request - ListNodeGroupsRequest
     *
     * @returns ListNodeGroupsResponse
     *
     * @param ListNodeGroupsRequest $request
     *
     * @return ListNodeGroupsResponse
     */
    public function listNodeGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the tags of resources.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags of resources.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
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
     * Query the cluster types available to the user.
     *
     * @param request - ListUserClusterTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserClusterTypesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListUserClusterTypesResponse
     */
    public function listUserClusterTypesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListUserClusterTypes',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserClusterTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the cluster types available to the user.
     *
     * @returns ListUserClusterTypesResponse
     *
     * @return ListUserClusterTypesResponse
     */
    public function listUserClusterTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserClusterTypesWithOptions($runtime);
    }

    /**
     * Queries a list of virtual storage channels (VSC).
     *
     * @param tmpReq - ListVscsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVscsResponse
     *
     * @param ListVscsRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return ListVscsResponse
     */
    public function listVscsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListVscsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodeIds) {
            $request->nodeIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeIds, 'NodeIds', 'json');
        }

        $query = [];
        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nodeIdsShrink) {
            @$body['NodeIds'] = $request->nodeIdsShrink;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vscName) {
            @$body['VscName'] = $request->vscName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVscs',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVscsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of virtual storage channels (VSC).
     *
     * @param request - ListVscsRequest
     *
     * @returns ListVscsResponse
     *
     * @param ListVscsRequest $request
     *
     * @return ListVscsResponse
     */
    public function listVscs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVscsWithOptions($request, $runtime);
    }

    /**
     * Restarts nodes.
     *
     * @param tmpReq - RebootNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebootNodesResponse
     *
     * @param RebootNodesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return RebootNodesResponse
     */
    public function rebootNodesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RebootNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodes) {
            $request->nodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodes, 'Nodes', 'json');
        }

        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ignoreFailedNodeTasks) {
            @$body['IgnoreFailedNodeTasks'] = $request->ignoreFailedNodeTasks;
        }

        if (null !== $request->nodesShrink) {
            @$body['Nodes'] = $request->nodesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RebootNodes',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebootNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts nodes.
     *
     * @param request - RebootNodesRequest
     *
     * @returns RebootNodesResponse
     *
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
     * Reinstall a node.
     *
     * @param tmpReq - ReimageNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReimageNodesResponse
     *
     * @param ReimageNodesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ReimageNodesResponse
     */
    public function reimageNodesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReimageNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodes) {
            $request->nodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodes, 'Nodes', 'json');
        }

        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ignoreFailedNodeTasks) {
            @$body['IgnoreFailedNodeTasks'] = $request->ignoreFailedNodeTasks;
        }

        if (null !== $request->nodesShrink) {
            @$body['Nodes'] = $request->nodesShrink;
        }

        if (null !== $request->userData) {
            @$body['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReimageNodes',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReimageNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reinstall a node.
     *
     * @param request - ReimageNodesRequest
     *
     * @returns ReimageNodesResponse
     *
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
     * 节点异常问题上报.
     *
     * @param tmpReq - ReportNodesStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReportNodesStatusResponse
     *
     * @param ReportNodesStatusRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ReportNodesStatusResponse
     */
    public function reportNodesStatusWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReportNodesStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodes) {
            $request->nodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodes, 'Nodes', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->issueCategory) {
            @$body['IssueCategory'] = $request->issueCategory;
        }

        if (null !== $request->nodesShrink) {
            @$body['Nodes'] = $request->nodesShrink;
        }

        if (null !== $request->reason) {
            @$body['Reason'] = $request->reason;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReportNodesStatus',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReportNodesStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 节点异常问题上报.
     *
     * @param request - ReportNodesStatusRequest
     *
     * @returns ReportNodesStatusResponse
     *
     * @param ReportNodesStatusRequest $request
     *
     * @return ReportNodesStatusResponse
     */
    public function reportNodesStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportNodesStatusWithOptions($request, $runtime);
    }

    /**
     * Runs a Shell script on one or more Lingjun nodes.
     *
     * @param tmpReq - RunCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunCommandResponse
     *
     * @param RunCommandRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return RunCommandResponse
     */
    public function runCommandWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunCommandShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodeIdList) {
            $request->nodeIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeIdList, 'NodeIdList', 'json');
        }

        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->commandContent) {
            @$body['CommandContent'] = $request->commandContent;
        }

        if (null !== $request->commandId) {
            @$body['CommandId'] = $request->commandId;
        }

        if (null !== $request->contentEncoding) {
            @$body['ContentEncoding'] = $request->contentEncoding;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enableParameter) {
            @$body['EnableParameter'] = $request->enableParameter;
        }

        if (null !== $request->frequency) {
            @$body['Frequency'] = $request->frequency;
        }

        if (null !== $request->launcher) {
            @$body['Launcher'] = $request->launcher;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->nodeIdListShrink) {
            @$body['NodeIdList'] = $request->nodeIdListShrink;
        }

        if (null !== $request->parametersShrink) {
            @$body['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->repeatMode) {
            @$body['RepeatMode'] = $request->repeatMode;
        }

        if (null !== $request->terminationMode) {
            @$body['TerminationMode'] = $request->terminationMode;
        }

        if (null !== $request->timeout) {
            @$body['Timeout'] = $request->timeout;
        }

        if (null !== $request->username) {
            @$body['Username'] = $request->username;
        }

        if (null !== $request->workingDir) {
            @$body['WorkingDir'] = $request->workingDir;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunCommand',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs a Shell script on one or more Lingjun nodes.
     *
     * @param request - RunCommandRequest
     *
     * @returns RunCommandResponse
     *
     * @param RunCommandRequest $request
     *
     * @return RunCommandResponse
     */
    public function runCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCommandWithOptions($request, $runtime);
    }

    /**
     * Sends a file to one or more Lingjun nodes.
     *
     * @param tmpReq - SendFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendFileResponse
     *
     * @param SendFileRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return SendFileResponse
     */
    public function sendFileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SendFileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodeIdList) {
            $request->nodeIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeIdList, 'NodeIdList', 'json');
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->contentType) {
            @$body['ContentType'] = $request->contentType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->fileGroup) {
            @$body['FileGroup'] = $request->fileGroup;
        }

        if (null !== $request->fileMode) {
            @$body['FileMode'] = $request->fileMode;
        }

        if (null !== $request->fileOwner) {
            @$body['FileOwner'] = $request->fileOwner;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->nodeIdListShrink) {
            @$body['NodeIdList'] = $request->nodeIdListShrink;
        }

        if (null !== $request->overwrite) {
            @$body['Overwrite'] = $request->overwrite;
        }

        if (null !== $request->targetDir) {
            @$body['TargetDir'] = $request->targetDir;
        }

        if (null !== $request->timeout) {
            @$body['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendFile',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a file to one or more Lingjun nodes.
     *
     * @param request - SendFileRequest
     *
     * @returns SendFileResponse
     *
     * @param SendFileRequest $request
     *
     * @return SendFileResponse
     */
    public function sendFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendFileWithOptions($request, $runtime);
    }

    /**
     * Scales in a cluster.
     *
     * @param tmpReq - ShrinkClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ShrinkClusterResponse
     *
     * @param ShrinkClusterRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ShrinkClusterResponse
     */
    public function shrinkClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ShrinkClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodeGroups) {
            $request->nodeGroupsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeGroups, 'NodeGroups', 'json');
        }

        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->ignoreFailedNodeTasks) {
            @$body['IgnoreFailedNodeTasks'] = $request->ignoreFailedNodeTasks;
        }

        if (null !== $request->nodeGroupsShrink) {
            @$body['NodeGroups'] = $request->nodeGroupsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ShrinkCluster',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ShrinkClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scales in a cluster.
     *
     * @param request - ShrinkClusterRequest
     *
     * @returns ShrinkClusterResponse
     *
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
     * Stops the O\\&M assistant command execution.
     *
     * @param tmpReq - StopInvocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopInvocationResponse
     *
     * @param StopInvocationRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return StopInvocationResponse
     */
    public function stopInvocationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StopInvocationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodeIdList) {
            $request->nodeIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeIdList, 'NodeIdList', 'json');
        }

        $body = [];
        if (null !== $request->invokeId) {
            @$body['InvokeId'] = $request->invokeId;
        }

        if (null !== $request->nodeIdListShrink) {
            @$body['NodeIdList'] = $request->nodeIdListShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopInvocation',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopInvocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops the O\\&M assistant command execution.
     *
     * @param request - StopInvocationRequest
     *
     * @returns StopInvocationResponse
     *
     * @param StopInvocationRequest $request
     *
     * @return StopInvocationResponse
     */
    public function stopInvocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInvocationWithOptions($request, $runtime);
    }

    /**
     * Stops nodes.
     *
     * @param tmpReq - StopNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopNodesResponse
     *
     * @param StopNodesRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return StopNodesResponse
     */
    public function stopNodesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StopNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodes) {
            $request->nodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodes, 'Nodes', 'json');
        }

        $body = [];
        if (null !== $request->ignoreFailedNodeTasks) {
            @$body['IgnoreFailedNodeTasks'] = $request->ignoreFailedNodeTasks;
        }

        if (null !== $request->nodesShrink) {
            @$body['Nodes'] = $request->nodesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopNodes',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops nodes.
     *
     * @param request - StopNodesRequest
     *
     * @returns StopNodesResponse
     *
     * @param StopNodesRequest $request
     *
     * @return StopNodesResponse
     */
    public function stopNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopNodesWithOptions($request, $runtime);
    }

    /**
     * Tags resources.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tags resources.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
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
     * Deletes a custom tag from a resource.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom tag from a resource.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Update Node Group.
     *
     * @param request - UpdateNodeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNodeGroupResponse
     *
     * @param UpdateNodeGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateNodeGroupResponse
     */
    public function updateNodeGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileSystemMountEnabled) {
            @$body['FileSystemMountEnabled'] = $request->fileSystemMountEnabled;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->keyPairName) {
            @$body['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->loginPassword) {
            @$body['LoginPassword'] = $request->loginPassword;
        }

        if (null !== $request->newNodeGroupName) {
            @$body['NewNodeGroupName'] = $request->newNodeGroupName;
        }

        if (null !== $request->nodeGroupId) {
            @$body['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->userData) {
            @$body['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateNodeGroup',
            'version' => '2022-12-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNodeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Node Group.
     *
     * @param request - UpdateNodeGroupRequest
     *
     * @returns UpdateNodeGroupResponse
     *
     * @param UpdateNodeGroupRequest $request
     *
     * @return UpdateNodeGroupResponse
     */
    public function updateNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNodeGroupWithOptions($request, $runtime);
    }
}
