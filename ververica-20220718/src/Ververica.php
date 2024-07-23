<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateMemberHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateMemberRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateMemberResponse;
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
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteMemberHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteMemberResponse;
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
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetLatestJobStartLogHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetLatestJobStartLogResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetMemberHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetMemberResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetSavepointHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetSavepointResponse;
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
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListVariablesHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListVariablesRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ListVariablesResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobWithParamsHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobWithParamsRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StartJobWithParamsResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopJobRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateMemberHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateMemberRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateMemberResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ValidateSqlStatementHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ValidateSqlStatementRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ValidateSqlStatementResponse;
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
     * @summary Creates a deployment.
     *  *
     * @param string                  $namespace
     * @param CreateDeploymentRequest $request   CreateDeploymentRequest
     * @param CreateDeploymentHeaders $headers   CreateDeploymentHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateDeploymentResponse CreateDeploymentResponse
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
     * @summary Creates a deployment.
     *  *
     * @param string                  $namespace
     * @param CreateDeploymentRequest $request   CreateDeploymentRequest
     *
     * @return CreateDeploymentResponse CreateDeploymentResponse
     */
    public function createDeployment($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDeploymentHeaders([]);

        return $this->createDeploymentWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Adds a user to a namespace as a member and grants permissions to the user.
     *  *
     * @param string              $namespace
     * @param CreateMemberRequest $request   CreateMemberRequest
     * @param CreateMemberHeaders $headers   CreateMemberHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateMemberResponse CreateMemberResponse
     */
    public function createMemberWithOptions($namespace, $request, $headers, $runtime)
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
            'action'      => 'CreateMember',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gateway/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/members',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a user to a namespace as a member and grants permissions to the user.
     *  *
     * @param string              $namespace
     * @param CreateMemberRequest $request   CreateMemberRequest
     *
     * @return CreateMemberResponse CreateMemberResponse
     */
    public function createMember($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateMemberHeaders([]);

        return $this->createMemberWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a savepoint.
     *  *
     * @param string                 $namespace
     * @param CreateSavepointRequest $request   CreateSavepointRequest
     * @param CreateSavepointHeaders $headers   CreateSavepointHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateSavepointResponse CreateSavepointResponse
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
     * @summary Creates a savepoint.
     *  *
     * @param string                 $namespace
     * @param CreateSavepointRequest $request   CreateSavepointRequest
     *
     * @return CreateSavepointResponse CreateSavepointResponse
     */
    public function createSavepoint($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSavepointHeaders([]);

        return $this->createSavepointWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a variable.
     *  *
     * @param string                $namespace
     * @param CreateVariableRequest $request   CreateVariableRequest
     * @param CreateVariableHeaders $headers   CreateVariableHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateVariableResponse CreateVariableResponse
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
     * @summary Creates a variable.
     *  *
     * @param string                $namespace
     * @param CreateVariableRequest $request   CreateVariableRequest
     *
     * @return CreateVariableResponse CreateVariableResponse
     */
    public function createVariable($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateVariableHeaders([]);

        return $this->createVariableWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes a deployment based on the deployment ID.
     *  *
     * @param string                  $namespace
     * @param string                  $deploymentId
     * @param DeleteDeploymentHeaders $headers      DeleteDeploymentHeaders
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteDeploymentResponse DeleteDeploymentResponse
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
     * @summary Deletes a deployment based on the deployment ID.
     *  *
     * @param string $namespace
     * @param string $deploymentId
     *
     * @return DeleteDeploymentResponse DeleteDeploymentResponse
     */
    public function deleteDeployment($namespace, $deploymentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteDeploymentHeaders([]);

        return $this->deleteDeploymentWithOptions($namespace, $deploymentId, $headers, $runtime);
    }

    /**
     * @summary Deletes the information about a job that is not in the running state in a deployment.
     *  *
     * @param string           $namespace
     * @param string           $jobId
     * @param DeleteJobHeaders $headers   DeleteJobHeaders
     * @param RuntimeOptions   $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteJobResponse DeleteJobResponse
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
     * @summary Deletes the information about a job that is not in the running state in a deployment.
     *  *
     * @param string $namespace
     * @param string $jobId
     *
     * @return DeleteJobResponse DeleteJobResponse
     */
    public function deleteJob($namespace, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteJobHeaders([]);

        return $this->deleteJobWithOptions($namespace, $jobId, $headers, $runtime);
    }

    /**
     * @summary Revokes the permissions from a member.
     *  *
     * @param string              $namespace
     * @param string              $member
     * @param DeleteMemberHeaders $headers   DeleteMemberHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteMemberResponse DeleteMemberResponse
     */
    public function deleteMemberWithOptions($namespace, $member, $headers, $runtime)
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
            'action'      => 'DeleteMember',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gateway/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/members/' . OpenApiUtilClient::getEncodeParam($member) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes the permissions from a member.
     *  *
     * @param string $namespace
     * @param string $member
     *
     * @return DeleteMemberResponse DeleteMemberResponse
     */
    public function deleteMember($namespace, $member)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteMemberHeaders([]);

        return $this->deleteMemberWithOptions($namespace, $member, $headers, $runtime);
    }

    /**
     * @summary Deletes a savepoint.
     *  *
     * @param string                 $namespace
     * @param string                 $savepointId
     * @param DeleteSavepointHeaders $headers     DeleteSavepointHeaders
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteSavepointResponse DeleteSavepointResponse
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
     * @summary Deletes a savepoint.
     *  *
     * @param string $namespace
     * @param string $savepointId
     *
     * @return DeleteSavepointResponse DeleteSavepointResponse
     */
    public function deleteSavepoint($namespace, $savepointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteSavepointHeaders([]);

        return $this->deleteSavepointWithOptions($namespace, $savepointId, $headers, $runtime);
    }

    /**
     * @summary Deletes a variable.
     *  *
     * @param string                $namespace
     * @param string                $name
     * @param DeleteVariableHeaders $headers   DeleteVariableHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteVariableResponse DeleteVariableResponse
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
     * @summary Deletes a variable.
     *  *
     * @param string $namespace
     * @param string $name
     *
     * @return DeleteVariableResponse DeleteVariableResponse
     */
    public function deleteVariable($namespace, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteVariableHeaders([]);

        return $this->deleteVariableWithOptions($namespace, $name, $headers, $runtime);
    }

    /**
     * @summary Provides a Flink request proxy.
     *  *
     * @param FlinkApiProxyRequest $request FlinkApiProxyRequest
     * @param FlinkApiProxyHeaders $headers FlinkApiProxyHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return FlinkApiProxyResponse FlinkApiProxyResponse
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
     * @summary Provides a Flink request proxy.
     *  *
     * @param FlinkApiProxyRequest $request FlinkApiProxyRequest
     *
     * @return FlinkApiProxyResponse FlinkApiProxyResponse
     */
    public function flinkApiProxy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FlinkApiProxyHeaders([]);

        return $this->flinkApiProxyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Submits a ticket that applies for asynchronous generation of the fine-grained resources. This operation returns the ID of the ticket for you to query the asynchronous generation result.
     *  *
     * @param string                                        $namespace
     * @param string                                        $deploymentId
     * @param GenerateResourcePlanWithFlinkConfAsyncRequest $request      GenerateResourcePlanWithFlinkConfAsyncRequest
     * @param GenerateResourcePlanWithFlinkConfAsyncHeaders $headers      GenerateResourcePlanWithFlinkConfAsyncHeaders
     * @param RuntimeOptions                                $runtime      runtime options for this request RuntimeOptions
     *
     * @return GenerateResourcePlanWithFlinkConfAsyncResponse GenerateResourcePlanWithFlinkConfAsyncResponse
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
     * @summary Submits a ticket that applies for asynchronous generation of the fine-grained resources. This operation returns the ID of the ticket for you to query the asynchronous generation result.
     *  *
     * @param string                                        $namespace
     * @param string                                        $deploymentId
     * @param GenerateResourcePlanWithFlinkConfAsyncRequest $request      GenerateResourcePlanWithFlinkConfAsyncRequest
     *
     * @return GenerateResourcePlanWithFlinkConfAsyncResponse GenerateResourcePlanWithFlinkConfAsyncResponse
     */
    public function generateResourcePlanWithFlinkConfAsync($namespace, $deploymentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GenerateResourcePlanWithFlinkConfAsyncHeaders([]);

        return $this->generateResourcePlanWithFlinkConfAsyncWithOptions($namespace, $deploymentId, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains the details of a deployment.
     *  *
     * @param string               $namespace
     * @param string               $deploymentId
     * @param GetDeploymentHeaders $headers      GetDeploymentHeaders
     * @param RuntimeOptions       $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetDeploymentResponse GetDeploymentResponse
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
     * @summary Obtains the details of a deployment.
     *  *
     * @param string $namespace
     * @param string $deploymentId
     *
     * @return GetDeploymentResponse GetDeploymentResponse
     */
    public function getDeployment($namespace, $deploymentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeploymentHeaders([]);

        return $this->getDeploymentWithOptions($namespace, $deploymentId, $headers, $runtime);
    }

    /**
     * @summary Obtains the asynchronous generation result of fine-grained resources based on the ID of the ticket that applies for an asynchronous generation.
     *  *
     * @param string                               $namespace
     * @param string                               $ticketId
     * @param GetGenerateResourcePlanResultHeaders $headers   GetGenerateResourcePlanResultHeaders
     * @param RuntimeOptions                       $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetGenerateResourcePlanResultResponse GetGenerateResourcePlanResultResponse
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
     * @summary Obtains the asynchronous generation result of fine-grained resources based on the ID of the ticket that applies for an asynchronous generation.
     *  *
     * @param string $namespace
     * @param string $ticketId
     *
     * @return GetGenerateResourcePlanResultResponse GetGenerateResourcePlanResultResponse
     */
    public function getGenerateResourcePlanResult($namespace, $ticketId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetGenerateResourcePlanResultHeaders([]);

        return $this->getGenerateResourcePlanResultWithOptions($namespace, $ticketId, $headers, $runtime);
    }

    /**
     * @summary Obtains the details of a job.
     *  *
     * @param string         $namespace
     * @param string         $jobId
     * @param GetJobHeaders  $headers   GetJobHeaders
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetJobResponse GetJobResponse
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
     * @summary Obtains the details of a job.
     *  *
     * @param string $namespace
     * @param string $jobId
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJob($namespace, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetJobHeaders([]);

        return $this->getJobWithOptions($namespace, $jobId, $headers, $runtime);
    }

    /**
     * @summary Obtains the latest startup logs of a job.
     *  *
     * @param string                      $namespace
     * @param string                      $deploymentId
     * @param GetLatestJobStartLogHeaders $headers      GetLatestJobStartLogHeaders
     * @param RuntimeOptions              $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetLatestJobStartLogResponse GetLatestJobStartLogResponse
     */
    public function getLatestJobStartLogWithOptions($namespace, $deploymentId, $headers, $runtime)
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
            'action'      => 'GetLatestJobStartLog',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployments/' . OpenApiUtilClient::getEncodeParam($deploymentId) . '/latest_jobmanager_start_log',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLatestJobStartLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the latest startup logs of a job.
     *  *
     * @param string $namespace
     * @param string $deploymentId
     *
     * @return GetLatestJobStartLogResponse GetLatestJobStartLogResponse
     */
    public function getLatestJobStartLog($namespace, $deploymentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetLatestJobStartLogHeaders([]);

        return $this->getLatestJobStartLogWithOptions($namespace, $deploymentId, $headers, $runtime);
    }

    /**
     * @summary Queries the permissions of a member.
     *  *
     * @param string           $namespace
     * @param string           $member
     * @param GetMemberHeaders $headers   GetMemberHeaders
     * @param RuntimeOptions   $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetMemberResponse GetMemberResponse
     */
    public function getMemberWithOptions($namespace, $member, $headers, $runtime)
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
            'action'      => 'GetMember',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gateway/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/members/' . OpenApiUtilClient::getEncodeParam($member) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the permissions of a member.
     *  *
     * @param string $namespace
     * @param string $member
     *
     * @return GetMemberResponse GetMemberResponse
     */
    public function getMember($namespace, $member)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMemberHeaders([]);

        return $this->getMemberWithOptions($namespace, $member, $headers, $runtime);
    }

    /**
     * @summary Queries details of a savepoint and checkpoint.
     *  *
     * @param string              $namespace
     * @param string              $savepointId
     * @param GetSavepointHeaders $headers     GetSavepointHeaders
     * @param RuntimeOptions      $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetSavepointResponse GetSavepointResponse
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
     * @summary Queries details of a savepoint and checkpoint.
     *  *
     * @param string $namespace
     * @param string $savepointId
     *
     * @return GetSavepointResponse GetSavepointResponse
     */
    public function getSavepoint($namespace, $savepointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSavepointHeaders([]);

        return $this->getSavepointWithOptions($namespace, $savepointId, $headers, $runtime);
    }

    /**
     * @summary Obtains a list of clusters in which deployments can be deployed. The cluster can be a session cluster or a per-job cluster.
     *  *
     * @param string                       $namespace
     * @param ListDeploymentTargetsRequest $request   ListDeploymentTargetsRequest
     * @param ListDeploymentTargetsHeaders $headers   ListDeploymentTargetsHeaders
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListDeploymentTargetsResponse ListDeploymentTargetsResponse
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
     * @summary Obtains a list of clusters in which deployments can be deployed. The cluster can be a session cluster or a per-job cluster.
     *  *
     * @param string                       $namespace
     * @param ListDeploymentTargetsRequest $request   ListDeploymentTargetsRequest
     *
     * @return ListDeploymentTargetsResponse ListDeploymentTargetsResponse
     */
    public function listDeploymentTargets($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDeploymentTargetsHeaders([]);

        return $this->listDeploymentTargetsWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains information about all deployments.
     *  *
     * @param string                 $namespace
     * @param ListDeploymentsRequest $request   ListDeploymentsRequest
     * @param ListDeploymentsHeaders $headers   ListDeploymentsHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListDeploymentsResponse ListDeploymentsResponse
     */
    public function listDeploymentsWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->creator)) {
            $query['creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->executionMode)) {
            $query['executionMode'] = $request->executionMode;
        }
        if (!Utils::isUnset($request->labelKey)) {
            $query['labelKey'] = $request->labelKey;
        }
        if (!Utils::isUnset($request->labelValueArray)) {
            $query['labelValueArray'] = $request->labelValueArray;
        }
        if (!Utils::isUnset($request->modifier)) {
            $query['modifier'] = $request->modifier;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['pageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
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
     * @summary Obtains information about all deployments.
     *  *
     * @param string                 $namespace
     * @param ListDeploymentsRequest $request   ListDeploymentsRequest
     *
     * @return ListDeploymentsResponse ListDeploymentsResponse
     */
    public function listDeployments($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDeploymentsHeaders([]);

        return $this->listDeploymentsWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary 列出有编辑权限的项目空间。
     *  *
     * @param ListEditableNamespaceRequest $request ListEditableNamespaceRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEditableNamespaceResponse ListEditableNamespaceResponse
     */
    public function listEditableNamespaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['pageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEditableNamespace',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gateway/v2/namespaces/editable',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEditableNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出有编辑权限的项目空间。
     *  *
     * @param ListEditableNamespaceRequest $request ListEditableNamespaceRequest
     *
     * @return ListEditableNamespaceResponse ListEditableNamespaceResponse
     */
    public function listEditableNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEditableNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Obtains a list of engine versions that are supported by Realtime Compute for Apache Flink.
     *  *
     * @param ListEngineVersionMetadataHeaders $headers ListEngineVersionMetadataHeaders
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEngineVersionMetadataResponse ListEngineVersionMetadataResponse
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
     * @summary Obtains a list of engine versions that are supported by Realtime Compute for Apache Flink.
     *  *
     * @return ListEngineVersionMetadataResponse ListEngineVersionMetadataResponse
     */
    public function listEngineVersionMetadata()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListEngineVersionMetadataHeaders([]);

        return $this->listEngineVersionMetadataWithOptions($headers, $runtime);
    }

    /**
     * @summary Queries the information about all jobs in a deployment.
     *  *
     * @param string          $namespace
     * @param ListJobsRequest $request   ListJobsRequest
     * @param ListJobsHeaders $headers   ListJobsHeaders
     * @param RuntimeOptions  $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListJobsResponse ListJobsResponse
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
        if (!Utils::isUnset($request->sortName)) {
            $query['sortName'] = $request->sortName;
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
     * @summary Queries the information about all jobs in a deployment.
     *  *
     * @param string          $namespace
     * @param ListJobsRequest $request   ListJobsRequest
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobs($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListJobsHeaders([]);

        return $this->listJobsWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the mappings between the ID and permissions of a member in a specific namespace.
     *  *
     * @param string             $namespace
     * @param ListMembersRequest $request   ListMembersRequest
     * @param ListMembersHeaders $headers   ListMembersHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListMembersResponse ListMembersResponse
     */
    public function listMembersWithOptions($namespace, $request, $headers, $runtime)
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
            'action'      => 'ListMembers',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gateway/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/members',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the mappings between the ID and permissions of a member in a specific namespace.
     *  *
     * @param string             $namespace
     * @param ListMembersRequest $request   ListMembersRequest
     *
     * @return ListMembersResponse ListMembersResponse
     */
    public function listMembers($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListMembersHeaders([]);

        return $this->listMembersWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains a list of savepoints or checkpoints.
     *  *
     * @param string                $namespace
     * @param ListSavepointsRequest $request   ListSavepointsRequest
     * @param ListSavepointsHeaders $headers   ListSavepointsHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListSavepointsResponse ListSavepointsResponse
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
     * @summary Obtains a list of savepoints or checkpoints.
     *  *
     * @param string                $namespace
     * @param ListSavepointsRequest $request   ListSavepointsRequest
     *
     * @return ListSavepointsResponse ListSavepointsResponse
     */
    public function listSavepoints($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListSavepointsHeaders([]);

        return $this->listSavepointsWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains a list of variables.
     *  *
     * @param string               $namespace
     * @param ListVariablesRequest $request   ListVariablesRequest
     * @param ListVariablesHeaders $headers   ListVariablesHeaders
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListVariablesResponse ListVariablesResponse
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
     * @summary Obtains a list of variables.
     *  *
     * @param string               $namespace
     * @param ListVariablesRequest $request   ListVariablesRequest
     *
     * @return ListVariablesResponse ListVariablesResponse
     */
    public function listVariables($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListVariablesHeaders([]);

        return $this->listVariablesWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI StartJob is deprecated
     *  *
     * @summary start job
     *  *
     * Deprecated
     *
     * @param string          $namespace
     * @param StartJobRequest $request   StartJobRequest
     * @param StartJobHeaders $headers   StartJobHeaders
     * @param RuntimeOptions  $runtime   runtime options for this request RuntimeOptions
     *
     * @return StartJobResponse StartJobResponse
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
     * @deprecated OpenAPI StartJob is deprecated
     *  *
     * @summary start job
     *  *
     * Deprecated
     *
     * @param string          $namespace
     * @param StartJobRequest $request   StartJobRequest
     *
     * @return StartJobResponse StartJobResponse
     */
    public function startJob($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartJobHeaders([]);

        return $this->startJobWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Starts a job.
     *  *
     * @param string                    $namespace
     * @param StartJobWithParamsRequest $request   StartJobWithParamsRequest
     * @param StartJobWithParamsHeaders $headers   StartJobWithParamsHeaders
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return StartJobWithParamsResponse StartJobWithParamsResponse
     */
    public function startJobWithParamsWithOptions($namespace, $request, $headers, $runtime)
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
            'action'      => 'StartJobWithParams',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/jobs%3Astart',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartJobWithParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts a job.
     *  *
     * @param string                    $namespace
     * @param StartJobWithParamsRequest $request   StartJobWithParamsRequest
     *
     * @return StartJobWithParamsResponse StartJobWithParamsResponse
     */
    public function startJobWithParams($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartJobWithParamsHeaders([]);

        return $this->startJobWithParamsWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Stops a job.
     *  *
     * @param string         $namespace
     * @param string         $jobId
     * @param StopJobRequest $request   StopJobRequest
     * @param StopJobHeaders $headers   StopJobHeaders
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return StopJobResponse StopJobResponse
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
     * @summary Stops a job.
     *  *
     * @param string         $namespace
     * @param string         $jobId
     * @param StopJobRequest $request   StopJobRequest
     *
     * @return StopJobResponse StopJobResponse
     */
    public function stopJob($namespace, $jobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StopJobHeaders([]);

        return $this->stopJobWithOptions($namespace, $jobId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates information about a deployment.
     *  *
     * @param string                  $namespace
     * @param string                  $deploymentId
     * @param UpdateDeploymentRequest $request      UpdateDeploymentRequest
     * @param UpdateDeploymentHeaders $headers      UpdateDeploymentHeaders
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateDeploymentResponse UpdateDeploymentResponse
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

    /**
     * @summary Updates information about a deployment.
     *  *
     * @param string                  $namespace
     * @param string                  $deploymentId
     * @param UpdateDeploymentRequest $request      UpdateDeploymentRequest
     *
     * @return UpdateDeploymentResponse UpdateDeploymentResponse
     */
    public function updateDeployment($namespace, $deploymentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateDeploymentHeaders([]);

        return $this->updateDeploymentWithOptions($namespace, $deploymentId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the permissions of one or more members in a specific namespace.
     *  *
     * @param string              $namespace
     * @param UpdateMemberRequest $request   UpdateMemberRequest
     * @param UpdateMemberHeaders $headers   UpdateMemberHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateMemberResponse UpdateMemberResponse
     */
    public function updateMemberWithOptions($namespace, $request, $headers, $runtime)
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
            'action'      => 'UpdateMember',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/gateway/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/members',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the permissions of one or more members in a specific namespace.
     *  *
     * @param string              $namespace
     * @param UpdateMemberRequest $request   UpdateMemberRequest
     *
     * @return UpdateMemberResponse UpdateMemberResponse
     */
    public function updateMember($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateMemberHeaders([]);

        return $this->updateMemberWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Verifies the code of an SQL deployment.
     *  *
     * @param string                      $namespace
     * @param ValidateSqlStatementRequest $request   ValidateSqlStatementRequest
     * @param ValidateSqlStatementHeaders $headers   ValidateSqlStatementHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return ValidateSqlStatementResponse ValidateSqlStatementResponse
     */
    public function validateSqlStatementWithOptions($namespace, $request, $headers, $runtime)
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
            'action'      => 'ValidateSqlStatement',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/sql-statement/validate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies the code of an SQL deployment.
     *  *
     * @param string                      $namespace
     * @param ValidateSqlStatementRequest $request   ValidateSqlStatementRequest
     *
     * @return ValidateSqlStatementResponse ValidateSqlStatementResponse
     */
    public function validateSqlStatement($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ValidateSqlStatementHeaders([]);

        return $this->validateSqlStatementWithOptions($namespace, $request, $headers, $runtime);
    }
}
