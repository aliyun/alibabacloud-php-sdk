<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Devs\V20230714\Models\ActivateConnectionRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ActivateConnectionResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CancelPipelineResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateConnectionRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateConnectionResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateEnvironmentRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateEnvironmentResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreatePipelineRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreatePipelineResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreatePipelineTemplateRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreatePipelineTemplateResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreatePipelineTriggerEventRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreatePipelineTriggerEventResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreatePipelineTriggerRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreatePipelineTriggerResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateRepositoryRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateRepositoryResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateTaskRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateTaskResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateTaskTemplateRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\CreateTaskTemplateResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeleteConnectionRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeleteConnectionResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeleteEnvironmentResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeletePipelineTemplateResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeletePipelineTriggerEventResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeletePipelineTriggerResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeleteRepositoryResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeleteTaskTemplateResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\FetchConnectionCredentialResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\FetchRepositoryCheckoutRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\FetchRepositoryCheckoutResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetConnectionResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetEnvironmentResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetPipelineResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetPipelineTemplateResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetPipelineTriggerEventResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetPipelineTriggerResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetProjectResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetRepositoryResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetTaskResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\GetTaskTemplateResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListConnectionsRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListConnectionsResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListConnectionsShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListEnvironmentsRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListEnvironmentsResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListEnvironmentsShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelinesShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelineTemplatesRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelineTemplatesResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelineTemplatesShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelineTriggerEventsRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelineTriggerEventsResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelineTriggerEventsShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelineTriggersRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelineTriggersResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListPipelineTriggersShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListProjectsShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListRepositoriesRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListRepositoriesResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListRepositoriesShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListTasksRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListTasksResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListTasksShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListTaskTemplatesRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListTaskTemplatesResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ListTaskTemplatesShrinkRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutEnvironmentRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutEnvironmentResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutPipelineStatusRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutPipelineStatusResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutPipelineTemplateRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutPipelineTemplateResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutPipelineTriggerRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutPipelineTriggerResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutProjectRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutProjectResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutTaskStatusRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutTaskStatusResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutTaskTemplateRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\PutTaskTemplateResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\RefreshConnectionResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\ResumeTaskResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\RetryTaskResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\StartPipelineResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\StartTaskResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\UpdateEnvironmentRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\UpdateEnvironmentResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\UpdatePipelineTriggerRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\UpdatePipelineTriggerResponse;
use AlibabaCloud\SDK\Devs\V20230714\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Devs\V20230714\Models\UpdateProjectResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 激活身份绑定,完成OAuth授权
     *  *
     * @param string                    $name
     * @param ActivateConnectionRequest $request ActivateConnectionRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ActivateConnectionResponse ActivateConnectionResponse
     */
    public function activateConnectionWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->account)) {
            $body['account'] = $request->account;
        }
        if (!Utils::isUnset($request->credential)) {
            $body['credential'] = $request->credential;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ActivateConnection',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/connections/' . OpenApiUtilClient::getEncodeParam($name) . '/activate',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ActivateConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 激活身份绑定,完成OAuth授权
     *  *
     * @param string                    $name
     * @param ActivateConnectionRequest $request ActivateConnectionRequest
     *
     * @return ActivateConnectionResponse ActivateConnectionResponse
     */
    public function activateConnection($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->activateConnectionWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary 取消流水线
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelPipelineResponse CancelPipelineResponse
     */
    public function cancelPipelineWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CancelPipeline',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelines/' . OpenApiUtilClient::getEncodeParam($name) . '/cancel',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消流水线
     *  *
     * @param string $name
     *
     * @return CancelPipelineResponse CancelPipelineResponse
     */
    public function cancelPipeline($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelPipelineWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 取消任务
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelTaskResponse CancelTaskResponse
     */
    public function cancelTaskWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CancelTask',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasks/' . OpenApiUtilClient::getEncodeParam($name) . '/cancel',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消任务
     *  *
     * @param string $name
     *
     * @return CancelTaskResponse CancelTaskResponse
     */
    public function cancelTask($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelTaskWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 创建身份绑定
     *  *
     * @param CreateConnectionRequest $request CreateConnectionRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConnectionResponse CreateConnectionResponse
     */
    public function createConnectionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateConnection',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/connections',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建身份绑定
     *  *
     * @param CreateConnectionRequest $request CreateConnectionRequest
     *
     * @return CreateConnectionResponse CreateConnectionResponse
     */
    public function createConnection($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConnectionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建环境
     *  *
     * @param string                   $project
     * @param CreateEnvironmentRequest $request CreateEnvironmentRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEnvironmentResponse CreateEnvironmentResponse
     */
    public function createEnvironmentWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateEnvironment',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/projects/' . OpenApiUtilClient::getEncodeParam($project) . '/environments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建环境
     *  *
     * @param string                   $project
     * @param CreateEnvironmentRequest $request CreateEnvironmentRequest
     *
     * @return CreateEnvironmentResponse CreateEnvironmentResponse
     */
    public function createEnvironment($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEnvironmentWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 创建流水线
     *  *
     * @param CreatePipelineRequest $request CreatePipelineRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePipelineResponse CreatePipelineResponse
     */
    public function createPipelineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreatePipeline',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelines',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建流水线
     *  *
     * @param CreatePipelineRequest $request CreatePipelineRequest
     *
     * @return CreatePipelineResponse CreatePipelineResponse
     */
    public function createPipeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建流水线模板
     *  *
     * @param CreatePipelineTemplateRequest $request CreatePipelineTemplateRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePipelineTemplateResponse CreatePipelineTemplateResponse
     */
    public function createPipelineTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreatePipelineTemplate',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetemplates',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建流水线模板
     *  *
     * @param CreatePipelineTemplateRequest $request CreatePipelineTemplateRequest
     *
     * @return CreatePipelineTemplateResponse CreatePipelineTemplateResponse
     */
    public function createPipelineTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建流水线触发器
     *  *
     * @param CreatePipelineTriggerRequest $request CreatePipelineTriggerRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePipelineTriggerResponse CreatePipelineTriggerResponse
     */
    public function createPipelineTriggerWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreatePipelineTrigger',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetriggers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建流水线触发器
     *  *
     * @param CreatePipelineTriggerRequest $request CreatePipelineTriggerRequest
     *
     * @return CreatePipelineTriggerResponse CreatePipelineTriggerResponse
     */
    public function createPipelineTrigger($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineTriggerWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建流水线触发历史
     *  *
     * @param CreatePipelineTriggerEventRequest $request CreatePipelineTriggerEventRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePipelineTriggerEventResponse CreatePipelineTriggerEventResponse
     */
    public function createPipelineTriggerEventWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreatePipelineTriggerEvent',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetriggerevents',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineTriggerEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建流水线触发历史
     *  *
     * @param CreatePipelineTriggerEventRequest $request CreatePipelineTriggerEventRequest
     *
     * @return CreatePipelineTriggerEventResponse CreatePipelineTriggerEventResponse
     */
    public function createPipelineTriggerEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineTriggerEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建项目
     *  *
     * @param CreateProjectRequest $request CreateProjectRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/projects',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建项目
     *  *
     * @param CreateProjectRequest $request CreateProjectRequest
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建仓库绑定
     *  *
     * @param CreateRepositoryRequest $request CreateRepositoryRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRepositoryResponse CreateRepositoryResponse
     */
    public function createRepositoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateRepository',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/repositories',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建仓库绑定
     *  *
     * @param CreateRepositoryRequest $request CreateRepositoryRequest
     *
     * @return CreateRepositoryResponse CreateRepositoryResponse
     */
    public function createRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建任务
     *  *
     * @param CreateTaskRequest $request CreateTaskRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTaskResponse CreateTaskResponse
     */
    public function createTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateTask',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建任务
     *  *
     * @param CreateTaskRequest $request CreateTaskRequest
     *
     * @return CreateTaskResponse CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建任务模板
     *  *
     * @param CreateTaskTemplateRequest $request CreateTaskTemplateRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTaskTemplateResponse CreateTaskTemplateResponse
     */
    public function createTaskTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateTaskTemplate',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasktemplates',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTaskTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建任务模板
     *  *
     * @param CreateTaskTemplateRequest $request CreateTaskTemplateRequest
     *
     * @return CreateTaskTemplateResponse CreateTaskTemplateResponse
     */
    public function createTaskTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除身份绑定
     *  *
     * @param string                  $name
     * @param DeleteConnectionRequest $request DeleteConnectionRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteConnectionResponse DeleteConnectionResponse
     */
    public function deleteConnectionWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConnection',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/connections/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除身份绑定
     *  *
     * @param string                  $name
     * @param DeleteConnectionRequest $request DeleteConnectionRequest
     *
     * @return DeleteConnectionResponse DeleteConnectionResponse
     */
    public function deleteConnection($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConnectionWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary 删除环境
     *  *
     * @param string         $project
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEnvironmentResponse DeleteEnvironmentResponse
     */
    public function deleteEnvironmentWithOptions($project, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteEnvironment',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/projects/' . OpenApiUtilClient::getEncodeParam($project) . '/environments/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除环境
     *  *
     * @param string $project
     * @param string $name
     *
     * @return DeleteEnvironmentResponse DeleteEnvironmentResponse
     */
    public function deleteEnvironment($project, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnvironmentWithOptions($project, $name, $headers, $runtime);
    }

    /**
     * @summary 删除流水线模板
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePipelineTemplateResponse DeletePipelineTemplateResponse
     */
    public function deletePipelineTemplateWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeletePipelineTemplate',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetemplates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除流水线模板
     *  *
     * @param string $name
     *
     * @return DeletePipelineTemplateResponse DeletePipelineTemplateResponse
     */
    public function deletePipelineTemplate($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineTemplateWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 删除流水线触发器
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePipelineTriggerResponse DeletePipelineTriggerResponse
     */
    public function deletePipelineTriggerWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeletePipelineTrigger',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetriggers/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除流水线触发器
     *  *
     * @param string $name
     *
     * @return DeletePipelineTriggerResponse DeletePipelineTriggerResponse
     */
    public function deletePipelineTrigger($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineTriggerWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 删除流水线触发历史
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePipelineTriggerEventResponse DeletePipelineTriggerEventResponse
     */
    public function deletePipelineTriggerEventWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeletePipelineTriggerEvent',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetriggerevents/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineTriggerEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除流水线触发历史
     *  *
     * @param string $name
     *
     * @return DeletePipelineTriggerEventResponse DeletePipelineTriggerEventResponse
     */
    public function deletePipelineTriggerEvent($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineTriggerEventWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 删除项目
     *  *
     * @param string               $name
     * @param DeleteProjectRequest $request DeleteProjectRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProjectWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/projects/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除项目
     *  *
     * @param string               $name
     * @param DeleteProjectRequest $request DeleteProjectRequest
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProject($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary 删除仓库绑定
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRepositoryResponse DeleteRepositoryResponse
     */
    public function deleteRepositoryWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteRepository',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/repositories/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除仓库绑定
     *  *
     * @param string $name
     *
     * @return DeleteRepositoryResponse DeleteRepositoryResponse
     */
    public function deleteRepository($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 删除任务模板
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTaskTemplateResponse DeleteTaskTemplateResponse
     */
    public function deleteTaskTemplateWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteTaskTemplate',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasktemplates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTaskTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除任务模板
     *  *
     * @param string $name
     *
     * @return DeleteTaskTemplateResponse DeleteTaskTemplateResponse
     */
    public function deleteTaskTemplate($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTaskTemplateWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 查询身份绑定中的凭证信息
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return FetchConnectionCredentialResponse FetchConnectionCredentialResponse
     */
    public function fetchConnectionCredentialWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'FetchConnectionCredential',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/connections/' . OpenApiUtilClient::getEncodeParam($name) . '/fetchCredential',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FetchConnectionCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询身份绑定中的凭证信息
     *  *
     * @param string $name
     *
     * @return FetchConnectionCredentialResponse FetchConnectionCredentialResponse
     */
    public function fetchConnectionCredential($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fetchConnectionCredentialWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 查询仓库代码拉取所需信息
     *  *
     * @param string                         $name
     * @param FetchRepositoryCheckoutRequest $request FetchRepositoryCheckoutRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return FetchRepositoryCheckoutResponse FetchRepositoryCheckoutResponse
     */
    public function fetchRepositoryCheckoutWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->branch)) {
            $query['branch'] = $request->branch;
        }
        if (!Utils::isUnset($request->commit)) {
            $query['commit'] = $request->commit;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FetchRepositoryCheckout',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/repositories/' . OpenApiUtilClient::getEncodeParam($name) . '/fetchCheckout',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FetchRepositoryCheckoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询仓库代码拉取所需信息
     *  *
     * @param string                         $name
     * @param FetchRepositoryCheckoutRequest $request FetchRepositoryCheckoutRequest
     *
     * @return FetchRepositoryCheckoutResponse FetchRepositoryCheckoutResponse
     */
    public function fetchRepositoryCheckout($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fetchRepositoryCheckoutWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary 查询身份绑定
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConnectionResponse GetConnectionResponse
     */
    public function getConnectionWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetConnection',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/connections/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询身份绑定
     *  *
     * @param string $name
     *
     * @return GetConnectionResponse GetConnectionResponse
     */
    public function getConnection($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConnectionWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 获取环境信息
     *  *
     * @param string         $project
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEnvironmentResponse GetEnvironmentResponse
     */
    public function getEnvironmentWithOptions($project, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetEnvironment',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/projects/' . OpenApiUtilClient::getEncodeParam($project) . '/environments/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取环境信息
     *  *
     * @param string $project
     * @param string $name
     *
     * @return GetEnvironmentResponse GetEnvironmentResponse
     */
    public function getEnvironment($project, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentWithOptions($project, $name, $headers, $runtime);
    }

    /**
     * @summary 查询流水线
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPipelineResponse GetPipelineResponse
     */
    public function getPipelineWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipeline',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelines/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询流水线
     *  *
     * @param string $name
     *
     * @return GetPipelineResponse GetPipelineResponse
     */
    public function getPipeline($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 查询流水线模板
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPipelineTemplateResponse GetPipelineTemplateResponse
     */
    public function getPipelineTemplateWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipelineTemplate',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetemplates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询流水线模板
     *  *
     * @param string $name
     *
     * @return GetPipelineTemplateResponse GetPipelineTemplateResponse
     */
    public function getPipelineTemplate($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineTemplateWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 查询流水线触发器
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPipelineTriggerResponse GetPipelineTriggerResponse
     */
    public function getPipelineTriggerWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipelineTrigger',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetriggers/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询流水线触发器
     *  *
     * @param string $name
     *
     * @return GetPipelineTriggerResponse GetPipelineTriggerResponse
     */
    public function getPipelineTrigger($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineTriggerWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 查询流水线触发历史
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPipelineTriggerEventResponse GetPipelineTriggerEventResponse
     */
    public function getPipelineTriggerEventWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipelineTriggerEvent',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetriggerevents/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineTriggerEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询流水线触发历史
     *  *
     * @param string $name
     *
     * @return GetPipelineTriggerEventResponse GetPipelineTriggerEventResponse
     */
    public function getPipelineTriggerEvent($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineTriggerEventWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 查询项目
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProjectResponse GetProjectResponse
     */
    public function getProjectWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProject',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/projects/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询项目
     *  *
     * @param string $name
     *
     * @return GetProjectResponse GetProjectResponse
     */
    public function getProject($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 查询仓库绑定
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRepositoryResponse GetRepositoryResponse
     */
    public function getRepositoryWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRepository',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/repositories/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询仓库绑定
     *  *
     * @param string $name
     *
     * @return GetRepositoryResponse GetRepositoryResponse
     */
    public function getRepository($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 查询任务
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskResponse GetTaskResponse
     */
    public function getTaskWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTask',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasks/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询任务
     *  *
     * @param string $name
     *
     * @return GetTaskResponse GetTaskResponse
     */
    public function getTask($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 查询任务模板
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskTemplateResponse GetTaskTemplateResponse
     */
    public function getTaskTemplateWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTaskTemplate',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasktemplates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询任务模板
     *  *
     * @param string $name
     *
     * @return GetTaskTemplateResponse GetTaskTemplateResponse
     */
    public function getTaskTemplate($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskTemplateWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 批量查询身份绑定
     *  *
     * @param ListConnectionsRequest $tmpReq  ListConnectionsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConnectionsResponse ListConnectionsResponse
     */
    public function listConnectionsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListConnectionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labelSelector)) {
            $request->labelSelectorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->labelSelectorShrink)) {
            $query['labelSelector'] = $request->labelSelectorShrink;
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
            'action'      => 'ListConnections',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/connections',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询身份绑定
     *  *
     * @param ListConnectionsRequest $request ListConnectionsRequest
     *
     * @return ListConnectionsResponse ListConnectionsResponse
     */
    public function listConnections($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConnectionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询环境列表
     *  *
     * @param string                  $project
     * @param ListEnvironmentsRequest $tmpReq  ListEnvironmentsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnvironmentsResponse ListEnvironmentsResponse
     */
    public function listEnvironmentsWithOptions($project, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListEnvironmentsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labelSelector)) {
            $request->labelSelectorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->labelSelectorShrink)) {
            $query['labelSelector'] = $request->labelSelectorShrink;
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
            'action'      => 'ListEnvironments',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/projects/' . OpenApiUtilClient::getEncodeParam($project) . '/environments/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEnvironmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询环境列表
     *  *
     * @param string                  $project
     * @param ListEnvironmentsRequest $request ListEnvironmentsRequest
     *
     * @return ListEnvironmentsResponse ListEnvironmentsResponse
     */
    public function listEnvironments($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 批量查询流水线模板
     *  *
     * @param ListPipelineTemplatesRequest $tmpReq  ListPipelineTemplatesRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPipelineTemplatesResponse ListPipelineTemplatesResponse
     */
    public function listPipelineTemplatesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPipelineTemplatesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labelSelector)) {
            $request->labelSelectorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->labelSelectorShrink)) {
            $query['labelSelector'] = $request->labelSelectorShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineTemplates',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetemplates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListPipelineTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询流水线模板
     *  *
     * @param ListPipelineTemplatesRequest $request ListPipelineTemplatesRequest
     *
     * @return ListPipelineTemplatesResponse ListPipelineTemplatesResponse
     */
    public function listPipelineTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量查询流水线触发历史
     *  *
     * @param ListPipelineTriggerEventsRequest $tmpReq  ListPipelineTriggerEventsRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPipelineTriggerEventsResponse ListPipelineTriggerEventsResponse
     */
    public function listPipelineTriggerEventsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPipelineTriggerEventsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labelSelector)) {
            $request->labelSelectorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->labelSelectorShrink)) {
            $query['labelSelector'] = $request->labelSelectorShrink;
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
            'action'      => 'ListPipelineTriggerEvents',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetriggerevents',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineTriggerEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询流水线触发历史
     *  *
     * @param ListPipelineTriggerEventsRequest $request ListPipelineTriggerEventsRequest
     *
     * @return ListPipelineTriggerEventsResponse ListPipelineTriggerEventsResponse
     */
    public function listPipelineTriggerEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineTriggerEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量查询流水线触发器
     *  *
     * @param ListPipelineTriggersRequest $tmpReq  ListPipelineTriggersRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPipelineTriggersResponse ListPipelineTriggersResponse
     */
    public function listPipelineTriggersWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPipelineTriggersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labelSelector)) {
            $request->labelSelectorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->labelSelectorShrink)) {
            $query['labelSelector'] = $request->labelSelectorShrink;
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
            'action'      => 'ListPipelineTriggers',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetriggers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineTriggersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询流水线触发器
     *  *
     * @param ListPipelineTriggersRequest $request ListPipelineTriggersRequest
     *
     * @return ListPipelineTriggersResponse ListPipelineTriggersResponse
     */
    public function listPipelineTriggers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineTriggersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量查询流水线
     *  *
     * @param ListPipelinesRequest $tmpReq  ListPipelinesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPipelinesResponse ListPipelinesResponse
     */
    public function listPipelinesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPipelinesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labelSelector)) {
            $request->labelSelectorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->labelSelectorShrink)) {
            $query['labelSelector'] = $request->labelSelectorShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelines',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询流水线
     *  *
     * @param ListPipelinesRequest $request ListPipelinesRequest
     *
     * @return ListPipelinesResponse ListPipelinesResponse
     */
    public function listPipelines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量查询项目
     *  *
     * @param ListProjectsRequest $tmpReq  ListProjectsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjectsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListProjectsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labelSelector)) {
            $request->labelSelectorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->labelSelectorShrink)) {
            $query['labelSelector'] = $request->labelSelectorShrink;
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
            'action'      => 'ListProjects',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/projects',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询项目
     *  *
     * @param ListProjectsRequest $request ListProjectsRequest
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量查询仓库绑定
     *  *
     * @param ListRepositoriesRequest $tmpReq  ListRepositoriesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRepositoriesResponse ListRepositoriesResponse
     */
    public function listRepositoriesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListRepositoriesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labelSelector)) {
            $request->labelSelectorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->labelSelectorShrink)) {
            $query['labelSelector'] = $request->labelSelectorShrink;
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
            'action'      => 'ListRepositories',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/repositories',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询仓库绑定
     *  *
     * @param ListRepositoriesRequest $request ListRepositoriesRequest
     *
     * @return ListRepositoriesResponse ListRepositoriesResponse
     */
    public function listRepositories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量查询任务模板
     *  *
     * @param ListTaskTemplatesRequest $tmpReq  ListTaskTemplatesRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskTemplatesResponse ListTaskTemplatesResponse
     */
    public function listTaskTemplatesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTaskTemplatesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labelSelector)) {
            $request->labelSelectorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->labelSelectorShrink)) {
            $query['labelSelector'] = $request->labelSelectorShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaskTemplates',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasktemplates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListTaskTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询任务模板
     *  *
     * @param ListTaskTemplatesRequest $request ListTaskTemplatesRequest
     *
     * @return ListTaskTemplatesResponse ListTaskTemplatesResponse
     */
    public function listTaskTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTaskTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量查询任务
     *  *
     * @param ListTasksRequest $tmpReq  ListTasksRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasksWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTasksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labelSelector)) {
            $request->labelSelectorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelSelector, 'labelSelector', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->labelSelectorShrink)) {
            $query['labelSelector'] = $request->labelSelectorShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询任务
     *  *
     * @param ListTasksRequest $request ListTasksRequest
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新环境（全局更新）
     *  *
     * @param string                $project
     * @param string                $name
     * @param PutEnvironmentRequest $request PutEnvironmentRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return PutEnvironmentResponse PutEnvironmentResponse
     */
    public function putEnvironmentWithOptions($project, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutEnvironment',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/projects/' . OpenApiUtilClient::getEncodeParam($project) . '/environments/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新环境（全局更新）
     *  *
     * @param string                $project
     * @param string                $name
     * @param PutEnvironmentRequest $request PutEnvironmentRequest
     *
     * @return PutEnvironmentResponse PutEnvironmentResponse
     */
    public function putEnvironment($project, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putEnvironmentWithOptions($project, $name, $request, $headers, $runtime);
    }

    /**
     * @summary 更新流水线状态
     *  *
     * @param string                   $name
     * @param PutPipelineStatusRequest $request PutPipelineStatusRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return PutPipelineStatusResponse PutPipelineStatusResponse
     */
    public function putPipelineStatusWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutPipelineStatus',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelines/' . OpenApiUtilClient::getEncodeParam($name) . '/status',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutPipelineStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新流水线状态
     *  *
     * @param string                   $name
     * @param PutPipelineStatusRequest $request PutPipelineStatusRequest
     *
     * @return PutPipelineStatusResponse PutPipelineStatusResponse
     */
    public function putPipelineStatus($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putPipelineStatusWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary 更新替换流水线模板
     *  *
     * @param string                     $name
     * @param PutPipelineTemplateRequest $request PutPipelineTemplateRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return PutPipelineTemplateResponse PutPipelineTemplateResponse
     */
    public function putPipelineTemplateWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutPipelineTemplate',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetemplates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutPipelineTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新替换流水线模板
     *  *
     * @param string                     $name
     * @param PutPipelineTemplateRequest $request PutPipelineTemplateRequest
     *
     * @return PutPipelineTemplateResponse PutPipelineTemplateResponse
     */
    public function putPipelineTemplate($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putPipelineTemplateWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary 更新替换流水线触发器
     *  *
     * @param string                    $name
     * @param PutPipelineTriggerRequest $request PutPipelineTriggerRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return PutPipelineTriggerResponse PutPipelineTriggerResponse
     */
    public function putPipelineTriggerWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutPipelineTrigger',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetriggers/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutPipelineTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新替换流水线触发器
     *  *
     * @param string                    $name
     * @param PutPipelineTriggerRequest $request PutPipelineTriggerRequest
     *
     * @return PutPipelineTriggerResponse PutPipelineTriggerResponse
     */
    public function putPipelineTrigger($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putPipelineTriggerWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary 更新替换应用
     *  *
     * @param string            $name
     * @param PutProjectRequest $request PutProjectRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return PutProjectResponse PutProjectResponse
     */
    public function putProjectWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutProject',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/projects/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新替换应用
     *  *
     * @param string            $name
     * @param PutProjectRequest $request PutProjectRequest
     *
     * @return PutProjectResponse PutProjectResponse
     */
    public function putProject($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putProjectWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary 更新替换任务状态
     *  *
     * @param string               $name
     * @param PutTaskStatusRequest $request PutTaskStatusRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return PutTaskStatusResponse PutTaskStatusResponse
     */
    public function putTaskStatusWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutTaskStatus',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasks/' . OpenApiUtilClient::getEncodeParam($name) . '/status',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新替换任务状态
     *  *
     * @param string               $name
     * @param PutTaskStatusRequest $request PutTaskStatusRequest
     *
     * @return PutTaskStatusResponse PutTaskStatusResponse
     */
    public function putTaskStatus($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putTaskStatusWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary 更新替换任务模板
     *  *
     * @param string                 $name
     * @param PutTaskTemplateRequest $request PutTaskTemplateRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return PutTaskTemplateResponse PutTaskTemplateResponse
     */
    public function putTaskTemplateWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutTaskTemplate',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasktemplates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutTaskTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新替换任务模板
     *  *
     * @param string                 $name
     * @param PutTaskTemplateRequest $request PutTaskTemplateRequest
     *
     * @return PutTaskTemplateResponse PutTaskTemplateResponse
     */
    public function putTaskTemplate($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putTaskTemplateWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary 检查并刷新身份绑定中的凭证和账号信息
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshConnectionResponse RefreshConnectionResponse
     */
    public function refreshConnectionWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RefreshConnection',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/connections/' . OpenApiUtilClient::getEncodeParam($name) . '/refresh',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefreshConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检查并刷新身份绑定中的凭证和账号信息
     *  *
     * @param string $name
     *
     * @return RefreshConnectionResponse RefreshConnectionResponse
     */
    public function refreshConnection($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refreshConnectionWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 确认并继续执行任务
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeTaskResponse ResumeTaskResponse
     */
    public function resumeTaskWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ResumeTask',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasks/' . OpenApiUtilClient::getEncodeParam($name) . '/resume',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResumeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 确认并继续执行任务
     *  *
     * @param string $name
     *
     * @return ResumeTaskResponse ResumeTaskResponse
     */
    public function resumeTask($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeTaskWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 重试执行任务
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return RetryTaskResponse RetryTaskResponse
     */
    public function retryTaskWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RetryTask',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasks/' . OpenApiUtilClient::getEncodeParam($name) . '/retry',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RetryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重试执行任务
     *  *
     * @param string $name
     *
     * @return RetryTaskResponse RetryTaskResponse
     */
    public function retryTask($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryTaskWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 开始执行流水线
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return StartPipelineResponse StartPipelineResponse
     */
    public function startPipelineWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartPipeline',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelines/' . OpenApiUtilClient::getEncodeParam($name) . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开始执行流水线
     *  *
     * @param string $name
     *
     * @return StartPipelineResponse StartPipelineResponse
     */
    public function startPipeline($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startPipelineWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 开始执行任务
     *  *
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return StartTaskResponse StartTaskResponse
     */
    public function startTaskWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartTask',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/tasks/' . OpenApiUtilClient::getEncodeParam($name) . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开始执行任务
     *  *
     * @param string $name
     *
     * @return StartTaskResponse StartTaskResponse
     */
    public function startTask($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startTaskWithOptions($name, $headers, $runtime);
    }

    /**
     * @summary 更新环境（局部更新）
     *  *
     * @param string                   $project
     * @param string                   $name
     * @param UpdateEnvironmentRequest $request UpdateEnvironmentRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEnvironmentResponse UpdateEnvironmentResponse
     */
    public function updateEnvironmentWithOptions($project, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnvironment',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/projects/' . OpenApiUtilClient::getEncodeParam($project) . '/environments/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新环境（局部更新）
     *  *
     * @param string                   $project
     * @param string                   $name
     * @param UpdateEnvironmentRequest $request UpdateEnvironmentRequest
     *
     * @return UpdateEnvironmentResponse UpdateEnvironmentResponse
     */
    public function updateEnvironment($project, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnvironmentWithOptions($project, $name, $request, $headers, $runtime);
    }

    /**
     * @summary 更新流水线触发器
     *  *
     * @param string                       $name
     * @param UpdatePipelineTriggerRequest $request UpdatePipelineTriggerRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePipelineTriggerResponse UpdatePipelineTriggerResponse
     */
    public function updatePipelineTriggerWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipelineTrigger',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/pipelinetriggers/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新流水线触发器
     *  *
     * @param string                       $name
     * @param UpdatePipelineTriggerRequest $request UpdatePipelineTriggerRequest
     *
     * @return UpdatePipelineTriggerResponse UpdatePipelineTriggerResponse
     */
    public function updatePipelineTrigger($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineTriggerWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @summary 更新替换应用
     *  *
     * @param string               $name
     * @param UpdateProjectRequest $request UpdateProjectRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateProjectResponse UpdateProjectResponse
     */
    public function updateProjectWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProject',
            'version'     => '2023-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-07-14/projects/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新替换应用
     *  *
     * @param string               $name
     * @param UpdateProjectRequest $request UpdateProjectRequest
     *
     * @return UpdateProjectResponse UpdateProjectResponse
     */
    public function updateProject($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($name, $request, $headers, $runtime);
    }
}
