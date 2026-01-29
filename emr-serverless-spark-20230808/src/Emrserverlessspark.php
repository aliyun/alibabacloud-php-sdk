<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\AddMembersRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\AddMembersResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CancelJobRunRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CancelJobRunResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CancelKyuubiSparkApplicationRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CancelKyuubiSparkApplicationResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateKyuubiServiceRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateKyuubiServiceResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateKyuubiTokenRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateKyuubiTokenResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateLivyComputeRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateLivyComputeResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateLivyComputeTokenRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateLivyComputeTokenResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleShrinkRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateRayClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateRayClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSessionClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSessionClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSqlStatementRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSqlStatementResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\DeleteKyuubiServiceResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\DeleteKyuubiTokenRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\DeleteKyuubiTokenResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\DeleteLivyComputeRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\DeleteLivyComputeResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\DeleteLivyComputeTokenRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\DeleteLivyComputeTokenResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\DeleteRayClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\EditWorkspaceQueueRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\EditWorkspaceQueueResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GenerateTaskCodesRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GenerateTaskCodesResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetCuHoursRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetCuHoursResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetDoctorApplicationRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetDoctorApplicationResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetKyuubiServiceResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetKyuubiTokenRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetKyuubiTokenResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetLivyComputeRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetLivyComputeResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetLivyComputeTokenRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetLivyComputeTokenResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRayClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRunConfigurationRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRunConfigurationResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSqlStatementRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSqlStatementResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetTemplateRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetTemplateResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GrantRoleToUsersRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GrantRoleToUsersResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListCatalogsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListCatalogsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobExecutorsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobExecutorsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsShrinkRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiServicesResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiSparkApplicationsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiSparkApplicationsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiSparkApplicationsShrinkRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiTokenRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiTokenResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLivyComputeRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLivyComputeResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLivyComputeSessionsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLivyComputeSessionsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLivyComputeTokenRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLivyComputeTokenResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListMembersRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListMembersResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRayClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRayClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListReleaseVersionsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListReleaseVersionsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSqlStatementContentsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSqlStatementContentsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListTemplateRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListTemplateResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\RefreshLivyComputeTokenRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\RefreshLivyComputeTokenResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartKyuubiServiceResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartLivyComputeRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartLivyComputeResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartProcessInstanceRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartProcessInstanceResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartRayClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartRayClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartSessionClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartSessionClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StopKyuubiServiceResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StopLivyComputeRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StopLivyComputeResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StopRayClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StopRayClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StopSessionClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StopSessionClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\TerminateSqlStatementRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\TerminateSqlStatementResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateKyuubiServiceRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateKyuubiServiceResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateKyuubiTokenRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateKyuubiTokenResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateLivyComputeRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateLivyComputeResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleShrinkRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateRayClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateRayClusterResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Emrserverlessspark extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('emr-serverless-spark', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds a RAM user or RAM role to a workspace as a member.
     *
     * @param request - AddMembersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMembersResponse
     *
     * @param AddMembersRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddMembersResponse
     */
    public function addMembersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->memberArns) {
            @$body['memberArns'] = $request->memberArns;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddMembers',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/auth/members',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a RAM user or RAM role to a workspace as a member.
     *
     * @param request - AddMembersRequest
     *
     * @returns AddMembersResponse
     *
     * @param AddMembersRequest $request
     *
     * @return AddMembersResponse
     */
    public function addMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * Terminates a Spark job.
     *
     * @param request - CancelJobRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelJobRunResponse
     *
     * @param string              $workspaceId
     * @param string              $jobRunId
     * @param CancelJobRunRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CancelJobRunResponse
     */
    public function cancelJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelJobRun',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/jobRuns/' . Url::percentEncode($jobRunId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates a Spark job.
     *
     * @param request - CancelJobRunRequest
     *
     * @returns CancelJobRunResponse
     *
     * @param string              $workspaceId
     * @param string              $jobRunId
     * @param CancelJobRunRequest $request
     *
     * @return CancelJobRunResponse
     */
    public function cancelJobRun($workspaceId, $jobRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime);
    }

    /**
     * CancelKyuubiSparkApplication.
     *
     * @param request - CancelKyuubiSparkApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelKyuubiSparkApplicationResponse
     *
     * @param string                              $workspaceId
     * @param string                              $kyuubiServiceId
     * @param string                              $applicationId
     * @param CancelKyuubiSparkApplicationRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelKyuubiSparkApplicationResponse
     */
    public function cancelKyuubiSparkApplicationWithOptions($workspaceId, $kyuubiServiceId, $applicationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelKyuubiSparkApplication',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/kyuubi/' . Url::percentEncode($workspaceId) . '/' . Url::percentEncode($kyuubiServiceId) . '/application/' . Url::percentEncode($applicationId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelKyuubiSparkApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CancelKyuubiSparkApplication.
     *
     * @param request - CancelKyuubiSparkApplicationRequest
     *
     * @returns CancelKyuubiSparkApplicationResponse
     *
     * @param string                              $workspaceId
     * @param string                              $kyuubiServiceId
     * @param string                              $applicationId
     * @param CancelKyuubiSparkApplicationRequest $request
     *
     * @return CancelKyuubiSparkApplicationResponse
     */
    public function cancelKyuubiSparkApplication($workspaceId, $kyuubiServiceId, $applicationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelKyuubiSparkApplicationWithOptions($workspaceId, $kyuubiServiceId, $applicationId, $request, $headers, $runtime);
    }

    /**
     * CreateKyuubiService.
     *
     * @param request - CreateKyuubiServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKyuubiServiceResponse
     *
     * @param string                     $workspaceId
     * @param CreateKyuubiServiceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateKyuubiServiceResponse
     */
    public function createKyuubiServiceWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->computeInstance) {
            @$body['computeInstance'] = $request->computeInstance;
        }

        if (null !== $request->kyuubiConfigs) {
            @$body['kyuubiConfigs'] = $request->kyuubiConfigs;
        }

        if (null !== $request->kyuubiReleaseVersion) {
            @$body['kyuubiReleaseVersion'] = $request->kyuubiReleaseVersion;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->publicEndpointEnabled) {
            @$body['publicEndpointEnabled'] = $request->publicEndpointEnabled;
        }

        if (null !== $request->queue) {
            @$body['queue'] = $request->queue;
        }

        if (null !== $request->releaseVersion) {
            @$body['releaseVersion'] = $request->releaseVersion;
        }

        if (null !== $request->replica) {
            @$body['replica'] = $request->replica;
        }

        if (null !== $request->sparkConfigs) {
            @$body['sparkConfigs'] = $request->sparkConfigs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKyuubiService',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/kyuubi/' . Url::percentEncode($workspaceId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateKyuubiServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateKyuubiService.
     *
     * @param request - CreateKyuubiServiceRequest
     *
     * @returns CreateKyuubiServiceResponse
     *
     * @param string                     $workspaceId
     * @param CreateKyuubiServiceRequest $request
     *
     * @return CreateKyuubiServiceResponse
     */
    public function createKyuubiService($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKyuubiServiceWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建kyuubi的token.
     *
     * @param request - CreateKyuubiTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKyuubiTokenResponse
     *
     * @param string                   $workspaceId
     * @param string                   $kyuubiServiceId
     * @param CreateKyuubiTokenRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateKyuubiTokenResponse
     */
    public function createKyuubiTokenWithOptions($workspaceId, $kyuubiServiceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->autoExpireConfiguration) {
            @$body['autoExpireConfiguration'] = $request->autoExpireConfiguration;
        }

        if (null !== $request->memberArns) {
            @$body['memberArns'] = $request->memberArns;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->token) {
            @$body['token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKyuubiToken',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/kyuubiService/' . Url::percentEncode($kyuubiServiceId) . '/token',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateKyuubiTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建kyuubi的token.
     *
     * @param request - CreateKyuubiTokenRequest
     *
     * @returns CreateKyuubiTokenResponse
     *
     * @param string                   $workspaceId
     * @param string                   $kyuubiServiceId
     * @param CreateKyuubiTokenRequest $request
     *
     * @return CreateKyuubiTokenResponse
     */
    public function createKyuubiToken($workspaceId, $kyuubiServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKyuubiTokenWithOptions($workspaceId, $kyuubiServiceId, $request, $headers, $runtime);
    }

    /**
     * 创建Livy compute.
     *
     * @param request - CreateLivyComputeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLivyComputeResponse
     *
     * @param string                   $workspaceBizId
     * @param CreateLivyComputeRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateLivyComputeResponse
     */
    public function createLivyComputeWithOptions($workspaceBizId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->authType) {
            @$body['authType'] = $request->authType;
        }

        if (null !== $request->autoStartConfiguration) {
            @$body['autoStartConfiguration'] = $request->autoStartConfiguration;
        }

        if (null !== $request->autoStopConfiguration) {
            @$body['autoStopConfiguration'] = $request->autoStopConfiguration;
        }

        if (null !== $request->cpuLimit) {
            @$body['cpuLimit'] = $request->cpuLimit;
        }

        if (null !== $request->displayReleaseVersion) {
            @$body['displayReleaseVersion'] = $request->displayReleaseVersion;
        }

        if (null !== $request->enablePublic) {
            @$body['enablePublic'] = $request->enablePublic;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->fusion) {
            @$body['fusion'] = $request->fusion;
        }

        if (null !== $request->livyServerConf) {
            @$body['livyServerConf'] = $request->livyServerConf;
        }

        if (null !== $request->livyVersion) {
            @$body['livyVersion'] = $request->livyVersion;
        }

        if (null !== $request->memoryLimit) {
            @$body['memoryLimit'] = $request->memoryLimit;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->networkName) {
            @$body['networkName'] = $request->networkName;
        }

        if (null !== $request->queueName) {
            @$body['queueName'] = $request->queueName;
        }

        if (null !== $request->releaseVersion) {
            @$body['releaseVersion'] = $request->releaseVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLivyCompute',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/livycompute',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLivyComputeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Livy compute.
     *
     * @param request - CreateLivyComputeRequest
     *
     * @returns CreateLivyComputeResponse
     *
     * @param string                   $workspaceBizId
     * @param CreateLivyComputeRequest $request
     *
     * @return CreateLivyComputeResponse
     */
    public function createLivyCompute($workspaceBizId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLivyComputeWithOptions($workspaceBizId, $request, $headers, $runtime);
    }

    /**
     * 创建Livy Compute的token.
     *
     * @param request - CreateLivyComputeTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLivyComputeTokenResponse
     *
     * @param string                        $workspaceBizId
     * @param string                        $livyComputeId
     * @param CreateLivyComputeTokenRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateLivyComputeTokenResponse
     */
    public function createLivyComputeTokenWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->autoExpireConfiguration) {
            @$body['autoExpireConfiguration'] = $request->autoExpireConfiguration;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->token) {
            @$body['token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLivyComputeToken',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/livycompute/' . Url::percentEncode($livyComputeId) . '/token',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLivyComputeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Livy Compute的token.
     *
     * @param request - CreateLivyComputeTokenRequest
     *
     * @returns CreateLivyComputeTokenResponse
     *
     * @param string                        $workspaceBizId
     * @param string                        $livyComputeId
     * @param CreateLivyComputeTokenRequest $request
     *
     * @return CreateLivyComputeTokenResponse
     */
    public function createLivyComputeToken($workspaceBizId, $livyComputeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLivyComputeTokenWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime);
    }

    /**
     * Creates a workflow.
     *
     * @param tmpReq - CreateProcessDefinitionWithScheduleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProcessDefinitionWithScheduleResponse
     *
     * @param string                                     $bizId
     * @param CreateProcessDefinitionWithScheduleRequest $tmpReq
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateProcessDefinitionWithScheduleResponse
     */
    public function createProcessDefinitionWithScheduleWithOptions($bizId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateProcessDefinitionWithScheduleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->globalParams) {
            $request->globalParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->globalParams, 'globalParams', 'json');
        }

        if (null !== $tmpReq->schedule) {
            $request->scheduleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->schedule, 'schedule', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        if (null !== $tmpReq->taskDefinitionJson) {
            $request->taskDefinitionJsonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskDefinitionJson, 'taskDefinitionJson', 'json');
        }

        if (null !== $tmpReq->taskRelationJson) {
            $request->taskRelationJsonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskRelationJson, 'taskRelationJson', 'json');
        }

        $query = [];
        if (null !== $request->alertEmailAddress) {
            @$query['alertEmailAddress'] = $request->alertEmailAddress;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->executionType) {
            @$query['executionType'] = $request->executionType;
        }

        if (null !== $request->globalParamsShrink) {
            @$query['globalParams'] = $request->globalParamsShrink;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->productNamespace) {
            @$query['productNamespace'] = $request->productNamespace;
        }

        if (null !== $request->publish) {
            @$query['publish'] = $request->publish;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->resourceQueue) {
            @$query['resourceQueue'] = $request->resourceQueue;
        }

        if (null !== $request->retryTimes) {
            @$query['retryTimes'] = $request->retryTimes;
        }

        if (null !== $request->runAs) {
            @$query['runAs'] = $request->runAs;
        }

        if (null !== $request->scheduleShrink) {
            @$query['schedule'] = $request->scheduleShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskDefinitionJsonShrink) {
            @$query['taskDefinitionJson'] = $request->taskDefinitionJsonShrink;
        }

        if (null !== $request->taskParallelism) {
            @$query['taskParallelism'] = $request->taskParallelism;
        }

        if (null !== $request->taskRelationJsonShrink) {
            @$query['taskRelationJson'] = $request->taskRelationJsonShrink;
        }

        if (null !== $request->timeout) {
            @$query['timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProcessDefinitionWithSchedule',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/projects/' . Url::percentEncode($bizId) . '/process-definition',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProcessDefinitionWithScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a workflow.
     *
     * @param request - CreateProcessDefinitionWithScheduleRequest
     *
     * @returns CreateProcessDefinitionWithScheduleResponse
     *
     * @param string                                     $bizId
     * @param CreateProcessDefinitionWithScheduleRequest $request
     *
     * @return CreateProcessDefinitionWithScheduleResponse
     */
    public function createProcessDefinitionWithSchedule($bizId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProcessDefinitionWithScheduleWithOptions($bizId, $request, $headers, $runtime);
    }

    /**
     * 创建Ray集群.
     *
     * @param request - CreateRayClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRayClusterResponse
     *
     * @param string                  $workspaceId
     * @param CreateRayClusterRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRayClusterResponse
     */
    public function createRayClusterWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayReleaseVersion) {
            @$body['displayReleaseVersion'] = $request->displayReleaseVersion;
        }

        if (null !== $request->extraParam) {
            @$body['extraParam'] = $request->extraParam;
        }

        if (null !== $request->headSpec) {
            @$body['headSpec'] = $request->headSpec;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->networkServiceName) {
            @$body['networkServiceName'] = $request->networkServiceName;
        }

        if (null !== $request->workerSpec) {
            @$body['workerSpec'] = $request->workerSpec;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRayCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/rayCluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRayClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Ray集群.
     *
     * @param request - CreateRayClusterRequest
     *
     * @returns CreateRayClusterResponse
     *
     * @param string                  $workspaceId
     * @param CreateRayClusterRequest $request
     *
     * @return CreateRayClusterResponse
     */
    public function createRayCluster($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRayClusterWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a session.
     *
     * @param request - CreateSessionClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSessionClusterResponse
     *
     * @param string                      $workspaceId
     * @param CreateSessionClusterRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSessionClusterResponse
     */
    public function createSessionClusterWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->applicationConfigs) {
            @$body['applicationConfigs'] = $request->applicationConfigs;
        }

        if (null !== $request->autoStartConfiguration) {
            @$body['autoStartConfiguration'] = $request->autoStartConfiguration;
        }

        if (null !== $request->autoStopConfiguration) {
            @$body['autoStopConfiguration'] = $request->autoStopConfiguration;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->displayReleaseVersion) {
            @$body['displayReleaseVersion'] = $request->displayReleaseVersion;
        }

        if (null !== $request->envId) {
            @$body['envId'] = $request->envId;
        }

        if (null !== $request->fusion) {
            @$body['fusion'] = $request->fusion;
        }

        if (null !== $request->kind) {
            @$body['kind'] = $request->kind;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->publicEndpointEnabled) {
            @$body['publicEndpointEnabled'] = $request->publicEndpointEnabled;
        }

        if (null !== $request->queueName) {
            @$body['queueName'] = $request->queueName;
        }

        if (null !== $request->releaseVersion) {
            @$body['releaseVersion'] = $request->releaseVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSessionCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/sessionClusters',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a session.
     *
     * @param request - CreateSessionClusterRequest
     *
     * @returns CreateSessionClusterResponse
     *
     * @param string                      $workspaceId
     * @param CreateSessionClusterRequest $request
     *
     * @return CreateSessionClusterResponse
     */
    public function createSessionCluster($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSessionClusterWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates an SQL query task.
     *
     * @param request - CreateSqlStatementRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSqlStatementResponse
     *
     * @param string                    $workspaceId
     * @param CreateSqlStatementRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSqlStatementResponse
     */
    public function createSqlStatementWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->codeContent) {
            @$body['codeContent'] = $request->codeContent;
        }

        if (null !== $request->defaultCatalog) {
            @$body['defaultCatalog'] = $request->defaultCatalog;
        }

        if (null !== $request->defaultDatabase) {
            @$body['defaultDatabase'] = $request->defaultDatabase;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->sqlComputeId) {
            @$body['sqlComputeId'] = $request->sqlComputeId;
        }

        if (null !== $request->taskBizId) {
            @$body['taskBizId'] = $request->taskBizId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSqlStatement',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceId) . '/statement',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an SQL query task.
     *
     * @param request - CreateSqlStatementRequest
     *
     * @returns CreateSqlStatementResponse
     *
     * @param string                    $workspaceId
     * @param CreateSqlStatementRequest $request
     *
     * @return CreateSqlStatementResponse
     */
    public function createSqlStatement($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSqlStatementWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a workspace.
     *
     * @param request - CreateWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->autoRenew) {
            @$body['autoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$body['autoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->autoRenewPeriodUnit) {
            @$body['autoRenewPeriodUnit'] = $request->autoRenewPeriodUnit;
        }

        if (null !== $request->autoStartSessionCluster) {
            @$body['autoStartSessionCluster'] = $request->autoStartSessionCluster;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->dlfCatalogId) {
            @$body['dlfCatalogId'] = $request->dlfCatalogId;
        }

        if (null !== $request->dlfType) {
            @$body['dlfType'] = $request->dlfType;
        }

        if (null !== $request->duration) {
            @$body['duration'] = $request->duration;
        }

        if (null !== $request->ossBucket) {
            @$body['ossBucket'] = $request->ossBucket;
        }

        if (null !== $request->paymentDurationUnit) {
            @$body['paymentDurationUnit'] = $request->paymentDurationUnit;
        }

        if (null !== $request->paymentType) {
            @$body['paymentType'] = $request->paymentType;
        }

        if (null !== $request->ramRoleName) {
            @$body['ramRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->releaseType) {
            @$body['releaseType'] = $request->releaseType;
        }

        if (null !== $request->resourceSpec) {
            @$body['resourceSpec'] = $request->resourceSpec;
        }

        if (null !== $request->tag) {
            @$body['tag'] = $request->tag;
        }

        if (null !== $request->workspaceName) {
            @$body['workspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkspace',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a workspace.
     *
     * @param request - CreateWorkspaceRequest
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * DeleteKyuubiService.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKyuubiServiceResponse
     *
     * @param string         $workspaceId
     * @param string         $kyuubiServiceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteKyuubiServiceResponse
     */
    public function deleteKyuubiServiceWithOptions($workspaceId, $kyuubiServiceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteKyuubiService',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/kyuubi/' . Url::percentEncode($workspaceId) . '/' . Url::percentEncode($kyuubiServiceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteKyuubiServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteKyuubiService.
     *
     * @returns DeleteKyuubiServiceResponse
     *
     * @param string $workspaceId
     * @param string $kyuubiServiceId
     *
     * @return DeleteKyuubiServiceResponse
     */
    public function deleteKyuubiService($workspaceId, $kyuubiServiceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteKyuubiServiceWithOptions($workspaceId, $kyuubiServiceId, $headers, $runtime);
    }

    /**
     * 删除compute的token.
     *
     * @param request - DeleteKyuubiTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKyuubiTokenResponse
     *
     * @param string                   $workspaceId
     * @param string                   $kyuubiServiceId
     * @param string                   $tokenId
     * @param DeleteKyuubiTokenRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteKyuubiTokenResponse
     */
    public function deleteKyuubiTokenWithOptions($workspaceId, $kyuubiServiceId, $tokenId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteKyuubiToken',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/kyuubiService/' . Url::percentEncode($kyuubiServiceId) . '/token/' . Url::percentEncode($tokenId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteKyuubiTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除compute的token.
     *
     * @param request - DeleteKyuubiTokenRequest
     *
     * @returns DeleteKyuubiTokenResponse
     *
     * @param string                   $workspaceId
     * @param string                   $kyuubiServiceId
     * @param string                   $tokenId
     * @param DeleteKyuubiTokenRequest $request
     *
     * @return DeleteKyuubiTokenResponse
     */
    public function deleteKyuubiToken($workspaceId, $kyuubiServiceId, $tokenId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteKyuubiTokenWithOptions($workspaceId, $kyuubiServiceId, $tokenId, $request, $headers, $runtime);
    }

    /**
     * 删除livy compute.
     *
     * @param request - DeleteLivyComputeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLivyComputeResponse
     *
     * @param string                   $workspaceBizId
     * @param string                   $livyComputeId
     * @param DeleteLivyComputeRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteLivyComputeResponse
     */
    public function deleteLivyComputeWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLivyCompute',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/livycompute/' . Url::percentEncode($livyComputeId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteLivyComputeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除livy compute.
     *
     * @param request - DeleteLivyComputeRequest
     *
     * @returns DeleteLivyComputeResponse
     *
     * @param string                   $workspaceBizId
     * @param string                   $livyComputeId
     * @param DeleteLivyComputeRequest $request
     *
     * @return DeleteLivyComputeResponse
     */
    public function deleteLivyCompute($workspaceBizId, $livyComputeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLivyComputeWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime);
    }

    /**
     * 删除Livy Compute的token.
     *
     * @param request - DeleteLivyComputeTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLivyComputeTokenResponse
     *
     * @param string                        $workspaceBizId
     * @param string                        $livyComputeId
     * @param string                        $tokenId
     * @param DeleteLivyComputeTokenRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteLivyComputeTokenResponse
     */
    public function deleteLivyComputeTokenWithOptions($workspaceBizId, $livyComputeId, $tokenId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLivyComputeToken',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/livycompute/' . Url::percentEncode($livyComputeId) . '/token/' . Url::percentEncode($tokenId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteLivyComputeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Livy Compute的token.
     *
     * @param request - DeleteLivyComputeTokenRequest
     *
     * @returns DeleteLivyComputeTokenResponse
     *
     * @param string                        $workspaceBizId
     * @param string                        $livyComputeId
     * @param string                        $tokenId
     * @param DeleteLivyComputeTokenRequest $request
     *
     * @return DeleteLivyComputeTokenResponse
     */
    public function deleteLivyComputeToken($workspaceBizId, $livyComputeId, $tokenId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLivyComputeTokenWithOptions($workspaceBizId, $livyComputeId, $tokenId, $request, $headers, $runtime);
    }

    /**
     * 删除Ray集群.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRayClusterResponse
     *
     * @param string         $workspaceId
     * @param string         $clusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRayClusterResponse
     */
    public function deleteRayClusterWithOptions($workspaceId, $clusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteRayCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/rayCluster/' . Url::percentEncode($clusterId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRayClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Ray集群.
     *
     * @returns DeleteRayClusterResponse
     *
     * @param string $workspaceId
     * @param string $clusterId
     *
     * @return DeleteRayClusterResponse
     */
    public function deleteRayCluster($workspaceId, $clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRayClusterWithOptions($workspaceId, $clusterId, $headers, $runtime);
    }

    /**
     * Modifies the queue of a workspace.
     *
     * @param request - EditWorkspaceQueueRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditWorkspaceQueueResponse
     *
     * @param EditWorkspaceQueueRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return EditWorkspaceQueueResponse
     */
    public function editWorkspaceQueueWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->environments) {
            @$body['environments'] = $request->environments;
        }

        if (null !== $request->resourceSpec) {
            @$body['resourceSpec'] = $request->resourceSpec;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        if (null !== $request->workspaceQueueName) {
            @$body['workspaceQueueName'] = $request->workspaceQueueName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EditWorkspaceQueue',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/queues/action/edit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EditWorkspaceQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the queue of a workspace.
     *
     * @param request - EditWorkspaceQueueRequest
     *
     * @returns EditWorkspaceQueueResponse
     *
     * @param EditWorkspaceQueueRequest $request
     *
     * @return EditWorkspaceQueueResponse
     */
    public function editWorkspaceQueue($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->editWorkspaceQueueWithOptions($request, $headers, $runtime);
    }

    /**
     * 上线工作流及其调度.
     *
     * @param request - GenerateTaskCodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateTaskCodesResponse
     *
     * @param string                   $bizId
     * @param GenerateTaskCodesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateTaskCodesResponse
     */
    public function generateTaskCodesWithOptions($bizId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->genNum) {
            @$query['genNum'] = $request->genNum;
        }

        if (null !== $request->productNamespace) {
            @$query['productNamespace'] = $request->productNamespace;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateTaskCodes',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/projects/' . Url::percentEncode($bizId) . '/task-definition/gen-task-codes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateTaskCodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上线工作流及其调度.
     *
     * @param request - GenerateTaskCodesRequest
     *
     * @returns GenerateTaskCodesResponse
     *
     * @param string                   $bizId
     * @param GenerateTaskCodesRequest $request
     *
     * @return GenerateTaskCodesResponse
     */
    public function generateTaskCodes($bizId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateTaskCodesWithOptions($bizId, $request, $headers, $runtime);
    }

    /**
     * Queries the number of CU-hours consumed by a queue during a specified cycle.
     *
     * @param request - GetCuHoursRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCuHoursResponse
     *
     * @param string            $workspaceId
     * @param string            $queue
     * @param GetCuHoursRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetCuHoursResponse
     */
    public function getCuHoursWithOptions($workspaceId, $queue, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCuHours',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/metric/cuHours/' . Url::percentEncode($queue) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCuHoursResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of CU-hours consumed by a queue during a specified cycle.
     *
     * @param request - GetCuHoursRequest
     *
     * @returns GetCuHoursResponse
     *
     * @param string            $workspaceId
     * @param string            $queue
     * @param GetCuHoursRequest $request
     *
     * @return GetCuHoursResponse
     */
    public function getCuHours($workspaceId, $queue, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCuHoursWithOptions($workspaceId, $queue, $request, $headers, $runtime);
    }

    /**
     * Obtains job analysis information on E-MapReduce (EMR) Doctor.
     *
     * @param request - GetDoctorApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDoctorApplicationResponse
     *
     * @param string                      $workspaceId
     * @param string                      $runId
     * @param GetDoctorApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetDoctorApplicationResponse
     */
    public function getDoctorApplicationWithOptions($workspaceId, $runId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->locale) {
            @$query['locale'] = $request->locale;
        }

        if (null !== $request->queryTime) {
            @$query['queryTime'] = $request->queryTime;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDoctorApplication',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/runs/' . Url::percentEncode($runId) . '/action/getDoctorApplication',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDoctorApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains job analysis information on E-MapReduce (EMR) Doctor.
     *
     * @param request - GetDoctorApplicationRequest
     *
     * @returns GetDoctorApplicationResponse
     *
     * @param string                      $workspaceId
     * @param string                      $runId
     * @param GetDoctorApplicationRequest $request
     *
     * @return GetDoctorApplicationResponse
     */
    public function getDoctorApplication($workspaceId, $runId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDoctorApplicationWithOptions($workspaceId, $runId, $request, $headers, $runtime);
    }

    /**
     * Obtain the job details.
     *
     * @param request - GetJobRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobRunResponse
     *
     * @param string           $workspaceId
     * @param string           $jobRunId
     * @param GetJobRunRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetJobRunResponse
     */
    public function getJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobRun',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/jobRuns/' . Url::percentEncode($jobRunId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the job details.
     *
     * @param request - GetJobRunRequest
     *
     * @returns GetJobRunResponse
     *
     * @param string           $workspaceId
     * @param string           $jobRunId
     * @param GetJobRunRequest $request
     *
     * @return GetJobRunResponse
     */
    public function getJobRun($workspaceId, $jobRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime);
    }

    /**
     * GetKyuubiService.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKyuubiServiceResponse
     *
     * @param string         $workspaceId
     * @param string         $kyuubiServiceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetKyuubiServiceResponse
     */
    public function getKyuubiServiceWithOptions($workspaceId, $kyuubiServiceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetKyuubiService',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/kyuubi/' . Url::percentEncode($workspaceId) . '/' . Url::percentEncode($kyuubiServiceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetKyuubiServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetKyuubiService.
     *
     * @returns GetKyuubiServiceResponse
     *
     * @param string $workspaceId
     * @param string $kyuubiServiceId
     *
     * @return GetKyuubiServiceResponse
     */
    public function getKyuubiService($workspaceId, $kyuubiServiceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKyuubiServiceWithOptions($workspaceId, $kyuubiServiceId, $headers, $runtime);
    }

    /**
     * 获取compute的token.
     *
     * @param request - GetKyuubiTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKyuubiTokenResponse
     *
     * @param string                $workspaceId
     * @param string                $kyuubiServiceId
     * @param string                $tokenId
     * @param GetKyuubiTokenRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetKyuubiTokenResponse
     */
    public function getKyuubiTokenWithOptions($workspaceId, $kyuubiServiceId, $tokenId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKyuubiToken',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/kyuubiService/' . Url::percentEncode($kyuubiServiceId) . '/token/' . Url::percentEncode($tokenId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetKyuubiTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取compute的token.
     *
     * @param request - GetKyuubiTokenRequest
     *
     * @returns GetKyuubiTokenResponse
     *
     * @param string                $workspaceId
     * @param string                $kyuubiServiceId
     * @param string                $tokenId
     * @param GetKyuubiTokenRequest $request
     *
     * @return GetKyuubiTokenResponse
     */
    public function getKyuubiToken($workspaceId, $kyuubiServiceId, $tokenId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKyuubiTokenWithOptions($workspaceId, $kyuubiServiceId, $tokenId, $request, $headers, $runtime);
    }

    /**
     * 获取livy compute.
     *
     * @param request - GetLivyComputeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLivyComputeResponse
     *
     * @param string                $workspaceBizId
     * @param string                $livyComputeId
     * @param GetLivyComputeRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetLivyComputeResponse
     */
    public function getLivyComputeWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLivyCompute',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/livycompute/' . Url::percentEncode($livyComputeId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLivyComputeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取livy compute.
     *
     * @param request - GetLivyComputeRequest
     *
     * @returns GetLivyComputeResponse
     *
     * @param string                $workspaceBizId
     * @param string                $livyComputeId
     * @param GetLivyComputeRequest $request
     *
     * @return GetLivyComputeResponse
     */
    public function getLivyCompute($workspaceBizId, $livyComputeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLivyComputeWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime);
    }

    /**
     * 获取livy compute token.
     *
     * @param request - GetLivyComputeTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLivyComputeTokenResponse
     *
     * @param string                     $workspaceBizId
     * @param string                     $livyComputeId
     * @param string                     $tokenId
     * @param GetLivyComputeTokenRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetLivyComputeTokenResponse
     */
    public function getLivyComputeTokenWithOptions($workspaceBizId, $livyComputeId, $tokenId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLivyComputeToken',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/livycompute/' . Url::percentEncode($livyComputeId) . '/token/' . Url::percentEncode($tokenId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLivyComputeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取livy compute token.
     *
     * @param request - GetLivyComputeTokenRequest
     *
     * @returns GetLivyComputeTokenResponse
     *
     * @param string                     $workspaceBizId
     * @param string                     $livyComputeId
     * @param string                     $tokenId
     * @param GetLivyComputeTokenRequest $request
     *
     * @return GetLivyComputeTokenResponse
     */
    public function getLivyComputeToken($workspaceBizId, $livyComputeId, $tokenId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLivyComputeTokenWithOptions($workspaceBizId, $livyComputeId, $tokenId, $request, $headers, $runtime);
    }

    /**
     * 获取Ray集群.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRayClusterResponse
     *
     * @param string         $workspaceId
     * @param string         $clusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRayClusterResponse
     */
    public function getRayClusterWithOptions($workspaceId, $clusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRayCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/rayCluster/' . Url::percentEncode($clusterId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRayClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Ray集群.
     *
     * @returns GetRayClusterResponse
     *
     * @param string $workspaceId
     * @param string $clusterId
     *
     * @return GetRayClusterResponse
     */
    public function getRayCluster($workspaceId, $clusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRayClusterWithOptions($workspaceId, $clusterId, $headers, $runtime);
    }

    /**
     * 获取任务配置.
     *
     * @param request - GetRunConfigurationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRunConfigurationResponse
     *
     * @param string                     $workspaceId
     * @param string                     $runId
     * @param GetRunConfigurationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetRunConfigurationResponse
     */
    public function getRunConfigurationWithOptions($workspaceId, $runId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRunConfiguration',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/runs/' . Url::percentEncode($runId) . '/action/getRunConfiguration',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRunConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务配置.
     *
     * @param request - GetRunConfigurationRequest
     *
     * @returns GetRunConfigurationResponse
     *
     * @param string                     $workspaceId
     * @param string                     $runId
     * @param GetRunConfigurationRequest $request
     *
     * @return GetRunConfigurationResponse
     */
    public function getRunConfiguration($workspaceId, $runId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRunConfigurationWithOptions($workspaceId, $runId, $request, $headers, $runtime);
    }

    /**
     * Queries the information about a session.
     *
     * @param request - GetSessionClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSessionClusterResponse
     *
     * @param string                   $workspaceId
     * @param string                   $sessionClusterId
     * @param GetSessionClusterRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetSessionClusterResponse
     */
    public function getSessionClusterWithOptions($workspaceId, $sessionClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSessionCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/sessionClusters/' . Url::percentEncode($sessionClusterId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a session.
     *
     * @param request - GetSessionClusterRequest
     *
     * @returns GetSessionClusterResponse
     *
     * @param string                   $workspaceId
     * @param string                   $sessionClusterId
     * @param GetSessionClusterRequest $request
     *
     * @return GetSessionClusterResponse
     */
    public function getSessionCluster($workspaceId, $sessionClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSessionClusterWithOptions($workspaceId, $sessionClusterId, $request, $headers, $runtime);
    }

    /**
     * Queries the status of an SQL query task.
     *
     * @param request - GetSqlStatementRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSqlStatementResponse
     *
     * @param string                 $workspaceId
     * @param string                 $statementId
     * @param GetSqlStatementRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetSqlStatementResponse
     */
    public function getSqlStatementWithOptions($workspaceId, $statementId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSqlStatement',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceId) . '/statement/' . Url::percentEncode($statementId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of an SQL query task.
     *
     * @param request - GetSqlStatementRequest
     *
     * @returns GetSqlStatementResponse
     *
     * @param string                 $workspaceId
     * @param string                 $statementId
     * @param GetSqlStatementRequest $request
     *
     * @return GetSqlStatementResponse
     */
    public function getSqlStatement($workspaceId, $statementId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSqlStatementWithOptions($workspaceId, $statementId, $request, $headers, $runtime);
    }

    /**
     * Queries task templates.
     *
     * @param request - GetTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateResponse
     *
     * @param string             $workspaceBizId
     * @param GetTemplateRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($workspaceBizId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->templateBizId) {
            @$query['templateBizId'] = $request->templateBizId;
        }

        if (null !== $request->templateType) {
            @$query['templateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTemplate',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/template',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries task templates.
     *
     * @param request - GetTemplateRequest
     *
     * @returns GetTemplateResponse
     *
     * @param string             $workspaceBizId
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($workspaceBizId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateWithOptions($workspaceBizId, $request, $headers, $runtime);
    }

    /**
     * Assigns a specified role to users.
     *
     * @param request - GrantRoleToUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantRoleToUsersResponse
     *
     * @param GrantRoleToUsersRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GrantRoleToUsersResponse
     */
    public function grantRoleToUsersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->roleArn) {
            @$body['roleArn'] = $request->roleArn;
        }

        if (null !== $request->userArns) {
            @$body['userArns'] = $request->userArns;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GrantRoleToUsers',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/auth/roles/grant',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GrantRoleToUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Assigns a specified role to users.
     *
     * @param request - GrantRoleToUsersRequest
     *
     * @returns GrantRoleToUsersResponse
     *
     * @param GrantRoleToUsersRequest $request
     *
     * @return GrantRoleToUsersResponse
     */
    public function grantRoleToUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantRoleToUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * 查看数据目录列表.
     *
     * @param request - ListCatalogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCatalogsResponse
     *
     * @param string              $workspaceId
     * @param ListCatalogsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListCatalogsResponse
     */
    public function listCatalogsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environment) {
            @$query['environment'] = $request->environment;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCatalogs',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/catalogs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCatalogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看数据目录列表.
     *
     * @param request - ListCatalogsRequest
     *
     * @returns ListCatalogsResponse
     *
     * @param string              $workspaceId
     * @param ListCatalogsRequest $request
     *
     * @return ListCatalogsResponse
     */
    public function listCatalogs($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCatalogsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 列出作业的executors.
     *
     * @param request - ListJobExecutorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobExecutorsResponse
     *
     * @param string                  $workspaceId
     * @param string                  $jobRunId
     * @param ListJobExecutorsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListJobExecutorsResponse
     */
    public function listJobExecutorsWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->executorType) {
            @$query['executorType'] = $request->executorType;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobExecutors',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/jobRuns/' . Url::percentEncode($jobRunId) . '/executors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListJobExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出作业的executors.
     *
     * @param request - ListJobExecutorsRequest
     *
     * @returns ListJobExecutorsResponse
     *
     * @param string                  $workspaceId
     * @param string                  $jobRunId
     * @param ListJobExecutorsRequest $request
     *
     * @return ListJobExecutorsResponse
     */
    public function listJobExecutors($workspaceId, $jobRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobExecutorsWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of Spark jobs.
     *
     * @param tmpReq - ListJobRunsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobRunsResponse
     *
     * @param string             $workspaceId
     * @param ListJobRunsRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListJobRunsResponse
     */
    public function listJobRunsWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListJobRunsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->endTime) {
            $request->endTimeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->endTime, 'endTime', 'json');
        }

        if (null !== $tmpReq->startTime) {
            $request->startTimeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->startTime, 'startTime', 'json');
        }

        if (null !== $tmpReq->states) {
            $request->statesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->states, 'states', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->applicationConfigs) {
            @$query['applicationConfigs'] = $request->applicationConfigs;
        }

        if (null !== $request->creator) {
            @$query['creator'] = $request->creator;
        }

        if (null !== $request->endTimeShrink) {
            @$query['endTime'] = $request->endTimeShrink;
        }

        if (null !== $request->isWorkflow) {
            @$query['isWorkflow'] = $request->isWorkflow;
        }

        if (null !== $request->jobRunDeploymentId) {
            @$query['jobRunDeploymentId'] = $request->jobRunDeploymentId;
        }

        if (null !== $request->jobRunId) {
            @$query['jobRunId'] = $request->jobRunId;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->minDuration) {
            @$query['minDuration'] = $request->minDuration;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->resourceQueueId) {
            @$query['resourceQueueId'] = $request->resourceQueueId;
        }

        if (null !== $request->runtimeConfigs) {
            @$query['runtimeConfigs'] = $request->runtimeConfigs;
        }

        if (null !== $request->startTimeShrink) {
            @$query['startTime'] = $request->startTimeShrink;
        }

        if (null !== $request->statesShrink) {
            @$query['states'] = $request->statesShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobRuns',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/jobRuns',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListJobRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Spark jobs.
     *
     * @param request - ListJobRunsRequest
     *
     * @returns ListJobRunsResponse
     *
     * @param string             $workspaceId
     * @param ListJobRunsRequest $request
     *
     * @return ListJobRunsResponse
     */
    public function listJobRuns($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobRunsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * ListKyuubiServices.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKyuubiServicesResponse
     *
     * @param string         $workspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListKyuubiServicesResponse
     */
    public function listKyuubiServicesWithOptions($workspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListKyuubiServices',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/kyuubi/' . Url::percentEncode($workspaceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListKyuubiServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListKyuubiServices.
     *
     * @returns ListKyuubiServicesResponse
     *
     * @param string $workspaceId
     *
     * @return ListKyuubiServicesResponse
     */
    public function listKyuubiServices($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKyuubiServicesWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * Queries the applications that are submitted by using a Kyuubi gateway.
     *
     * @param tmpReq - ListKyuubiSparkApplicationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKyuubiSparkApplicationsResponse
     *
     * @param string                             $workspaceId
     * @param string                             $kyuubiServiceId
     * @param ListKyuubiSparkApplicationsRequest $tmpReq
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListKyuubiSparkApplicationsResponse
     */
    public function listKyuubiSparkApplicationsWithOptions($workspaceId, $kyuubiServiceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListKyuubiSparkApplicationsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->orderBy) {
            $request->orderByShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->orderBy, 'orderBy', 'json');
        }

        if (null !== $tmpReq->startTime) {
            $request->startTimeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->startTime, 'startTime', 'json');
        }

        $query = [];
        if (null !== $request->applicationId) {
            @$query['applicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationName) {
            @$query['applicationName'] = $request->applicationName;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->minDuration) {
            @$query['minDuration'] = $request->minDuration;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderByShrink) {
            @$query['orderBy'] = $request->orderByShrink;
        }

        if (null !== $request->resourceQueueId) {
            @$query['resourceQueueId'] = $request->resourceQueueId;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        if (null !== $request->startTimeShrink) {
            @$query['startTime'] = $request->startTimeShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKyuubiSparkApplications',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/kyuubi/' . Url::percentEncode($workspaceId) . '/' . Url::percentEncode($kyuubiServiceId) . '/applications',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListKyuubiSparkApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the applications that are submitted by using a Kyuubi gateway.
     *
     * @param request - ListKyuubiSparkApplicationsRequest
     *
     * @returns ListKyuubiSparkApplicationsResponse
     *
     * @param string                             $workspaceId
     * @param string                             $kyuubiServiceId
     * @param ListKyuubiSparkApplicationsRequest $request
     *
     * @return ListKyuubiSparkApplicationsResponse
     */
    public function listKyuubiSparkApplications($workspaceId, $kyuubiServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKyuubiSparkApplicationsWithOptions($workspaceId, $kyuubiServiceId, $request, $headers, $runtime);
    }

    /**
     * 列出compute的token.
     *
     * @param request - ListKyuubiTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKyuubiTokenResponse
     *
     * @param string                 $workspaceId
     * @param string                 $kyuubiServiceId
     * @param ListKyuubiTokenRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListKyuubiTokenResponse
     */
    public function listKyuubiTokenWithOptions($workspaceId, $kyuubiServiceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKyuubiToken',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/kyuubiService/' . Url::percentEncode($kyuubiServiceId) . '/token',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListKyuubiTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出compute的token.
     *
     * @param request - ListKyuubiTokenRequest
     *
     * @returns ListKyuubiTokenResponse
     *
     * @param string                 $workspaceId
     * @param string                 $kyuubiServiceId
     * @param ListKyuubiTokenRequest $request
     *
     * @return ListKyuubiTokenResponse
     */
    public function listKyuubiToken($workspaceId, $kyuubiServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKyuubiTokenWithOptions($workspaceId, $kyuubiServiceId, $request, $headers, $runtime);
    }

    /**
     * 列出livy compute.
     *
     * @param request - ListLivyComputeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLivyComputeResponse
     *
     * @param string                 $workspaceBizId
     * @param ListLivyComputeRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListLivyComputeResponse
     */
    public function listLivyComputeWithOptions($workspaceBizId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLivyCompute',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/livycompute',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLivyComputeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出livy compute.
     *
     * @param request - ListLivyComputeRequest
     *
     * @returns ListLivyComputeResponse
     *
     * @param string                 $workspaceBizId
     * @param ListLivyComputeRequest $request
     *
     * @return ListLivyComputeResponse
     */
    public function listLivyCompute($workspaceBizId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLivyComputeWithOptions($workspaceBizId, $request, $headers, $runtime);
    }

    /**
     * 获取livy gateway历史session.
     *
     * @param request - ListLivyComputeSessionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLivyComputeSessionsResponse
     *
     * @param string                         $workspaceId
     * @param string                         $livyComputeId
     * @param ListLivyComputeSessionsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListLivyComputeSessionsResponse
     */
    public function listLivyComputeSessionsWithOptions($workspaceId, $livyComputeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNum) {
            @$query['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLivyComputeSessions',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/livycompute/' . Url::percentEncode($livyComputeId) . '/session',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLivyComputeSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取livy gateway历史session.
     *
     * @param request - ListLivyComputeSessionsRequest
     *
     * @returns ListLivyComputeSessionsResponse
     *
     * @param string                         $workspaceId
     * @param string                         $livyComputeId
     * @param ListLivyComputeSessionsRequest $request
     *
     * @return ListLivyComputeSessionsResponse
     */
    public function listLivyComputeSessions($workspaceId, $livyComputeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLivyComputeSessionsWithOptions($workspaceId, $livyComputeId, $request, $headers, $runtime);
    }

    /**
     * 列出livy compute token.
     *
     * @param request - ListLivyComputeTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLivyComputeTokenResponse
     *
     * @param string                      $workspaceBizId
     * @param string                      $livyComputeId
     * @param ListLivyComputeTokenRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListLivyComputeTokenResponse
     */
    public function listLivyComputeTokenWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLivyComputeToken',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/livycompute/' . Url::percentEncode($livyComputeId) . '/token',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLivyComputeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出livy compute token.
     *
     * @param request - ListLivyComputeTokenRequest
     *
     * @returns ListLivyComputeTokenResponse
     *
     * @param string                      $workspaceBizId
     * @param string                      $livyComputeId
     * @param ListLivyComputeTokenRequest $request
     *
     * @return ListLivyComputeTokenResponse
     */
    public function listLivyComputeToken($workspaceBizId, $livyComputeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLivyComputeTokenWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime);
    }

    /**
     * Get Log Content.
     *
     * @param request - ListLogContentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogContentsResponse
     *
     * @param string                 $workspaceId
     * @param ListLogContentsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListLogContentsResponse
     */
    public function listLogContentsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->length) {
            @$query['length'] = $request->length;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLogContents',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/action/listLogContents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLogContentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Log Content.
     *
     * @param request - ListLogContentsRequest
     *
     * @returns ListLogContentsResponse
     *
     * @param string                 $workspaceId
     * @param ListLogContentsRequest $request
     *
     * @return ListLogContentsResponse
     */
    public function listLogContents($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogContentsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 查询用户列表.
     *
     * @param request - ListMembersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMembersResponse
     *
     * @param string             $workspaceId
     * @param ListMembersRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListMembersResponse
     */
    public function listMembersWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMembers',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/auth/' . Url::percentEncode($workspaceId) . '/members',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户列表.
     *
     * @param request - ListMembersRequest
     *
     * @returns ListMembersResponse
     *
     * @param string             $workspaceId
     * @param ListMembersRequest $request
     *
     * @return ListMembersResponse
     */
    public function listMembers($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMembersWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 列出Ray集群.
     *
     * @param request - ListRayClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRayClusterResponse
     *
     * @param string                $workspaceId
     * @param ListRayClusterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListRayClusterResponse
     */
    public function listRayClusterWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNum) {
            @$query['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRayCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/rayCluster',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRayClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出Ray集群.
     *
     * @param request - ListRayClusterRequest
     *
     * @returns ListRayClusterResponse
     *
     * @param string                $workspaceId
     * @param ListRayClusterRequest $request
     *
     * @return ListRayClusterResponse
     */
    public function listRayCluster($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRayClusterWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of published versions of E-MapReduce (EMR) Serverless Spark.
     *
     * @param request - ListReleaseVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListReleaseVersionsResponse
     *
     * @param ListReleaseVersionsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListReleaseVersionsResponse
     */
    public function listReleaseVersionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->releaseType) {
            @$query['releaseType'] = $request->releaseType;
        }

        if (null !== $request->releaseVersion) {
            @$query['releaseVersion'] = $request->releaseVersion;
        }

        if (null !== $request->releaseVersionStatus) {
            @$query['releaseVersionStatus'] = $request->releaseVersionStatus;
        }

        if (null !== $request->serviceFilter) {
            @$query['serviceFilter'] = $request->serviceFilter;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListReleaseVersions',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/releaseVersions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListReleaseVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of published versions of E-MapReduce (EMR) Serverless Spark.
     *
     * @param request - ListReleaseVersionsRequest
     *
     * @returns ListReleaseVersionsResponse
     *
     * @param ListReleaseVersionsRequest $request
     *
     * @return ListReleaseVersionsResponse
     */
    public function listReleaseVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listReleaseVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of sessions.
     *
     * @param request - ListSessionClustersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSessionClustersResponse
     *
     * @param string                     $workspaceId
     * @param ListSessionClustersRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListSessionClustersResponse
     */
    public function listSessionClustersWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->kind) {
            @$query['kind'] = $request->kind;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->queueName) {
            @$query['queueName'] = $request->queueName;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->sessionClusterId) {
            @$query['sessionClusterId'] = $request->sessionClusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSessionClusters',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/sessionClusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSessionClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of sessions.
     *
     * @param request - ListSessionClustersRequest
     *
     * @returns ListSessionClustersResponse
     *
     * @param string                     $workspaceId
     * @param ListSessionClustersRequest $request
     *
     * @return ListSessionClustersResponse
     */
    public function listSessionClusters($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSessionClustersWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取sql statement内容.
     *
     * @param request - ListSqlStatementContentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSqlStatementContentsResponse
     *
     * @param string                          $workspaceId
     * @param ListSqlStatementContentsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListSqlStatementContentsResponse
     */
    public function listSqlStatementContentsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSqlStatementContents',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/action/listSqlStatementContents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSqlStatementContentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取sql statement内容.
     *
     * @param request - ListSqlStatementContentsRequest
     *
     * @returns ListSqlStatementContentsResponse
     *
     * @param string                          $workspaceId
     * @param ListSqlStatementContentsRequest $request
     *
     * @return ListSqlStatementContentsResponse
     */
    public function listSqlStatementContents($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSqlStatementContentsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取任务模板列表.
     *
     * @param request - ListTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplateResponse
     *
     * @param string              $workspaceBizId
     * @param ListTemplateRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListTemplateResponse
     */
    public function listTemplateWithOptions($workspaceBizId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplate',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/template/listing',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务模板列表.
     *
     * @param request - ListTemplateRequest
     *
     * @returns ListTemplateResponse
     *
     * @param string              $workspaceBizId
     * @param ListTemplateRequest $request
     *
     * @return ListTemplateResponse
     */
    public function listTemplate($workspaceBizId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTemplateWithOptions($workspaceBizId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of queues in a Spark workspace.
     *
     * @param request - ListWorkspaceQueuesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspaceQueuesResponse
     *
     * @param string                     $workspaceId
     * @param ListWorkspaceQueuesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListWorkspaceQueuesResponse
     */
    public function listWorkspaceQueuesWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environment) {
            @$query['environment'] = $request->environment;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaceQueues',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/queues',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkspaceQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of queues in a Spark workspace.
     *
     * @param request - ListWorkspaceQueuesRequest
     *
     * @returns ListWorkspaceQueuesResponse
     *
     * @param string                     $workspaceId
     * @param ListWorkspaceQueuesRequest $request
     *
     * @return ListWorkspaceQueuesResponse
     */
    public function listWorkspaceQueues($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspaceQueuesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of workspaces.
     *
     * @param tmpReq - ListWorkspacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWorkspacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->state) {
            @$query['state'] = $request->state;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaces',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of workspaces.
     *
     * @param request - ListWorkspacesRequest
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新Livy Compute的token.
     *
     * @param request - RefreshLivyComputeTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshLivyComputeTokenResponse
     *
     * @param string                         $workspaceBizId
     * @param string                         $livyComputeId
     * @param string                         $tokenId
     * @param RefreshLivyComputeTokenRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return RefreshLivyComputeTokenResponse
     */
    public function refreshLivyComputeTokenWithOptions($workspaceBizId, $livyComputeId, $tokenId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->autoExpireConfiguration) {
            @$body['autoExpireConfiguration'] = $request->autoExpireConfiguration;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->token) {
            @$body['token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RefreshLivyComputeToken',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/livycompute/' . Url::percentEncode($livyComputeId) . '/token/' . Url::percentEncode($tokenId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RefreshLivyComputeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Livy Compute的token.
     *
     * @param request - RefreshLivyComputeTokenRequest
     *
     * @returns RefreshLivyComputeTokenResponse
     *
     * @param string                         $workspaceBizId
     * @param string                         $livyComputeId
     * @param string                         $tokenId
     * @param RefreshLivyComputeTokenRequest $request
     *
     * @return RefreshLivyComputeTokenResponse
     */
    public function refreshLivyComputeToken($workspaceBizId, $livyComputeId, $tokenId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refreshLivyComputeTokenWithOptions($workspaceBizId, $livyComputeId, $tokenId, $request, $headers, $runtime);
    }

    /**
     * Starts a Spark job.
     *
     * @param request - StartJobRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartJobRunResponse
     *
     * @param string             $workspaceId
     * @param StartJobRunRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return StartJobRunResponse
     */
    public function startJobRunWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->codeType) {
            @$body['codeType'] = $request->codeType;
        }

        if (null !== $request->configurationOverrides) {
            @$body['configurationOverrides'] = $request->configurationOverrides;
        }

        if (null !== $request->displayReleaseVersion) {
            @$body['displayReleaseVersion'] = $request->displayReleaseVersion;
        }

        if (null !== $request->executionTimeoutSeconds) {
            @$body['executionTimeoutSeconds'] = $request->executionTimeoutSeconds;
        }

        if (null !== $request->fusion) {
            @$body['fusion'] = $request->fusion;
        }

        if (null !== $request->jobDriver) {
            @$body['jobDriver'] = $request->jobDriver;
        }

        if (null !== $request->jobId) {
            @$body['jobId'] = $request->jobId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->releaseVersion) {
            @$body['releaseVersion'] = $request->releaseVersion;
        }

        if (null !== $request->resourceQueueId) {
            @$body['resourceQueueId'] = $request->resourceQueueId;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartJobRun',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/jobRuns',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a Spark job.
     *
     * @param request - StartJobRunRequest
     *
     * @returns StartJobRunResponse
     *
     * @param string             $workspaceId
     * @param StartJobRunRequest $request
     *
     * @return StartJobRunResponse
     */
    public function startJobRun($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startJobRunWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * StartKyuubiService.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartKyuubiServiceResponse
     *
     * @param string         $workspaceId
     * @param string         $kyuubiServiceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartKyuubiServiceResponse
     */
    public function startKyuubiServiceWithOptions($workspaceId, $kyuubiServiceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartKyuubiService',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/kyuubi/' . Url::percentEncode($workspaceId) . '/' . Url::percentEncode($kyuubiServiceId) . '/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartKyuubiServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StartKyuubiService.
     *
     * @returns StartKyuubiServiceResponse
     *
     * @param string $workspaceId
     * @param string $kyuubiServiceId
     *
     * @return StartKyuubiServiceResponse
     */
    public function startKyuubiService($workspaceId, $kyuubiServiceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startKyuubiServiceWithOptions($workspaceId, $kyuubiServiceId, $headers, $runtime);
    }

    /**
     * 启动livy compute.
     *
     * @param request - StartLivyComputeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartLivyComputeResponse
     *
     * @param string                  $workspaceBizId
     * @param string                  $livyComputeId
     * @param StartLivyComputeRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StartLivyComputeResponse
     */
    public function startLivyComputeWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartLivyCompute',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/livycompute/' . Url::percentEncode($livyComputeId) . '/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartLivyComputeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动livy compute.
     *
     * @param request - StartLivyComputeRequest
     *
     * @returns StartLivyComputeResponse
     *
     * @param string                  $workspaceBizId
     * @param string                  $livyComputeId
     * @param StartLivyComputeRequest $request
     *
     * @return StartLivyComputeResponse
     */
    public function startLivyCompute($workspaceBizId, $livyComputeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startLivyComputeWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime);
    }

    /**
     * Manually runs a workflow.
     *
     * @param request - StartProcessInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartProcessInstanceResponse
     *
     * @param string                      $bizId
     * @param StartProcessInstanceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return StartProcessInstanceResponse
     */
    public function startProcessInstanceWithOptions($bizId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->action) {
            @$query['action'] = $request->action;
        }

        if (null !== $request->comments) {
            @$query['comments'] = $request->comments;
        }

        if (null !== $request->email) {
            @$query['email'] = $request->email;
        }

        if (null !== $request->interval) {
            @$query['interval'] = $request->interval;
        }

        if (null !== $request->isProd) {
            @$query['isProd'] = $request->isProd;
        }

        if (null !== $request->processDefinitionCode) {
            @$query['processDefinitionCode'] = $request->processDefinitionCode;
        }

        if (null !== $request->productNamespace) {
            @$query['productNamespace'] = $request->productNamespace;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->runtimeQueue) {
            @$query['runtimeQueue'] = $request->runtimeQueue;
        }

        if (null !== $request->versionHashCode) {
            @$query['versionHashCode'] = $request->versionHashCode;
        }

        if (null !== $request->versionNumber) {
            @$query['versionNumber'] = $request->versionNumber;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartProcessInstance',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/projects/' . Url::percentEncode($bizId) . '/executors/start-process-instance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartProcessInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manually runs a workflow.
     *
     * @param request - StartProcessInstanceRequest
     *
     * @returns StartProcessInstanceResponse
     *
     * @param string                      $bizId
     * @param StartProcessInstanceRequest $request
     *
     * @return StartProcessInstanceResponse
     */
    public function startProcessInstance($bizId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startProcessInstanceWithOptions($bizId, $request, $headers, $runtime);
    }

    /**
     * 启动Ray集群.
     *
     * @param request - StartRayClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartRayClusterResponse
     *
     * @param string                 $workspaceId
     * @param string                 $clusterId
     * @param StartRayClusterRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StartRayClusterResponse
     */
    public function startRayClusterWithOptions($workspaceId, $clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartRayCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/rayCluster/' . Url::percentEncode($clusterId) . '/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartRayClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动Ray集群.
     *
     * @param request - StartRayClusterRequest
     *
     * @returns StartRayClusterResponse
     *
     * @param string                 $workspaceId
     * @param string                 $clusterId
     * @param StartRayClusterRequest $request
     *
     * @return StartRayClusterResponse
     */
    public function startRayCluster($workspaceId, $clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startRayClusterWithOptions($workspaceId, $clusterId, $request, $headers, $runtime);
    }

    /**
     * Starts a session.
     *
     * @param request - StartSessionClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartSessionClusterResponse
     *
     * @param string                     $workspaceId
     * @param StartSessionClusterRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return StartSessionClusterResponse
     */
    public function startSessionClusterWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->queueName) {
            @$body['queueName'] = $request->queueName;
        }

        if (null !== $request->sessionClusterId) {
            @$body['sessionClusterId'] = $request->sessionClusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartSessionCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/sessionClusters/action/startSessionCluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a session.
     *
     * @param request - StartSessionClusterRequest
     *
     * @returns StartSessionClusterResponse
     *
     * @param string                     $workspaceId
     * @param StartSessionClusterRequest $request
     *
     * @return StartSessionClusterResponse
     */
    public function startSessionCluster($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startSessionClusterWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * StopKyuubiService.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopKyuubiServiceResponse
     *
     * @param string         $workspaceId
     * @param string         $kyuubiServiceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopKyuubiServiceResponse
     */
    public function stopKyuubiServiceWithOptions($workspaceId, $kyuubiServiceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopKyuubiService',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/kyuubi/' . Url::percentEncode($workspaceId) . '/' . Url::percentEncode($kyuubiServiceId) . '/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopKyuubiServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StopKyuubiService.
     *
     * @returns StopKyuubiServiceResponse
     *
     * @param string $workspaceId
     * @param string $kyuubiServiceId
     *
     * @return StopKyuubiServiceResponse
     */
    public function stopKyuubiService($workspaceId, $kyuubiServiceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopKyuubiServiceWithOptions($workspaceId, $kyuubiServiceId, $headers, $runtime);
    }

    /**
     * 停止livy compute.
     *
     * @param request - StopLivyComputeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopLivyComputeResponse
     *
     * @param string                 $workspaceBizId
     * @param string                 $livyComputeId
     * @param StopLivyComputeRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StopLivyComputeResponse
     */
    public function stopLivyComputeWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopLivyCompute',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/livycompute/' . Url::percentEncode($livyComputeId) . '/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopLivyComputeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止livy compute.
     *
     * @param request - StopLivyComputeRequest
     *
     * @returns StopLivyComputeResponse
     *
     * @param string                 $workspaceBizId
     * @param string                 $livyComputeId
     * @param StopLivyComputeRequest $request
     *
     * @return StopLivyComputeResponse
     */
    public function stopLivyCompute($workspaceBizId, $livyComputeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopLivyComputeWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime);
    }

    /**
     * 停止Ray集群.
     *
     * @param request - StopRayClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopRayClusterResponse
     *
     * @param string                $workspaceId
     * @param string                $clusterId
     * @param StopRayClusterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return StopRayClusterResponse
     */
    public function stopRayClusterWithOptions($workspaceId, $clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopRayCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/rayCluster/' . Url::percentEncode($clusterId) . '/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopRayClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止Ray集群.
     *
     * @param request - StopRayClusterRequest
     *
     * @returns StopRayClusterResponse
     *
     * @param string                $workspaceId
     * @param string                $clusterId
     * @param StopRayClusterRequest $request
     *
     * @return StopRayClusterResponse
     */
    public function stopRayCluster($workspaceId, $clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopRayClusterWithOptions($workspaceId, $clusterId, $request, $headers, $runtime);
    }

    /**
     * Stops a session.
     *
     * @param request - StopSessionClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopSessionClusterResponse
     *
     * @param string                    $workspaceId
     * @param StopSessionClusterRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return StopSessionClusterResponse
     */
    public function stopSessionClusterWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->queueName) {
            @$body['queueName'] = $request->queueName;
        }

        if (null !== $request->sessionClusterId) {
            @$body['sessionClusterId'] = $request->sessionClusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopSessionCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/sessionClusters/action/stopSessionCluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a session.
     *
     * @param request - StopSessionClusterRequest
     *
     * @returns StopSessionClusterResponse
     *
     * @param string                    $workspaceId
     * @param StopSessionClusterRequest $request
     *
     * @return StopSessionClusterResponse
     */
    public function stopSessionCluster($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopSessionClusterWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Terminates an SQL query task.
     *
     * @param request - TerminateSqlStatementRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TerminateSqlStatementResponse
     *
     * @param string                       $workspaceId
     * @param string                       $statementId
     * @param TerminateSqlStatementRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return TerminateSqlStatementResponse
     */
    public function terminateSqlStatementWithOptions($workspaceId, $statementId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TerminateSqlStatement',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceId) . '/statement/' . Url::percentEncode($statementId) . '/terminate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TerminateSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates an SQL query task.
     *
     * @param request - TerminateSqlStatementRequest
     *
     * @returns TerminateSqlStatementResponse
     *
     * @param string                       $workspaceId
     * @param string                       $statementId
     * @param TerminateSqlStatementRequest $request
     *
     * @return TerminateSqlStatementResponse
     */
    public function terminateSqlStatement($workspaceId, $statementId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->terminateSqlStatementWithOptions($workspaceId, $statementId, $request, $headers, $runtime);
    }

    /**
     * UpdateKyuubiService.
     *
     * @param request - UpdateKyuubiServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKyuubiServiceResponse
     *
     * @param string                     $workspaceId
     * @param string                     $kyuubiServiceId
     * @param UpdateKyuubiServiceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateKyuubiServiceResponse
     */
    public function updateKyuubiServiceWithOptions($workspaceId, $kyuubiServiceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->computeInstance) {
            @$body['computeInstance'] = $request->computeInstance;
        }

        if (null !== $request->kyuubiConfigs) {
            @$body['kyuubiConfigs'] = $request->kyuubiConfigs;
        }

        if (null !== $request->kyuubiReleaseVersion) {
            @$body['kyuubiReleaseVersion'] = $request->kyuubiReleaseVersion;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->publicEndpointEnabled) {
            @$body['publicEndpointEnabled'] = $request->publicEndpointEnabled;
        }

        if (null !== $request->queue) {
            @$body['queue'] = $request->queue;
        }

        if (null !== $request->releaseVersion) {
            @$body['releaseVersion'] = $request->releaseVersion;
        }

        if (null !== $request->replica) {
            @$body['replica'] = $request->replica;
        }

        if (null !== $request->restart) {
            @$body['restart'] = $request->restart;
        }

        if (null !== $request->sparkConfigs) {
            @$body['sparkConfigs'] = $request->sparkConfigs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKyuubiService',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/kyuubi/' . Url::percentEncode($workspaceId) . '/' . Url::percentEncode($kyuubiServiceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKyuubiServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * UpdateKyuubiService.
     *
     * @param request - UpdateKyuubiServiceRequest
     *
     * @returns UpdateKyuubiServiceResponse
     *
     * @param string                     $workspaceId
     * @param string                     $kyuubiServiceId
     * @param UpdateKyuubiServiceRequest $request
     *
     * @return UpdateKyuubiServiceResponse
     */
    public function updateKyuubiService($workspaceId, $kyuubiServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKyuubiServiceWithOptions($workspaceId, $kyuubiServiceId, $request, $headers, $runtime);
    }

    /**
     * 更新kyuubi的token.
     *
     * @param request - UpdateKyuubiTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKyuubiTokenResponse
     *
     * @param string                   $workspaceId
     * @param string                   $kyuubiServiceId
     * @param string                   $tokenId
     * @param UpdateKyuubiTokenRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateKyuubiTokenResponse
     */
    public function updateKyuubiTokenWithOptions($workspaceId, $kyuubiServiceId, $tokenId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->autoExpireConfiguration) {
            @$body['autoExpireConfiguration'] = $request->autoExpireConfiguration;
        }

        if (null !== $request->memberArns) {
            @$body['memberArns'] = $request->memberArns;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->token) {
            @$body['token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKyuubiToken',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/kyuubiService/' . Url::percentEncode($kyuubiServiceId) . '/token/' . Url::percentEncode($tokenId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKyuubiTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新kyuubi的token.
     *
     * @param request - UpdateKyuubiTokenRequest
     *
     * @returns UpdateKyuubiTokenResponse
     *
     * @param string                   $workspaceId
     * @param string                   $kyuubiServiceId
     * @param string                   $tokenId
     * @param UpdateKyuubiTokenRequest $request
     *
     * @return UpdateKyuubiTokenResponse
     */
    public function updateKyuubiToken($workspaceId, $kyuubiServiceId, $tokenId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKyuubiTokenWithOptions($workspaceId, $kyuubiServiceId, $tokenId, $request, $headers, $runtime);
    }

    /**
     * 更新livy compute.
     *
     * @param request - UpdateLivyComputeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLivyComputeResponse
     *
     * @param string                   $workspaceBizId
     * @param string                   $livyComputeId
     * @param UpdateLivyComputeRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateLivyComputeResponse
     */
    public function updateLivyComputeWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->authType) {
            @$body['authType'] = $request->authType;
        }

        if (null !== $request->autoStartConfiguration) {
            @$body['autoStartConfiguration'] = $request->autoStartConfiguration;
        }

        if (null !== $request->autoStopConfiguration) {
            @$body['autoStopConfiguration'] = $request->autoStopConfiguration;
        }

        if (null !== $request->cpuLimit) {
            @$body['cpuLimit'] = $request->cpuLimit;
        }

        if (null !== $request->displayReleaseVersion) {
            @$body['displayReleaseVersion'] = $request->displayReleaseVersion;
        }

        if (null !== $request->enablePublic) {
            @$body['enablePublic'] = $request->enablePublic;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->fusion) {
            @$body['fusion'] = $request->fusion;
        }

        if (null !== $request->livyServerConf) {
            @$body['livyServerConf'] = $request->livyServerConf;
        }

        if (null !== $request->livyVersion) {
            @$body['livyVersion'] = $request->livyVersion;
        }

        if (null !== $request->memoryLimit) {
            @$body['memoryLimit'] = $request->memoryLimit;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->networkName) {
            @$body['networkName'] = $request->networkName;
        }

        if (null !== $request->queueName) {
            @$body['queueName'] = $request->queueName;
        }

        if (null !== $request->releaseVersion) {
            @$body['releaseVersion'] = $request->releaseVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLivyCompute',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/livycompute/' . Url::percentEncode($livyComputeId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLivyComputeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新livy compute.
     *
     * @param request - UpdateLivyComputeRequest
     *
     * @returns UpdateLivyComputeResponse
     *
     * @param string                   $workspaceBizId
     * @param string                   $livyComputeId
     * @param UpdateLivyComputeRequest $request
     *
     * @return UpdateLivyComputeResponse
     */
    public function updateLivyCompute($workspaceBizId, $livyComputeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLivyComputeWithOptions($workspaceBizId, $livyComputeId, $request, $headers, $runtime);
    }

    /**
     * Updates the workflow and time-based scheduling configurations.
     *
     * @param tmpReq - UpdateProcessDefinitionWithScheduleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProcessDefinitionWithScheduleResponse
     *
     * @param string                                     $bizId
     * @param string                                     $code
     * @param UpdateProcessDefinitionWithScheduleRequest $tmpReq
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateProcessDefinitionWithScheduleResponse
     */
    public function updateProcessDefinitionWithScheduleWithOptions($bizId, $code, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateProcessDefinitionWithScheduleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->globalParams) {
            $request->globalParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->globalParams, 'globalParams', 'json');
        }

        if (null !== $tmpReq->schedule) {
            $request->scheduleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->schedule, 'schedule', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        if (null !== $tmpReq->taskDefinitionJson) {
            $request->taskDefinitionJsonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskDefinitionJson, 'taskDefinitionJson', 'json');
        }

        if (null !== $tmpReq->taskRelationJson) {
            $request->taskRelationJsonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskRelationJson, 'taskRelationJson', 'json');
        }

        $query = [];
        if (null !== $request->alertEmailAddress) {
            @$query['alertEmailAddress'] = $request->alertEmailAddress;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->executionType) {
            @$query['executionType'] = $request->executionType;
        }

        if (null !== $request->globalParamsShrink) {
            @$query['globalParams'] = $request->globalParamsShrink;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->productNamespace) {
            @$query['productNamespace'] = $request->productNamespace;
        }

        if (null !== $request->publish) {
            @$query['publish'] = $request->publish;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->releaseState) {
            @$query['releaseState'] = $request->releaseState;
        }

        if (null !== $request->resourceQueue) {
            @$query['resourceQueue'] = $request->resourceQueue;
        }

        if (null !== $request->retryTimes) {
            @$query['retryTimes'] = $request->retryTimes;
        }

        if (null !== $request->runAs) {
            @$query['runAs'] = $request->runAs;
        }

        if (null !== $request->scheduleShrink) {
            @$query['schedule'] = $request->scheduleShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskDefinitionJsonShrink) {
            @$query['taskDefinitionJson'] = $request->taskDefinitionJsonShrink;
        }

        if (null !== $request->taskParallelism) {
            @$query['taskParallelism'] = $request->taskParallelism;
        }

        if (null !== $request->taskRelationJsonShrink) {
            @$query['taskRelationJson'] = $request->taskRelationJsonShrink;
        }

        if (null !== $request->timeout) {
            @$query['timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateProcessDefinitionWithSchedule',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/projects/' . Url::percentEncode($bizId) . '/process-definition/' . Url::percentEncode($code) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProcessDefinitionWithScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the workflow and time-based scheduling configurations.
     *
     * @param request - UpdateProcessDefinitionWithScheduleRequest
     *
     * @returns UpdateProcessDefinitionWithScheduleResponse
     *
     * @param string                                     $bizId
     * @param string                                     $code
     * @param UpdateProcessDefinitionWithScheduleRequest $request
     *
     * @return UpdateProcessDefinitionWithScheduleResponse
     */
    public function updateProcessDefinitionWithSchedule($bizId, $code, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProcessDefinitionWithScheduleWithOptions($bizId, $code, $request, $headers, $runtime);
    }

    /**
     * 更新Ray集群.
     *
     * @param request - UpdateRayClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRayClusterResponse
     *
     * @param string                  $workspaceId
     * @param string                  $clusterId
     * @param UpdateRayClusterRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRayClusterResponse
     */
    public function updateRayClusterWithOptions($workspaceId, $clusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayReleaseVersion) {
            @$body['displayReleaseVersion'] = $request->displayReleaseVersion;
        }

        if (null !== $request->extraParam) {
            @$body['extraParam'] = $request->extraParam;
        }

        if (null !== $request->headSpec) {
            @$body['headSpec'] = $request->headSpec;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->networkServiceName) {
            @$body['networkServiceName'] = $request->networkServiceName;
        }

        if (null !== $request->workerSpec) {
            @$body['workerSpec'] = $request->workerSpec;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRayCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/rayCluster/' . Url::percentEncode($clusterId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRayClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Ray集群.
     *
     * @param request - UpdateRayClusterRequest
     *
     * @returns UpdateRayClusterResponse
     *
     * @param string                  $workspaceId
     * @param string                  $clusterId
     * @param UpdateRayClusterRequest $request
     *
     * @return UpdateRayClusterResponse
     */
    public function updateRayCluster($workspaceId, $clusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRayClusterWithOptions($workspaceId, $clusterId, $request, $headers, $runtime);
    }
}
