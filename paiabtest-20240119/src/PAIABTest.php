<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CheckLayerRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CheckLayerResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateCrowdRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateCrowdResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateDomainRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateDomainResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateExperimentRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateExperimentResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateExperimentVersionRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateExperimentVersionResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateFeatureRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateFeatureResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateLayerRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateLayerResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateMetricGroupRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateMetricGroupResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateMetricRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateMetricResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateProjectRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateProjectResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateTableMetaRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\CreateTableMetaResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\DeleteCrowdResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\DeleteExperimentResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\DeleteExperimentVersionResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\DeleteFeatureResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\DeleteLayerResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\DeleteMetricGroupResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\DeleteMetricResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\DeleteTableMetaResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\GetCrowdResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\GetDomainRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\GetDomainResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\GetExperimentResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\GetExperimentVersionResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\GetFeatureResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\GetLayerResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\GetMetricGroupResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\GetMetricResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\GetProjectResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\GetTableMetaResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListCrowdsRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListCrowdsResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListDomainsRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListDomainsResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListExperimentsRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListExperimentsResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListExperimentVersionsRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListExperimentVersionsResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListFeaturesRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListFeaturesResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListLayersRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListLayersResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListMetricGroupsRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListMetricGroupsResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListMetricsRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListMetricsResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListProjectsRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListProjectsResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListTableMetasRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListTableMetasResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\PushAllExperimentVersionRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\PushAllExperimentVersionResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\StartExperimentResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\StopExperimentResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateCrowdRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateCrowdResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateDomainRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateDomainResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateExperimentRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateExperimentResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateExperimentVersionRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateExperimentVersionResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateFeatureRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateFeatureResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateLayerRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateLayerResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateMetricGroupRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateMetricGroupResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateMetricRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateMetricResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateTableMetaRequest;
use AlibabaCloud\SDK\PAIABTest\V20240119\Models\UpdateTableMetaResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

/**
 * @internal
 * @coversNothing
 */
class PAIABTest extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paiabtest', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 对层上的参数进行校验
     *  *
     * @param string            $LayerId
     * @param CheckLayerRequest $request CheckLayerRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckLayerResponse CheckLayerResponse
     */
    public function checkLayerWithOptions($LayerId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->paramNames)) {
            $query['ParamNames'] = $request->paramNames;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckLayer',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/layers/' . OpenApiUtilClient::getEncodeParam($LayerId) . '/action/check',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 对层上的参数进行校验
     *  *
     * @param string            $LayerId
     * @param CheckLayerRequest $request CheckLayerRequest
     *
     * @return CheckLayerResponse CheckLayerResponse
     */
    public function checkLayer($LayerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkLayerWithOptions($LayerId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建人群
     *  *
     * @param CreateCrowdRequest $request CreateCrowdRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCrowdResponse CreateCrowdResponse
     */
    public function createCrowdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCrowd',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建人群
     *  *
     * @param CreateCrowdRequest $request CreateCrowdRequest
     *
     * @return CreateCrowdResponse CreateCrowdResponse
     */
    public function createCrowd($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCrowdWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建实验域
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomainWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bucketType)) {
            $body['BucketType'] = $request->bucketType;
        }
        if (!Utils::isUnset($request->condition)) {
            $body['Condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->crowdIds)) {
            $body['CrowdIds'] = $request->crowdIds;
        }
        if (!Utils::isUnset($request->debugUsers)) {
            $body['DebugUsers'] = $request->debugUsers;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->flow)) {
            $body['Flow'] = $request->flow;
        }
        if (!Utils::isUnset($request->layerId)) {
            $body['LayerId'] = $request->layerId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDomain',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/domains',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实验域
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建实验
     *  *
     * @param CreateExperimentRequest $request CreateExperimentRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExperimentResponse CreateExperimentResponse
     */
    public function createExperimentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bucketType)) {
            $body['BucketType'] = $request->bucketType;
        }
        if (!Utils::isUnset($request->condition)) {
            $body['Condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->coreMetricId)) {
            $body['CoreMetricId'] = $request->coreMetricId;
        }
        if (!Utils::isUnset($request->crowdIds)) {
            $body['CrowdIds'] = $request->crowdIds;
        }
        if (!Utils::isUnset($request->debugUsers)) {
            $body['DebugUsers'] = $request->debugUsers;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->flow)) {
            $body['Flow'] = $request->flow;
        }
        if (!Utils::isUnset($request->focusMetricIds)) {
            $body['FocusMetricIds'] = $request->focusMetricIds;
        }
        if (!Utils::isUnset($request->layerId)) {
            $body['LayerId'] = $request->layerId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateExperiment',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实验
     *  *
     * @param CreateExperimentRequest $request CreateExperimentRequest
     *
     * @return CreateExperimentResponse CreateExperimentResponse
     */
    public function createExperiment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建实验版本
     *  *
     * @param CreateExperimentVersionRequest $request CreateExperimentVersionRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateExperimentVersionResponse CreateExperimentVersionResponse
     */
    public function createExperimentVersionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->crowdIds)) {
            $body['CrowdIds'] = $request->crowdIds;
        }
        if (!Utils::isUnset($request->debugUsers)) {
            $body['DebugUsers'] = $request->debugUsers;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->experimentId)) {
            $body['ExperimentId'] = $request->experimentId;
        }
        if (!Utils::isUnset($request->flow)) {
            $body['Flow'] = $request->flow;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateExperimentVersion',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentversions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateExperimentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实验版本
     *  *
     * @param CreateExperimentVersionRequest $request CreateExperimentVersionRequest
     *
     * @return CreateExperimentVersionResponse CreateExperimentVersionResponse
     */
    public function createExperimentVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentVersionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建Feature
     *  *
     * @param CreateFeatureRequest $request CreateFeatureRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFeatureResponse CreateFeatureResponse
     */
    public function createFeatureWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFeature',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/features',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建Feature
     *  *
     * @param CreateFeatureRequest $request CreateFeatureRequest
     *
     * @return CreateFeatureResponse CreateFeatureResponse
     */
    public function createFeature($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFeatureWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建实验层
     *  *
     * @param CreateLayerRequest $request CreateLayerRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLayerResponse CreateLayerResponse
     */
    public function createLayerWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->domainId)) {
            $body['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLayer',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/layers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实验层
     *  *
     * @param CreateLayerRequest $request CreateLayerRequest
     *
     * @return CreateLayerResponse CreateLayerResponse
     */
    public function createLayer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLayerWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建指标
     *  *
     * @param CreateMetricRequest $request CreateMetricRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMetricResponse CreateMetricResponse
     */
    public function createMetricWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->definition)) {
            $body['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->metricGroupId)) {
            $body['MetricGroupId'] = $request->metricGroupId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sourceTableMetaId)) {
            $body['SourceTableMetaId'] = $request->sourceTableMetaId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMetric',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/metrics',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建指标
     *  *
     * @param CreateMetricRequest $request CreateMetricRequest
     *
     * @return CreateMetricResponse CreateMetricResponse
     */
    public function createMetric($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMetricWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建指标组
     *  *
     * @param CreateMetricGroupRequest $request CreateMetricGroupRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMetricGroupResponse CreateMetricGroupResponse
     */
    public function createMetricGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMetricGroup',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/metricgroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建指标组
     *  *
     * @param CreateMetricGroupRequest $request CreateMetricGroupRequest
     *
     * @return CreateMetricGroupResponse CreateMetricGroupResponse
     */
    public function createMetricGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMetricGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建实验项目
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
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
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
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实验项目
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
     * @summary 创建数据表
     *  *
     * @param CreateTableMetaRequest $request CreateTableMetaRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTableMetaResponse CreateTableMetaResponse
     */
    public function createTableMetaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasourceInfo)) {
            $body['DatasourceInfo'] = $request->datasourceInfo;
        }
        if (!Utils::isUnset($request->datasourceType)) {
            $body['DatasourceType'] = $request->datasourceType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTableMeta',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tablemetas',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据表
     *  *
     * @param CreateTableMetaRequest $request CreateTableMetaRequest
     *
     * @return CreateTableMetaResponse CreateTableMetaResponse
     */
    public function createTableMeta($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTableMetaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除指定的人群
     *  *
     * @param string         $CrowdId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCrowdResponse DeleteCrowdResponse
     */
    public function deleteCrowdWithOptions($CrowdId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteCrowd',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds/' . OpenApiUtilClient::getEncodeParam($CrowdId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定的人群
     *  *
     * @param string $CrowdId
     *
     * @return DeleteCrowdResponse DeleteCrowdResponse
     */
    public function deleteCrowd($CrowdId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCrowdWithOptions($CrowdId, $headers, $runtime);
    }

    /**
     * @summary 删除指定的实验域
     *  *
     * @param string         $DomainId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomainWithOptions($DomainId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/domains/' . OpenApiUtilClient::getEncodeParam($DomainId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定的实验域
     *  *
     * @param string $DomainId
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomain($DomainId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDomainWithOptions($DomainId, $headers, $runtime);
    }

    /**
     * @summary 删除指定的实验
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteExperimentResponse DeleteExperimentResponse
     */
    public function deleteExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteExperiment',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定的实验
     *  *
     * @param string $ExperimentId
     *
     * @return DeleteExperimentResponse DeleteExperimentResponse
     */
    public function deleteExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary 删除指定的实验版本
     *  *
     * @param string         $ExperimentVersionId
     * @param string[]       $headers             map
     * @param RuntimeOptions $runtime             runtime options for this request RuntimeOptions
     *
     * @return DeleteExperimentVersionResponse DeleteExperimentVersionResponse
     */
    public function deleteExperimentVersionWithOptions($ExperimentVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteExperimentVersion',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentversions/' . OpenApiUtilClient::getEncodeParam($ExperimentVersionId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteExperimentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定的实验版本
     *  *
     * @param string $ExperimentVersionId
     *
     * @return DeleteExperimentVersionResponse DeleteExperimentVersionResponse
     */
    public function deleteExperimentVersion($ExperimentVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentVersionWithOptions($ExperimentVersionId, $headers, $runtime);
    }

    /**
     * @summary 删除Feature
     *  *
     * @param string         $FeatureId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteFeatureResponse DeleteFeatureResponse
     */
    public function deleteFeatureWithOptions($FeatureId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFeature',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/features/' . OpenApiUtilClient::getEncodeParam($FeatureId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除Feature
     *  *
     * @param string $FeatureId
     *
     * @return DeleteFeatureResponse DeleteFeatureResponse
     */
    public function deleteFeature($FeatureId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFeatureWithOptions($FeatureId, $headers, $runtime);
    }

    /**
     * @summary 删除指定的实验层
     *  *
     * @param string         $LayerId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLayerResponse DeleteLayerResponse
     */
    public function deleteLayerWithOptions($LayerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteLayer',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/layers/' . OpenApiUtilClient::getEncodeParam($LayerId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定的实验层
     *  *
     * @param string $LayerId
     *
     * @return DeleteLayerResponse DeleteLayerResponse
     */
    public function deleteLayer($LayerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLayerWithOptions($LayerId, $headers, $runtime);
    }

    /**
     * @summary 删除指定指标
     *  *
     * @param string         $MetricId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteMetricResponse DeleteMetricResponse
     */
    public function deleteMetricWithOptions($MetricId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteMetric',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/metrics/' . OpenApiUtilClient::getEncodeParam($MetricId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定指标
     *  *
     * @param string $MetricId
     *
     * @return DeleteMetricResponse DeleteMetricResponse
     */
    public function deleteMetric($MetricId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMetricWithOptions($MetricId, $headers, $runtime);
    }

    /**
     * @summary 删除指定的指标组
     *  *
     * @param string         $MetricGroupId
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteMetricGroupResponse DeleteMetricGroupResponse
     */
    public function deleteMetricGroupWithOptions($MetricGroupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteMetricGroup',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/metricgroups/' . OpenApiUtilClient::getEncodeParam($MetricGroupId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定的指标组
     *  *
     * @param string $MetricGroupId
     *
     * @return DeleteMetricGroupResponse DeleteMetricGroupResponse
     */
    public function deleteMetricGroup($MetricGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMetricGroupWithOptions($MetricGroupId, $headers, $runtime);
    }

    /**
     * @summary 删除实验项目
     *  *
     * @param string         $ProjectId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProjectWithOptions($ProjectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除实验项目
     *  *
     * @param string $ProjectId
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProject($ProjectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($ProjectId, $headers, $runtime);
    }

    /**
     * @summary 删除数据表
     *  *
     * @param string         $TableMetaId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteTableMetaResponse DeleteTableMetaResponse
     */
    public function deleteTableMetaWithOptions($TableMetaId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteTableMeta',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tablemetas/' . OpenApiUtilClient::getEncodeParam($TableMetaId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除数据表
     *  *
     * @param string $TableMetaId
     *
     * @return DeleteTableMetaResponse DeleteTableMetaResponse
     */
    public function deleteTableMeta($TableMetaId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTableMetaWithOptions($TableMetaId, $headers, $runtime);
    }

    /**
     * @summary 获取指定人群详情
     *  *
     * @param string         $CrowdId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCrowdResponse GetCrowdResponse
     */
    public function getCrowdWithOptions($CrowdId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetCrowd',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds/' . OpenApiUtilClient::getEncodeParam($CrowdId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定人群详情
     *  *
     * @param string $CrowdId
     *
     * @return GetCrowdResponse GetCrowdResponse
     */
    public function getCrowd($CrowdId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCrowdWithOptions($CrowdId, $headers, $runtime);
    }

    /**
     * @summary 获取指定实验域详情
     *  *
     * @param string           $DomainId
     * @param GetDomainRequest $request  GetDomainRequest
     * @param string[]         $headers  map
     * @param RuntimeOptions   $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomainWithOptions($DomainId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDomain',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/domains/' . OpenApiUtilClient::getEncodeParam($DomainId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定实验域详情
     *  *
     * @param string           $DomainId
     * @param GetDomainRequest $request  GetDomainRequest
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomain($DomainId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainWithOptions($DomainId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取指定实验的详情
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetExperimentResponse GetExperimentResponse
     */
    public function getExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetExperiment',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定实验的详情
     *  *
     * @param string $ExperimentId
     *
     * @return GetExperimentResponse GetExperimentResponse
     */
    public function getExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary 获取指定实验版本的详情
     *  *
     * @param string         $ExperimentVersionId
     * @param string[]       $headers             map
     * @param RuntimeOptions $runtime             runtime options for this request RuntimeOptions
     *
     * @return GetExperimentVersionResponse GetExperimentVersionResponse
     */
    public function getExperimentVersionWithOptions($ExperimentVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetExperimentVersion',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentversions/' . OpenApiUtilClient::getEncodeParam($ExperimentVersionId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExperimentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定实验版本的详情
     *  *
     * @param string $ExperimentVersionId
     *
     * @return GetExperimentVersionResponse GetExperimentVersionResponse
     */
    public function getExperimentVersion($ExperimentVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentVersionWithOptions($ExperimentVersionId, $headers, $runtime);
    }

    /**
     * @summary 获取Feature详情
     *  *
     * @param string         $FeatureId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetFeatureResponse GetFeatureResponse
     */
    public function getFeatureWithOptions($FeatureId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFeature',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/features/' . OpenApiUtilClient::getEncodeParam($FeatureId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取Feature详情
     *  *
     * @param string $FeatureId
     *
     * @return GetFeatureResponse GetFeatureResponse
     */
    public function getFeature($FeatureId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFeatureWithOptions($FeatureId, $headers, $runtime);
    }

    /**
     * @summary 获取指定的实验层详情
     *  *
     * @param string         $LayerId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLayerResponse GetLayerResponse
     */
    public function getLayerWithOptions($LayerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLayer',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/layers/' . OpenApiUtilClient::getEncodeParam($LayerId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定的实验层详情
     *  *
     * @param string $LayerId
     *
     * @return GetLayerResponse GetLayerResponse
     */
    public function getLayer($LayerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLayerWithOptions($LayerId, $headers, $runtime);
    }

    /**
     * @summary 获取指标详情
     *  *
     * @param string         $MetricId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetMetricResponse GetMetricResponse
     */
    public function getMetricWithOptions($MetricId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetMetric',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/metrics/' . OpenApiUtilClient::getEncodeParam($MetricId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指标详情
     *  *
     * @param string $MetricId
     *
     * @return GetMetricResponse GetMetricResponse
     */
    public function getMetric($MetricId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMetricWithOptions($MetricId, $headers, $runtime);
    }

    /**
     * @summary 获取指标组的详细信息
     *  *
     * @param string         $MetricGroupId
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetMetricGroupResponse GetMetricGroupResponse
     */
    public function getMetricGroupWithOptions($MetricGroupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetMetricGroup',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/metricgroups/' . OpenApiUtilClient::getEncodeParam($MetricGroupId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指标组的详细信息
     *  *
     * @param string $MetricGroupId
     *
     * @return GetMetricGroupResponse GetMetricGroupResponse
     */
    public function getMetricGroup($MetricGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMetricGroupWithOptions($MetricGroupId, $headers, $runtime);
    }

    /**
     * @summary 获取指定的实验项目
     *  *
     * @param string         $ProjectId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetProjectResponse GetProjectResponse
     */
    public function getProjectWithOptions($ProjectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProject',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定的实验项目
     *  *
     * @param string $ProjectId
     *
     * @return GetProjectResponse GetProjectResponse
     */
    public function getProject($ProjectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($ProjectId, $headers, $runtime);
    }

    /**
     * @summary 获取数据表详情
     *  *
     * @param string         $TableMetaId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetTableMetaResponse GetTableMetaResponse
     */
    public function getTableMetaWithOptions($TableMetaId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTableMeta',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tablemetas/' . OpenApiUtilClient::getEncodeParam($TableMetaId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据表详情
     *  *
     * @param string $TableMetaId
     *
     * @return GetTableMetaResponse GetTableMetaResponse
     */
    public function getTableMeta($TableMetaId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableMetaWithOptions($TableMetaId, $headers, $runtime);
    }

    /**
     * @summary 获取人群列表
     *  *
     * @param ListCrowdsRequest $request ListCrowdsRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCrowdsResponse ListCrowdsResponse
     */
    public function listCrowdsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->crowdId)) {
            $query['CrowdId'] = $request->crowdId;
        }
        if (!Utils::isUnset($request->crowdName)) {
            $query['CrowdName'] = $request->crowdName;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'ListCrowds',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCrowdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取人群列表
     *  *
     * @param ListCrowdsRequest $request ListCrowdsRequest
     *
     * @return ListCrowdsResponse ListCrowdsResponse
     */
    public function listCrowds($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCrowdsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实验域列表
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->layerId)) {
            $query['LayerId'] = $request->layerId;
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
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
            'action'      => 'ListDomains',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/domains',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验域列表
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实验版本列表
     *  *
     * @param ListExperimentVersionsRequest $request ListExperimentVersionsRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExperimentVersionsResponse ListExperimentVersionsResponse
     */
    public function listExperimentVersionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->experimentId)) {
            $query['ExperimentId'] = $request->experimentId;
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExperimentVersions',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentversions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListExperimentVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验版本列表
     *  *
     * @param ListExperimentVersionsRequest $request ListExperimentVersionsRequest
     *
     * @return ListExperimentVersionsResponse ListExperimentVersionsResponse
     */
    public function listExperimentVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExperimentVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实验列表
     *  *
     * @param ListExperimentsRequest $request ListExperimentsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExperimentsResponse ListExperimentsResponse
     */
    public function listExperimentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->experimentId)) {
            $query['ExperimentId'] = $request->experimentId;
        }
        if (!Utils::isUnset($request->experimentName)) {
            $query['ExperimentName'] = $request->experimentName;
        }
        if (!Utils::isUnset($request->layerId)) {
            $query['LayerId'] = $request->layerId;
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
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExperiments',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验列表
     *  *
     * @param ListExperimentsRequest $request ListExperimentsRequest
     *
     * @return ListExperimentsResponse ListExperimentsResponse
     */
    public function listExperiments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExperimentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取Faeture列表
     *  *
     * @param ListFeaturesRequest $request ListFeaturesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFeaturesResponse ListFeaturesResponse
     */
    public function listFeaturesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->featureId)) {
            $query['FeatureId'] = $request->featureId;
        }
        if (!Utils::isUnset($request->featureName)) {
            $query['FeatureName'] = $request->featureName;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFeatures',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/features',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取Faeture列表
     *  *
     * @param ListFeaturesRequest $request ListFeaturesRequest
     *
     * @return ListFeaturesResponse ListFeaturesResponse
     */
    public function listFeatures($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFeaturesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实验层列表
     *  *
     * @param ListLayersRequest $request ListLayersRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLayersResponse ListLayersResponse
     */
    public function listLayersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->layerId)) {
            $query['LayerId'] = $request->layerId;
        }
        if (!Utils::isUnset($request->layerName)) {
            $query['LayerName'] = $request->layerName;
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
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
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
            'action'      => 'ListLayers',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/layers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLayersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验层列表
     *  *
     * @param ListLayersRequest $request ListLayersRequest
     *
     * @return ListLayersResponse ListLayersResponse
     */
    public function listLayers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLayersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取指标组列表
     *  *
     * @param ListMetricGroupsRequest $request ListMetricGroupsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMetricGroupsResponse ListMetricGroupsResponse
     */
    public function listMetricGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->metricGroupId)) {
            $query['MetricGroupId'] = $request->metricGroupId;
        }
        if (!Utils::isUnset($request->metricGroupName)) {
            $query['MetricGroupName'] = $request->metricGroupName;
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
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMetricGroups',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/metricgroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMetricGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指标组列表
     *  *
     * @param ListMetricGroupsRequest $request ListMetricGroupsRequest
     *
     * @return ListMetricGroupsResponse ListMetricGroupsResponse
     */
    public function listMetricGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMetricGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取指标列表
     *  *
     * @param ListMetricsRequest $request ListMetricsRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMetricsResponse ListMetricsResponse
     */
    public function listMetricsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->metricGroupId)) {
            $query['MetricGroupId'] = $request->metricGroupId;
        }
        if (!Utils::isUnset($request->metricId)) {
            $query['MetricId'] = $request->metricId;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMetrics',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/metrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指标列表
     *  *
     * @param ListMetricsRequest $request ListMetricsRequest
     *
     * @return ListMetricsResponse ListMetricsResponse
     */
    public function listMetrics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMetricsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实验项目列表
     *  *
     * @param ListProjectsRequest $request ListProjectsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
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
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
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
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实验项目列表
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
     * @summary 获取数据表列表
     *  *
     * @param ListTableMetasRequest $request ListTableMetasRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTableMetasResponse ListTableMetasResponse
     */
    public function listTableMetasWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->datasourceType)) {
            $query['DatasourceType'] = $request->datasourceType;
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
        if (!Utils::isUnset($request->tableMetaId)) {
            $query['TableMetaId'] = $request->tableMetaId;
        }
        if (!Utils::isUnset($request->tableMetaName)) {
            $query['TableMetaName'] = $request->tableMetaName;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTableMetas',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tablemetas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTableMetasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据表列表
     *  *
     * @param ListTableMetasRequest $request ListTableMetasRequest
     *
     * @return ListTableMetasResponse ListTableMetasResponse
     */
    public function listTableMetas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTableMetasWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 对实验版本推全
     *  *
     * @param string                          $ExperimentVersionId
     * @param PushAllExperimentVersionRequest $request             PushAllExperimentVersionRequest
     * @param string[]                        $headers             map
     * @param RuntimeOptions                  $runtime             runtime options for this request RuntimeOptions
     *
     * @return PushAllExperimentVersionResponse PushAllExperimentVersionResponse
     */
    public function pushAllExperimentVersionWithOptions($ExperimentVersionId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->featureName)) {
            $body['FeatureName'] = $request->featureName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushAllExperimentVersion',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentversions/' . OpenApiUtilClient::getEncodeParam($ExperimentVersionId) . '/action/pushall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushAllExperimentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 对实验版本推全
     *  *
     * @param string                          $ExperimentVersionId
     * @param PushAllExperimentVersionRequest $request             PushAllExperimentVersionRequest
     *
     * @return PushAllExperimentVersionResponse PushAllExperimentVersionResponse
     */
    public function pushAllExperimentVersion($ExperimentVersionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushAllExperimentVersionWithOptions($ExperimentVersionId, $request, $headers, $runtime);
    }

    /**
     * @summary 启动实验
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return StartExperimentResponse StartExperimentResponse
     */
    public function startExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartExperiment',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/action/start',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动实验
     *  *
     * @param string $ExperimentId
     *
     * @return StartExperimentResponse StartExperimentResponse
     */
    public function startExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary 停止实验
     *  *
     * @param string         $ExperimentId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return StopExperimentResponse StopExperimentResponse
     */
    public function stopExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopExperiment',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '/action/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止实验
     *  *
     * @param string $ExperimentId
     *
     * @return StopExperimentResponse StopExperimentResponse
     */
    public function stopExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * @summary 更新指定人群。
     *  *
     * @param string             $CrowdId
     * @param UpdateCrowdRequest $request UpdateCrowdRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCrowdResponse UpdateCrowdResponse
     */
    public function updateCrowdWithOptions($CrowdId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCrowd',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/crowds/' . OpenApiUtilClient::getEncodeParam($CrowdId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新指定人群。
     *  *
     * @param string             $CrowdId
     * @param UpdateCrowdRequest $request UpdateCrowdRequest
     *
     * @return UpdateCrowdResponse UpdateCrowdResponse
     */
    public function updateCrowd($CrowdId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCrowdWithOptions($CrowdId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新指定实验域
     *  *
     * @param string              $DomainId
     * @param UpdateDomainRequest $request  UpdateDomainRequest
     * @param string[]            $headers  map
     * @param RuntimeOptions      $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateDomainResponse UpdateDomainResponse
     */
    public function updateDomainWithOptions($DomainId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bucketType)) {
            $body['BucketType'] = $request->bucketType;
        }
        if (!Utils::isUnset($request->condition)) {
            $body['Condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->crowIds)) {
            $body['CrowIds'] = $request->crowIds;
        }
        if (!Utils::isUnset($request->debugUsers)) {
            $body['DebugUsers'] = $request->debugUsers;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->flow)) {
            $body['Flow'] = $request->flow;
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
            'action'      => 'UpdateDomain',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/domains/' . OpenApiUtilClient::getEncodeParam($DomainId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新指定实验域
     *  *
     * @param string              $DomainId
     * @param UpdateDomainRequest $request  UpdateDomainRequest
     *
     * @return UpdateDomainResponse UpdateDomainResponse
     */
    public function updateDomain($DomainId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDomainWithOptions($DomainId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新指定的实验
     *  *
     * @param string                  $ExperimentId
     * @param UpdateExperimentRequest $request      UpdateExperimentRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateExperimentResponse UpdateExperimentResponse
     */
    public function updateExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bucketType)) {
            $body['BucketType'] = $request->bucketType;
        }
        if (!Utils::isUnset($request->condition)) {
            $body['Condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->coreMetricId)) {
            $body['CoreMetricId'] = $request->coreMetricId;
        }
        if (!Utils::isUnset($request->crowdIds)) {
            $body['CrowdIds'] = $request->crowdIds;
        }
        if (!Utils::isUnset($request->debugUsers)) {
            $body['DebugUsers'] = $request->debugUsers;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->flow)) {
            $body['Flow'] = $request->flow;
        }
        if (!Utils::isUnset($request->focusMetricIds)) {
            $body['FocusMetricIds'] = $request->focusMetricIds;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateExperiment',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . OpenApiUtilClient::getEncodeParam($ExperimentId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新指定的实验
     *  *
     * @param string                  $ExperimentId
     * @param UpdateExperimentRequest $request      UpdateExperimentRequest
     *
     * @return UpdateExperimentResponse UpdateExperimentResponse
     */
    public function updateExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新指定的实验版本
     *  *
     * @param string                         $ExperimentVersionId
     * @param UpdateExperimentVersionRequest $request             UpdateExperimentVersionRequest
     * @param string[]                       $headers             map
     * @param RuntimeOptions                 $runtime             runtime options for this request RuntimeOptions
     *
     * @return UpdateExperimentVersionResponse UpdateExperimentVersionResponse
     */
    public function updateExperimentVersionWithOptions($ExperimentVersionId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->crowdIds)) {
            $body['CrowdIds'] = $request->crowdIds;
        }
        if (!Utils::isUnset($request->debugUsers)) {
            $body['DebugUsers'] = $request->debugUsers;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->flow)) {
            $body['Flow'] = $request->flow;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateExperimentVersion',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experimentversions/' . OpenApiUtilClient::getEncodeParam($ExperimentVersionId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExperimentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新指定的实验版本
     *  *
     * @param string                         $ExperimentVersionId
     * @param UpdateExperimentVersionRequest $request             UpdateExperimentVersionRequest
     *
     * @return UpdateExperimentVersionResponse UpdateExperimentVersionResponse
     */
    public function updateExperimentVersion($ExperimentVersionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentVersionWithOptions($ExperimentVersionId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新Feature
     *  *
     * @param string               $FeatureId
     * @param UpdateFeatureRequest $request   UpdateFeatureRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateFeatureResponse UpdateFeatureResponse
     */
    public function updateFeatureWithOptions($FeatureId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFeature',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/features/' . OpenApiUtilClient::getEncodeParam($FeatureId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新Feature
     *  *
     * @param string               $FeatureId
     * @param UpdateFeatureRequest $request   UpdateFeatureRequest
     *
     * @return UpdateFeatureResponse UpdateFeatureResponse
     */
    public function updateFeature($FeatureId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFeatureWithOptions($FeatureId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新指定的实验层
     *  *
     * @param string             $LayerId
     * @param UpdateLayerRequest $request UpdateLayerRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLayerResponse UpdateLayerResponse
     */
    public function updateLayerWithOptions($LayerId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->domainId)) {
            $body['DomainId'] = $request->domainId;
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
            'action'      => 'UpdateLayer',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/layers/' . OpenApiUtilClient::getEncodeParam($LayerId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新指定的实验层
     *  *
     * @param string             $LayerId
     * @param UpdateLayerRequest $request UpdateLayerRequest
     *
     * @return UpdateLayerResponse UpdateLayerResponse
     */
    public function updateLayer($LayerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLayerWithOptions($LayerId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新指标
     *  *
     * @param string              $MetricId
     * @param UpdateMetricRequest $request  UpdateMetricRequest
     * @param string[]            $headers  map
     * @param RuntimeOptions      $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateMetricResponse UpdateMetricResponse
     */
    public function updateMetricWithOptions($MetricId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->definition)) {
            $body['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sourceTableMetaId)) {
            $body['SourceTableMetaId'] = $request->sourceTableMetaId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMetric',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/metrics/' . OpenApiUtilClient::getEncodeParam($MetricId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新指标
     *  *
     * @param string              $MetricId
     * @param UpdateMetricRequest $request  UpdateMetricRequest
     *
     * @return UpdateMetricResponse UpdateMetricResponse
     */
    public function updateMetric($MetricId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMetricWithOptions($MetricId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新指定的指标组
     *  *
     * @param string                   $MetricGroupId
     * @param UpdateMetricGroupRequest $request       UpdateMetricGroupRequest
     * @param string[]                 $headers       map
     * @param RuntimeOptions           $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateMetricGroupResponse UpdateMetricGroupResponse
     */
    public function updateMetricGroupWithOptions($MetricGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMetricGroup',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/metricgroups/' . OpenApiUtilClient::getEncodeParam($MetricGroupId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateMetricGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新指定的指标组
     *  *
     * @param string                   $MetricGroupId
     * @param UpdateMetricGroupRequest $request       UpdateMetricGroupRequest
     *
     * @return UpdateMetricGroupResponse UpdateMetricGroupResponse
     */
    public function updateMetricGroup($MetricGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMetricGroupWithOptions($MetricGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新指定的实验项目
     *  *
     * @param string               $ProjectId
     * @param UpdateProjectRequest $request   UpdateProjectRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateProjectResponse UpdateProjectResponse
     */
    public function updateProjectWithOptions($ProjectId, $request, $headers, $runtime)
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
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新指定的实验项目
     *  *
     * @param string               $ProjectId
     * @param UpdateProjectRequest $request   UpdateProjectRequest
     *
     * @return UpdateProjectResponse UpdateProjectResponse
     */
    public function updateProject($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新数据表
     *  *
     * @param string                 $TableMetaId
     * @param UpdateTableMetaRequest $request     UpdateTableMetaRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateTableMetaResponse UpdateTableMetaResponse
     */
    public function updateTableMetaWithOptions($TableMetaId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
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
            'action'      => 'UpdateTableMeta',
            'version'     => '2024-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tablemetas/' . OpenApiUtilClient::getEncodeParam($TableMetaId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新数据表
     *  *
     * @param string                 $TableMetaId
     * @param UpdateTableMetaRequest $request     UpdateTableMetaRequest
     *
     * @return UpdateTableMetaResponse UpdateTableMetaResponse
     */
    public function updateTableMeta($TableMetaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTableMetaWithOptions($TableMetaId, $request, $headers, $runtime);
    }
}
