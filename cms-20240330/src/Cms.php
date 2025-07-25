<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateTicketRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateTicketResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataHeaders;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceObservabilityResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServicesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServicesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\PutWorkspaceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\PutWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpsertUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpsertUmodelDataResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cms extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 创建EntityStore相关存储
     *  *
     * @param string         $workspaceName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return CreateEntityStoreResponse CreateEntityStoreResponse
     */
    public function createEntityStoreWithOptions($workspaceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateEntityStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspaceName) . '/entitystore',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEntityStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建EntityStore相关存储
     *  *
     * @param string $workspaceName
     *
     * @return CreateEntityStoreResponse CreateEntityStoreResponse
     */
    public function createEntityStore($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEntityStoreWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * @summary 创建Prometheus监控实例
     *  *
     * @param CreatePrometheusInstanceRequest $request CreatePrometheusInstanceRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePrometheusInstanceResponse CreatePrometheusInstanceResponse
     */
    public function createPrometheusInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->archiveDuration)) {
            $body['archiveDuration'] = $request->archiveDuration;
        }
        if (!Utils::isUnset($request->authFreeReadPolicy)) {
            $body['authFreeReadPolicy'] = $request->authFreeReadPolicy;
        }
        if (!Utils::isUnset($request->authFreeWritePolicy)) {
            $body['authFreeWritePolicy'] = $request->authFreeWritePolicy;
        }
        if (!Utils::isUnset($request->enableAuthFreeRead)) {
            $body['enableAuthFreeRead'] = $request->enableAuthFreeRead;
        }
        if (!Utils::isUnset($request->enableAuthFreeWrite)) {
            $body['enableAuthFreeWrite'] = $request->enableAuthFreeWrite;
        }
        if (!Utils::isUnset($request->enableAuthToken)) {
            $body['enableAuthToken'] = $request->enableAuthToken;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $body['paymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->prometheusInstanceName)) {
            $body['prometheusInstanceName'] = $request->prometheusInstanceName;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->storageDuration)) {
            $body['storageDuration'] = $request->storageDuration;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->workspace)) {
            $body['workspace'] = $request->workspace;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePrometheusInstance',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建Prometheus监控实例
     *  *
     * @param CreatePrometheusInstanceRequest $request CreatePrometheusInstanceRequest
     *
     * @return CreatePrometheusInstanceResponse CreatePrometheusInstanceResponse
     */
    public function createPrometheusInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPrometheusInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建Service
     *  *
     * @param string               $workspace
     * @param CreateServiceRequest $request   CreateServiceRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateServiceResponse CreateServiceResponse
     */
    public function createServiceWithOptions($workspace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->attributes)) {
            $body['attributes'] = $request->attributes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->pid)) {
            $body['pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['serviceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceStatus)) {
            $body['serviceStatus'] = $request->serviceStatus;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $body['serviceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/service',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建Service
     *  *
     * @param string               $workspace
     * @param CreateServiceRequest $request   CreateServiceRequest
     *
     * @return CreateServiceResponse CreateServiceResponse
     */
    public function createService($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * @summary 创建票据
     *  *
     * @param CreateTicketRequest $request CreateTicketRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTicketResponse CreateTicketResponse
     */
    public function createTicketWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessTokenExpirationTime)) {
            $query['accessTokenExpirationTime'] = $request->accessTokenExpirationTime;
        }
        if (!Utils::isUnset($request->expirationTime)) {
            $query['expirationTime'] = $request->expirationTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTicket',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/tickets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建票据
     *  *
     * @param CreateTicketRequest $request CreateTicketRequest
     *
     * @return CreateTicketResponse CreateTicketResponse
     */
    public function createTicket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTicketWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建Umodel配置
     *  *
     * @param string              $workspace
     * @param CreateUmodelRequest $request   CreateUmodelRequest
     * @param string[]            $headers   map
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateUmodelResponse CreateUmodelResponse
     */
    public function createUmodelWithOptions($workspace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->commonSchemaRef)) {
            $body['commonSchemaRef'] = $request->commonSchemaRef;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/umodel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建Umodel配置
     *  *
     * @param string              $workspace
     * @param CreateUmodelRequest $request   CreateUmodelRequest
     *
     * @return CreateUmodelResponse CreateUmodelResponse
     */
    public function createUmodel($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUmodelWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * @summary 删除EntityStore相关存储
     *  *
     * @param string         $workspaceName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteEntityStoreResponse DeleteEntityStoreResponse
     */
    public function deleteEntityStoreWithOptions($workspaceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteEntityStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspaceName) . '/entitystore',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEntityStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除EntityStore相关存储
     *  *
     * @param string $workspaceName
     *
     * @return DeleteEntityStoreResponse DeleteEntityStoreResponse
     */
    public function deleteEntityStore($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEntityStoreWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * @summary 删除Service
     *  *
     * @param string         $workspace
     * @param string         $serviceId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceResponse DeleteServiceResponse
     */
    public function deleteServiceWithOptions($workspace, $serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/service/' . OpenApiUtilClient::getEncodeParam($serviceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除Service
     *  *
     * @param string $workspace
     * @param string $serviceId
     *
     * @return DeleteServiceResponse DeleteServiceResponse
     */
    public function deleteService($workspace, $serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceWithOptions($workspace, $serviceId, $headers, $runtime);
    }

    /**
     * @summary 删除Umodel配置信息
     *  *
     * @param string         $workspace
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteUmodelResponse DeleteUmodelResponse
     */
    public function deleteUmodelWithOptions($workspace, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/umodel',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除Umodel配置信息
     *  *
     * @param string $workspace
     *
     * @return DeleteUmodelResponse DeleteUmodelResponse
     */
    public function deleteUmodel($workspace)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUmodelWithOptions($workspace, $headers, $runtime);
    }

    /**
     * @summary 删除 Umodel Elements
     *  *
     * @param string                  $workspace
     * @param DeleteUmodelDataRequest $request   DeleteUmodelDataRequest
     * @param string[]                $headers   map
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteUmodelDataResponse DeleteUmodelDataResponse
     */
    public function deleteUmodelDataWithOptions($workspace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->kind)) {
            $query['kind'] = $request->kind;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUmodelData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/umodel/data',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUmodelDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除 Umodel Elements
     *  *
     * @param string                  $workspace
     * @param DeleteUmodelDataRequest $request   DeleteUmodelDataRequest
     *
     * @return DeleteUmodelDataResponse DeleteUmodelDataResponse
     */
    public function deleteUmodelData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUmodelDataWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * @summary 删除工作空间
     *  *
     * @param string         $workspaceName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkspaceResponse DeleteWorkspaceResponse
     */
    public function deleteWorkspaceWithOptions($workspaceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteWorkspace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspaceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除工作空间
     *  *
     * @param string $workspaceName
     *
     * @return DeleteWorkspaceResponse DeleteWorkspaceResponse
     */
    public function deleteWorkspace($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * @summary 获取EntityStore相关存储信息
     *  *
     * @param string         $workspaceName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetEntityStoreResponse GetEntityStoreResponse
     */
    public function getEntityStoreWithOptions($workspaceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetEntityStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspaceName) . '/entitystore',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEntityStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取EntityStore相关存储信息
     *  *
     * @param string $workspaceName
     *
     * @return GetEntityStoreResponse GetEntityStoreResponse
     */
    public function getEntityStore($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEntityStoreWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * @summary 查询指定Workspace下的实体和关系数据，返回结果显示某时间区间中的实体数据（返回结果压缩后传输）。
     *  *
     * @param string                    $workspace
     * @param GetEntityStoreDataRequest $request   GetEntityStoreDataRequest
     * @param GetEntityStoreDataHeaders $headers   GetEntityStoreDataHeaders
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetEntityStoreDataResponse GetEntityStoreDataResponse
     */
    public function getEntityStoreDataWithOptions($workspace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->from)) {
            $body['from'] = $request->from;
        }
        if (!Utils::isUnset($request->query)) {
            $body['query'] = $request->query;
        }
        if (!Utils::isUnset($request->to)) {
            $body['to'] = $request->to;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->acceptEncoding)) {
            $realHeaders['acceptEncoding'] = Utils::toJSONString($headers->acceptEncoding);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEntityStoreData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/entitiesAndRelations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEntityStoreDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询指定Workspace下的实体和关系数据，返回结果显示某时间区间中的实体数据（返回结果压缩后传输）。
     *  *
     * @param string                    $workspace
     * @param GetEntityStoreDataRequest $request   GetEntityStoreDataRequest
     *
     * @return GetEntityStoreDataResponse GetEntityStoreDataResponse
     */
    public function getEntityStoreData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetEntityStoreDataHeaders([]);

        return $this->getEntityStoreDataWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * @summary 查询 Service
     *  *
     * @param string         $workspace
     * @param string         $serviceId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetServiceResponse GetServiceResponse
     */
    public function getServiceWithOptions($workspace, $serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/service/' . OpenApiUtilClient::getEncodeParam($serviceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询 Service
     *  *
     * @param string $workspace
     * @param string $serviceId
     *
     * @return GetServiceResponse GetServiceResponse
     */
    public function getService($workspace, $serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($workspace, $serviceId, $headers, $runtime);
    }

    /**
     * @summary 获取应用可观测实例
     *  *
     * @param string         $workspace
     * @param string         $type
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetServiceObservabilityResponse GetServiceObservabilityResponse
     */
    public function getServiceObservabilityWithOptions($workspace, $type, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetServiceObservability',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/service-observability/' . OpenApiUtilClient::getEncodeParam($type) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceObservabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取应用可观测实例
     *  *
     * @param string $workspace
     * @param string $type
     *
     * @return GetServiceObservabilityResponse GetServiceObservabilityResponse
     */
    public function getServiceObservability($workspace, $type)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceObservabilityWithOptions($workspace, $type, $headers, $runtime);
    }

    /**
     * @summary 获取Umodel配置信息
     *  *
     * @param string         $workspace
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetUmodelResponse GetUmodelResponse
     */
    public function getUmodelWithOptions($workspace, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/umodel',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取Umodel配置信息
     *  *
     * @param string $workspace
     *
     * @return GetUmodelResponse GetUmodelResponse
     */
    public function getUmodel($workspace)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUmodelWithOptions($workspace, $headers, $runtime);
    }

    /**
     * @summary 获取相关联的 Umodel 图数据
     *  *
     * @param string               $workspace
     * @param GetUmodelDataRequest $request   GetUmodelDataRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetUmodelDataResponse GetUmodelDataResponse
     */
    public function getUmodelDataWithOptions($workspace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->method)) {
            $query['method'] = $request->method;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUmodelData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/umodel/graph',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUmodelDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取相关联的 Umodel 图数据
     *  *
     * @param string               $workspace
     * @param GetUmodelDataRequest $request   GetUmodelDataRequest
     *
     * @return GetUmodelDataResponse GetUmodelDataResponse
     */
    public function getUmodelData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUmodelDataWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * @summary 获取工作空间
     *  *
     * @param string         $workspaceName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetWorkspaceResponse GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($workspaceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkspace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspaceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作空间
     *  *
     * @param string $workspaceName
     *
     * @return GetWorkspaceResponse GetWorkspaceResponse
     */
    public function getWorkspace($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * @summary 查询告警动作
     *  *
     * @param ListAlertActionsRequest $tmpReq  ListAlertActionsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAlertActionsResponse ListAlertActionsResponse
     */
    public function listAlertActionsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAlertActionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->alertActionIds)) {
            $request->alertActionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->alertActionIds, 'alertActionIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->alertActionIdsShrink)) {
            $query['alertActionIds'] = $request->alertActionIdsShrink;
        }
        if (!Utils::isUnset($request->alertActionName)) {
            $query['alertActionName'] = $request->alertActionName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlertActions',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/alertActions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlertActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询告警动作
     *  *
     * @param ListAlertActionsRequest $request ListAlertActionsRequest
     *
     * @return ListAlertActionsResponse ListAlertActionsResponse
     */
    public function listAlertActions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertActionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列出资源Service
     *  *
     * @param string              $workspace
     * @param ListServicesRequest $request   ListServicesRequest
     * @param string[]            $headers   map
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListServicesResponse ListServicesResponse
     */
    public function listServicesWithOptions($workspace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['serviceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServices',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出资源Service
     *  *
     * @param string              $workspace
     * @param ListServicesRequest $request   ListServicesRequest
     *
     * @return ListServicesResponse ListServicesResponse
     */
    public function listServices($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * @summary 获取工作空间列表
     *  *
     * @param ListWorkspacesRequest $tmpReq  ListWorkspacesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWorkspacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->workspaceNameList)) {
            $request->workspaceNameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->workspaceNameList, 'workspaceNameList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->workspaceName)) {
            $query['workspaceName'] = $request->workspaceName;
        }
        if (!Utils::isUnset($request->workspaceNameListShrink)) {
            $query['workspaceNameList'] = $request->workspaceNameListShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaces',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作空间列表
     *  *
     * @param ListWorkspacesRequest $request ListWorkspacesRequest
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建工作空间
     *  *
     * @param string              $workspaceName
     * @param PutWorkspaceRequest $request       PutWorkspaceRequest
     * @param string[]            $headers       map
     * @param RuntimeOptions      $runtime       runtime options for this request RuntimeOptions
     *
     * @return PutWorkspaceResponse PutWorkspaceResponse
     */
    public function putWorkspaceWithOptions($workspaceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->slsProject)) {
            $body['slsProject'] = $request->slsProject;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutWorkspace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspaceName) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PutWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建工作空间
     *  *
     * @param string              $workspaceName
     * @param PutWorkspaceRequest $request       PutWorkspaceRequest
     *
     * @return PutWorkspaceResponse PutWorkspaceResponse
     */
    public function putWorkspace($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putWorkspaceWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * @summary 更新UpdateService
     *  *
     * @param string               $workspace
     * @param string               $serviceId
     * @param UpdateServiceRequest $request   UpdateServiceRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceResponse UpdateServiceResponse
     */
    public function updateServiceWithOptions($workspace, $serviceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->attributes)) {
            $body['attributes'] = $request->attributes;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->serviceStatus)) {
            $body['serviceStatus'] = $request->serviceStatus;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/service/' . OpenApiUtilClient::getEncodeParam($serviceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新UpdateService
     *  *
     * @param string               $workspace
     * @param string               $serviceId
     * @param UpdateServiceRequest $request   UpdateServiceRequest
     *
     * @return UpdateServiceResponse UpdateServiceResponse
     */
    public function updateService($workspace, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceWithOptions($workspace, $serviceId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新Umodel配置信息
     *  *
     * @param string              $workspace
     * @param UpdateUmodelRequest $request   UpdateUmodelRequest
     * @param string[]            $headers   map
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateUmodelResponse UpdateUmodelResponse
     */
    public function updateUmodelWithOptions($workspace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->commonSchemaRef)) {
            $body['commonSchemaRef'] = $request->commonSchemaRef;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/umodel',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新Umodel配置信息
     *  *
     * @param string              $workspace
     * @param UpdateUmodelRequest $request   UpdateUmodelRequest
     *
     * @return UpdateUmodelResponse UpdateUmodelResponse
     */
    public function updateUmodel($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUmodelWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * @summary 写入 Umodel Elements
     *  *
     * @param string                  $workspace
     * @param UpsertUmodelDataRequest $request   UpsertUmodelDataRequest
     * @param string[]                $headers   map
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpsertUmodelDataResponse UpsertUmodelDataResponse
     */
    public function upsertUmodelDataWithOptions($workspace, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->method)) {
            $query['method'] = $request->method;
        }
        $body = [];
        if (!Utils::isUnset($request->elements)) {
            $body['elements'] = $request->elements;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpsertUmodelData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . OpenApiUtilClient::getEncodeParam($workspace) . '/umodel/data',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpsertUmodelDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 写入 Umodel Elements
     *  *
     * @param string                  $workspace
     * @param UpsertUmodelDataRequest $request   UpsertUmodelDataRequest
     *
     * @return UpsertUmodelDataResponse UpsertUmodelDataResponse
     */
    public function upsertUmodelData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upsertUmodelDataWithOptions($workspace, $request, $headers, $runtime);
    }
}
