<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cr\V20181201\Models\CancelArtifactBuildTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CancelArtifactBuildTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CancelRepoBuildRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CancelRepoBuildRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CancelRepoSyncTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CancelRepoSyncTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateArtifactBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateArtifactBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateArtifactBuildRuleShrinkRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateArtifactLifecycleRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateArtifactLifecycleRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateArtifactSubscriptionRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateArtifactSubscriptionRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateArtifactSubscriptionTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateArtifactSubscriptionTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateBuildRecordByRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateBuildRecordByRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateBuildRecordByRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateBuildRecordByRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChainRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChainResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateInstanceEndpointAclPolicyRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateInstanceEndpointAclPolicyResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateInstanceVpcEndpointLinkedVpcRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateInstanceVpcEndpointLinkedVpcResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSourceCodeRepoRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSourceCodeRepoResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncTaskByRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncTaskByRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoSyncTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTagRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTagResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTagScanTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTagScanTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTriggerRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\CreateRepoTriggerResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteArtifactLifecycleRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteArtifactLifecycleRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteArtifactSubscriptionRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteArtifactSubscriptionRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChainRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChainResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartReleaseRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartReleaseResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteEventCenterRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteEventCenterRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteInstanceEndpointAclPolicyRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteInstanceEndpointAclPolicyResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteInstanceVpcEndpointLinkedVpcRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteInstanceVpcEndpointLinkedVpcResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoSyncRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoSyncRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoTagRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoTagResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoTriggerRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\DeleteRepoTriggerResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactLifecycleRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactLifecycleRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactSubscriptionRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactSubscriptionRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactSubscriptionTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactSubscriptionTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactSubscriptionTaskResultRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactSubscriptionTaskResultResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetAuthorizationTokenRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetAuthorizationTokenResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceCountResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceEndpointResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceUsageRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceUsageResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceVpcEndpointRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceVpcEndpointResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordStatusRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoBuildRecordStatusResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSourceCodeRepoRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSourceCodeRepoResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagScanStatusRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagScanStatusResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagScanSummaryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagScanSummaryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactBuildTaskLogRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactBuildTaskLogResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactLifecycleRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactLifecycleRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactSubscriptionRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactSubscriptionRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactSubscriptionTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactSubscriptionTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChainInstanceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChainInstanceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChainRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChainResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartReleaseRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartReleaseResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListEventCenterRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListEventCenterRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListEventCenterRuleNameRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListEventCenterRuleNameResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceEndpointResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceRegionRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceRegionResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordLogRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordLogResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagScanResultRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTagScanResultResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListScanBaselineByTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListScanBaselineByTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListScanMaliciousFileByTaskRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListScanMaliciousFileByTaskResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\ResetLoginPasswordRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\ResetLoginPasswordResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateArtifactLifecycleRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateArtifactLifecycleRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateArtifactSubscriptionRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateArtifactSubscriptionRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChainRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChainResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChartNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChartNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChartRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateChartRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateEventCenterRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateEventCenterRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateEventCenterRuleShrinkRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateInstanceEndpointStatusRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateInstanceEndpointStatusResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateNamespaceRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateNamespaceResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoBuildRuleRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoBuildRuleResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepositoryRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepositoryResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoSourceCodeRepoRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoSourceCodeRepoResponse;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoTriggerRequest;
use AlibabaCloud\SDK\Cr\V20181201\Models\UpdateRepoTriggerResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Cancels an artifact building task.
     *
     * @param request - CancelArtifactBuildTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelArtifactBuildTaskResponse
     *
     * @param CancelArtifactBuildTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CancelArtifactBuildTaskResponse
     */
    public function cancelArtifactBuildTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buildTaskId) {
            @$query['BuildTaskId'] = $request->buildTaskId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelArtifactBuildTask',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelArtifactBuildTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelArtifactBuildTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Cancels an artifact building task.
     *
     * @param request - CancelArtifactBuildTaskRequest
     *
     * @returns CancelArtifactBuildTaskResponse
     *
     * @param CancelArtifactBuildTaskRequest $request
     *
     * @return CancelArtifactBuildTaskResponse
     */
    public function cancelArtifactBuildTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelArtifactBuildTaskWithOptions($request, $runtime);
    }

    /**
     * Cancels an image building task of a repository.
     *
     * @param request - CancelRepoBuildRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelRepoBuildRecordResponse
     *
     * @param CancelRepoBuildRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CancelRepoBuildRecordResponse
     */
    public function cancelRepoBuildRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buildRecordId) {
            @$query['BuildRecordId'] = $request->buildRecordId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelRepoBuildRecord',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelRepoBuildRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelRepoBuildRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Cancels an image building task of a repository.
     *
     * @param request - CancelRepoBuildRecordRequest
     *
     * @returns CancelRepoBuildRecordResponse
     *
     * @param CancelRepoBuildRecordRequest $request
     *
     * @return CancelRepoBuildRecordResponse
     */
    public function cancelRepoBuildRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRepoBuildRecordWithOptions($request, $runtime);
    }

    /**
     * Cancels a single replication task.
     *
     * @param request - CancelRepoSyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelRepoSyncTaskResponse
     *
     * @param CancelRepoSyncTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CancelRepoSyncTaskResponse
     */
    public function cancelRepoSyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->syncTaskId) {
            @$query['SyncTaskId'] = $request->syncTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelRepoSyncTask',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelRepoSyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelRepoSyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Cancels a single replication task.
     *
     * @param request - CancelRepoSyncTaskRequest
     *
     * @returns CancelRepoSyncTaskResponse
     *
     * @param CancelRepoSyncTaskRequest $request
     *
     * @return CancelRepoSyncTaskResponse
     */
    public function cancelRepoSyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRepoSyncTaskWithOptions($request, $runtime);
    }

    /**
     * Changes the resource group to which a resource belongs.
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChangeResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Changes the resource group to which a resource belongs.
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
     * Create image repository acceleration rules for image building.
     *
     * @remarks
     * You can create building rules of accelerated images only for image repositories of Container Registry Advanced Edition instances. You cannot create building rules of accelerated images for image repositories of Container Registry Basic Edition instances. For more information, see [Specifications of different editions](https://www.alibabacloud.com/help/en/acr/product-overview/what-is-container-registry?spm=openapi-amp.newDocPublishment.0.0.bf82281fRj7rmV#section-n3q-ps7-x6k).
     * Accelerated images are not supported in Alibaba Finance Cloud regions or Alibaba Gov Cloud regions.
     *
     * @param tmpReq - CreateArtifactBuildRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateArtifactBuildRuleResponse
     *
     * @param CreateArtifactBuildRuleRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateArtifactBuildRuleResponse
     */
    public function createArtifactBuildRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateArtifactBuildRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->artifactType) {
            @$query['ArtifactType'] = $request->artifactType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->scopeId) {
            @$query['ScopeId'] = $request->scopeId;
        }

        if (null !== $request->scopeType) {
            @$query['ScopeType'] = $request->scopeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateArtifactBuildRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateArtifactBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateArtifactBuildRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Create image repository acceleration rules for image building.
     *
     * @remarks
     * You can create building rules of accelerated images only for image repositories of Container Registry Advanced Edition instances. You cannot create building rules of accelerated images for image repositories of Container Registry Basic Edition instances. For more information, see [Specifications of different editions](https://www.alibabacloud.com/help/en/acr/product-overview/what-is-container-registry?spm=openapi-amp.newDocPublishment.0.0.bf82281fRj7rmV#section-n3q-ps7-x6k).
     * Accelerated images are not supported in Alibaba Finance Cloud regions or Alibaba Gov Cloud regions.
     *
     * @param request - CreateArtifactBuildRuleRequest
     *
     * @returns CreateArtifactBuildRuleResponse
     *
     * @param CreateArtifactBuildRuleRequest $request
     *
     * @return CreateArtifactBuildRuleResponse
     */
    public function createArtifactBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createArtifactBuildRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a lifecycle management rule for an artifact.
     *
     * @param request - CreateArtifactLifecycleRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateArtifactLifecycleRuleResponse
     *
     * @param CreateArtifactLifecycleRuleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateArtifactLifecycleRuleResponse
     */
    public function createArtifactLifecycleRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auto) {
            @$query['Auto'] = $request->auto;
        }

        if (null !== $request->enableDeleteTag) {
            @$query['EnableDeleteTag'] = $request->enableDeleteTag;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->retentionTagCount) {
            @$query['RetentionTagCount'] = $request->retentionTagCount;
        }

        if (null !== $request->scheduleTime) {
            @$query['ScheduleTime'] = $request->scheduleTime;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->tagRegexp) {
            @$query['TagRegexp'] = $request->tagRegexp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateArtifactLifecycleRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateArtifactLifecycleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateArtifactLifecycleRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a lifecycle management rule for an artifact.
     *
     * @param request - CreateArtifactLifecycleRuleRequest
     *
     * @returns CreateArtifactLifecycleRuleResponse
     *
     * @param CreateArtifactLifecycleRuleRequest $request
     *
     * @return CreateArtifactLifecycleRuleResponse
     */
    public function createArtifactLifecycleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createArtifactLifecycleRuleWithOptions($request, $runtime);
    }

    /**
     * Creates an artifact subscription rule.
     *
     * @param request - CreateArtifactSubscriptionRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateArtifactSubscriptionRuleResponse
     *
     * @param CreateArtifactSubscriptionRuleRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateArtifactSubscriptionRuleResponse
     */
    public function createArtifactSubscriptionRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accelerate) {
            @$query['Accelerate'] = $request->accelerate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        if (null !== $request->override) {
            @$query['Override'] = $request->override;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->sourceNamespaceName) {
            @$query['SourceNamespaceName'] = $request->sourceNamespaceName;
        }

        if (null !== $request->sourceProvider) {
            @$query['SourceProvider'] = $request->sourceProvider;
        }

        if (null !== $request->sourceRepoName) {
            @$query['SourceRepoName'] = $request->sourceRepoName;
        }

        if (null !== $request->tagCount) {
            @$query['TagCount'] = $request->tagCount;
        }

        if (null !== $request->tagRegexp) {
            @$query['TagRegexp'] = $request->tagRegexp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateArtifactSubscriptionRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateArtifactSubscriptionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateArtifactSubscriptionRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an artifact subscription rule.
     *
     * @param request - CreateArtifactSubscriptionRuleRequest
     *
     * @returns CreateArtifactSubscriptionRuleResponse
     *
     * @param CreateArtifactSubscriptionRuleRequest $request
     *
     * @return CreateArtifactSubscriptionRuleResponse
     */
    public function createArtifactSubscriptionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createArtifactSubscriptionRuleWithOptions($request, $runtime);
    }

    /**
     * Creates an artifact subscription task.
     *
     * @param request - CreateArtifactSubscriptionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateArtifactSubscriptionTaskResponse
     *
     * @param CreateArtifactSubscriptionTaskRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateArtifactSubscriptionTaskResponse
     */
    public function createArtifactSubscriptionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateArtifactSubscriptionTask',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateArtifactSubscriptionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateArtifactSubscriptionTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an artifact subscription task.
     *
     * @param request - CreateArtifactSubscriptionTaskRequest
     *
     * @returns CreateArtifactSubscriptionTaskResponse
     *
     * @param CreateArtifactSubscriptionTaskRequest $request
     *
     * @return CreateArtifactSubscriptionTaskResponse
     */
    public function createArtifactSubscriptionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createArtifactSubscriptionTaskWithOptions($request, $runtime);
    }

    /**
     * Creates an image building record based on an existing record.
     *
     * @param request - CreateBuildRecordByRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBuildRecordByRecordResponse
     *
     * @param CreateBuildRecordByRecordRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateBuildRecordByRecordResponse
     */
    public function createBuildRecordByRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buildRecordId) {
            @$query['BuildRecordId'] = $request->buildRecordId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBuildRecordByRecord',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateBuildRecordByRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateBuildRecordByRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an image building record based on an existing record.
     *
     * @param request - CreateBuildRecordByRecordRequest
     *
     * @returns CreateBuildRecordByRecordResponse
     *
     * @param CreateBuildRecordByRecordRequest $request
     *
     * @return CreateBuildRecordByRecordResponse
     */
    public function createBuildRecordByRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBuildRecordByRecordWithOptions($request, $runtime);
    }

    /**
     * Creates an image building record based on a rule.
     *
     * @param request - CreateBuildRecordByRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBuildRecordByRuleResponse
     *
     * @param CreateBuildRecordByRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateBuildRecordByRuleResponse
     */
    public function createBuildRecordByRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buildRuleId) {
            @$query['BuildRuleId'] = $request->buildRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBuildRecordByRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateBuildRecordByRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateBuildRecordByRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an image building record based on a rule.
     *
     * @param request - CreateBuildRecordByRuleRequest
     *
     * @returns CreateBuildRecordByRuleResponse
     *
     * @param CreateBuildRecordByRuleRequest $request
     *
     * @return CreateBuildRecordByRuleResponse
     */
    public function createBuildRecordByRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBuildRecordByRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a delivery chain.
     *
     * @param request - CreateChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChainResponse
     *
     * @param CreateChainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateChainResponse
     */
    public function createChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chainConfig) {
            @$query['ChainConfig'] = $request->chainConfig;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        if (null !== $request->scopeExclude) {
            @$query['ScopeExclude'] = $request->scopeExclude;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateChain',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateChainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateChainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a delivery chain.
     *
     * @param request - CreateChainRequest
     *
     * @returns CreateChainResponse
     *
     * @param CreateChainRequest $request
     *
     * @return CreateChainResponse
     */
    public function createChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChainWithOptions($request, $runtime);
    }

    /**
     * Creates a chart namespace in an instance.
     *
     * @param request - CreateChartNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChartNamespaceResponse
     *
     * @param CreateChartNamespaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateChartNamespaceResponse
     */
    public function createChartNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoCreateRepo) {
            @$query['AutoCreateRepo'] = $request->autoCreateRepo;
        }

        if (null !== $request->defaultRepoType) {
            @$query['DefaultRepoType'] = $request->defaultRepoType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateChartNamespace',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateChartNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateChartNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a chart namespace in an instance.
     *
     * @param request - CreateChartNamespaceRequest
     *
     * @returns CreateChartNamespaceResponse
     *
     * @param CreateChartNamespaceRequest $request
     *
     * @return CreateChartNamespaceResponse
     */
    public function createChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * Creates a chart repository.
     *
     * @param request - CreateChartRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChartRepositoryResponse
     *
     * @param CreateChartRepositoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateChartRepositoryResponse
     */
    public function createChartRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        if (null !== $request->repoType) {
            @$query['RepoType'] = $request->repoType;
        }

        if (null !== $request->summary) {
            @$query['Summary'] = $request->summary;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateChartRepository',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateChartRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateChartRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a chart repository.
     *
     * @param request - CreateChartRepositoryRequest
     *
     * @returns CreateChartRepositoryResponse
     *
     * @param CreateChartRepositoryRequest $request
     *
     * @return CreateChartRepositoryResponse
     */
    public function createChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * Creates a whitelist policy for the public endpoint of the instance.
     *
     * @param request - CreateInstanceEndpointAclPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceEndpointAclPolicyResponse
     *
     * @param CreateInstanceEndpointAclPolicyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateInstanceEndpointAclPolicyResponse
     */
    public function createInstanceEndpointAclPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        if (null !== $request->entry) {
            @$query['Entry'] = $request->entry;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleName) {
            @$query['ModuleName'] = $request->moduleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceEndpointAclPolicy',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateInstanceEndpointAclPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateInstanceEndpointAclPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a whitelist policy for the public endpoint of the instance.
     *
     * @param request - CreateInstanceEndpointAclPolicyRequest
     *
     * @returns CreateInstanceEndpointAclPolicyResponse
     *
     * @param CreateInstanceEndpointAclPolicyRequest $request
     *
     * @return CreateInstanceEndpointAclPolicyResponse
     */
    public function createInstanceEndpointAclPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceEndpointAclPolicyWithOptions($request, $runtime);
    }

    /**
     * Associates a virtual private cloud (VPC) with a Container Registry instance.
     *
     * @remarks
     * The VPC quota must be purchased separately.
     *
     * @param request - CreateInstanceVpcEndpointLinkedVpcRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceVpcEndpointLinkedVpcResponse
     *
     * @param CreateInstanceVpcEndpointLinkedVpcRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateInstanceVpcEndpointLinkedVpcResponse
     */
    public function createInstanceVpcEndpointLinkedVpcWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableCreateDNSRecordInPvzt) {
            @$query['EnableCreateDNSRecordInPvzt'] = $request->enableCreateDNSRecordInPvzt;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleName) {
            @$query['ModuleName'] = $request->moduleName;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswitchId) {
            @$query['VswitchId'] = $request->vswitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceVpcEndpointLinkedVpc',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateInstanceVpcEndpointLinkedVpcResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateInstanceVpcEndpointLinkedVpcResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Associates a virtual private cloud (VPC) with a Container Registry instance.
     *
     * @remarks
     * The VPC quota must be purchased separately.
     *
     * @param request - CreateInstanceVpcEndpointLinkedVpcRequest
     *
     * @returns CreateInstanceVpcEndpointLinkedVpcResponse
     *
     * @param CreateInstanceVpcEndpointLinkedVpcRequest $request
     *
     * @return CreateInstanceVpcEndpointLinkedVpcResponse
     */
    public function createInstanceVpcEndpointLinkedVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceVpcEndpointLinkedVpcWithOptions($request, $runtime);
    }

    /**
     * Creates a namespace of image repositories.
     *
     * @param request - CreateNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoCreateRepo) {
            @$query['AutoCreateRepo'] = $request->autoCreateRepo;
        }

        if (null !== $request->defaultRepoType) {
            @$query['DefaultRepoType'] = $request->defaultRepoType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNamespace',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a namespace of image repositories.
     *
     * @param request - CreateNamespaceRequest
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $request
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * Creates an image building rule for a repository.
     *
     * @param request - CreateRepoBuildRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRepoBuildRuleResponse
     *
     * @param CreateRepoBuildRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateRepoBuildRuleResponse
     */
    public function createRepoBuildRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buildArgs) {
            @$query['BuildArgs'] = $request->buildArgs;
        }

        if (null !== $request->dockerfileLocation) {
            @$query['DockerfileLocation'] = $request->dockerfileLocation;
        }

        if (null !== $request->dockerfileName) {
            @$query['DockerfileName'] = $request->dockerfileName;
        }

        if (null !== $request->imageTag) {
            @$query['ImageTag'] = $request->imageTag;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->platforms) {
            @$query['Platforms'] = $request->platforms;
        }

        if (null !== $request->pushName) {
            @$query['PushName'] = $request->pushName;
        }

        if (null !== $request->pushType) {
            @$query['PushType'] = $request->pushType;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRepoBuildRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRepoBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRepoBuildRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an image building rule for a repository.
     *
     * @param request - CreateRepoBuildRuleRequest
     *
     * @returns CreateRepoBuildRuleResponse
     *
     * @param CreateRepoBuildRuleRequest $request
     *
     * @return CreateRepoBuildRuleResponse
     */
    public function createRepoBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoBuildRuleWithOptions($request, $runtime);
    }

    /**
     * Binds a source code repository to an image repository.
     *
     * @param request - CreateRepoSourceCodeRepoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRepoSourceCodeRepoResponse
     *
     * @param CreateRepoSourceCodeRepoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateRepoSourceCodeRepoResponse
     */
    public function createRepoSourceCodeRepoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoBuild) {
            @$query['AutoBuild'] = $request->autoBuild;
        }

        if (null !== $request->codeRepoName) {
            @$query['CodeRepoName'] = $request->codeRepoName;
        }

        if (null !== $request->codeRepoNamespaceName) {
            @$query['CodeRepoNamespaceName'] = $request->codeRepoNamespaceName;
        }

        if (null !== $request->codeRepoType) {
            @$query['CodeRepoType'] = $request->codeRepoType;
        }

        if (null !== $request->disableCacheBuild) {
            @$query['DisableCacheBuild'] = $request->disableCacheBuild;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->overseaBuild) {
            @$query['OverseaBuild'] = $request->overseaBuild;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRepoSourceCodeRepo',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRepoSourceCodeRepoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRepoSourceCodeRepoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Binds a source code repository to an image repository.
     *
     * @param request - CreateRepoSourceCodeRepoRequest
     *
     * @returns CreateRepoSourceCodeRepoResponse
     *
     * @param CreateRepoSourceCodeRepoRequest $request
     *
     * @return CreateRepoSourceCodeRepoResponse
     */
    public function createRepoSourceCodeRepo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoSourceCodeRepoWithOptions($request, $runtime);
    }

    /**
     * Creates an image synchronization rule for an image repository.
     *
     * @param request - CreateRepoSyncRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRepoSyncRuleResponse
     *
     * @param CreateRepoSyncRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRepoSyncRuleResponse
     */
    public function createRepoSyncRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNameFilter) {
            @$query['RepoNameFilter'] = $request->repoNameFilter;
        }

        if (null !== $request->syncRuleName) {
            @$query['SyncRuleName'] = $request->syncRuleName;
        }

        if (null !== $request->syncScope) {
            @$query['SyncScope'] = $request->syncScope;
        }

        if (null !== $request->syncTrigger) {
            @$query['SyncTrigger'] = $request->syncTrigger;
        }

        if (null !== $request->tagFilter) {
            @$query['TagFilter'] = $request->tagFilter;
        }

        if (null !== $request->targetInstanceId) {
            @$query['TargetInstanceId'] = $request->targetInstanceId;
        }

        if (null !== $request->targetNamespaceName) {
            @$query['TargetNamespaceName'] = $request->targetNamespaceName;
        }

        if (null !== $request->targetRegionId) {
            @$query['TargetRegionId'] = $request->targetRegionId;
        }

        if (null !== $request->targetRepoName) {
            @$query['TargetRepoName'] = $request->targetRepoName;
        }

        if (null !== $request->targetUserId) {
            @$query['TargetUserId'] = $request->targetUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRepoSyncRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRepoSyncRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRepoSyncRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an image synchronization rule for an image repository.
     *
     * @param request - CreateRepoSyncRuleRequest
     *
     * @returns CreateRepoSyncRuleResponse
     *
     * @param CreateRepoSyncRuleRequest $request
     *
     * @return CreateRepoSyncRuleResponse
     */
    public function createRepoSyncRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoSyncRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateRepoSyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRepoSyncTaskResponse
     *
     * @param CreateRepoSyncTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRepoSyncTaskResponse
     */
    public function createRepoSyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->override) {
            @$query['Override'] = $request->override;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->targetInstanceId) {
            @$query['TargetInstanceId'] = $request->targetInstanceId;
        }

        if (null !== $request->targetNamespace) {
            @$query['TargetNamespace'] = $request->targetNamespace;
        }

        if (null !== $request->targetRegionId) {
            @$query['TargetRegionId'] = $request->targetRegionId;
        }

        if (null !== $request->targetRepoName) {
            @$query['TargetRepoName'] = $request->targetRepoName;
        }

        if (null !== $request->targetTag) {
            @$query['TargetTag'] = $request->targetTag;
        }

        if (null !== $request->targetUserId) {
            @$query['TargetUserId'] = $request->targetUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRepoSyncTask',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRepoSyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRepoSyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateRepoSyncTaskRequest
     *
     * @returns CreateRepoSyncTaskResponse
     *
     * @param CreateRepoSyncTaskRequest $request
     *
     * @return CreateRepoSyncTaskResponse
     */
    public function createRepoSyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoSyncTaskWithOptions($request, $runtime);
    }

    /**
     * Creates an image replication task based on a manual replication rule.
     *
     * @param request - CreateRepoSyncTaskByRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRepoSyncTaskByRuleResponse
     *
     * @param CreateRepoSyncTaskByRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateRepoSyncTaskByRuleResponse
     */
    public function createRepoSyncTaskByRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->syncRuleId) {
            @$query['SyncRuleId'] = $request->syncRuleId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRepoSyncTaskByRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRepoSyncTaskByRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRepoSyncTaskByRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an image replication task based on a manual replication rule.
     *
     * @param request - CreateRepoSyncTaskByRuleRequest
     *
     * @returns CreateRepoSyncTaskByRuleResponse
     *
     * @param CreateRepoSyncTaskByRuleRequest $request
     *
     * @return CreateRepoSyncTaskByRuleResponse
     */
    public function createRepoSyncTaskByRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoSyncTaskByRuleWithOptions($request, $runtime);
    }

    /**
     * Creates an image tag based on an existing image tag in an image repository.
     *
     * @param request - CreateRepoTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRepoTagResponse
     *
     * @param CreateRepoTagRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateRepoTagResponse
     */
    public function createRepoTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromTag) {
            @$query['FromTag'] = $request->fromTag;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->toTag) {
            @$query['ToTag'] = $request->toTag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRepoTag',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRepoTagResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRepoTagResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an image tag based on an existing image tag in an image repository.
     *
     * @param request - CreateRepoTagRequest
     *
     * @returns CreateRepoTagResponse
     *
     * @param CreateRepoTagRequest $request
     *
     * @return CreateRepoTagResponse
     */
    public function createRepoTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoTagWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateRepoTagScanTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRepoTagScanTaskResponse
     *
     * @param CreateRepoTagScanTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateRepoTagScanTaskResponse
     */
    public function createRepoTagScanTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->digest) {
            @$query['Digest'] = $request->digest;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->scanService) {
            @$query['ScanService'] = $request->scanService;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRepoTagScanTask',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRepoTagScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRepoTagScanTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateRepoTagScanTaskRequest
     *
     * @returns CreateRepoTagScanTaskResponse
     *
     * @param CreateRepoTagScanTaskRequest $request
     *
     * @return CreateRepoTagScanTaskResponse
     */
    public function createRepoTagScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoTagScanTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a trigger for a repository.
     *
     * @param request - CreateRepoTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRepoTriggerResponse
     *
     * @param CreateRepoTriggerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRepoTriggerResponse
     */
    public function createRepoTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->triggerName) {
            @$query['TriggerName'] = $request->triggerName;
        }

        if (null !== $request->triggerTag) {
            @$query['TriggerTag'] = $request->triggerTag;
        }

        if (null !== $request->triggerType) {
            @$query['TriggerType'] = $request->triggerType;
        }

        if (null !== $request->triggerUrl) {
            @$query['TriggerUrl'] = $request->triggerUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRepoTrigger',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRepoTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRepoTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a trigger for a repository.
     *
     * @param request - CreateRepoTriggerRequest
     *
     * @returns CreateRepoTriggerResponse
     *
     * @param CreateRepoTriggerRequest $request
     *
     * @return CreateRepoTriggerResponse
     */
    public function createRepoTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepoTriggerWithOptions($request, $runtime);
    }

    /**
     * Creates an image repository.
     *
     * @param request - CreateRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRepositoryResponse
     *
     * @param CreateRepositoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRepositoryResponse
     */
    public function createRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->detail) {
            @$query['Detail'] = $request->detail;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        if (null !== $request->repoType) {
            @$query['RepoType'] = $request->repoType;
        }

        if (null !== $request->summary) {
            @$query['Summary'] = $request->summary;
        }

        if (null !== $request->tagImmutability) {
            @$query['TagImmutability'] = $request->tagImmutability;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRepository',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an image repository.
     *
     * @param request - CreateRepositoryRequest
     *
     * @returns CreateRepositoryResponse
     *
     * @param CreateRepositoryRequest $request
     *
     * @return CreateRepositoryResponse
     */
    public function createRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRepositoryWithOptions($request, $runtime);
    }

    /**
     * Deletes an artifact lifecycle management rule.
     *
     * @param request - DeleteArtifactLifecycleRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteArtifactLifecycleRuleResponse
     *
     * @param DeleteArtifactLifecycleRuleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteArtifactLifecycleRuleResponse
     */
    public function deleteArtifactLifecycleRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteArtifactLifecycleRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteArtifactLifecycleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteArtifactLifecycleRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an artifact lifecycle management rule.
     *
     * @param request - DeleteArtifactLifecycleRuleRequest
     *
     * @returns DeleteArtifactLifecycleRuleResponse
     *
     * @param DeleteArtifactLifecycleRuleRequest $request
     *
     * @return DeleteArtifactLifecycleRuleResponse
     */
    public function deleteArtifactLifecycleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteArtifactLifecycleRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes an artifact subscription rule.
     *
     * @param request - DeleteArtifactSubscriptionRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteArtifactSubscriptionRuleResponse
     *
     * @param DeleteArtifactSubscriptionRuleRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteArtifactSubscriptionRuleResponse
     */
    public function deleteArtifactSubscriptionRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteArtifactSubscriptionRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteArtifactSubscriptionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteArtifactSubscriptionRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an artifact subscription rule.
     *
     * @param request - DeleteArtifactSubscriptionRuleRequest
     *
     * @returns DeleteArtifactSubscriptionRuleResponse
     *
     * @param DeleteArtifactSubscriptionRuleRequest $request
     *
     * @return DeleteArtifactSubscriptionRuleResponse
     */
    public function deleteArtifactSubscriptionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteArtifactSubscriptionRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a delivery pipeline.
     *
     * @param request - DeleteChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteChainResponse
     *
     * @param DeleteChainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteChainResponse
     */
    public function deleteChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chainId) {
            @$query['ChainId'] = $request->chainId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteChain',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteChainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteChainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a delivery pipeline.
     *
     * @param request - DeleteChainRequest
     *
     * @returns DeleteChainResponse
     *
     * @param DeleteChainRequest $request
     *
     * @return DeleteChainResponse
     */
    public function deleteChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChainWithOptions($request, $runtime);
    }

    /**
     * Deletes a chart namespace from an instance.
     *
     * @remarks
     * >  If you delete a chart namespace, all repositories in the namespace and the charts in all repositories are deleted.
     *
     * @param request - DeleteChartNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteChartNamespaceResponse
     *
     * @param DeleteChartNamespaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteChartNamespaceResponse
     */
    public function deleteChartNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteChartNamespace',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteChartNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteChartNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a chart namespace from an instance.
     *
     * @remarks
     * >  If you delete a chart namespace, all repositories in the namespace and the charts in all repositories are deleted.
     *
     * @param request - DeleteChartNamespaceRequest
     *
     * @returns DeleteChartNamespaceResponse
     *
     * @param DeleteChartNamespaceRequest $request
     *
     * @return DeleteChartNamespaceResponse
     */
    public function deleteChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * Deletes a chart version from a chart repository.
     *
     * @param request - DeleteChartReleaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteChartReleaseResponse
     *
     * @param DeleteChartReleaseRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteChartReleaseResponse
     */
    public function deleteChartReleaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chart) {
            @$query['Chart'] = $request->chart;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteChartRelease',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteChartReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteChartReleaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a chart version from a chart repository.
     *
     * @param request - DeleteChartReleaseRequest
     *
     * @returns DeleteChartReleaseResponse
     *
     * @param DeleteChartReleaseRequest $request
     *
     * @return DeleteChartReleaseResponse
     */
    public function deleteChartRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChartReleaseWithOptions($request, $runtime);
    }

    /**
     * Deletes a chart repository from an instance.
     *
     * @param request - DeleteChartRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteChartRepositoryResponse
     *
     * @param DeleteChartRepositoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteChartRepositoryResponse
     */
    public function deleteChartRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteChartRepository',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteChartRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteChartRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a chart repository from an instance.
     *
     * @param request - DeleteChartRepositoryRequest
     *
     * @returns DeleteChartRepositoryResponse
     *
     * @param DeleteChartRepositoryRequest $request
     *
     * @return DeleteChartRepositoryResponse
     */
    public function deleteChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * Deletes an event notification rule.
     *
     * @param request - DeleteEventCenterRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEventCenterRuleResponse
     *
     * @param DeleteEventCenterRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteEventCenterRuleResponse
     */
    public function deleteEventCenterRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEventCenterRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEventCenterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEventCenterRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an event notification rule.
     *
     * @param request - DeleteEventCenterRuleRequest
     *
     * @returns DeleteEventCenterRuleResponse
     *
     * @param DeleteEventCenterRuleRequest $request
     *
     * @return DeleteEventCenterRuleResponse
     */
    public function deleteEventCenterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventCenterRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a whitelist policy for the public endpoint of an instance.
     *
     * @param request - DeleteInstanceEndpointAclPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceEndpointAclPolicyResponse
     *
     * @param DeleteInstanceEndpointAclPolicyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteInstanceEndpointAclPolicyResponse
     */
    public function deleteInstanceEndpointAclPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        if (null !== $request->entry) {
            @$query['Entry'] = $request->entry;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleName) {
            @$query['ModuleName'] = $request->moduleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstanceEndpointAclPolicy',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteInstanceEndpointAclPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteInstanceEndpointAclPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a whitelist policy for the public endpoint of an instance.
     *
     * @param request - DeleteInstanceEndpointAclPolicyRequest
     *
     * @returns DeleteInstanceEndpointAclPolicyResponse
     *
     * @param DeleteInstanceEndpointAclPolicyRequest $request
     *
     * @return DeleteInstanceEndpointAclPolicyResponse
     */
    public function deleteInstanceEndpointAclPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceEndpointAclPolicyWithOptions($request, $runtime);
    }

    /**
     * Disassociates a virtual private cloud (VPC) from an instance.
     *
     * @param request - DeleteInstanceVpcEndpointLinkedVpcRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceVpcEndpointLinkedVpcResponse
     *
     * @param DeleteInstanceVpcEndpointLinkedVpcRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteInstanceVpcEndpointLinkedVpcResponse
     */
    public function deleteInstanceVpcEndpointLinkedVpcWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleName) {
            @$query['ModuleName'] = $request->moduleName;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswitchId) {
            @$query['VswitchId'] = $request->vswitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstanceVpcEndpointLinkedVpc',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteInstanceVpcEndpointLinkedVpcResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteInstanceVpcEndpointLinkedVpcResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disassociates a virtual private cloud (VPC) from an instance.
     *
     * @param request - DeleteInstanceVpcEndpointLinkedVpcRequest
     *
     * @returns DeleteInstanceVpcEndpointLinkedVpcResponse
     *
     * @param DeleteInstanceVpcEndpointLinkedVpcRequest $request
     *
     * @return DeleteInstanceVpcEndpointLinkedVpcResponse
     */
    public function deleteInstanceVpcEndpointLinkedVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceVpcEndpointLinkedVpcWithOptions($request, $runtime);
    }

    /**
     * Deletes a namespace.
     *
     * @remarks
     * > After you delete a namespace, all repositories in the namespace and all images in these repositories are deleted as well.
     *
     * @param request - DeleteNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNamespace',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a namespace.
     *
     * @remarks
     * > After you delete a namespace, all repositories in the namespace and all images in these repositories are deleted as well.
     *
     * @param request - DeleteNamespaceRequest
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * Deletes an image building rule of a repository.
     *
     * @param request - DeleteRepoBuildRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRepoBuildRuleResponse
     *
     * @param DeleteRepoBuildRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteRepoBuildRuleResponse
     */
    public function deleteRepoBuildRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buildRuleId) {
            @$query['BuildRuleId'] = $request->buildRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRepoBuildRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRepoBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRepoBuildRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an image building rule of a repository.
     *
     * @param request - DeleteRepoBuildRuleRequest
     *
     * @returns DeleteRepoBuildRuleResponse
     *
     * @param DeleteRepoBuildRuleRequest $request
     *
     * @return DeleteRepoBuildRuleResponse
     */
    public function deleteRepoBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepoBuildRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes an image replication rule of an image repository.
     *
     * @param request - DeleteRepoSyncRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRepoSyncRuleResponse
     *
     * @param DeleteRepoSyncRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteRepoSyncRuleResponse
     */
    public function deleteRepoSyncRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->syncRuleId) {
            @$query['SyncRuleId'] = $request->syncRuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRepoSyncRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRepoSyncRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRepoSyncRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an image replication rule of an image repository.
     *
     * @param request - DeleteRepoSyncRuleRequest
     *
     * @returns DeleteRepoSyncRuleResponse
     *
     * @param DeleteRepoSyncRuleRequest $request
     *
     * @return DeleteRepoSyncRuleResponse
     */
    public function deleteRepoSyncRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepoSyncRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes an image tag.
     *
     * @param request - DeleteRepoTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRepoTagResponse
     *
     * @param DeleteRepoTagRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteRepoTagResponse
     */
    public function deleteRepoTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRepoTag',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRepoTagResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRepoTagResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an image tag.
     *
     * @param request - DeleteRepoTagRequest
     *
     * @returns DeleteRepoTagResponse
     *
     * @param DeleteRepoTagRequest $request
     *
     * @return DeleteRepoTagResponse
     */
    public function deleteRepoTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepoTagWithOptions($request, $runtime);
    }

    /**
     * Deletes a trigger of an image repository.
     *
     * @param request - DeleteRepoTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRepoTriggerResponse
     *
     * @param DeleteRepoTriggerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteRepoTriggerResponse
     */
    public function deleteRepoTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->triggerId) {
            @$query['TriggerId'] = $request->triggerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRepoTrigger',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRepoTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRepoTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a trigger of an image repository.
     *
     * @param request - DeleteRepoTriggerRequest
     *
     * @returns DeleteRepoTriggerResponse
     *
     * @param DeleteRepoTriggerRequest $request
     *
     * @return DeleteRepoTriggerResponse
     */
    public function deleteRepoTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepoTriggerWithOptions($request, $runtime);
    }

    /**
     * Deletes an image repository.
     *
     * @remarks
     * If you delete a repository, all images in the repository are also deleted.
     *
     * @param request - DeleteRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRepositoryResponse
     *
     * @param DeleteRepositoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRepositoryResponse
     */
    public function deleteRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRepository',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an image repository.
     *
     * @remarks
     * If you delete a repository, all images in the repository are also deleted.
     *
     * @param request - DeleteRepositoryRequest
     *
     * @returns DeleteRepositoryResponse
     *
     * @param DeleteRepositoryRequest $request
     *
     * @return DeleteRepositoryResponse
     */
    public function deleteRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRepositoryWithOptions($request, $runtime);
    }

    /**
     * @param request - GetArtifactBuildRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetArtifactBuildRuleResponse
     *
     * @param GetArtifactBuildRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetArtifactBuildRuleResponse
     */
    public function getArtifactBuildRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetArtifactBuildRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetArtifactBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetArtifactBuildRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetArtifactBuildRuleRequest
     *
     * @returns GetArtifactBuildRuleResponse
     *
     * @param GetArtifactBuildRuleRequest $request
     *
     * @return GetArtifactBuildRuleResponse
     */
    public function getArtifactBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactBuildRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an artifact building task.
     *
     * @param request - GetArtifactBuildTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetArtifactBuildTaskResponse
     *
     * @param GetArtifactBuildTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetArtifactBuildTaskResponse
     */
    public function getArtifactBuildTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetArtifactBuildTask',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetArtifactBuildTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetArtifactBuildTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of an artifact building task.
     *
     * @param request - GetArtifactBuildTaskRequest
     *
     * @returns GetArtifactBuildTaskResponse
     *
     * @param GetArtifactBuildTaskRequest $request
     *
     * @return GetArtifactBuildTaskResponse
     */
    public function getArtifactBuildTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactBuildTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the lifecycle management rules of an artifact.
     *
     * @param request - GetArtifactLifecycleRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetArtifactLifecycleRuleResponse
     *
     * @param GetArtifactLifecycleRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetArtifactLifecycleRuleResponse
     */
    public function getArtifactLifecycleRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetArtifactLifecycleRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetArtifactLifecycleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetArtifactLifecycleRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the lifecycle management rules of an artifact.
     *
     * @param request - GetArtifactLifecycleRuleRequest
     *
     * @returns GetArtifactLifecycleRuleResponse
     *
     * @param GetArtifactLifecycleRuleRequest $request
     *
     * @return GetArtifactLifecycleRuleResponse
     */
    public function getArtifactLifecycleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactLifecycleRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an artifact subscription rule.
     *
     * @param request - GetArtifactSubscriptionRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetArtifactSubscriptionRuleResponse
     *
     * @param GetArtifactSubscriptionRuleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetArtifactSubscriptionRuleResponse
     */
    public function getArtifactSubscriptionRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetArtifactSubscriptionRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetArtifactSubscriptionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetArtifactSubscriptionRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an artifact subscription rule.
     *
     * @param request - GetArtifactSubscriptionRuleRequest
     *
     * @returns GetArtifactSubscriptionRuleResponse
     *
     * @param GetArtifactSubscriptionRuleRequest $request
     *
     * @return GetArtifactSubscriptionRuleResponse
     */
    public function getArtifactSubscriptionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactSubscriptionRuleWithOptions($request, $runtime);
    }

    /**
     * Queries an artifact subscription task.
     *
     * @param request - GetArtifactSubscriptionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetArtifactSubscriptionTaskResponse
     *
     * @param GetArtifactSubscriptionTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetArtifactSubscriptionTaskResponse
     */
    public function getArtifactSubscriptionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetArtifactSubscriptionTask',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetArtifactSubscriptionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetArtifactSubscriptionTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries an artifact subscription task.
     *
     * @param request - GetArtifactSubscriptionTaskRequest
     *
     * @returns GetArtifactSubscriptionTaskResponse
     *
     * @param GetArtifactSubscriptionTaskRequest $request
     *
     * @return GetArtifactSubscriptionTaskResponse
     */
    public function getArtifactSubscriptionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactSubscriptionTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an artifact subscription task.
     *
     * @param request - GetArtifactSubscriptionTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetArtifactSubscriptionTaskResultResponse
     *
     * @param GetArtifactSubscriptionTaskResultRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetArtifactSubscriptionTaskResultResponse
     */
    public function getArtifactSubscriptionTaskResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetArtifactSubscriptionTaskResult',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetArtifactSubscriptionTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetArtifactSubscriptionTaskResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of an artifact subscription task.
     *
     * @param request - GetArtifactSubscriptionTaskResultRequest
     *
     * @returns GetArtifactSubscriptionTaskResultResponse
     *
     * @param GetArtifactSubscriptionTaskResultRequest $request
     *
     * @return GetArtifactSubscriptionTaskResultResponse
     */
    public function getArtifactSubscriptionTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactSubscriptionTaskResultWithOptions($request, $runtime);
    }

    /**
     * Queries a temporary username and a token that you can use to log on to a Container Registry instance.
     *
     * @remarks
     * The ID of the Container Registry instance.
     *
     * @param request - GetAuthorizationTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAuthorizationTokenResponse
     *
     * @param GetAuthorizationTokenRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAuthorizationTokenResponse
     */
    public function getAuthorizationTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAuthorizationToken',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAuthorizationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAuthorizationTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a temporary username and a token that you can use to log on to a Container Registry instance.
     *
     * @remarks
     * The ID of the Container Registry instance.
     *
     * @param request - GetAuthorizationTokenRequest
     *
     * @returns GetAuthorizationTokenResponse
     *
     * @param GetAuthorizationTokenRequest $request
     *
     * @return GetAuthorizationTokenResponse
     */
    public function getAuthorizationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthorizationTokenWithOptions($request, $runtime);
    }

    /**
     * @param request - GetChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChainResponse
     *
     * @param GetChainRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetChainResponse
     */
    public function getChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chainId) {
            @$query['ChainId'] = $request->chainId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetChain',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetChainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetChainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetChainRequest
     *
     * @returns GetChainResponse
     *
     * @param GetChainRequest $request
     *
     * @return GetChainResponse
     */
    public function getChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChainWithOptions($request, $runtime);
    }

    /**
     * Queries a chart namespace in an instance.
     *
     * @param request - GetChartNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChartNamespaceResponse
     *
     * @param GetChartNamespaceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetChartNamespaceResponse
     */
    public function getChartNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetChartNamespace',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetChartNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetChartNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a chart namespace in an instance.
     *
     * @param request - GetChartNamespaceRequest
     *
     * @returns GetChartNamespaceResponse
     *
     * @param GetChartNamespaceRequest $request
     *
     * @return GetChartNamespaceResponse
     */
    public function getChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a chart repository.
     *
     * @param request - GetChartRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChartRepositoryResponse
     *
     * @param GetChartRepositoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetChartRepositoryResponse
     */
    public function getChartRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetChartRepository',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetChartRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetChartRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a chart repository.
     *
     * @param request - GetChartRepositoryRequest
     *
     * @returns GetChartRepositoryResponse
     *
     * @param GetChartRepositoryRequest $request
     *
     * @return GetChartRepositoryResponse
     */
    public function getChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * The ID of the resource group to which the instance belongs.
     *
     * @param request - GetInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The ID of the resource group to which the instance belongs.
     *
     * @param request - GetInstanceRequest
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the number of instances.
     *
     * @param request - GetInstanceCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceCountResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceCountResponse
     */
    public function getInstanceCountWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetInstanceCount',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInstanceCountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInstanceCountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the number of instances.
     *
     * @returns GetInstanceCountResponse
     *
     * @return GetInstanceCountResponse
     */
    public function getInstanceCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceCountWithOptions($runtime);
    }

    /**
     * Queries the endpoint of an instance.
     *
     * @param request - GetInstanceEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceEndpointResponse
     *
     * @param GetInstanceEndpointRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetInstanceEndpointResponse
     */
    public function getInstanceEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleName) {
            @$query['ModuleName'] = $request->moduleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceEndpoint',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInstanceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInstanceEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the endpoint of an instance.
     *
     * @param request - GetInstanceEndpointRequest
     *
     * @returns GetInstanceEndpointResponse
     *
     * @param GetInstanceEndpointRequest $request
     *
     * @return GetInstanceEndpointResponse
     */
    public function getInstanceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceEndpointWithOptions($request, $runtime);
    }

    /**
     * Queries the quota usage of an instance.
     *
     * @param request - GetInstanceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceUsageResponse
     *
     * @param GetInstanceUsageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetInstanceUsageResponse
     */
    public function getInstanceUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceUsage',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInstanceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInstanceUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the quota usage of an instance.
     *
     * @param request - GetInstanceUsageRequest
     *
     * @returns GetInstanceUsageResponse
     *
     * @param GetInstanceUsageRequest $request
     *
     * @return GetInstanceUsageResponse
     */
    public function getInstanceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceUsageWithOptions($request, $runtime);
    }

    /**
     * Queries the endpoints of the virtual private clouds (VPCs) in which a Container Registry instance is deployed.
     *
     * @param request - GetInstanceVpcEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceVpcEndpointResponse
     *
     * @param GetInstanceVpcEndpointRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceVpcEndpointResponse
     */
    public function getInstanceVpcEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleName) {
            @$query['ModuleName'] = $request->moduleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceVpcEndpoint',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInstanceVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInstanceVpcEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the endpoints of the virtual private clouds (VPCs) in which a Container Registry instance is deployed.
     *
     * @param request - GetInstanceVpcEndpointRequest
     *
     * @returns GetInstanceVpcEndpointResponse
     *
     * @param GetInstanceVpcEndpointRequest $request
     *
     * @return GetInstanceVpcEndpointResponse
     */
    public function getInstanceVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a namespace.
     *
     * @param request - GetNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNamespaceResponse
     *
     * @param GetNamespaceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetNamespaceResponse
     */
    public function getNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNamespace',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a namespace.
     *
     * @param request - GetNamespaceRequest
     *
     * @returns GetNamespaceResponse
     *
     * @param GetNamespaceRequest $request
     *
     * @return GetNamespaceResponse
     */
    public function getNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNamespaceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about image building records of a repository.
     *
     * @remarks
     *
     * @param request - GetRepoBuildRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRepoBuildRecordResponse
     *
     * @param GetRepoBuildRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRepoBuildRecordResponse
     */
    public function getRepoBuildRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buildRecordId) {
            @$query['BuildRecordId'] = $request->buildRecordId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRepoBuildRecord',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRepoBuildRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRepoBuildRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about image building records of a repository.
     *
     * @remarks
     *
     * @param request - GetRepoBuildRecordRequest
     *
     * @returns GetRepoBuildRecordResponse
     *
     * @param GetRepoBuildRecordRequest $request
     *
     * @return GetRepoBuildRecordResponse
     */
    public function getRepoBuildRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoBuildRecordWithOptions($request, $runtime);
    }

    /**
     * Queries the status of an image building task.
     *
     * @param request - GetRepoBuildRecordStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRepoBuildRecordStatusResponse
     *
     * @param GetRepoBuildRecordStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRepoBuildRecordStatusResponse
     */
    public function getRepoBuildRecordStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buildRecordId) {
            @$query['BuildRecordId'] = $request->buildRecordId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRepoBuildRecordStatus',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRepoBuildRecordStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRepoBuildRecordStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the status of an image building task.
     *
     * @param request - GetRepoBuildRecordStatusRequest
     *
     * @returns GetRepoBuildRecordStatusResponse
     *
     * @param GetRepoBuildRecordStatusRequest $request
     *
     * @return GetRepoBuildRecordStatusResponse
     */
    public function getRepoBuildRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoBuildRecordStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the source code repository that is bound to an image repository.
     *
     * @param request - GetRepoSourceCodeRepoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRepoSourceCodeRepoResponse
     *
     * @param GetRepoSourceCodeRepoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetRepoSourceCodeRepoResponse
     */
    public function getRepoSourceCodeRepoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRepoSourceCodeRepo',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRepoSourceCodeRepoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRepoSourceCodeRepoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about the source code repository that is bound to an image repository.
     *
     * @param request - GetRepoSourceCodeRepoRequest
     *
     * @returns GetRepoSourceCodeRepoResponse
     *
     * @param GetRepoSourceCodeRepoRequest $request
     *
     * @return GetRepoSourceCodeRepoResponse
     */
    public function getRepoSourceCodeRepo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoSourceCodeRepoWithOptions($request, $runtime);
    }

    /**
     * Queries an image synchronization task in an instance.
     *
     * @param request - GetRepoSyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRepoSyncTaskResponse
     *
     * @param GetRepoSyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRepoSyncTaskResponse
     */
    public function getRepoSyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->syncTaskId) {
            @$query['SyncTaskId'] = $request->syncTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRepoSyncTask',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRepoSyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRepoSyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries an image synchronization task in an instance.
     *
     * @param request - GetRepoSyncTaskRequest
     *
     * @returns GetRepoSyncTaskResponse
     *
     * @param GetRepoSyncTaskRequest $request
     *
     * @return GetRepoSyncTaskResponse
     */
    public function getRepoSyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoSyncTaskWithOptions($request, $runtime);
    }

    /**
     * The version of the repository.
     *
     * @param request - GetRepoTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRepoTagResponse
     *
     * @param GetRepoTagRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetRepoTagResponse
     */
    public function getRepoTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRepoTag',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRepoTagResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRepoTagResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The version of the repository.
     *
     * @param request - GetRepoTagRequest
     *
     * @returns GetRepoTagResponse
     *
     * @param GetRepoTagRequest $request
     *
     * @return GetRepoTagResponse
     */
    public function getRepoTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoTagWithOptions($request, $runtime);
    }

    /**
     * @param request - GetRepoTagScanStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRepoTagScanStatusResponse
     *
     * @param GetRepoTagScanStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetRepoTagScanStatusResponse
     */
    public function getRepoTagScanStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->digest) {
            @$query['Digest'] = $request->digest;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->scanTaskId) {
            @$query['ScanTaskId'] = $request->scanTaskId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRepoTagScanStatus',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRepoTagScanStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRepoTagScanStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetRepoTagScanStatusRequest
     *
     * @returns GetRepoTagScanStatusResponse
     *
     * @param GetRepoTagScanStatusRequest $request
     *
     * @return GetRepoTagScanStatusResponse
     */
    public function getRepoTagScanStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoTagScanStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - GetRepoTagScanSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRepoTagScanSummaryResponse
     *
     * @param GetRepoTagScanSummaryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetRepoTagScanSummaryResponse
     */
    public function getRepoTagScanSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->digest) {
            @$query['Digest'] = $request->digest;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->scanTaskId) {
            @$query['ScanTaskId'] = $request->scanTaskId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRepoTagScanSummary',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRepoTagScanSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRepoTagScanSummaryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetRepoTagScanSummaryRequest
     *
     * @returns GetRepoTagScanSummaryResponse
     *
     * @param GetRepoTagScanSummaryRequest $request
     *
     * @return GetRepoTagScanSummaryResponse
     */
    public function getRepoTagScanSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepoTagScanSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries details about an image repository.
     *
     * @param request - GetRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRepositoryResponse
     *
     * @param GetRepositoryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRepositoryResponse
     */
    public function getRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRepository',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries details about an image repository.
     *
     * @param request - GetRepositoryRequest
     *
     * @returns GetRepositoryResponse
     *
     * @param GetRepositoryRequest $request
     *
     * @return GetRepositoryResponse
     */
    public function getRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRepositoryWithOptions($request, $runtime);
    }

    /**
     * Queries the log entries of an artifact building task.
     *
     * @param request - ListArtifactBuildTaskLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListArtifactBuildTaskLogResponse
     *
     * @param ListArtifactBuildTaskLogRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListArtifactBuildTaskLogResponse
     */
    public function listArtifactBuildTaskLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListArtifactBuildTaskLog',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListArtifactBuildTaskLogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListArtifactBuildTaskLogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the log entries of an artifact building task.
     *
     * @param request - ListArtifactBuildTaskLogRequest
     *
     * @returns ListArtifactBuildTaskLogResponse
     *
     * @param ListArtifactBuildTaskLogRequest $request
     *
     * @return ListArtifactBuildTaskLogResponse
     */
    public function listArtifactBuildTaskLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactBuildTaskLogWithOptions($request, $runtime);
    }

    /**
     * Queries the lifecycle management rules of an artifact.
     *
     * @param request - ListArtifactLifecycleRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListArtifactLifecycleRuleResponse
     *
     * @param ListArtifactLifecycleRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListArtifactLifecycleRuleResponse
     */
    public function listArtifactLifecycleRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListArtifactLifecycleRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListArtifactLifecycleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListArtifactLifecycleRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the lifecycle management rules of an artifact.
     *
     * @param request - ListArtifactLifecycleRuleRequest
     *
     * @returns ListArtifactLifecycleRuleResponse
     *
     * @param ListArtifactLifecycleRuleRequest $request
     *
     * @return ListArtifactLifecycleRuleResponse
     */
    public function listArtifactLifecycleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactLifecycleRuleWithOptions($request, $runtime);
    }

    /**
     * Lists the subscription rules of artifacts.
     *
     * @param request - ListArtifactSubscriptionRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListArtifactSubscriptionRuleResponse
     *
     * @param ListArtifactSubscriptionRuleRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListArtifactSubscriptionRuleResponse
     */
    public function listArtifactSubscriptionRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListArtifactSubscriptionRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListArtifactSubscriptionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListArtifactSubscriptionRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Lists the subscription rules of artifacts.
     *
     * @param request - ListArtifactSubscriptionRuleRequest
     *
     * @returns ListArtifactSubscriptionRuleResponse
     *
     * @param ListArtifactSubscriptionRuleRequest $request
     *
     * @return ListArtifactSubscriptionRuleResponse
     */
    public function listArtifactSubscriptionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactSubscriptionRuleWithOptions($request, $runtime);
    }

    /**
     * Lists artifact subscription tasks.
     *
     * @param request - ListArtifactSubscriptionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListArtifactSubscriptionTaskResponse
     *
     * @param ListArtifactSubscriptionTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListArtifactSubscriptionTaskResponse
     */
    public function listArtifactSubscriptionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListArtifactSubscriptionTask',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListArtifactSubscriptionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListArtifactSubscriptionTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Lists artifact subscription tasks.
     *
     * @param request - ListArtifactSubscriptionTaskRequest
     *
     * @returns ListArtifactSubscriptionTaskResponse
     *
     * @param ListArtifactSubscriptionTaskRequest $request
     *
     * @return ListArtifactSubscriptionTaskResponse
     */
    public function listArtifactSubscriptionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactSubscriptionTaskWithOptions($request, $runtime);
    }

    /**
     * Queries delivery chains.
     *
     * @param request - ListChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChainResponse
     *
     * @param ListChainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListChainResponse
     */
    public function listChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChain',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListChainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListChainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries delivery chains.
     *
     * @param request - ListChainRequest
     *
     * @returns ListChainResponse
     *
     * @param ListChainRequest $request
     *
     * @return ListChainResponse
     */
    public function listChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChainWithOptions($request, $runtime);
    }

    /**
     * The response code.
     *
     * @param request - ListChainInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChainInstanceResponse
     *
     * @param ListChainInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListChainInstanceResponse
     */
    public function listChainInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChainInstance',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListChainInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListChainInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The response code.
     *
     * @param request - ListChainInstanceRequest
     *
     * @returns ListChainInstanceResponse
     *
     * @param ListChainInstanceRequest $request
     *
     * @return ListChainInstanceResponse
     */
    public function listChainInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChainInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the chart namespaces of a Container Registry instance.
     *
     * @param request - ListChartNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChartNamespaceResponse
     *
     * @param ListChartNamespaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListChartNamespaceResponse
     */
    public function listChartNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        if (null !== $request->namespaceStatus) {
            @$query['NamespaceStatus'] = $request->namespaceStatus;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChartNamespace',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListChartNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListChartNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the chart namespaces of a Container Registry instance.
     *
     * @param request - ListChartNamespaceRequest
     *
     * @returns ListChartNamespaceResponse
     *
     * @param ListChartNamespaceRequest $request
     *
     * @return ListChartNamespaceResponse
     */
    public function listChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * Queries the versions of a chart in a chart repository.
     *
     * @param request - ListChartReleaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChartReleaseResponse
     *
     * @param ListChartReleaseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListChartReleaseResponse
     */
    public function listChartReleaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chart) {
            @$query['Chart'] = $request->chart;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChartRelease',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListChartReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListChartReleaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the versions of a chart in a chart repository.
     *
     * @param request - ListChartReleaseRequest
     *
     * @returns ListChartReleaseResponse
     *
     * @param ListChartReleaseRequest $request
     *
     * @return ListChartReleaseResponse
     */
    public function listChartRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChartReleaseWithOptions($request, $runtime);
    }

    /**
     * Queries the chart repositories of a Container Registry instance.
     *
     * @param request - ListChartRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChartRepositoryResponse
     *
     * @param ListChartRepositoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListChartRepositoryResponse
     */
    public function listChartRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        if (null !== $request->repoStatus) {
            @$query['RepoStatus'] = $request->repoStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChartRepository',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListChartRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListChartRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the chart repositories of a Container Registry instance.
     *
     * @param request - ListChartRepositoryRequest
     *
     * @returns ListChartRepositoryResponse
     *
     * @param ListChartRepositoryRequest $request
     *
     * @return ListChartRepositoryResponse
     */
    public function listChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * Queries the historical events of an event rule.
     *
     * @param request - ListEventCenterRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEventCenterRecordResponse
     *
     * @param ListEventCenterRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListEventCenterRecordResponse
     */
    public function listEventCenterRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEventCenterRecord',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEventCenterRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEventCenterRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the historical events of an event rule.
     *
     * @param request - ListEventCenterRecordRequest
     *
     * @returns ListEventCenterRecordResponse
     *
     * @param ListEventCenterRecordRequest $request
     *
     * @return ListEventCenterRecordResponse
     */
    public function listEventCenterRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventCenterRecordWithOptions($request, $runtime);
    }

    /**
     * Queries the names of event notification rules.
     *
     * @param request - ListEventCenterRuleNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEventCenterRuleNameResponse
     *
     * @param ListEventCenterRuleNameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListEventCenterRuleNameResponse
     */
    public function listEventCenterRuleNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEventCenterRuleName',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEventCenterRuleNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEventCenterRuleNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the names of event notification rules.
     *
     * @param request - ListEventCenterRuleNameRequest
     *
     * @returns ListEventCenterRuleNameResponse
     *
     * @param ListEventCenterRuleNameRequest $request
     *
     * @return ListEventCenterRuleNameResponse
     */
    public function listEventCenterRuleName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventCenterRuleNameWithOptions($request, $runtime);
    }

    /**
     * Queries Container Registry instances.
     *
     * @param request - ListInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceResponse
     *
     * @param ListInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceStatus) {
            @$query['InstanceStatus'] = $request->instanceStatus;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstance',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Container Registry instances.
     *
     * @param request - ListInstanceRequest
     *
     * @returns ListInstanceResponse
     *
     * @param ListInstanceRequest $request
     *
     * @return ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the endpoints of a Container Registry instance.
     *
     * @param request - ListInstanceEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceEndpointResponse
     *
     * @param ListInstanceEndpointRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListInstanceEndpointResponse
     */
    public function listInstanceEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleName) {
            @$query['ModuleName'] = $request->moduleName;
        }

        if (null !== $request->summary) {
            @$query['Summary'] = $request->summary;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceEndpoint',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstanceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstanceEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the endpoints of a Container Registry instance.
     *
     * @param request - ListInstanceEndpointRequest
     *
     * @returns ListInstanceEndpointResponse
     *
     * @param ListInstanceEndpointRequest $request
     *
     * @return ListInstanceEndpointResponse
     */
    public function listInstanceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceEndpointWithOptions($request, $runtime);
    }

    /**
     * Queries regions in which you can create Container Registry instances.
     *
     * @param request - ListInstanceRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceRegionResponse
     *
     * @param ListInstanceRegionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInstanceRegionResponse
     */
    public function listInstanceRegionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceRegion',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstanceRegionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstanceRegionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries regions in which you can create Container Registry instances.
     *
     * @param request - ListInstanceRegionRequest
     *
     * @returns ListInstanceRegionResponse
     *
     * @param ListInstanceRegionRequest $request
     *
     * @return ListInstanceRegionResponse
     */
    public function listInstanceRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceRegionWithOptions($request, $runtime);
    }

    /**
     * cri-94klsruryslx****.
     *
     * @param request - ListNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNamespaceResponse
     *
     * @param ListNamespaceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListNamespaceResponse
     */
    public function listNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        if (null !== $request->namespaceStatus) {
            @$query['NamespaceStatus'] = $request->namespaceStatus;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNamespace',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * cri-94klsruryslx****.
     *
     * @param request - ListNamespaceRequest
     *
     * @returns ListNamespaceResponse
     *
     * @param ListNamespaceRequest $request
     *
     * @return ListNamespaceResponse
     */
    public function listNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamespaceWithOptions($request, $runtime);
    }

    /**
     * Queries image building records of an image repository.
     *
     * @param request - ListRepoBuildRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepoBuildRecordResponse
     *
     * @param ListRepoBuildRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListRepoBuildRecordResponse
     */
    public function listRepoBuildRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepoBuildRecord',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRepoBuildRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRepoBuildRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries image building records of an image repository.
     *
     * @param request - ListRepoBuildRecordRequest
     *
     * @returns ListRepoBuildRecordResponse
     *
     * @param ListRepoBuildRecordRequest $request
     *
     * @return ListRepoBuildRecordResponse
     */
    public function listRepoBuildRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoBuildRecordWithOptions($request, $runtime);
    }

    /**
     * Queries the log of an image building record.
     *
     * @param request - ListRepoBuildRecordLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepoBuildRecordLogResponse
     *
     * @param ListRepoBuildRecordLogRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListRepoBuildRecordLogResponse
     */
    public function listRepoBuildRecordLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buildRecordId) {
            @$query['BuildRecordId'] = $request->buildRecordId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepoBuildRecordLog',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRepoBuildRecordLogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRepoBuildRecordLogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the log of an image building record.
     *
     * @param request - ListRepoBuildRecordLogRequest
     *
     * @returns ListRepoBuildRecordLogResponse
     *
     * @param ListRepoBuildRecordLogRequest $request
     *
     * @return ListRepoBuildRecordLogResponse
     */
    public function listRepoBuildRecordLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoBuildRecordLogWithOptions($request, $runtime);
    }

    /**
     * Queries image building rules of a repository.
     *
     * @param request - ListRepoBuildRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepoBuildRuleResponse
     *
     * @param ListRepoBuildRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListRepoBuildRuleResponse
     */
    public function listRepoBuildRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepoBuildRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRepoBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRepoBuildRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries image building rules of a repository.
     *
     * @param request - ListRepoBuildRuleRequest
     *
     * @returns ListRepoBuildRuleResponse
     *
     * @param ListRepoBuildRuleRequest $request
     *
     * @return ListRepoBuildRuleResponse
     */
    public function listRepoBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoBuildRuleWithOptions($request, $runtime);
    }

    /**
     * Queries image synchronization rules of a repository.
     *
     * @param request - ListRepoSyncRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepoSyncRuleResponse
     *
     * @param ListRepoSyncRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListRepoSyncRuleResponse
     */
    public function listRepoSyncRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->targetInstanceId) {
            @$query['TargetInstanceId'] = $request->targetInstanceId;
        }

        if (null !== $request->targetRegionId) {
            @$query['TargetRegionId'] = $request->targetRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepoSyncRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRepoSyncRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRepoSyncRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries image synchronization rules of a repository.
     *
     * @param request - ListRepoSyncRuleRequest
     *
     * @returns ListRepoSyncRuleResponse
     *
     * @param ListRepoSyncRuleRequest $request
     *
     * @return ListRepoSyncRuleResponse
     */
    public function listRepoSyncRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoSyncRuleWithOptions($request, $runtime);
    }

    /**
     * Indicates whether automatic link is used.
     *
     * @param request - ListRepoSyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepoSyncTaskResponse
     *
     * @param ListRepoSyncTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListRepoSyncTaskResponse
     */
    public function listRepoSyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        if (null !== $request->syncRecordId) {
            @$query['SyncRecordId'] = $request->syncRecordId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepoSyncTask',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRepoSyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRepoSyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Indicates whether automatic link is used.
     *
     * @param request - ListRepoSyncTaskRequest
     *
     * @returns ListRepoSyncTaskResponse
     *
     * @param ListRepoSyncTaskRequest $request
     *
     * @return ListRepoSyncTaskResponse
     */
    public function listRepoSyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoSyncTaskWithOptions($request, $runtime);
    }

    /**
     * Queries image tags in a repository.
     *
     * @param request - ListRepoTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepoTagResponse
     *
     * @param ListRepoTagRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRepoTagResponse
     */
    public function listRepoTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepoTag',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRepoTagResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRepoTagResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries image tags in a repository.
     *
     * @param request - ListRepoTagRequest
     *
     * @returns ListRepoTagResponse
     *
     * @param ListRepoTagRequest $request
     *
     * @return ListRepoTagResponse
     */
    public function listRepoTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoTagWithOptions($request, $runtime);
    }

    /**
     * Queries the results of a security scan that is created for an image tag.
     *
     * @param request - ListRepoTagScanResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepoTagScanResultResponse
     *
     * @param ListRepoTagScanResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListRepoTagScanResultResponse
     */
    public function listRepoTagScanResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->digest) {
            @$query['Digest'] = $request->digest;
        }

        if (null !== $request->filterValue) {
            @$query['FilterValue'] = $request->filterValue;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->scanTaskId) {
            @$query['ScanTaskId'] = $request->scanTaskId;
        }

        if (null !== $request->scanType) {
            @$query['ScanType'] = $request->scanType;
        }

        if (null !== $request->severity) {
            @$query['Severity'] = $request->severity;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vulQueryKey) {
            @$query['VulQueryKey'] = $request->vulQueryKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepoTagScanResult',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRepoTagScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRepoTagScanResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the results of a security scan that is created for an image tag.
     *
     * @param request - ListRepoTagScanResultRequest
     *
     * @returns ListRepoTagScanResultResponse
     *
     * @param ListRepoTagScanResultRequest $request
     *
     * @return ListRepoTagScanResultResponse
     */
    public function listRepoTagScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoTagScanResultWithOptions($request, $runtime);
    }

    /**
     * Queries the triggers of a repository.
     *
     * @param request - ListRepoTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepoTriggerResponse
     *
     * @param ListRepoTriggerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRepoTriggerResponse
     */
    public function listRepoTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepoTrigger',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRepoTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRepoTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the triggers of a repository.
     *
     * @param request - ListRepoTriggerRequest
     *
     * @returns ListRepoTriggerResponse
     *
     * @param ListRepoTriggerRequest $request
     *
     * @return ListRepoTriggerResponse
     */
    public function listRepoTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepoTriggerWithOptions($request, $runtime);
    }

    /**
     * Queries image repositories.
     *
     * @param request - ListRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepositoryResponse
     *
     * @param ListRepositoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListRepositoryResponse
     */
    public function listRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        if (null !== $request->repoStatus) {
            @$query['RepoStatus'] = $request->repoStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepository',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries image repositories.
     *
     * @param request - ListRepositoryRequest
     *
     * @returns ListRepositoryResponse
     *
     * @param ListRepositoryRequest $request
     *
     * @return ListRepositoryResponse
     */
    public function listRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRepositoryWithOptions($request, $runtime);
    }

    /**
     * Queries the baseline risks of a scan task by page.
     *
     * @remarks
     * Before you call this operation, use a Security Center scan engine to scan the image.
     *
     * @param request - ListScanBaselineByTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScanBaselineByTaskResponse
     *
     * @param ListScanBaselineByTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListScanBaselineByTaskResponse
     */
    public function listScanBaselineByTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScanBaselineByTask',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListScanBaselineByTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListScanBaselineByTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the baseline risks of a scan task by page.
     *
     * @remarks
     * Before you call this operation, use a Security Center scan engine to scan the image.
     *
     * @param request - ListScanBaselineByTaskRequest
     *
     * @returns ListScanBaselineByTaskResponse
     *
     * @param ListScanBaselineByTaskRequest $request
     *
     * @return ListScanBaselineByTaskResponse
     */
    public function listScanBaselineByTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScanBaselineByTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the malicious files of a scan task by page.
     *
     * @remarks
     * Before you call this operation, use a Security Center scan engine to scan the image.
     *
     * @param request - ListScanMaliciousFileByTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScanMaliciousFileByTaskResponse
     *
     * @param ListScanMaliciousFileByTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListScanMaliciousFileByTaskResponse
     */
    public function listScanMaliciousFileByTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScanMaliciousFileByTask',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListScanMaliciousFileByTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListScanMaliciousFileByTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the malicious files of a scan task by page.
     *
     * @remarks
     * Before you call this operation, use a Security Center scan engine to scan the image.
     *
     * @param request - ListScanMaliciousFileByTaskRequest
     *
     * @returns ListScanMaliciousFileByTaskResponse
     *
     * @param ListScanMaliciousFileByTaskRequest $request
     *
     * @return ListScanMaliciousFileByTaskResponse
     */
    public function listScanMaliciousFileByTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScanMaliciousFileByTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are added to cloud resources. Instance resources are supported.
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
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the tags that are added to cloud resources. Instance resources are supported.
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
     * Resets the logon password of a Container Registry instance.
     *
     * @param request - ResetLoginPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetLoginPasswordResponse
     *
     * @param ResetLoginPasswordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ResetLoginPasswordResponse
     */
    public function resetLoginPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetLoginPassword',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResetLoginPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResetLoginPasswordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Resets the logon password of a Container Registry instance.
     *
     * @param request - ResetLoginPasswordRequest
     *
     * @returns ResetLoginPasswordResponse
     *
     * @param ResetLoginPasswordRequest $request
     *
     * @return ResetLoginPasswordResponse
     */
    public function resetLoginPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetLoginPasswordWithOptions($request, $runtime);
    }

    /**
     * Adds tags to resources. Instance resources are supported.
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
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds tags to resources. Instance resources are supported.
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
     * Removes tags from resources. Instance resources are supported.
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
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes tags from resources. Instance resources are supported.
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
     * Updates a lifecycle management rule of an artifact.
     *
     * @param request - UpdateArtifactLifecycleRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateArtifactLifecycleRuleResponse
     *
     * @param UpdateArtifactLifecycleRuleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateArtifactLifecycleRuleResponse
     */
    public function updateArtifactLifecycleRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auto) {
            @$query['Auto'] = $request->auto;
        }

        if (null !== $request->enableDeleteTag) {
            @$query['EnableDeleteTag'] = $request->enableDeleteTag;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->retentionTagCount) {
            @$query['RetentionTagCount'] = $request->retentionTagCount;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->scheduleTime) {
            @$query['ScheduleTime'] = $request->scheduleTime;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->tagRegexp) {
            @$query['TagRegexp'] = $request->tagRegexp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateArtifactLifecycleRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateArtifactLifecycleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateArtifactLifecycleRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a lifecycle management rule of an artifact.
     *
     * @param request - UpdateArtifactLifecycleRuleRequest
     *
     * @returns UpdateArtifactLifecycleRuleResponse
     *
     * @param UpdateArtifactLifecycleRuleRequest $request
     *
     * @return UpdateArtifactLifecycleRuleResponse
     */
    public function updateArtifactLifecycleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateArtifactLifecycleRuleWithOptions($request, $runtime);
    }

    /**
     * Updates an artifact subscription rule.
     *
     * @param request - UpdateArtifactSubscriptionRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateArtifactSubscriptionRuleResponse
     *
     * @param UpdateArtifactSubscriptionRuleRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateArtifactSubscriptionRuleResponse
     */
    public function updateArtifactSubscriptionRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accelerate) {
            @$query['Accelerate'] = $request->accelerate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        if (null !== $request->override) {
            @$query['Override'] = $request->override;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->sourceNamespaceName) {
            @$query['SourceNamespaceName'] = $request->sourceNamespaceName;
        }

        if (null !== $request->sourceProvider) {
            @$query['SourceProvider'] = $request->sourceProvider;
        }

        if (null !== $request->sourceRepoName) {
            @$query['SourceRepoName'] = $request->sourceRepoName;
        }

        if (null !== $request->tagCount) {
            @$query['TagCount'] = $request->tagCount;
        }

        if (null !== $request->tagRegexp) {
            @$query['TagRegexp'] = $request->tagRegexp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateArtifactSubscriptionRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateArtifactSubscriptionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateArtifactSubscriptionRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates an artifact subscription rule.
     *
     * @param request - UpdateArtifactSubscriptionRuleRequest
     *
     * @returns UpdateArtifactSubscriptionRuleResponse
     *
     * @param UpdateArtifactSubscriptionRuleRequest $request
     *
     * @return UpdateArtifactSubscriptionRuleResponse
     */
    public function updateArtifactSubscriptionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateArtifactSubscriptionRuleWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a delivery chain, such as the node execution sequence of the delivery chain.
     *
     * @param request - UpdateChainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateChainResponse
     *
     * @param UpdateChainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateChainResponse
     */
    public function updateChainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chainConfig) {
            @$query['ChainConfig'] = $request->chainConfig;
        }

        if (null !== $request->chainId) {
            @$query['ChainId'] = $request->chainId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->scopeExclude) {
            @$query['ScopeExclude'] = $request->scopeExclude;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateChain',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateChainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateChainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a delivery chain, such as the node execution sequence of the delivery chain.
     *
     * @param request - UpdateChainRequest
     *
     * @returns UpdateChainResponse
     *
     * @param UpdateChainRequest $request
     *
     * @return UpdateChainResponse
     */
    public function updateChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChainWithOptions($request, $runtime);
    }

    /**
     * Updates a chart namespace.
     *
     * @param request - UpdateChartNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateChartNamespaceResponse
     *
     * @param UpdateChartNamespaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateChartNamespaceResponse
     */
    public function updateChartNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoCreateRepo) {
            @$query['AutoCreateRepo'] = $request->autoCreateRepo;
        }

        if (null !== $request->defaultRepoType) {
            @$query['DefaultRepoType'] = $request->defaultRepoType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateChartNamespace',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateChartNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateChartNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a chart namespace.
     *
     * @param request - UpdateChartNamespaceRequest
     *
     * @returns UpdateChartNamespaceResponse
     *
     * @param UpdateChartNamespaceRequest $request
     *
     * @return UpdateChartNamespaceResponse
     */
    public function updateChartNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChartNamespaceWithOptions($request, $runtime);
    }

    /**
     * Updates a chart repository of a Container Registry instance.
     *
     * @param request - UpdateChartRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateChartRepositoryResponse
     *
     * @param UpdateChartRepositoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateChartRepositoryResponse
     */
    public function updateChartRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        if (null !== $request->repoType) {
            @$query['RepoType'] = $request->repoType;
        }

        if (null !== $request->summary) {
            @$query['Summary'] = $request->summary;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateChartRepository',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateChartRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateChartRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a chart repository of a Container Registry instance.
     *
     * @param request - UpdateChartRepositoryRequest
     *
     * @returns UpdateChartRepositoryResponse
     *
     * @param UpdateChartRepositoryRequest $request
     *
     * @return UpdateChartRepositoryResponse
     */
    public function updateChartRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChartRepositoryWithOptions($request, $runtime);
    }

    /**
     * Updates an event notification rule.
     *
     * @param tmpReq - UpdateEventCenterRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEventCenterRuleResponse
     *
     * @param UpdateEventCenterRuleRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateEventCenterRuleResponse
     */
    public function updateEventCenterRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateEventCenterRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->namespaces) {
            $request->namespacesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->namespaces, 'Namespaces', 'json');
        }

        if (null !== $tmpReq->repoNames) {
            $request->repoNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->repoNames, 'RepoNames', 'json');
        }

        $query = [];
        if (null !== $request->eventChannel) {
            @$query['EventChannel'] = $request->eventChannel;
        }

        if (null !== $request->eventConfig) {
            @$query['EventConfig'] = $request->eventConfig;
        }

        if (null !== $request->eventScope) {
            @$query['EventScope'] = $request->eventScope;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespacesShrink) {
            @$query['Namespaces'] = $request->namespacesShrink;
        }

        if (null !== $request->repoNamesShrink) {
            @$query['RepoNames'] = $request->repoNamesShrink;
        }

        if (null !== $request->repoTagFilterPattern) {
            @$query['RepoTagFilterPattern'] = $request->repoTagFilterPattern;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateEventCenterRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateEventCenterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEventCenterRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates an event notification rule.
     *
     * @param request - UpdateEventCenterRuleRequest
     *
     * @returns UpdateEventCenterRuleResponse
     *
     * @param UpdateEventCenterRuleRequest $request
     *
     * @return UpdateEventCenterRuleResponse
     */
    public function updateEventCenterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventCenterRuleWithOptions($request, $runtime);
    }

    /**
     * Updates the status of an instance endpoint.
     *
     * @param request - UpdateInstanceEndpointStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceEndpointStatusResponse
     *
     * @param UpdateInstanceEndpointStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateInstanceEndpointStatusResponse
     */
    public function updateInstanceEndpointStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleName) {
            @$query['ModuleName'] = $request->moduleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceEndpointStatus',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateInstanceEndpointStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateInstanceEndpointStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the status of an instance endpoint.
     *
     * @param request - UpdateInstanceEndpointStatusRequest
     *
     * @returns UpdateInstanceEndpointStatusResponse
     *
     * @param UpdateInstanceEndpointStatusRequest $request
     *
     * @return UpdateInstanceEndpointStatusResponse
     */
    public function updateInstanceEndpointStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceEndpointStatusWithOptions($request, $runtime);
    }

    /**
     * Updates a namespace.
     *
     * @param request - UpdateNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNamespaceResponse
     *
     * @param UpdateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoCreateRepo) {
            @$query['AutoCreateRepo'] = $request->autoCreateRepo;
        }

        if (null !== $request->defaultRepoType) {
            @$query['DefaultRepoType'] = $request->defaultRepoType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespaceName) {
            @$query['NamespaceName'] = $request->namespaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNamespace',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a namespace.
     *
     * @param request - UpdateNamespaceRequest
     *
     * @returns UpdateNamespaceResponse
     *
     * @param UpdateNamespaceRequest $request
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNamespaceWithOptions($request, $runtime);
    }

    /**
     * Updates an image building rule for a repository.
     *
     * @param request - UpdateRepoBuildRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRepoBuildRuleResponse
     *
     * @param UpdateRepoBuildRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateRepoBuildRuleResponse
     */
    public function updateRepoBuildRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buildArgs) {
            @$query['BuildArgs'] = $request->buildArgs;
        }

        if (null !== $request->buildRuleId) {
            @$query['BuildRuleId'] = $request->buildRuleId;
        }

        if (null !== $request->dockerfileLocation) {
            @$query['DockerfileLocation'] = $request->dockerfileLocation;
        }

        if (null !== $request->dockerfileName) {
            @$query['DockerfileName'] = $request->dockerfileName;
        }

        if (null !== $request->imageTag) {
            @$query['ImageTag'] = $request->imageTag;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->platforms) {
            @$query['Platforms'] = $request->platforms;
        }

        if (null !== $request->pushName) {
            @$query['PushName'] = $request->pushName;
        }

        if (null !== $request->pushType) {
            @$query['PushType'] = $request->pushType;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRepoBuildRule',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRepoBuildRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRepoBuildRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates an image building rule for a repository.
     *
     * @param request - UpdateRepoBuildRuleRequest
     *
     * @returns UpdateRepoBuildRuleResponse
     *
     * @param UpdateRepoBuildRuleRequest $request
     *
     * @return UpdateRepoBuildRuleResponse
     */
    public function updateRepoBuildRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRepoBuildRuleWithOptions($request, $runtime);
    }

    /**
     * Updates the URL of the source code repository that is bound to an image repository.
     *
     * @param request - UpdateRepoSourceCodeRepoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRepoSourceCodeRepoResponse
     *
     * @param UpdateRepoSourceCodeRepoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateRepoSourceCodeRepoResponse
     */
    public function updateRepoSourceCodeRepoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoBuild) {
            @$query['AutoBuild'] = $request->autoBuild;
        }

        if (null !== $request->codeRepoId) {
            @$query['CodeRepoId'] = $request->codeRepoId;
        }

        if (null !== $request->codeRepoName) {
            @$query['CodeRepoName'] = $request->codeRepoName;
        }

        if (null !== $request->codeRepoNamespaceName) {
            @$query['CodeRepoNamespaceName'] = $request->codeRepoNamespaceName;
        }

        if (null !== $request->codeRepoType) {
            @$query['CodeRepoType'] = $request->codeRepoType;
        }

        if (null !== $request->disableCacheBuild) {
            @$query['DisableCacheBuild'] = $request->disableCacheBuild;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->overseaBuild) {
            @$query['OverseaBuild'] = $request->overseaBuild;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRepoSourceCodeRepo',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRepoSourceCodeRepoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRepoSourceCodeRepoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the URL of the source code repository that is bound to an image repository.
     *
     * @param request - UpdateRepoSourceCodeRepoRequest
     *
     * @returns UpdateRepoSourceCodeRepoResponse
     *
     * @param UpdateRepoSourceCodeRepoRequest $request
     *
     * @return UpdateRepoSourceCodeRepoResponse
     */
    public function updateRepoSourceCodeRepo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRepoSourceCodeRepoWithOptions($request, $runtime);
    }

    /**
     * Updates a trigger of an image repository.
     *
     * @param request - UpdateRepoTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRepoTriggerResponse
     *
     * @param UpdateRepoTriggerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateRepoTriggerResponse
     */
    public function updateRepoTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->triggerId) {
            @$query['TriggerId'] = $request->triggerId;
        }

        if (null !== $request->triggerName) {
            @$query['TriggerName'] = $request->triggerName;
        }

        if (null !== $request->triggerTag) {
            @$query['TriggerTag'] = $request->triggerTag;
        }

        if (null !== $request->triggerType) {
            @$query['TriggerType'] = $request->triggerType;
        }

        if (null !== $request->triggerUrl) {
            @$query['TriggerUrl'] = $request->triggerUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRepoTrigger',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRepoTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRepoTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a trigger of an image repository.
     *
     * @param request - UpdateRepoTriggerRequest
     *
     * @returns UpdateRepoTriggerResponse
     *
     * @param UpdateRepoTriggerRequest $request
     *
     * @return UpdateRepoTriggerResponse
     */
    public function updateRepoTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRepoTriggerWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *
     * @param request - UpdateRepositoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRepositoryResponse
     *
     * @param UpdateRepositoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRepositoryResponse
     */
    public function updateRepositoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->detail) {
            @$query['Detail'] = $request->detail;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        if (null !== $request->repoNamespaceName) {
            @$query['RepoNamespaceName'] = $request->repoNamespaceName;
        }

        if (null !== $request->repoType) {
            @$query['RepoType'] = $request->repoType;
        }

        if (null !== $request->summary) {
            @$query['Summary'] = $request->summary;
        }

        if (null !== $request->tagImmutability) {
            @$query['TagImmutability'] = $request->tagImmutability;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRepository',
            'version' => '2018-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *
     * @param request - UpdateRepositoryRequest
     *
     * @returns UpdateRepositoryResponse
     *
     * @param UpdateRepositoryRequest $request
     *
     * @return UpdateRepositoryResponse
     */
    public function updateRepository($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRepositoryWithOptions($request, $runtime);
    }
}
