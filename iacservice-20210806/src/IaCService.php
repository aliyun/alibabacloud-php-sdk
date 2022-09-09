<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateParameterSetRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateTaskGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateTaskGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AttachRabbitmqPublisherRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AttachRabbitmqPublisherResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CancelResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CancelResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CloneModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CloneModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateAuthorizationRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateAuthorizationResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateJobRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateJobResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleMarketRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleMarketResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleVersionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateParameterSetRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectBuildRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectBuildResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRabbitmqPublisherRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRabbitmqPublisherResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteAuthorizationResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRabbitmqPublisherResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteResourceLinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteResourceLinkResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DetachRabbitmqPublisherRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DetachRabbitmqPublisherResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateParameterSetRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateTaskGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateTaskGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleMarketResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildConfigRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildConfigResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectJobSummaryResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectResourceSummaryResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRabbitmqPublisherResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceLinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceLinkResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskContextResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListAuthorizationsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListAuthorizationsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListJobsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListJobsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModuleMarketsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModuleMarketsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModuleVersionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetRelationRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetRelationResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectBuildsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRabbitmqPublishersRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRabbitmqPublishersResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRelationModulesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRelationTasksRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRelationTasksResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTaskVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTaskVersionsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourcesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourcesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTaskResourceRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTaskResourceResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\OperateJobRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\OperateJobResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\RemoveResourceExportTaskVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateAuthorizationAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateAuthorizationAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateModuleAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateModuleAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateModuleMarketAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateModuleMarketAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateParameterSetAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateParameterSetAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRabbitmqPublisherAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRabbitmqPublisherAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskAttributeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class IaCService extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('iacservice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AssociateParameterSetRequest $request
     *
     * @return AssociateParameterSetResponse
     */
    public function associateParameterSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->associateParameterSetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AssociateParameterSetRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return AssociateParameterSetResponse
     */
    public function associateParameterSetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->parameterSetIds)) {
            $body['parameterSetIds'] = $request->parameterSetIds;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AssociateParameterSet',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/parameterSets/operations/associate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AssociateParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $projectId
     * @param string                    $groupId
     * @param AssociateTaskGroupRequest $request
     *
     * @return AssociateTaskGroupResponse
     */
    public function associateTaskGroup($projectId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->associateTaskGroupWithOptions($projectId, $groupId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $projectId
     * @param string                    $groupId
     * @param AssociateTaskGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return AssociateTaskGroupResponse
     */
    public function associateTaskGroupWithOptions($projectId, $groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskIds)) {
            $body['taskIds'] = $request->taskIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AssociateTaskGroup',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project/' . OpenApiUtilClient::getEncodeParam($projectId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/associate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AssociateTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $publisherId
     * @param AttachRabbitmqPublisherRequest $request
     *
     * @return AttachRabbitmqPublisherResponse
     */
    public function attachRabbitmqPublisher($publisherId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachRabbitmqPublisherWithOptions($publisherId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $publisherId
     * @param AttachRabbitmqPublisherRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return AttachRabbitmqPublisherResponse
     */
    public function attachRabbitmqPublisherWithOptions($publisherId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AttachRabbitmqPublisher',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/publishers/' . OpenApiUtilClient::getEncodeParam($publisherId) . '/attach',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AttachRabbitmqPublisherResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $exportTaskId
     * @param CancelResourceExportTaskRequest $request
     *
     * @return CancelResourceExportTaskResponse
     */
    public function cancelResourceExportTask($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $exportTaskId
     * @param CancelResourceExportTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelResourceExportTaskResponse
     */
    public function cancelResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ramRole)) {
            $body['ramRole'] = $request->ramRole;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelResourceExportTask',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/exportTasks/cancel/' . OpenApiUtilClient::getEncodeParam($exportTaskId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloneModuleRequest $request
     *
     * @return CloneModuleResponse
     */
    public function cloneModule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneModuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CloneModuleRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CloneModuleResponse
     */
    public function cloneModuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $body['moduleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->moduleSource)) {
            $body['moduleSource'] = $request->moduleSource;
        }
        if (!Utils::isUnset($request->moduleVersion)) {
            $body['moduleVersion'] = $request->moduleVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloneModule',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/modules/operations/clone',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAuthorizationRequest $request
     *
     * @return CreateAuthorizationResponse
     */
    public function createAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAuthorizationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateAuthorizationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAuthorizationResponse
     */
    public function createAuthorizationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dueTime)) {
            $body['dueTime'] = $request->dueTime;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $body['moduleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->moduleVersion)) {
            $body['moduleVersion'] = $request->moduleVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->uid)) {
            $body['uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAuthorization',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/authorizations',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['projectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateGroup',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/group',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string           $taskId
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * @param string           $taskId
     * @param CreateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->subCommand)) {
            $body['subCommand'] = $request->subCommand;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateJob',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateModuleRequest $request
     *
     * @return CreateModuleResponse
     */
    public function createModule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateModuleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateModuleResponse
     */
    public function createModuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->source)) {
            $body['source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourcePath)) {
            $body['sourcePath'] = $request->sourcePath;
        }
        if (!Utils::isUnset($request->statePath)) {
            $body['statePath'] = $request->statePath;
        }
        if (!Utils::isUnset($request->versionStrategy)) {
            $body['versionStrategy'] = $request->versionStrategy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateModule',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/modules',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateModuleMarketRequest $request
     *
     * @return CreateModuleMarketResponse
     */
    public function createModuleMarket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModuleMarketWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateModuleMarketRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateModuleMarketResponse
     */
    public function createModuleMarketWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->codeUrl)) {
            $body['codeUrl'] = $request->codeUrl;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->moduleDetail)) {
            $body['moduleDetail'] = $request->moduleDetail;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $body['moduleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->moduleVersion)) {
            $body['moduleVersion'] = $request->moduleVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateModuleMarket',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/moduleMarkets',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateModuleMarketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $moduleId
     * @param CreateModuleVersionRequest $request
     *
     * @return CreateModuleVersionResponse
     */
    public function createModuleVersion($moduleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModuleVersionWithOptions($moduleId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $moduleId
     * @param CreateModuleVersionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateModuleVersionResponse
     */
    public function createModuleVersionWithOptions($moduleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateModuleVersion',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/modules/' . OpenApiUtilClient::getEncodeParam($moduleId) . '/versions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateParameterSetRequest $request
     *
     * @return CreateParameterSetResponse
     */
    public function createParameterSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createParameterSetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateParameterSetRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateParameterSetResponse
     */
    public function createParameterSetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['parameters'] = $request->parameters;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateParameterSet',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/parameterSets',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $projectId
     * @param CreateProjectBuildRequest $request
     *
     * @return CreateProjectBuildResponse
     */
    public function createProjectBuild($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectBuildWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $projectId
     * @param CreateProjectBuildRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateProjectBuildResponse
     */
    public function createProjectBuildWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->projectBuildAction)) {
            $body['projectBuildAction'] = $request->projectBuildAction;
        }
        if (!Utils::isUnset($request->taskIds)) {
            $body['taskIds'] = $request->taskIds;
        }
        if (!Utils::isUnset($request->taskPolicies)) {
            $body['taskPolicies'] = $request->taskPolicies;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProjectBuild',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project/' . OpenApiUtilClient::getEncodeParam($projectId) . '/build',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProjectBuildResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRabbitmqPublisherRequest $request
     *
     * @return CreateRabbitmqPublisherResponse
     */
    public function createRabbitmqPublisher($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRabbitmqPublisherWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateRabbitmqPublisherRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateRabbitmqPublisherResponse
     */
    public function createRabbitmqPublisherWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->exchangeName)) {
            $body['exchangeName'] = $request->exchangeName;
        }
        if (!Utils::isUnset($request->exchangeType)) {
            $body['exchangeType'] = $request->exchangeType;
        }
        if (!Utils::isUnset($request->hostName)) {
            $body['hostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->password)) {
            $body['password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $body['port'] = $request->port;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['userName'] = $request->userName;
        }
        if (!Utils::isUnset($request->virtualHost)) {
            $body['virtualHost'] = $request->virtualHost;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRabbitmqPublisher',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/publishers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRabbitmqPublisherResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateResourceExportTaskRequest $request
     *
     * @return CreateResourceExportTaskResponse
     */
    public function createResourceExportTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceExportTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateResourceExportTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateResourceExportTaskResponse
     */
    public function createResourceExportTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeRules)) {
            $body['excludeRules'] = $request->excludeRules;
        }
        if (!Utils::isUnset($request->exportToModule)) {
            $body['exportToModule'] = $request->exportToModule;
        }
        if (!Utils::isUnset($request->includeRules)) {
            $body['includeRules'] = $request->includeRules;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->ramRole)) {
            $body['ramRole'] = $request->ramRole;
        }
        if (!Utils::isUnset($request->terraformVersion)) {
            $body['terraformVersion'] = $request->terraformVersion;
        }
        if (!Utils::isUnset($request->triggerStrategy)) {
            $body['triggerStrategy'] = $request->triggerStrategy;
        }
        if (!Utils::isUnset($request->variables)) {
            $body['variables'] = $request->variables;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceExportTask',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/exportTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTaskRequest $request
     *
     * @return CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoApply)) {
            $body['autoApply'] = $request->autoApply;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->groupInfo)) {
            $body['groupInfo'] = $request->groupInfo;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $body['moduleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->moduleVersion)) {
            $body['moduleVersion'] = $request->moduleVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->protectionStrategy)) {
            $body['protectionStrategy'] = $request->protectionStrategy;
        }
        if (!Utils::isUnset($request->ramRole)) {
            $body['ramRole'] = $request->ramRole;
        }
        if (!Utils::isUnset($request->terraformVersion)) {
            $body['terraformVersion'] = $request->terraformVersion;
        }
        if (!Utils::isUnset($request->triggerStrategy)) {
            $body['triggerStrategy'] = $request->triggerStrategy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTask',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $authorizationId
     *
     * @return DeleteAuthorizationResponse
     */
    public function deleteAuthorization($authorizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAuthorizationWithOptions($authorizationId, $headers, $runtime);
    }

    /**
     * @param string         $authorizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAuthorizationResponse
     */
    public function deleteAuthorizationWithOptions($authorizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteAuthorization',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/authorizations/' . OpenApiUtilClient::getEncodeParam($authorizationId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $id
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGroupWithOptions($id, $headers, $runtime);
    }

    /**
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteGroup',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/group/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $moduleId
     *
     * @return DeleteModuleResponse
     */
    public function deleteModule($moduleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModuleWithOptions($moduleId, $headers, $runtime);
    }

    /**
     * @param string         $moduleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteModuleResponse
     */
    public function deleteModuleWithOptions($moduleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteModule',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/modules/' . OpenApiUtilClient::getEncodeParam($moduleId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $parameterSetId
     *
     * @return DeleteParameterSetResponse
     */
    public function deleteParameterSet($parameterSetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteParameterSetWithOptions($parameterSetId, $headers, $runtime);
    }

    /**
     * @param string         $parameterSetId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteParameterSetResponse
     */
    public function deleteParameterSetWithOptions($parameterSetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteParameterSet',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/parameterSets/' . OpenApiUtilClient::getEncodeParam($parameterSetId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $id
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($id, $headers, $runtime);
    }

    /**
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $publisherId
     *
     * @return DeleteRabbitmqPublisherResponse
     */
    public function deleteRabbitmqPublisher($publisherId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRabbitmqPublisherWithOptions($publisherId, $headers, $runtime);
    }

    /**
     * @param string         $publisherId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRabbitmqPublisherResponse
     */
    public function deleteRabbitmqPublisherWithOptions($publisherId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteRabbitmqPublisher',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/publishers/' . OpenApiUtilClient::getEncodeParam($publisherId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRabbitmqPublisherResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $exportTaskId
     *
     * @return DeleteResourceExportTaskResponse
     */
    public function deleteResourceExportTask($exportTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceExportTaskWithOptions($exportTaskId, $headers, $runtime);
    }

    /**
     * @param string         $exportTaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceExportTaskResponse
     */
    public function deleteResourceExportTaskWithOptions($exportTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceExportTask',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/exportTasks/' . OpenApiUtilClient::getEncodeParam($exportTaskId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteResourceLinkRequest $request
     *
     * @return DeleteResourceLinkResponse
     */
    public function deleteResourceLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteResourceLinkRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteResourceLinkResponse
     */
    public function deleteResourceLinkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productCode)) {
            $query['productCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->resourceTypeCode)) {
            $query['resourceTypeCode'] = $request->resourceTypeCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceLink',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/resources',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $taskId
     *
     * @return DeleteTaskResponse
     */
    public function deleteTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTaskResponse
     */
    public function deleteTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteTask',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $publisherId
     * @param DetachRabbitmqPublisherRequest $request
     *
     * @return DetachRabbitmqPublisherResponse
     */
    public function detachRabbitmqPublisher($publisherId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->detachRabbitmqPublisherWithOptions($publisherId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $publisherId
     * @param DetachRabbitmqPublisherRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DetachRabbitmqPublisherResponse
     */
    public function detachRabbitmqPublisherWithOptions($publisherId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetachRabbitmqPublisher',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/publishers/' . OpenApiUtilClient::getEncodeParam($publisherId) . '/detach',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DetachRabbitmqPublisherResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DissociateParameterSetRequest $request
     *
     * @return DissociateParameterSetResponse
     */
    public function dissociateParameterSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dissociateParameterSetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DissociateParameterSetRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DissociateParameterSetResponse
     */
    public function dissociateParameterSetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->parameterSetIds)) {
            $body['parameterSetIds'] = $request->parameterSetIds;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DissociateParameterSet',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/parameterSets/operations/dissociate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DissociateParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $projectId
     * @param string                     $groupId
     * @param DissociateTaskGroupRequest $request
     *
     * @return DissociateTaskGroupResponse
     */
    public function dissociateTaskGroup($projectId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dissociateTaskGroupWithOptions($projectId, $groupId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $projectId
     * @param string                     $groupId
     * @param DissociateTaskGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DissociateTaskGroupResponse
     */
    public function dissociateTaskGroupWithOptions($projectId, $groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskIds)) {
            $body['taskIds'] = $request->taskIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DissociateTaskGroup',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project/' . OpenApiUtilClient::getEncodeParam($projectId) . '/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/dissociate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DissociateTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $exportTaskId
     * @param ExecuteResourceExportTaskRequest $request
     *
     * @return ExecuteResourceExportTaskResponse
     */
    public function executeResourceExportTask($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $exportTaskId
     * @param ExecuteResourceExportTaskRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ExecuteResourceExportTaskResponse
     */
    public function executeResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ramRole)) {
            $body['ramRole'] = $request->ramRole;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteResourceExportTask',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/exportTasks/execute/' . OpenApiUtilClient::getEncodeParam($exportTaskId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $id
     *
     * @return GetGroupResponse
     */
    public function getGroup($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupWithOptions($id, $headers, $runtime);
    }

    /**
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetGroupResponse
     */
    public function getGroupWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetGroup',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/group/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $taskId
     * @param string $jobId
     *
     * @return GetJobResponse
     */
    public function getJob($taskId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($taskId, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $taskId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($taskId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetJob',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $moduleId
     *
     * @return GetModuleResponse
     */
    public function getModule($moduleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModuleWithOptions($moduleId, $headers, $runtime);
    }

    /**
     * @param string         $moduleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModuleResponse
     */
    public function getModuleWithOptions($moduleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetModule',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/modules/' . OpenApiUtilClient::getEncodeParam($moduleId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $moduleMarketId
     *
     * @return GetModuleMarketResponse
     */
    public function getModuleMarket($moduleMarketId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModuleMarketWithOptions($moduleMarketId, $headers, $runtime);
    }

    /**
     * @param string         $moduleMarketId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModuleMarketResponse
     */
    public function getModuleMarketWithOptions($moduleMarketId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetModuleMarket',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/moduleMarkets/' . OpenApiUtilClient::getEncodeParam($moduleMarketId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetModuleMarketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $moduleId
     * @param string $moduleVersion
     *
     * @return GetModuleVersionResponse
     */
    public function getModuleVersion($moduleId, $moduleVersion)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModuleVersionWithOptions($moduleId, $moduleVersion, $headers, $runtime);
    }

    /**
     * @param string         $moduleId
     * @param string         $moduleVersion
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModuleVersionResponse
     */
    public function getModuleVersionWithOptions($moduleId, $moduleVersion, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetModuleVersion',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/modules/' . OpenApiUtilClient::getEncodeParam($moduleId) . '/versions/' . OpenApiUtilClient::getEncodeParam($moduleVersion) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $parameterSetId
     *
     * @return GetParameterSetResponse
     */
    public function getParameterSet($parameterSetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getParameterSetWithOptions($parameterSetId, $headers, $runtime);
    }

    /**
     * @param string         $parameterSetId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetParameterSetResponse
     */
    public function getParameterSetWithOptions($parameterSetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetParameterSet',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/parameterSets/' . OpenApiUtilClient::getEncodeParam($parameterSetId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $id
     *
     * @return GetProjectResponse
     */
    public function getProject($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($id, $headers, $runtime);
    }

    /**
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProject',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $projectId
     * @param GetProjectBuildConfigRequest $request
     *
     * @return GetProjectBuildConfigResponse
     */
    public function getProjectBuildConfig($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectBuildConfigWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $projectId
     * @param GetProjectBuildConfigRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetProjectBuildConfigResponse
     */
    public function getProjectBuildConfigWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectBuildId)) {
            $query['projectBuildId'] = $request->projectBuildId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProjectBuildConfig',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project/' . OpenApiUtilClient::getEncodeParam($projectId) . '/buildConfig',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectBuildConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $projectId
     * @param string $projectBuildId
     *
     * @return GetProjectBuildContextResponse
     */
    public function getProjectBuildContext($projectId, $projectBuildId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectBuildContextWithOptions($projectId, $projectBuildId, $headers, $runtime);
    }

    /**
     * @param string         $projectId
     * @param string         $projectBuildId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectBuildContextResponse
     */
    public function getProjectBuildContextWithOptions($projectId, $projectBuildId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProjectBuildContext',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project/' . OpenApiUtilClient::getEncodeParam($projectId) . '/build/' . OpenApiUtilClient::getEncodeParam($projectBuildId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectBuildContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $projectId
     *
     * @return GetProjectJobSummaryResponse
     */
    public function getProjectJobSummary($projectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectJobSummaryWithOptions($projectId, $headers, $runtime);
    }

    /**
     * @param string         $projectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectJobSummaryResponse
     */
    public function getProjectJobSummaryWithOptions($projectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProjectJobSummary',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project/' . OpenApiUtilClient::getEncodeParam($projectId) . '/job/statistics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectJobSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $projectId
     *
     * @return GetProjectResourceSummaryResponse
     */
    public function getProjectResourceSummary($projectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectResourceSummaryWithOptions($projectId, $headers, $runtime);
    }

    /**
     * @param string         $projectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectResourceSummaryResponse
     */
    public function getProjectResourceSummaryWithOptions($projectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProjectResourceSummary',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project/' . OpenApiUtilClient::getEncodeParam($projectId) . '/resource/statistics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectResourceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $publisherId
     *
     * @return GetRabbitmqPublisherResponse
     */
    public function getRabbitmqPublisher($publisherId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRabbitmqPublisherWithOptions($publisherId, $headers, $runtime);
    }

    /**
     * @param string         $publisherId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRabbitmqPublisherResponse
     */
    public function getRabbitmqPublisherWithOptions($publisherId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRabbitmqPublisher',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/publishers/' . OpenApiUtilClient::getEncodeParam($publisherId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRabbitmqPublisherResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $exportTaskId
     * @param GetResourceExportTaskRequest $request
     *
     * @return GetResourceExportTaskResponse
     */
    public function getResourceExportTask($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $exportTaskId
     * @param GetResourceExportTaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetResourceExportTaskResponse
     */
    public function getResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exportVersion)) {
            $query['exportVersion'] = $request->exportVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceExportTask',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/exportTasks/' . OpenApiUtilClient::getEncodeParam($exportTaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceLinkRequest $request
     *
     * @return GetResourceLinkResponse
     */
    public function getResourceLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetResourceLinkRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetResourceLinkResponse
     */
    public function getResourceLinkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productCode)) {
            $query['productCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->resourceTypeCode)) {
            $query['resourceTypeCode'] = $request->resourceTypeCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceLink',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $taskId
     *
     * @return GetTaskResponse
     */
    public function getTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTask',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $taskId
     *
     * @return GetTaskContextResponse
     */
    public function getTaskContext($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskContextWithOptions($taskId, $headers, $runtime);
    }

    /**
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskContextResponse
     */
    public function getTaskContextWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTaskContext',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/context',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAuthorizationsRequest $request
     *
     * @return ListAuthorizationsResponse
     */
    public function listAuthorizations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAuthorizationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAuthorizationsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListAuthorizationsResponse
     */
    public function listAuthorizationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizationId)) {
            $query['authorizationId'] = $request->authorizationId;
        }
        if (!Utils::isUnset($request->authorizationType)) {
            $query['authorizationType'] = $request->authorizationType;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
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
            'action'      => 'ListAuthorizations',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/authorizations',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAuthorizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGroupRequest $request
     *
     * @return ListGroupResponse
     */
    public function listGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListGroupRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListGroupResponse
     */
    public function listGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['projectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroup',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/group',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string          $taskId
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * @param string          $taskId
     * @param ListJobsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/jobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListModuleMarketsRequest $request
     *
     * @return ListModuleMarketsResponse
     */
    public function listModuleMarkets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModuleMarketsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListModuleMarketsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListModuleMarketsResponse
     */
    public function listModuleMarketsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModuleMarkets',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/moduleMarkets',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListModuleMarketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $moduleId
     * @param ListModuleVersionRequest $request
     *
     * @return ListModuleVersionResponse
     */
    public function listModuleVersion($moduleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModuleVersionWithOptions($moduleId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $moduleId
     * @param ListModuleVersionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListModuleVersionResponse
     */
    public function listModuleVersionWithOptions($moduleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
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
            'action'      => 'ListModuleVersion',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/modules/' . OpenApiUtilClient::getEncodeParam($moduleId) . '/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListModulesRequest $request
     *
     * @return ListModulesResponse
     */
    public function listModules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListModulesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListModulesResponse
     */
    public function listModulesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
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
            'action'      => 'ListModules',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/modules',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListModulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListParameterSetRelationRequest $request
     *
     * @return ListParameterSetRelationResponse
     */
    public function listParameterSetRelation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listParameterSetRelationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListParameterSetRelationRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListParameterSetRelationResponse
     */
    public function listParameterSetRelationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListParameterSetRelation',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/parameterSets/operations/relation',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListParameterSetRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListParameterSetsRequest $request
     *
     * @return ListParameterSetsResponse
     */
    public function listParameterSets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listParameterSetsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListParameterSetsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListParameterSetsResponse
     */
    public function listParameterSetsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
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
            'action'      => 'ListParameterSets',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/parameterSets',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListParameterSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProjectRequest $request
     *
     * @return ListProjectResponse
     */
    public function listProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProjectRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListProjectResponse
     */
    public function listProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ListProject',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $projectId
     *
     * @return ListProjectBuildsResponse
     */
    public function listProjectBuilds($projectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectBuildsWithOptions($projectId, $headers, $runtime);
    }

    /**
     * @param string         $projectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListProjectBuildsResponse
     */
    public function listProjectBuildsWithOptions($projectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListProjectBuilds',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project/' . OpenApiUtilClient::getEncodeParam($projectId) . '/build',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectBuildsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRabbitmqPublishersRequest $request
     *
     * @return ListRabbitmqPublishersResponse
     */
    public function listRabbitmqPublishers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRabbitmqPublishersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListRabbitmqPublishersRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListRabbitmqPublishersResponse
     */
    public function listRabbitmqPublishersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
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
            'action'      => 'ListRabbitmqPublishers',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/publishers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRabbitmqPublishersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $type
     *
     * @return ListRelationModulesResponse
     */
    public function listRelationModules($type)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRelationModulesWithOptions($type, $headers, $runtime);
    }

    /**
     * @param string         $type
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRelationModulesResponse
     */
    public function listRelationModulesWithOptions($type, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListRelationModules',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/modules/relation/' . OpenApiUtilClient::getEncodeParam($type) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRelationModulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $type
     * @param ListRelationTasksRequest $request
     *
     * @return ListRelationTasksResponse
     */
    public function listRelationTasks($type, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRelationTasksWithOptions($type, $request, $headers, $runtime);
    }

    /**
     * @param string                   $type
     * @param ListRelationTasksRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListRelationTasksResponse
     */
    public function listRelationTasksWithOptions($type, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['moduleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['projectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRelationTasks',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/relation/' . OpenApiUtilClient::getEncodeParam($type) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRelationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                $exportTaskId
     * @param ListResourceExportTaskVersionsRequest $request
     *
     * @return ListResourceExportTaskVersionsResponse
     */
    public function listResourceExportTaskVersions($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceExportTaskVersionsWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * @param string                                $exportTaskId
     * @param ListResourceExportTaskVersionsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListResourceExportTaskVersionsResponse
     */
    public function listResourceExportTaskVersionsWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exportVersion)) {
            $query['exportVersion'] = $request->exportVersion;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceExportTaskVersions',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/exportTasks/' . OpenApiUtilClient::getEncodeParam($exportTaskId) . '/exportVersions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceExportTaskVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourceExportTasksRequest $request
     *
     * @return ListResourceExportTasksResponse
     */
    public function listResourceExportTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceExportTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListResourceExportTasksRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListResourceExportTasksResponse
     */
    public function listResourceExportTasksWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exportTaskId)) {
            $query['exportTaskId'] = $request->exportTaskId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
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
            'action'      => 'ListResourceExportTasks',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/exportTasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceExportTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourcesRequest $request
     *
     * @return ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListResourcesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['sourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->sourceValue)) {
            $query['sourceValue'] = $request->sourceValue;
        }
        if (!Utils::isUnset($request->specType)) {
            $query['specType'] = $request->specType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResources',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/resources/stateparser',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $taskId
     * @param ListTaskResourceRequest $request
     *
     * @return ListTaskResourceResponse
     */
    public function listTaskResource($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTaskResourceWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $taskId
     * @param ListTaskResourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTaskResourceResponse
     */
    public function listTaskResourceWithOptions($taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ListTaskResource',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTaskResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTasksRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['groupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['moduleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['projectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $taskId
     * @param string            $jobId
     * @param string            $operationType
     * @param OperateJobRequest $request
     *
     * @return OperateJobResponse
     */
    public function operateJob($taskId, $jobId, $operationType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->operateJobWithOptions($taskId, $jobId, $operationType, $request, $headers, $runtime);
    }

    /**
     * @param string            $taskId
     * @param string            $jobId
     * @param string            $operationType
     * @param OperateJobRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return OperateJobResponse
     */
    public function operateJobWithOptions($taskId, $jobId, $operationType, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['comment'] = $request->comment;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateJob',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '/operation/' . OpenApiUtilClient::getEncodeParam($operationType) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OperateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $exportTaskId
     * @param string $exportVersion
     *
     * @return RemoveResourceExportTaskVersionResponse
     */
    public function removeResourceExportTaskVersion($exportTaskId, $exportVersion)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeResourceExportTaskVersionWithOptions($exportTaskId, $exportVersion, $headers, $runtime);
    }

    /**
     * @param string         $exportTaskId
     * @param string         $exportVersion
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveResourceExportTaskVersionResponse
     */
    public function removeResourceExportTaskVersionWithOptions($exportTaskId, $exportVersion, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveResourceExportTaskVersion',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/exportTasks/' . OpenApiUtilClient::getEncodeParam($exportTaskId) . '/' . OpenApiUtilClient::getEncodeParam($exportVersion) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveResourceExportTaskVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                              $authorizationId
     * @param UpdateAuthorizationAttributeRequest $request
     *
     * @return UpdateAuthorizationAttributeResponse
     */
    public function updateAuthorizationAttribute($authorizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAuthorizationAttributeWithOptions($authorizationId, $request, $headers, $runtime);
    }

    /**
     * @param string                              $authorizationId
     * @param UpdateAuthorizationAttributeRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateAuthorizationAttributeResponse
     */
    public function updateAuthorizationAttributeWithOptions($authorizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dueTime)) {
            $body['dueTime'] = $request->dueTime;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuthorizationAttribute',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/authorizations/' . OpenApiUtilClient::getEncodeParam($authorizationId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAuthorizationAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $id
     * @param UpdateGroupRequest $request
     *
     * @return UpdateGroupResponse
     */
    public function updateGroup($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGroupWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * @param string             $id
     * @param UpdateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateGroupResponse
     */
    public function updateGroupWithOptions($id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroup',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/group/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $moduleId
     * @param UpdateModuleAttributeRequest $request
     *
     * @return UpdateModuleAttributeResponse
     */
    public function updateModuleAttribute($moduleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModuleAttributeWithOptions($moduleId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $moduleId
     * @param UpdateModuleAttributeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateModuleAttributeResponse
     */
    public function updateModuleAttributeWithOptions($moduleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->source)) {
            $body['source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourcePath)) {
            $body['sourcePath'] = $request->sourcePath;
        }
        if (!Utils::isUnset($request->statePath)) {
            $body['statePath'] = $request->statePath;
        }
        if (!Utils::isUnset($request->versionStrategy)) {
            $body['versionStrategy'] = $request->versionStrategy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateModuleAttribute',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/modules/' . OpenApiUtilClient::getEncodeParam($moduleId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateModuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                             $moduleMarketId
     * @param UpdateModuleMarketAttributeRequest $request
     *
     * @return UpdateModuleMarketAttributeResponse
     */
    public function updateModuleMarketAttribute($moduleMarketId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModuleMarketAttributeWithOptions($moduleMarketId, $request, $headers, $runtime);
    }

    /**
     * @param string                             $moduleMarketId
     * @param UpdateModuleMarketAttributeRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateModuleMarketAttributeResponse
     */
    public function updateModuleMarketAttributeWithOptions($moduleMarketId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->moduleDetail)) {
            $body['moduleDetail'] = $request->moduleDetail;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateModuleMarketAttribute',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/moduleMarkets/' . OpenApiUtilClient::getEncodeParam($moduleMarketId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateModuleMarketAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                             $parameterSetId
     * @param UpdateParameterSetAttributeRequest $request
     *
     * @return UpdateParameterSetAttributeResponse
     */
    public function updateParameterSetAttribute($parameterSetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateParameterSetAttributeWithOptions($parameterSetId, $request, $headers, $runtime);
    }

    /**
     * @param string                             $parameterSetId
     * @param UpdateParameterSetAttributeRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateParameterSetAttributeResponse
     */
    public function updateParameterSetAttributeWithOptions($parameterSetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['parameters'] = $request->parameters;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateParameterSetAttribute',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/parameterSets/' . OpenApiUtilClient::getEncodeParam($parameterSetId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateParameterSetAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $id
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * @param string               $id
     * @param UpdateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProject',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/project/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                  $publisherId
     * @param UpdateRabbitmqPublisherAttributeRequest $request
     *
     * @return UpdateRabbitmqPublisherAttributeResponse
     */
    public function updateRabbitmqPublisherAttribute($publisherId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRabbitmqPublisherAttributeWithOptions($publisherId, $request, $headers, $runtime);
    }

    /**
     * @param string                                  $publisherId
     * @param UpdateRabbitmqPublisherAttributeRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateRabbitmqPublisherAttributeResponse
     */
    public function updateRabbitmqPublisherAttributeWithOptions($publisherId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->exchangeName)) {
            $body['exchangeName'] = $request->exchangeName;
        }
        if (!Utils::isUnset($request->exchangeType)) {
            $body['exchangeType'] = $request->exchangeType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRabbitmqPublisherAttribute',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/publishers/' . OpenApiUtilClient::getEncodeParam($publisherId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRabbitmqPublisherAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                   $exportTaskId
     * @param UpdateResourceExportTaskAttributeRequest $request
     *
     * @return UpdateResourceExportTaskAttributeResponse
     */
    public function updateResourceExportTaskAttribute($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceExportTaskAttributeWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * @param string                                   $exportTaskId
     * @param UpdateResourceExportTaskAttributeRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateResourceExportTaskAttributeResponse
     */
    public function updateResourceExportTaskAttributeWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeRules)) {
            $body['excludeRules'] = $request->excludeRules;
        }
        if (!Utils::isUnset($request->exportToModule)) {
            $body['exportToModule'] = $request->exportToModule;
        }
        if (!Utils::isUnset($request->includeRules)) {
            $body['includeRules'] = $request->includeRules;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->ramRole)) {
            $body['ramRole'] = $request->ramRole;
        }
        if (!Utils::isUnset($request->terraformVersion)) {
            $body['terraformVersion'] = $request->terraformVersion;
        }
        if (!Utils::isUnset($request->triggerStrategy)) {
            $body['triggerStrategy'] = $request->triggerStrategy;
        }
        if (!Utils::isUnset($request->variables)) {
            $body['variables'] = $request->variables;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceExportTaskAttribute',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/exportTasks/' . OpenApiUtilClient::getEncodeParam($exportTaskId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceExportTaskAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $taskId
     * @param UpdateTaskAttributeRequest $request
     *
     * @return UpdateTaskAttributeResponse
     */
    public function updateTaskAttribute($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTaskAttributeWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $taskId
     * @param UpdateTaskAttributeRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateTaskAttributeResponse
     */
    public function updateTaskAttributeWithOptions($taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoApply)) {
            $body['autoApply'] = $request->autoApply;
        }
        if (!Utils::isUnset($request->groupInfo)) {
            $body['groupInfo'] = $request->groupInfo;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $body['moduleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->moduleVersion)) {
            $body['moduleVersion'] = $request->moduleVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->protectionStrategy)) {
            $body['protectionStrategy'] = $request->protectionStrategy;
        }
        if (!Utils::isUnset($request->ramRole)) {
            $body['ramRole'] = $request->ramRole;
        }
        if (!Utils::isUnset($request->terraformVersion)) {
            $body['terraformVersion'] = $request->terraformVersion;
        }
        if (!Utils::isUnset($request->triggerStrategy)) {
            $body['triggerStrategy'] = $request->triggerStrategy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskAttribute',
            'version'     => '2021-08-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
