<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CheckInstanceDatasourceRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CheckInstanceDatasourceResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CheckModelFeatureFGFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateDatasourceRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateDatasourceResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateFeatureEntityRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateFeatureEntityResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateFeatureViewRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateFeatureViewResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateLabelTableRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateLabelTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateLLMConfigRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateLLMConfigResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateModelFeatureRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateModelFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateProjectRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateProjectResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateServiceIdentityRoleRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateServiceIdentityRoleResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteDatasourceResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteFeatureEntityResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteFeatureViewResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteLabelTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteLLMConfigResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteModelFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetTableRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetDatasourceResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetDatasourceTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetFeatureEntityResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetFeatureViewResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetInstanceResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetLabelTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetLLMConfigResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureFGFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureFGInfoResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetProjectFeatureEntityResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetProjectResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetServiceIdentityRoleResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetTaskResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourcesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourcesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceTablesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceTablesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureEntitiesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureEntitiesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureEntitiesShrinkRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewFieldRelationshipsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewOnlineFeaturesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewOnlineFeaturesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewOnlineFeaturesShrinkRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewRelationshipsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewsRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewsShrinkRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListInstancesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListInstancesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListLabelTablesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListLabelTablesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListLabelTablesShrinkRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListLLMConfigsRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListLLMConfigsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeatureAvailableFeaturesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeatureAvailableFeaturesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeaturesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeaturesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeaturesShrinkRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeaturesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeaturesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeatureViewsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectsRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectsShrinkRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListTaskLogsRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListTaskLogsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListTasksRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListTasksResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListTasksShrinkRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\PublishFeatureViewTableRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\PublishFeatureViewTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\StopTaskResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateDatasourceRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateDatasourceResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateFeatureViewRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateFeatureViewResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateLabelTableRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateLabelTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateLLMConfigRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateLLMConfigResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\WriteFeatureViewTableRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\WriteFeatureViewTableResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PaiFeatureStore extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paifeaturestore', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Tests connectivity to a data source.
     *
     * @param request - CheckInstanceDatasourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckInstanceDatasourceResponse
     *
     * @param string                         $InstanceId
     * @param CheckInstanceDatasourceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckInstanceDatasourceResponse
     */
    public function checkInstanceDatasourceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckInstanceDatasource',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/action/checkdatasource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckInstanceDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tests connectivity to a data source.
     *
     * @param request - CheckInstanceDatasourceRequest
     *
     * @returns CheckInstanceDatasourceResponse
     *
     * @param string                         $InstanceId
     * @param CheckInstanceDatasourceRequest $request
     *
     * @return CheckInstanceDatasourceResponse
     */
    public function checkInstanceDatasource($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkInstanceDatasourceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Verify that the FG configuration is correct and meets all rules.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckModelFeatureFGFeatureResponse
     *
     * @param string         $InstanceId
     * @param string         $ModelFeatureId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CheckModelFeatureFGFeatureResponse
     */
    public function checkModelFeatureFGFeatureWithOptions($InstanceId, $ModelFeatureId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CheckModelFeatureFGFeature',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/modelfeatures/' . Url::percentEncode($ModelFeatureId) . '/action/checkfgfeature',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckModelFeatureFGFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verify that the FG configuration is correct and meets all rules.
     *
     * @returns CheckModelFeatureFGFeatureResponse
     *
     * @param string $InstanceId
     * @param string $ModelFeatureId
     *
     * @return CheckModelFeatureFGFeatureResponse
     */
    public function checkModelFeatureFGFeature($InstanceId, $ModelFeatureId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkModelFeatureFGFeatureWithOptions($InstanceId, $ModelFeatureId, $headers, $runtime);
    }

    /**
     * Registers a datasource in a FeatureStore instance. A datasource provides offline or online storage for a project.
     *
     * @param request - CreateDatasourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDatasourceResponse
     *
     * @param string                  $InstanceId
     * @param CreateDatasourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDatasourceResponse
     */
    public function createDatasourceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDatasource',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/datasources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Registers a datasource in a FeatureStore instance. A datasource provides offline or online storage for a project.
     *
     * @param request - CreateDatasourceRequest
     *
     * @returns CreateDatasourceResponse
     *
     * @param string                  $InstanceId
     * @param CreateDatasourceRequest $request
     *
     * @return CreateDatasourceResponse
     */
    public function createDatasource($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasourceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a feature entity. A feature entity defines a join key that links multiple feature views to it, enabling feature joining.
     *
     * @param request - CreateFeatureEntityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFeatureEntityResponse
     *
     * @param string                     $InstanceId
     * @param CreateFeatureEntityRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateFeatureEntityResponse
     */
    public function createFeatureEntityWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->joinId) {
            @$body['JoinId'] = $request->joinId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->parentFeatureEntityId) {
            @$body['ParentFeatureEntityId'] = $request->parentFeatureEntityId;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFeatureEntity',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureentities',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFeatureEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a feature entity. A feature entity defines a join key that links multiple feature views to it, enabling feature joining.
     *
     * @param request - CreateFeatureEntityRequest
     *
     * @returns CreateFeatureEntityResponse
     *
     * @param string                     $InstanceId
     * @param CreateFeatureEntityRequest $request
     *
     * @return CreateFeatureEntityResponse
     */
    public function createFeatureEntity($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFeatureEntityWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * You can create three types of feature views: offline, real-time, and behavior sequence. Each feature view uses fields to define its structure and links to a feature entity.
     *
     * @param request - CreateFeatureViewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFeatureViewResponse
     *
     * @param string                   $InstanceId
     * @param CreateFeatureViewRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateFeatureViewResponse
     */
    public function createFeatureViewWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->featureEntityId) {
            @$body['FeatureEntityId'] = $request->featureEntityId;
        }

        if (null !== $request->fields) {
            @$body['Fields'] = $request->fields;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->registerDatasourceId) {
            @$body['RegisterDatasourceId'] = $request->registerDatasourceId;
        }

        if (null !== $request->registerTable) {
            @$body['RegisterTable'] = $request->registerTable;
        }

        if (null !== $request->syncOnlineTable) {
            @$body['SyncOnlineTable'] = $request->syncOnlineTable;
        }

        if (null !== $request->TTL) {
            @$body['TTL'] = $request->TTL;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->writeMethod) {
            @$body['WriteMethod'] = $request->writeMethod;
        }

        if (null !== $request->writeToFeatureDB) {
            @$body['WriteToFeatureDB'] = $request->writeToFeatureDB;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFeatureView',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureviews',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFeatureViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can create three types of feature views: offline, real-time, and behavior sequence. Each feature view uses fields to define its structure and links to a feature entity.
     *
     * @param request - CreateFeatureViewRequest
     *
     * @returns CreateFeatureViewResponse
     *
     * @param string                   $InstanceId
     * @param CreateFeatureViewRequest $request
     *
     * @return CreateFeatureViewResponse
     */
    public function createFeatureView($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFeatureViewWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a FeatureStore instance. This operation is idempotent. If an instance is already running or initializing in the same account, this operation returns the existing instance ID.
     *
     * @param request - CreateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a FeatureStore instance. This operation is idempotent. If an instance is already running or initializing in the same account, this operation returns the existing instance ID.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an LLM configuration that contains the call parameters and API key for an embedding model. During creation, the service validates the ApiKey and Model. For a DashScope model, the EmbeddingDimension must match one of the fixed, valid dimensions supported by the model.
     *
     * @param request - CreateLLMConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLLMConfigResponse
     *
     * @param string                 $InstanceId
     * @param CreateLLMConfigRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateLLMConfigResponse
     */
    public function createLLMConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiKey) {
            @$body['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->baseUrl) {
            @$body['BaseUrl'] = $request->baseUrl;
        }

        if (null !== $request->batchSize) {
            @$body['BatchSize'] = $request->batchSize;
        }

        if (null !== $request->embeddingDimension) {
            @$body['EmbeddingDimension'] = $request->embeddingDimension;
        }

        if (null !== $request->enableFusion) {
            @$body['EnableFusion'] = $request->enableFusion;
        }

        if (null !== $request->maxTokens) {
            @$body['MaxTokens'] = $request->maxTokens;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->modelType) {
            @$body['ModelType'] = $request->modelType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->rps) {
            @$body['Rps'] = $request->rps;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLLMConfig',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/llmconfigs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLLMConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an LLM configuration that contains the call parameters and API key for an embedding model. During creation, the service validates the ApiKey and Model. For a DashScope model, the EmbeddingDimension must match one of the fixed, valid dimensions supported by the model.
     *
     * @param request - CreateLLMConfigRequest
     *
     * @returns CreateLLMConfigResponse
     *
     * @param string                 $InstanceId
     * @param CreateLLMConfigRequest $request
     *
     * @return CreateLLMConfigResponse
     */
    public function createLLMConfig($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLLMConfigWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a label table. A label table defines the schema for label data referenced by model features.
     *
     * @param request - CreateLabelTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLabelTableResponse
     *
     * @param string                  $InstanceId
     * @param CreateLabelTableRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLabelTableResponse
     */
    public function createLabelTableWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasourceId) {
            @$body['DatasourceId'] = $request->datasourceId;
        }

        if (null !== $request->fields) {
            @$body['Fields'] = $request->fields;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLabelTable',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/labeltables',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLabelTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a label table. A label table defines the schema for label data referenced by model features.
     *
     * @param request - CreateLabelTableRequest
     *
     * @returns CreateLabelTableResponse
     *
     * @param string                  $InstanceId
     * @param CreateLabelTableRequest $request
     *
     * @return CreateLabelTableResponse
     */
    public function createLabelTable($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLabelTableWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a model feature. A model feature associates a label table with a set of feature view fields. It is used to generate the training dataset table required for model training and to specify the feature set used for model inference.
     *
     * @param request - CreateModelFeatureRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelFeatureResponse
     *
     * @param string                    $InstanceId
     * @param CreateModelFeatureRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateModelFeatureResponse
     */
    public function createModelFeatureWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->features) {
            @$body['Features'] = $request->features;
        }

        if (null !== $request->labelPriorityLevel) {
            @$body['LabelPriorityLevel'] = $request->labelPriorityLevel;
        }

        if (null !== $request->labelTableId) {
            @$body['LabelTableId'] = $request->labelTableId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sequenceFeatureViewIds) {
            @$body['SequenceFeatureViewIds'] = $request->sequenceFeatureViewIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateModelFeature',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/modelfeatures',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateModelFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a model feature. A model feature associates a label table with a set of feature view fields. It is used to generate the training dataset table required for model training and to specify the feature set used for model inference.
     *
     * @param request - CreateModelFeatureRequest
     *
     * @returns CreateModelFeatureResponse
     *
     * @param string                    $InstanceId
     * @param CreateModelFeatureRequest $request
     *
     * @return CreateModelFeatureResponse
     */
    public function createModelFeature($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelFeatureWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a FeatureStore project. A project is a container for feature entities, feature views, and model features.
     *
     * @param request - CreateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param string               $InstanceId
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->offlineDatasourceId) {
            @$body['OfflineDatasourceId'] = $request->offlineDatasourceId;
        }

        if (null !== $request->offlineLifeCycle) {
            @$body['OfflineLifeCycle'] = $request->offlineLifeCycle;
        }

        if (null !== $request->onlineDatasourceId) {
            @$body['OnlineDatasourceId'] = $request->onlineDatasourceId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/projects',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a FeatureStore project. A project is a container for feature entities, feature views, and model features.
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param string               $InstanceId
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a service-linked role that authorizes the FeatureStore service to access other cloud resources of the user. Returns a conflict error if the role already exists.
     *
     * @param request - CreateServiceIdentityRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceIdentityRoleResponse
     *
     * @param CreateServiceIdentityRoleRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateServiceIdentityRoleResponse
     */
    public function createServiceIdentityRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->roleName) {
            @$body['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServiceIdentityRole',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/serviceidentityroles',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceIdentityRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service-linked role that authorizes the FeatureStore service to access other cloud resources of the user. Returns a conflict error if the role already exists.
     *
     * @param request - CreateServiceIdentityRoleRequest
     *
     * @returns CreateServiceIdentityRoleResponse
     *
     * @param CreateServiceIdentityRoleRequest $request
     *
     * @return CreateServiceIdentityRoleResponse
     */
    public function createServiceIdentityRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceIdentityRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a datasource from a FeatureStore instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDatasourceResponse
     *
     * @param string         $InstanceId
     * @param string         $DatasourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDatasourceResponse
     */
    public function deleteDatasourceWithOptions($InstanceId, $DatasourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDatasource',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/datasources/' . Url::percentEncode($DatasourceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a datasource from a FeatureStore instance.
     *
     * @returns DeleteDatasourceResponse
     *
     * @param string $InstanceId
     * @param string $DatasourceId
     *
     * @return DeleteDatasourceResponse
     */
    public function deleteDatasource($InstanceId, $DatasourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatasourceWithOptions($InstanceId, $DatasourceId, $headers, $runtime);
    }

    /**
     * Deletes a feature entity.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFeatureEntityResponse
     *
     * @param string         $InstanceId
     * @param string         $FeatureEntityId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFeatureEntityResponse
     */
    public function deleteFeatureEntityWithOptions($InstanceId, $FeatureEntityId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFeatureEntity',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureentities/' . Url::percentEncode($FeatureEntityId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFeatureEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a feature entity.
     *
     * @returns DeleteFeatureEntityResponse
     *
     * @param string $InstanceId
     * @param string $FeatureEntityId
     *
     * @return DeleteFeatureEntityResponse
     */
    public function deleteFeatureEntity($InstanceId, $FeatureEntityId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFeatureEntityWithOptions($InstanceId, $FeatureEntityId, $headers, $runtime);
    }

    /**
     * Deletes a feature view. A feature view cannot be deleted if it is referenced by a model feature. To delete the feature view, you must first delete the associated model feature.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFeatureViewResponse
     *
     * @param string         $InstanceId
     * @param string         $FeatureViewId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFeatureViewResponse
     */
    public function deleteFeatureViewWithOptions($InstanceId, $FeatureViewId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFeatureView',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureviews/' . Url::percentEncode($FeatureViewId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFeatureViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a feature view. A feature view cannot be deleted if it is referenced by a model feature. To delete the feature view, you must first delete the associated model feature.
     *
     * @returns DeleteFeatureViewResponse
     *
     * @param string $InstanceId
     * @param string $FeatureViewId
     *
     * @return DeleteFeatureViewResponse
     */
    public function deleteFeatureView($InstanceId, $FeatureViewId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFeatureViewWithOptions($InstanceId, $FeatureViewId, $headers, $runtime);
    }

    /**
     * Deletes an LLM call configuration. You cannot delete a configuration referenced by a feature view. You must first delete the associated feature view.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLLMConfigResponse
     *
     * @param string         $InstanceId
     * @param string         $LLMConfigId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLLMConfigResponse
     */
    public function deleteLLMConfigWithOptions($InstanceId, $LLMConfigId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteLLMConfig',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/llmconfigs/' . Url::percentEncode($LLMConfigId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteLLMConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an LLM call configuration. You cannot delete a configuration referenced by a feature view. You must first delete the associated feature view.
     *
     * @returns DeleteLLMConfigResponse
     *
     * @param string $InstanceId
     * @param string $LLMConfigId
     *
     * @return DeleteLLMConfigResponse
     */
    public function deleteLLMConfig($InstanceId, $LLMConfigId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLLMConfigWithOptions($InstanceId, $LLMConfigId, $headers, $runtime);
    }

    /**
     * Deletes a label table. You cannot delete a label table that is referenced by a model feature. Delete the associated model feature first.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLabelTableResponse
     *
     * @param string         $InstanceId
     * @param string         $LabelTableId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLabelTableResponse
     */
    public function deleteLabelTableWithOptions($InstanceId, $LabelTableId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteLabelTable',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/labeltables/' . Url::percentEncode($LabelTableId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteLabelTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a label table. You cannot delete a label table that is referenced by a model feature. Delete the associated model feature first.
     *
     * @returns DeleteLabelTableResponse
     *
     * @param string $InstanceId
     * @param string $LabelTableId
     *
     * @return DeleteLabelTableResponse
     */
    public function deleteLabelTable($InstanceId, $LabelTableId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLabelTableWithOptions($InstanceId, $LabelTableId, $headers, $runtime);
    }

    /**
     * Deletes a model feature and its associated training set table.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelFeatureResponse
     *
     * @param string         $InstanceId
     * @param string         $ModelFeatureId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteModelFeatureResponse
     */
    public function deleteModelFeatureWithOptions($InstanceId, $ModelFeatureId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteModelFeature',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/modelfeatures/' . Url::percentEncode($ModelFeatureId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteModelFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a model feature and its associated training set table.
     *
     * @returns DeleteModelFeatureResponse
     *
     * @param string $InstanceId
     * @param string $ModelFeatureId
     *
     * @return DeleteModelFeatureResponse
     */
    public function deleteModelFeature($InstanceId, $ModelFeatureId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelFeatureWithOptions($InstanceId, $ModelFeatureId, $headers, $runtime);
    }

    /**
     * Deletes a FeatureStore project.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProjectResponse
     *
     * @param string         $InstanceId
     * @param string         $ProjectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($InstanceId, $ProjectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteProject',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/projects/' . Url::percentEncode($ProjectId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a FeatureStore project.
     *
     * @returns DeleteProjectResponse
     *
     * @param string $InstanceId
     * @param string $ProjectId
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($InstanceId, $ProjectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($InstanceId, $ProjectId, $headers, $runtime);
    }

    /**
     * Export a training set table for model features. Create an export task by configuring the Label table input, the data source partition for each feature view, and the training set output partition.
     *
     * @param request - ExportModelFeatureTrainingSetTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportModelFeatureTrainingSetTableResponse
     *
     * @param string                                    $InstanceId
     * @param string                                    $ModelFeatureId
     * @param ExportModelFeatureTrainingSetTableRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ExportModelFeatureTrainingSetTableResponse
     */
    public function exportModelFeatureTrainingSetTableWithOptions($InstanceId, $ModelFeatureId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->featureViewConfig) {
            @$body['FeatureViewConfig'] = $request->featureViewConfig;
        }

        if (null !== $request->labelInputConfig) {
            @$body['LabelInputConfig'] = $request->labelInputConfig;
        }

        if (null !== $request->realTimeIterateInterval) {
            @$body['RealTimeIterateInterval'] = $request->realTimeIterateInterval;
        }

        if (null !== $request->realTimePartitionCountValue) {
            @$body['RealTimePartitionCountValue'] = $request->realTimePartitionCountValue;
        }

        if (null !== $request->trainingSetConfig) {
            @$body['TrainingSetConfig'] = $request->trainingSetConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportModelFeatureTrainingSetTable',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/modelfeatures/' . Url::percentEncode($ModelFeatureId) . '/action/exporttrainingsettable',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportModelFeatureTrainingSetTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Export a training set table for model features. Create an export task by configuring the Label table input, the data source partition for each feature view, and the training set output partition.
     *
     * @param request - ExportModelFeatureTrainingSetTableRequest
     *
     * @returns ExportModelFeatureTrainingSetTableResponse
     *
     * @param string                                    $InstanceId
     * @param string                                    $ModelFeatureId
     * @param ExportModelFeatureTrainingSetTableRequest $request
     *
     * @return ExportModelFeatureTrainingSetTableResponse
     */
    public function exportModelFeatureTrainingSetTable($InstanceId, $ModelFeatureId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportModelFeatureTrainingSetTableWithOptions($InstanceId, $ModelFeatureId, $request, $headers, $runtime);
    }

    /**
     * Gets the detailed information about a data source, including its type, connection information, and configuration.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatasourceResponse
     *
     * @param string         $InstanceId
     * @param string         $DatasourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDatasourceResponse
     */
    public function getDatasourceWithOptions($InstanceId, $DatasourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDatasource',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/datasources/' . Url::percentEncode($DatasourceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the detailed information about a data source, including its type, connection information, and configuration.
     *
     * @returns GetDatasourceResponse
     *
     * @param string $InstanceId
     * @param string $DatasourceId
     *
     * @return GetDatasourceResponse
     */
    public function getDatasource($InstanceId, $DatasourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatasourceWithOptions($InstanceId, $DatasourceId, $headers, $runtime);
    }

    /**
     * Gets the field information for a specified table in a data source. This operation supports only MaxCompute data sources.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatasourceTableResponse
     *
     * @param string         $InstanceId
     * @param string         $DatasourceId
     * @param string         $TableName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDatasourceTableResponse
     */
    public function getDatasourceTableWithOptions($InstanceId, $DatasourceId, $TableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDatasourceTable',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/datasources/' . Url::percentEncode($DatasourceId) . '/tables/' . Url::percentEncode($TableName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDatasourceTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the field information for a specified table in a data source. This operation supports only MaxCompute data sources.
     *
     * @returns GetDatasourceTableResponse
     *
     * @param string $InstanceId
     * @param string $DatasourceId
     * @param string $TableName
     *
     * @return GetDatasourceTableResponse
     */
    public function getDatasourceTable($InstanceId, $DatasourceId, $TableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatasourceTableWithOptions($InstanceId, $DatasourceId, $TableName, $headers, $runtime);
    }

    /**
     * Retrieves the details of a feature entity.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFeatureEntityResponse
     *
     * @param string         $InstanceId
     * @param string         $FeatureEntityId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFeatureEntityResponse
     */
    public function getFeatureEntityWithOptions($InstanceId, $FeatureEntityId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetFeatureEntity',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureentities/' . Url::percentEncode($FeatureEntityId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFeatureEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a feature entity.
     *
     * @returns GetFeatureEntityResponse
     *
     * @param string $InstanceId
     * @param string $FeatureEntityId
     *
     * @return GetFeatureEntityResponse
     */
    public function getFeatureEntity($InstanceId, $FeatureEntityId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFeatureEntityWithOptions($InstanceId, $FeatureEntityId, $headers, $runtime);
    }

    /**
     * Gets the details of a feature view, including its field definitions, data source binding, and synchronization status.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFeatureViewResponse
     *
     * @param string         $InstanceId
     * @param string         $FeatureViewId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFeatureViewResponse
     */
    public function getFeatureViewWithOptions($InstanceId, $FeatureViewId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetFeatureView',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureviews/' . Url::percentEncode($FeatureViewId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFeatureViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the details of a feature view, including its field definitions, data source binding, and synchronization status.
     *
     * @returns GetFeatureViewResponse
     *
     * @param string $InstanceId
     * @param string $FeatureViewId
     *
     * @return GetFeatureViewResponse
     */
    public function getFeatureView($InstanceId, $FeatureViewId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFeatureViewWithOptions($InstanceId, $FeatureViewId, $headers, $runtime);
    }

    /**
     * Retrieves the details of a FeatureStore instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a FeatureStore instance.
     *
     * @returns GetInstanceResponse
     *
     * @param string $InstanceId
     *
     * @return GetInstanceResponse
     */
    public function getInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Retrieves the details of an LLM call configuration.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLLMConfigResponse
     *
     * @param string         $InstanceId
     * @param string         $LLMConfigId
     * @param string         $RegionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLLMConfigResponse
     */
    public function getLLMConfigWithOptions($InstanceId, $LLMConfigId, $RegionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLLMConfig',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/llmconfigs/' . Url::percentEncode($LLMConfigId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLLMConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an LLM call configuration.
     *
     * @returns GetLLMConfigResponse
     *
     * @param string $InstanceId
     * @param string $LLMConfigId
     * @param string $RegionId
     *
     * @return GetLLMConfigResponse
     */
    public function getLLMConfig($InstanceId, $LLMConfigId, $RegionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLLMConfigWithOptions($InstanceId, $LLMConfigId, $RegionId, $headers, $runtime);
    }

    /**
     * Retrieves the details of a label table, including its field definitions and related models.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLabelTableResponse
     *
     * @param string         $InstanceId
     * @param string         $LabelTableId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLabelTableResponse
     */
    public function getLabelTableWithOptions($InstanceId, $LabelTableId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLabelTable',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/labeltables/' . Url::percentEncode($LabelTableId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLabelTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a label table, including its field definitions and related models.
     *
     * @returns GetLabelTableResponse
     *
     * @param string $InstanceId
     * @param string $LabelTableId
     *
     * @return GetLabelTableResponse
     */
    public function getLabelTable($InstanceId, $LabelTableId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLabelTableWithOptions($InstanceId, $LabelTableId, $headers, $runtime);
    }

    /**
     * Retrieves detailed information about a model feature, including the selected feature list, lineage relationships, and training set export script.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelFeatureResponse
     *
     * @param string         $InstanceId
     * @param string         $ModelFeatureId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModelFeatureResponse
     */
    public function getModelFeatureWithOptions($InstanceId, $ModelFeatureId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetModelFeature',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/modelfeatures/' . Url::percentEncode($ModelFeatureId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetModelFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves detailed information about a model feature, including the selected feature list, lineage relationships, and training set export script.
     *
     * @returns GetModelFeatureResponse
     *
     * @param string $InstanceId
     * @param string $ModelFeatureId
     *
     * @return GetModelFeatureResponse
     */
    public function getModelFeature($InstanceId, $ModelFeatureId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelFeatureWithOptions($InstanceId, $ModelFeatureId, $headers, $runtime);
    }

    /**
     * Retrieves the Feature Generation (FG) feature configuration of a model feature.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelFeatureFGFeatureResponse
     *
     * @param string         $InstanceId
     * @param string         $ModelFeatureId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModelFeatureFGFeatureResponse
     */
    public function getModelFeatureFGFeatureWithOptions($InstanceId, $ModelFeatureId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetModelFeatureFGFeature',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/modelfeatures/' . Url::percentEncode($ModelFeatureId) . '/fgfeature',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetModelFeatureFGFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the Feature Generation (FG) feature configuration of a model feature.
     *
     * @returns GetModelFeatureFGFeatureResponse
     *
     * @param string $InstanceId
     * @param string $ModelFeatureId
     *
     * @return GetModelFeatureFGFeatureResponse
     */
    public function getModelFeatureFGFeature($InstanceId, $ModelFeatureId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelFeatureFGFeatureWithOptions($InstanceId, $ModelFeatureId, $headers, $runtime);
    }

    /**
     * Retrieves the fg.json file configuration for a model feature.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModelFeatureFGInfoResponse
     *
     * @param string         $InstanceId
     * @param string         $ModelFeatureId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModelFeatureFGInfoResponse
     */
    public function getModelFeatureFGInfoWithOptions($InstanceId, $ModelFeatureId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetModelFeatureFGInfo',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/modelfeatures/' . Url::percentEncode($ModelFeatureId) . '/fginfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetModelFeatureFGInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the fg.json file configuration for a model feature.
     *
     * @returns GetModelFeatureFGInfoResponse
     *
     * @param string $InstanceId
     * @param string $ModelFeatureId
     *
     * @return GetModelFeatureFGInfoResponse
     */
    public function getModelFeatureFGInfo($InstanceId, $ModelFeatureId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelFeatureFGInfoWithOptions($InstanceId, $ModelFeatureId, $headers, $runtime);
    }

    /**
     * Gets the details of a project, including its data source bindings and resource counts.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectResponse
     *
     * @param string         $InstanceId
     * @param string         $ProjectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($InstanceId, $ProjectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProject',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/projects/' . Url::percentEncode($ProjectId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the details of a project, including its data source bindings and resource counts.
     *
     * @returns GetProjectResponse
     *
     * @param string $InstanceId
     * @param string $ProjectId
     *
     * @return GetProjectResponse
     */
    public function getProject($InstanceId, $ProjectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($InstanceId, $ProjectId, $headers, $runtime);
    }

    /**
     * Retrieve details of a feature entity in a project by name.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectFeatureEntityResponse
     *
     * @param string         $InstanceId
     * @param string         $ProjectId
     * @param string         $FeatureEntityName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectFeatureEntityResponse
     */
    public function getProjectFeatureEntityWithOptions($InstanceId, $ProjectId, $FeatureEntityName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProjectFeatureEntity',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/projects/' . Url::percentEncode($ProjectId) . '/featureentities/' . Url::percentEncode($FeatureEntityName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProjectFeatureEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve details of a feature entity in a project by name.
     *
     * @returns GetProjectFeatureEntityResponse
     *
     * @param string $InstanceId
     * @param string $ProjectId
     * @param string $FeatureEntityName
     *
     * @return GetProjectFeatureEntityResponse
     */
    public function getProjectFeatureEntity($InstanceId, $ProjectId, $FeatureEntityName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectFeatureEntityWithOptions($InstanceId, $ProjectId, $FeatureEntityName, $headers, $runtime);
    }

    /**
     * Queries the details of a service-linked role and verifies whether the role exists and is available.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceIdentityRoleResponse
     *
     * @param string         $RoleName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceIdentityRoleResponse
     */
    public function getServiceIdentityRoleWithOptions($RoleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetServiceIdentityRole',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/serviceidentityroles/' . Url::percentEncode($RoleName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceIdentityRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a service-linked role and verifies whether the role exists and is available.
     *
     * @returns GetServiceIdentityRoleResponse
     *
     * @param string $RoleName
     *
     * @return GetServiceIdentityRoleResponse
     */
    public function getServiceIdentityRole($RoleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceIdentityRoleWithOptions($RoleName, $headers, $runtime);
    }

    /**
     * Gets the details of an asynchronous task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskResponse
     *
     * @param string         $InstanceId
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($InstanceId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTask',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/tasks/' . Url::percentEncode($TaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the details of an asynchronous task.
     *
     * @returns GetTaskResponse
     *
     * @param string $InstanceId
     * @param string $TaskId
     *
     * @return GetTaskResponse
     */
    public function getTask($InstanceId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWithOptions($InstanceId, $TaskId, $headers, $runtime);
    }

    /**
     * Retrieve all feature view information from the data source.
     *
     * @param request - ListDatasourceFeatureViewsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatasourceFeatureViewsResponse
     *
     * @param string                            $InstanceId
     * @param string                            $DatasourceId
     * @param ListDatasourceFeatureViewsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListDatasourceFeatureViewsResponse
     */
    public function listDatasourceFeatureViewsWithOptions($InstanceId, $DatasourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->showStorageUsage) {
            @$query['ShowStorageUsage'] = $request->showStorageUsage;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDatasourceFeatureViews',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/datasources/' . Url::percentEncode($DatasourceId) . '/featureviews',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDatasourceFeatureViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve all feature view information from the data source.
     *
     * @param request - ListDatasourceFeatureViewsRequest
     *
     * @returns ListDatasourceFeatureViewsResponse
     *
     * @param string                            $InstanceId
     * @param string                            $DatasourceId
     * @param ListDatasourceFeatureViewsRequest $request
     *
     * @return ListDatasourceFeatureViewsResponse
     */
    public function listDatasourceFeatureViews($InstanceId, $DatasourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatasourceFeatureViewsWithOptions($InstanceId, $DatasourceId, $request, $headers, $runtime);
    }

    /**
     * Lists the tables in a datasource. This operation supports only MaxCompute datasources.
     *
     * @param request - ListDatasourceTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatasourceTablesResponse
     *
     * @param string                      $InstanceId
     * @param string                      $DatasourceId
     * @param ListDatasourceTablesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDatasourceTablesResponse
     */
    public function listDatasourceTablesWithOptions($InstanceId, $DatasourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDatasourceTables',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/datasources/' . Url::percentEncode($DatasourceId) . '/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDatasourceTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the tables in a datasource. This operation supports only MaxCompute datasources.
     *
     * @param request - ListDatasourceTablesRequest
     *
     * @returns ListDatasourceTablesResponse
     *
     * @param string                      $InstanceId
     * @param string                      $DatasourceId
     * @param ListDatasourceTablesRequest $request
     *
     * @return ListDatasourceTablesResponse
     */
    public function listDatasourceTables($InstanceId, $DatasourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatasourceTablesWithOptions($InstanceId, $DatasourceId, $request, $headers, $runtime);
    }

    /**
     * Lists the data sources in a FeatureStore instance. You can filter the results by workspace, type, and name.
     *
     * @param request - ListDatasourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatasourcesResponse
     *
     * @param string                 $InstanceId
     * @param ListDatasourcesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDatasourcesResponse
     */
    public function listDatasourcesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDatasources',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/datasources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDatasourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the data sources in a FeatureStore instance. You can filter the results by workspace, type, and name.
     *
     * @param request - ListDatasourcesRequest
     *
     * @returns ListDatasourcesResponse
     *
     * @param string                 $InstanceId
     * @param ListDatasourcesRequest $request
     *
     * @return ListDatasourcesResponse
     */
    public function listDatasources($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatasourcesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Lists the feature entities in a FeatureStore instance. You can filter the results by project, name, owner, and parent feature entity.
     *
     * @param tmpReq - ListFeatureEntitiesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFeatureEntitiesResponse
     *
     * @param string                     $InstanceId
     * @param ListFeatureEntitiesRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListFeatureEntitiesResponse
     */
    public function listFeatureEntitiesWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListFeatureEntitiesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->featureEntityIds) {
            $request->featureEntityIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->featureEntityIds, 'FeatureEntityIds', 'simple');
        }

        $query = [];
        if (null !== $request->featureEntityIdsShrink) {
            @$query['FeatureEntityIds'] = $request->featureEntityIdsShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentFeatureEntityId) {
            @$query['ParentFeatureEntityId'] = $request->parentFeatureEntityId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFeatureEntities',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureentities',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFeatureEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the feature entities in a FeatureStore instance. You can filter the results by project, name, owner, and parent feature entity.
     *
     * @param request - ListFeatureEntitiesRequest
     *
     * @returns ListFeatureEntitiesResponse
     *
     * @param string                     $InstanceId
     * @param ListFeatureEntitiesRequest $request
     *
     * @return ListFeatureEntitiesResponse
     */
    public function listFeatureEntities($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureEntitiesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the relationships for a specific field in a feature view, returning a list of models that reference the field and the names of the associated online and offline tables.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFeatureViewFieldRelationshipsResponse
     *
     * @param string         $InstanceId
     * @param string         $FeatureViewId
     * @param string         $FieldName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListFeatureViewFieldRelationshipsResponse
     */
    public function listFeatureViewFieldRelationshipsWithOptions($InstanceId, $FeatureViewId, $FieldName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListFeatureViewFieldRelationships',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureviews/' . Url::percentEncode($FeatureViewId) . '/fields/' . Url::percentEncode($FieldName) . '/relationships',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFeatureViewFieldRelationshipsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the relationships for a specific field in a feature view, returning a list of models that reference the field and the names of the associated online and offline tables.
     *
     * @returns ListFeatureViewFieldRelationshipsResponse
     *
     * @param string $InstanceId
     * @param string $FeatureViewId
     * @param string $FieldName
     *
     * @return ListFeatureViewFieldRelationshipsResponse
     */
    public function listFeatureViewFieldRelationships($InstanceId, $FeatureViewId, $FieldName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureViewFieldRelationshipsWithOptions($InstanceId, $FeatureViewId, $FieldName, $headers, $runtime);
    }

    /**
     * Retrieves online features from a feature view based on one or more join IDs. For each join ID provided, the operation returns the corresponding feature fields as key-value pairs.
     *
     * @param tmpReq - ListFeatureViewOnlineFeaturesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFeatureViewOnlineFeaturesResponse
     *
     * @param string                               $InstanceId
     * @param string                               $FeatureViewId
     * @param ListFeatureViewOnlineFeaturesRequest $tmpReq
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListFeatureViewOnlineFeaturesResponse
     */
    public function listFeatureViewOnlineFeaturesWithOptions($InstanceId, $FeatureViewId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListFeatureViewOnlineFeaturesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->joinIds) {
            $request->joinIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->joinIds, 'JoinIds', 'json');
        }

        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->joinIdsShrink) {
            @$query['JoinIds'] = $request->joinIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFeatureViewOnlineFeatures',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureviews/' . Url::percentEncode($FeatureViewId) . '/onlinefeatures',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFeatureViewOnlineFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves online features from a feature view based on one or more join IDs. For each join ID provided, the operation returns the corresponding feature fields as key-value pairs.
     *
     * @param request - ListFeatureViewOnlineFeaturesRequest
     *
     * @returns ListFeatureViewOnlineFeaturesResponse
     *
     * @param string                               $InstanceId
     * @param string                               $FeatureViewId
     * @param ListFeatureViewOnlineFeaturesRequest $request
     *
     * @return ListFeatureViewOnlineFeaturesResponse
     */
    public function listFeatureViewOnlineFeatures($InstanceId, $FeatureViewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureViewOnlineFeaturesWithOptions($InstanceId, $FeatureViewId, $request, $headers, $runtime);
    }

    /**
     * Lists the relationships for a feature view, including the models that reference it.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFeatureViewRelationshipsResponse
     *
     * @param string         $InstanceId
     * @param string         $FeatureViewId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListFeatureViewRelationshipsResponse
     */
    public function listFeatureViewRelationshipsWithOptions($InstanceId, $FeatureViewId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListFeatureViewRelationships',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureviews/' . Url::percentEncode($FeatureViewId) . '/relationships',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFeatureViewRelationshipsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the relationships for a feature view, including the models that reference it.
     *
     * @returns ListFeatureViewRelationshipsResponse
     *
     * @param string $InstanceId
     * @param string $FeatureViewId
     *
     * @return ListFeatureViewRelationshipsResponse
     */
    public function listFeatureViewRelationships($InstanceId, $FeatureViewId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureViewRelationshipsWithOptions($InstanceId, $FeatureViewId, $headers, $runtime);
    }

    /**
     * Lists feature views, filterable by project, name, type, tag, and feature name.
     *
     * @param tmpReq - ListFeatureViewsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFeatureViewsResponse
     *
     * @param string                  $InstanceId
     * @param ListFeatureViewsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListFeatureViewsResponse
     */
    public function listFeatureViewsWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListFeatureViewsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->featureViewIds) {
            $request->featureViewIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->featureViewIds, 'FeatureViewIds', 'simple');
        }

        $query = [];
        if (null !== $request->featureName) {
            @$query['FeatureName'] = $request->featureName;
        }

        if (null !== $request->featureViewIdsShrink) {
            @$query['FeatureViewIds'] = $request->featureViewIdsShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFeatureViews',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureviews',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFeatureViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists feature views, filterable by project, name, type, tag, and feature name.
     *
     * @param request - ListFeatureViewsRequest
     *
     * @returns ListFeatureViewsResponse
     *
     * @param string                  $InstanceId
     * @param ListFeatureViewsRequest $request
     *
     * @return ListFeatureViewsResponse
     */
    public function listFeatureViews($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeatureViewsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Lists FeatureStore instances in the current account. You can filter the instances by status.
     *
     * @param request - ListInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists FeatureStore instances in the current account. You can filter the instances by status.
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists LLM call configurations.
     *
     * @param request - ListLLMConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLLMConfigsResponse
     *
     * @param string                $InstanceId
     * @param ListLLMConfigsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListLLMConfigsResponse
     */
    public function listLLMConfigsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLLMConfigs',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/llmconfigs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLLMConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists LLM call configurations.
     *
     * @param request - ListLLMConfigsRequest
     *
     * @returns ListLLMConfigsResponse
     *
     * @param string                $InstanceId
     * @param ListLLMConfigsRequest $request
     *
     * @return ListLLMConfigsResponse
     */
    public function listLLMConfigs($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLLMConfigsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Lists label tables, filterable by project, name, owner, and ID.
     *
     * @param tmpReq - ListLabelTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLabelTablesResponse
     *
     * @param string                 $InstanceId
     * @param ListLabelTablesRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListLabelTablesResponse
     */
    public function listLabelTablesWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListLabelTablesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labelTableIds) {
            $request->labelTableIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelTableIds, 'LabelTableIds', 'simple');
        }

        $query = [];
        if (null !== $request->labelTableIdsShrink) {
            @$query['LabelTableIds'] = $request->labelTableIdsShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLabelTables',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/labeltables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLabelTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists label tables, filterable by project, name, owner, and ID.
     *
     * @param request - ListLabelTablesRequest
     *
     * @returns ListLabelTablesResponse
     *
     * @param string                 $InstanceId
     * @param ListLabelTablesRequest $request
     *
     * @return ListLabelTablesResponse
     */
    public function listLabelTables($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLabelTablesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Lists the available features for a model feature when you register a feature group (FG).
     *
     * @param request - ListModelFeatureAvailableFeaturesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelFeatureAvailableFeaturesResponse
     *
     * @param string                                   $InstanceId
     * @param string                                   $ModelFeatureId
     * @param ListModelFeatureAvailableFeaturesRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListModelFeatureAvailableFeaturesResponse
     */
    public function listModelFeatureAvailableFeaturesWithOptions($InstanceId, $ModelFeatureId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureName) {
            @$query['FeatureName'] = $request->featureName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelFeatureAvailableFeatures',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/modelfeatures/' . Url::percentEncode($ModelFeatureId) . '/availablefeatures',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModelFeatureAvailableFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the available features for a model feature when you register a feature group (FG).
     *
     * @param request - ListModelFeatureAvailableFeaturesRequest
     *
     * @returns ListModelFeatureAvailableFeaturesResponse
     *
     * @param string                                   $InstanceId
     * @param string                                   $ModelFeatureId
     * @param ListModelFeatureAvailableFeaturesRequest $request
     *
     * @return ListModelFeatureAvailableFeaturesResponse
     */
    public function listModelFeatureAvailableFeatures($InstanceId, $ModelFeatureId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelFeatureAvailableFeaturesWithOptions($InstanceId, $ModelFeatureId, $request, $headers, $runtime);
    }

    /**
     * Lists model features, with sorting, pagination, and filtering by project, name, creator, and ID.
     *
     * @param tmpReq - ListModelFeaturesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelFeaturesResponse
     *
     * @param string                   $InstanceId
     * @param ListModelFeaturesRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListModelFeaturesResponse
     */
    public function listModelFeaturesWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListModelFeaturesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->modelFeatureIds) {
            $request->modelFeatureIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modelFeatureIds, 'ModelFeatureIds', 'simple');
        }

        $query = [];
        if (null !== $request->modelFeatureIdsShrink) {
            @$query['ModelFeatureIds'] = $request->modelFeatureIdsShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelFeatures',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/modelfeatures',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModelFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists model features, with sorting, pagination, and filtering by project, name, creator, and ID.
     *
     * @param request - ListModelFeaturesRequest
     *
     * @returns ListModelFeaturesResponse
     *
     * @param string                   $InstanceId
     * @param ListModelFeaturesRequest $request
     *
     * @return ListModelFeaturesResponse
     */
    public function listModelFeatures($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelFeaturesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Lists all feature views and their available features in a project. Use this operation to select feature views and features for the CreateModelFeature and UpdateModelFeature operations.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectFeatureViewsResponse
     *
     * @param string         $InstanceId
     * @param string         $ProjectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListProjectFeatureViewsResponse
     */
    public function listProjectFeatureViewsWithOptions($InstanceId, $ProjectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListProjectFeatureViews',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/projects/' . Url::percentEncode($ProjectId) . '/featureviews',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectFeatureViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all feature views and their available features in a project. Use this operation to select feature views and features for the CreateModelFeature and UpdateModelFeature operations.
     *
     * @returns ListProjectFeatureViewsResponse
     *
     * @param string $InstanceId
     * @param string $ProjectId
     *
     * @return ListProjectFeatureViewsResponse
     */
    public function listProjectFeatureViews($InstanceId, $ProjectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectFeatureViewsWithOptions($InstanceId, $ProjectId, $headers, $runtime);
    }

    /**
     * Lists all features in a project. This operation supports filtering by name, alias, and feature view, as well as sorting and pagination. The response includes the data type, parent feature view, and the number of model features that reference each feature.
     *
     * @param request - ListProjectFeaturesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectFeaturesResponse
     *
     * @param string                     $InstanceId
     * @param string                     $ProjectId
     * @param ListProjectFeaturesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListProjectFeaturesResponse
     */
    public function listProjectFeaturesWithOptions($InstanceId, $ProjectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasName) {
            @$query['AliasName'] = $request->aliasName;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjectFeatures',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/projects/' . Url::percentEncode($ProjectId) . '/features',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all features in a project. This operation supports filtering by name, alias, and feature view, as well as sorting and pagination. The response includes the data type, parent feature view, and the number of model features that reference each feature.
     *
     * @param request - ListProjectFeaturesRequest
     *
     * @returns ListProjectFeaturesResponse
     *
     * @param string                     $InstanceId
     * @param string                     $ProjectId
     * @param ListProjectFeaturesRequest $request
     *
     * @return ListProjectFeaturesResponse
     */
    public function listProjectFeatures($InstanceId, $ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectFeaturesWithOptions($InstanceId, $ProjectId, $request, $headers, $runtime);
    }

    /**
     * Lists projects in a Feature Store instance, filterable by name, workspace, and owner.
     *
     * @param tmpReq - ListProjectsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectsResponse
     *
     * @param string              $InstanceId
     * @param ListProjectsRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProjectsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->projectIds) {
            $request->projectIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->projectIds, 'ProjectIds', 'simple');
        }

        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectIdsShrink) {
            @$query['ProjectIds'] = $request->projectIdsShrink;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjects',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/projects',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists projects in a Feature Store instance, filterable by name, workspace, and owner.
     *
     * @param request - ListProjectsRequest
     *
     * @returns ListProjectsResponse
     *
     * @param string              $InstanceId
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Lists the execution logs of an asynchronous task. This operation supports pagination.
     *
     * @param request - ListTaskLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTaskLogsResponse
     *
     * @param string              $InstanceId
     * @param string              $TaskId
     * @param ListTaskLogsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListTaskLogsResponse
     */
    public function listTaskLogsWithOptions($InstanceId, $TaskId, $request, $headers, $runtime)
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
            'action' => 'ListTaskLogs',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/tasks/' . Url::percentEncode($TaskId) . '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTaskLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the execution logs of an asynchronous task. This operation supports pagination.
     *
     * @param request - ListTaskLogsRequest
     *
     * @returns ListTaskLogsResponse
     *
     * @param string              $InstanceId
     * @param string              $TaskId
     * @param ListTaskLogsRequest $request
     *
     * @return ListTaskLogsResponse
     */
    public function listTaskLogs($InstanceId, $TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTaskLogsWithOptions($InstanceId, $TaskId, $request, $headers, $runtime);
    }

    /**
     * Lists asynchronous tasks for an instance, supporting pagination and filtering by project, object type, and status.
     *
     * @param tmpReq - ListTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTasksResponse
     *
     * @param string           $InstanceId
     * @param ListTasksRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskIds) {
            $request->taskIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'simple');
        }

        $query = [];
        if (null !== $request->objectId) {
            @$query['ObjectId'] = $request->objectId;
        }

        if (null !== $request->objectType) {
            @$query['ObjectType'] = $request->objectType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskIdsShrink) {
            @$query['TaskIds'] = $request->taskIdsShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTasks',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists asynchronous tasks for an instance, supporting pagination and filtering by project, object type, and status.
     *
     * @param request - ListTasksRequest
     *
     * @returns ListTasksResponse
     *
     * @param string           $InstanceId
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTasksWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a data synchronization task to synchronize data from a feature view\\"s offline table to its online store.
     *
     * @param request - PublishFeatureViewTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishFeatureViewTableResponse
     *
     * @param string                         $InstanceId
     * @param string                         $FeatureViewId
     * @param PublishFeatureViewTableRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return PublishFeatureViewTableResponse
     */
    public function publishFeatureViewTableWithOptions($InstanceId, $FeatureViewId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->eventTime) {
            @$body['EventTime'] = $request->eventTime;
        }

        if (null !== $request->mode) {
            @$body['Mode'] = $request->mode;
        }

        if (null !== $request->offlineToOnline) {
            @$body['OfflineToOnline'] = $request->offlineToOnline;
        }

        if (null !== $request->partitions) {
            @$body['Partitions'] = $request->partitions;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishFeatureViewTable',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureviews/' . Url::percentEncode($FeatureViewId) . '/action/publishtable',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PublishFeatureViewTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a data synchronization task to synchronize data from a feature view\\"s offline table to its online store.
     *
     * @param request - PublishFeatureViewTableRequest
     *
     * @returns PublishFeatureViewTableResponse
     *
     * @param string                         $InstanceId
     * @param string                         $FeatureViewId
     * @param PublishFeatureViewTableRequest $request
     *
     * @return PublishFeatureViewTableResponse
     */
    public function publishFeatureViewTable($InstanceId, $FeatureViewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishFeatureViewTableWithOptions($InstanceId, $FeatureViewId, $request, $headers, $runtime);
    }

    /**
     * Stops an asynchronous task. You can only stop tasks in the Initializing or Running state.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTaskResponse
     *
     * @param string         $InstanceId
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopTaskResponse
     */
    public function stopTaskWithOptions($InstanceId, $TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopTask',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/tasks/' . Url::percentEncode($TaskId) . '/action/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops an asynchronous task. You can only stop tasks in the Initializing or Running state.
     *
     * @returns StopTaskResponse
     *
     * @param string $InstanceId
     * @param string $TaskId
     *
     * @return StopTaskResponse
     */
    public function stopTask($InstanceId, $TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTaskWithOptions($InstanceId, $TaskId, $headers, $runtime);
    }

    /**
     * Updates information for a data source. Its type and workspace cannot be changed.
     *
     * @param request - UpdateDatasourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDatasourceResponse
     *
     * @param string                  $InstanceId
     * @param string                  $DatasourceId
     * @param UpdateDatasourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDatasourceResponse
     */
    public function updateDatasourceWithOptions($InstanceId, $DatasourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDatasource',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/datasources/' . Url::percentEncode($DatasourceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates information for a data source. Its type and workspace cannot be changed.
     *
     * @param request - UpdateDatasourceRequest
     *
     * @returns UpdateDatasourceResponse
     *
     * @param string                  $InstanceId
     * @param string                  $DatasourceId
     * @param UpdateDatasourceRequest $request
     *
     * @return UpdateDatasourceResponse
     */
    public function updateDatasource($InstanceId, $DatasourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDatasourceWithOptions($InstanceId, $DatasourceId, $request, $headers, $runtime);
    }

    /**
     * Updates a feature view.
     *
     * @param request - UpdateFeatureViewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFeatureViewResponse
     *
     * @param string                   $InstanceId
     * @param string                   $FeatureViewId
     * @param UpdateFeatureViewRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateFeatureViewResponse
     */
    public function updateFeatureViewWithOptions($InstanceId, $FeatureViewId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fields) {
            @$body['Fields'] = $request->fields;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFeatureView',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureviews/' . Url::percentEncode($FeatureViewId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFeatureViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a feature view.
     *
     * @param request - UpdateFeatureViewRequest
     *
     * @returns UpdateFeatureViewResponse
     *
     * @param string                   $InstanceId
     * @param string                   $FeatureViewId
     * @param UpdateFeatureViewRequest $request
     *
     * @return UpdateFeatureViewResponse
     */
    public function updateFeatureView($InstanceId, $FeatureViewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFeatureViewWithOptions($InstanceId, $FeatureViewId, $request, $headers, $runtime);
    }

    /**
     * Updates the large language model (LLM) call configuration. If you do not specify the `ApiKey` parameter, the existing key is retained. After the update, the system revalidates the model\\"s availability and its parameters.
     *
     * @param request - UpdateLLMConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLLMConfigResponse
     *
     * @param string                 $InstanceId
     * @param string                 $LLMConfigId
     * @param UpdateLLMConfigRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateLLMConfigResponse
     */
    public function updateLLMConfigWithOptions($InstanceId, $LLMConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiKey) {
            @$body['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->baseUrl) {
            @$body['BaseUrl'] = $request->baseUrl;
        }

        if (null !== $request->batchSize) {
            @$body['BatchSize'] = $request->batchSize;
        }

        if (null !== $request->embeddingDimension) {
            @$body['EmbeddingDimension'] = $request->embeddingDimension;
        }

        if (null !== $request->enableFusion) {
            @$body['EnableFusion'] = $request->enableFusion;
        }

        if (null !== $request->maxTokens) {
            @$body['MaxTokens'] = $request->maxTokens;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->modelType) {
            @$body['ModelType'] = $request->modelType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->rps) {
            @$body['Rps'] = $request->rps;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLLMConfig',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/llmconfigs/' . Url::percentEncode($LLMConfigId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLLMConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the large language model (LLM) call configuration. If you do not specify the `ApiKey` parameter, the existing key is retained. After the update, the system revalidates the model\\"s availability and its parameters.
     *
     * @param request - UpdateLLMConfigRequest
     *
     * @returns UpdateLLMConfigResponse
     *
     * @param string                 $InstanceId
     * @param string                 $LLMConfigId
     * @param UpdateLLMConfigRequest $request
     *
     * @return UpdateLLMConfigResponse
     */
    public function updateLLMConfig($InstanceId, $LLMConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLLMConfigWithOptions($InstanceId, $LLMConfigId, $request, $headers, $runtime);
    }

    /**
     * Updates the attributes of fields in a label table. You can modify the attributes of existing fields, but you cannot add or delete fields, or change field names and types.
     *
     * @param request - UpdateLabelTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLabelTableResponse
     *
     * @param string                  $InstanceId
     * @param string                  $LabelTableId
     * @param UpdateLabelTableRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateLabelTableResponse
     */
    public function updateLabelTableWithOptions($InstanceId, $LabelTableId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasourceId) {
            @$body['DatasourceId'] = $request->datasourceId;
        }

        if (null !== $request->fields) {
            @$body['Fields'] = $request->fields;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLabelTable',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/labeltables/' . Url::percentEncode($LabelTableId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLabelTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the attributes of fields in a label table. You can modify the attributes of existing fields, but you cannot add or delete fields, or change field names and types.
     *
     * @param request - UpdateLabelTableRequest
     *
     * @returns UpdateLabelTableResponse
     *
     * @param string                  $InstanceId
     * @param string                  $LabelTableId
     * @param UpdateLabelTableRequest $request
     *
     * @return UpdateLabelTableResponse
     */
    public function updateLabelTable($InstanceId, $LabelTableId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLabelTableWithOptions($InstanceId, $LabelTableId, $request, $headers, $runtime);
    }

    /**
     * Updates the information of a model feature, including the associated label table, selected feature fields, and conflict priority policy. The update is a full replacement. The specified Features value overwrites the existing value.
     *
     * @param request - UpdateModelFeatureRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelFeatureResponse
     *
     * @param string                    $InstanceId
     * @param string                    $ModelFeatureId
     * @param UpdateModelFeatureRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateModelFeatureResponse
     */
    public function updateModelFeatureWithOptions($InstanceId, $ModelFeatureId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->features) {
            @$body['Features'] = $request->features;
        }

        if (null !== $request->labelPriorityLevel) {
            @$body['LabelPriorityLevel'] = $request->labelPriorityLevel;
        }

        if (null !== $request->labelTableId) {
            @$body['LabelTableId'] = $request->labelTableId;
        }

        if (null !== $request->sequenceFeatureViewIds) {
            @$body['SequenceFeatureViewIds'] = $request->sequenceFeatureViewIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateModelFeature',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/modelfeatures/' . Url::percentEncode($ModelFeatureId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateModelFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information of a model feature, including the associated label table, selected feature fields, and conflict priority policy. The update is a full replacement. The specified Features value overwrites the existing value.
     *
     * @param request - UpdateModelFeatureRequest
     *
     * @returns UpdateModelFeatureResponse
     *
     * @param string                    $InstanceId
     * @param string                    $ModelFeatureId
     * @param UpdateModelFeatureRequest $request
     *
     * @return UpdateModelFeatureResponse
     */
    public function updateModelFeature($InstanceId, $ModelFeatureId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModelFeatureWithOptions($InstanceId, $ModelFeatureId, $request, $headers, $runtime);
    }

    /**
     * Update the FG feature configuration for a model feature.
     *
     * @param request - UpdateModelFeatureFGFeatureRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelFeatureFGFeatureResponse
     *
     * @param string                             $InstanceId
     * @param string                             $ModelFeatureId
     * @param UpdateModelFeatureFGFeatureRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateModelFeatureFGFeatureResponse
     */
    public function updateModelFeatureFGFeatureWithOptions($InstanceId, $ModelFeatureId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lookupFeatures) {
            @$body['LookupFeatures'] = $request->lookupFeatures;
        }

        if (null !== $request->rawFeatures) {
            @$body['RawFeatures'] = $request->rawFeatures;
        }

        if (null !== $request->reserves) {
            @$body['Reserves'] = $request->reserves;
        }

        if (null !== $request->sequenceFeatures) {
            @$body['SequenceFeatures'] = $request->sequenceFeatures;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateModelFeatureFGFeature',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/modelfeatures/' . Url::percentEncode($ModelFeatureId) . '/fgfeature',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateModelFeatureFGFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the FG feature configuration for a model feature.
     *
     * @param request - UpdateModelFeatureFGFeatureRequest
     *
     * @returns UpdateModelFeatureFGFeatureResponse
     *
     * @param string                             $InstanceId
     * @param string                             $ModelFeatureId
     * @param UpdateModelFeatureFGFeatureRequest $request
     *
     * @return UpdateModelFeatureFGFeatureResponse
     */
    public function updateModelFeatureFGFeature($InstanceId, $ModelFeatureId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModelFeatureFGFeatureWithOptions($InstanceId, $ModelFeatureId, $request, $headers, $runtime);
    }

    /**
     * Updates the description of a project.
     *
     * @param request - UpdateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectResponse
     *
     * @param string               $InstanceId
     * @param string               $ProjectId
     * @param UpdateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($InstanceId, $ProjectId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProject',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/projects/' . Url::percentEncode($ProjectId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the description of a project.
     *
     * @param request - UpdateProjectRequest
     *
     * @returns UpdateProjectResponse
     *
     * @param string               $InstanceId
     * @param string               $ProjectId
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($InstanceId, $ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($InstanceId, $ProjectId, $request, $headers, $runtime);
    }

    /**
     * Imports data from a URL to the offline table of a feature view. This is an asynchronous operation.
     *
     * @param request - WriteFeatureViewTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WriteFeatureViewTableResponse
     *
     * @param string                       $InstanceId
     * @param string                       $FeatureViewId
     * @param WriteFeatureViewTableRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return WriteFeatureViewTableResponse
     */
    public function writeFeatureViewTableWithOptions($InstanceId, $FeatureViewId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mode) {
            @$body['Mode'] = $request->mode;
        }

        if (null !== $request->partitions) {
            @$body['Partitions'] = $request->partitions;
        }

        if (null !== $request->urlDatasource) {
            @$body['UrlDatasource'] = $request->urlDatasource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'WriteFeatureViewTable',
            'version' => '2023-06-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/featureviews/' . Url::percentEncode($FeatureViewId) . '/action/writetable',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return WriteFeatureViewTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports data from a URL to the offline table of a feature view. This is an asynchronous operation.
     *
     * @param request - WriteFeatureViewTableRequest
     *
     * @returns WriteFeatureViewTableResponse
     *
     * @param string                       $InstanceId
     * @param string                       $FeatureViewId
     * @param WriteFeatureViewTableRequest $request
     *
     * @return WriteFeatureViewTableResponse
     */
    public function writeFeatureViewTable($InstanceId, $FeatureViewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->writeFeatureViewTableWithOptions($InstanceId, $FeatureViewId, $request, $headers, $runtime);
    }
}
