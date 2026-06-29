<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\AddWorkNodeWorkforceRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\AddWorkNodeWorkforceResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\AppendAllDataToTaskRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\AppendAllDataToTaskResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\CreateTaskRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\CreateTaskResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\CreateUserRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\CreateUserResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\DeleteTaskResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\DeleteUserResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ExportAnnotationsRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ExportAnnotationsResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetJobRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetJobResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetSubtaskItemResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetSubtaskResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTaskResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTaskStatisticsRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTaskStatisticsResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTaskTemplateQuestionsResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTaskTemplateResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTaskTemplateViewsResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTaskWorkforceResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTaskWorkforceStatisticRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTaskWorkforceStatisticResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTemplateQuestionsResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTemplateResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTemplateViewResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetTenantResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\GetUserResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListJobsRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListJobsResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListSubtaskItemsRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListSubtaskItemsResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListSubtasksRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListSubtasksResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListTasksRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListTasksResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListTemplatesShrinkRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListTenantsRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListTenantsResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListUsersRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\ListUsersResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\RemoveWorkNodeWorkforceRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\RemoveWorkNodeWorkforceResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\UpdateTaskRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\UpdateTaskResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\UpdateTaskWorkforceRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\UpdateTaskWorkforceResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\UpdateTenantRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\UpdateTenantResponse;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\UpdateUserRequest;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\UpdateUserResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class OpenITag extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-shenzhen' => 'openitag.cn-shenzhen.aliyuncs.com',
            'cn-shanghai' => 'openitag.cn-shanghai.aliyuncs.com',
            'cn-hangzhou' => 'openitag.cn-hangzhou.aliyuncs.com',
            'cn-beijing' => 'openitag.cn-beijing.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('openitag', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Assign personnel to the worker nodes (annotation, quality inspection, and validation) of an annotation job.
     *
     * @param request - AddWorkNodeWorkforceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddWorkNodeWorkforceResponse
     *
     * @param string                      $TenantId
     * @param string                      $TaskId
     * @param string                      $WorkNodeId
     * @param AddWorkNodeWorkforceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return AddWorkNodeWorkforceResponse
     */
    public function addWorkNodeWorkforceWithOptions($TenantId, $TaskId, $WorkNodeId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userIds) {
            @$body['UserIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddWorkNodeWorkforce',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/worknodes/' . Url::percentEncode($WorkNodeId) . '/workforce',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddWorkNodeWorkforceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Assign personnel to the worker nodes (annotation, quality inspection, and validation) of an annotation job.
     *
     * @param request - AddWorkNodeWorkforceRequest
     *
     * @returns AddWorkNodeWorkforceResponse
     *
     * @param string                      $TenantId
     * @param string                      $TaskId
     * @param string                      $WorkNodeId
     * @param AddWorkNodeWorkforceRequest $request
     *
     * @return AddWorkNodeWorkforceResponse
     */
    public function addWorkNodeWorkforce($TenantId, $TaskId, $WorkNodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addWorkNodeWorkforceWithOptions($TenantId, $TaskId, $WorkNodeId, $request, $headers, $runtime);
    }

    /**
     * Append data to a job.
     *
     * @param request - AppendAllDataToTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AppendAllDataToTaskResponse
     *
     * @param string                     $TenantId
     * @param string                     $TaskId
     * @param AppendAllDataToTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return AppendAllDataToTaskResponse
     */
    public function appendAllDataToTaskWithOptions($TenantId, $TaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'AppendAllDataToTask',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/appendAllDataToTask',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AppendAllDataToTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Append data to a job.
     *
     * @param request - AppendAllDataToTaskRequest
     *
     * @returns AppendAllDataToTaskResponse
     *
     * @param string                     $TenantId
     * @param string                     $TaskId
     * @param AppendAllDataToTaskRequest $request
     *
     * @return AppendAllDataToTaskResponse
     */
    public function appendAllDataToTask($TenantId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->appendAllDataToTaskWithOptions($TenantId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * Create an annotation job for the current tenant.
     *
     * @param request - CreateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTaskResponse
     *
     * @param string            $TenantId
     * @param CreateTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskWithOptions($TenantId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateTask',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an annotation job for the current tenant.
     *
     * @param request - CreateTaskRequest
     *
     * @returns CreateTaskResponse
     *
     * @param string            $TenantId
     * @param CreateTaskRequest $request
     *
     * @return CreateTaskResponse
     */
    public function createTask($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * You can add a new template for the current tenant and customize the annotation template based on your business requirements.
     *
     * @param request - CreateTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateResponse
     *
     * @param string                $TenantId
     * @param CreateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($TenantId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateTemplate',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/templates',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can add a new template for the current tenant and customize the annotation template based on your business requirements.
     *
     * @param request - CreateTemplateRequest
     *
     * @returns CreateTemplateResponse
     *
     * @param string                $TenantId
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTemplateWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * Add a member to the tenant.
     *
     * @param request - CreateUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserResponse
     *
     * @param string            $TenantId
     * @param CreateUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($TenantId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountNo) {
            @$body['AccountNo'] = $request->accountNo;
        }

        if (null !== $request->accountType) {
            @$body['AccountType'] = $request->accountType;
        }

        if (null !== $request->role) {
            @$body['Role'] = $request->role;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/users',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a member to the tenant.
     *
     * @param request - CreateUserRequest
     *
     * @returns CreateUserResponse
     *
     * @param string            $TenantId
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * Delete a job under the current tenant.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTaskResponse
     *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTaskResponse
     */
    public function deleteTaskWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTask',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a job under the current tenant.
     *
     * @returns DeleteTaskResponse
     *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return DeleteTaskResponse
     */
    public function deleteTask($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTaskWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * Delete the template under the current tenant.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplateResponse
     *
     * @param string         $TenantId
     * @param string         $TemplateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($TenantId, $TemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTemplate',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/templates/' . Url::percentEncode($TemplateId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete the template under the current tenant.
     *
     * @returns DeleteTemplateResponse
     *
     * @param string $TenantId
     * @param string $TemplateId
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($TenantId, $TemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTemplateWithOptions($TenantId, $TemplateId, $headers, $runtime);
    }

    /**
     * Delete a member within a tenant.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserResponse
     *
     * @param string         $TenantId
     * @param string         $UserId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($TenantId, $UserId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteUser',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/users/' . Url::percentEncode($UserId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a member within a tenant.
     *
     * @returns DeleteUserResponse
     *
     * @param string $TenantId
     * @param string $UserId
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($TenantId, $UserId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUserWithOptions($TenantId, $UserId, $headers, $runtime);
    }

    /**
     * Export the result data of an annotation job.
     *
     * @param request - ExportAnnotationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportAnnotationsResponse
     *
     * @param string                   $TenantId
     * @param string                   $TaskId
     * @param ExportAnnotationsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ExportAnnotationsResponse
     */
    public function exportAnnotationsWithOptions($TenantId, $TaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ossPath) {
            @$query['OssPath'] = $request->ossPath;
        }

        if (null !== $request->registerDataset) {
            @$query['RegisterDataset'] = $request->registerDataset;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportAnnotations',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/annotations/export',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportAnnotationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Export the result data of an annotation job.
     *
     * @param request - ExportAnnotationsRequest
     *
     * @returns ExportAnnotationsResponse
     *
     * @param string                   $TenantId
     * @param string                   $TaskId
     * @param ExportAnnotationsRequest $request
     *
     * @return ExportAnnotationsResponse
     */
    public function exportAnnotations($TenantId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportAnnotationsWithOptions($TenantId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * Query the information of a single annotation export result.
     *
     * @param request - GetJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobResponse
     *
     * @param string         $TenantId
     * @param string         $JobId
     * @param GetJobRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($TenantId, $JobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJob',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/jobs/' . Url::percentEncode($JobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the information of a single annotation export result.
     *
     * @param request - GetJobRequest
     *
     * @returns GetJobResponse
     *
     * @param string        $TenantId
     * @param string        $JobId
     * @param GetJobRequest $request
     *
     * @return GetJobResponse
     */
    public function getJob($TenantId, $JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($TenantId, $JobId, $request, $headers, $runtime);
    }

    /**
     * Query the information of a single subtask package.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSubtaskResponse
     *
     * @param string         $TenantId
     * @param string         $TaskID
     * @param string         $SubtaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSubtaskResponse
     */
    public function getSubtaskWithOptions($TenantId, $TaskID, $SubtaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSubtask',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskID) . '/subtasks/' . Url::percentEncode($SubtaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSubtaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the information of a single subtask package.
     *
     * @returns GetSubtaskResponse
     *
     * @param string $TenantId
     * @param string $TaskID
     * @param string $SubtaskId
     *
     * @return GetSubtaskResponse
     */
    public function getSubtask($TenantId, $TaskID, $SubtaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSubtaskWithOptions($TenantId, $TaskID, $SubtaskId, $headers, $runtime);
    }

    /**
     * Query a single annotated data item in a subtask package.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSubtaskItemResponse
     *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string         $SubtaskId
     * @param string         $ItemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSubtaskItemResponse
     */
    public function getSubtaskItemWithOptions($TenantId, $TaskId, $SubtaskId, $ItemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSubtaskItem',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/subtasks/' . Url::percentEncode($SubtaskId) . '/items/' . Url::percentEncode($ItemId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSubtaskItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query a single annotated data item in a subtask package.
     *
     * @returns GetSubtaskItemResponse
     *
     * @param string $TenantId
     * @param string $TaskId
     * @param string $SubtaskId
     * @param string $ItemId
     *
     * @return GetSubtaskItemResponse
     */
    public function getSubtaskItem($TenantId, $TaskId, $SubtaskId, $ItemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSubtaskItemWithOptions($TenantId, $TaskId, $SubtaskId, $ItemId, $headers, $runtime);
    }

    /**
     * Query the information of a single annotation job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskResponse
     *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTask',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the information of a single annotation job.
     *
     * @returns GetTaskResponse
     *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return GetTaskResponse
     */
    public function getTask($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * Query the current statistics information of a job.
     *
     * @param request - GetTaskStatisticsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskStatisticsResponse
     *
     * @param string                   $TenantId
     * @param string                   $TaskId
     * @param GetTaskStatisticsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetTaskStatisticsResponse
     */
    public function getTaskStatisticsWithOptions($TenantId, $TaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->statType) {
            @$query['StatType'] = $request->statType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskStatistics',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/statistics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the current statistics information of a job.
     *
     * @param request - GetTaskStatisticsRequest
     *
     * @returns GetTaskStatisticsResponse
     *
     * @param string                   $TenantId
     * @param string                   $TaskId
     * @param GetTaskStatisticsRequest $request
     *
     * @return GetTaskStatisticsResponse
     */
    public function getTaskStatistics($TenantId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskStatisticsWithOptions($TenantId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * Query the current status of a job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskStatusResponse
     *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTaskStatus',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the current status of a job.
     *
     * @returns GetTaskStatusResponse
     *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskStatusWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * Query the current template information of a job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskTemplateResponse
     *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskTemplateResponse
     */
    public function getTaskTemplateWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTaskTemplate',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/template',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the current template information of a job.
     *
     * @returns GetTaskTemplateResponse
     *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return GetTaskTemplateResponse
     */
    public function getTaskTemplate($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskTemplateWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * Query job template questions.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskTemplateQuestionsResponse
     *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskTemplateQuestionsResponse
     */
    public function getTaskTemplateQuestionsWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTaskTemplateQuestions',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/template/questions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskTemplateQuestionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query job template questions.
     *
     * @returns GetTaskTemplateQuestionsResponse
     *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return GetTaskTemplateQuestionsResponse
     */
    public function getTaskTemplateQuestions($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskTemplateQuestionsWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * Query the data display information in the job template.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskTemplateViewsResponse
     *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskTemplateViewsResponse
     */
    public function getTaskTemplateViewsWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTaskTemplateViews',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/template/views',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskTemplateViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the data display information in the job template.
     *
     * @returns GetTaskTemplateViewsResponse
     *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return GetTaskTemplateViewsResponse
     */
    public function getTaskTemplateViews($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskTemplateViewsWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * Query the personnel configuration information of each node in a job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskWorkforceResponse
     *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskWorkforceResponse
     */
    public function getTaskWorkforceWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTaskWorkforce',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/workforce',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskWorkforceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the personnel configuration information of each node in a job.
     *
     * @returns GetTaskWorkforceResponse
     *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return GetTaskWorkforceResponse
     */
    public function getTaskWorkforce($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWorkforceWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * Query statistics of each member in a job.
     *
     * @param request - GetTaskWorkforceStatisticRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskWorkforceStatisticResponse
     *
     * @param string                           $TenantId
     * @param string                           $TaskId
     * @param GetTaskWorkforceStatisticRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetTaskWorkforceStatisticResponse
     */
    public function getTaskWorkforceStatisticWithOptions($TenantId, $TaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->statType) {
            @$query['StatType'] = $request->statType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskWorkforceStatistic',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/workforce/statistic',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskWorkforceStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query statistics of each member in a job.
     *
     * @param request - GetTaskWorkforceStatisticRequest
     *
     * @returns GetTaskWorkforceStatisticResponse
     *
     * @param string                           $TenantId
     * @param string                           $TaskId
     * @param GetTaskWorkforceStatisticRequest $request
     *
     * @return GetTaskWorkforceStatisticResponse
     */
    public function getTaskWorkforceStatistic($TenantId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWorkforceStatisticWithOptions($TenantId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * Query template information under a tenant.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateResponse
     *
     * @param string         $TenantId
     * @param string         $TemplateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($TenantId, $TemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTemplate',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/templates/' . Url::percentEncode($TemplateId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query template information under a tenant.
     *
     * @returns GetTemplateResponse
     *
     * @param string $TenantId
     * @param string $TemplateId
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($TenantId, $TemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateWithOptions($TenantId, $TemplateId, $headers, $runtime);
    }

    /**
     * Query question information such as Radio and Multiple Choice in a template.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateQuestionsResponse
     *
     * @param string         $TenantId
     * @param string         $TemplateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTemplateQuestionsResponse
     */
    public function getTemplateQuestionsWithOptions($TenantId, $TemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTemplateQuestions',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/templates/' . Url::percentEncode($TemplateId) . '/questions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTemplateQuestionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query question information such as Radio and Multiple Choice in a template.
     *
     * @returns GetTemplateQuestionsResponse
     *
     * @param string $TenantId
     * @param string $TemplateId
     *
     * @return GetTemplateQuestionsResponse
     */
    public function getTemplateQuestions($TenantId, $TemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateQuestionsWithOptions($TenantId, $TemplateId, $headers, $runtime);
    }

    /**
     * Query the display information such as images, text, and audio in the template.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateViewResponse
     *
     * @param string         $TenantId
     * @param string         $TemplateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTemplateViewResponse
     */
    public function getTemplateViewWithOptions($TenantId, $TemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTemplateView',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/templates/' . Url::percentEncode($TemplateId) . '/views',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTemplateViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the display information such as images, text, and audio in the template.
     *
     * @returns GetTemplateViewResponse
     *
     * @param string $TenantId
     * @param string $TemplateId
     *
     * @return GetTemplateViewResponse
     */
    public function getTemplateView($TenantId, $TemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateViewWithOptions($TenantId, $TemplateId, $headers, $runtime);
    }

    /**
     * Query information about the iTAG tenant.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTenantResponse
     *
     * @param string         $TenantId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTenantResponse
     */
    public function getTenantWithOptions($TenantId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTenant',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTenantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query information about the iTAG tenant.
     *
     * @returns GetTenantResponse
     *
     * @param string $TenantId
     *
     * @return GetTenantResponse
     */
    public function getTenant($TenantId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTenantWithOptions($TenantId, $headers, $runtime);
    }

    /**
     * Query the details of a single member in a tenant.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserResponse
     *
     * @param string         $TenantId
     * @param string         $UserId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($TenantId, $UserId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/users/' . Url::percentEncode($UserId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the details of a single member in a tenant.
     *
     * @returns GetUserResponse
     *
     * @param string $TenantId
     * @param string $UserId
     *
     * @return GetUserResponse
     */
    public function getUser($TenantId, $UserId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($TenantId, $UserId, $headers, $runtime);
    }

    /**
     * Displays a list of all exported annotation results.
     *
     * @param request - ListJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param string          $TenantId
     * @param ListJobsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($TenantId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/jobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Displays a list of all exported annotation results.
     *
     * @param request - ListJobsRequest
     *
     * @returns ListJobsResponse
     *
     * @param string          $TenantId
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * Display the annotation data of a single subtask package.
     *
     * @param request - ListSubtaskItemsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubtaskItemsResponse
     *
     * @param string                  $TenantId
     * @param string                  $TaskID
     * @param string                  $SubtaskId
     * @param ListSubtaskItemsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListSubtaskItemsResponse
     */
    public function listSubtaskItemsWithOptions($TenantId, $TaskID, $SubtaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSubtaskItems',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskID) . '/subtasks/' . Url::percentEncode($SubtaskId) . '/items',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSubtaskItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Display the annotation data of a single subtask package.
     *
     * @param request - ListSubtaskItemsRequest
     *
     * @returns ListSubtaskItemsResponse
     *
     * @param string                  $TenantId
     * @param string                  $TaskID
     * @param string                  $SubtaskId
     * @param ListSubtaskItemsRequest $request
     *
     * @return ListSubtaskItemsResponse
     */
    public function listSubtaskItems($TenantId, $TaskID, $SubtaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubtaskItemsWithOptions($TenantId, $TaskID, $SubtaskId, $request, $headers, $runtime);
    }

    /**
     * Displays the list of subtask packages.
     *
     * @param request - ListSubtasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubtasksResponse
     *
     * @param string              $TenantId
     * @param string              $TaskID
     * @param ListSubtasksRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListSubtasksResponse
     */
    public function listSubtasksWithOptions($TenantId, $TaskID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSubtasks',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskID) . '/subtasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSubtasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Displays the list of subtask packages.
     *
     * @param request - ListSubtasksRequest
     *
     * @returns ListSubtasksResponse
     *
     * @param string              $TenantId
     * @param string              $TaskID
     * @param ListSubtasksRequest $request
     *
     * @return ListSubtasksResponse
     */
    public function listSubtasks($TenantId, $TaskID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubtasksWithOptions($TenantId, $TaskID, $request, $headers, $runtime);
    }

    /**
     * Displays the list of annotation jobs for the current tenant.
     *
     * @param request - ListTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTasksResponse
     *
     * @param string           $TenantId
     * @param ListTasksRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($TenantId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTasks',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Displays the list of annotation jobs for the current tenant.
     *
     * @param request - ListTasksRequest
     *
     * @returns ListTasksResponse
     *
     * @param string           $TenantId
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTasksWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * Display the template list of the current tenant.
     *
     * @param tmpReq - ListTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplatesResponse
     *
     * @param string               $TenantId
     * @param ListTemplatesRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($TenantId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTemplatesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->types) {
            $request->typesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'simple');
        }

        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->typesShrink) {
            @$query['Types'] = $request->typesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplates',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Display the template list of the current tenant.
     *
     * @param request - ListTemplatesRequest
     *
     * @returns ListTemplatesResponse
     *
     * @param string               $TenantId
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTemplatesWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * Query iTAG tenants under an Alibaba Cloud account.
     *
     * @param request - ListTenantsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTenantsResponse
     *
     * @param ListTenantsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListTenantsResponse
     */
    public function listTenantsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTenants',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTenantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query iTAG tenants under an Alibaba Cloud account.
     *
     * @param request - ListTenantsRequest
     *
     * @returns ListTenantsResponse
     *
     * @param ListTenantsRequest $request
     *
     * @return ListTenantsResponse
     */
    public function listTenants($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTenantsWithOptions($request, $headers, $runtime);
    }

    /**
     * Displays all annotate members under the current tenant.
     *
     * @param request - ListUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersResponse
     *
     * @param string           $TenantId
     * @param ListUsersRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($TenantId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/users',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Displays all annotate members under the current tenant.
     *
     * @param request - ListUsersRequest
     *
     * @returns ListUsersResponse
     *
     * @param string           $TenantId
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * Delete Node Personnel.
     *
     * @param request - RemoveWorkNodeWorkforceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveWorkNodeWorkforceResponse
     *
     * @param string                         $TenantId
     * @param string                         $TaskId
     * @param string                         $WorkNodeId
     * @param RemoveWorkNodeWorkforceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return RemoveWorkNodeWorkforceResponse
     */
    public function removeWorkNodeWorkforceWithOptions($TenantId, $TaskId, $WorkNodeId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userIds) {
            @$body['UserIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveWorkNodeWorkforce',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/worknodes/' . Url::percentEncode($WorkNodeId) . '/workforce',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveWorkNodeWorkforceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Node Personnel.
     *
     * @param request - RemoveWorkNodeWorkforceRequest
     *
     * @returns RemoveWorkNodeWorkforceResponse
     *
     * @param string                         $TenantId
     * @param string                         $TaskId
     * @param string                         $WorkNodeId
     * @param RemoveWorkNodeWorkforceRequest $request
     *
     * @return RemoveWorkNodeWorkforceResponse
     */
    public function removeWorkNodeWorkforce($TenantId, $TaskId, $WorkNodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeWorkNodeWorkforceWithOptions($TenantId, $TaskId, $WorkNodeId, $request, $headers, $runtime);
    }

    /**
     * Modify a job under the current tenant.
     *
     * @param request - UpdateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTaskResponse
     *
     * @param string            $TenantId
     * @param string            $TaskId
     * @param UpdateTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateTaskResponse
     */
    public function updateTaskWithOptions($TenantId, $TaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateTask',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify a job under the current tenant.
     *
     * @param request - UpdateTaskRequest
     *
     * @returns UpdateTaskResponse
     *
     * @param string            $TenantId
     * @param string            $TaskId
     * @param UpdateTaskRequest $request
     *
     * @return UpdateTaskResponse
     */
    public function updateTask($TenantId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTaskWithOptions($TenantId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * Update job members.
     *
     * @param request - UpdateTaskWorkforceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTaskWorkforceResponse
     *
     * @param string                     $TenantId
     * @param string                     $TaskId
     * @param UpdateTaskWorkforceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateTaskWorkforceResponse
     */
    public function updateTaskWorkforceWithOptions($TenantId, $TaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->workforce) {
            @$body['Workforce'] = $request->workforce;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTaskWorkforce',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/tasks/' . Url::percentEncode($TaskId) . '/workforce',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTaskWorkforceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update job members.
     *
     * @param request - UpdateTaskWorkforceRequest
     *
     * @returns UpdateTaskWorkforceResponse
     *
     * @param string                     $TenantId
     * @param string                     $TaskId
     * @param UpdateTaskWorkforceRequest $request
     *
     * @return UpdateTaskWorkforceResponse
     */
    public function updateTaskWorkforce($TenantId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTaskWorkforceWithOptions($TenantId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * Modify the template under the current tenant.
     *
     * @param request - UpdateTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTemplateResponse
     *
     * @param string                $TenantId
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($TenantId, $TemplateId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateTemplate',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/templates/' . Url::percentEncode($TemplateId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the template under the current tenant.
     *
     * @param request - UpdateTemplateRequest
     *
     * @returns UpdateTemplateResponse
     *
     * @param string                $TenantId
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($TenantId, $TemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTemplateWithOptions($TenantId, $TemplateId, $request, $headers, $runtime);
    }

    /**
     * Modify the information of an iTAG tenant.
     *
     * @param request - UpdateTenantRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTenantResponse
     *
     * @param string              $TenantId
     * @param UpdateTenantRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateTenantResponse
     */
    public function updateTenantWithOptions($TenantId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->tenantName) {
            @$body['TenantName'] = $request->tenantName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTenant',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTenantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the information of an iTAG tenant.
     *
     * @param request - UpdateTenantRequest
     *
     * @returns UpdateTenantResponse
     *
     * @param string              $TenantId
     * @param UpdateTenantRequest $request
     *
     * @return UpdateTenantResponse
     */
    public function updateTenant($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTenantWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * Update member information within a tenant.
     *
     * @param request - UpdateUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserResponse
     *
     * @param string            $TenantId
     * @param string            $UserId
     * @param UpdateUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($TenantId, $UserId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->role) {
            @$body['Role'] = $request->role;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUser',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/api/v1/tenants/' . Url::percentEncode($TenantId) . '/users/' . Url::percentEncode($UserId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update member information within a tenant.
     *
     * @param request - UpdateUserRequest
     *
     * @returns UpdateUserResponse
     *
     * @param string            $TenantId
     * @param string            $UserId
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($TenantId, $UserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUserWithOptions($TenantId, $UserId, $request, $headers, $runtime);
    }
}
