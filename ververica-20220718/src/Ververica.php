<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ApplyScheduledPlanHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ApplyScheduledPlanResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CancelSqlPreviewHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CancelSqlPreviewRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CancelSqlPreviewResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentDraftHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentDraftRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentDraftResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentTargetHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentTargetRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentTargetResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentTargetV2Headers;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentTargetV2Request;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentTargetV2Response;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateFolderHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateFolderRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateFolderResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateMemberHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateMemberRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateMemberResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateSavepointHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateSavepointRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateSavepointResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateScheduledPlanHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateScheduledPlanRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateScheduledPlanResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateSessionClusterHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateSessionClusterRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateSessionClusterResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateUdfArtifactHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateUdfArtifactRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateUdfArtifactResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateVariableHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateVariableRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateVariableResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteCustomConnectorHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteCustomConnectorResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteDeploymentDraftHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteDeploymentDraftResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteDeploymentHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteDeploymentResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteDeploymentTargetHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteDeploymentTargetResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteFolderHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteFolderResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteMemberHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteMemberResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteSavepointHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteSavepointResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteScheduledPlanHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteScheduledPlanResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteSessionClusterHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteSessionClusterResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteUdfArtifactHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteUdfArtifactResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteUdfFunctionHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteUdfFunctionRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteUdfFunctionResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteVariableHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteVariableResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeployDeploymentDraftAsyncHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeployDeploymentDraftAsyncRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeployDeploymentDraftAsyncResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ExecuteSqlStatementHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ExecuteSqlStatementRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ExecuteSqlStatementResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\FetchSqlPreviewResultsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\FetchSqlPreviewResultsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\FetchSqlPreviewResultsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\FlinkApiProxyHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\FlinkApiProxyRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\FlinkApiProxyResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GenerateResourcePlanWithFlinkConfAsyncHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GenerateResourcePlanWithFlinkConfAsyncRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GenerateResourcePlanWithFlinkConfAsyncResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetAppliedScheduledPlanHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetAppliedScheduledPlanRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetAppliedScheduledPlanResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetCatalogsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetCatalogsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetCatalogsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDatabasesHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDatabasesRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDatabasesResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDeployDeploymentDraftResultHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDeployDeploymentDraftResultResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDeploymentDraftHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDeploymentDraftLockHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDeploymentDraftLockRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDeploymentDraftLockResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDeploymentDraftResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDeploymentHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDeploymentResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetEventsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetEventsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetEventsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetFolderHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetFolderRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetFolderResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetGenerateResourcePlanResultHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetGenerateResourcePlanResultResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetHotUpdateJobResultHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetHotUpdateJobResultResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetJobDiagnosisHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetJobDiagnosisResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetLatestJobStartLogHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetLatestJobStartLogResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetLineageInfoHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetLineageInfoRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetLineageInfoResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetMemberHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetMemberResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetSavepointHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetSavepointResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetSessionClusterHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetSessionClusterResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetTablesHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetTablesRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetTablesResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetUdfArtifactsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetUdfArtifactsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetUdfArtifactsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\HotUpdateJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\HotUpdateJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListCustomConnectorsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListCustomConnectorsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentDraftsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentDraftsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentDraftsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentTargetsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentTargetsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentTargetsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListEditableNamespaceRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListEditableNamespaceResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListEngineVersionMetadataHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListEngineVersionMetadataResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListJobsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListJobsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListJobsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListMembersHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListMembersRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListMembersResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListSavepointsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListSavepointsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListSavepointsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListScheduledPlanExecutedHistoryHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListScheduledPlanExecutedHistoryRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListScheduledPlanExecutedHistoryResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListScheduledPlanHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListScheduledPlanRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListScheduledPlanResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListSessionClustersHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListSessionClustersResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListVariablesHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListVariablesRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListVariablesResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\RegisterCustomConnectorHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\RegisterCustomConnectorRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\RegisterCustomConnectorResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\RegisterUdfFunctionHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\RegisterUdfFunctionRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\RegisterUdfFunctionResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobWithParamsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobWithParamsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobWithParamsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartSessionClusterHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartSessionClusterResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopApplyScheduledPlanHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopApplyScheduledPlanResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopJobRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopSessionClusterHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopSessionClusterResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\SubmitSqlPreviewHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\SubmitSqlPreviewRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\SubmitSqlPreviewResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentDraftHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentDraftRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentDraftResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentTargetHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentTargetRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentTargetResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentTargetV2Headers;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentTargetV2Request;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentTargetV2Response;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateFolderHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateFolderRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateFolderResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateMemberHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateMemberRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateMemberResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateScheduledPlanHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateScheduledPlanRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateScheduledPlanResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateSessionClusterHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateSessionClusterRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateSessionClusterResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateUdfArtifactHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateUdfArtifactRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateUdfArtifactResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateVariableHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateVariableRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateVariableResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ValidateSqlStatementHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ValidateSqlStatementRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ValidateSqlStatementResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ververica extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ververica', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 执行定时计划.
     *
     * @param headers - ApplyScheduledPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyScheduledPlanResponse
     *
     * @param string                    $namespace_
     * @param string                    $scheduledPlanId
     * @param ApplyScheduledPlanHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ApplyScheduledPlanResponse
     */
    public function applyScheduledPlanWithOptions($namespace_, $scheduledPlanId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'ApplyScheduledPlan',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/scheduled-plans/' . Url::percentEncode($scheduledPlanId) . '%3Aapply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ApplyScheduledPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行定时计划.
     *
     * @returns ApplyScheduledPlanResponse
     *
     * @param string $namespace_
     * @param string $scheduledPlanId
     *
     * @return ApplyScheduledPlanResponse
     */
    public function applyScheduledPlan($namespace_, $scheduledPlanId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ApplyScheduledPlanHeaders([]);

        return $this->applyScheduledPlanWithOptions($namespace_, $scheduledPlanId, $headers, $runtime);
    }

    /**
     * 取消调试.
     *
     * @param request - CancelSqlPreviewRequest
     * @param headers - CancelSqlPreviewHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelSqlPreviewResponse
     *
     * @param string                  $namespace_
     * @param CancelSqlPreviewRequest $request
     * @param CancelSqlPreviewHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CancelSqlPreviewResponse
     */
    public function cancelSqlPreviewWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->queryId) {
            @$query['queryId'] = $request->queryId;
        }

        if (null !== $request->sessionClusterName) {
            @$query['sessionClusterName'] = $request->sessionClusterName;
        }

        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelSqlPreview',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/sql-preview/cancel',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelSqlPreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消调试.
     *
     * @param request - CancelSqlPreviewRequest
     *
     * @returns CancelSqlPreviewResponse
     *
     * @param string                  $namespace_
     * @param CancelSqlPreviewRequest $request
     *
     * @return CancelSqlPreviewResponse
     */
    public function cancelSqlPreview($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CancelSqlPreviewHeaders([]);

        return $this->cancelSqlPreviewWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Creates a deployment.
     *
     * @param request - CreateDeploymentRequest
     * @param headers - CreateDeploymentHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeploymentResponse
     *
     * @param string                  $namespace_
     * @param CreateDeploymentRequest $request
     * @param CreateDeploymentHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDeploymentResponse
     */
    public function createDeploymentWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateDeployment',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a deployment.
     *
     * @param request - CreateDeploymentRequest
     *
     * @returns CreateDeploymentResponse
     *
     * @param string                  $namespace_
     * @param CreateDeploymentRequest $request
     *
     * @return CreateDeploymentResponse
     */
    public function createDeployment($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDeploymentHeaders([]);

        return $this->createDeploymentWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * create a deploymentDraft.
     *
     * @param request - CreateDeploymentDraftRequest
     * @param headers - CreateDeploymentDraftHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeploymentDraftResponse
     *
     * @param string                       $namespace_
     * @param CreateDeploymentDraftRequest $request
     * @param CreateDeploymentDraftHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDeploymentDraftResponse
     */
    public function createDeploymentDraftWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateDeploymentDraft',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-drafts',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDeploymentDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * create a deploymentDraft.
     *
     * @param request - CreateDeploymentDraftRequest
     *
     * @returns CreateDeploymentDraftResponse
     *
     * @param string                       $namespace_
     * @param CreateDeploymentDraftRequest $request
     *
     * @return CreateDeploymentDraftResponse
     */
    public function createDeploymentDraft($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDeploymentDraftHeaders([]);

        return $this->createDeploymentDraftWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 创建deploymentTarget.
     *
     * @param request - CreateDeploymentTargetRequest
     * @param headers - CreateDeploymentTargetHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeploymentTargetResponse
     *
     * @param string                        $namespace_
     * @param CreateDeploymentTargetRequest $request
     * @param CreateDeploymentTargetHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDeploymentTargetResponse
     */
    public function createDeploymentTargetWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deploymentTargetName) {
            @$query['deploymentTargetName'] = $request->deploymentTargetName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateDeploymentTarget',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-targets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDeploymentTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建deploymentTarget.
     *
     * @param request - CreateDeploymentTargetRequest
     *
     * @returns CreateDeploymentTargetResponse
     *
     * @param string                        $namespace_
     * @param CreateDeploymentTargetRequest $request
     *
     * @return CreateDeploymentTargetResponse
     */
    public function createDeploymentTarget($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDeploymentTargetHeaders([]);

        return $this->createDeploymentTargetWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 创建部署目标V2.
     *
     * @param request - CreateDeploymentTargetV2Request
     * @param headers - CreateDeploymentTargetV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeploymentTargetV2Response
     *
     * @param string                          $namespace_
     * @param CreateDeploymentTargetV2Request $request
     * @param CreateDeploymentTargetV2Headers $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDeploymentTargetV2Response
     */
    public function createDeploymentTargetV2WithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deploymentTargetName) {
            @$query['deploymentTargetName'] = $request->deploymentTargetName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateDeploymentTargetV2',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-targets/support-elastic',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDeploymentTargetV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建部署目标V2.
     *
     * @param request - CreateDeploymentTargetV2Request
     *
     * @returns CreateDeploymentTargetV2Response
     *
     * @param string                          $namespace_
     * @param CreateDeploymentTargetV2Request $request
     *
     * @return CreateDeploymentTargetV2Response
     */
    public function createDeploymentTargetV2($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDeploymentTargetV2Headers([]);

        return $this->createDeploymentTargetV2WithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * create a folder.
     *
     * @param request - CreateFolderRequest
     * @param headers - CreateFolderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFolderResponse
     *
     * @param string              $namespace_
     * @param CreateFolderRequest $request
     * @param CreateFolderHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFolderResponse
     */
    public function createFolderWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateFolder',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/folder',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * create a folder.
     *
     * @param request - CreateFolderRequest
     *
     * @returns CreateFolderResponse
     *
     * @param string              $namespace_
     * @param CreateFolderRequest $request
     *
     * @return CreateFolderResponse
     */
    public function createFolder($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateFolderHeaders([]);

        return $this->createFolderWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Adds a user to a namespace as a member and grants permissions to the user.
     *
     * @param request - CreateMemberRequest
     * @param headers - CreateMemberHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemberResponse
     *
     * @param string              $namespace_
     * @param CreateMemberRequest $request
     * @param CreateMemberHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateMemberResponse
     */
    public function createMemberWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMember',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/gateway/v2/namespaces/' . Url::percentEncode($namespace_) . '/members',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a user to a namespace as a member and grants permissions to the user.
     *
     * @param request - CreateMemberRequest
     *
     * @returns CreateMemberResponse
     *
     * @param string              $namespace_
     * @param CreateMemberRequest $request
     *
     * @return CreateMemberResponse
     */
    public function createMember($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateMemberHeaders([]);

        return $this->createMemberWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Creates a savepoint.
     *
     * @param request - CreateSavepointRequest
     * @param headers - CreateSavepointHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSavepointResponse
     *
     * @param string                 $namespace_
     * @param CreateSavepointRequest $request
     * @param CreateSavepointHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSavepointResponse
     */
    public function createSavepointWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deploymentId) {
            @$body['deploymentId'] = $request->deploymentId;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->nativeFormat) {
            @$body['nativeFormat'] = $request->nativeFormat;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSavepoint',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/savepoints',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSavepointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a savepoint.
     *
     * @param request - CreateSavepointRequest
     *
     * @returns CreateSavepointResponse
     *
     * @param string                 $namespace_
     * @param CreateSavepointRequest $request
     *
     * @return CreateSavepointResponse
     */
    public function createSavepoint($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSavepointHeaders([]);

        return $this->createSavepointWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 创建定时执行计划.
     *
     * @param request - CreateScheduledPlanRequest
     * @param headers - CreateScheduledPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScheduledPlanResponse
     *
     * @param string                     $namespace_
     * @param CreateScheduledPlanRequest $request
     * @param CreateScheduledPlanHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateScheduledPlanResponse
     */
    public function createScheduledPlanWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateScheduledPlan',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/scheduled-plans',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateScheduledPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建定时执行计划.
     *
     * @param request - CreateScheduledPlanRequest
     *
     * @returns CreateScheduledPlanResponse
     *
     * @param string                     $namespace_
     * @param CreateScheduledPlanRequest $request
     *
     * @return CreateScheduledPlanResponse
     */
    public function createScheduledPlan($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateScheduledPlanHeaders([]);

        return $this->createScheduledPlanWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 创建session集群.
     *
     * @param request - CreateSessionClusterRequest
     * @param headers - CreateSessionClusterHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSessionClusterResponse
     *
     * @param string                      $namespace_
     * @param CreateSessionClusterRequest $request
     * @param CreateSessionClusterHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSessionClusterResponse
     */
    public function createSessionClusterWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateSessionCluster',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/sessionclusters',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建session集群.
     *
     * @param request - CreateSessionClusterRequest
     *
     * @returns CreateSessionClusterResponse
     *
     * @param string                      $namespace_
     * @param CreateSessionClusterRequest $request
     *
     * @return CreateSessionClusterResponse
     */
    public function createSessionCluster($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSessionClusterHeaders([]);

        return $this->createSessionClusterWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Parses all user-defined function (UDF) methods in your JAR or Python file and creates an artifact configuration for a UDF.
     *
     * @param request - CreateUdfArtifactRequest
     * @param headers - CreateUdfArtifactHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUdfArtifactResponse
     *
     * @param string                   $namespace_
     * @param CreateUdfArtifactRequest $request
     * @param CreateUdfArtifactHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateUdfArtifactResponse
     */
    public function createUdfArtifactWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateUdfArtifact',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/udfartifacts',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateUdfArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Parses all user-defined function (UDF) methods in your JAR or Python file and creates an artifact configuration for a UDF.
     *
     * @param request - CreateUdfArtifactRequest
     *
     * @returns CreateUdfArtifactResponse
     *
     * @param string                   $namespace_
     * @param CreateUdfArtifactRequest $request
     *
     * @return CreateUdfArtifactResponse
     */
    public function createUdfArtifact($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateUdfArtifactHeaders([]);

        return $this->createUdfArtifactWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Creates a variable.
     *
     * @param request - CreateVariableRequest
     * @param headers - CreateVariableHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVariableResponse
     *
     * @param string                $namespace_
     * @param CreateVariableRequest $request
     * @param CreateVariableHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateVariableResponse
     */
    public function createVariableWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateVariable',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/variables',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a variable.
     *
     * @param request - CreateVariableRequest
     *
     * @returns CreateVariableResponse
     *
     * @param string                $namespace_
     * @param CreateVariableRequest $request
     *
     * @return CreateVariableResponse
     */
    public function createVariable($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateVariableHeaders([]);

        return $this->createVariableWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Deletes a registered custom connector from a workspace.
     *
     * @param headers - DeleteCustomConnectorHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomConnectorResponse
     *
     * @param string                       $namespace_
     * @param string                       $connectorName
     * @param DeleteCustomConnectorHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCustomConnectorResponse
     */
    public function deleteCustomConnectorWithOptions($namespace_, $connectorName, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteCustomConnector',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/connectors/' . Url::percentEncode($connectorName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCustomConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a registered custom connector from a workspace.
     *
     * @returns DeleteCustomConnectorResponse
     *
     * @param string $namespace_
     * @param string $connectorName
     *
     * @return DeleteCustomConnectorResponse
     */
    public function deleteCustomConnector($namespace_, $connectorName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteCustomConnectorHeaders([]);

        return $this->deleteCustomConnectorWithOptions($namespace_, $connectorName, $headers, $runtime);
    }

    /**
     * Deletes a deployment based on the deployment ID.
     *
     * @param headers - DeleteDeploymentHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeploymentResponse
     *
     * @param string                  $namespace_
     * @param string                  $deploymentId
     * @param DeleteDeploymentHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDeploymentResponse
     */
    public function deleteDeploymentWithOptions($namespace_, $deploymentId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteDeployment',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployments/' . Url::percentEncode($deploymentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a deployment based on the deployment ID.
     *
     * @returns DeleteDeploymentResponse
     *
     * @param string $namespace_
     * @param string $deploymentId
     *
     * @return DeleteDeploymentResponse
     */
    public function deleteDeployment($namespace_, $deploymentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteDeploymentHeaders([]);

        return $this->deleteDeploymentWithOptions($namespace_, $deploymentId, $headers, $runtime);
    }

    /**
     * delete a deploymentDraft.
     *
     * @param headers - DeleteDeploymentDraftHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeploymentDraftResponse
     *
     * @param string                       $namespace_
     * @param string                       $deploymentDraftId
     * @param DeleteDeploymentDraftHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDeploymentDraftResponse
     */
    public function deleteDeploymentDraftWithOptions($namespace_, $deploymentDraftId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteDeploymentDraft',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-drafts/' . Url::percentEncode($deploymentDraftId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDeploymentDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * delete a deploymentDraft.
     *
     * @returns DeleteDeploymentDraftResponse
     *
     * @param string $namespace_
     * @param string $deploymentDraftId
     *
     * @return DeleteDeploymentDraftResponse
     */
    public function deleteDeploymentDraft($namespace_, $deploymentDraftId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteDeploymentDraftHeaders([]);

        return $this->deleteDeploymentDraftWithOptions($namespace_, $deploymentDraftId, $headers, $runtime);
    }

    /**
     * 删除deploymentTarget.
     *
     * @param headers - DeleteDeploymentTargetHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeploymentTargetResponse
     *
     * @param string                        $namespace_
     * @param string                        $deploymentTargetName
     * @param DeleteDeploymentTargetHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteDeploymentTargetResponse
     */
    public function deleteDeploymentTargetWithOptions($namespace_, $deploymentTargetName, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteDeploymentTarget',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-targets/' . Url::percentEncode($deploymentTargetName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDeploymentTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除deploymentTarget.
     *
     * @returns DeleteDeploymentTargetResponse
     *
     * @param string $namespace_
     * @param string $deploymentTargetName
     *
     * @return DeleteDeploymentTargetResponse
     */
    public function deleteDeploymentTarget($namespace_, $deploymentTargetName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteDeploymentTargetHeaders([]);

        return $this->deleteDeploymentTargetWithOptions($namespace_, $deploymentTargetName, $headers, $runtime);
    }

    /**
     * delete a folder.
     *
     * @param headers - DeleteFolderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFolderResponse
     *
     * @param string              $namespace_
     * @param string              $folderId
     * @param DeleteFolderHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolderWithOptions($namespace_, $folderId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteFolder',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/folder/' . Url::percentEncode($folderId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * delete a folder.
     *
     * @returns DeleteFolderResponse
     *
     * @param string $namespace_
     * @param string $folderId
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolder($namespace_, $folderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteFolderHeaders([]);

        return $this->deleteFolderWithOptions($namespace_, $folderId, $headers, $runtime);
    }

    /**
     * Deletes the information about a job that is not in the running state in a deployment.
     *
     * @param headers - DeleteJobHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteJobResponse
     *
     * @param string           $namespace_
     * @param string           $jobId
     * @param DeleteJobHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteJobResponse
     */
    public function deleteJobWithOptions($namespace_, $jobId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteJob',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/jobs/' . Url::percentEncode($jobId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the information about a job that is not in the running state in a deployment.
     *
     * @returns DeleteJobResponse
     *
     * @param string $namespace_
     * @param string $jobId
     *
     * @return DeleteJobResponse
     */
    public function deleteJob($namespace_, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteJobHeaders([]);

        return $this->deleteJobWithOptions($namespace_, $jobId, $headers, $runtime);
    }

    /**
     * Revokes the permissions from a member.
     *
     * @param headers - DeleteMemberHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemberResponse
     *
     * @param string              $namespace_
     * @param string              $member
     * @param DeleteMemberHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteMemberResponse
     */
    public function deleteMemberWithOptions($namespace_, $member, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteMember',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/gateway/v2/namespaces/' . Url::percentEncode($namespace_) . '/members/' . Url::percentEncode($member) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the permissions from a member.
     *
     * @returns DeleteMemberResponse
     *
     * @param string $namespace_
     * @param string $member
     *
     * @return DeleteMemberResponse
     */
    public function deleteMember($namespace_, $member)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteMemberHeaders([]);

        return $this->deleteMemberWithOptions($namespace_, $member, $headers, $runtime);
    }

    /**
     * Deletes a savepoint.
     *
     * @param headers - DeleteSavepointHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSavepointResponse
     *
     * @param string                 $namespace_
     * @param string                 $savepointId
     * @param DeleteSavepointHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSavepointResponse
     */
    public function deleteSavepointWithOptions($namespace_, $savepointId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteSavepoint',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/savepoints/' . Url::percentEncode($savepointId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSavepointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a savepoint.
     *
     * @returns DeleteSavepointResponse
     *
     * @param string $namespace_
     * @param string $savepointId
     *
     * @return DeleteSavepointResponse
     */
    public function deleteSavepoint($namespace_, $savepointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteSavepointHeaders([]);

        return $this->deleteSavepointWithOptions($namespace_, $savepointId, $headers, $runtime);
    }

    /**
     * 删除定时执行计划.
     *
     * @param headers - DeleteScheduledPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScheduledPlanResponse
     *
     * @param string                     $namespace_
     * @param string                     $scheduledPlanId
     * @param DeleteScheduledPlanHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteScheduledPlanResponse
     */
    public function deleteScheduledPlanWithOptions($namespace_, $scheduledPlanId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteScheduledPlan',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/scheduled-plans/' . Url::percentEncode($scheduledPlanId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteScheduledPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除定时执行计划.
     *
     * @returns DeleteScheduledPlanResponse
     *
     * @param string $namespace_
     * @param string $scheduledPlanId
     *
     * @return DeleteScheduledPlanResponse
     */
    public function deleteScheduledPlan($namespace_, $scheduledPlanId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteScheduledPlanHeaders([]);

        return $this->deleteScheduledPlanWithOptions($namespace_, $scheduledPlanId, $headers, $runtime);
    }

    /**
     * 删除session集群.
     *
     * @param headers - DeleteSessionClusterHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSessionClusterResponse
     *
     * @param string                      $namespace_
     * @param string                      $sessionClusterName
     * @param DeleteSessionClusterHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSessionClusterResponse
     */
    public function deleteSessionClusterWithOptions($namespace_, $sessionClusterName, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteSessionCluster',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/sessionclusters/' . Url::percentEncode($sessionClusterName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除session集群.
     *
     * @returns DeleteSessionClusterResponse
     *
     * @param string $namespace_
     * @param string $sessionClusterName
     *
     * @return DeleteSessionClusterResponse
     */
    public function deleteSessionCluster($namespace_, $sessionClusterName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteSessionClusterHeaders([]);

        return $this->deleteSessionClusterWithOptions($namespace_, $sessionClusterName, $headers, $runtime);
    }

    /**
     * 删除UdfArtifact.
     *
     * @param headers - DeleteUdfArtifactHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUdfArtifactResponse
     *
     * @param string                   $namespace_
     * @param string                   $udfArtifactName
     * @param DeleteUdfArtifactHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteUdfArtifactResponse
     */
    public function deleteUdfArtifactWithOptions($namespace_, $udfArtifactName, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteUdfArtifact',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/udfartifacts/' . Url::percentEncode($udfArtifactName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUdfArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除UdfArtifact.
     *
     * @returns DeleteUdfArtifactResponse
     *
     * @param string $namespace_
     * @param string $udfArtifactName
     *
     * @return DeleteUdfArtifactResponse
     */
    public function deleteUdfArtifact($namespace_, $udfArtifactName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteUdfArtifactHeaders([]);

        return $this->deleteUdfArtifactWithOptions($namespace_, $udfArtifactName, $headers, $runtime);
    }

    /**
     * Deletes an existing user-defined function (UDF) from a Realtime Compute for Apache Flink workspace.
     *
     * @param request - DeleteUdfFunctionRequest
     * @param headers - DeleteUdfFunctionHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUdfFunctionResponse
     *
     * @param string                   $namespace_
     * @param string                   $functionName
     * @param DeleteUdfFunctionRequest $request
     * @param DeleteUdfFunctionHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteUdfFunctionResponse
     */
    public function deleteUdfFunctionWithOptions($namespace_, $functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->className) {
            @$query['className'] = $request->className;
        }

        if (null !== $request->udfArtifactName) {
            @$query['udfArtifactName'] = $request->udfArtifactName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUdfFunction',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/udfartifacts/function/' . Url::percentEncode($functionName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUdfFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an existing user-defined function (UDF) from a Realtime Compute for Apache Flink workspace.
     *
     * @param request - DeleteUdfFunctionRequest
     *
     * @returns DeleteUdfFunctionResponse
     *
     * @param string                   $namespace_
     * @param string                   $functionName
     * @param DeleteUdfFunctionRequest $request
     *
     * @return DeleteUdfFunctionResponse
     */
    public function deleteUdfFunction($namespace_, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteUdfFunctionHeaders([]);

        return $this->deleteUdfFunctionWithOptions($namespace_, $functionName, $request, $headers, $runtime);
    }

    /**
     * Deletes a variable.
     *
     * @param headers - DeleteVariableHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVariableResponse
     *
     * @param string                $namespace_
     * @param string                $name
     * @param DeleteVariableHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteVariableResponse
     */
    public function deleteVariableWithOptions($namespace_, $name, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteVariable',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/variables/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a variable.
     *
     * @returns DeleteVariableResponse
     *
     * @param string $namespace_
     * @param string $name
     *
     * @return DeleteVariableResponse
     */
    public function deleteVariable($namespace_, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteVariableHeaders([]);

        return $this->deleteVariableWithOptions($namespace_, $name, $headers, $runtime);
    }

    /**
     * deploy deploymentDraft async.
     *
     * @param request - DeployDeploymentDraftAsyncRequest
     * @param headers - DeployDeploymentDraftAsyncHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployDeploymentDraftAsyncResponse
     *
     * @param string                            $namespace_
     * @param DeployDeploymentDraftAsyncRequest $request
     * @param DeployDeploymentDraftAsyncHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DeployDeploymentDraftAsyncResponse
     */
    public function deployDeploymentDraftAsyncWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'DeployDeploymentDraftAsync',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-drafts/async-deploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeployDeploymentDraftAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * deploy deploymentDraft async.
     *
     * @param request - DeployDeploymentDraftAsyncRequest
     *
     * @returns DeployDeploymentDraftAsyncResponse
     *
     * @param string                            $namespace_
     * @param DeployDeploymentDraftAsyncRequest $request
     *
     * @return DeployDeploymentDraftAsyncResponse
     */
    public function deployDeploymentDraftAsync($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeployDeploymentDraftAsyncHeaders([]);

        return $this->deployDeploymentDraftAsyncWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 执行sql语句.
     *
     * @param request - ExecuteSqlStatementRequest
     * @param headers - ExecuteSqlStatementHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteSqlStatementResponse
     *
     * @param string                     $namespace_
     * @param ExecuteSqlStatementRequest $request
     * @param ExecuteSqlStatementHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ExecuteSqlStatementResponse
     */
    public function executeSqlStatementWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ExecuteSqlStatement',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/sql-statement/execute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行sql语句.
     *
     * @param request - ExecuteSqlStatementRequest
     *
     * @returns ExecuteSqlStatementResponse
     *
     * @param string                     $namespace_
     * @param ExecuteSqlStatementRequest $request
     *
     * @return ExecuteSqlStatementResponse
     */
    public function executeSqlStatement($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExecuteSqlStatementHeaders([]);

        return $this->executeSqlStatementWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 获取调试结果.
     *
     * @param request - FetchSqlPreviewResultsRequest
     * @param headers - FetchSqlPreviewResultsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FetchSqlPreviewResultsResponse
     *
     * @param string                        $namespace_
     * @param FetchSqlPreviewResultsRequest $request
     * @param FetchSqlPreviewResultsHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return FetchSqlPreviewResultsResponse
     */
    public function fetchSqlPreviewResultsWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->queryId) {
            @$query['queryId'] = $request->queryId;
        }

        if (null !== $request->sessionClusterName) {
            @$query['sessionClusterName'] = $request->sessionClusterName;
        }

        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FetchSqlPreviewResults',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/sql-preview/fetchResults',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FetchSqlPreviewResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取调试结果.
     *
     * @param request - FetchSqlPreviewResultsRequest
     *
     * @returns FetchSqlPreviewResultsResponse
     *
     * @param string                        $namespace_
     * @param FetchSqlPreviewResultsRequest $request
     *
     * @return FetchSqlPreviewResultsResponse
     */
    public function fetchSqlPreviewResults($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FetchSqlPreviewResultsHeaders([]);

        return $this->fetchSqlPreviewResultsWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Provides a Flink request proxy.
     *
     * @param request - FlinkApiProxyRequest
     * @param headers - FlinkApiProxyHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlinkApiProxyResponse
     *
     * @param FlinkApiProxyRequest $request
     * @param FlinkApiProxyHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return FlinkApiProxyResponse
     */
    public function flinkApiProxyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flinkApiPath) {
            @$query['flinkApiPath'] = $request->flinkApiPath;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlinkApiProxy',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/flink-ui/v2/proxy',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FlinkApiProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides a Flink request proxy.
     *
     * @param request - FlinkApiProxyRequest
     *
     * @returns FlinkApiProxyResponse
     *
     * @param FlinkApiProxyRequest $request
     *
     * @return FlinkApiProxyResponse
     */
    public function flinkApiProxy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlinkApiProxyHeaders([]);

        return $this->flinkApiProxyWithOptions($request, $headers, $runtime);
    }

    /**
     * Submits a ticket that applies for asynchronous generation of the fine-grained resources. This operation returns the ID of the ticket for you to query the asynchronous generation result.
     *
     * @param request - GenerateResourcePlanWithFlinkConfAsyncRequest
     * @param headers - GenerateResourcePlanWithFlinkConfAsyncHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateResourcePlanWithFlinkConfAsyncResponse
     *
     * @param string                                        $namespace_
     * @param string                                        $deploymentId
     * @param GenerateResourcePlanWithFlinkConfAsyncRequest $request
     * @param GenerateResourcePlanWithFlinkConfAsyncHeaders $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return GenerateResourcePlanWithFlinkConfAsyncResponse
     */
    public function generateResourcePlanWithFlinkConfAsyncWithOptions($namespace_, $deploymentId, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'GenerateResourcePlanWithFlinkConfAsync',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployments/' . Url::percentEncode($deploymentId) . '/resource-plan%3AasyncGenerate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateResourcePlanWithFlinkConfAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a ticket that applies for asynchronous generation of the fine-grained resources. This operation returns the ID of the ticket for you to query the asynchronous generation result.
     *
     * @param request - GenerateResourcePlanWithFlinkConfAsyncRequest
     *
     * @returns GenerateResourcePlanWithFlinkConfAsyncResponse
     *
     * @param string                                        $namespace_
     * @param string                                        $deploymentId
     * @param GenerateResourcePlanWithFlinkConfAsyncRequest $request
     *
     * @return GenerateResourcePlanWithFlinkConfAsyncResponse
     */
    public function generateResourcePlanWithFlinkConfAsync($namespace_, $deploymentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GenerateResourcePlanWithFlinkConfAsyncHeaders([]);

        return $this->generateResourcePlanWithFlinkConfAsyncWithOptions($namespace_, $deploymentId, $request, $headers, $runtime);
    }

    /**
     * 获取应用中的执行定时计划.
     *
     * @param request - GetAppliedScheduledPlanRequest
     * @param headers - GetAppliedScheduledPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppliedScheduledPlanResponse
     *
     * @param string                         $namespace_
     * @param GetAppliedScheduledPlanRequest $request
     * @param GetAppliedScheduledPlanHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAppliedScheduledPlanResponse
     */
    public function getAppliedScheduledPlanWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deploymentId) {
            @$query['deploymentId'] = $request->deploymentId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppliedScheduledPlan',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/scheduled-plans%3AgetExecutedScheduledPlan',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAppliedScheduledPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取应用中的执行定时计划.
     *
     * @param request - GetAppliedScheduledPlanRequest
     *
     * @returns GetAppliedScheduledPlanResponse
     *
     * @param string                         $namespace_
     * @param GetAppliedScheduledPlanRequest $request
     *
     * @return GetAppliedScheduledPlanResponse
     */
    public function getAppliedScheduledPlan($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetAppliedScheduledPlanHeaders([]);

        return $this->getAppliedScheduledPlanWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 获取catalog.
     *
     * @param request - GetCatalogsRequest
     * @param headers - GetCatalogsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCatalogsResponse
     *
     * @param string             $namespace_
     * @param GetCatalogsRequest $request
     * @param GetCatalogsHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetCatalogsResponse
     */
    public function getCatalogsWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogName) {
            @$query['catalogName'] = $request->catalogName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCatalogs',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/catalogs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCatalogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取catalog.
     *
     * @param request - GetCatalogsRequest
     *
     * @returns GetCatalogsResponse
     *
     * @param string             $namespace_
     * @param GetCatalogsRequest $request
     *
     * @return GetCatalogsResponse
     */
    public function getCatalogs($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetCatalogsHeaders([]);

        return $this->getCatalogsWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 获取database.
     *
     * @param request - GetDatabasesRequest
     * @param headers - GetDatabasesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatabasesResponse
     *
     * @param string              $namespace_
     * @param string              $catalogName
     * @param GetDatabasesRequest $request
     * @param GetDatabasesHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetDatabasesResponse
     */
    public function getDatabasesWithOptions($namespace_, $catalogName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->databaseName) {
            @$query['databaseName'] = $request->databaseName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDatabases',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/catalogs/' . Url::percentEncode($catalogName) . '/databases',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取database.
     *
     * @param request - GetDatabasesRequest
     *
     * @returns GetDatabasesResponse
     *
     * @param string              $namespace_
     * @param string              $catalogName
     * @param GetDatabasesRequest $request
     *
     * @return GetDatabasesResponse
     */
    public function getDatabases($namespace_, $catalogName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDatabasesHeaders([]);

        return $this->getDatabasesWithOptions($namespace_, $catalogName, $request, $headers, $runtime);
    }

    /**
     * get deploy deploymentDraft result.
     *
     * @param headers - GetDeployDeploymentDraftResultHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeployDeploymentDraftResultResponse
     *
     * @param string                                $namespace_
     * @param string                                $ticketId
     * @param GetDeployDeploymentDraftResultHeaders $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetDeployDeploymentDraftResultResponse
     */
    public function getDeployDeploymentDraftResultWithOptions($namespace_, $ticketId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetDeployDeploymentDraftResult',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-drafts/tickets/' . Url::percentEncode($ticketId) . '/async-deploy',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeployDeploymentDraftResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get deploy deploymentDraft result.
     *
     * @returns GetDeployDeploymentDraftResultResponse
     *
     * @param string $namespace_
     * @param string $ticketId
     *
     * @return GetDeployDeploymentDraftResultResponse
     */
    public function getDeployDeploymentDraftResult($namespace_, $ticketId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeployDeploymentDraftResultHeaders([]);

        return $this->getDeployDeploymentDraftResultWithOptions($namespace_, $ticketId, $headers, $runtime);
    }

    /**
     * Obtains the details of a deployment.
     *
     * @param headers - GetDeploymentHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeploymentResponse
     *
     * @param string               $namespace_
     * @param string               $deploymentId
     * @param GetDeploymentHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeploymentResponse
     */
    public function getDeploymentWithOptions($namespace_, $deploymentId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetDeployment',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployments/' . Url::percentEncode($deploymentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the details of a deployment.
     *
     * @returns GetDeploymentResponse
     *
     * @param string $namespace_
     * @param string $deploymentId
     *
     * @return GetDeploymentResponse
     */
    public function getDeployment($namespace_, $deploymentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeploymentHeaders([]);

        return $this->getDeploymentWithOptions($namespace_, $deploymentId, $headers, $runtime);
    }

    /**
     * get a deploymentDraft.
     *
     * @param headers - GetDeploymentDraftHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeploymentDraftResponse
     *
     * @param string                    $namespace_
     * @param string                    $deploymentDraftId
     * @param GetDeploymentDraftHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetDeploymentDraftResponse
     */
    public function getDeploymentDraftWithOptions($namespace_, $deploymentDraftId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetDeploymentDraft',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-drafts/' . Url::percentEncode($deploymentDraftId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeploymentDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get a deploymentDraft.
     *
     * @returns GetDeploymentDraftResponse
     *
     * @param string $namespace_
     * @param string $deploymentDraftId
     *
     * @return GetDeploymentDraftResponse
     */
    public function getDeploymentDraft($namespace_, $deploymentDraftId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeploymentDraftHeaders([]);

        return $this->getDeploymentDraftWithOptions($namespace_, $deploymentDraftId, $headers, $runtime);
    }

    /**
     * get deploymentDraft lock.
     *
     * @param request - GetDeploymentDraftLockRequest
     * @param headers - GetDeploymentDraftLockHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeploymentDraftLockResponse
     *
     * @param string                        $namespace_
     * @param GetDeploymentDraftLockRequest $request
     * @param GetDeploymentDraftLockHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetDeploymentDraftLockResponse
     */
    public function getDeploymentDraftLockWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deploymentDraftId) {
            @$query['deploymentDraftId'] = $request->deploymentDraftId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeploymentDraftLock',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-drafts/getLock',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeploymentDraftLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get deploymentDraft lock.
     *
     * @param request - GetDeploymentDraftLockRequest
     *
     * @returns GetDeploymentDraftLockResponse
     *
     * @param string                        $namespace_
     * @param GetDeploymentDraftLockRequest $request
     *
     * @return GetDeploymentDraftLockResponse
     */
    public function getDeploymentDraftLock($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeploymentDraftLockHeaders([]);

        return $this->getDeploymentDraftLockWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 获取运行事件.
     *
     * @param request - GetEventsRequest
     * @param headers - GetEventsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEventsResponse
     *
     * @param string           $namespace_
     * @param GetEventsRequest $request
     * @param GetEventsHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetEventsResponse
     */
    public function getEventsWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deploymentId) {
            @$query['deploymentId'] = $request->deploymentId;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEvents',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取运行事件.
     *
     * @param request - GetEventsRequest
     *
     * @returns GetEventsResponse
     *
     * @param string           $namespace_
     * @param GetEventsRequest $request
     *
     * @return GetEventsResponse
     */
    public function getEvents($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetEventsHeaders([]);

        return $this->getEventsWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * get a folder.
     *
     * @param request - GetFolderRequest
     * @param headers - GetFolderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFolderResponse
     *
     * @param string           $namespace_
     * @param GetFolderRequest $request
     * @param GetFolderHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetFolderResponse
     */
    public function getFolderWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->folderId) {
            @$query['folderId'] = $request->folderId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFolder',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/folder',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get a folder.
     *
     * @param request - GetFolderRequest
     *
     * @returns GetFolderResponse
     *
     * @param string           $namespace_
     * @param GetFolderRequest $request
     *
     * @return GetFolderResponse
     */
    public function getFolder($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFolderHeaders([]);

        return $this->getFolderWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Obtains the asynchronous generation result of fine-grained resources based on the ID of the ticket that applies for an asynchronous generation.
     *
     * @param headers - GetGenerateResourcePlanResultHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGenerateResourcePlanResultResponse
     *
     * @param string                               $namespace_
     * @param string                               $ticketId
     * @param GetGenerateResourcePlanResultHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetGenerateResourcePlanResultResponse
     */
    public function getGenerateResourcePlanResultWithOptions($namespace_, $ticketId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetGenerateResourcePlanResult',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployments/tickets/' . Url::percentEncode($ticketId) . '/resource-plan%3AasyncGenerate',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGenerateResourcePlanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the asynchronous generation result of fine-grained resources based on the ID of the ticket that applies for an asynchronous generation.
     *
     * @returns GetGenerateResourcePlanResultResponse
     *
     * @param string $namespace_
     * @param string $ticketId
     *
     * @return GetGenerateResourcePlanResultResponse
     */
    public function getGenerateResourcePlanResult($namespace_, $ticketId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetGenerateResourcePlanResultHeaders([]);

        return $this->getGenerateResourcePlanResultWithOptions($namespace_, $ticketId, $headers, $runtime);
    }

    /**
     * 查询动态更新结果.
     *
     * @param headers - GetHotUpdateJobResultHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotUpdateJobResultResponse
     *
     * @param string                       $namespace_
     * @param string                       $jobHotUpdateId
     * @param GetHotUpdateJobResultHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetHotUpdateJobResultResponse
     */
    public function getHotUpdateJobResultWithOptions($namespace_, $jobHotUpdateId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetHotUpdateJobResult',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/jobs/hot-updates/' . Url::percentEncode($jobHotUpdateId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHotUpdateJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询动态更新结果.
     *
     * @returns GetHotUpdateJobResultResponse
     *
     * @param string $namespace_
     * @param string $jobHotUpdateId
     *
     * @return GetHotUpdateJobResultResponse
     */
    public function getHotUpdateJobResult($namespace_, $jobHotUpdateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotUpdateJobResultHeaders([]);

        return $this->getHotUpdateJobResultWithOptions($namespace_, $jobHotUpdateId, $headers, $runtime);
    }

    /**
     * Obtains the details of a job.
     *
     * @param headers - GetJobHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobResponse
     *
     * @param string         $namespace_
     * @param string         $jobId
     * @param GetJobHeaders  $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($namespace_, $jobId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetJob',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/jobs/' . Url::percentEncode($jobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the details of a job.
     *
     * @returns GetJobResponse
     *
     * @param string $namespace_
     * @param string $jobId
     *
     * @return GetJobResponse
     */
    public function getJob($namespace_, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetJobHeaders([]);

        return $this->getJobWithOptions($namespace_, $jobId, $headers, $runtime);
    }

    /**
     * 获取作业诊断信息.
     *
     * @param headers - GetJobDiagnosisHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobDiagnosisResponse
     *
     * @param string                 $namespace_
     * @param string                 $deploymentId
     * @param string                 $jobId
     * @param GetJobDiagnosisHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetJobDiagnosisResponse
     */
    public function getJobDiagnosisWithOptions($namespace_, $deploymentId, $jobId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetJobDiagnosis',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployments/' . Url::percentEncode($deploymentId) . '/jobs/' . Url::percentEncode($jobId) . '/job-diagnoses/lite',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取作业诊断信息.
     *
     * @returns GetJobDiagnosisResponse
     *
     * @param string $namespace_
     * @param string $deploymentId
     * @param string $jobId
     *
     * @return GetJobDiagnosisResponse
     */
    public function getJobDiagnosis($namespace_, $deploymentId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetJobDiagnosisHeaders([]);

        return $this->getJobDiagnosisWithOptions($namespace_, $deploymentId, $jobId, $headers, $runtime);
    }

    /**
     * Obtains the latest startup logs of a job.
     *
     * @param headers - GetLatestJobStartLogHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLatestJobStartLogResponse
     *
     * @param string                      $namespace_
     * @param string                      $deploymentId
     * @param GetLatestJobStartLogHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetLatestJobStartLogResponse
     */
    public function getLatestJobStartLogWithOptions($namespace_, $deploymentId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetLatestJobStartLog',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployments/' . Url::percentEncode($deploymentId) . '/latest_jobmanager_start_log',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLatestJobStartLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the latest startup logs of a job.
     *
     * @returns GetLatestJobStartLogResponse
     *
     * @param string $namespace_
     * @param string $deploymentId
     *
     * @return GetLatestJobStartLogResponse
     */
    public function getLatestJobStartLog($namespace_, $deploymentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetLatestJobStartLogHeaders([]);

        return $this->getLatestJobStartLogWithOptions($namespace_, $deploymentId, $headers, $runtime);
    }

    /**
     * Obtains the lineage information of a deployment.
     *
     * @param request - GetLineageInfoRequest
     * @param headers - GetLineageInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLineageInfoResponse
     *
     * @param GetLineageInfoRequest $request
     * @param GetLineageInfoHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetLineageInfoResponse
     */
    public function getLineageInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'GetLineageInfo',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/meta/v2/lineage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLineageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the lineage information of a deployment.
     *
     * @param request - GetLineageInfoRequest
     *
     * @returns GetLineageInfoResponse
     *
     * @param GetLineageInfoRequest $request
     *
     * @return GetLineageInfoResponse
     */
    public function getLineageInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetLineageInfoHeaders([]);

        return $this->getLineageInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the permissions of a member.
     *
     * @param headers - GetMemberHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemberResponse
     *
     * @param string           $namespace_
     * @param string           $member
     * @param GetMemberHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetMemberResponse
     */
    public function getMemberWithOptions($namespace_, $member, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetMember',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/gateway/v2/namespaces/' . Url::percentEncode($namespace_) . '/members/' . Url::percentEncode($member) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the permissions of a member.
     *
     * @returns GetMemberResponse
     *
     * @param string $namespace_
     * @param string $member
     *
     * @return GetMemberResponse
     */
    public function getMember($namespace_, $member)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMemberHeaders([]);

        return $this->getMemberWithOptions($namespace_, $member, $headers, $runtime);
    }

    /**
     * Queries details of a savepoint and checkpoint.
     *
     * @param headers - GetSavepointHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSavepointResponse
     *
     * @param string              $namespace_
     * @param string              $savepointId
     * @param GetSavepointHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetSavepointResponse
     */
    public function getSavepointWithOptions($namespace_, $savepointId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetSavepoint',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/savepoints/' . Url::percentEncode($savepointId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSavepointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries details of a savepoint and checkpoint.
     *
     * @returns GetSavepointResponse
     *
     * @param string $namespace_
     * @param string $savepointId
     *
     * @return GetSavepointResponse
     */
    public function getSavepoint($namespace_, $savepointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSavepointHeaders([]);

        return $this->getSavepointWithOptions($namespace_, $savepointId, $headers, $runtime);
    }

    /**
     * 获取session集群.
     *
     * @param headers - GetSessionClusterHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSessionClusterResponse
     *
     * @param string                   $namespace_
     * @param string                   $sessionClusterName
     * @param GetSessionClusterHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetSessionClusterResponse
     */
    public function getSessionClusterWithOptions($namespace_, $sessionClusterName, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetSessionCluster',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/sessionclusters/' . Url::percentEncode($sessionClusterName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取session集群.
     *
     * @returns GetSessionClusterResponse
     *
     * @param string $namespace_
     * @param string $sessionClusterName
     *
     * @return GetSessionClusterResponse
     */
    public function getSessionCluster($namespace_, $sessionClusterName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSessionClusterHeaders([]);

        return $this->getSessionClusterWithOptions($namespace_, $sessionClusterName, $headers, $runtime);
    }

    /**
     * 获取table.
     *
     * @param request - GetTablesRequest
     * @param headers - GetTablesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTablesResponse
     *
     * @param string           $namespace_
     * @param string           $catalogName
     * @param string           $databaseName
     * @param GetTablesRequest $request
     * @param GetTablesHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetTablesResponse
     */
    public function getTablesWithOptions($namespace_, $catalogName, $databaseName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tableName) {
            @$query['tableName'] = $request->tableName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTables',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/catalogs/' . Url::percentEncode($catalogName) . '/databases/' . Url::percentEncode($databaseName) . '/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取table.
     *
     * @param request - GetTablesRequest
     *
     * @returns GetTablesResponse
     *
     * @param string           $namespace_
     * @param string           $catalogName
     * @param string           $databaseName
     * @param GetTablesRequest $request
     *
     * @return GetTablesResponse
     */
    public function getTables($namespace_, $catalogName, $databaseName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetTablesHeaders([]);

        return $this->getTablesWithOptions($namespace_, $catalogName, $databaseName, $request, $headers, $runtime);
    }

    /**
     * Obtains the details of the JAR or Python file that corresponds to the user-defined function (UDF) that you upload and create.
     *
     * @param request - GetUdfArtifactsRequest
     * @param headers - GetUdfArtifactsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUdfArtifactsResponse
     *
     * @param string                 $namespace_
     * @param GetUdfArtifactsRequest $request
     * @param GetUdfArtifactsHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetUdfArtifactsResponse
     */
    public function getUdfArtifactsWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->udfArtifactName) {
            @$query['udfArtifactName'] = $request->udfArtifactName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUdfArtifacts',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/udfartifacts',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUdfArtifactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the details of the JAR or Python file that corresponds to the user-defined function (UDF) that you upload and create.
     *
     * @param request - GetUdfArtifactsRequest
     *
     * @returns GetUdfArtifactsResponse
     *
     * @param string                 $namespace_
     * @param GetUdfArtifactsRequest $request
     *
     * @return GetUdfArtifactsResponse
     */
    public function getUdfArtifacts($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUdfArtifactsHeaders([]);

        return $this->getUdfArtifactsWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Dynamically updates parameters or resources of a deployment that is running.
     *
     * @param headers - HotUpdateJobHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotUpdateJobResponse
     *
     * @param string              $namespace_
     * @param string              $jobId
     * @param HotUpdateJobHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return HotUpdateJobResponse
     */
    public function hotUpdateJobWithOptions($namespace_, $jobId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'HotUpdateJob',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/jobs/' . Url::percentEncode($jobId) . '%3AhotUpdate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HotUpdateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dynamically updates parameters or resources of a deployment that is running.
     *
     * @returns HotUpdateJobResponse
     *
     * @param string $namespace_
     * @param string $jobId
     *
     * @return HotUpdateJobResponse
     */
    public function hotUpdateJob($namespace_, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotUpdateJobHeaders([]);

        return $this->hotUpdateJobWithOptions($namespace_, $jobId, $headers, $runtime);
    }

    /**
     * Obtains a list of existing custom connectors.
     *
     * @param headers - ListCustomConnectorsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomConnectorsResponse
     *
     * @param string                      $namespace_
     * @param ListCustomConnectorsHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListCustomConnectorsResponse
     */
    public function listCustomConnectorsWithOptions($namespace_, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'ListCustomConnectors',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/connectors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCustomConnectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of existing custom connectors.
     *
     * @returns ListCustomConnectorsResponse
     *
     * @param string $namespace_
     *
     * @return ListCustomConnectorsResponse
     */
    public function listCustomConnectors($namespace_)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListCustomConnectorsHeaders([]);

        return $this->listCustomConnectorsWithOptions($namespace_, $headers, $runtime);
    }

    /**
     * list deploymentDrafts.
     *
     * @param request - ListDeploymentDraftsRequest
     * @param headers - ListDeploymentDraftsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeploymentDraftsResponse
     *
     * @param string                      $namespace_
     * @param ListDeploymentDraftsRequest $request
     * @param ListDeploymentDraftsHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDeploymentDraftsResponse
     */
    public function listDeploymentDraftsWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeploymentDrafts',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-drafts',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDeploymentDraftsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list deploymentDrafts.
     *
     * @param request - ListDeploymentDraftsRequest
     *
     * @returns ListDeploymentDraftsResponse
     *
     * @param string                      $namespace_
     * @param ListDeploymentDraftsRequest $request
     *
     * @return ListDeploymentDraftsResponse
     */
    public function listDeploymentDrafts($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDeploymentDraftsHeaders([]);

        return $this->listDeploymentDraftsWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Obtains a list of clusters in which deployments can be deployed. The cluster can be a session cluster or a per-job cluster.
     *
     * @param request - ListDeploymentTargetsRequest
     * @param headers - ListDeploymentTargetsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeploymentTargetsResponse
     *
     * @param string                       $namespace_
     * @param ListDeploymentTargetsRequest $request
     * @param ListDeploymentTargetsHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListDeploymentTargetsResponse
     */
    public function listDeploymentTargetsWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeploymentTargets',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-targets',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDeploymentTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of clusters in which deployments can be deployed. The cluster can be a session cluster or a per-job cluster.
     *
     * @param request - ListDeploymentTargetsRequest
     *
     * @returns ListDeploymentTargetsResponse
     *
     * @param string                       $namespace_
     * @param ListDeploymentTargetsRequest $request
     *
     * @return ListDeploymentTargetsResponse
     */
    public function listDeploymentTargets($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDeploymentTargetsHeaders([]);

        return $this->listDeploymentTargetsWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Obtains information about all deployments.
     *
     * @param request - ListDeploymentsRequest
     * @param headers - ListDeploymentsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeploymentsResponse
     *
     * @param string                 $namespace_
     * @param ListDeploymentsRequest $request
     * @param ListDeploymentsHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeploymentsResponse
     */
    public function listDeploymentsWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creator) {
            @$query['creator'] = $request->creator;
        }

        if (null !== $request->executionMode) {
            @$query['executionMode'] = $request->executionMode;
        }

        if (null !== $request->labelKey) {
            @$query['labelKey'] = $request->labelKey;
        }

        if (null !== $request->labelValueArray) {
            @$query['labelValueArray'] = $request->labelValueArray;
        }

        if (null !== $request->modifier) {
            @$query['modifier'] = $request->modifier;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sortName) {
            @$query['sortName'] = $request->sortName;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeployments',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDeploymentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains information about all deployments.
     *
     * @param request - ListDeploymentsRequest
     *
     * @returns ListDeploymentsResponse
     *
     * @param string                 $namespace_
     * @param ListDeploymentsRequest $request
     *
     * @return ListDeploymentsResponse
     */
    public function listDeployments($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDeploymentsHeaders([]);

        return $this->listDeploymentsWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 列出有编辑权限的项目空间。
     *
     * @param request - ListEditableNamespaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEditableNamespaceResponse
     *
     * @param ListEditableNamespaceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListEditableNamespaceResponse
     */
    public function listEditableNamespaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEditableNamespace',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/gateway/v2/namespaces/editable',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEditableNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出有编辑权限的项目空间。
     *
     * @param request - ListEditableNamespaceRequest
     *
     * @returns ListEditableNamespaceResponse
     *
     * @param ListEditableNamespaceRequest $request
     *
     * @return ListEditableNamespaceResponse
     */
    public function listEditableNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEditableNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtains a list of engine versions that are supported by Realtime Compute for Apache Flink.
     *
     * @param headers - ListEngineVersionMetadataHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEngineVersionMetadataResponse
     *
     * @param ListEngineVersionMetadataHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListEngineVersionMetadataResponse
     */
    public function listEngineVersionMetadataWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'ListEngineVersionMetadata',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/engine-version-meta.json',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEngineVersionMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of engine versions that are supported by Realtime Compute for Apache Flink.
     *
     * @returns ListEngineVersionMetadataResponse
     *
     * @return ListEngineVersionMetadataResponse
     */
    public function listEngineVersionMetadata()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListEngineVersionMetadataHeaders([]);

        return $this->listEngineVersionMetadataWithOptions($headers, $runtime);
    }

    /**
     * Queries the information about all jobs in a deployment.
     *
     * @param request - ListJobsRequest
     * @param headers - ListJobsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param string          $namespace_
     * @param ListJobsRequest $request
     * @param ListJobsHeaders $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deploymentId) {
            @$query['deploymentId'] = $request->deploymentId;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sortName) {
            @$query['sortName'] = $request->sortName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/jobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all jobs in a deployment.
     *
     * @param request - ListJobsRequest
     *
     * @returns ListJobsResponse
     *
     * @param string          $namespace_
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListJobsHeaders([]);

        return $this->listJobsWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Queries the mappings between the ID and permissions of a member in a specific namespace.
     *
     * @param request - ListMembersRequest
     * @param headers - ListMembersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMembersResponse
     *
     * @param string             $namespace_
     * @param ListMembersRequest $request
     * @param ListMembersHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListMembersResponse
     */
    public function listMembersWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMembers',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/gateway/v2/namespaces/' . Url::percentEncode($namespace_) . '/members',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the mappings between the ID and permissions of a member in a specific namespace.
     *
     * @param request - ListMembersRequest
     *
     * @returns ListMembersResponse
     *
     * @param string             $namespace_
     * @param ListMembersRequest $request
     *
     * @return ListMembersResponse
     */
    public function listMembers($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListMembersHeaders([]);

        return $this->listMembersWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Obtains a list of savepoints or checkpoints.
     *
     * @param request - ListSavepointsRequest
     * @param headers - ListSavepointsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSavepointsResponse
     *
     * @param string                $namespace_
     * @param ListSavepointsRequest $request
     * @param ListSavepointsHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListSavepointsResponse
     */
    public function listSavepointsWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deploymentId) {
            @$query['deploymentId'] = $request->deploymentId;
        }

        if (null !== $request->jobId) {
            @$query['jobId'] = $request->jobId;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSavepoints',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/savepoints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSavepointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of savepoints or checkpoints.
     *
     * @param request - ListSavepointsRequest
     *
     * @returns ListSavepointsResponse
     *
     * @param string                $namespace_
     * @param ListSavepointsRequest $request
     *
     * @return ListSavepointsResponse
     */
    public function listSavepoints($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListSavepointsHeaders([]);

        return $this->listSavepointsWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 列表定时执行计划.
     *
     * @param request - ListScheduledPlanRequest
     * @param headers - ListScheduledPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduledPlanResponse
     *
     * @param string                   $namespace_
     * @param ListScheduledPlanRequest $request
     * @param ListScheduledPlanHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListScheduledPlanResponse
     */
    public function listScheduledPlanWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deploymentId) {
            @$query['deploymentId'] = $request->deploymentId;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduledPlan',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/scheduled-plans',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListScheduledPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列表定时执行计划.
     *
     * @param request - ListScheduledPlanRequest
     *
     * @returns ListScheduledPlanResponse
     *
     * @param string                   $namespace_
     * @param ListScheduledPlanRequest $request
     *
     * @return ListScheduledPlanResponse
     */
    public function listScheduledPlan($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListScheduledPlanHeaders([]);

        return $this->listScheduledPlanWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 获取作业资源变更历史.
     *
     * @param request - ListScheduledPlanExecutedHistoryRequest
     * @param headers - ListScheduledPlanExecutedHistoryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduledPlanExecutedHistoryResponse
     *
     * @param string                                  $namespace_
     * @param ListScheduledPlanExecutedHistoryRequest $request
     * @param ListScheduledPlanExecutedHistoryHeaders $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ListScheduledPlanExecutedHistoryResponse
     */
    public function listScheduledPlanExecutedHistoryWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deploymentId) {
            @$query['deploymentId'] = $request->deploymentId;
        }

        if (null !== $request->origin) {
            @$query['origin'] = $request->origin;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduledPlanExecutedHistory',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/job-resource-upgradings',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListScheduledPlanExecutedHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取作业资源变更历史.
     *
     * @param request - ListScheduledPlanExecutedHistoryRequest
     *
     * @returns ListScheduledPlanExecutedHistoryResponse
     *
     * @param string                                  $namespace_
     * @param ListScheduledPlanExecutedHistoryRequest $request
     *
     * @return ListScheduledPlanExecutedHistoryResponse
     */
    public function listScheduledPlanExecutedHistory($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListScheduledPlanExecutedHistoryHeaders([]);

        return $this->listScheduledPlanExecutedHistoryWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 列举session集群.
     *
     * @param headers - ListSessionClustersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSessionClustersResponse
     *
     * @param string                     $namespace_
     * @param ListSessionClustersHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListSessionClustersResponse
     */
    public function listSessionClustersWithOptions($namespace_, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'ListSessionClusters',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/sessionclusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSessionClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举session集群.
     *
     * @returns ListSessionClustersResponse
     *
     * @param string $namespace_
     *
     * @return ListSessionClustersResponse
     */
    public function listSessionClusters($namespace_)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListSessionClustersHeaders([]);

        return $this->listSessionClustersWithOptions($namespace_, $headers, $runtime);
    }

    /**
     * Obtains a list of variables.
     *
     * @param request - ListVariablesRequest
     * @param headers - ListVariablesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVariablesResponse
     *
     * @param string               $namespace_
     * @param ListVariablesRequest $request
     * @param ListVariablesHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListVariablesResponse
     */
    public function listVariablesWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVariables',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/variables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListVariablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of variables.
     *
     * @param request - ListVariablesRequest
     *
     * @returns ListVariablesResponse
     *
     * @param string               $namespace_
     * @param ListVariablesRequest $request
     *
     * @return ListVariablesResponse
     */
    public function listVariables($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListVariablesHeaders([]);

        return $this->listVariablesWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Registers a custom connector in a namespace. The registered custom connector can be used in SQL statements.
     *
     * @param request - RegisterCustomConnectorRequest
     * @param headers - RegisterCustomConnectorHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterCustomConnectorResponse
     *
     * @param string                         $namespace_
     * @param RegisterCustomConnectorRequest $request
     * @param RegisterCustomConnectorHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return RegisterCustomConnectorResponse
     */
    public function registerCustomConnectorWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jarUrl) {
            @$query['jarUrl'] = $request->jarUrl;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterCustomConnector',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/connectors%3Aregister',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RegisterCustomConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Registers a custom connector in a namespace. The registered custom connector can be used in SQL statements.
     *
     * @param request - RegisterCustomConnectorRequest
     *
     * @returns RegisterCustomConnectorResponse
     *
     * @param string                         $namespace_
     * @param RegisterCustomConnectorRequest $request
     *
     * @return RegisterCustomConnectorResponse
     */
    public function registerCustomConnector($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RegisterCustomConnectorHeaders([]);

        return $this->registerCustomConnectorWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Registers specific or all of the user-defined functions (UDFs) that are parsed from the JAR files. The registered functions can be used in SQL statements.
     *
     * @param request - RegisterUdfFunctionRequest
     * @param headers - RegisterUdfFunctionHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterUdfFunctionResponse
     *
     * @param string                     $namespace_
     * @param RegisterUdfFunctionRequest $request
     * @param RegisterUdfFunctionHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RegisterUdfFunctionResponse
     */
    public function registerUdfFunctionWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->className) {
            @$query['className'] = $request->className;
        }

        if (null !== $request->functionName) {
            @$query['functionName'] = $request->functionName;
        }

        if (null !== $request->udfArtifactName) {
            @$query['udfArtifactName'] = $request->udfArtifactName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterUdfFunction',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/udfartifacts/function%3AregisterUdfFunction',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RegisterUdfFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Registers specific or all of the user-defined functions (UDFs) that are parsed from the JAR files. The registered functions can be used in SQL statements.
     *
     * @param request - RegisterUdfFunctionRequest
     *
     * @returns RegisterUdfFunctionResponse
     *
     * @param string                     $namespace_
     * @param RegisterUdfFunctionRequest $request
     *
     * @return RegisterUdfFunctionResponse
     */
    public function registerUdfFunction($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RegisterUdfFunctionHeaders([]);

        return $this->registerUdfFunctionWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Creates and starts a job.
     *
     * @deprecated OpenAPI StartJob is deprecated
     *
     * @param request - StartJobRequest
     * @param headers - StartJobHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartJobResponse
     *
     * @param string          $namespace_
     * @param StartJobRequest $request
     * @param StartJobHeaders $headers
     * @param RuntimeOptions  $runtime
     *
     * @return StartJobResponse
     */
    public function startJobWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'StartJob',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/jobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Creates and starts a job.
     *
     * @deprecated OpenAPI StartJob is deprecated
     *
     * @param request - StartJobRequest
     *
     * @returns StartJobResponse
     *
     * @param string          $namespace_
     * @param StartJobRequest $request
     *
     * @return StartJobResponse
     */
    public function startJob($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartJobHeaders([]);

        return $this->startJobWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Starts a job.
     *
     * @param request - StartJobWithParamsRequest
     * @param headers - StartJobWithParamsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartJobWithParamsResponse
     *
     * @param string                    $namespace_
     * @param StartJobWithParamsRequest $request
     * @param StartJobWithParamsHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return StartJobWithParamsResponse
     */
    public function startJobWithParamsWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'StartJobWithParams',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/jobs%3Astart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartJobWithParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a job.
     *
     * @param request - StartJobWithParamsRequest
     *
     * @returns StartJobWithParamsResponse
     *
     * @param string                    $namespace_
     * @param StartJobWithParamsRequest $request
     *
     * @return StartJobWithParamsResponse
     */
    public function startJobWithParams($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartJobWithParamsHeaders([]);

        return $this->startJobWithParamsWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 启动session集群.
     *
     * @param headers - StartSessionClusterHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartSessionClusterResponse
     *
     * @param string                     $namespace_
     * @param string                     $sessionClusterName
     * @param StartSessionClusterHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return StartSessionClusterResponse
     */
    public function startSessionClusterWithOptions($namespace_, $sessionClusterName, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'StartSessionCluster',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/sessionclusters/' . Url::percentEncode($sessionClusterName) . '%3Astart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动session集群.
     *
     * @returns StartSessionClusterResponse
     *
     * @param string $namespace_
     * @param string $sessionClusterName
     *
     * @return StartSessionClusterResponse
     */
    public function startSessionCluster($namespace_, $sessionClusterName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartSessionClusterHeaders([]);

        return $this->startSessionClusterWithOptions($namespace_, $sessionClusterName, $headers, $runtime);
    }

    /**
     * 停止应用执行定时计划.
     *
     * @param headers - StopApplyScheduledPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopApplyScheduledPlanResponse
     *
     * @param string                        $namespace_
     * @param string                        $scheduledPlanId
     * @param StopApplyScheduledPlanHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return StopApplyScheduledPlanResponse
     */
    public function stopApplyScheduledPlanWithOptions($namespace_, $scheduledPlanId, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'StopApplyScheduledPlan',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/scheduled-plans/' . Url::percentEncode($scheduledPlanId) . '%3Astop',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopApplyScheduledPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止应用执行定时计划.
     *
     * @returns StopApplyScheduledPlanResponse
     *
     * @param string $namespace_
     * @param string $scheduledPlanId
     *
     * @return StopApplyScheduledPlanResponse
     */
    public function stopApplyScheduledPlan($namespace_, $scheduledPlanId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StopApplyScheduledPlanHeaders([]);

        return $this->stopApplyScheduledPlanWithOptions($namespace_, $scheduledPlanId, $headers, $runtime);
    }

    /**
     * Stops a job.
     *
     * @param request - StopJobRequest
     * @param headers - StopJobHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopJobResponse
     *
     * @param string         $namespace_
     * @param string         $jobId
     * @param StopJobRequest $request
     * @param StopJobHeaders $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopJobResponse
     */
    public function stopJobWithOptions($namespace_, $jobId, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'StopJob',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/jobs/' . Url::percentEncode($jobId) . '%3Astop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a job.
     *
     * @param request - StopJobRequest
     *
     * @returns StopJobResponse
     *
     * @param string         $namespace_
     * @param string         $jobId
     * @param StopJobRequest $request
     *
     * @return StopJobResponse
     */
    public function stopJob($namespace_, $jobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StopJobHeaders([]);

        return $this->stopJobWithOptions($namespace_, $jobId, $request, $headers, $runtime);
    }

    /**
     * 停止session集群.
     *
     * @param headers - StopSessionClusterHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopSessionClusterResponse
     *
     * @param string                    $namespace_
     * @param string                    $sessionClusterName
     * @param StopSessionClusterHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return StopSessionClusterResponse
     */
    public function stopSessionClusterWithOptions($namespace_, $sessionClusterName, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'StopSessionCluster',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/sessionclusters/' . Url::percentEncode($sessionClusterName) . '%3Astop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止session集群.
     *
     * @returns StopSessionClusterResponse
     *
     * @param string $namespace_
     * @param string $sessionClusterName
     *
     * @return StopSessionClusterResponse
     */
    public function stopSessionCluster($namespace_, $sessionClusterName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StopSessionClusterHeaders([]);

        return $this->stopSessionClusterWithOptions($namespace_, $sessionClusterName, $headers, $runtime);
    }

    /**
     * 提交sql调试.
     *
     * @param request - SubmitSqlPreviewRequest
     * @param headers - SubmitSqlPreviewHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSqlPreviewResponse
     *
     * @param string                  $namespace_
     * @param SubmitSqlPreviewRequest $request
     * @param SubmitSqlPreviewHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitSqlPreviewResponse
     */
    public function submitSqlPreviewWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sessionClusterName) {
            @$query['sessionClusterName'] = $request->sessionClusterName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'SubmitSqlPreview',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/sql-preview/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitSqlPreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交sql调试.
     *
     * @param request - SubmitSqlPreviewRequest
     *
     * @returns SubmitSqlPreviewResponse
     *
     * @param string                  $namespace_
     * @param SubmitSqlPreviewRequest $request
     *
     * @return SubmitSqlPreviewResponse
     */
    public function submitSqlPreview($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SubmitSqlPreviewHeaders([]);

        return $this->submitSqlPreviewWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * Updates information about a deployment.
     *
     * @param request - UpdateDeploymentRequest
     * @param headers - UpdateDeploymentHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeploymentResponse
     *
     * @param string                  $namespace_
     * @param string                  $deploymentId
     * @param UpdateDeploymentRequest $request
     * @param UpdateDeploymentHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDeploymentResponse
     */
    public function updateDeploymentWithOptions($namespace_, $deploymentId, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateDeployment',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployments/' . Url::percentEncode($deploymentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates information about a deployment.
     *
     * @param request - UpdateDeploymentRequest
     *
     * @returns UpdateDeploymentResponse
     *
     * @param string                  $namespace_
     * @param string                  $deploymentId
     * @param UpdateDeploymentRequest $request
     *
     * @return UpdateDeploymentResponse
     */
    public function updateDeployment($namespace_, $deploymentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateDeploymentHeaders([]);

        return $this->updateDeploymentWithOptions($namespace_, $deploymentId, $request, $headers, $runtime);
    }

    /**
     * update a deploymentDraft.
     *
     * @param request - UpdateDeploymentDraftRequest
     * @param headers - UpdateDeploymentDraftHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeploymentDraftResponse
     *
     * @param string                       $namespace_
     * @param string                       $deploymentDraftId
     * @param UpdateDeploymentDraftRequest $request
     * @param UpdateDeploymentDraftHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDeploymentDraftResponse
     */
    public function updateDeploymentDraftWithOptions($namespace_, $deploymentDraftId, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateDeploymentDraft',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-drafts/' . Url::percentEncode($deploymentDraftId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDeploymentDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * update a deploymentDraft.
     *
     * @param request - UpdateDeploymentDraftRequest
     *
     * @returns UpdateDeploymentDraftResponse
     *
     * @param string                       $namespace_
     * @param string                       $deploymentDraftId
     * @param UpdateDeploymentDraftRequest $request
     *
     * @return UpdateDeploymentDraftResponse
     */
    public function updateDeploymentDraft($namespace_, $deploymentDraftId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateDeploymentDraftHeaders([]);

        return $this->updateDeploymentDraftWithOptions($namespace_, $deploymentDraftId, $request, $headers, $runtime);
    }

    /**
     * 修改deploymentTarget.
     *
     * @param request - UpdateDeploymentTargetRequest
     * @param headers - UpdateDeploymentTargetHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeploymentTargetResponse
     *
     * @param string                        $namespace_
     * @param string                        $deploymentTargetName
     * @param UpdateDeploymentTargetRequest $request
     * @param UpdateDeploymentTargetHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateDeploymentTargetResponse
     */
    public function updateDeploymentTargetWithOptions($namespace_, $deploymentTargetName, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateDeploymentTarget',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-targets/' . Url::percentEncode($deploymentTargetName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDeploymentTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改deploymentTarget.
     *
     * @param request - UpdateDeploymentTargetRequest
     *
     * @returns UpdateDeploymentTargetResponse
     *
     * @param string                        $namespace_
     * @param string                        $deploymentTargetName
     * @param UpdateDeploymentTargetRequest $request
     *
     * @return UpdateDeploymentTargetResponse
     */
    public function updateDeploymentTarget($namespace_, $deploymentTargetName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateDeploymentTargetHeaders([]);

        return $this->updateDeploymentTargetWithOptions($namespace_, $deploymentTargetName, $request, $headers, $runtime);
    }

    /**
     * 更新部署目标.
     *
     * @param request - UpdateDeploymentTargetV2Request
     * @param headers - UpdateDeploymentTargetV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeploymentTargetV2Response
     *
     * @param string                          $namespace_
     * @param string                          $deploymentTargetName
     * @param UpdateDeploymentTargetV2Request $request
     * @param UpdateDeploymentTargetV2Headers $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateDeploymentTargetV2Response
     */
    public function updateDeploymentTargetV2WithOptions($namespace_, $deploymentTargetName, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateDeploymentTargetV2',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/deployment-targets/support-elastic/' . Url::percentEncode($deploymentTargetName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDeploymentTargetV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新部署目标.
     *
     * @param request - UpdateDeploymentTargetV2Request
     *
     * @returns UpdateDeploymentTargetV2Response
     *
     * @param string                          $namespace_
     * @param string                          $deploymentTargetName
     * @param UpdateDeploymentTargetV2Request $request
     *
     * @return UpdateDeploymentTargetV2Response
     */
    public function updateDeploymentTargetV2($namespace_, $deploymentTargetName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateDeploymentTargetV2Headers([]);

        return $this->updateDeploymentTargetV2WithOptions($namespace_, $deploymentTargetName, $request, $headers, $runtime);
    }

    /**
     * update a folder.
     *
     * @param request - UpdateFolderRequest
     * @param headers - UpdateFolderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFolderResponse
     *
     * @param string              $namespace_
     * @param string              $folderId
     * @param UpdateFolderRequest $request
     * @param UpdateFolderHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateFolderResponse
     */
    public function updateFolderWithOptions($namespace_, $folderId, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateFolder',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/folder/' . Url::percentEncode($folderId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * update a folder.
     *
     * @param request - UpdateFolderRequest
     *
     * @returns UpdateFolderResponse
     *
     * @param string              $namespace_
     * @param string              $folderId
     * @param UpdateFolderRequest $request
     *
     * @return UpdateFolderResponse
     */
    public function updateFolder($namespace_, $folderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateFolderHeaders([]);

        return $this->updateFolderWithOptions($namespace_, $folderId, $request, $headers, $runtime);
    }

    /**
     * Updates the permissions of one or more members in a specific namespace.
     *
     * @param request - UpdateMemberRequest
     * @param headers - UpdateMemberHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemberResponse
     *
     * @param string              $namespace_
     * @param UpdateMemberRequest $request
     * @param UpdateMemberHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateMemberResponse
     */
    public function updateMemberWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateMember',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/gateway/v2/namespaces/' . Url::percentEncode($namespace_) . '/members',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the permissions of one or more members in a specific namespace.
     *
     * @param request - UpdateMemberRequest
     *
     * @returns UpdateMemberResponse
     *
     * @param string              $namespace_
     * @param UpdateMemberRequest $request
     *
     * @return UpdateMemberResponse
     */
    public function updateMember($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateMemberHeaders([]);

        return $this->updateMemberWithOptions($namespace_, $request, $headers, $runtime);
    }

    /**
     * 更新定时执行计划.
     *
     * @param request - UpdateScheduledPlanRequest
     * @param headers - UpdateScheduledPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateScheduledPlanResponse
     *
     * @param string                     $namespace_
     * @param string                     $scheduledPlanId
     * @param UpdateScheduledPlanRequest $request
     * @param UpdateScheduledPlanHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateScheduledPlanResponse
     */
    public function updateScheduledPlanWithOptions($namespace_, $scheduledPlanId, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateScheduledPlan',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/scheduled-plans/' . Url::percentEncode($scheduledPlanId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateScheduledPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新定时执行计划.
     *
     * @param request - UpdateScheduledPlanRequest
     *
     * @returns UpdateScheduledPlanResponse
     *
     * @param string                     $namespace_
     * @param string                     $scheduledPlanId
     * @param UpdateScheduledPlanRequest $request
     *
     * @return UpdateScheduledPlanResponse
     */
    public function updateScheduledPlan($namespace_, $scheduledPlanId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateScheduledPlanHeaders([]);

        return $this->updateScheduledPlanWithOptions($namespace_, $scheduledPlanId, $request, $headers, $runtime);
    }

    /**
     * 更新session集群.
     *
     * @param request - UpdateSessionClusterRequest
     * @param headers - UpdateSessionClusterHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSessionClusterResponse
     *
     * @param string                      $namespace_
     * @param string                      $sessionClusterName
     * @param UpdateSessionClusterRequest $request
     * @param UpdateSessionClusterHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateSessionClusterResponse
     */
    public function updateSessionClusterWithOptions($namespace_, $sessionClusterName, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateSessionCluster',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/sessionclusters/' . Url::percentEncode($sessionClusterName) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新session集群.
     *
     * @param request - UpdateSessionClusterRequest
     *
     * @returns UpdateSessionClusterResponse
     *
     * @param string                      $namespace_
     * @param string                      $sessionClusterName
     * @param UpdateSessionClusterRequest $request
     *
     * @return UpdateSessionClusterResponse
     */
    public function updateSessionCluster($namespace_, $sessionClusterName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateSessionClusterHeaders([]);

        return $this->updateSessionClusterWithOptions($namespace_, $sessionClusterName, $request, $headers, $runtime);
    }

    /**
     * Updates the JAR file of the user-defined function (UDF) that you create.
     *
     * @param request - UpdateUdfArtifactRequest
     * @param headers - UpdateUdfArtifactHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUdfArtifactResponse
     *
     * @param string                   $namespace_
     * @param string                   $udfArtifactName
     * @param UpdateUdfArtifactRequest $request
     * @param UpdateUdfArtifactHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateUdfArtifactResponse
     */
    public function updateUdfArtifactWithOptions($namespace_, $udfArtifactName, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateUdfArtifact',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/udfartifacts/' . Url::percentEncode($udfArtifactName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateUdfArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the JAR file of the user-defined function (UDF) that you create.
     *
     * @param request - UpdateUdfArtifactRequest
     *
     * @returns UpdateUdfArtifactResponse
     *
     * @param string                   $namespace_
     * @param string                   $udfArtifactName
     * @param UpdateUdfArtifactRequest $request
     *
     * @return UpdateUdfArtifactResponse
     */
    public function updateUdfArtifact($namespace_, $udfArtifactName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateUdfArtifactHeaders([]);

        return $this->updateUdfArtifactWithOptions($namespace_, $udfArtifactName, $request, $headers, $runtime);
    }

    /**
     * 更新秘钥.
     *
     * @param request - UpdateVariableRequest
     * @param headers - UpdateVariableHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVariableResponse
     *
     * @param string                $namespace_
     * @param string                $name
     * @param UpdateVariableRequest $request
     * @param UpdateVariableHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateVariableResponse
     */
    public function updateVariableWithOptions($namespace_, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateVariable',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/variables/' . Url::percentEncode($name) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新秘钥.
     *
     * @param request - UpdateVariableRequest
     *
     * @returns UpdateVariableResponse
     *
     * @param string                $namespace_
     * @param string                $name
     * @param UpdateVariableRequest $request
     *
     * @return UpdateVariableResponse
     */
    public function updateVariable($namespace_, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateVariableHeaders([]);

        return $this->updateVariableWithOptions($namespace_, $name, $request, $headers, $runtime);
    }

    /**
     * Verifies the code of an SQL deployment.
     *
     * @param request - ValidateSqlStatementRequest
     * @param headers - ValidateSqlStatementHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateSqlStatementResponse
     *
     * @param string                      $namespace_
     * @param ValidateSqlStatementRequest $request
     * @param ValidateSqlStatementHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ValidateSqlStatementResponse
     */
    public function validateSqlStatementWithOptions($namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->workspace) {
            @$realHeaders['workspace'] = '' . $headers->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ValidateSqlStatement',
            'version' => '2022-07-18',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/namespaces/' . Url::percentEncode($namespace_) . '/sql-statement/validate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ValidateSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the code of an SQL deployment.
     *
     * @param request - ValidateSqlStatementRequest
     *
     * @returns ValidateSqlStatementResponse
     *
     * @param string                      $namespace_
     * @param ValidateSqlStatementRequest $request
     *
     * @return ValidateSqlStatementResponse
     */
    public function validateSqlStatement($namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ValidateSqlStatementHeaders([]);

        return $this->validateSqlStatementWithOptions($namespace_, $request, $headers, $runtime);
    }
}
