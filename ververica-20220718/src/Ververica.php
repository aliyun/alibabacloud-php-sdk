<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentDraftHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentDraftRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentDraftResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateDeploymentResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateFolderHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateFolderRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateFolderResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateMemberHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateMemberRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateMemberResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateSavepointHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateSavepointRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\CreateSavepointResponse;
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
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteFolderHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteFolderResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteMemberHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteMemberResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteSavepointHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\DeleteSavepointResponse;
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
use AlibabaCloud\SDK\Ververica\V20220718\Models\FlinkApiProxyHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\FlinkApiProxyRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\FlinkApiProxyResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GenerateResourcePlanWithFlinkConfAsyncHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GenerateResourcePlanWithFlinkConfAsyncRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GenerateResourcePlanWithFlinkConfAsyncResponse;
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
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetFolderHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetFolderRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetFolderResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetGenerateResourcePlanResultHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetGenerateResourcePlanResultResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetHotUpdateJobResultHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\GetHotUpdateJobResultResponse;
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
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopJobHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopJobRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\StopJobResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentDraftHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentDraftRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentDraftResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateDeploymentResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateFolderHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateFolderRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateFolderResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateMemberHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateMemberRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateMemberResponse;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateUdfArtifactHeaders;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateUdfArtifactRequest;
use AlibabaCloud\SDK\Ververica\V20220718\Models\UpdateUdfArtifactResponse;
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
     * @summary create a deploymentDraft
     *  *
     * @param string                       $namespace
     * @param CreateDeploymentDraftRequest $request   CreateDeploymentDraftRequest
     * @param CreateDeploymentDraftHeaders $headers   CreateDeploymentDraftHeaders
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateDeploymentDraftResponse CreateDeploymentDraftResponse
     */
    public function createDeploymentDraftWithOptions($namespace, $request, $headers, $runtime)
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
            'action'      => 'CreateDeploymentDraft',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployment-drafts',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDeploymentDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary create a deploymentDraft
     *  *
     * @param string                       $namespace
     * @param CreateDeploymentDraftRequest $request   CreateDeploymentDraftRequest
     *
     * @return CreateDeploymentDraftResponse CreateDeploymentDraftResponse
     */
    public function createDeploymentDraft($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDeploymentDraftHeaders([]);

        return $this->createDeploymentDraftWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary create a folder
     *  *
     * @param string              $namespace
     * @param CreateFolderRequest $request   CreateFolderRequest
     * @param CreateFolderHeaders $headers   CreateFolderHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateFolderResponse CreateFolderResponse
     */
    public function createFolderWithOptions($namespace, $request, $headers, $runtime)
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
            'action'      => 'CreateFolder',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/folder',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary create a folder
     *  *
     * @param string              $namespace
     * @param CreateFolderRequest $request   CreateFolderRequest
     *
     * @return CreateFolderResponse CreateFolderResponse
     */
    public function createFolder($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateFolderHeaders([]);

        return $this->createFolderWithOptions($namespace, $request, $headers, $runtime);
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
     * @summary Parses all user-defined function (UDF) methods in your JAR or Python file and creates an artifact configuration for a UDF.
     *  *
     * @param string                   $namespace
     * @param CreateUdfArtifactRequest $request   CreateUdfArtifactRequest
     * @param CreateUdfArtifactHeaders $headers   CreateUdfArtifactHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateUdfArtifactResponse CreateUdfArtifactResponse
     */
    public function createUdfArtifactWithOptions($namespace, $request, $headers, $runtime)
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
            'action'      => 'CreateUdfArtifact',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/udfartifacts',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUdfArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Parses all user-defined function (UDF) methods in your JAR or Python file and creates an artifact configuration for a UDF.
     *  *
     * @param string                   $namespace
     * @param CreateUdfArtifactRequest $request   CreateUdfArtifactRequest
     *
     * @return CreateUdfArtifactResponse CreateUdfArtifactResponse
     */
    public function createUdfArtifact($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateUdfArtifactHeaders([]);

        return $this->createUdfArtifactWithOptions($namespace, $request, $headers, $runtime);
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
     * @summary Deletes a registered custom connector from a workspace.
     *  *
     * @param string                       $namespace
     * @param string                       $connectorName
     * @param DeleteCustomConnectorHeaders $headers       DeleteCustomConnectorHeaders
     * @param RuntimeOptions               $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomConnectorResponse DeleteCustomConnectorResponse
     */
    public function deleteCustomConnectorWithOptions($namespace, $connectorName, $headers, $runtime)
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
            'action'      => 'DeleteCustomConnector',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/connectors/' . OpenApiUtilClient::getEncodeParam($connectorName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a registered custom connector from a workspace.
     *  *
     * @param string $namespace
     * @param string $connectorName
     *
     * @return DeleteCustomConnectorResponse DeleteCustomConnectorResponse
     */
    public function deleteCustomConnector($namespace, $connectorName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteCustomConnectorHeaders([]);

        return $this->deleteCustomConnectorWithOptions($namespace, $connectorName, $headers, $runtime);
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
     * @summary delete a deploymentDraft
     *  *
     * @param string                       $namespace
     * @param string                       $deploymentDraftId
     * @param DeleteDeploymentDraftHeaders $headers           DeleteDeploymentDraftHeaders
     * @param RuntimeOptions               $runtime           runtime options for this request RuntimeOptions
     *
     * @return DeleteDeploymentDraftResponse DeleteDeploymentDraftResponse
     */
    public function deleteDeploymentDraftWithOptions($namespace, $deploymentDraftId, $headers, $runtime)
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
            'action'      => 'DeleteDeploymentDraft',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployment-drafts/' . OpenApiUtilClient::getEncodeParam($deploymentDraftId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDeploymentDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary delete a deploymentDraft
     *  *
     * @param string $namespace
     * @param string $deploymentDraftId
     *
     * @return DeleteDeploymentDraftResponse DeleteDeploymentDraftResponse
     */
    public function deleteDeploymentDraft($namespace, $deploymentDraftId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteDeploymentDraftHeaders([]);

        return $this->deleteDeploymentDraftWithOptions($namespace, $deploymentDraftId, $headers, $runtime);
    }

    /**
     * @summary delete a folder
     *  *
     * @param string              $namespace
     * @param string              $folderId
     * @param DeleteFolderHeaders $headers   DeleteFolderHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteFolderResponse DeleteFolderResponse
     */
    public function deleteFolderWithOptions($namespace, $folderId, $headers, $runtime)
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
            'action'      => 'DeleteFolder',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/folder/' . OpenApiUtilClient::getEncodeParam($folderId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary delete a folder
     *  *
     * @param string $namespace
     * @param string $folderId
     *
     * @return DeleteFolderResponse DeleteFolderResponse
     */
    public function deleteFolder($namespace, $folderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteFolderHeaders([]);

        return $this->deleteFolderWithOptions($namespace, $folderId, $headers, $runtime);
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
     * @summary 删除UdfArtifact
     *  *
     * @param string                   $namespace
     * @param string                   $udfArtifactName
     * @param DeleteUdfArtifactHeaders $headers         DeleteUdfArtifactHeaders
     * @param RuntimeOptions           $runtime         runtime options for this request RuntimeOptions
     *
     * @return DeleteUdfArtifactResponse DeleteUdfArtifactResponse
     */
    public function deleteUdfArtifactWithOptions($namespace, $udfArtifactName, $headers, $runtime)
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
            'action'      => 'DeleteUdfArtifact',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/udfartifacts/' . OpenApiUtilClient::getEncodeParam($udfArtifactName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteUdfArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除UdfArtifact
     *  *
     * @param string $namespace
     * @param string $udfArtifactName
     *
     * @return DeleteUdfArtifactResponse DeleteUdfArtifactResponse
     */
    public function deleteUdfArtifact($namespace, $udfArtifactName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteUdfArtifactHeaders([]);

        return $this->deleteUdfArtifactWithOptions($namespace, $udfArtifactName, $headers, $runtime);
    }

    /**
     * @summary Deletes an existing user-defined function (UDF) from a Realtime Compute for Apache Flink workspace.
     *  *
     * @param string                   $namespace
     * @param string                   $functionName
     * @param DeleteUdfFunctionRequest $request      DeleteUdfFunctionRequest
     * @param DeleteUdfFunctionHeaders $headers      DeleteUdfFunctionHeaders
     * @param RuntimeOptions           $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteUdfFunctionResponse DeleteUdfFunctionResponse
     */
    public function deleteUdfFunctionWithOptions($namespace, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->className)) {
            $query['className'] = $request->className;
        }
        if (!Utils::isUnset($request->udfArtifactName)) {
            $query['udfArtifactName'] = $request->udfArtifactName;
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
            'action'      => 'DeleteUdfFunction',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/udfartifacts/function/' . OpenApiUtilClient::getEncodeParam($functionName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteUdfFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an existing user-defined function (UDF) from a Realtime Compute for Apache Flink workspace.
     *  *
     * @param string                   $namespace
     * @param string                   $functionName
     * @param DeleteUdfFunctionRequest $request      DeleteUdfFunctionRequest
     *
     * @return DeleteUdfFunctionResponse DeleteUdfFunctionResponse
     */
    public function deleteUdfFunction($namespace, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteUdfFunctionHeaders([]);

        return $this->deleteUdfFunctionWithOptions($namespace, $functionName, $request, $headers, $runtime);
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
     * @summary deploy deploymentDraft async
     *  *
     * @param string                            $namespace
     * @param DeployDeploymentDraftAsyncRequest $request   DeployDeploymentDraftAsyncRequest
     * @param DeployDeploymentDraftAsyncHeaders $headers   DeployDeploymentDraftAsyncHeaders
     * @param RuntimeOptions                    $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeployDeploymentDraftAsyncResponse DeployDeploymentDraftAsyncResponse
     */
    public function deployDeploymentDraftAsyncWithOptions($namespace, $request, $headers, $runtime)
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
            'action'      => 'DeployDeploymentDraftAsync',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployment-drafts/async-deploy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeployDeploymentDraftAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary deploy deploymentDraft async
     *  *
     * @param string                            $namespace
     * @param DeployDeploymentDraftAsyncRequest $request   DeployDeploymentDraftAsyncRequest
     *
     * @return DeployDeploymentDraftAsyncResponse DeployDeploymentDraftAsyncResponse
     */
    public function deployDeploymentDraftAsync($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeployDeploymentDraftAsyncHeaders([]);

        return $this->deployDeploymentDraftAsyncWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary 执行sql语句
     *  *
     * @param string                     $namespace
     * @param ExecuteSqlStatementRequest $request   ExecuteSqlStatementRequest
     * @param ExecuteSqlStatementHeaders $headers   ExecuteSqlStatementHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return ExecuteSqlStatementResponse ExecuteSqlStatementResponse
     */
    public function executeSqlStatementWithOptions($namespace, $request, $headers, $runtime)
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
            'action'      => 'ExecuteSqlStatement',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/sql-statement/execute',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 执行sql语句
     *  *
     * @param string                     $namespace
     * @param ExecuteSqlStatementRequest $request   ExecuteSqlStatementRequest
     *
     * @return ExecuteSqlStatementResponse ExecuteSqlStatementResponse
     */
    public function executeSqlStatement($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExecuteSqlStatementHeaders([]);

        return $this->executeSqlStatementWithOptions($namespace, $request, $headers, $runtime);
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
     * @summary 获取catalog
     *  *
     * @param string             $namespace
     * @param GetCatalogsRequest $request   GetCatalogsRequest
     * @param GetCatalogsHeaders $headers   GetCatalogsHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetCatalogsResponse GetCatalogsResponse
     */
    public function getCatalogsWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->catalogName)) {
            $query['catalogName'] = $request->catalogName;
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
            'action'      => 'GetCatalogs',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/catalogs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCatalogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取catalog
     *  *
     * @param string             $namespace
     * @param GetCatalogsRequest $request   GetCatalogsRequest
     *
     * @return GetCatalogsResponse GetCatalogsResponse
     */
    public function getCatalogs($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetCatalogsHeaders([]);

        return $this->getCatalogsWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary 获取database
     *  *
     * @param string              $namespace
     * @param string              $catalogName
     * @param GetDatabasesRequest $request     GetDatabasesRequest
     * @param GetDatabasesHeaders $headers     GetDatabasesHeaders
     * @param RuntimeOptions      $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetDatabasesResponse GetDatabasesResponse
     */
    public function getDatabasesWithOptions($namespace, $catalogName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseName)) {
            $query['databaseName'] = $request->databaseName;
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
            'action'      => 'GetDatabases',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/catalogs/' . OpenApiUtilClient::getEncodeParam($catalogName) . '/databases',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取database
     *  *
     * @param string              $namespace
     * @param string              $catalogName
     * @param GetDatabasesRequest $request     GetDatabasesRequest
     *
     * @return GetDatabasesResponse GetDatabasesResponse
     */
    public function getDatabases($namespace, $catalogName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDatabasesHeaders([]);

        return $this->getDatabasesWithOptions($namespace, $catalogName, $request, $headers, $runtime);
    }

    /**
     * @summary get deploy deploymentDraft result
     *  *
     * @param string                                $namespace
     * @param string                                $ticketId
     * @param GetDeployDeploymentDraftResultHeaders $headers   GetDeployDeploymentDraftResultHeaders
     * @param RuntimeOptions                        $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetDeployDeploymentDraftResultResponse GetDeployDeploymentDraftResultResponse
     */
    public function getDeployDeploymentDraftResultWithOptions($namespace, $ticketId, $headers, $runtime)
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
            'action'      => 'GetDeployDeploymentDraftResult',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployment-drafts/tickets/' . OpenApiUtilClient::getEncodeParam($ticketId) . '/async-deploy',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeployDeploymentDraftResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary get deploy deploymentDraft result
     *  *
     * @param string $namespace
     * @param string $ticketId
     *
     * @return GetDeployDeploymentDraftResultResponse GetDeployDeploymentDraftResultResponse
     */
    public function getDeployDeploymentDraftResult($namespace, $ticketId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeployDeploymentDraftResultHeaders([]);

        return $this->getDeployDeploymentDraftResultWithOptions($namespace, $ticketId, $headers, $runtime);
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
     * @summary get a deploymentDraft
     *  *
     * @param string                    $namespace
     * @param string                    $deploymentDraftId
     * @param GetDeploymentDraftHeaders $headers           GetDeploymentDraftHeaders
     * @param RuntimeOptions            $runtime           runtime options for this request RuntimeOptions
     *
     * @return GetDeploymentDraftResponse GetDeploymentDraftResponse
     */
    public function getDeploymentDraftWithOptions($namespace, $deploymentDraftId, $headers, $runtime)
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
            'action'      => 'GetDeploymentDraft',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployment-drafts/' . OpenApiUtilClient::getEncodeParam($deploymentDraftId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeploymentDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary get a deploymentDraft
     *  *
     * @param string $namespace
     * @param string $deploymentDraftId
     *
     * @return GetDeploymentDraftResponse GetDeploymentDraftResponse
     */
    public function getDeploymentDraft($namespace, $deploymentDraftId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeploymentDraftHeaders([]);

        return $this->getDeploymentDraftWithOptions($namespace, $deploymentDraftId, $headers, $runtime);
    }

    /**
     * @summary get deploymentDraft lock
     *  *
     * @param string                        $namespace
     * @param GetDeploymentDraftLockRequest $request   GetDeploymentDraftLockRequest
     * @param GetDeploymentDraftLockHeaders $headers   GetDeploymentDraftLockHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetDeploymentDraftLockResponse GetDeploymentDraftLockResponse
     */
    public function getDeploymentDraftLockWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deploymentDraftId)) {
            $query['deploymentDraftId'] = $request->deploymentDraftId;
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
            'action'      => 'GetDeploymentDraftLock',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployment-drafts/getLock',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeploymentDraftLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary get deploymentDraft lock
     *  *
     * @param string                        $namespace
     * @param GetDeploymentDraftLockRequest $request   GetDeploymentDraftLockRequest
     *
     * @return GetDeploymentDraftLockResponse GetDeploymentDraftLockResponse
     */
    public function getDeploymentDraftLock($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeploymentDraftLockHeaders([]);

        return $this->getDeploymentDraftLockWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary get a folder
     *  *
     * @param string           $namespace
     * @param GetFolderRequest $request   GetFolderRequest
     * @param GetFolderHeaders $headers   GetFolderHeaders
     * @param RuntimeOptions   $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetFolderResponse GetFolderResponse
     */
    public function getFolderWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->folderId)) {
            $query['folderId'] = $request->folderId;
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
            'action'      => 'GetFolder',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/folder',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary get a folder
     *  *
     * @param string           $namespace
     * @param GetFolderRequest $request   GetFolderRequest
     *
     * @return GetFolderResponse GetFolderResponse
     */
    public function getFolder($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFolderHeaders([]);

        return $this->getFolderWithOptions($namespace, $request, $headers, $runtime);
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
     * @summary 查询动态更新结果
     *  *
     * @param string                       $namespace
     * @param string                       $jobHotUpdateId
     * @param GetHotUpdateJobResultHeaders $headers        GetHotUpdateJobResultHeaders
     * @param RuntimeOptions               $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetHotUpdateJobResultResponse GetHotUpdateJobResultResponse
     */
    public function getHotUpdateJobResultWithOptions($namespace, $jobHotUpdateId, $headers, $runtime)
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
            'action'      => 'GetHotUpdateJobResult',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/jobs/hot-updates/' . OpenApiUtilClient::getEncodeParam($jobHotUpdateId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotUpdateJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询动态更新结果
     *  *
     * @param string $namespace
     * @param string $jobHotUpdateId
     *
     * @return GetHotUpdateJobResultResponse GetHotUpdateJobResultResponse
     */
    public function getHotUpdateJobResult($namespace, $jobHotUpdateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotUpdateJobResultHeaders([]);

        return $this->getHotUpdateJobResultWithOptions($namespace, $jobHotUpdateId, $headers, $runtime);
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
     * @summary Obtains the lineage information of a deployment.
     *  *
     * @param GetLineageInfoRequest $request GetLineageInfoRequest
     * @param GetLineageInfoHeaders $headers GetLineageInfoHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLineageInfoResponse GetLineageInfoResponse
     */
    public function getLineageInfoWithOptions($request, $headers, $runtime)
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
            'action'      => 'GetLineageInfo',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/meta/v2/lineage',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLineageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the lineage information of a deployment.
     *  *
     * @param GetLineageInfoRequest $request GetLineageInfoRequest
     *
     * @return GetLineageInfoResponse GetLineageInfoResponse
     */
    public function getLineageInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetLineageInfoHeaders([]);

        return $this->getLineageInfoWithOptions($request, $headers, $runtime);
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
     * @summary 获取table
     *  *
     * @param string           $namespace
     * @param string           $catalogName
     * @param string           $databaseName
     * @param GetTablesRequest $request      GetTablesRequest
     * @param GetTablesHeaders $headers      GetTablesHeaders
     * @param RuntimeOptions   $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetTablesResponse GetTablesResponse
     */
    public function getTablesWithOptions($namespace, $catalogName, $databaseName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tableName)) {
            $query['tableName'] = $request->tableName;
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
            'action'      => 'GetTables',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/catalogs/' . OpenApiUtilClient::getEncodeParam($catalogName) . '/databases/' . OpenApiUtilClient::getEncodeParam($databaseName) . '/tables',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取table
     *  *
     * @param string           $namespace
     * @param string           $catalogName
     * @param string           $databaseName
     * @param GetTablesRequest $request      GetTablesRequest
     *
     * @return GetTablesResponse GetTablesResponse
     */
    public function getTables($namespace, $catalogName, $databaseName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetTablesHeaders([]);

        return $this->getTablesWithOptions($namespace, $catalogName, $databaseName, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains the details of the JAR or Python file that corresponds to the user-defined function (UDF) that you upload and create.
     *  *
     * @param string                 $namespace
     * @param GetUdfArtifactsRequest $request   GetUdfArtifactsRequest
     * @param GetUdfArtifactsHeaders $headers   GetUdfArtifactsHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetUdfArtifactsResponse GetUdfArtifactsResponse
     */
    public function getUdfArtifactsWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->udfArtifactName)) {
            $query['udfArtifactName'] = $request->udfArtifactName;
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
            'action'      => 'GetUdfArtifacts',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/udfartifacts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUdfArtifactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the details of the JAR or Python file that corresponds to the user-defined function (UDF) that you upload and create.
     *  *
     * @param string                 $namespace
     * @param GetUdfArtifactsRequest $request   GetUdfArtifactsRequest
     *
     * @return GetUdfArtifactsResponse GetUdfArtifactsResponse
     */
    public function getUdfArtifacts($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUdfArtifactsHeaders([]);

        return $this->getUdfArtifactsWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Dynamically updates parameters or resources of a deployment that is running.
     *  *
     * @param string              $namespace
     * @param string              $jobId
     * @param HotUpdateJobHeaders $headers   HotUpdateJobHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return HotUpdateJobResponse HotUpdateJobResponse
     */
    public function hotUpdateJobWithOptions($namespace, $jobId, $headers, $runtime)
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
            'action'      => 'HotUpdateJob',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '%3AhotUpdate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return HotUpdateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Dynamically updates parameters or resources of a deployment that is running.
     *  *
     * @param string $namespace
     * @param string $jobId
     *
     * @return HotUpdateJobResponse HotUpdateJobResponse
     */
    public function hotUpdateJob($namespace, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HotUpdateJobHeaders([]);

        return $this->hotUpdateJobWithOptions($namespace, $jobId, $headers, $runtime);
    }

    /**
     * @summary Obtains a list of existing custom connectors.
     *  *
     * @param string                      $namespace
     * @param ListCustomConnectorsHeaders $headers   ListCustomConnectorsHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListCustomConnectorsResponse ListCustomConnectorsResponse
     */
    public function listCustomConnectorsWithOptions($namespace, $headers, $runtime)
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
            'action'      => 'ListCustomConnectors',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/connectors',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCustomConnectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains a list of existing custom connectors.
     *  *
     * @param string $namespace
     *
     * @return ListCustomConnectorsResponse ListCustomConnectorsResponse
     */
    public function listCustomConnectors($namespace)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListCustomConnectorsHeaders([]);

        return $this->listCustomConnectorsWithOptions($namespace, $headers, $runtime);
    }

    /**
     * @summary list deploymentDrafts
     *  *
     * @param string                      $namespace
     * @param ListDeploymentDraftsRequest $request   ListDeploymentDraftsRequest
     * @param ListDeploymentDraftsHeaders $headers   ListDeploymentDraftsHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListDeploymentDraftsResponse ListDeploymentDraftsResponse
     */
    public function listDeploymentDraftsWithOptions($namespace, $request, $headers, $runtime)
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
            'action'      => 'ListDeploymentDrafts',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployment-drafts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeploymentDraftsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary list deploymentDrafts
     *  *
     * @param string                      $namespace
     * @param ListDeploymentDraftsRequest $request   ListDeploymentDraftsRequest
     *
     * @return ListDeploymentDraftsResponse ListDeploymentDraftsResponse
     */
    public function listDeploymentDrafts($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDeploymentDraftsHeaders([]);

        return $this->listDeploymentDraftsWithOptions($namespace, $request, $headers, $runtime);
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
     * @summary Registers a custom connector in a namespace. The registered custom connector can be used in SQL statements.
     *  *
     * @param string                         $namespace
     * @param RegisterCustomConnectorRequest $request   RegisterCustomConnectorRequest
     * @param RegisterCustomConnectorHeaders $headers   RegisterCustomConnectorHeaders
     * @param RuntimeOptions                 $runtime   runtime options for this request RuntimeOptions
     *
     * @return RegisterCustomConnectorResponse RegisterCustomConnectorResponse
     */
    public function registerCustomConnectorWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jarUrl)) {
            $query['jarUrl'] = $request->jarUrl;
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
            'action'      => 'RegisterCustomConnector',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/connectors%3Aregister',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RegisterCustomConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Registers a custom connector in a namespace. The registered custom connector can be used in SQL statements.
     *  *
     * @param string                         $namespace
     * @param RegisterCustomConnectorRequest $request   RegisterCustomConnectorRequest
     *
     * @return RegisterCustomConnectorResponse RegisterCustomConnectorResponse
     */
    public function registerCustomConnector($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RegisterCustomConnectorHeaders([]);

        return $this->registerCustomConnectorWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @summary Registers specific or all of the user-defined functions (UDFs) that are parsed from the JAR files. The registered functions can be used in SQL statements.
     *  *
     * @param string                     $namespace
     * @param RegisterUdfFunctionRequest $request   RegisterUdfFunctionRequest
     * @param RegisterUdfFunctionHeaders $headers   RegisterUdfFunctionHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return RegisterUdfFunctionResponse RegisterUdfFunctionResponse
     */
    public function registerUdfFunctionWithOptions($namespace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->className)) {
            $query['className'] = $request->className;
        }
        if (!Utils::isUnset($request->functionName)) {
            $query['functionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->udfArtifactName)) {
            $query['udfArtifactName'] = $request->udfArtifactName;
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
            'action'      => 'RegisterUdfFunction',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/udfartifacts/function%3AregisterUdfFunction',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RegisterUdfFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Registers specific or all of the user-defined functions (UDFs) that are parsed from the JAR files. The registered functions can be used in SQL statements.
     *  *
     * @param string                     $namespace
     * @param RegisterUdfFunctionRequest $request   RegisterUdfFunctionRequest
     *
     * @return RegisterUdfFunctionResponse RegisterUdfFunctionResponse
     */
    public function registerUdfFunction($namespace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RegisterUdfFunctionHeaders([]);

        return $this->registerUdfFunctionWithOptions($namespace, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI StartJob is deprecated
     *  *
     * @summary Creates and starts a job.
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
     * @summary Creates and starts a job.
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
     * @summary update a deploymentDraft
     *  *
     * @param string                       $namespace
     * @param string                       $deploymentDraftId
     * @param UpdateDeploymentDraftRequest $request           UpdateDeploymentDraftRequest
     * @param UpdateDeploymentDraftHeaders $headers           UpdateDeploymentDraftHeaders
     * @param RuntimeOptions               $runtime           runtime options for this request RuntimeOptions
     *
     * @return UpdateDeploymentDraftResponse UpdateDeploymentDraftResponse
     */
    public function updateDeploymentDraftWithOptions($namespace, $deploymentDraftId, $request, $headers, $runtime)
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
            'action'      => 'UpdateDeploymentDraft',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/deployment-drafts/' . OpenApiUtilClient::getEncodeParam($deploymentDraftId) . '',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDeploymentDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary update a deploymentDraft
     *  *
     * @param string                       $namespace
     * @param string                       $deploymentDraftId
     * @param UpdateDeploymentDraftRequest $request           UpdateDeploymentDraftRequest
     *
     * @return UpdateDeploymentDraftResponse UpdateDeploymentDraftResponse
     */
    public function updateDeploymentDraft($namespace, $deploymentDraftId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateDeploymentDraftHeaders([]);

        return $this->updateDeploymentDraftWithOptions($namespace, $deploymentDraftId, $request, $headers, $runtime);
    }

    /**
     * @summary update a folder
     *  *
     * @param string              $namespace
     * @param string              $folderId
     * @param UpdateFolderRequest $request   UpdateFolderRequest
     * @param UpdateFolderHeaders $headers   UpdateFolderHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateFolderResponse UpdateFolderResponse
     */
    public function updateFolderWithOptions($namespace, $folderId, $request, $headers, $runtime)
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
            'action'      => 'UpdateFolder',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/folder/' . OpenApiUtilClient::getEncodeParam($folderId) . '',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary update a folder
     *  *
     * @param string              $namespace
     * @param string              $folderId
     * @param UpdateFolderRequest $request   UpdateFolderRequest
     *
     * @return UpdateFolderResponse UpdateFolderResponse
     */
    public function updateFolder($namespace, $folderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateFolderHeaders([]);

        return $this->updateFolderWithOptions($namespace, $folderId, $request, $headers, $runtime);
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
     * @summary Updates the JAR file of the user-defined function (UDF) that you create.
     *  *
     * @param string                   $namespace
     * @param string                   $udfArtifactName
     * @param UpdateUdfArtifactRequest $request         UpdateUdfArtifactRequest
     * @param UpdateUdfArtifactHeaders $headers         UpdateUdfArtifactHeaders
     * @param RuntimeOptions           $runtime         runtime options for this request RuntimeOptions
     *
     * @return UpdateUdfArtifactResponse UpdateUdfArtifactResponse
     */
    public function updateUdfArtifactWithOptions($namespace, $udfArtifactName, $request, $headers, $runtime)
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
            'action'      => 'UpdateUdfArtifact',
            'version'     => '2022-07-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/namespaces/' . OpenApiUtilClient::getEncodeParam($namespace) . '/udfartifacts/' . OpenApiUtilClient::getEncodeParam($udfArtifactName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateUdfArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the JAR file of the user-defined function (UDF) that you create.
     *  *
     * @param string                   $namespace
     * @param string                   $udfArtifactName
     * @param UpdateUdfArtifactRequest $request         UpdateUdfArtifactRequest
     *
     * @return UpdateUdfArtifactResponse UpdateUdfArtifactResponse
     */
    public function updateUdfArtifact($namespace, $udfArtifactName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateUdfArtifactHeaders([]);

        return $this->updateUdfArtifactWithOptions($namespace, $udfArtifactName, $request, $headers, $runtime);
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
