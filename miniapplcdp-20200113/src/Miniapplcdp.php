<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\BatchCreateModelRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\BatchCreateModelResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\BatchDeleteModelRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\BatchDeleteModelResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\BatchDeleteResourcesRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\BatchDeleteResourcesResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\BatchRestoreModelRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\BatchRestoreModelResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CheckDomainRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CheckDomainResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CloneAppRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CloneAppResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CloneModelFromCommitRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CloneModelFromCommitResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CloneModelInModuleRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CloneModelInModuleResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateAppRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateAppResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateCommitRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateCommitResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateLinkEntityAndAssociationRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateLinkEntityAndAssociationResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateModelRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateModelResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateModulePublishRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateModulePublishResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateModuleRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateModuleResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreatePublishRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreatePublishResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateResourceRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateResourceResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteAppRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteCommitRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteCommitResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteModelRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteModelResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteModuleRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteModuleResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteResourceRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\DeleteResourceResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GenerateAppUserPasswordRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GenerateAppUserPasswordResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GenerateAuthTokenRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GenerateAuthTokenResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GenerateUploadTokenRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GenerateUploadTokenResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetAppModelRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetAppModelResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetAppRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetAppResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetAppSecretRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetAppSecretResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetArtifactRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetArtifactResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetCommitRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetCommitResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetDefaultAppUserRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetDefaultAppUserResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetDomainCnameRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetDomainCnameResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetDomainOverviewRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetDomainOverviewResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetEnvironmentRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetEnvironmentResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetHistoryStatsRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetHistoryStatsResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetLatestCommitRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetLatestCommitResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetModelRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetModelResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetModuleRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetModuleResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetPublishRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetPublishResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetRealtimeStatsRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetRealtimeStatsResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetResourceRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetResourceResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetUserRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetUserResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListAppModulesRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListAppModulesResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListAppsRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListAppsResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListAppTemplatesRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListAppTemplatesResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListArtifactsRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListArtifactsResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListCommitsRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListCommitsResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListDomainsRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListDomainsResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListEnvironmentOverviewsRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListEnvironmentOverviewsResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListEnvironmentsRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListEnvironmentsResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModelsByPageRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModelsByPageResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModelsRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModelsResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModuleDependenciesRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModuleDependenciesResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModuleModelsRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModuleModelsResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModulePublishVersionsRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModulePublishVersionsResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModuleResourcesRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModuleResourcesResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModulesByPageRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModulesByPageResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModulesRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModulesResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListPublishedModulesRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListPublishedModulesResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListPublishesRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListPublishesResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListPublishVersionsRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListPublishVersionsResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListResourcesByPageRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListResourcesByPageResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListResourcesRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListResourcesResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ResetAppUserPasswordRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ResetAppUserPasswordResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\RestoreModelRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\RestoreModelResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\RunLogicModelRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\RunLogicModelResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\SetEnvironmentDefaultDomainRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\SetEnvironmentDefaultDomainResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\StartAppServerRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\StartAppServerResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\StopAppServerRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\StopAppServerResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateAppModelRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateAppModelResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateAppRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateAppResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateModelRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateModelResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateModuleRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateModuleResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateResourceContentRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateResourceContentResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateResourceInfoRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateResourceInfoResponse;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateResourceRequest;
use AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\UpdateResourceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Miniapplcdp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('miniapplcdp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param BatchCreateModelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchCreateModelResponse
     */
    public function batchCreateModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->modelDataJson)) {
            $query['ModelDataJson'] = $request->modelDataJson;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchCreateModel',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchCreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchCreateModelRequest $request
     *
     * @return BatchCreateModelResponse
     */
    public function batchCreateModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateModelWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteModelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchDeleteModelResponse
     */
    public function batchDeleteModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->modelIdList)) {
            $query['ModelIdList'] = $request->modelIdList;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteModel',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchDeleteModelRequest $request
     *
     * @return BatchDeleteModelResponse
     */
    public function batchDeleteModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteModelWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteResourcesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchDeleteResourcesResponse
     */
    public function batchDeleteResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->resourceIdList)) {
            $query['ResourceIdList'] = $request->resourceIdList;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteResources',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchDeleteResourcesRequest $request
     *
     * @return BatchDeleteResourcesResponse
     */
    public function batchDeleteResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteResourcesWithOptions($request, $runtime);
    }

    /**
     * @param BatchRestoreModelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchRestoreModelResponse
     */
    public function batchRestoreModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->modelIdList)) {
            $query['ModelIdList'] = $request->modelIdList;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchRestoreModel',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchRestoreModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchRestoreModelRequest $request
     *
     * @return BatchRestoreModelResponse
     */
    public function batchRestoreModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchRestoreModelWithOptions($request, $runtime);
    }

    /**
     * @param CheckDomainRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckDomainResponse
     */
    public function checkDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->domainType)) {
            $query['DomainType'] = $request->domainType;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDomain',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckDomainRequest $request
     *
     * @return CheckDomainResponse
     */
    public function checkDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDomainWithOptions($request, $runtime);
    }

    /**
     * @param CloneAppRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return CloneAppResponse
     */
    public function cloneAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->icon)) {
            $query['Icon'] = $request->icon;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneApp',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloneAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloneAppRequest $request
     *
     * @return CloneAppResponse
     */
    public function cloneApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneAppWithOptions($request, $runtime);
    }

    /**
     * @param CloneModelFromCommitRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CloneModelFromCommitResponse
     */
    public function cloneModelFromCommitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceCommitId)) {
            $query['SourceCommitId'] = $request->sourceCommitId;
        }
        if (!Utils::isUnset($request->sourceModuleId)) {
            $query['SourceModuleId'] = $request->sourceModuleId;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        if (!Utils::isUnset($request->targetModuleId)) {
            $query['TargetModuleId'] = $request->targetModuleId;
        }
        if (!Utils::isUnset($request->targetName)) {
            $query['TargetName'] = $request->targetName;
        }
        if (!Utils::isUnset($request->targetSubType)) {
            $query['TargetSubType'] = $request->targetSubType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneModelFromCommit',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloneModelFromCommitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloneModelFromCommitRequest $request
     *
     * @return CloneModelFromCommitResponse
     */
    public function cloneModelFromCommit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneModelFromCommitWithOptions($request, $runtime);
    }

    /**
     * @param CloneModelInModuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CloneModelInModuleResponse
     */
    public function cloneModelInModuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->targetName)) {
            $query['TargetName'] = $request->targetName;
        }
        if (!Utils::isUnset($request->targetSubType)) {
            $query['TargetSubType'] = $request->targetSubType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneModelInModule',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloneModelInModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloneModelInModuleRequest $request
     *
     * @return CloneModelInModuleResponse
     */
    public function cloneModelInModule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneModelInModuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->asynchronous)) {
            $query['Asynchronous'] = $request->asynchronous;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->icon)) {
            $query['Icon'] = $request->icon;
        }
        if (!Utils::isUnset($request->platformVersion)) {
            $query['PlatformVersion'] = $request->platformVersion;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceCommitId)) {
            $query['SourceCommitId'] = $request->sourceCommitId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templated)) {
            $query['Templated'] = $request->templated;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateCommitRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateCommitResponse
     */
    public function createCommitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commitLog)) {
            $query['CommitLog'] = $request->commitLog;
        }
        if (!Utils::isUnset($request->commitType)) {
            $query['CommitType'] = $request->commitType;
        }
        if (!Utils::isUnset($request->mainModuleCommitId)) {
            $query['MainModuleCommitId'] = $request->mainModuleCommitId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->rollbackToCommitId)) {
            $query['RollbackToCommitId'] = $request->rollbackToCommitId;
        }
        if (!Utils::isUnset($request->rollbackType)) {
            $query['RollbackType'] = $request->rollbackType;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCommit',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCommitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCommitRequest $request
     *
     * @return CreateCommitResponse
     */
    public function createCommit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommitWithOptions($request, $runtime);
    }

    /**
     * @param CreateDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->domainType)) {
            $query['DomainType'] = $request->domainType;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->publicKey)) {
            $query['PublicKey'] = $request->publicKey;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->withCertificate)) {
            $query['WithCertificate'] = $request->withCertificate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDomain',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDomainRequest $request
     *
     * @return CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainWithOptions($request, $runtime);
    }

    /**
     * @param CreateLinkEntityAndAssociationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateLinkEntityAndAssociationResponse
     */
    public function createLinkEntityAndAssociationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->modelData)) {
            $query['ModelData'] = $request->modelData;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLinkEntityAndAssociation',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLinkEntityAndAssociationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLinkEntityAndAssociationRequest $request
     *
     * @return CreateLinkEntityAndAssociationResponse
     */
    public function createLinkEntityAndAssociation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLinkEntityAndAssociationWithOptions($request, $runtime);
    }

    /**
     * @param CreateModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $query['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->linkModelId)) {
            $query['LinkModelId'] = $request->linkModelId;
        }
        if (!Utils::isUnset($request->linkModuleId)) {
            $query['LinkModuleId'] = $request->linkModuleId;
        }
        if (!Utils::isUnset($request->linked)) {
            $query['Linked'] = $request->linked;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->modelName)) {
            $query['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->modelType)) {
            $query['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateModel',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateModelRequest $request
     *
     * @return CreateModelResponse
     */
    public function createModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelWithOptions($request, $runtime);
    }

    /**
     * @param CreateModuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateModuleResponse
     */
    public function createModuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->icon)) {
            $query['Icon'] = $request->icon;
        }
        if (!Utils::isUnset($request->minimumPlatformVersion)) {
            $query['MinimumPlatformVersion'] = $request->minimumPlatformVersion;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $query['ModuleName'] = $request->moduleName;
        }
        if (!Utils::isUnset($request->moduleType)) {
            $query['ModuleType'] = $request->moduleType;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceModuleId)) {
            $query['SourceModuleId'] = $request->sourceModuleId;
        }
        if (!Utils::isUnset($request->targetAppSource)) {
            $query['TargetAppSource'] = $request->targetAppSource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateModule',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateModuleRequest $request
     *
     * @return CreateModuleResponse
     */
    public function createModule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateModulePublishRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateModulePublishResponse
     */
    public function createModulePublishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->publishVersion)) {
            $query['PublishVersion'] = $request->publishVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateModulePublish',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateModulePublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateModulePublishRequest $request
     *
     * @return CreateModulePublishResponse
     */
    public function createModulePublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModulePublishWithOptions($request, $runtime);
    }

    /**
     * @param CreatePublishRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreatePublishResponse
     */
    public function createPublishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commitId)) {
            $query['CommitId'] = $request->commitId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->publishType)) {
            $query['PublishType'] = $request->publishType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->versionNumber)) {
            $query['VersionNumber'] = $request->versionNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePublish',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePublishRequest $request
     *
     * @return CreatePublishResponse
     */
    public function createPublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublishWithOptions($request, $runtime);
    }

    /**
     * @param CreateResourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateResourceResponse
     */
    public function createResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateResource',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateResourceRequest $request
     *
     * @return CreateResourceResponse
     */
    public function createResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApp',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCommitRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteCommitResponse
     */
    public function deleteCommitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->commitId)) {
            $query['CommitId'] = $request->commitId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCommit',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCommitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCommitRequest $request
     *
     * @return DeleteCommitResponse
     */
    public function deleteCommit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCommitWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteModel',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteModelRequest $request
     *
     * @return DeleteModelResponse
     */
    public function deleteModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteModuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteModuleResponse
     */
    public function deleteModuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteModule',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteModuleRequest $request
     *
     * @return DeleteModuleResponse
     */
    public function deleteModule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteResourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteResourceResponse
     */
    public function deleteResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResource',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteResourceRequest $request
     *
     * @return DeleteResourceResponse
     */
    public function deleteResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceWithOptions($request, $runtime);
    }

    /**
     * @param GenerateAppUserPasswordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GenerateAppUserPasswordResponse
     */
    public function generateAppUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateAppUserPassword',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateAppUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateAppUserPasswordRequest $request
     *
     * @return GenerateAppUserPasswordResponse
     */
    public function generateAppUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAppUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @param GenerateAuthTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateAuthTokenResponse
     */
    public function generateAuthTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateAuthToken',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateAuthTokenRequest $request
     *
     * @return GenerateAuthTokenResponse
     */
    public function generateAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAuthTokenWithOptions($request, $runtime);
    }

    /**
     * @param GenerateUploadTokenRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GenerateUploadTokenResponse
     */
    public function generateUploadTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->uploadTokenType)) {
            $query['UploadTokenType'] = $request->uploadTokenType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateUploadToken',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateUploadTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateUploadTokenRequest $request
     *
     * @return GenerateUploadTokenResponse
     */
    public function generateUploadToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetAppRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetAppResponse
     */
    public function getAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApp',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAppRequest $request
     *
     * @return GetAppResponse
     */
    public function getApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppWithOptions($request, $runtime);
    }

    /**
     * @param GetAppModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAppModelResponse
     */
    public function getAppModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppModel',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAppModelRequest $request
     *
     * @return GetAppModelResponse
     */
    public function getAppModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppModelWithOptions($request, $runtime);
    }

    /**
     * @param GetAppSecretRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAppSecretResponse
     */
    public function getAppSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppSecret',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAppSecretRequest $request
     *
     * @return GetAppSecretResponse
     */
    public function getAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSecretWithOptions($request, $runtime);
    }

    /**
     * @param GetArtifactRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetArtifactResponse
     */
    public function getArtifactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetArtifact',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetArtifactRequest $request
     *
     * @return GetArtifactResponse
     */
    public function getArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactWithOptions($request, $runtime);
    }

    /**
     * @param GetCommitRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetCommitResponse
     */
    public function getCommitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->commitId)) {
            $query['CommitId'] = $request->commitId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCommit',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCommitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCommitRequest $request
     *
     * @return GetCommitResponse
     */
    public function getCommit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommitWithOptions($request, $runtime);
    }

    /**
     * @param GetDefaultAppUserRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDefaultAppUserResponse
     */
    public function getDefaultAppUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDefaultAppUser',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDefaultAppUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDefaultAppUserRequest $request
     *
     * @return GetDefaultAppUserResponse
     */
    public function getDefaultAppUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultAppUserWithOptions($request, $runtime);
    }

    /**
     * @param GetDomainCnameRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetDomainCnameResponse
     */
    public function getDomainCnameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->domainType)) {
            $query['DomainType'] = $request->domainType;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDomainCname',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDomainCnameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDomainCnameRequest $request
     *
     * @return GetDomainCnameResponse
     */
    public function getDomainCname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainCnameWithOptions($request, $runtime);
    }

    /**
     * @param GetDomainOverviewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDomainOverviewResponse
     */
    public function getDomainOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDomainOverview',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDomainOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDomainOverviewRequest $request
     *
     * @return GetDomainOverviewResponse
     */
    public function getDomainOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainOverviewWithOptions($request, $runtime);
    }

    /**
     * @param GetEnvironmentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEnvironment',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEnvironmentRequest $request
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnvironmentWithOptions($request, $runtime);
    }

    /**
     * @param GetHistoryStatsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetHistoryStatsResponse
     */
    public function getHistoryStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHistoryStats',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHistoryStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHistoryStatsRequest $request
     *
     * @return GetHistoryStatsResponse
     */
    public function getHistoryStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistoryStatsWithOptions($request, $runtime);
    }

    /**
     * @param GetLatestCommitRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetLatestCommitResponse
     */
    public function getLatestCommitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLatestCommit',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLatestCommitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLatestCommitRequest $request
     *
     * @return GetLatestCommitResponse
     */
    public function getLatestCommit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLatestCommitWithOptions($request, $runtime);
    }

    /**
     * @param GetModelRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetModelResponse
     */
    public function getModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetModel',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetModelRequest $request
     *
     * @return GetModelResponse
     */
    public function getModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelWithOptions($request, $runtime);
    }

    /**
     * @param GetModuleRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetModuleResponse
     */
    public function getModuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->moduleType)) {
            $query['ModuleType'] = $request->moduleType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetModule',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetModuleRequest $request
     *
     * @return GetModuleResponse
     */
    public function getModule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModuleWithOptions($request, $runtime);
    }

    /**
     * @param GetPublishRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetPublishResponse
     */
    public function getPublishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->publishId)) {
            $query['PublishId'] = $request->publishId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPublish',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPublishRequest $request
     *
     * @return GetPublishResponse
     */
    public function getPublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublishWithOptions($request, $runtime);
    }

    /**
     * @param GetRealtimeStatsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetRealtimeStatsResponse
     */
    public function getRealtimeStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRealtimeStats',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRealtimeStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRealtimeStatsRequest $request
     *
     * @return GetRealtimeStatsResponse
     */
    public function getRealtimeStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealtimeStatsWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetResourceResponse
     */
    public function getResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->imageProcessParameter)) {
            $query['ImageProcessParameter'] = $request->imageProcessParameter;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResource',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceRequest $request
     *
     * @return GetResourceResponse
     */
    public function getResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceWithOptions($request, $runtime);
    }

    /**
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @param ListAppModulesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAppModulesResponse
     */
    public function listAppModulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->recursive)) {
            $query['Recursive'] = $request->recursive;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppModules',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppModulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppModulesRequest $request
     *
     * @return ListAppModulesResponse
     */
    public function listAppModules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppModulesWithOptions($request, $runtime);
    }

    /**
     * @param ListAppTemplatesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAppTemplatesResponse
     */
    public function listAppTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppTemplates',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppTemplatesRequest $request
     *
     * @return ListAppTemplatesResponse
     */
    public function listAppTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListAppsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
     */
    public function listAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appStatus)) {
            $query['AppStatus'] = $request->appStatus;
        }
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->customParentId)) {
            $query['CustomParentId'] = $request->customParentId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->mainModuleId)) {
            $query['MainModuleId'] = $request->mainModuleId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApps',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppsRequest $request
     *
     * @return ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListArtifactsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListArtifactsResponse
     */
    public function listArtifactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->publishId)) {
            $query['PublishId'] = $request->publishId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListArtifacts',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListArtifactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListArtifactsRequest $request
     *
     * @return ListArtifactsResponse
     */
    public function listArtifacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactsWithOptions($request, $runtime);
    }

    /**
     * @param ListCommitsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListCommitsResponse
     */
    public function listCommitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->commitLog)) {
            $query['CommitLog'] = $request->commitLog;
        }
        if (!Utils::isUnset($request->customParentId)) {
            $query['CustomParentId'] = $request->customParentId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCommits',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCommitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCommitsRequest $request
     *
     * @return ListCommitsResponse
     */
    public function listCommits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommitsWithOptions($request, $runtime);
    }

    /**
     * @param ListDomainsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDomains',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDomainsRequest $request
     *
     * @return ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainsWithOptions($request, $runtime);
    }

    /**
     * @param ListEnvironmentOverviewsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListEnvironmentOverviewsResponse
     */
    public function listEnvironmentOverviewsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironmentOverviews',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEnvironmentOverviewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEnvironmentOverviewsRequest $request
     *
     * @return ListEnvironmentOverviewsResponse
     */
    public function listEnvironmentOverviews($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvironmentOverviewsWithOptions($request, $runtime);
    }

    /**
     * @param ListEnvironmentsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironments',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEnvironmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEnvironmentsRequest $request
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvironmentsWithOptions($request, $runtime);
    }

    /**
     * @param ListModelsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListModelsResponse
     */
    public function listModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->modelName)) {
            $query['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->modelType)) {
            $query['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        if (!Utils::isUnset($request->withContent)) {
            $query['WithContent'] = $request->withContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModels',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListModelsRequest $request
     *
     * @return ListModelsResponse
     */
    public function listModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelsWithOptions($request, $runtime);
    }

    /**
     * @param ListModelsByPageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListModelsByPageResponse
     */
    public function listModelsByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->modelName)) {
            $query['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->modelType)) {
            $query['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        if (!Utils::isUnset($request->withContent)) {
            $query['WithContent'] = $request->withContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModelsByPage',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListModelsByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListModelsByPageRequest $request
     *
     * @return ListModelsByPageResponse
     */
    public function listModelsByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelsByPageWithOptions($request, $runtime);
    }

    /**
     * @param ListModuleDependenciesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListModuleDependenciesResponse
     */
    public function listModuleDependenciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->recursive)) {
            $query['Recursive'] = $request->recursive;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModuleDependencies',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListModuleDependenciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListModuleDependenciesRequest $request
     *
     * @return ListModuleDependenciesResponse
     */
    public function listModuleDependencies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModuleDependenciesWithOptions($request, $runtime);
    }

    /**
     * @param ListModuleModelsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListModuleModelsResponse
     */
    public function listModuleModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->moduleList)) {
            $query['ModuleList'] = $request->moduleList;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->subTypes)) {
            $query['SubTypes'] = $request->subTypes;
        }
        if (!Utils::isUnset($request->withContent)) {
            $query['WithContent'] = $request->withContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModuleModels',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListModuleModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListModuleModelsRequest $request
     *
     * @return ListModuleModelsResponse
     */
    public function listModuleModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModuleModelsWithOptions($request, $runtime);
    }

    /**
     * @param ListModulePublishVersionsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListModulePublishVersionsResponse
     */
    public function listModulePublishVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customParentId)) {
            $query['CustomParentId'] = $request->customParentId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->moduleVersion)) {
            $query['ModuleVersion'] = $request->moduleVersion;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModulePublishVersions',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListModulePublishVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListModulePublishVersionsRequest $request
     *
     * @return ListModulePublishVersionsResponse
     */
    public function listModulePublishVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModulePublishVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListModuleResourcesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListModuleResourcesResponse
     */
    public function listModuleResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->moduleList)) {
            $query['ModuleList'] = $request->moduleList;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        if (!Utils::isUnset($request->withContent)) {
            $query['WithContent'] = $request->withContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModuleResources',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListModuleResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListModuleResourcesRequest $request
     *
     * @return ListModuleResourcesResponse
     */
    public function listModuleResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModuleResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListModulesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListModulesResponse
     */
    public function listModulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->hasOwnerApp)) {
            $query['HasOwnerApp'] = $request->hasOwnerApp;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $query['ModuleName'] = $request->moduleName;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModules',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListModulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListModulesRequest $request
     *
     * @return ListModulesResponse
     */
    public function listModules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModulesWithOptions($request, $runtime);
    }

    /**
     * @param ListModulesByPageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListModulesByPageResponse
     */
    public function listModulesByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customParentId)) {
            $query['CustomParentId'] = $request->customParentId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->hasOwnerApp)) {
            $query['HasOwnerApp'] = $request->hasOwnerApp;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $query['ModuleName'] = $request->moduleName;
        }
        if (!Utils::isUnset($request->moduleType)) {
            $query['ModuleType'] = $request->moduleType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModulesByPage',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListModulesByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListModulesByPageRequest $request
     *
     * @return ListModulesByPageResponse
     */
    public function listModulesByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModulesByPageWithOptions($request, $runtime);
    }

    /**
     * @param ListPublishVersionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListPublishVersionsResponse
     */
    public function listPublishVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublishVersions',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublishVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPublishVersionsRequest $request
     *
     * @return ListPublishVersionsResponse
     */
    public function listPublishVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublishVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListPublishedModulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPublishedModulesResponse
     */
    public function listPublishedModulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->excludeAppId)) {
            $query['ExcludeAppId'] = $request->excludeAppId;
        }
        if (!Utils::isUnset($request->excludeModuleId)) {
            $query['ExcludeModuleId'] = $request->excludeModuleId;
        }
        if (!Utils::isUnset($request->hasOwnerApp)) {
            $query['HasOwnerApp'] = $request->hasOwnerApp;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $query['ModuleName'] = $request->moduleName;
        }
        if (!Utils::isUnset($request->moduleType)) {
            $query['ModuleType'] = $request->moduleType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublishedModules',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublishedModulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPublishedModulesRequest $request
     *
     * @return ListPublishedModulesResponse
     */
    public function listPublishedModules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublishedModulesWithOptions($request, $runtime);
    }

    /**
     * @param ListPublishesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListPublishesResponse
     */
    public function listPublishesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->publishStatus)) {
            $query['PublishStatus'] = $request->publishStatus;
        }
        if (!Utils::isUnset($request->publishType)) {
            $query['PublishType'] = $request->publishType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublishes',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublishesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPublishesRequest $request
     *
     * @return ListPublishesResponse
     */
    public function listPublishes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublishesWithOptions($request, $runtime);
    }

    /**
     * @param ListResourcesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->imageProcessParameter)) {
            $query['ImageProcessParameter'] = $request->imageProcessParameter;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->withContent)) {
            $query['WithContent'] = $request->withContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResources',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourcesRequest $request
     *
     * @return ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListResourcesByPageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListResourcesByPageResponse
     */
    public function listResourcesByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->imageProcessParameter)) {
            $query['ImageProcessParameter'] = $request->imageProcessParameter;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->withContent)) {
            $query['WithContent'] = $request->withContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourcesByPage',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourcesByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourcesByPageRequest $request
     *
     * @return ListResourcesByPageResponse
     */
    public function listResourcesByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcesByPageWithOptions($request, $runtime);
    }

    /**
     * @param ResetAppUserPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAppUserPasswordResponse
     */
    public function resetAppUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAppUserPassword',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAppUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetAppUserPasswordRequest $request
     *
     * @return ResetAppUserPasswordResponse
     */
    public function resetAppUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @param RestoreModelRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RestoreModelResponse
     */
    public function restoreModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestoreModel',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestoreModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestoreModelRequest $request
     *
     * @return RestoreModelResponse
     */
    public function restoreModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreModelWithOptions($request, $runtime);
    }

    /**
     * @param RunLogicModelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RunLogicModelResponse
     */
    public function runLogicModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->commitId)) {
            $query['CommitId'] = $request->commitId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $query['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunLogicModel',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunLogicModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunLogicModelRequest $request
     *
     * @return RunLogicModelResponse
     */
    public function runLogicModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runLogicModelWithOptions($request, $runtime);
    }

    /**
     * @param SetEnvironmentDefaultDomainRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetEnvironmentDefaultDomainResponse
     */
    public function setEnvironmentDefaultDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->domainType)) {
            $query['DomainType'] = $request->domainType;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetEnvironmentDefaultDomain',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetEnvironmentDefaultDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetEnvironmentDefaultDomainRequest $request
     *
     * @return SetEnvironmentDefaultDomainResponse
     */
    public function setEnvironmentDefaultDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setEnvironmentDefaultDomainWithOptions($request, $runtime);
    }

    /**
     * @param StartAppServerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartAppServerResponse
     */
    public function startAppServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartAppServer',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartAppServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartAppServerRequest $request
     *
     * @return StartAppServerResponse
     */
    public function startAppServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAppServerWithOptions($request, $runtime);
    }

    /**
     * @param StopAppServerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopAppServerResponse
     */
    public function stopAppServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopAppServer',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopAppServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopAppServerRequest $request
     *
     * @return StopAppServerResponse
     */
    public function stopAppServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAppServerWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAppResponse
     */
    public function updateAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->icon)) {
            $query['Icon'] = $request->icon;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApp',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAppRequest $request
     *
     * @return UpdateAppResponse
     */
    public function updateApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppModelRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateAppModelResponse
     */
    public function updateAppModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $query['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppModel',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAppModelRequest $request
     *
     * @return UpdateAppModelResponse
     */
    public function updateAppModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppModelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateModelResponse
     */
    public function updateModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encodeType)) {
            $query['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->modelName)) {
            $query['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->schemaVersion)) {
            $query['SchemaVersion'] = $request->schemaVersion;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateModel',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateModelRequest $request
     *
     * @return UpdateModelResponse
     */
    public function updateModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateModelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateModuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateModuleResponse
     */
    public function updateModuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $query['ModuleName'] = $request->moduleName;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateModule',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateModuleRequest $request
     *
     * @return UpdateModuleResponse
     */
    public function updateModule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateModuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateResourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateResourceResponse
     */
    public function updateResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateResource',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateResourceRequest $request
     *
     * @return UpdateResourceResponse
     */
    public function updateResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateResourceContentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateResourceContentResponse
     */
    public function updateResourceContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceContent',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateResourceContentRequest $request
     *
     * @return UpdateResourceContentResponse
     */
    public function updateResourceContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceContentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateResourceInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateResourceInfoResponse
     */
    public function updateResourceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->moduleId)) {
            $query['ModuleId'] = $request->moduleId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceInfo',
            'version'     => '2020-01-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateResourceInfoRequest $request
     *
     * @return UpdateResourceInfoResponse
     */
    public function updateResourceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceInfoWithOptions($request, $runtime);
    }
}
