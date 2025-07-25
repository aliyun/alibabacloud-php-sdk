<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ApproveOperationRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ApproveOperationResponse;
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
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClustersRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClustersResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListDiagnosticResultsRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListDiagnosticResultsResponse;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesRequest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesResponse;
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
     * @summary Approves an O\\&M operation.
     *  *
     * @param ApproveOperationRequest $request ApproveOperationRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ApproveOperationResponse ApproveOperationResponse
     */
    public function approveOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->operationType)) {
            $body['OperationType'] = $request->operationType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Approves an O\\&M operation.
     *  *
     * @param ApproveOperationRequest $request ApproveOperationRequest
     *
     * @return ApproveOperationResponse ApproveOperationResponse
     */
    public function approveOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveOperationWithOptions($request, $runtime);
    }

    /**
     * @summary Moves a resource from one resource group to another.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
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
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Moves a resource from one resource group to another.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Disconnect Connection
     *  *
     * @param CloseSessionRequest $request CloseSessionRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseSessionResponse CloseSessionResponse
     */
    public function closeSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->sessionToken)) {
            $body['SessionToken'] = $request->sessionToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Disconnect Connection
     *  *
     * @param CloseSessionRequest $request CloseSessionRequest
     *
     * @return CloseSessionResponse CloseSessionResponse
     */
    public function closeSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeSessionWithOptions($request, $runtime);
    }

    /**
     * @summary Create a large-scale computing cluster
     *  *
     * @param CreateClusterRequest $tmpReq  CreateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
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
        if (!Utils::isUnset($request->openEniJumboFrame)) {
            $body['OpenEniJumboFrame'] = $request->openEniJumboFrame;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Create a large-scale computing cluster
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a diagnostics task.
     *  *
     * @param CreateDiagnosticTaskRequest $tmpReq  CreateDiagnosticTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDiagnosticTaskResponse CreateDiagnosticTaskResponse
     */
    public function createDiagnosticTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDiagnosticTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->aiJobLogInfo)) {
            $request->aiJobLogInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->aiJobLogInfo, 'AiJobLogInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->nodeIds)) {
            $request->nodeIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeIds, 'NodeIds', 'simple');
        }
        $body = [];
        if (!Utils::isUnset($request->aiJobLogInfoShrink)) {
            $body['AiJobLogInfo'] = $request->aiJobLogInfoShrink;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->diagnosticType)) {
            $body['DiagnosticType'] = $request->diagnosticType;
        }
        if (!Utils::isUnset($request->nodeIdsShrink)) {
            $body['NodeIds'] = $request->nodeIdsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates a diagnostics task.
     *  *
     * @param CreateDiagnosticTaskRequest $request CreateDiagnosticTaskRequest
     *
     * @return CreateDiagnosticTaskResponse CreateDiagnosticTaskResponse
     */
    public function createDiagnosticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosticTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a network test task.
     *  *
     * @description The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *  *
     * @param CreateNetTestTaskRequest $tmpReq  CreateNetTestTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetTestTaskResponse CreateNetTestTaskResponse
     */
    public function createNetTestTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateNetTestTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->commTest)) {
            $request->commTestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->commTest, 'CommTest', 'json');
        }
        if (!Utils::isUnset($tmpReq->delayTest)) {
            $request->delayTestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->delayTest, 'DelayTest', 'json');
        }
        if (!Utils::isUnset($tmpReq->trafficTest)) {
            $request->trafficTestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->trafficTest, 'TrafficTest', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $body['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->commTestShrink)) {
            $body['CommTest'] = $request->commTestShrink;
        }
        if (!Utils::isUnset($request->delayTestShrink)) {
            $body['DelayTest'] = $request->delayTestShrink;
        }
        if (!Utils::isUnset($request->netTestType)) {
            $body['NetTestType'] = $request->netTestType;
        }
        if (!Utils::isUnset($request->networkMode)) {
            $body['NetworkMode'] = $request->networkMode;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->trafficTestShrink)) {
            $body['TrafficTest'] = $request->trafficTestShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates a network test task.
     *  *
     * @description The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *  *
     * @param CreateNetTestTaskRequest $request CreateNetTestTaskRequest
     *
     * @return CreateNetTestTaskResponse CreateNetTestTaskResponse
     */
    public function createNetTestTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetTestTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Create Node Group under Cluster
     *  *
     * @param CreateNodeGroupRequest $tmpReq  CreateNodeGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNodeGroupResponse CreateNodeGroupResponse
     */
    public function createNodeGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateNodeGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodeGroup)) {
            $request->nodeGroupShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeGroup, 'NodeGroup', 'json');
        }
        if (!Utils::isUnset($tmpReq->nodeUnit)) {
            $request->nodeUnitShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeUnit, 'NodeUnit', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->nodeGroupShrink)) {
            $body['NodeGroup'] = $request->nodeGroupShrink;
        }
        if (!Utils::isUnset($request->nodeUnitShrink)) {
            $body['NodeUnit'] = $request->nodeUnitShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Create Node Group under Cluster
     *  *
     * @param CreateNodeGroupRequest $request CreateNodeGroupRequest
     *
     * @return CreateNodeGroupResponse CreateNodeGroupResponse
     */
    public function createNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Web Terminal session.
     *  *
     * @description The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *  *
     * @param CreateSessionRequest $request CreateSessionRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSessionResponse CreateSessionResponse
     */
    public function createSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->sessionType)) {
            $body['SessionType'] = $request->sessionType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates a Web Terminal session.
     *  *
     * @description The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *  *
     * @param CreateSessionRequest $request CreateSessionRequest
     *
     * @return CreateSessionResponse CreateSessionResponse
     */
    public function createSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSessionWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a virtual storage channel (VSC).
     *  *
     * @param CreateVscRequest $request CreateVscRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVscResponse CreateVscResponse
     */
    public function createVscWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vscName)) {
            $body['VscName'] = $request->vscName;
        }
        if (!Utils::isUnset($request->vscType)) {
            $body['VscType'] = $request->vscType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates a virtual storage channel (VSC).
     *  *
     * @param CreateVscRequest $request CreateVscRequest
     *
     * @return CreateVscResponse CreateVscResponse
     */
    public function createVsc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVscWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Lingjun cluster.
     *  *
     * @param DeleteClusterRequest $request DeleteClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterResponse DeleteClusterResponse
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
     * @summary Deletes a Lingjun cluster.
     *  *
     * @param DeleteClusterRequest $request DeleteClusterRequest
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 删除节点分组
     *  *
     * @param DeleteNodeGroupRequest $request DeleteNodeGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNodeGroupResponse DeleteNodeGroupResponse
     */
    public function deleteNodeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $body['NodeGroupId'] = $request->nodeGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 删除节点分组
     *  *
     * @param DeleteNodeGroupRequest $request DeleteNodeGroupRequest
     *
     * @return DeleteNodeGroupResponse DeleteNodeGroupResponse
     */
    public function deleteNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodeGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a virtual storage channel (VSC).
     *  *
     * @param DeleteVscRequest $request DeleteVscRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVscResponse DeleteVscResponse
     */
    public function deleteVscWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->vscId)) {
            $body['VscId'] = $request->vscId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Deletes a virtual storage channel (VSC).
     *  *
     * @param DeleteVscRequest $request DeleteVscRequest
     *
     * @return DeleteVscResponse DeleteVscResponse
     */
    public function deleteVsc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVscWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a Lingjun cluster.
     *  *
     * @param DescribeClusterRequest $request DescribeClusterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterResponse DescribeClusterResponse
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
     * @summary Queries information about a Lingjun cluster.
     *  *
     * @param DescribeClusterRequest $request DescribeClusterRequest
     *
     * @return DescribeClusterResponse DescribeClusterResponse
     */
    public function describeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the results of a diagnostic task.
     *  *
     * @description The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *  *
     * @param DescribeDiagnosticResultRequest $request DescribeDiagnosticResultRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosticResultResponse DescribeDiagnosticResultResponse
     */
    public function describeDiagnosticResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->diagnosticId)) {
            $body['DiagnosticId'] = $request->diagnosticId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries the results of a diagnostic task.
     *  *
     * @description The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *  *
     * @param DescribeDiagnosticResultRequest $request DescribeDiagnosticResultRequest
     *
     * @return DescribeDiagnosticResultResponse DescribeDiagnosticResultResponse
     */
    public function describeDiagnosticResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosticResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution list and status of O\\&M Assistant commands.
     *  *
     * @param DescribeInvocationsRequest $request DescribeInvocationsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInvocationsResponse DescribeInvocationsResponse
     */
    public function describeInvocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->contentEncoding)) {
            $body['ContentEncoding'] = $request->contentEncoding;
        }
        if (!Utils::isUnset($request->includeOutput)) {
            $body['IncludeOutput'] = $request->includeOutput;
        }
        if (!Utils::isUnset($request->invokeId)) {
            $body['InvokeId'] = $request->invokeId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries the execution list and status of O\\&M Assistant commands.
     *  *
     * @param DescribeInvocationsRequest $request DescribeInvocationsRequest
     *
     * @return DescribeInvocationsResponse DescribeInvocationsResponse
     */
    public function describeInvocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationsWithOptions($request, $runtime);
    }

    /**
     * @summary Query Network Test Result
     *  *
     * @param DescribeNetTestResultRequest $request DescribeNetTestResultRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNetTestResultResponse DescribeNetTestResultResponse
     */
    public function describeNetTestResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->testId)) {
            $body['TestId'] = $request->testId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Query Network Test Result
     *  *
     * @param DescribeNetTestResultRequest $request DescribeNetTestResultRequest
     *
     * @return DescribeNetTestResultResponse DescribeNetTestResultResponse
     */
    public function describeNetTestResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetTestResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of nodes.
     *  *
     * @param DescribeNodeRequest $request DescribeNodeRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNodeResponse DescribeNodeResponse
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
     * @summary Queries a list of nodes.
     *  *
     * @param DescribeNodeRequest $request DescribeNodeRequest
     *
     * @return DescribeNodeResponse DescribeNodeResponse
     */
    public function describeNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of regions.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
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
     * @summary Queries a list of regions.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the files that are sent by an O\\&M assistant and the status of the files.
     *  *
     * @param DescribeSendFileResultsRequest $request DescribeSendFileResultsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSendFileResultsResponse DescribeSendFileResultsResponse
     */
    public function describeSendFileResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->invokeId)) {
            $body['InvokeId'] = $request->invokeId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries the files that are sent by an O\\&M assistant and the status of the files.
     *  *
     * @param DescribeSendFileResultsRequest $request DescribeSendFileResultsRequest
     *
     * @return DescribeSendFileResultsResponse DescribeSendFileResultsResponse
     */
    public function describeSendFileResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSendFileResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a task.
     *  *
     * @param DescribeTaskRequest $request DescribeTaskRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTaskResponse DescribeTaskResponse
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
     * @summary Queries the details of a task.
     *  *
     * @param DescribeTaskRequest $request DescribeTaskRequest
     *
     * @return DescribeTaskResponse DescribeTaskResponse
     */
    public function describeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a virtual storage channel (VSC).
     *  *
     * @param DescribeVscRequest $request DescribeVscRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVscResponse DescribeVscResponse
     */
    public function describeVscWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->vscId)) {
            $body['VscId'] = $request->vscId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries information about a virtual storage channel (VSC).
     *  *
     * @param DescribeVscRequest $request DescribeVscRequest
     *
     * @return DescribeVscResponse DescribeVscResponse
     */
    public function describeVsc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVscWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of zones.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZonesResponse DescribeZonesResponse
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
     * @summary Queries a list of zones.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @summary Cluster Scaling
     *  *
     * @param ExtendClusterRequest $tmpReq  ExtendClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ExtendClusterResponse ExtendClusterResponse
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
        if (!Utils::isUnset($request->vSwitchZoneId)) {
            $body['VSwitchZoneId'] = $request->vSwitchZoneId;
        }
        if (!Utils::isUnset($request->vpdSubnetsShrink)) {
            $body['VpdSubnets'] = $request->vpdSubnetsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Cluster Scaling
     *  *
     * @param ExtendClusterRequest $request ExtendClusterRequest
     *
     * @return ExtendClusterResponse ExtendClusterResponse
     */
    public function extendCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extendClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of nodes in a cluster.
     *  *
     * @param ListClusterNodesRequest $request ListClusterNodesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClusterNodesResponse ListClusterNodesResponse
     */
    public function listClusterNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries a list of nodes in a cluster.
     *  *
     * @param ListClusterNodesRequest $request ListClusterNodesRequest
     *
     * @return ListClusterNodesResponse ListClusterNodesResponse
     */
    public function listClusterNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of clusters.
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries a list of clusters.
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * @summary List of Diagnostic Tasks
     *  *
     * @param ListDiagnosticResultsRequest $request ListDiagnosticResultsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDiagnosticResultsResponse ListDiagnosticResultsResponse
     */
    public function listDiagnosticResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->diagType)) {
            $body['DiagType'] = $request->diagType;
        }
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
     * @summary List of Diagnostic Tasks
     *  *
     * @param ListDiagnosticResultsRequest $request ListDiagnosticResultsRequest
     *
     * @return ListDiagnosticResultsResponse ListDiagnosticResultsResponse
     */
    public function listDiagnosticResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDiagnosticResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of nodes that are not used.
     *  *
     * @param ListFreeNodesRequest $request ListFreeNodesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFreeNodesResponse ListFreeNodesResponse
     */
    public function listFreeNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
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
        if (!Utils::isUnset($request->operatingStates)) {
            $body['OperatingStates'] = $request->operatingStates;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries a list of nodes that are not used.
     *  *
     * @param ListFreeNodesRequest $request ListFreeNodesRequest
     *
     * @return ListFreeNodesResponse ListFreeNodesResponse
     */
    public function listFreeNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFreeNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Lists available images.
     *  *
     * @param ListImagesRequest $request ListImagesRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImagesResponse ListImagesResponse
     */
    public function listImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->architecture)) {
            $body['Architecture'] = $request->architecture;
        }
        if (!Utils::isUnset($request->imageVersion)) {
            $body['ImageVersion'] = $request->imageVersion;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['Platform'] = $request->platform;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Lists available images.
     *  *
     * @param ListImagesRequest $request ListImagesRequest
     *
     * @return ListImagesResponse ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesWithOptions($request, $runtime);
    }

    /**
     * @summary Query machine network configuration using HPNZone and machine type
     *  *
     * @param ListMachineNetworkInfoRequest $tmpReq  ListMachineNetworkInfoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMachineNetworkInfoResponse ListMachineNetworkInfoResponse
     */
    public function listMachineNetworkInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListMachineNetworkInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->machineHpnInfo)) {
            $request->machineHpnInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->machineHpnInfo, 'MachineHpnInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->machineHpnInfoShrink)) {
            $body['MachineHpnInfo'] = $request->machineHpnInfoShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Query machine network configuration using HPNZone and machine type
     *  *
     * @param ListMachineNetworkInfoRequest $request ListMachineNetworkInfoRequest
     *
     * @return ListMachineNetworkInfoResponse ListMachineNetworkInfoResponse
     */
    public function listMachineNetworkInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMachineNetworkInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of instance types that are available to users.
     *  *
     * @param ListMachineTypesRequest $request ListMachineTypesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMachineTypesResponse ListMachineTypesResponse
     */
    public function listMachineTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries a list of instance types that are available to users.
     *  *
     * @param ListMachineTypesRequest $request ListMachineTypesRequest
     *
     * @return ListMachineTypesResponse ListMachineTypesResponse
     */
    public function listMachineTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMachineTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Lists the results of network test results.
     *  *
     * @description The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *  *
     * @param ListNetTestResultsRequest $request ListNetTestResultsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNetTestResultsResponse ListNetTestResultsResponse
     */
    public function listNetTestResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->netTestType)) {
            $body['NetTestType'] = $request->netTestType;
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
     * @summary Lists the results of network test results.
     *  *
     * @description The API creates a session, returns the frontend endpoint, and starts a periodic task to track the session status.
     *  *
     * @param ListNetTestResultsRequest $request ListNetTestResultsRequest
     *
     * @return ListNetTestResultsResponse ListNetTestResultsResponse
     */
    public function listNetTestResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetTestResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries node groups in a cluster.
     *  *
     * @param ListNodeGroupsRequest $request ListNodeGroupsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodeGroupsResponse ListNodeGroupsResponse
     */
    public function listNodeGroupsWithOptions($request, $runtime)
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
     * @summary Queries node groups in a cluster.
     *  *
     * @param ListNodeGroupsRequest $request ListNodeGroupsRequest
     *
     * @return ListNodeGroupsResponse ListNodeGroupsResponse
     */
    public function listNodeGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags of resources.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
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
     * @summary Queries the tags of resources.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Query the cluster types available to the user
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserClusterTypesResponse ListUserClusterTypesResponse
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
     * @summary Query the cluster types available to the user
     *  *
     * @return ListUserClusterTypesResponse ListUserClusterTypesResponse
     */
    public function listUserClusterTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserClusterTypesWithOptions($runtime);
    }

    /**
     * @summary Queries a list of virtual storage channels (VSC).
     *  *
     * @param ListVscsRequest $tmpReq  ListVscsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVscsResponse ListVscsResponse
     */
    public function listVscsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListVscsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodeIds)) {
            $request->nodeIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeIds, 'NodeIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->nodeIdsShrink)) {
            $body['NodeIds'] = $request->nodeIdsShrink;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vscName)) {
            $body['VscName'] = $request->vscName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Queries a list of virtual storage channels (VSC).
     *  *
     * @param ListVscsRequest $request ListVscsRequest
     *
     * @return ListVscsResponse ListVscsResponse
     */
    public function listVscs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVscsWithOptions($request, $runtime);
    }

    /**
     * @summary Restarts nodes.
     *  *
     * @param RebootNodesRequest $tmpReq  RebootNodesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RebootNodesResponse RebootNodesResponse
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
     * @summary Restarts nodes.
     *  *
     * @param RebootNodesRequest $request RebootNodesRequest
     *
     * @return RebootNodesResponse RebootNodesResponse
     */
    public function rebootNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Reinstall a node.
     *  *
     * @param ReimageNodesRequest $tmpReq  ReimageNodesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ReimageNodesResponse ReimageNodesResponse
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
     * @summary Reinstall a node.
     *  *
     * @param ReimageNodesRequest $request ReimageNodesRequest
     *
     * @return ReimageNodesResponse ReimageNodesResponse
     */
    public function reimageNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reimageNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Runs a Shell script on one or more Lingjun nodes.
     *  *
     * @param RunCommandRequest $tmpReq  RunCommandRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RunCommandResponse RunCommandResponse
     */
    public function runCommandWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunCommandShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodeIdList)) {
            $request->nodeIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeIdList, 'NodeIdList', 'json');
        }
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commandContent)) {
            $body['CommandContent'] = $request->commandContent;
        }
        if (!Utils::isUnset($request->commandId)) {
            $body['CommandId'] = $request->commandId;
        }
        if (!Utils::isUnset($request->contentEncoding)) {
            $body['ContentEncoding'] = $request->contentEncoding;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableParameter)) {
            $body['EnableParameter'] = $request->enableParameter;
        }
        if (!Utils::isUnset($request->frequency)) {
            $body['Frequency'] = $request->frequency;
        }
        if (!Utils::isUnset($request->launcher)) {
            $body['Launcher'] = $request->launcher;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nodeIdListShrink)) {
            $body['NodeIdList'] = $request->nodeIdListShrink;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $body['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->repeatMode)) {
            $body['RepeatMode'] = $request->repeatMode;
        }
        if (!Utils::isUnset($request->terminationMode)) {
            $body['TerminationMode'] = $request->terminationMode;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->username)) {
            $body['Username'] = $request->username;
        }
        if (!Utils::isUnset($request->workingDir)) {
            $body['WorkingDir'] = $request->workingDir;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Runs a Shell script on one or more Lingjun nodes.
     *  *
     * @param RunCommandRequest $request RunCommandRequest
     *
     * @return RunCommandResponse RunCommandResponse
     */
    public function runCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCommandWithOptions($request, $runtime);
    }

    /**
     * @summary Sends a file to one or more Lingjun nodes.
     *  *
     * @param SendFileRequest $tmpReq  SendFileRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return SendFileResponse SendFileResponse
     */
    public function sendFileWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendFileShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodeIdList)) {
            $request->nodeIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeIdList, 'NodeIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentType)) {
            $body['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileGroup)) {
            $body['FileGroup'] = $request->fileGroup;
        }
        if (!Utils::isUnset($request->fileMode)) {
            $body['FileMode'] = $request->fileMode;
        }
        if (!Utils::isUnset($request->fileOwner)) {
            $body['FileOwner'] = $request->fileOwner;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nodeIdListShrink)) {
            $body['NodeIdList'] = $request->nodeIdListShrink;
        }
        if (!Utils::isUnset($request->overwrite)) {
            $body['Overwrite'] = $request->overwrite;
        }
        if (!Utils::isUnset($request->targetDir)) {
            $body['TargetDir'] = $request->targetDir;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Sends a file to one or more Lingjun nodes.
     *  *
     * @param SendFileRequest $request SendFileRequest
     *
     * @return SendFileResponse SendFileResponse
     */
    public function sendFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendFileWithOptions($request, $runtime);
    }

    /**
     * @summary Scales in a cluster.
     *  *
     * @param ShrinkClusterRequest $tmpReq  ShrinkClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ShrinkClusterResponse ShrinkClusterResponse
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
     * @summary Scales in a cluster.
     *  *
     * @param ShrinkClusterRequest $request ShrinkClusterRequest
     *
     * @return ShrinkClusterResponse ShrinkClusterResponse
     */
    public function shrinkCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->shrinkClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Stops the O\\&M assistant command execution.
     *  *
     * @param StopInvocationRequest $tmpReq  StopInvocationRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StopInvocationResponse StopInvocationResponse
     */
    public function stopInvocationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopInvocationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodeIdList)) {
            $request->nodeIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeIdList, 'NodeIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->invokeId)) {
            $body['InvokeId'] = $request->invokeId;
        }
        if (!Utils::isUnset($request->nodeIdListShrink)) {
            $body['NodeIdList'] = $request->nodeIdListShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Stops the O\\&M assistant command execution.
     *  *
     * @param StopInvocationRequest $request StopInvocationRequest
     *
     * @return StopInvocationResponse StopInvocationResponse
     */
    public function stopInvocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInvocationWithOptions($request, $runtime);
    }

    /**
     * @summary Stops nodes.
     *  *
     * @param StopNodesRequest $tmpReq  StopNodesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return StopNodesResponse StopNodesResponse
     */
    public function stopNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodes)) {
            $request->nodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodes, 'Nodes', 'json');
        }
        $body = [];
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
     * @summary Stops nodes.
     *  *
     * @param StopNodesRequest $request StopNodesRequest
     *
     * @return StopNodesResponse StopNodesResponse
     */
    public function stopNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Tags resources.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
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
     * @summary Tags resources.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom tag from a resource.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
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
     * @summary Deletes a custom tag from a resource.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Update Node Group
     *  *
     * @param UpdateNodeGroupRequest $request UpdateNodeGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNodeGroupResponse UpdateNodeGroupResponse
     */
    public function updateNodeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileSystemMountEnabled)) {
            $body['FileSystemMountEnabled'] = $request->fileSystemMountEnabled;
        }
        if (!Utils::isUnset($request->imageId)) {
            $body['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $body['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->loginPassword)) {
            $body['LoginPassword'] = $request->loginPassword;
        }
        if (!Utils::isUnset($request->newNodeGroupName)) {
            $body['NewNodeGroupName'] = $request->newNodeGroupName;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $body['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Update Node Group
     *  *
     * @param UpdateNodeGroupRequest $request UpdateNodeGroupRequest
     *
     * @return UpdateNodeGroupResponse UpdateNodeGroupResponse
     */
    public function updateNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNodeGroupWithOptions($request, $runtime);
    }
}
