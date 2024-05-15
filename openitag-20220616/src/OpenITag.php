<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class OpenITag extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 增加结点任务人力
     *  *
     * @param string                      $TenantId
     * @param string                      $TaskId
     * @param string                      $WorkNodeId
     * @param AddWorkNodeWorkforceRequest $request    AddWorkNodeWorkforceRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return AddWorkNodeWorkforceResponse AddWorkNodeWorkforceResponse
     */
    public function addWorkNodeWorkforceWithOptions($TenantId, $TaskId, $WorkNodeId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userIds)) {
            $body['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddWorkNodeWorkforce',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/worknodes/' . OpenApiUtilClient::getEncodeParam($WorkNodeId) . '/workforce',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddWorkNodeWorkforceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 增加结点任务人力
     *  *
     * @param string                      $TenantId
     * @param string                      $TaskId
     * @param string                      $WorkNodeId
     * @param AddWorkNodeWorkforceRequest $request    AddWorkNodeWorkforceRequest
     *
     * @return AddWorkNodeWorkforceResponse AddWorkNodeWorkforceResponse
     */
    public function addWorkNodeWorkforce($TenantId, $TaskId, $WorkNodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addWorkNodeWorkforceWithOptions($TenantId, $TaskId, $WorkNodeId, $request, $headers, $runtime);
    }

    /**
     * @summary 数据追加
     *  *
     * @param string                     $TenantId
     * @param string                     $TaskId
     * @param AppendAllDataToTaskRequest $request  AppendAllDataToTaskRequest
     * @param string[]                   $headers  map
     * @param RuntimeOptions             $runtime  runtime options for this request RuntimeOptions
     *
     * @return AppendAllDataToTaskResponse AppendAllDataToTaskResponse
     */
    public function appendAllDataToTaskWithOptions($TenantId, $TaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'AppendAllDataToTask',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/appendAllDataToTask',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AppendAllDataToTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 数据追加
     *  *
     * @param string                     $TenantId
     * @param string                     $TaskId
     * @param AppendAllDataToTaskRequest $request  AppendAllDataToTaskRequest
     *
     * @return AppendAllDataToTaskResponse AppendAllDataToTaskResponse
     */
    public function appendAllDataToTask($TenantId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->appendAllDataToTaskWithOptions($TenantId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建标注任务
     *  *
     * @param string            $TenantId
     * @param CreateTaskRequest $request  CreateTaskRequest
     * @param string[]          $headers  map
     * @param RuntimeOptions    $runtime  runtime options for this request RuntimeOptions
     *
     * @return CreateTaskResponse CreateTaskResponse
     */
    public function createTaskWithOptions($TenantId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateTask',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建标注任务
     *  *
     * @param string            $TenantId
     * @param CreateTaskRequest $request  CreateTaskRequest
     *
     * @return CreateTaskResponse CreateTaskResponse
     */
    public function createTask($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建标注模版
     *  *
     * @param string                $TenantId
     * @param CreateTemplateRequest $request  CreateTemplateRequest
     * @param string[]              $headers  map
     * @param RuntimeOptions        $runtime  runtime options for this request RuntimeOptions
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplateWithOptions($TenantId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplate',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/templates',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建标注模版
     *  *
     * @param string                $TenantId
     * @param CreateTemplateRequest $request  CreateTemplateRequest
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplate($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTemplateWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建租户内用户
     *  *
     * @param string            $TenantId
     * @param CreateUserRequest $request  CreateUserRequest
     * @param string[]          $headers  map
     * @param RuntimeOptions    $runtime  runtime options for this request RuntimeOptions
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUserWithOptions($TenantId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountNo)) {
            $body['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->accountType)) {
            $body['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->role)) {
            $body['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/users',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建租户内用户
     *  *
     * @param string            $TenantId
     * @param CreateUserRequest $request  CreateUserRequest
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUser($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除任务
     *  *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteTaskResponse DeleteTaskResponse
     */
    public function deleteTaskWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteTask',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除任务
     *  *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return DeleteTaskResponse DeleteTaskResponse
     */
    public function deleteTask($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTaskWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * @summary 删除租户下的单个模板
     *  *
     * @param string         $TenantId
     * @param string         $TemplateId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($TenantId, $TemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/templates/' . OpenApiUtilClient::getEncodeParam($TemplateId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除租户下的单个模板
     *  *
     * @param string $TenantId
     * @param string $TemplateId
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
     */
    public function deleteTemplate($TenantId, $TemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTemplateWithOptions($TenantId, $TemplateId, $headers, $runtime);
    }

    /**
     * @summary 删除用户
     *  *
     * @param string         $TenantId
     * @param string         $UserId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUserWithOptions($TenantId, $UserId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/users/' . OpenApiUtilClient::getEncodeParam($UserId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除用户
     *  *
     * @param string $TenantId
     * @param string $UserId
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUser($TenantId, $UserId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUserWithOptions($TenantId, $UserId, $headers, $runtime);
    }

    /**
     * @summary 获取任务导出结果
     *  *
     * @param string                   $TenantId
     * @param string                   $TaskId
     * @param ExportAnnotationsRequest $request  ExportAnnotationsRequest
     * @param string[]                 $headers  map
     * @param RuntimeOptions           $runtime  runtime options for this request RuntimeOptions
     *
     * @return ExportAnnotationsResponse ExportAnnotationsResponse
     */
    public function exportAnnotationsWithOptions($TenantId, $TaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ossPath)) {
            $query['OssPath'] = $request->ossPath;
        }
        if (!Utils::isUnset($request->registerDataset)) {
            $query['RegisterDataset'] = $request->registerDataset;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportAnnotations',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/annotations/export',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportAnnotationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务导出结果
     *  *
     * @param string                   $TenantId
     * @param string                   $TaskId
     * @param ExportAnnotationsRequest $request  ExportAnnotationsRequest
     *
     * @return ExportAnnotationsResponse ExportAnnotationsResponse
     */
    public function exportAnnotations($TenantId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportAnnotationsWithOptions($TenantId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取异步任务Job
     *  *
     * @param string         $TenantId
     * @param string         $JobId
     * @param GetJobRequest  $request  GetJobRequest
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJobWithOptions($TenantId, $JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJob',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取异步任务Job
     *  *
     * @param string        $TenantId
     * @param string        $JobId
     * @param GetJobRequest $request  GetJobRequest
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJob($TenantId, $JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($TenantId, $JobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取单个子任务信息
     *  *
     * @param string         $TenantId
     * @param string         $TaskID
     * @param string         $SubtaskId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetSubtaskResponse GetSubtaskResponse
     */
    public function getSubtaskWithOptions($TenantId, $TaskID, $SubtaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSubtask',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskID) . '/subtasks/' . OpenApiUtilClient::getEncodeParam($SubtaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSubtaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取单个子任务信息
     *  *
     * @param string $TenantId
     * @param string $TaskID
     * @param string $SubtaskId
     *
     * @return GetSubtaskResponse GetSubtaskResponse
     */
    public function getSubtask($TenantId, $TaskID, $SubtaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSubtaskWithOptions($TenantId, $TaskID, $SubtaskId, $headers, $runtime);
    }

    /**
     * @summary 获取子任务单个ITEM信息
     *  *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string         $SubtaskId
     * @param string         $ItemId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetSubtaskItemResponse GetSubtaskItemResponse
     */
    public function getSubtaskItemWithOptions($TenantId, $TaskId, $SubtaskId, $ItemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSubtaskItem',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/subtasks/' . OpenApiUtilClient::getEncodeParam($SubtaskId) . '/items/' . OpenApiUtilClient::getEncodeParam($ItemId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSubtaskItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取子任务单个ITEM信息
     *  *
     * @param string $TenantId
     * @param string $TaskId
     * @param string $SubtaskId
     * @param string $ItemId
     *
     * @return GetSubtaskItemResponse GetSubtaskItemResponse
     */
    public function getSubtaskItem($TenantId, $TaskId, $SubtaskId, $ItemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSubtaskItemWithOptions($TenantId, $TaskId, $SubtaskId, $ItemId, $headers, $runtime);
    }

    /**
     * @summary 获取任务状态信息
     *  *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetTaskResponse GetTaskResponse
     */
    public function getTaskWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTask',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务状态信息
     *  *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return GetTaskResponse GetTaskResponse
     */
    public function getTask($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * @summary 获取任务统计信息
     *  *
     * @param string                   $TenantId
     * @param string                   $TaskId
     * @param GetTaskStatisticsRequest $request  GetTaskStatisticsRequest
     * @param string[]                 $headers  map
     * @param RuntimeOptions           $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetTaskStatisticsResponse GetTaskStatisticsResponse
     */
    public function getTaskStatisticsWithOptions($TenantId, $TaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statType)) {
            $query['StatType'] = $request->statType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskStatistics',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/statistics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务统计信息
     *  *
     * @param string                   $TenantId
     * @param string                   $TaskId
     * @param GetTaskStatisticsRequest $request  GetTaskStatisticsRequest
     *
     * @return GetTaskStatisticsResponse GetTaskStatisticsResponse
     */
    public function getTaskStatistics($TenantId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskStatisticsWithOptions($TenantId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取任务状态信息
     *  *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetTaskStatusResponse GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTaskStatus',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务状态信息
     *  *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return GetTaskStatusResponse GetTaskStatusResponse
     */
    public function getTaskStatus($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskStatusWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * @summary 获取任务模版信息
     *  *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetTaskTemplateResponse GetTaskTemplateResponse
     */
    public function getTaskTemplateWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTaskTemplate',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/template',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务模版信息
     *  *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return GetTaskTemplateResponse GetTaskTemplateResponse
     */
    public function getTaskTemplate($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskTemplateWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * @summary 获取任务题目信息
     *  *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetTaskTemplateQuestionsResponse GetTaskTemplateQuestionsResponse
     */
    public function getTaskTemplateQuestionsWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTaskTemplateQuestions',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/template/questions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskTemplateQuestionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务题目信息
     *  *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return GetTaskTemplateQuestionsResponse GetTaskTemplateQuestionsResponse
     */
    public function getTaskTemplateQuestions($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskTemplateQuestionsWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * @summary 获取任务题目信息
     *  *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetTaskTemplateViewsResponse GetTaskTemplateViewsResponse
     */
    public function getTaskTemplateViewsWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTaskTemplateViews',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/template/views',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskTemplateViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务题目信息
     *  *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return GetTaskTemplateViewsResponse GetTaskTemplateViewsResponse
     */
    public function getTaskTemplateViews($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskTemplateViewsWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * @summary 获取任务人力
     *  *
     * @param string         $TenantId
     * @param string         $TaskId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetTaskWorkforceResponse GetTaskWorkforceResponse
     */
    public function getTaskWorkforceWithOptions($TenantId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTaskWorkforce',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/workforce',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskWorkforceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务人力
     *  *
     * @param string $TenantId
     * @param string $TaskId
     *
     * @return GetTaskWorkforceResponse GetTaskWorkforceResponse
     */
    public function getTaskWorkforce($TenantId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWorkforceWithOptions($TenantId, $TaskId, $headers, $runtime);
    }

    /**
     * @summary 获取任务人力统计信息
     *  *
     * @param string                           $TenantId
     * @param string                           $TaskId
     * @param GetTaskWorkforceStatisticRequest $request  GetTaskWorkforceStatisticRequest
     * @param string[]                         $headers  map
     * @param RuntimeOptions                   $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetTaskWorkforceStatisticResponse GetTaskWorkforceStatisticResponse
     */
    public function getTaskWorkforceStatisticWithOptions($TenantId, $TaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->statType)) {
            $query['StatType'] = $request->statType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskWorkforceStatistic',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/workforce/statistic',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskWorkforceStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务人力统计信息
     *  *
     * @param string                           $TenantId
     * @param string                           $TaskId
     * @param GetTaskWorkforceStatisticRequest $request  GetTaskWorkforceStatisticRequest
     *
     * @return GetTaskWorkforceStatisticResponse GetTaskWorkforceStatisticResponse
     */
    public function getTaskWorkforceStatistic($TenantId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWorkforceStatisticWithOptions($TenantId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取租户下单个模板
     *  *
     * @param string         $TenantId
     * @param string         $TemplateId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetTemplateResponse GetTemplateResponse
     */
    public function getTemplateWithOptions($TenantId, $TemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/templates/' . OpenApiUtilClient::getEncodeParam($TemplateId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取租户下单个模板
     *  *
     * @param string $TenantId
     * @param string $TemplateId
     *
     * @return GetTemplateResponse GetTemplateResponse
     */
    public function getTemplate($TenantId, $TemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateWithOptions($TenantId, $TemplateId, $headers, $runtime);
    }

    /**
     * @summary 获取租户下单个模板问题
     *  *
     * @param string         $TenantId
     * @param string         $TemplateId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetTemplateQuestionsResponse GetTemplateQuestionsResponse
     */
    public function getTemplateQuestionsWithOptions($TenantId, $TemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTemplateQuestions',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/templates/' . OpenApiUtilClient::getEncodeParam($TemplateId) . '/questions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTemplateQuestionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取租户下单个模板问题
     *  *
     * @param string $TenantId
     * @param string $TemplateId
     *
     * @return GetTemplateQuestionsResponse GetTemplateQuestionsResponse
     */
    public function getTemplateQuestions($TenantId, $TemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateQuestionsWithOptions($TenantId, $TemplateId, $headers, $runtime);
    }

    /**
     * @summary 获取租户下模板视图
     *  *
     * @param string         $TenantId
     * @param string         $TemplateId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetTemplateViewResponse GetTemplateViewResponse
     */
    public function getTemplateViewWithOptions($TenantId, $TemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTemplateView',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/templates/' . OpenApiUtilClient::getEncodeParam($TemplateId) . '/views',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTemplateViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取租户下模板视图
     *  *
     * @param string $TenantId
     * @param string $TemplateId
     *
     * @return GetTemplateViewResponse GetTemplateViewResponse
     */
    public function getTemplateView($TenantId, $TemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateViewWithOptions($TenantId, $TemplateId, $headers, $runtime);
    }

    /**
     * @summary 获取租户信息
     *  *
     * @param string         $TenantId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetTenantResponse GetTenantResponse
     */
    public function getTenantWithOptions($TenantId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTenant',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTenantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取租户信息
     *  *
     * @param string $TenantId
     *
     * @return GetTenantResponse GetTenantResponse
     */
    public function getTenant($TenantId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTenantWithOptions($TenantId, $headers, $runtime);
    }

    /**
     * @summary 获取用户
     *  *
     * @param string         $TenantId
     * @param string         $UserId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUserWithOptions($TenantId, $UserId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/users/' . OpenApiUtilClient::getEncodeParam($UserId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户
     *  *
     * @param string $TenantId
     * @param string $UserId
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser($TenantId, $UserId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($TenantId, $UserId, $headers, $runtime);
    }

    /**
     * @summary 获取异步任务Job列表
     *  *
     * @param string          $TenantId
     * @param ListJobsRequest $request  ListJobsRequest
     * @param string[]        $headers  map
     * @param RuntimeOptions  $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobsWithOptions($TenantId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/jobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取异步任务Job列表
     *  *
     * @param string          $TenantId
     * @param ListJobsRequest $request  ListJobsRequest
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobs($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取子任务ITEM列表页信息
     *  *
     * @param string                  $TenantId
     * @param string                  $TaskID
     * @param string                  $SubtaskId
     * @param ListSubtaskItemsRequest $request   ListSubtaskItemsRequest
     * @param string[]                $headers   map
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListSubtaskItemsResponse ListSubtaskItemsResponse
     */
    public function listSubtaskItemsWithOptions($TenantId, $TaskID, $SubtaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSubtaskItems',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskID) . '/subtasks/' . OpenApiUtilClient::getEncodeParam($SubtaskId) . '/items',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSubtaskItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取子任务ITEM列表页信息
     *  *
     * @param string                  $TenantId
     * @param string                  $TaskID
     * @param string                  $SubtaskId
     * @param ListSubtaskItemsRequest $request   ListSubtaskItemsRequest
     *
     * @return ListSubtaskItemsResponse ListSubtaskItemsResponse
     */
    public function listSubtaskItems($TenantId, $TaskID, $SubtaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubtaskItemsWithOptions($TenantId, $TaskID, $SubtaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取子任务列表页信息
     *  *
     * @param string              $TenantId
     * @param string              $TaskID
     * @param ListSubtasksRequest $request  ListSubtasksRequest
     * @param string[]            $headers  map
     * @param RuntimeOptions      $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListSubtasksResponse ListSubtasksResponse
     */
    public function listSubtasksWithOptions($TenantId, $TaskID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSubtasks',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskID) . '/subtasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSubtasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取子任务列表页信息
     *  *
     * @param string              $TenantId
     * @param string              $TaskID
     * @param ListSubtasksRequest $request  ListSubtasksRequest
     *
     * @return ListSubtasksResponse ListSubtasksResponse
     */
    public function listSubtasks($TenantId, $TaskID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubtasksWithOptions($TenantId, $TaskID, $request, $headers, $runtime);
    }

    /**
     * @summary 获取任务列表页信息
     *  *
     * @param string           $TenantId
     * @param ListTasksRequest $request  ListTasksRequest
     * @param string[]         $headers  map
     * @param RuntimeOptions   $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasksWithOptions($TenantId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务列表页信息
     *  *
     * @param string           $TenantId
     * @param ListTasksRequest $request  ListTasksRequest
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasks($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTasksWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取租户模板信息列表
     *  *
     * @param string               $TenantId
     * @param ListTemplatesRequest $tmpReq   ListTemplatesRequest
     * @param string[]             $headers  map
     * @param RuntimeOptions       $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListTemplatesResponse ListTemplatesResponse
     */
    public function listTemplatesWithOptions($TenantId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTemplatesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->types)) {
            $request->typesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->typesShrink)) {
            $query['Types'] = $request->typesShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplates',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取租户模板信息列表
     *  *
     * @param string               $TenantId
     * @param ListTemplatesRequest $request  ListTemplatesRequest
     *
     * @return ListTemplatesResponse ListTemplatesResponse
     */
    public function listTemplates($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTemplatesWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取租户列表
     *  *
     * @param ListTenantsRequest $request ListTenantsRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTenantsResponse ListTenantsResponse
     */
    public function listTenantsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTenants',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTenantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取租户列表
     *  *
     * @param ListTenantsRequest $request ListTenantsRequest
     *
     * @return ListTenantsResponse ListTenantsResponse
     */
    public function listTenants($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTenantsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取用户列表
     *  *
     * @param string           $TenantId
     * @param ListUsersRequest $request  ListUsersRequest
     * @param string[]         $headers  map
     * @param RuntimeOptions   $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsersWithOptions($TenantId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/users',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户列表
     *  *
     * @param string           $TenantId
     * @param ListUsersRequest $request  ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除结点人力
     *  *
     * @param string                         $TenantId
     * @param string                         $TaskId
     * @param string                         $WorkNodeId
     * @param RemoveWorkNodeWorkforceRequest $request    RemoveWorkNodeWorkforceRequest
     * @param string[]                       $headers    map
     * @param RuntimeOptions                 $runtime    runtime options for this request RuntimeOptions
     *
     * @return RemoveWorkNodeWorkforceResponse RemoveWorkNodeWorkforceResponse
     */
    public function removeWorkNodeWorkforceWithOptions($TenantId, $TaskId, $WorkNodeId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userIds)) {
            $body['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveWorkNodeWorkforce',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/worknodes/' . OpenApiUtilClient::getEncodeParam($WorkNodeId) . '/workforce',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveWorkNodeWorkforceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除结点人力
     *  *
     * @param string                         $TenantId
     * @param string                         $TaskId
     * @param string                         $WorkNodeId
     * @param RemoveWorkNodeWorkforceRequest $request    RemoveWorkNodeWorkforceRequest
     *
     * @return RemoveWorkNodeWorkforceResponse RemoveWorkNodeWorkforceResponse
     */
    public function removeWorkNodeWorkforce($TenantId, $TaskId, $WorkNodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeWorkNodeWorkforceWithOptions($TenantId, $TaskId, $WorkNodeId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新标注任务基础信息
     *  *
     * @param string            $TenantId
     * @param string            $TaskId
     * @param UpdateTaskRequest $request  UpdateTaskRequest
     * @param string[]          $headers  map
     * @param RuntimeOptions    $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskResponse UpdateTaskResponse
     */
    public function updateTaskWithOptions($TenantId, $TaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTask',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新标注任务基础信息
     *  *
     * @param string            $TenantId
     * @param string            $TaskId
     * @param UpdateTaskRequest $request  UpdateTaskRequest
     *
     * @return UpdateTaskResponse UpdateTaskResponse
     */
    public function updateTask($TenantId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTaskWithOptions($TenantId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新任务人力
     *  *
     * @param string                     $TenantId
     * @param string                     $TaskId
     * @param UpdateTaskWorkforceRequest $request  UpdateTaskWorkforceRequest
     * @param string[]                   $headers  map
     * @param RuntimeOptions             $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateTaskWorkforceResponse UpdateTaskWorkforceResponse
     */
    public function updateTaskWorkforceWithOptions($TenantId, $TaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->workforce)) {
            $body['Workforce'] = $request->workforce;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTaskWorkforce',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/workforce',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskWorkforceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新任务人力
     *  *
     * @param string                     $TenantId
     * @param string                     $TaskId
     * @param UpdateTaskWorkforceRequest $request  UpdateTaskWorkforceRequest
     *
     * @return UpdateTaskWorkforceResponse UpdateTaskWorkforceResponse
     */
    public function updateTaskWorkforce($TenantId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTaskWorkforceWithOptions($TenantId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新标注模版
     *  *
     * @param string                $TenantId
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request    UpdateTemplateRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($TenantId, $TemplateId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplate',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/templates/' . OpenApiUtilClient::getEncodeParam($TemplateId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新标注模版
     *  *
     * @param string                $TenantId
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request    UpdateTemplateRequest
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplate($TenantId, $TemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTemplateWithOptions($TenantId, $TemplateId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新租户信息
     *  *
     * @param string              $TenantId
     * @param UpdateTenantRequest $request  UpdateTenantRequest
     * @param string[]            $headers  map
     * @param RuntimeOptions      $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateTenantResponse UpdateTenantResponse
     */
    public function updateTenantWithOptions($TenantId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->tenantName)) {
            $body['TenantName'] = $request->tenantName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTenant',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTenantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新租户信息
     *  *
     * @param string              $TenantId
     * @param UpdateTenantRequest $request  UpdateTenantRequest
     *
     * @return UpdateTenantResponse UpdateTenantResponse
     */
    public function updateTenant($TenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTenantWithOptions($TenantId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新用户信息
     *  *
     * @param string            $TenantId
     * @param string            $UserId
     * @param UpdateUserRequest $request  UpdateUserRequest
     * @param string[]          $headers  map
     * @param RuntimeOptions    $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUserWithOptions($TenantId, $UserId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->role)) {
            $body['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/api/v1/tenants/' . OpenApiUtilClient::getEncodeParam($TenantId) . '/users/' . OpenApiUtilClient::getEncodeParam($UserId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新用户信息
     *  *
     * @param string            $TenantId
     * @param string            $UserId
     * @param UpdateUserRequest $request  UpdateUserRequest
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUser($TenantId, $UserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUserWithOptions($TenantId, $UserId, $request, $headers, $runtime);
    }
}
