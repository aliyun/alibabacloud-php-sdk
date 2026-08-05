<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CeaseFunctionInstanceRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CeaseFunctionInstanceResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateAsyncTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateAsyncTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateCapabilityRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateCapabilityResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateConfigRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateConfigResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateCredentialsRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateCredentialsResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateExperienceDataRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateExperienceDataResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateFunctionInstanceRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateFunctionInstanceResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateFunctionTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateFunctionTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateOfflineTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateOfflineTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateRagEvaluatorTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateRagEvaluatorTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteCapabilityRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteCapabilityResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteConfigRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteConfigResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteCredentialsRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteCredentialsResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteExperienceDataRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteExperienceDataResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteFunctionInstanceRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteFunctionInstanceResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteOfflineTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteOfflineTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteRagEvaluatorTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteRagEvaluatorTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteWorkspaceRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DescribeCapabilityRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DescribeCapabilityResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetAsyncTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetAsyncTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetConfigRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetConfigResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetCredentialsRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetCredentialsResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetExperienceDataRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetExperienceDataResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetFunctionInstanceRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetFunctionInstanceResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetOfflineTaskLogRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetOfflineTaskLogResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetOfflineTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetOfflineTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetRagEvaluatorTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetRagEvaluatorTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetTableColumnsRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetTableColumnsResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetTableFieldsRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetTableFieldsResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetTablesRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetTablesResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetWorkspaceRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListAsyncTasksRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListAsyncTasksResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListCapabilitiesRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListCapabilitiesResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListConfigsRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListConfigsResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListCredentialsRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListCredentialsResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListExperienceDataRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListExperienceDataResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListFunctionInstancesRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListFunctionInstancesResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListFunctionRestrictionsRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListFunctionRestrictionsResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskErrorLogsRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskErrorLogsResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskShrinkRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListRagEvaluatorTasksRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListRagEvaluatorTasksResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListServicesRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListServicesResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ModifyOfflineTaskLogRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ModifyOfflineTaskLogResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ModifyOfflineTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ModifyOfflineTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ResumeFunctionInstanceRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ResumeFunctionInstanceResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\StartOfflineTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\StartOfflineTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\StopOfflineTaskRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\StopOfflineTaskResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\UpdateCapabilityRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\UpdateCapabilityResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\UpdateConfigRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\UpdateConfigResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\UpdateCredentialsRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\UpdateCredentialsResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\UpdateFunctionInstanceRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\UpdateFunctionInstanceResponse;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\UpdateWorkspaceRequest;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\UpdateWorkspaceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Searchplat extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'eu-central-1' => 'searchplat.eu-central-1.aliyuncs.com',
            'cn-shanghai' => 'searchplat.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('searchplat', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Stops a service.
     *
     * @param request - CeaseFunctionInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CeaseFunctionInstanceResponse
     *
     * @param string                       $workspaceName
     * @param string                       $functionName
     * @param string                       $instanceName
     * @param CeaseFunctionInstanceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CeaseFunctionInstanceResponse
     */
    public function ceaseFunctionInstanceWithOptions($workspaceName, $functionName, $instanceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CeaseFunctionInstance',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '/actions/cease',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CeaseFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a service.
     *
     * @param request - CeaseFunctionInstanceRequest
     *
     * @returns CeaseFunctionInstanceResponse
     *
     * @param string                       $workspaceName
     * @param string                       $functionName
     * @param string                       $instanceName
     * @param CeaseFunctionInstanceRequest $request
     *
     * @return CeaseFunctionInstanceResponse
     */
    public function ceaseFunctionInstance($workspaceName, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->ceaseFunctionInstanceWithOptions($workspaceName, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * Creates an asynchronous task.
     *
     * @param request - CreateAsyncTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAsyncTaskResponse
     *
     * @param string                 $workspaceName
     * @param CreateAsyncTaskRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAsyncTaskResponse
     */
    public function createAsyncTaskWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->dataId) {
            @$body['dataId'] = $request->dataId;
        }

        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->serviceId) {
            @$body['serviceId'] = $request->serviceId;
        }

        if (null !== $request->serviceType) {
            @$body['serviceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAsyncTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/async-tasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an asynchronous task.
     *
     * @param request - CreateAsyncTaskRequest
     *
     * @returns CreateAsyncTaskResponse
     *
     * @param string                 $workspaceName
     * @param CreateAsyncTaskRequest $request
     *
     * @return CreateAsyncTaskResponse
     */
    public function createAsyncTask($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAsyncTaskWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Creates a knowledge base-related configuration.
     *
     * @param request - CreateCapabilityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCapabilityResponse
     *
     * @param string                  $workspaceName
     * @param string                  $itemCategory
     * @param CreateCapabilityRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCapabilityResponse
     */
    public function createCapabilityWithOptions($workspaceName, $itemCategory, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->itemDesc) {
            @$body['itemDesc'] = $request->itemDesc;
        }

        if (null !== $request->itemName) {
            @$body['itemName'] = $request->itemName;
        }

        if (null !== $request->itemValue) {
            @$body['itemValue'] = $request->itemValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCapability',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/capabilities/' . Url::percentEncode($itemCategory) . '/items',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCapabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a knowledge base-related configuration.
     *
     * @param request - CreateCapabilityRequest
     *
     * @returns CreateCapabilityResponse
     *
     * @param string                  $workspaceName
     * @param string                  $itemCategory
     * @param CreateCapabilityRequest $request
     *
     * @return CreateCapabilityResponse
     */
    public function createCapability($workspaceName, $itemCategory, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCapabilityWithOptions($workspaceName, $itemCategory, $request, $headers, $runtime);
    }

    /**
     * Creates a configuration item in a specified workspace. The prompt and lark types are supported.
     *
     * @remarks
     * ## Operation description
     * - This API operation allows you to create a configuration for a specific workspace.
     * - The `configType` parameter specifies the type of configuration to create. Valid values: `prompt` and `lark`.
     * - When `dryRun` is set to `true`, the API operation only validates the request without actually performing the creation.
     * - The `configData` field varies depending on the value of `configType`. Refer to the examples for the specific structure to construct the request body.
     *
     * @param request - CreateConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConfigResponse
     *
     * @param string              $workspaceName
     * @param string              $configType
     * @param CreateConfigRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateConfigResponse
     */
    public function createConfigWithOptions($workspaceName, $configType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->configData) {
            @$body['configData'] = $request->configData;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConfig',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/configs/' . Url::percentEncode($configType) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a configuration item in a specified workspace. The prompt and lark types are supported.
     *
     * @remarks
     * ## Operation description
     * - This API operation allows you to create a configuration for a specific workspace.
     * - The `configType` parameter specifies the type of configuration to create. Valid values: `prompt` and `lark`.
     * - When `dryRun` is set to `true`, the API operation only validates the request without actually performing the creation.
     * - The `configData` field varies depending on the value of `configType`. Refer to the examples for the specific structure to construct the request body.
     *
     * @param request - CreateConfigRequest
     *
     * @returns CreateConfigResponse
     *
     * @param string              $workspaceName
     * @param string              $configType
     * @param CreateConfigRequest $request
     *
     * @return CreateConfigResponse
     */
    public function createConfig($workspaceName, $configType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigWithOptions($workspaceName, $configType, $request, $headers, $runtime);
    }

    /**
     * Creates access credentials.
     *
     * @param request - CreateCredentialsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCredentialsResponse
     *
     * @param string                   $workspaceName
     * @param CreateCredentialsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCredentialsResponse
     */
    public function createCredentialsWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCredentials',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/credentials',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates access credentials.
     *
     * @param request - CreateCredentialsRequest
     *
     * @returns CreateCredentialsResponse
     *
     * @param string                   $workspaceName
     * @param CreateCredentialsRequest $request
     *
     * @return CreateCredentialsResponse
     */
    public function createCredentials($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCredentialsWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Creates experience data.
     *
     * @param request - CreateExperienceDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExperienceDataResponse
     *
     * @param string                      $workspaceName
     * @param CreateExperienceDataRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateExperienceDataResponse
     */
    public function createExperienceDataWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->contentType) {
            @$body['contentType'] = $request->contentType;
        }

        if (null !== $request->dataSize) {
            @$body['dataSize'] = $request->dataSize;
        }

        if (null !== $request->dataType) {
            @$body['dataType'] = $request->dataType;
        }

        if (null !== $request->dataValue) {
            @$body['dataValue'] = $request->dataValue;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->serviceType) {
            @$body['serviceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExperienceData',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/experience-data',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateExperienceDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates experience data.
     *
     * @param request - CreateExperienceDataRequest
     *
     * @returns CreateExperienceDataResponse
     *
     * @param string                      $workspaceName
     * @param CreateExperienceDataRequest $request
     *
     * @return CreateExperienceDataResponse
     */
    public function createExperienceData($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperienceDataWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Creates a service configuration.
     *
     * @param request - CreateFunctionInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFunctionInstanceResponse
     *
     * @param string                        $workspaceName
     * @param string                        $functionName
     * @param CreateFunctionInstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateFunctionInstanceResponse
     */
    public function createFunctionInstanceWithOptions($workspaceName, $functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->createParameters) {
            @$body['createParameters'] = $request->createParameters;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->functionType) {
            @$body['functionType'] = $request->functionType;
        }

        if (null !== $request->instanceName) {
            @$body['instanceName'] = $request->instanceName;
        }

        if (null !== $request->modelType) {
            @$body['modelType'] = $request->modelType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFunctionInstance',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/functions/' . Url::percentEncode($functionName) . '/instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service configuration.
     *
     * @param request - CreateFunctionInstanceRequest
     *
     * @returns CreateFunctionInstanceResponse
     *
     * @param string                        $workspaceName
     * @param string                        $functionName
     * @param CreateFunctionInstanceRequest $request
     *
     * @return CreateFunctionInstanceResponse
     */
    public function createFunctionInstance($workspaceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionInstanceWithOptions($workspaceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * Creates a service configuration task.
     *
     * @param request - CreateFunctionTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFunctionTaskResponse
     *
     * @param string                    $workspaceName
     * @param string                    $functionName
     * @param string                    $instanceName
     * @param CreateFunctionTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFunctionTaskResponse
     */
    public function createFunctionTaskWithOptions($workspaceName, $functionName, $instanceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateFunctionTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '/tasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFunctionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service configuration task.
     *
     * @param request - CreateFunctionTaskRequest
     *
     * @returns CreateFunctionTaskResponse
     *
     * @param string                    $workspaceName
     * @param string                    $functionName
     * @param string                    $instanceName
     * @param CreateFunctionTaskRequest $request
     *
     * @return CreateFunctionTaskResponse
     */
    public function createFunctionTask($workspaceName, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionTaskWithOptions($workspaceName, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * Creates an offline processing task for video retrieval. You can configure the data source, processing parameters, and output destination.
     *
     * @remarks
     * ## Operation description.
     *
     * @param request - CreateOfflineTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOfflineTaskResponse
     *
     * @param string                   $workspaceName
     * @param string                   $type
     * @param CreateOfflineTaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateOfflineTaskResponse
     */
    public function createOfflineTaskWithOptions($workspaceName, $type, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->draft) {
            @$query['draft'] = $request->draft;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->meta) {
            @$body['meta'] = $request->meta;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        if (null !== $request->processors) {
            @$body['processors'] = $request->processors;
        }

        if (null !== $request->sink) {
            @$body['sink'] = $request->sink;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOfflineTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/offline-tasks/' . Url::percentEncode($type) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateOfflineTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an offline processing task for video retrieval. You can configure the data source, processing parameters, and output destination.
     *
     * @remarks
     * ## Operation description.
     *
     * @param request - CreateOfflineTaskRequest
     *
     * @returns CreateOfflineTaskResponse
     *
     * @param string                   $workspaceName
     * @param string                   $type
     * @param CreateOfflineTaskRequest $request
     *
     * @return CreateOfflineTaskResponse
     */
    public function createOfflineTask($workspaceName, $type, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOfflineTaskWithOptions($workspaceName, $type, $request, $headers, $runtime);
    }

    /**
     * Creates an evaluation task for the RAG edition.
     *
     * @param request - CreateRagEvaluatorTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRagEvaluatorTaskResponse
     *
     * @param string                        $workspaceName
     * @param CreateRagEvaluatorTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateRagEvaluatorTaskResponse
     */
    public function createRagEvaluatorTaskWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['app_name'] = $request->appName;
        }

        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->dataSourceConfig) {
            @$body['data_source_config'] = $request->dataSourceConfig;
        }

        if (null !== $request->emails) {
            @$body['emails'] = $request->emails;
        }

        if (null !== $request->evaluateConfig) {
            @$body['evaluate_config'] = $request->evaluateConfig;
        }

        if (null !== $request->hasDataSource) {
            @$body['has_data_source'] = $request->hasDataSource;
        }

        if (null !== $request->metrics) {
            @$body['metrics'] = $request->metrics;
        }

        if (null !== $request->taskName) {
            @$body['task_name'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRagEvaluatorTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/rag-evaluator/v1/api/task',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRagEvaluatorTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an evaluation task for the RAG edition.
     *
     * @param request - CreateRagEvaluatorTaskRequest
     *
     * @returns CreateRagEvaluatorTaskResponse
     *
     * @param string                        $workspaceName
     * @param CreateRagEvaluatorTaskRequest $request
     *
     * @return CreateRagEvaluatorTaskResponse
     */
    public function createRagEvaluatorTask($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRagEvaluatorTaskWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Create Workspace.
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
        $body = [];
        if (null !== $request->chargeType) {
            @$body['chargeType'] = $request->chargeType;
        }

        if (null !== $request->engineType) {
            @$body['engineType'] = $request->engineType;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->quota) {
            @$body['quota'] = $request->quota;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkspace',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Workspace.
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
     * Deletes a specific configuration item from a specified workspace.
     *
     * @remarks
     * ## Operation description
     * This API operation allows you to delete a specific configuration item by specifying the workspace name, configuration category, and configuration name. Before calling this operation, ensure that you have sufficient permissions (such as the `DeleteCapability` action in a RAM policy). After a configuration item is deleted, all related data and services may be affected.
     *
     * @param request - DeleteCapabilityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCapabilityResponse
     *
     * @param string                  $workspaceName
     * @param string                  $itemCategory
     * @param string                  $itemName
     * @param DeleteCapabilityRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCapabilityResponse
     */
    public function deleteCapabilityWithOptions($workspaceName, $itemCategory, $itemName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteCapability',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/capabilities/' . Url::percentEncode($itemCategory) . '/items/' . Url::percentEncode($itemName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCapabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specific configuration item from a specified workspace.
     *
     * @remarks
     * ## Operation description
     * This API operation allows you to delete a specific configuration item by specifying the workspace name, configuration category, and configuration name. Before calling this operation, ensure that you have sufficient permissions (such as the `DeleteCapability` action in a RAM policy). After a configuration item is deleted, all related data and services may be affected.
     *
     * @param request - DeleteCapabilityRequest
     *
     * @returns DeleteCapabilityResponse
     *
     * @param string                  $workspaceName
     * @param string                  $itemCategory
     * @param string                  $itemName
     * @param DeleteCapabilityRequest $request
     *
     * @return DeleteCapabilityResponse
     */
    public function deleteCapability($workspaceName, $itemCategory, $itemName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCapabilityWithOptions($workspaceName, $itemCategory, $itemName, $request, $headers, $runtime);
    }

    /**
     * Deletes a specific type of configuration from a specified workspace.
     *
     * @remarks
     * ## Request description.
     *
     * @param request - DeleteConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConfigResponse
     *
     * @param string              $workspaceName
     * @param string              $configType
     * @param string              $id
     * @param DeleteConfigRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteConfigResponse
     */
    public function deleteConfigWithOptions($workspaceName, $configType, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConfig',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/configs/' . Url::percentEncode($configType) . '/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specific type of configuration from a specified workspace.
     *
     * @remarks
     * ## Request description.
     *
     * @param request - DeleteConfigRequest
     *
     * @returns DeleteConfigResponse
     *
     * @param string              $workspaceName
     * @param string              $configType
     * @param string              $id
     * @param DeleteConfigRequest $request
     *
     * @return DeleteConfigResponse
     */
    public function deleteConfig($workspaceName, $configType, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigWithOptions($workspaceName, $configType, $id, $request, $headers, $runtime);
    }

    /**
     * Deletes an access credential.
     *
     * @param request - DeleteCredentialsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCredentialsResponse
     *
     * @param string                   $token
     * @param string                   $workspaceName
     * @param DeleteCredentialsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCredentialsResponse
     */
    public function deleteCredentialsWithOptions($token, $workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteCredentials',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/credentials/' . Url::percentEncode($token) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access credential.
     *
     * @param request - DeleteCredentialsRequest
     *
     * @returns DeleteCredentialsResponse
     *
     * @param string                   $token
     * @param string                   $workspaceName
     * @param DeleteCredentialsRequest $request
     *
     * @return DeleteCredentialsResponse
     */
    public function deleteCredentials($token, $workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCredentialsWithOptions($token, $workspaceName, $request, $headers, $runtime);
    }

    /**
     * Delete experience data.
     *
     * @param request - DeleteExperienceDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExperienceDataResponse
     *
     * @param string                      $id
     * @param string                      $workspaceName
     * @param DeleteExperienceDataRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteExperienceDataResponse
     */
    public function deleteExperienceDataWithOptions($id, $workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExperienceData',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/experience-data/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteExperienceDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete experience data.
     *
     * @param request - DeleteExperienceDataRequest
     *
     * @returns DeleteExperienceDataResponse
     *
     * @param string                      $id
     * @param string                      $workspaceName
     * @param DeleteExperienceDataRequest $request
     *
     * @return DeleteExperienceDataResponse
     */
    public function deleteExperienceData($id, $workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperienceDataWithOptions($id, $workspaceName, $request, $headers, $runtime);
    }

    /**
     * Deletes a service configuration.
     *
     * @param request - DeleteFunctionInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFunctionInstanceResponse
     *
     * @param string                        $workspaceName
     * @param string                        $functionName
     * @param string                        $instanceName
     * @param DeleteFunctionInstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteFunctionInstanceResponse
     */
    public function deleteFunctionInstanceWithOptions($workspaceName, $functionName, $instanceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFunctionInstance',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service configuration.
     *
     * @param request - DeleteFunctionInstanceRequest
     *
     * @returns DeleteFunctionInstanceResponse
     *
     * @param string                        $workspaceName
     * @param string                        $functionName
     * @param string                        $instanceName
     * @param DeleteFunctionInstanceRequest $request
     *
     * @return DeleteFunctionInstanceResponse
     */
    public function deleteFunctionInstance($workspaceName, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionInstanceWithOptions($workspaceName, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * Deletes a batch task.
     *
     * @param request - DeleteOfflineTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOfflineTaskResponse
     *
     * @param string                   $workspaceName
     * @param string                   $type
     * @param string                   $taskName
     * @param DeleteOfflineTaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteOfflineTaskResponse
     */
    public function deleteOfflineTaskWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime)
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
            'action' => 'DeleteOfflineTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/offline-tasks/' . Url::percentEncode($type) . '/' . Url::percentEncode($taskName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteOfflineTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a batch task.
     *
     * @param request - DeleteOfflineTaskRequest
     *
     * @returns DeleteOfflineTaskResponse
     *
     * @param string                   $workspaceName
     * @param string                   $type
     * @param string                   $taskName
     * @param DeleteOfflineTaskRequest $request
     *
     * @return DeleteOfflineTaskResponse
     */
    public function deleteOfflineTask($workspaceName, $type, $taskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteOfflineTaskWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime);
    }

    /**
     * Deletes a RAG evaluation task.
     *
     * @param request - DeleteRagEvaluatorTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRagEvaluatorTaskResponse
     *
     * @param string                        $workspaceName
     * @param string                        $taskId
     * @param DeleteRagEvaluatorTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteRagEvaluatorTaskResponse
     */
    public function deleteRagEvaluatorTaskWithOptions($workspaceName, $taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteRagEvaluatorTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/rag-evaluator/v1/api/task/' . Url::percentEncode($taskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRagEvaluatorTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a RAG evaluation task.
     *
     * @param request - DeleteRagEvaluatorTaskRequest
     *
     * @returns DeleteRagEvaluatorTaskResponse
     *
     * @param string                        $workspaceName
     * @param string                        $taskId
     * @param DeleteRagEvaluatorTaskRequest $request
     *
     * @return DeleteRagEvaluatorTaskResponse
     */
    public function deleteRagEvaluatorTask($workspaceName, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRagEvaluatorTaskWithOptions($workspaceName, $taskId, $request, $headers, $runtime);
    }

    /**
     * Deletes a workspace.
     *
     * @param request - DeleteWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string                 $workspaceName
     * @param DeleteWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspaceWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteWorkspace',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a workspace.
     *
     * @param request - DeleteWorkspaceRequest
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string                 $workspaceName
     * @param DeleteWorkspaceRequest $request
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspace($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Query the details of a configuration item of a specific category within a specified workspace.
     *
     * @remarks
     * ## Request Description
     * This API is used to retrieve specific configuration information based on the provided workspace name, configuration category, and configuration name. Please ensure the parameters in the request path are accurate, especially the three required fields: `workspaceName`, `itemCategory`, and `itemName`. Additionally, please note that `itemCategory` currently only supports the `ai_search_agent` category.
     *
     * @param request - DescribeCapabilityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCapabilityResponse
     *
     * @param string                    $workspaceName
     * @param string                    $itemCategory
     * @param string                    $itemName
     * @param DescribeCapabilityRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCapabilityResponse
     */
    public function describeCapabilityWithOptions($workspaceName, $itemCategory, $itemName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeCapability',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/capabilities/' . Url::percentEncode($itemCategory) . '/items/' . Url::percentEncode($itemName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeCapabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the details of a configuration item of a specific category within a specified workspace.
     *
     * @remarks
     * ## Request Description
     * This API is used to retrieve specific configuration information based on the provided workspace name, configuration category, and configuration name. Please ensure the parameters in the request path are accurate, especially the three required fields: `workspaceName`, `itemCategory`, and `itemName`. Additionally, please note that `itemCategory` currently only supports the `ai_search_agent` category.
     *
     * @param request - DescribeCapabilityRequest
     *
     * @returns DescribeCapabilityResponse
     *
     * @param string                    $workspaceName
     * @param string                    $itemCategory
     * @param string                    $itemName
     * @param DescribeCapabilityRequest $request
     *
     * @return DescribeCapabilityResponse
     */
    public function describeCapability($workspaceName, $itemCategory, $itemName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCapabilityWithOptions($workspaceName, $itemCategory, $itemName, $request, $headers, $runtime);
    }

    /**
     * DescribeRegions.
     *
     * @param request - DescribeRegionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/regions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeRegions.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the details of an asynchronous task.
     *
     * @param request - GetAsyncTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncTaskResponse
     *
     * @param string              $workspaceName
     * @param string              $id
     * @param GetAsyncTaskRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetAsyncTaskResponse
     */
    public function getAsyncTaskWithOptions($workspaceName, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAsyncTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/async-tasks/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an asynchronous task.
     *
     * @param request - GetAsyncTaskRequest
     *
     * @returns GetAsyncTaskResponse
     *
     * @param string              $workspaceName
     * @param string              $id
     * @param GetAsyncTaskRequest $request
     *
     * @return GetAsyncTaskResponse
     */
    public function getAsyncTask($workspaceName, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAsyncTaskWithOptions($workspaceName, $id, $request, $headers, $runtime);
    }

    /**
     * Queries a specific type of configuration from a specified workspace.
     *
     * @remarks
     * ## Request description.
     *
     * @param request - GetConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConfigResponse
     *
     * @param string           $workspaceName
     * @param string           $configType
     * @param string           $id
     * @param GetConfigRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetConfigResponse
     */
    public function getConfigWithOptions($workspaceName, $configType, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConfig',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/configs/' . Url::percentEncode($configType) . '/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a specific type of configuration from a specified workspace.
     *
     * @remarks
     * ## Request description.
     *
     * @param request - GetConfigRequest
     *
     * @returns GetConfigResponse
     *
     * @param string           $workspaceName
     * @param string           $configType
     * @param string           $id
     * @param GetConfigRequest $request
     *
     * @return GetConfigResponse
     */
    public function getConfig($workspaceName, $configType, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConfigWithOptions($workspaceName, $configType, $id, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of an access credential.
     *
     * @param request - GetCredentialsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCredentialsResponse
     *
     * @param string                $token
     * @param string                $workspaceName
     * @param GetCredentialsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetCredentialsResponse
     */
    public function getCredentialsWithOptions($token, $workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCredentials',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/credentials/' . Url::percentEncode($token) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an access credential.
     *
     * @param request - GetCredentialsRequest
     *
     * @returns GetCredentialsResponse
     *
     * @param string                $token
     * @param string                $workspaceName
     * @param GetCredentialsRequest $request
     *
     * @return GetCredentialsResponse
     */
    public function getCredentials($token, $workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCredentialsWithOptions($token, $workspaceName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of experience data.
     *
     * @param request - GetExperienceDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExperienceDataResponse
     *
     * @param string                   $workspaceName
     * @param string                   $id
     * @param GetExperienceDataRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetExperienceDataResponse
     */
    public function getExperienceDataWithOptions($workspaceName, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExperienceData',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/experience-data/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExperienceDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of experience data.
     *
     * @param request - GetExperienceDataRequest
     *
     * @returns GetExperienceDataResponse
     *
     * @param string                   $workspaceName
     * @param string                   $id
     * @param GetExperienceDataRequest $request
     *
     * @return GetExperienceDataResponse
     */
    public function getExperienceData($workspaceName, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperienceDataWithOptions($workspaceName, $id, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a specific feature instance in a specified workspace.
     *
     * @param request - GetFunctionInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFunctionInstanceResponse
     *
     * @param string                     $workspaceName
     * @param string                     $functionName
     * @param string                     $instanceName
     * @param GetFunctionInstanceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetFunctionInstanceResponse
     */
    public function getFunctionInstanceWithOptions($workspaceName, $functionName, $instanceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->output) {
            @$query['output'] = $request->output;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFunctionInstance',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specific feature instance in a specified workspace.
     *
     * @param request - GetFunctionInstanceRequest
     *
     * @returns GetFunctionInstanceResponse
     *
     * @param string                     $workspaceName
     * @param string                     $functionName
     * @param string                     $instanceName
     * @param GetFunctionInstanceRequest $request
     *
     * @return GetFunctionInstanceResponse
     */
    public function getFunctionInstance($workspaceName, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionInstanceWithOptions($workspaceName, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * Retrieves information about an offline node.
     *
     * @param request - GetOfflineTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOfflineTaskResponse
     *
     * @param string                $workspaceName
     * @param string                $type
     * @param string                $taskName
     * @param GetOfflineTaskRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetOfflineTaskResponse
     */
    public function getOfflineTaskWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime)
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
            'action' => 'GetOfflineTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/offline-tasks/' . Url::percentEncode($type) . '/' . Url::percentEncode($taskName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOfflineTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves information about an offline node.
     *
     * @param request - GetOfflineTaskRequest
     *
     * @returns GetOfflineTaskResponse
     *
     * @param string                $workspaceName
     * @param string                $type
     * @param string                $taskName
     * @param GetOfflineTaskRequest $request
     *
     * @return GetOfflineTaskResponse
     */
    public function getOfflineTask($workspaceName, $type, $taskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOfflineTaskWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime);
    }

    /**
     * Queries the details of offline task logs in a specified workspace.
     *
     * @remarks
     * ## Operation description
     * - This operation allows you to retrieve offline task logs information by specifying the workspace name, node type, and node name.
     * - Provide a valid `regionId` as one of the query parameters to specify the area for the request.
     * - The returned information includes but is not limited to network configurations (private ES and public ES) and their enabling status, domain names, and IP whitelist groups.
     * - Note: Ensure that you have sufficient permissions (such as the `GetLog` action in the RAM policy) to invoke this operation.
     *
     * @param request - GetOfflineTaskLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOfflineTaskLogResponse
     *
     * @param string                   $workspaceName
     * @param string                   $type
     * @param string                   $taskName
     * @param GetOfflineTaskLogRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetOfflineTaskLogResponse
     */
    public function getOfflineTaskLogWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime)
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
            'action' => 'GetOfflineTaskLog',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/offline-tasks/' . Url::percentEncode($type) . '/' . Url::percentEncode($taskName) . '/log',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOfflineTaskLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of offline task logs in a specified workspace.
     *
     * @remarks
     * ## Operation description
     * - This operation allows you to retrieve offline task logs information by specifying the workspace name, node type, and node name.
     * - Provide a valid `regionId` as one of the query parameters to specify the area for the request.
     * - The returned information includes but is not limited to network configurations (private ES and public ES) and their enabling status, domain names, and IP whitelist groups.
     * - Note: Ensure that you have sufficient permissions (such as the `GetLog` action in the RAM policy) to invoke this operation.
     *
     * @param request - GetOfflineTaskLogRequest
     *
     * @returns GetOfflineTaskLogResponse
     *
     * @param string                   $workspaceName
     * @param string                   $type
     * @param string                   $taskName
     * @param GetOfflineTaskLogRequest $request
     *
     * @return GetOfflineTaskLogResponse
     */
    public function getOfflineTaskLog($workspaceName, $type, $taskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOfflineTaskLogWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime);
    }

    /**
     * Retrieves a RAG evaluation task.
     *
     * @param request - GetRagEvaluatorTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRagEvaluatorTaskResponse
     *
     * @param string                     $workspaceName
     * @param string                     $taskId
     * @param GetRagEvaluatorTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetRagEvaluatorTaskResponse
     */
    public function getRagEvaluatorTaskWithOptions($workspaceName, $taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRagEvaluatorTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/rag-evaluator/v1/api/task/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRagEvaluatorTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a RAG evaluation task.
     *
     * @param request - GetRagEvaluatorTaskRequest
     *
     * @returns GetRagEvaluatorTaskResponse
     *
     * @param string                     $workspaceName
     * @param string                     $taskId
     * @param GetRagEvaluatorTaskRequest $request
     *
     * @return GetRagEvaluatorTaskResponse
     */
    public function getRagEvaluatorTask($workspaceName, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRagEvaluatorTaskWithOptions($workspaceName, $taskId, $request, $headers, $runtime);
    }

    /**
     * Retrieves data table field information.
     *
     * @param request - GetTableColumnsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableColumnsResponse
     *
     * @param string                 $workspaceName
     * @param string                 $dataSourceType
     * @param GetTableColumnsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetTableColumnsResponse
     */
    public function getTableColumnsWithOptions($workspaceName, $dataSourceType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->params) {
            @$query['params'] = $request->params;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTableColumns',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/data-sources/' . Url::percentEncode($dataSourceType) . '/columns',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTableColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves data table field information.
     *
     * @param request - GetTableColumnsRequest
     *
     * @returns GetTableColumnsResponse
     *
     * @param string                 $workspaceName
     * @param string                 $dataSourceType
     * @param GetTableColumnsRequest $request
     *
     * @return GetTableColumnsResponse
     */
    public function getTableColumns($workspaceName, $dataSourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableColumnsWithOptions($workspaceName, $dataSourceType, $request, $headers, $runtime);
    }

    /**
     * @param request - GetTableFieldsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableFieldsResponse
     *
     * @param string                $workspaceName
     * @param string                $dataSourceType
     * @param GetTableFieldsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetTableFieldsResponse
     */
    public function getTableFieldsWithOptions($workspaceName, $dataSourceType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->params) {
            @$query['params'] = $request->params;
        }

        if (null !== $request->rawType) {
            @$query['rawType'] = $request->rawType;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTableFields',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/data-sources/' . Url::percentEncode($dataSourceType) . '/fields',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTableFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetTableFieldsRequest
     *
     * @returns GetTableFieldsResponse
     *
     * @param string                $workspaceName
     * @param string                $dataSourceType
     * @param GetTableFieldsRequest $request
     *
     * @return GetTableFieldsResponse
     */
    public function getTableFields($workspaceName, $dataSourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableFieldsWithOptions($workspaceName, $dataSourceType, $request, $headers, $runtime);
    }

    /**
     * Retrieves data tables.
     *
     * @param request - GetTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTablesResponse
     *
     * @param string           $workspaceName
     * @param string           $dataSourceType
     * @param GetTablesRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetTablesResponse
     */
    public function getTablesWithOptions($workspaceName, $dataSourceType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->params) {
            @$query['params'] = $request->params;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTables',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/data-sources/' . Url::percentEncode($dataSourceType) . '/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves data tables.
     *
     * @param request - GetTablesRequest
     *
     * @returns GetTablesResponse
     *
     * @param string           $workspaceName
     * @param string           $dataSourceType
     * @param GetTablesRequest $request
     *
     * @return GetTablesResponse
     */
    public function getTables($workspaceName, $dataSourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTablesWithOptions($workspaceName, $dataSourceType, $request, $headers, $runtime);
    }

    /**
     * Retrieves a workspace.
     *
     * @param request - GetWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspaceResponse
     *
     * @param string              $workspaceName
     * @param GetWorkspaceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkspace',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a workspace.
     *
     * @param request - GetWorkspaceRequest
     *
     * @returns GetWorkspaceResponse
     *
     * @param string              $workspaceName
     * @param GetWorkspaceRequest $request
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of asynchronous tasks.
     *
     * @param request - ListAsyncTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAsyncTasksResponse
     *
     * @param string                $workspaceName
     * @param ListAsyncTasksRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListAsyncTasksResponse
     */
    public function listAsyncTasksWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataId) {
            @$query['dataId'] = $request->dataId;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        if (null !== $request->serviceType) {
            @$query['serviceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAsyncTasks',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/async-tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAsyncTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of asynchronous tasks.
     *
     * @param request - ListAsyncTasksRequest
     *
     * @returns ListAsyncTasksResponse
     *
     * @param string                $workspaceName
     * @param ListAsyncTasksRequest $request
     *
     * @return ListAsyncTasksResponse
     */
    public function listAsyncTasks($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAsyncTasksWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Queries the list of configuration items of a specific category in a specified workspace.
     *
     * @remarks
     * ## Operation description
     * You can use this API operation to retrieve the list of configuration items based on the specified workspace name and configuration category. Paged query is supported. Use the `pageNumber` and `pageSize` parameters to control the number of results and the page number. The `nextToken` and `maxResults` parameters are also provided for paged query when handling large amounts of data.
     *
     * @param request - ListCapabilitiesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCapabilitiesResponse
     *
     * @param string                  $workspaceName
     * @param string                  $itemCategory
     * @param ListCapabilitiesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListCapabilitiesResponse
     */
    public function listCapabilitiesWithOptions($workspaceName, $itemCategory, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
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
            'action' => 'ListCapabilities',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/capabilities/' . Url::percentEncode($itemCategory) . '/items',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCapabilitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of configuration items of a specific category in a specified workspace.
     *
     * @remarks
     * ## Operation description
     * You can use this API operation to retrieve the list of configuration items based on the specified workspace name and configuration category. Paged query is supported. Use the `pageNumber` and `pageSize` parameters to control the number of results and the page number. The `nextToken` and `maxResults` parameters are also provided for paged query when handling large amounts of data.
     *
     * @param request - ListCapabilitiesRequest
     *
     * @returns ListCapabilitiesResponse
     *
     * @param string                  $workspaceName
     * @param string                  $itemCategory
     * @param ListCapabilitiesRequest $request
     *
     * @return ListCapabilitiesResponse
     */
    public function listCapabilities($workspaceName, $itemCategory, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCapabilitiesWithOptions($workspaceName, $itemCategory, $request, $headers, $runtime);
    }

    /**
     * Queries the list of configurations of a specific type in a specified workspace.
     *
     * @remarks
     * ## Request description.
     *
     * @param request - ListConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConfigsResponse
     *
     * @param string             $workspaceName
     * @param string             $configType
     * @param ListConfigsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListConfigsResponse
     */
    public function listConfigsWithOptions($workspaceName, $configType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConfigs',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/configs/' . Url::percentEncode($configType) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of configurations of a specific type in a specified workspace.
     *
     * @remarks
     * ## Request description.
     *
     * @param request - ListConfigsRequest
     *
     * @returns ListConfigsResponse
     *
     * @param string             $workspaceName
     * @param string             $configType
     * @param ListConfigsRequest $request
     *
     * @return ListConfigsResponse
     */
    public function listConfigs($workspaceName, $configType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConfigsWithOptions($workspaceName, $configType, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of access credentials.
     *
     * @param request - ListCredentialsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCredentialsResponse
     *
     * @param string                 $workspaceName
     * @param ListCredentialsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListCredentialsResponse
     */
    public function listCredentialsWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
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
            'action' => 'ListCredentials',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/credentials',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of access credentials.
     *
     * @param request - ListCredentialsRequest
     *
     * @returns ListCredentialsResponse
     *
     * @param string                 $workspaceName
     * @param ListCredentialsRequest $request
     *
     * @return ListCredentialsResponse
     */
    public function listCredentials($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCredentialsWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Retrieves all experience data in a specified workspace, with support for filtering by service type and data type.
     *
     * @remarks
     * ## Operation description
     * - This API operation queries all experience data of a user in a specific workspace. The results are sorted by creation time in descending order by default.
     * - Pagination is not supported. However, you can filter data by using the serviceType and dataType parameters.
     * - workspaceName is a path parameter and must be specified to indicate the workspace to query.
     *
     * @param request - ListExperienceDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExperienceDataResponse
     *
     * @param string                    $workspaceName
     * @param ListExperienceDataRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListExperienceDataResponse
     */
    public function listExperienceDataWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataType) {
            @$query['dataType'] = $request->dataType;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        if (null !== $request->serviceType) {
            @$query['serviceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExperienceData',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/experience-data',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExperienceDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves all experience data in a specified workspace, with support for filtering by service type and data type.
     *
     * @remarks
     * ## Operation description
     * - This API operation queries all experience data of a user in a specific workspace. The results are sorted by creation time in descending order by default.
     * - Pagination is not supported. However, you can filter data by using the serviceType and dataType parameters.
     * - workspaceName is a path parameter and must be specified to indicate the workspace to query.
     *
     * @param request - ListExperienceDataRequest
     *
     * @returns ListExperienceDataResponse
     *
     * @param string                    $workspaceName
     * @param ListExperienceDataRequest $request
     *
     * @return ListExperienceDataResponse
     */
    public function listExperienceData($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExperienceDataWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of service configurations.
     *
     * @param request - ListFunctionInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFunctionInstancesResponse
     *
     * @param string                       $workspaceName
     * @param string                       $functionName
     * @param ListFunctionInstancesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListFunctionInstancesResponse
     */
    public function listFunctionInstancesWithOptions($workspaceName, $functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->functionType) {
            @$query['functionType'] = $request->functionType;
        }

        if (null !== $request->modelType) {
            @$query['modelType'] = $request->modelType;
        }

        if (null !== $request->output) {
            @$query['output'] = $request->output;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFunctionInstances',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/functions/' . Url::percentEncode($functionName) . '/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFunctionInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of service configurations.
     *
     * @param request - ListFunctionInstancesRequest
     *
     * @returns ListFunctionInstancesResponse
     *
     * @param string                       $workspaceName
     * @param string                       $functionName
     * @param ListFunctionInstancesRequest $request
     *
     * @return ListFunctionInstancesResponse
     */
    public function listFunctionInstances($workspaceName, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionInstancesWithOptions($workspaceName, $functionName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the restriction items of a feature.
     *
     * @param request - ListFunctionRestrictionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFunctionRestrictionsResponse
     *
     * @param string                          $workspaceName
     * @param string                          $functionName
     * @param string                          $restrictionName
     * @param ListFunctionRestrictionsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListFunctionRestrictionsResponse
     */
    public function listFunctionRestrictionsWithOptions($workspaceName, $functionName, $restrictionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelType) {
            @$query['modelType'] = $request->modelType;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFunctionRestrictions',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/functions/' . Url::percentEncode($functionName) . '/restrictions/' . Url::percentEncode($restrictionName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFunctionRestrictionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the restriction items of a feature.
     *
     * @param request - ListFunctionRestrictionsRequest
     *
     * @returns ListFunctionRestrictionsResponse
     *
     * @param string                          $workspaceName
     * @param string                          $functionName
     * @param string                          $restrictionName
     * @param ListFunctionRestrictionsRequest $request
     *
     * @return ListFunctionRestrictionsResponse
     */
    public function listFunctionRestrictions($workspaceName, $functionName, $restrictionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionRestrictionsWithOptions($workspaceName, $functionName, $restrictionName, $request, $headers, $runtime);
    }

    /**
     * Get Offline Task Information List.
     *
     * @param tmpReq - ListOfflineTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOfflineTaskResponse
     *
     * @param string                 $workspaceName
     * @param string                 $type
     * @param ListOfflineTaskRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListOfflineTaskResponse
     */
    public function listOfflineTaskWithOptions($workspaceName, $type, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListOfflineTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labels) {
            $request->labelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labels, 'labels', 'json');
        }

        if (null !== $tmpReq->taskStatus) {
            $request->taskStatusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskStatus, 'taskStatus', 'json');
        }

        $query = [];
        if (null !== $request->labelsShrink) {
            @$query['labels'] = $request->labelsShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->taskName) {
            @$query['taskName'] = $request->taskName;
        }

        if (null !== $request->taskStatusShrink) {
            @$query['taskStatus'] = $request->taskStatusShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOfflineTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/offline-tasks/' . Url::percentEncode($type) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOfflineTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Offline Task Information List.
     *
     * @param request - ListOfflineTaskRequest
     *
     * @returns ListOfflineTaskResponse
     *
     * @param string                 $workspaceName
     * @param string                 $type
     * @param ListOfflineTaskRequest $request
     *
     * @return ListOfflineTaskResponse
     */
    public function listOfflineTask($workspaceName, $type, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOfflineTaskWithOptions($workspaceName, $type, $request, $headers, $runtime);
    }

    /**
     * Queries the error log list of batch tasks in a specified workspace.
     *
     * @remarks
     * ## Operation description
     * - This API operation retrieves error logs for a specific workspace, node type, and node name.
     * - The `startTime` and `endTime` parameters allow you to define a custom query time range. If not provided, data from the past hour is queried by default.
     * - The paging parameters `pageNum` and `pageSize` help control the number of returned results and page navigation. They represent the requested page number and the number of log entries per page, with default values of 1 and 10 respectively.
     * - Note: Ensure that you have obtained the required RAM permissions (Action: ListErrorLogs) before you invoke this operation.
     *
     * @param request - ListOfflineTaskErrorLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOfflineTaskErrorLogsResponse
     *
     * @param string                          $workspaceName
     * @param string                          $type
     * @param string                          $taskName
     * @param ListOfflineTaskErrorLogsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListOfflineTaskErrorLogsResponse
     */
    public function listOfflineTaskErrorLogsWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->pageNum) {
            @$query['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOfflineTaskErrorLogs',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/offline-tasks/' . Url::percentEncode($type) . '/' . Url::percentEncode($taskName) . '/error-logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOfflineTaskErrorLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the error log list of batch tasks in a specified workspace.
     *
     * @remarks
     * ## Operation description
     * - This API operation retrieves error logs for a specific workspace, node type, and node name.
     * - The `startTime` and `endTime` parameters allow you to define a custom query time range. If not provided, data from the past hour is queried by default.
     * - The paging parameters `pageNum` and `pageSize` help control the number of returned results and page navigation. They represent the requested page number and the number of log entries per page, with default values of 1 and 10 respectively.
     * - Note: Ensure that you have obtained the required RAM permissions (Action: ListErrorLogs) before you invoke this operation.
     *
     * @param request - ListOfflineTaskErrorLogsRequest
     *
     * @returns ListOfflineTaskErrorLogsResponse
     *
     * @param string                          $workspaceName
     * @param string                          $type
     * @param string                          $taskName
     * @param ListOfflineTaskErrorLogsRequest $request
     *
     * @return ListOfflineTaskErrorLogsResponse
     */
    public function listOfflineTaskErrorLogs($workspaceName, $type, $taskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOfflineTaskErrorLogsWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of RAG evaluation tasks.
     *
     * @param request - ListRagEvaluatorTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRagEvaluatorTasksResponse
     *
     * @param string                       $workspaceName
     * @param ListRagEvaluatorTasksRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListRagEvaluatorTasksResponse
     */
    public function listRagEvaluatorTasksWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'ListRagEvaluatorTasks',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/rag-evaluator/v1/api/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRagEvaluatorTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of RAG evaluation tasks.
     *
     * @param request - ListRagEvaluatorTasksRequest
     *
     * @returns ListRagEvaluatorTasksResponse
     *
     * @param string                       $workspaceName
     * @param ListRagEvaluatorTasksRequest $request
     *
     * @return ListRagEvaluatorTasksResponse
     */
    public function listRagEvaluatorTasks($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRagEvaluatorTasksWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of services.
     *
     * @param request - ListServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServicesResponse
     *
     * @param string              $workspaceName
     * @param ListServicesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelType) {
            @$query['modelType'] = $request->modelType;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->serviceId) {
            @$query['serviceId'] = $request->serviceId;
        }

        if (null !== $request->serviceType) {
            @$query['serviceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServices',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of services.
     *
     * @param request - ListServicesRequest
     *
     * @returns ListServicesResponse
     *
     * @param string              $workspaceName
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of workspaces.
     *
     * @param request - ListWorkspacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sortBy) {
            @$query['sortBy'] = $request->sortBy;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaces',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of workspaces.
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
     * Updates a batch task.
     *
     * @param request - ModifyOfflineTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyOfflineTaskResponse
     *
     * @param string                   $workspaceName
     * @param string                   $type
     * @param string                   $taskName
     * @param ModifyOfflineTaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyOfflineTaskResponse
     */
    public function modifyOfflineTaskWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->meta) {
            @$body['meta'] = $request->meta;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        if (null !== $request->processors) {
            @$body['processors'] = $request->processors;
        }

        if (null !== $request->sink) {
            @$body['sink'] = $request->sink;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyOfflineTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/offline-tasks/' . Url::percentEncode($type) . '/' . Url::percentEncode($taskName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyOfflineTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a batch task.
     *
     * @param request - ModifyOfflineTaskRequest
     *
     * @returns ModifyOfflineTaskResponse
     *
     * @param string                   $workspaceName
     * @param string                   $type
     * @param string                   $taskName
     * @param ModifyOfflineTaskRequest $request
     *
     * @return ModifyOfflineTaskResponse
     */
    public function modifyOfflineTask($workspaceName, $type, $taskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyOfflineTaskWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime);
    }

    /**
     * Modifies the network configuration for batch task log scenarios, including enabling or disabling public and private network access and setting IP whitelists.
     *
     * @remarks
     * ## Operation description
     * - This API allows you to adjust network-related configurations for a specific type of batch node within a specified workspace.
     * - Use this operation to control public or private network access permissions for the ES service and set the corresponding IP whitelists.
     * - When you need to change any network settings (such as enabling or shutting down public network access or updating IP whitelists), ensure that the `network` object contains the correct parameters.
     * - Note: Executing this operation may affect currently running nodes. Proceed with caution.
     *
     * @param request - ModifyOfflineTaskLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyOfflineTaskLogResponse
     *
     * @param string                      $workspaceName
     * @param string                      $type
     * @param string                      $taskName
     * @param ModifyOfflineTaskLogRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyOfflineTaskLogResponse
     */
    public function modifyOfflineTaskLogWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->network) {
            @$body['network'] = $request->network;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyOfflineTaskLog',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/offline-tasks/' . Url::percentEncode($type) . '/' . Url::percentEncode($taskName) . '/log',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyOfflineTaskLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the network configuration for batch task log scenarios, including enabling or disabling public and private network access and setting IP whitelists.
     *
     * @remarks
     * ## Operation description
     * - This API allows you to adjust network-related configurations for a specific type of batch node within a specified workspace.
     * - Use this operation to control public or private network access permissions for the ES service and set the corresponding IP whitelists.
     * - When you need to change any network settings (such as enabling or shutting down public network access or updating IP whitelists), ensure that the `network` object contains the correct parameters.
     * - Note: Executing this operation may affect currently running nodes. Proceed with caution.
     *
     * @param request - ModifyOfflineTaskLogRequest
     *
     * @returns ModifyOfflineTaskLogResponse
     *
     * @param string                      $workspaceName
     * @param string                      $type
     * @param string                      $taskName
     * @param ModifyOfflineTaskLogRequest $request
     *
     * @return ModifyOfflineTaskLogResponse
     */
    public function modifyOfflineTaskLog($workspaceName, $type, $taskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyOfflineTaskLogWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime);
    }

    /**
     * Restarts the service.
     *
     * @param request - ResumeFunctionInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeFunctionInstanceResponse
     *
     * @param string                        $workspaceName
     * @param string                        $functionName
     * @param string                        $instanceName
     * @param ResumeFunctionInstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ResumeFunctionInstanceResponse
     */
    public function resumeFunctionInstanceWithOptions($workspaceName, $functionName, $instanceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResumeFunctionInstance',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '/actions/resume',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResumeFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts the service.
     *
     * @param request - ResumeFunctionInstanceRequest
     *
     * @returns ResumeFunctionInstanceResponse
     *
     * @param string                        $workspaceName
     * @param string                        $functionName
     * @param string                        $instanceName
     * @param ResumeFunctionInstanceRequest $request
     *
     * @return ResumeFunctionInstanceResponse
     */
    public function resumeFunctionInstance($workspaceName, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeFunctionInstanceWithOptions($workspaceName, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * Starts a batch task.
     *
     * @remarks
     * ## Operation description.
     *
     * @param request - StartOfflineTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartOfflineTaskResponse
     *
     * @param string                  $workspaceName
     * @param string                  $type
     * @param string                  $taskName
     * @param StartOfflineTaskRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StartOfflineTaskResponse
     */
    public function startOfflineTaskWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->parallelism) {
            @$body['parallelism'] = $request->parallelism;
        }

        if (null !== $request->timestamp) {
            @$body['timestamp'] = $request->timestamp;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartOfflineTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/offline-tasks/' . Url::percentEncode($type) . '/' . Url::percentEncode($taskName) . '/actions/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartOfflineTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a batch task.
     *
     * @remarks
     * ## Operation description.
     *
     * @param request - StartOfflineTaskRequest
     *
     * @returns StartOfflineTaskResponse
     *
     * @param string                  $workspaceName
     * @param string                  $type
     * @param string                  $taskName
     * @param StartOfflineTaskRequest $request
     *
     * @return StartOfflineTaskResponse
     */
    public function startOfflineTask($workspaceName, $type, $taskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startOfflineTaskWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime);
    }

    /**
     * Stops a batch task.
     *
     * @param request - StopOfflineTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopOfflineTaskResponse
     *
     * @param string                 $workspaceName
     * @param string                 $type
     * @param string                 $taskName
     * @param StopOfflineTaskRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StopOfflineTaskResponse
     */
    public function stopOfflineTaskWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->parallelism) {
            @$body['parallelism'] = $request->parallelism;
        }

        if (null !== $request->timestamp) {
            @$body['timestamp'] = $request->timestamp;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopOfflineTask',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/offline-tasks/' . Url::percentEncode($type) . '/' . Url::percentEncode($taskName) . '/actions/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopOfflineTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a batch task.
     *
     * @param request - StopOfflineTaskRequest
     *
     * @returns StopOfflineTaskResponse
     *
     * @param string                 $workspaceName
     * @param string                 $type
     * @param string                 $taskName
     * @param StopOfflineTaskRequest $request
     *
     * @return StopOfflineTaskResponse
     */
    public function stopOfflineTask($workspaceName, $type, $taskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopOfflineTaskWithOptions($workspaceName, $type, $taskName, $request, $headers, $runtime);
    }

    /**
     * Updates a specific configuration item in a specified workspace.
     *
     * @remarks
     * ## Request description
     * This API operation allows you to update a specific configuration item (`itemName`) under a category (`itemCategory`) in a specified workspace (`workspaceName`). By setting the `dryRun` parameter, you can preview changes without actually applying them. The request body can contain a new configuration description (`itemDesc`) and configuration content (`itemValue`). The structure of `itemValue` must conform to the requirements of the target configuration item.
     *
     * @param request - UpdateCapabilityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCapabilityResponse
     *
     * @param string                  $workspaceName
     * @param string                  $itemCategory
     * @param string                  $itemName
     * @param UpdateCapabilityRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCapabilityResponse
     */
    public function updateCapabilityWithOptions($workspaceName, $itemCategory, $itemName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->itemDesc) {
            @$body['itemDesc'] = $request->itemDesc;
        }

        if (null !== $request->itemValue) {
            @$body['itemValue'] = $request->itemValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCapability',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/capabilities/' . Url::percentEncode($itemCategory) . '/items/' . Url::percentEncode($itemName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateCapabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a specific configuration item in a specified workspace.
     *
     * @remarks
     * ## Request description
     * This API operation allows you to update a specific configuration item (`itemName`) under a category (`itemCategory`) in a specified workspace (`workspaceName`). By setting the `dryRun` parameter, you can preview changes without actually applying them. The request body can contain a new configuration description (`itemDesc`) and configuration content (`itemValue`). The structure of `itemValue` must conform to the requirements of the target configuration item.
     *
     * @param request - UpdateCapabilityRequest
     *
     * @returns UpdateCapabilityResponse
     *
     * @param string                  $workspaceName
     * @param string                  $itemCategory
     * @param string                  $itemName
     * @param UpdateCapabilityRequest $request
     *
     * @return UpdateCapabilityResponse
     */
    public function updateCapability($workspaceName, $itemCategory, $itemName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCapabilityWithOptions($workspaceName, $itemCategory, $itemName, $request, $headers, $runtime);
    }

    /**
     * Updates the configuration of a specific type in a specified workspace.
     *
     * @remarks
     * ## Request description.
     *
     * @param request - UpdateConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConfigResponse
     *
     * @param string              $workspaceName
     * @param string              $configType
     * @param UpdateConfigRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateConfigResponse
     */
    public function updateConfigWithOptions($workspaceName, $configType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->configData) {
            @$body['configData'] = $request->configData;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConfig',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/configs/' . Url::percentEncode($configType) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a specific type in a specified workspace.
     *
     * @remarks
     * ## Request description.
     *
     * @param request - UpdateConfigRequest
     *
     * @returns UpdateConfigResponse
     *
     * @param string              $workspaceName
     * @param string              $configType
     * @param UpdateConfigRequest $request
     *
     * @return UpdateConfigResponse
     */
    public function updateConfig($workspaceName, $configType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConfigWithOptions($workspaceName, $configType, $request, $headers, $runtime);
    }

    /**
     * Modifies an access credential.
     *
     * @param request - UpdateCredentialsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCredentialsResponse
     *
     * @param string                   $token
     * @param string                   $workspaceName
     * @param UpdateCredentialsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateCredentialsResponse
     */
    public function updateCredentialsWithOptions($token, $workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->enabled) {
            @$body['enabled'] = $request->enabled;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCredentials',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/credentials/' . Url::percentEncode($token) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an access credential.
     *
     * @param request - UpdateCredentialsRequest
     *
     * @returns UpdateCredentialsResponse
     *
     * @param string                   $token
     * @param string                   $workspaceName
     * @param UpdateCredentialsRequest $request
     *
     * @return UpdateCredentialsResponse
     */
    public function updateCredentials($token, $workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCredentialsWithOptions($token, $workspaceName, $request, $headers, $runtime);
    }

    /**
     * Updates the service configuration.
     *
     * @param request - UpdateFunctionInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFunctionInstanceResponse
     *
     * @param string                        $workspaceName
     * @param string                        $functionName
     * @param string                        $instanceName
     * @param UpdateFunctionInstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateFunctionInstanceResponse
     */
    public function updateFunctionInstanceWithOptions($workspaceName, $functionName, $instanceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->createParameters) {
            @$body['createParameters'] = $request->createParameters;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFunctionInstance',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '/functions/' . Url::percentEncode($functionName) . '/instances/' . Url::percentEncode($instanceName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the service configuration.
     *
     * @param request - UpdateFunctionInstanceRequest
     *
     * @returns UpdateFunctionInstanceResponse
     *
     * @param string                        $workspaceName
     * @param string                        $functionName
     * @param string                        $instanceName
     * @param UpdateFunctionInstanceRequest $request
     *
     * @return UpdateFunctionInstanceResponse
     */
    public function updateFunctionInstance($workspaceName, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFunctionInstanceWithOptions($workspaceName, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * Updates a workspace.
     *
     * @param request - UpdateWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkspaceResponse
     *
     * @param string                 $workspaceName
     * @param UpdateWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateWorkspaceResponse
     */
    public function updateWorkspaceWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkspace',
            'version' => '2024-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/platform/workspaces/' . Url::percentEncode($workspaceName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a workspace.
     *
     * @param request - UpdateWorkspaceRequest
     *
     * @returns UpdateWorkspaceResponse
     *
     * @param string                 $workspaceName
     * @param UpdateWorkspaceRequest $request
     *
     * @return UpdateWorkspaceResponse
     */
    public function updateWorkspace($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkspaceWithOptions($workspaceName, $request, $headers, $runtime);
    }
}
