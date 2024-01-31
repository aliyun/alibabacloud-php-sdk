<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ChangeProjectFeatureEntityHotIdVersionRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ChangeProjectFeatureEntityHotIdVersionResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CheckInstanceDatasourceRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CheckInstanceDatasourceResponse;
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
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateModelFeatureRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateModelFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateModelFeatureTrainingSetFGTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateProjectRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateProjectResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateServiceIdentityRoleRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateServiceIdentityRoleResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteDatasourceResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteFeatureEntityResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteFeatureViewResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteLabelTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteModelFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetFGTableRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetFGTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetTableRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetDatasourceResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetDatasourceTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetFeatureEntityResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetFeatureViewResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetInstanceResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetLabelTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureFGFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureFGInfoResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetProjectFeatureEntityHotIdsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetProjectFeatureEntityResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetProjectFeatureViewResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetProjectModelFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetProjectResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetServiceIdentityRoleResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetTaskResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourcesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourcesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceTablesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceTablesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureEntitiesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureEntitiesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureEntitiesShrinkRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewFieldRelationshipsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewRelationshipsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewsRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewsShrinkRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListInstancesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListInstancesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListLabelTablesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListLabelTablesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListLabelTablesShrinkRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeatureAvailableFeaturesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeatureAvailableFeaturesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeaturesRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeaturesResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeaturesShrinkRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeatureViewOwnersResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeatureViewsResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeatureViewTagsResponse;
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
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateDatasourceRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateDatasourceResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateLabelTableRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateLabelTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGInfoRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGInfoResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\WriteFeatureViewTableRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\WriteFeatureViewTableResponse;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\WriteProjectFeatureEntityHotIdsRequest;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\WriteProjectFeatureEntityHotIdsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param string                                        $InstanceId
     * @param string                                        $ProjectId
     * @param string                                        $FeatureEntityName
     * @param ChangeProjectFeatureEntityHotIdVersionRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return ChangeProjectFeatureEntityHotIdVersionResponse
     */
    public function changeProjectFeatureEntityHotIdVersionWithOptions($InstanceId, $ProjectId, $FeatureEntityName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->version)) {
            $body['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeProjectFeatureEntityHotIdVersion',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/featureentities/' . OpenApiUtilClient::getEncodeParam($FeatureEntityName) . '/action/changehotidversion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ChangeProjectFeatureEntityHotIdVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                        $InstanceId
     * @param string                                        $ProjectId
     * @param string                                        $FeatureEntityName
     * @param ChangeProjectFeatureEntityHotIdVersionRequest $request
     *
     * @return ChangeProjectFeatureEntityHotIdVersionResponse
     */
    public function changeProjectFeatureEntityHotIdVersion($InstanceId, $ProjectId, $FeatureEntityName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeProjectFeatureEntityHotIdVersionWithOptions($InstanceId, $ProjectId, $FeatureEntityName, $request, $headers, $runtime);
    }

    /**
     * @param string                         $InstanceId
     * @param CheckInstanceDatasourceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckInstanceDatasourceResponse
     */
    public function checkInstanceDatasourceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckInstanceDatasource',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/action/checkdatasource',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckInstanceDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                  $InstanceId
     * @param CreateDatasourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDatasourceResponse
     */
    public function createDatasourceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatasource',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/datasources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $InstanceId
     * @param CreateFeatureEntityRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateFeatureEntityResponse
     */
    public function createFeatureEntityWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->joinId)) {
            $body['JoinId'] = $request->joinId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFeatureEntity',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/featureentities',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFeatureEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                   $InstanceId
     * @param CreateFeatureViewRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateFeatureViewResponse
     */
    public function createFeatureViewWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->featureEntityId)) {
            $body['FeatureEntityId'] = $request->featureEntityId;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->registerDatasourceId)) {
            $body['RegisterDatasourceId'] = $request->registerDatasourceId;
        }
        if (!Utils::isUnset($request->registerTable)) {
            $body['RegisterTable'] = $request->registerTable;
        }
        if (!Utils::isUnset($request->syncOnlineTable)) {
            $body['SyncOnlineTable'] = $request->syncOnlineTable;
        }
        if (!Utils::isUnset($request->TTL)) {
            $body['TTL'] = $request->TTL;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->writeMethod)) {
            $body['WriteMethod'] = $request->writeMethod;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFeatureView',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/featureviews',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFeatureViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                  $InstanceId
     * @param CreateLabelTableRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLabelTableResponse
     */
    public function createLabelTableWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasourceId)) {
            $body['DatasourceId'] = $request->datasourceId;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLabelTable',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/labeltables',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateLabelTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $InstanceId
     * @param CreateModelFeatureRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateModelFeatureResponse
     */
    public function createModelFeatureWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->features)) {
            $body['Features'] = $request->features;
        }
        if (!Utils::isUnset($request->labelTableId)) {
            $body['LabelTableId'] = $request->labelTableId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sequenceFeatureViewIds)) {
            $body['SequenceFeatureViewIds'] = $request->sequenceFeatureViewIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateModelFeature',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateModelFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string         $ModelFeatureId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateModelFeatureTrainingSetFGTableResponse
     */
    public function createModelFeatureTrainingSetFGTableWithOptions($InstanceId, $ModelFeatureId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateModelFeatureTrainingSetFGTable',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures/' . OpenApiUtilClient::getEncodeParam($ModelFeatureId) . '/trainingsetfgtable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateModelFeatureTrainingSetFGTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $ModelFeatureId
     *
     * @return CreateModelFeatureTrainingSetFGTableResponse
     */
    public function createModelFeatureTrainingSetFGTable($InstanceId, $ModelFeatureId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelFeatureTrainingSetFGTableWithOptions($InstanceId, $ModelFeatureId, $headers, $runtime);
    }

    /**
     * @param string               $InstanceId
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->offlineDatasourceId)) {
            $body['OfflineDatasourceId'] = $request->offlineDatasourceId;
        }
        if (!Utils::isUnset($request->offlineLifeCycle)) {
            $body['OfflineLifeCycle'] = $request->offlineLifeCycle;
        }
        if (!Utils::isUnset($request->onlineDatasourceId)) {
            $body['OnlineDatasourceId'] = $request->onlineDatasourceId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateServiceIdentityRoleRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateServiceIdentityRoleResponse
     */
    public function createServiceIdentityRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleName)) {
            $body['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceIdentityRole',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/serviceidentityroles',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceIdentityRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteDatasource',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/datasources/' . OpenApiUtilClient::getEncodeParam($DatasourceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteFeatureEntity',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/featureentities/' . OpenApiUtilClient::getEncodeParam($FeatureEntityId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFeatureEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteFeatureView',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/featureviews/' . OpenApiUtilClient::getEncodeParam($FeatureViewId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFeatureViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteLabelTable',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/labeltables/' . OpenApiUtilClient::getEncodeParam($LabelTableId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteLabelTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteModelFeature',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures/' . OpenApiUtilClient::getEncodeParam($ModelFeatureId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteModelFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteProject',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                                      $InstanceId
     * @param string                                      $ModelFeatureId
     * @param ExportModelFeatureTrainingSetFGTableRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ExportModelFeatureTrainingSetFGTableResponse
     */
    public function exportModelFeatureTrainingSetFGTableWithOptions($InstanceId, $ModelFeatureId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->trainingSetFgConfig)) {
            $body['TrainingSetFgConfig'] = $request->trainingSetFgConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportModelFeatureTrainingSetFGTable',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures/' . OpenApiUtilClient::getEncodeParam($ModelFeatureId) . '/action/exporttrainingsetfgtable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportModelFeatureTrainingSetFGTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                      $InstanceId
     * @param string                                      $ModelFeatureId
     * @param ExportModelFeatureTrainingSetFGTableRequest $request
     *
     * @return ExportModelFeatureTrainingSetFGTableResponse
     */
    public function exportModelFeatureTrainingSetFGTable($InstanceId, $ModelFeatureId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportModelFeatureTrainingSetFGTableWithOptions($InstanceId, $ModelFeatureId, $request, $headers, $runtime);
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->featureViewConfig)) {
            $body['FeatureViewConfig'] = $request->featureViewConfig;
        }
        if (!Utils::isUnset($request->labelInputConfig)) {
            $body['LabelInputConfig'] = $request->labelInputConfig;
        }
        if (!Utils::isUnset($request->trainingSetConfig)) {
            $body['TrainingSetConfig'] = $request->trainingSetConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportModelFeatureTrainingSetTable',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures/' . OpenApiUtilClient::getEncodeParam($ModelFeatureId) . '/action/exporttrainingsettable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportModelFeatureTrainingSetTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetDatasource',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/datasources/' . OpenApiUtilClient::getEncodeParam($DatasourceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetDatasourceTable',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/datasources/' . OpenApiUtilClient::getEncodeParam($DatasourceId) . '/tables/' . OpenApiUtilClient::getEncodeParam($TableName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDatasourceTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetFeatureEntity',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/featureentities/' . OpenApiUtilClient::getEncodeParam($FeatureEntityId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFeatureEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetFeatureView',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/featureviews/' . OpenApiUtilClient::getEncodeParam($FeatureViewId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFeatureViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetInstance',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetLabelTable',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/labeltables/' . OpenApiUtilClient::getEncodeParam($LabelTableId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLabelTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetModelFeature',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures/' . OpenApiUtilClient::getEncodeParam($ModelFeatureId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetModelFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetModelFeatureFGFeature',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures/' . OpenApiUtilClient::getEncodeParam($ModelFeatureId) . '/fgfeature',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetModelFeatureFGFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetModelFeatureFGInfo',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures/' . OpenApiUtilClient::getEncodeParam($ModelFeatureId) . '/fginfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetModelFeatureFGInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetProject',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetProjectFeatureEntity',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/featureentities/' . OpenApiUtilClient::getEncodeParam($FeatureEntityName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectFeatureEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string         $ProjectId
     * @param string         $NextSeqNumber
     * @param string         $FeatureEntityName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectFeatureEntityHotIdsResponse
     */
    public function getProjectFeatureEntityHotIdsWithOptions($InstanceId, $ProjectId, $NextSeqNumber, $FeatureEntityName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProjectFeatureEntityHotIds',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/featureentities/' . OpenApiUtilClient::getEncodeParam($FeatureEntityName) . '/hotids/' . OpenApiUtilClient::getEncodeParam($NextSeqNumber) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectFeatureEntityHotIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $ProjectId
     * @param string $NextSeqNumber
     * @param string $FeatureEntityName
     *
     * @return GetProjectFeatureEntityHotIdsResponse
     */
    public function getProjectFeatureEntityHotIds($InstanceId, $ProjectId, $NextSeqNumber, $FeatureEntityName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectFeatureEntityHotIdsWithOptions($InstanceId, $ProjectId, $NextSeqNumber, $FeatureEntityName, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $ProjectId
     * @param string         $FeatureViewName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectFeatureViewResponse
     */
    public function getProjectFeatureViewWithOptions($InstanceId, $ProjectId, $FeatureViewName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProjectFeatureView',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/featureviews/' . OpenApiUtilClient::getEncodeParam($FeatureViewName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectFeatureViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $ProjectId
     * @param string $FeatureViewName
     *
     * @return GetProjectFeatureViewResponse
     */
    public function getProjectFeatureView($InstanceId, $ProjectId, $FeatureViewName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectFeatureViewWithOptions($InstanceId, $ProjectId, $FeatureViewName, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $ProjectId
     * @param string         $ModelFeatureName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectModelFeatureResponse
     */
    public function getProjectModelFeatureWithOptions($InstanceId, $ProjectId, $ModelFeatureName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProjectModelFeature',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/modelfeatures/' . OpenApiUtilClient::getEncodeParam($ModelFeatureName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectModelFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $ProjectId
     * @param string $ModelFeatureName
     *
     * @return GetProjectModelFeatureResponse
     */
    public function getProjectModelFeature($InstanceId, $ProjectId, $ModelFeatureName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectModelFeatureWithOptions($InstanceId, $ProjectId, $ModelFeatureName, $headers, $runtime);
    }

    /**
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
            'action'      => 'GetServiceIdentityRole',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/serviceidentityroles/' . OpenApiUtilClient::getEncodeParam($RoleName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceIdentityRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetTask',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatasourceTables',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/datasources/' . OpenApiUtilClient::getEncodeParam($DatasourceId) . '/tables',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDatasourceTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param ListDatasourcesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDatasourcesResponse
     */
    public function listDatasourcesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatasources',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/datasources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDatasourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $InstanceId
     * @param ListFeatureEntitiesRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListFeatureEntitiesResponse
     */
    public function listFeatureEntitiesWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListFeatureEntitiesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->featureEntityIds)) {
            $request->featureEntityIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->featureEntityIds, 'FeatureEntityIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->featureEntityIdsShrink)) {
            $query['FeatureEntityIds'] = $request->featureEntityIdsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFeatureEntities',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/featureentities',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFeatureEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'ListFeatureViewFieldRelationships',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/featureviews/' . OpenApiUtilClient::getEncodeParam($FeatureViewId) . '/fields/' . OpenApiUtilClient::getEncodeParam($FieldName) . '/relationships',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFeatureViewFieldRelationshipsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'ListFeatureViewRelationships',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/featureviews/' . OpenApiUtilClient::getEncodeParam($FeatureViewId) . '/relationships',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFeatureViewRelationshipsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                  $InstanceId
     * @param ListFeatureViewsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListFeatureViewsResponse
     */
    public function listFeatureViewsWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListFeatureViewsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->featureViewIds)) {
            $request->featureViewIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->featureViewIds, 'FeatureViewIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->featureName)) {
            $query['FeatureName'] = $request->featureName;
        }
        if (!Utils::isUnset($request->featureViewIdsShrink)) {
            $query['FeatureViewIds'] = $request->featureViewIdsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFeatureViews',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/featureviews',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFeatureViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param ListLabelTablesRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListLabelTablesResponse
     */
    public function listLabelTablesWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListLabelTablesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labelTableIds)) {
            $request->labelTableIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelTableIds, 'LabelTableIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->labelTableIdsShrink)) {
            $query['LabelTableIds'] = $request->labelTableIdsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLabelTables',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/labeltables',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLabelTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->featureName)) {
            $query['FeatureName'] = $request->featureName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModelFeatureAvailableFeatures',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures/' . OpenApiUtilClient::getEncodeParam($ModelFeatureId) . '/availablefeatures',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListModelFeatureAvailableFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                   $InstanceId
     * @param ListModelFeaturesRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListModelFeaturesResponse
     */
    public function listModelFeaturesWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListModelFeaturesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->modelFeatureIds)) {
            $request->modelFeatureIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->modelFeatureIds, 'ModelFeatureIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->modelFeatureIdsShrink)) {
            $query['ModelFeatureIds'] = $request->modelFeatureIdsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModelFeatures',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListModelFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string         $ProjectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListProjectFeatureViewOwnersResponse
     */
    public function listProjectFeatureViewOwnersWithOptions($InstanceId, $ProjectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListProjectFeatureViewOwners',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/featureviewowners',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectFeatureViewOwnersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $ProjectId
     *
     * @return ListProjectFeatureViewOwnersResponse
     */
    public function listProjectFeatureViewOwners($InstanceId, $ProjectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectFeatureViewOwnersWithOptions($InstanceId, $ProjectId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $ProjectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListProjectFeatureViewTagsResponse
     */
    public function listProjectFeatureViewTagsWithOptions($InstanceId, $ProjectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListProjectFeatureViewTags',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/featureviewtags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectFeatureViewTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $ProjectId
     *
     * @return ListProjectFeatureViewTagsResponse
     */
    public function listProjectFeatureViewTags($InstanceId, $ProjectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectFeatureViewTagsWithOptions($InstanceId, $ProjectId, $headers, $runtime);
    }

    /**
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
            'action'      => 'ListProjectFeatureViews',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/featureviews',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectFeatureViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string              $InstanceId
     * @param ListProjectsRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListProjectsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->projectIds)) {
            $request->projectIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->projectIds, 'ProjectIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectIdsShrink)) {
            $query['ProjectIds'] = $request->projectIdsShrink;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjects',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'ListTaskLogs',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTaskLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string           $InstanceId
     * @param ListTasksRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTasksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskIds)) {
            $request->taskIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskIdsShrink)) {
            $query['TaskIds'] = $request->taskIdsShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->eventTime)) {
            $body['EventTime'] = $request->eventTime;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->offlineToOnline)) {
            $body['OfflineToOnline'] = $request->offlineToOnline;
        }
        if (!Utils::isUnset($request->partitions)) {
            $body['Partitions'] = $request->partitions;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishFeatureViewTable',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/featureviews/' . OpenApiUtilClient::getEncodeParam($FeatureViewId) . '/action/publishtable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishFeatureViewTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDatasource',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/datasources/' . OpenApiUtilClient::getEncodeParam($DatasourceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasourceId)) {
            $body['DatasourceId'] = $request->datasourceId;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLabelTable',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/labeltables/' . OpenApiUtilClient::getEncodeParam($LabelTableId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLabelTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->features)) {
            $body['Features'] = $request->features;
        }
        if (!Utils::isUnset($request->labelTableId)) {
            $body['LabelTableId'] = $request->labelTableId;
        }
        if (!Utils::isUnset($request->sequenceFeatureViewIds)) {
            $body['SequenceFeatureViewIds'] = $request->sequenceFeatureViewIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateModelFeature',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures/' . OpenApiUtilClient::getEncodeParam($ModelFeatureId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateModelFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->lookupFeatures)) {
            $body['LookupFeatures'] = $request->lookupFeatures;
        }
        if (!Utils::isUnset($request->rawFeatures)) {
            $body['RawFeatures'] = $request->rawFeatures;
        }
        if (!Utils::isUnset($request->reserves)) {
            $body['Reserves'] = $request->reserves;
        }
        if (!Utils::isUnset($request->sequenceFeatures)) {
            $body['SequenceFeatures'] = $request->sequenceFeatures;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateModelFeatureFGFeature',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures/' . OpenApiUtilClient::getEncodeParam($ModelFeatureId) . '/fgfeature',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateModelFeatureFGFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                          $InstanceId
     * @param string                          $ModelFeatureId
     * @param UpdateModelFeatureFGInfoRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateModelFeatureFGInfoResponse
     */
    public function updateModelFeatureFGInfoWithOptions($InstanceId, $ModelFeatureId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateModelFeatureFGInfo',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/modelfeatures/' . OpenApiUtilClient::getEncodeParam($ModelFeatureId) . '/fginfo',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateModelFeatureFGInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $InstanceId
     * @param string                          $ModelFeatureId
     * @param UpdateModelFeatureFGInfoRequest $request
     *
     * @return UpdateModelFeatureFGInfoResponse
     */
    public function updateModelFeatureFGInfo($InstanceId, $ModelFeatureId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModelFeatureFGInfoWithOptions($InstanceId, $ModelFeatureId, $request, $headers, $runtime);
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProject',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->partitions)) {
            $body['Partitions'] = $request->partitions;
        }
        if (!Utils::isUnset($request->urlDatasource)) {
            $body['UrlDatasource'] = $request->urlDatasource;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'WriteFeatureViewTable',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/featureviews/' . OpenApiUtilClient::getEncodeParam($FeatureViewId) . '/action/writetable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return WriteFeatureViewTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

    /**
     * @param string                                 $InstanceId
     * @param string                                 $ProjectId
     * @param string                                 $FeatureEntityName
     * @param WriteProjectFeatureEntityHotIdsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return WriteProjectFeatureEntityHotIdsResponse
     */
    public function writeProjectFeatureEntityHotIdsWithOptions($InstanceId, $ProjectId, $FeatureEntityName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotIds)) {
            $body['HotIds'] = $request->hotIds;
        }
        if (!Utils::isUnset($request->version)) {
            $body['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'WriteProjectFeatureEntityHotIds',
            'version'     => '2023-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/featureentities/' . OpenApiUtilClient::getEncodeParam($FeatureEntityName) . '/action/writehotids',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return WriteProjectFeatureEntityHotIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                 $InstanceId
     * @param string                                 $ProjectId
     * @param string                                 $FeatureEntityName
     * @param WriteProjectFeatureEntityHotIdsRequest $request
     *
     * @return WriteProjectFeatureEntityHotIdsResponse
     */
    public function writeProjectFeatureEntityHotIds($InstanceId, $ProjectId, $FeatureEntityName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->writeProjectFeatureEntityHotIdsWithOptions($InstanceId, $ProjectId, $FeatureEntityName, $request, $headers, $runtime);
    }
}
