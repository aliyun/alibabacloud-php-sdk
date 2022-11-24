<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateSavepointHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateSavepointRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateSavepointResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateVariableHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateVariableRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateVariableResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteDeploymentHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteDeploymentResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteSavepointHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteSavepointResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteVariableHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteVariableResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\FlinkApiProxyHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\FlinkApiProxyRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\FlinkApiProxyResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GenerateResourcePlanWithFlinkConfAsyncHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GenerateResourcePlanWithFlinkConfAsyncRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GenerateResourcePlanWithFlinkConfAsyncResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDeploymentHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetDeploymentResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetGenerateResourcePlanResultHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetGenerateResourcePlanResultResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetSavepointHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetSavepointResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentTargetsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentTargetsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListDeploymentTargetsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListEngineVersionMetadataHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListEngineVersionMetadataResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListJobsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListJobsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListJobsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListSavepointsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListSavepointsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListSavepointsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListVariablesHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListVariablesRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListVariablesResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopJobRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param string                  $namespace
     * @param CreateDeploymentRequest $request
     *
     * @return CreateDeploymentResponse
     */
    public function createDeployment($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDeploymentHeaders([]);

        return $this->createDeploymentWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @param string                  $namespace
     * @param CreateDeploymentRequest $request
     * @param CreateDeploymentHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDeploymentResponse
     */
    public function createDeploymentWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateDeployment',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $namespace
     * @param CreateSavepointRequest $request
     *
     * @return CreateSavepointResponse
     */
    public function createSavepoint($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSavepointHeaders([]);

        return $this->createSavepointWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @param string                 $namespace
     * @param CreateSavepointRequest $request
     * @param CreateSavepointHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSavepointResponse
     */
    public function createSavepointWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deploymentId)) {
            $body['deploymentId'] = $request->deploymentId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->nativeFormat)) {
            $body['nativeFormat'] = $request->nativeFormat;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSavepoint',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/savepoints',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSavepointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $namespace
     * @param CreateVariableRequest $request
     *
     * @return CreateVariableResponse
     */
    public function createVariable($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateVariableHeaders([]);

        return $this->createVariableWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @param string                $namespace
     * @param CreateVariableRequest $request
     * @param CreateVariableHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateVariableResponse
     */
    public function createVariableWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateVariable',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/variables',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $namespace
     * @param string $deploymentId
     *
     * @return DeleteDeploymentResponse
     */
    public function deleteDeployment($namespace, $deploymentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteDeploymentHeaders([]);

        return $this->deleteDeploymentWithOptions($namespace, $deploymentId, $headers, $runtime);
    }

    /**
     * @param string                  $namespace
     * @param string                  $deploymentId
     * @param DeleteDeploymentHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDeploymentResponse
     */
    public function deleteDeploymentWithOptions($namespace, $deploymentId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'DeleteDeployment',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployments/' . OpenApiUtilClient::getEncodeParam($deploymentId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $namespace
     * @param string $jobId
     *
     * @return DeleteJobResponse
     */
    public function deleteJob($namespace, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteJobHeaders([]);

        return $this->deleteJobWithOptions($namespace, $jobId, $headers, $runtime);
    }

    /**
     * @param string           $namespace
     * @param string           $jobId
     * @param DeleteJobHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteJobResponse
     */
    public function deleteJobWithOptions($namespace, $jobId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'DeleteJob',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $namespace
     * @param string $savepointId
     *
     * @return DeleteSavepointResponse
     */
    public function deleteSavepoint($namespace, $savepointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteSavepointHeaders([]);

        return $this->deleteSavepointWithOptions($namespace, $savepointId, $headers, $runtime);
    }

    /**
     * @param string                 $namespace
     * @param string                 $savepointId
     * @param DeleteSavepointHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSavepointResponse
     */
    public function deleteSavepointWithOptions($namespace, $savepointId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'DeleteSavepoint',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/savepoints/' . OpenApiUtilClient::getEncodeParam($savepointId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSavepointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $namespace
     * @param string $name
     *
     * @return DeleteVariableResponse
     */
    public function deleteVariable($namespace, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteVariableHeaders([]);

        return $this->deleteVariableWithOptions($namespace, $name, $headers, $runtime);
    }

    /**
     * @param string                $namespace
     * @param string                $name
     * @param DeleteVariableHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteVariableResponse
     */
    public function deleteVariableWithOptions($namespace, $name, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'DeleteVariable',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/variables/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param FlinkApiProxyRequest $request
     * @param FlinkApiProxyHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return FlinkApiProxyResponse
     */
    public function flinkApiProxyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flinkApiPath)) {
            $query['flinkApiPath'] = $request->flinkApiPath;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlinkApiProxy',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/flink-ui/v2/proxy',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FlinkApiProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                        $namespace
     * @param string                                        $deploymentId
     * @param GenerateResourcePlanWithFlinkConfAsyncRequest $request
     *
     * @return GenerateResourcePlanWithFlinkConfAsyncResponse
     */
    public function generateResourcePlanWithFlinkConfAsync($namespace, $deploymentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GenerateResourcePlanWithFlinkConfAsyncHeaders([]);

        return $this->generateResourcePlanWithFlinkConfAsyncWithOptions($namespace, $deploymentId, $request, $headers, $runtime);
    }

    /**
     * @param string                                        $namespace
     * @param string                                        $deploymentId
     * @param GenerateResourcePlanWithFlinkConfAsyncRequest $request
     * @param GenerateResourcePlanWithFlinkConfAsyncHeaders $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return GenerateResourcePlanWithFlinkConfAsyncResponse
     */
    public function generateResourcePlanWithFlinkConfAsyncWithOptions($namespace, $deploymentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'GenerateResourcePlanWithFlinkConfAsync',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployments/' . OpenApiUtilClient::getEncodeParam($deploymentId) . '/resource-plan%3AasyncGenerate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateResourcePlanWithFlinkConfAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $namespace
     * @param string $deploymentId
     *
     * @return GetDeploymentResponse
     */
    public function getDeployment($namespace, $deploymentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeploymentHeaders([]);

        return $this->getDeploymentWithOptions($namespace, $deploymentId, $headers, $runtime);
    }

    /**
     * @param string               $namespace
     * @param string               $deploymentId
     * @param GetDeploymentHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeploymentResponse
     */
    public function getDeploymentWithOptions($namespace, $deploymentId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'GetDeployment',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployments/' . OpenApiUtilClient::getEncodeParam($deploymentId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $namespace
     * @param string $ticketId
     *
     * @return GetGenerateResourcePlanResultResponse
     */
    public function getGenerateResourcePlanResult($namespace, $ticketId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetGenerateResourcePlanResultHeaders([]);

        return $this->getGenerateResourcePlanResultWithOptions($namespace, $ticketId, $headers, $runtime);
    }

    /**
     * @param string                               $namespace
     * @param string                               $ticketId
     * @param GetGenerateResourcePlanResultHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetGenerateResourcePlanResultResponse
     */
    public function getGenerateResourcePlanResultWithOptions($namespace, $ticketId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'GetGenerateResourcePlanResult',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployments/tickets/' . OpenApiUtilClient::getEncodeParam($ticketId) . '/resource-plan%3AasyncGenerate',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGenerateResourcePlanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $namespace
     * @param string $jobId
     *
     * @return GetJobResponse
     */
    public function getJob($namespace, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetJobHeaders([]);

        return $this->getJobWithOptions($namespace, $jobId, $headers, $runtime);
    }

    /**
     * @param string         $namespace
     * @param string         $jobId
     * @param GetJobHeaders  $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($namespace, $jobId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'GetJob',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $namespace
     * @param string $savepointId
     *
     * @return GetSavepointResponse
     */
    public function getSavepoint($namespace, $savepointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSavepointHeaders([]);

        return $this->getSavepointWithOptions($namespace, $savepointId, $headers, $runtime);
    }

    /**
     * @param string              $namespace
     * @param string              $savepointId
     * @param GetSavepointHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetSavepointResponse
     */
    public function getSavepointWithOptions($namespace, $savepointId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'GetSavepoint',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/savepoints/' . OpenApiUtilClient::getEncodeParam($savepointId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSavepointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $namespace
     * @param ListDeploymentTargetsRequest $request
     *
     * @return ListDeploymentTargetsResponse
     */
    public function listDeploymentTargets($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDeploymentTargetsHeaders([]);

        return $this->listDeploymentTargetsWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @param string                       $namespace
     * @param ListDeploymentTargetsRequest $request
     * @param ListDeploymentTargetsHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListDeploymentTargetsResponse
     */
    public function listDeploymentTargetsWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $query['pageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeploymentTargets',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployment-targets',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeploymentTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $namespace
     * @param ListDeploymentsRequest $request
     *
     * @return ListDeploymentsResponse
     */
    public function listDeployments($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDeploymentsHeaders([]);

        return $this->listDeploymentsWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @param string                 $namespace
     * @param ListDeploymentsRequest $request
     * @param ListDeploymentsHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeploymentsResponse
     */
    public function listDeploymentsWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $query['pageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeployments',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeploymentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListEngineVersionMetadataResponse
     */
    public function listEngineVersionMetadata()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListEngineVersionMetadataHeaders([]);

        return $this->listEngineVersionMetadataWithOptions($headers, $runtime);
    }

    /**
     * @param ListEngineVersionMetadataHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListEngineVersionMetadataResponse
     */
    public function listEngineVersionMetadataWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'ListEngineVersionMetadata',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/engine-version-meta.json',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEngineVersionMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string          $namespace
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListJobsHeaders([]);

        return $this->listJobsWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @param string          $namespace
     * @param ListJobsRequest $request
     * @param ListJobsHeaders $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deploymentId)) {
            $query['deploymentId'] = $request->deploymentId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['pageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/jobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $namespace
     * @param ListSavepointsRequest $request
     *
     * @return ListSavepointsResponse
     */
    public function listSavepoints($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListSavepointsHeaders([]);

        return $this->listSavepointsWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @param string                $namespace
     * @param ListSavepointsRequest $request
     * @param ListSavepointsHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListSavepointsResponse
     */
    public function listSavepointsWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deploymentId)) {
            $query['deploymentId'] = $request->deploymentId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['jobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['pageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSavepoints',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/savepoints',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSavepointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $namespace
     * @param ListVariablesRequest $request
     *
     * @return ListVariablesResponse
     */
    public function listVariables($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListVariablesHeaders([]);

        return $this->listVariablesWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @param string               $namespace
     * @param ListVariablesRequest $request
     * @param ListVariablesHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListVariablesResponse
     */
    public function listVariablesWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $query['pageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVariables',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/variables',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVariablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string          $namespace
     * @param StartJobRequest $request
     *
     * @return StartJobResponse
     */
    public function startJob($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartJobHeaders([]);

        return $this->startJobWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @param string          $namespace
     * @param StartJobRequest $request
     * @param StartJobHeaders $headers
     * @param RuntimeOptions  $runtime
     *
     * @return StartJobResponse
     */
    public function startJobWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'StartJob',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string         $namespace
     * @param string         $jobId
     * @param StopJobRequest $request
     *
     * @return StopJobResponse
     */
    public function stopJob($namespace, $jobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StopJobHeaders([]);

        return $this->stopJobWithOptions($namespace, $jobId, $request, $headers, $runtime);
    }

    /**
     * @param string         $namespace
     * @param string         $jobId
     * @param StopJobRequest $request
     * @param StopJobHeaders $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopJobResponse
     */
    public function stopJobWithOptions($namespace, $jobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'StopJob',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '%3Astop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $namespace
     * @param string                  $deploymentId
     * @param UpdateDeploymentRequest $request
     *
     * @return UpdateDeploymentResponse
     */
    public function updateDeployment($namespace, $deploymentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateDeploymentHeaders([]);

        return $this->updateDeploymentWithOptions($namespace, $deploymentId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $namespace
     * @param string                  $deploymentId
     * @param UpdateDeploymentRequest $request
     * @param UpdateDeploymentHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDeploymentResponse
     */
    public function updateDeploymentWithOptions($namespace, $deploymentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->workspace)) {
            $realHeaders['workspace'] = Utils::toJSONString($headers->workspace);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDeployment',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployments/' . OpenApiUtilClient::getEncodeParam($deploymentId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
