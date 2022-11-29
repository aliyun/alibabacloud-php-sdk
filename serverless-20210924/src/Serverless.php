<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Serverless\V20210924\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\CreatePipelineRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\CreatePipelineResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\CreatePipelineTemplateRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\CreatePipelineTemplateResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\CreateReleaseRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\CreateReleaseResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\CreateTaskRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\CreateTaskResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\CreateTaskTemplateRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\CreateTaskTemplateResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\DeleteEnvironmentResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\DeletePipelineTemplateResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\DeleteTaskTemplateResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\GetEnvironmentResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\GetPipelineResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\GetPipelineTemplateResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\GetReleaseResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\GetServiceResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\GetTaskResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\GetTaskTemplateResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\GetTemplateRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\GetTemplateResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListEnvironmentRevisionsRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListEnvironmentRevisionsResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListEnvironmentsResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListPipelinesShrinkRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListPipelineTemplatesRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListPipelineTemplatesResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListPipelineTemplatesShrinkRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListServiceRevisionsRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListServiceRevisionsResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListServicesResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListTasksRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListTasksResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListTasksShrinkRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListTaskTemplatesRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListTaskTemplatesResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListTaskTemplatesShrinkRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListTemplateRevisionsRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListTemplateRevisionsResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\PutEnvironmentRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\PutEnvironmentResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\PutServiceRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\PutServiceResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\PutTemplateRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\PutTemplateResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\ResumeTaskResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\StartPipelineResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\StartTaskResponse;
use AlibabaCloud\SDK\Serverless\V20210924\Models\UpdateApplicationRequest;
use AlibabaCloud\SDK\Serverless\V20210924\Models\UpdateApplicationResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Serverless extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('serverless', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoDeploy)) {
            $body['autoDeploy'] = $request->autoDeploy;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->envVars)) {
            $body['envVars'] = $request->envVars;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->repoSource)) {
            $body['repoSource'] = $request->repoSource;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $body['roleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->template)) {
            $body['template'] = $request->template;
        }
        if (!Utils::isUnset($request->trigger)) {
            $body['trigger'] = $request->trigger;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApplication',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/applications',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreatePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePipelineResponse
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
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/pipelines',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePipelineTemplateRequest $request
     *
     * @return CreatePipelineTemplateResponse
     */
    public function createPipelineTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreatePipelineTemplateRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePipelineTemplateResponse
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
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/pipelinetemplates',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $appName
     * @param CreateReleaseRequest $request
     *
     * @return CreateReleaseResponse
     */
    public function createRelease($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createReleaseWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @param string               $appName
     * @param CreateReleaseRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateReleaseResponse
     */
    public function createReleaseWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRelease',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/applications/' . OpenApiUtilClient::getEncodeParam($appName) . '/releases',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateTask',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/tasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTaskTemplateRequest $request
     *
     * @return CreateTaskTemplateResponse
     */
    public function createTaskTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateTaskTemplateRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateTaskTemplateResponse
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
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/tasktemplates',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTaskTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplication($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteApplicationWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteApplication',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/applications/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironment($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnvironmentWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironmentWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteEnvironment',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/environments/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return DeletePipelineTemplateResponse
     */
    public function deletePipelineTemplate($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineTemplateWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePipelineTemplateResponse
     */
    public function deletePipelineTemplateWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeletePipelineTemplate',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/pipelinetemplates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return DeleteTaskTemplateResponse
     */
    public function deleteTaskTemplate($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTaskTemplateWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTaskTemplateResponse
     */
    public function deleteTaskTemplateWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteTaskTemplate',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/tasktemplates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTaskTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $name
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTemplateWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string                $name
     * @param DeleteTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/templates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return GetApplicationResponse
     */
    public function getApplication($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getApplicationWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetApplicationResponse
     */
    public function getApplicationWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetApplication',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/applications/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironment($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironmentWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetEnvironment',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/environments/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetPipeline',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/pipelines/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return GetPipelineTemplateResponse
     */
    public function getPipelineTemplate($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineTemplateWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPipelineTemplateResponse
     */
    public function getPipelineTemplateWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipelineTemplate',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/pipelinetemplates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appName
     * @param string $versionId
     *
     * @return GetReleaseResponse
     */
    public function getRelease($appName, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getReleaseWithOptions($appName, $versionId, $headers, $runtime);
    }

    /**
     * @param string         $appName
     * @param string         $versionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetReleaseResponse
     */
    public function getReleaseWithOptions($appName, $versionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRelease',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/applications/' . OpenApiUtilClient::getEncodeParam($appName) . '/releases/' . OpenApiUtilClient::getEncodeParam($versionId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return GetServiceResponse
     */
    public function getService($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetService',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/services/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetTask',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/tasks/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return GetTaskTemplateResponse
     */
    public function getTaskTemplate($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskTemplateWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskTemplateResponse
     */
    public function getTaskTemplateWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTaskTemplate',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/tasktemplates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $name
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string             $name
     * @param GetTemplateRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/templates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEnvironmentRevisionsRequest $request
     *
     * @return ListEnvironmentRevisionsResponse
     */
    public function listEnvironmentRevisions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentRevisionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEnvironmentRevisionsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListEnvironmentRevisionsResponse
     */
    public function listEnvironmentRevisionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentName)) {
            $query['environmentName'] = $request->environmentName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironmentRevisions',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/environmentrevisions/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListEnvironmentRevisionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListEnvironmentsResponse
     */
    public function listEnvironments()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentsWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironmentsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListEnvironments',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/environments/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListEnvironmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPipelineTemplatesRequest $request
     *
     * @return ListPipelineTemplatesResponse
     */
    public function listPipelineTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListPipelineTemplatesRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListPipelineTemplatesResponse
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
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/pipelinetemplates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListPipelineTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListPipelinesRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListPipelinesResponse
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
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/pipelines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceRevisionsRequest $request
     *
     * @return ListServiceRevisionsResponse
     */
    public function listServiceRevisions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceRevisionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListServiceRevisionsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListServiceRevisionsResponse
     */
    public function listServiceRevisionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceName)) {
            $query['serviceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceRevisions',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/servicerevisions/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListServiceRevisionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListServicesResponse
     */
    public function listServices()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListServices',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/services/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskTemplatesRequest $request
     *
     * @return ListTaskTemplatesResponse
     */
    public function listTaskTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTaskTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTaskTemplatesRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListTaskTemplatesResponse
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
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/tasktemplates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListTaskTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListTasksRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
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
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTemplateRevisionsRequest $request
     *
     * @return ListTemplateRevisionsResponse
     */
    public function listTemplateRevisions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTemplateRevisionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTemplateRevisionsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListTemplateRevisionsResponse
     */
    public function listTemplateRevisionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateName)) {
            $query['templateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['templateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplateRevisions',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/templaterevisions/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListTemplateRevisionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTemplatesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplates',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/templates/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $name
     * @param PutEnvironmentRequest $request
     *
     * @return PutEnvironmentResponse
     */
    public function putEnvironment($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putEnvironmentWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string                $name
     * @param PutEnvironmentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PutEnvironmentResponse
     */
    public function putEnvironmentWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutEnvironment',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/environments/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $name
     * @param PutServiceRequest $request
     *
     * @return PutServiceResponse
     */
    public function putService($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putServiceWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string            $name
     * @param PutServiceRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return PutServiceResponse
     */
    public function putServiceWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutService',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/services/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $name
     * @param PutTemplateRequest $request
     *
     * @return PutTemplateResponse
     */
    public function putTemplate($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putTemplateWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string             $name
     * @param PutTemplateRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return PutTemplateResponse
     */
    public function putTemplateWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutTemplate',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/templates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'ResumeTask',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/tasks/' . OpenApiUtilClient::getEncodeParam($name) . '/resume',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResumeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'StartPipeline',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/pipelines/' . OpenApiUtilClient::getEncodeParam($name) . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'StartTask',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/tasks/' . OpenApiUtilClient::getEncodeParam($name) . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $name
     * @param UpdateApplicationRequest $request
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplication($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApplicationWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string                   $name
     * @param UpdateApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplicationWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplication',
            'version'     => '2021-09-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/apis/serverlessdeployment/v1/applications/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
