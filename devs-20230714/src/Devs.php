<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Devs\V20230714\Models\CancelPipelineResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateEnvironmentRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateEnvironmentResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreatePipelineRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreatePipelineResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateTaskRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateTaskResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeleteEnvironmentResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetEnvironmentResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetPipelineResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetProjectResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetRepositoryResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetTaskResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListEnvironmentsRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListEnvironmentsResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListEnvironmentsShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelinesShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListProjectsShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListTasksRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListTasksResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListTasksShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutPipelineStatusRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutPipelineStatusResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutTaskStatusRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutTaskStatusResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ResumeTaskResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\RetryTaskResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\StartPipelineResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\StartTaskResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\UpdateEnvironmentRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\UpdateEnvironmentResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\UpdateProjectResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Devs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('devs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 取消流水线
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelPipelineResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelPipelineResponse
     */
    public function cancelPipelineWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CancelPipeline',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/pipelines/' . Url::percentEncode($name) . '/cancel',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelPipelineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 取消流水线
     *
     * @returns CancelPipelineResponse
     *
     * @param string $name
     *
     * @return CancelPipelineResponse
     */
    public function cancelPipeline($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelPipelineWithOptions($name, $headers, $runtime);
    }

    /**
     * 取消任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelTaskResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelTaskResponse
     */
    public function cancelTaskWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CancelTask',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/tasks/' . Url::percentEncode($name) . '/cancel',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 取消任务
     *
     * @returns CancelTaskResponse
     *
     * @param string $name
     *
     * @return CancelTaskResponse
     */
    public function cancelTask($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelTaskWithOptions($name, $headers, $runtime);
    }

    /**
     * 创建环境.
     *
     * @param request - CreateEnvironmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEnvironmentResponse
     *
     * @param string                   $projectName
     * @param CreateEnvironmentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironmentWithOptions($projectName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateEnvironment',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/projects/' . Url::percentEncode($projectName) . '/environments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEnvironmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建环境.
     *
     * @param request - CreateEnvironmentRequest
     *
     * @returns CreateEnvironmentResponse
     *
     * @param string                   $projectName
     * @param CreateEnvironmentRequest $request
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironment($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEnvironmentWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * 创建流水线
     *
     * @param request - CreatePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePipelineResponse
     *
     * @param CreatePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePipelineResponse
     */
    public function createPipelineWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePipeline',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/pipelines',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePipelineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建流水线
     *
     * @param request - CreatePipelineRequest
     *
     * @returns CreatePipelineResponse
     *
     * @param CreatePipelineRequest $request
     *
     * @return CreatePipelineResponse
     */
    public function createPipeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建项目.
     *
     * @param request - CreateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/projects',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建项目.
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
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
     * 创建任务
     *
     * @param request - CreateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTaskResponse
     *
     * @param CreateTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateTask',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/tasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建任务
     *
     * @param request - CreateTaskRequest
     *
     * @returns CreateTaskResponse
     *
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
     * 删除环境.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEnvironmentResponse
     *
     * @param string         $projectName
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironmentWithOptions($projectName, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteEnvironment',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/projects/' . Url::percentEncode($projectName) . '/environments/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEnvironmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除环境.
     *
     * @returns DeleteEnvironmentResponse
     *
     * @param string $projectName
     * @param string $name
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironment($projectName, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnvironmentWithOptions($projectName, $name, $headers, $runtime);
    }

    /**
     * 删除项目.
     *
     * @param request - DeleteProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProjectResponse
     *
     * @param string               $name
     * @param DeleteProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProject',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/projects/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除项目.
     *
     * @param request - DeleteProjectRequest
     *
     * @returns DeleteProjectResponse
     *
     * @param string               $name
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 获取环境信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEnvironmentResponse
     *
     * @param string         $projectName
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironmentWithOptions($projectName, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetEnvironment',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/projects/' . Url::percentEncode($projectName) . '/environments/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEnvironmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取环境信息.
     *
     * @returns GetEnvironmentResponse
     *
     * @param string $projectName
     * @param string $name
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironment($projectName, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentWithOptions($projectName, $name, $headers, $runtime);
    }

    /**
     * 查询流水线
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPipelineResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPipelineResponse
     */
    public function getPipelineWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPipeline',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/pipelines/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPipelineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询流水线
     *
     * @returns GetPipelineResponse
     *
     * @param string $name
     *
     * @return GetPipelineResponse
     */
    public function getPipeline($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineWithOptions($name, $headers, $runtime);
    }

    /**
     * 查询项目.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProject',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/projects/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询项目.
     *
     * @returns GetProjectResponse
     *
     * @param string $name
     *
     * @return GetProjectResponse
     */
    public function getProject($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($name, $headers, $runtime);
    }

    /**
     * 查询仓库绑定.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRepositoryResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRepositoryResponse
     */
    public function getRepositoryWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRepository',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/repositories/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询仓库绑定.
     *
     * @returns GetRepositoryResponse
     *
     * @param string $name
     *
     * @return GetRepositoryResponse
     */
    public function getRepository($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryWithOptions($name, $headers, $runtime);
    }

    /**
     * 查询任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTask',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/tasks/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询任务
     *
     * @returns GetTaskResponse
     *
     * @param string $name
     *
     * @return GetTaskResponse
     */
    public function getTask($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWithOptions($name, $headers, $runtime);
    }

    /**
     * 查询环境列表.
     *
     * @param tmpReq - ListEnvironmentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnvironmentsResponse
     *
     * @param string                  $projectName
     * @param ListEnvironmentsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironmentsWithOptions($projectName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListEnvironmentsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labelSelector) {
            $request->labelSelectorShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }

        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->labelSelectorShrink) {
            @$query['labelSelector'] = $request->labelSelectorShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEnvironments',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/projects/' . Url::percentEncode($projectName) . '/environments/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnvironmentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnvironmentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询环境列表.
     *
     * @param request - ListEnvironmentsRequest
     *
     * @returns ListEnvironmentsResponse
     *
     * @param string                  $projectName
     * @param ListEnvironmentsRequest $request
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironments($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentsWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * 批量查询流水线
     *
     * @param tmpReq - ListPipelinesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelinesResponse
     *
     * @param ListPipelinesRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListPipelinesResponse
     */
    public function listPipelinesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPipelinesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labelSelector) {
            $request->labelSelectorShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }

        $query = [];
        if (null !== $request->labelSelectorShrink) {
            @$query['labelSelector'] = $request->labelSelectorShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPipelines',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/pipelines',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPipelinesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量查询流水线
     *
     * @param request - ListPipelinesRequest
     *
     * @returns ListPipelinesResponse
     *
     * @param ListPipelinesRequest $request
     *
     * @return ListPipelinesResponse
     */
    public function listPipelines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelinesWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量查询项目.
     *
     * @param tmpReq - ListProjectsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProjectsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labelSelector) {
            $request->labelSelectorShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }

        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->labelSelectorShrink) {
            @$query['labelSelector'] = $request->labelSelectorShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjects',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/projects',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量查询项目.
     *
     * @param request - ListProjectsRequest
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectsWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量查询任务
     *
     * @param tmpReq - ListTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labelSelector) {
            $request->labelSelectorShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }

        $query = [];
        if (null !== $request->labelSelectorShrink) {
            @$query['labelSelector'] = $request->labelSelectorShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTasks',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量查询任务
     *
     * @param request - ListTasksRequest
     *
     * @returns ListTasksResponse
     *
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
     * 更新流水线状态
     *
     * @param request - PutPipelineStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutPipelineStatusResponse
     *
     * @param string                   $name
     * @param PutPipelineStatusRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return PutPipelineStatusResponse
     */
    public function putPipelineStatusWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'PutPipelineStatus',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/pipelines/' . Url::percentEncode($name) . '/status',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PutPipelineStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PutPipelineStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新流水线状态
     *
     * @param request - PutPipelineStatusRequest
     *
     * @returns PutPipelineStatusResponse
     *
     * @param string                   $name
     * @param PutPipelineStatusRequest $request
     *
     * @return PutPipelineStatusResponse
     */
    public function putPipelineStatus($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putPipelineStatusWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 更新替换任务状态
     *
     * @param request - PutTaskStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutTaskStatusResponse
     *
     * @param string               $name
     * @param PutTaskStatusRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return PutTaskStatusResponse
     */
    public function putTaskStatusWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'PutTaskStatus',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/tasks/' . Url::percentEncode($name) . '/status',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PutTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PutTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新替换任务状态
     *
     * @param request - PutTaskStatusRequest
     *
     * @returns PutTaskStatusResponse
     *
     * @param string               $name
     * @param PutTaskStatusRequest $request
     *
     * @return PutTaskStatusResponse
     */
    public function putTaskStatus($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putTaskStatusWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 确认并继续执行任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeTaskResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResumeTaskResponse
     */
    public function resumeTaskWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResumeTask',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/tasks/' . Url::percentEncode($name) . '/resume',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResumeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResumeTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 确认并继续执行任务
     *
     * @returns ResumeTaskResponse
     *
     * @param string $name
     *
     * @return ResumeTaskResponse
     */
    public function resumeTask($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeTaskWithOptions($name, $headers, $runtime);
    }

    /**
     * 重试执行任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryTaskResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RetryTaskResponse
     */
    public function retryTaskWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RetryTask',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/tasks/' . Url::percentEncode($name) . '/retry',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RetryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RetryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 重试执行任务
     *
     * @returns RetryTaskResponse
     *
     * @param string $name
     *
     * @return RetryTaskResponse
     */
    public function retryTask($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryTaskWithOptions($name, $headers, $runtime);
    }

    /**
     * 开始执行流水线
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartPipelineResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartPipelineResponse
     */
    public function startPipelineWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartPipeline',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/pipelines/' . Url::percentEncode($name) . '/start',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartPipelineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 开始执行流水线
     *
     * @returns StartPipelineResponse
     *
     * @param string $name
     *
     * @return StartPipelineResponse
     */
    public function startPipeline($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startPipelineWithOptions($name, $headers, $runtime);
    }

    /**
     * 开始执行任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartTaskResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartTaskResponse
     */
    public function startTaskWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartTask',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/tasks/' . Url::percentEncode($name) . '/start',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 开始执行任务
     *
     * @returns StartTaskResponse
     *
     * @param string $name
     *
     * @return StartTaskResponse
     */
    public function startTask($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startTaskWithOptions($name, $headers, $runtime);
    }

    /**
     * 更新环境（局部更新）.
     *
     * @param request - UpdateEnvironmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEnvironmentResponse
     *
     * @param string                   $projectName
     * @param string                   $name
     * @param UpdateEnvironmentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironmentWithOptions($projectName, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateEnvironment',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/projects/' . Url::percentEncode($projectName) . '/environments/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEnvironmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新环境（局部更新）.
     *
     * @param request - UpdateEnvironmentRequest
     *
     * @returns UpdateEnvironmentResponse
     *
     * @param string                   $projectName
     * @param string                   $name
     * @param UpdateEnvironmentRequest $request
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironment($projectName, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnvironmentWithOptions($projectName, $name, $request, $headers, $runtime);
    }

    /**
     * 更新替换应用.
     *
     * @param request - UpdateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectResponse
     *
     * @param string               $name
     * @param UpdateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateProject',
            'version' => '2023-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-07-14/projects/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新替换应用.
     *
     * @param request - UpdateProjectRequest
     *
     * @returns UpdateProjectResponse
     *
     * @param string               $name
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($name, $request, $headers, $runtime);
    }
}
