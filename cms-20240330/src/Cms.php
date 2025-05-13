<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataHeaders;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\PutWorkspaceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\PutWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpsertUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpsertUmodelDataResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 创建EntityStore相关存储.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEntityStoreResponse
     *
     * @param string         $workspaceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateEntityStoreResponse
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
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '/entitystore',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEntityStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建EntityStore相关存储.
     *
     * @returns CreateEntityStoreResponse
     *
     * @param string $workspaceName
     *
     * @return CreateEntityStoreResponse
     */
    public function createEntityStore($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEntityStoreWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * 创建Prometheus监控实例.
     *
     * @param request - CreatePrometheusInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrometheusInstanceResponse
     *
     * @param CreatePrometheusInstanceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePrometheusInstanceResponse
     */
    public function createPrometheusInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->archiveDuration) {
            @$body['archiveDuration'] = $request->archiveDuration;
        }

        if (null !== $request->authFreeReadPolicy) {
            @$body['authFreeReadPolicy'] = $request->authFreeReadPolicy;
        }

        if (null !== $request->authFreeWritePolicy) {
            @$body['authFreeWritePolicy'] = $request->authFreeWritePolicy;
        }

        if (null !== $request->enableAuthFreeRead) {
            @$body['enableAuthFreeRead'] = $request->enableAuthFreeRead;
        }

        if (null !== $request->enableAuthFreeWrite) {
            @$body['enableAuthFreeWrite'] = $request->enableAuthFreeWrite;
        }

        if (null !== $request->enableAuthToken) {
            @$body['enableAuthToken'] = $request->enableAuthToken;
        }

        if (null !== $request->paymentType) {
            @$body['paymentType'] = $request->paymentType;
        }

        if (null !== $request->prometheusInstanceName) {
            @$body['prometheusInstanceName'] = $request->prometheusInstanceName;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->storageDuration) {
            @$body['storageDuration'] = $request->storageDuration;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * 创建Prometheus监控实例.
     *
     * @param request - CreatePrometheusInstanceRequest
     *
     * @returns CreatePrometheusInstanceResponse
     *
     * @param CreatePrometheusInstanceRequest $request
     *
     * @return CreatePrometheusInstanceResponse
     */
    public function createPrometheusInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPrometheusInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建Umodel配置.
     *
     * @param request - CreateUmodelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUmodelResponse
     *
     * @param string              $workspace
     * @param CreateUmodelRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateUmodelResponse
     */
    public function createUmodelWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->commonSchemaRef) {
            @$body['commonSchemaRef'] = $request->commonSchemaRef;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Umodel配置.
     *
     * @param request - CreateUmodelRequest
     *
     * @returns CreateUmodelResponse
     *
     * @param string              $workspace
     * @param CreateUmodelRequest $request
     *
     * @return CreateUmodelResponse
     */
    public function createUmodel($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUmodelWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * 删除EntityStore相关存储.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEntityStoreResponse
     *
     * @param string         $workspaceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEntityStoreResponse
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
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '/entitystore',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEntityStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除EntityStore相关存储.
     *
     * @returns DeleteEntityStoreResponse
     *
     * @param string $workspaceName
     *
     * @return DeleteEntityStoreResponse
     */
    public function deleteEntityStore($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEntityStoreWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * 删除Umodel配置信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUmodelResponse
     *
     * @param string         $workspace
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteUmodelResponse
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
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Umodel配置信息.
     *
     * @returns DeleteUmodelResponse
     *
     * @param string $workspace
     *
     * @return DeleteUmodelResponse
     */
    public function deleteUmodel($workspace)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUmodelWithOptions($workspace, $headers, $runtime);
    }

    /**
     * 删除 Umodel Elements.
     *
     * @param request - DeleteUmodelDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUmodelDataResponse
     *
     * @param string                  $workspace
     * @param DeleteUmodelDataRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteUmodelDataResponse
     */
    public function deleteUmodelDataWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['domain'] = $request->domain;
        }

        if (null !== $request->kind) {
            @$query['kind'] = $request->kind;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUmodelData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/data',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUmodelDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 Umodel Elements.
     *
     * @param request - DeleteUmodelDataRequest
     *
     * @returns DeleteUmodelDataResponse
     *
     * @param string                  $workspace
     * @param DeleteUmodelDataRequest $request
     *
     * @return DeleteUmodelDataResponse
     */
    public function deleteUmodelData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUmodelDataWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * 删除工作空间.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string         $workspaceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteWorkspaceResponse
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
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除工作空间.
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string $workspaceName
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspace($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * 获取EntityStore相关存储信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEntityStoreResponse
     *
     * @param string         $workspaceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetEntityStoreResponse
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
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '/entitystore',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEntityStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取EntityStore相关存储信息.
     *
     * @returns GetEntityStoreResponse
     *
     * @param string $workspaceName
     *
     * @return GetEntityStoreResponse
     */
    public function getEntityStore($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEntityStoreWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * 查询指定Workspace下的实体和关系数据，返回结果显示某时间区间中的实体数据（返回结果压缩后传输）。
     *
     * @param request - GetEntityStoreDataRequest
     * @param headers - GetEntityStoreDataHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEntityStoreDataResponse
     *
     * @param string                    $workspace
     * @param GetEntityStoreDataRequest $request
     * @param GetEntityStoreDataHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetEntityStoreDataResponse
     */
    public function getEntityStoreDataWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->from) {
            @$body['from'] = $request->from;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->to) {
            @$body['to'] = $request->to;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->acceptEncoding) {
            @$realHeaders['acceptEncoding'] = '' . $headers->acceptEncoding;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEntityStoreData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/entitiesAndRelations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEntityStoreDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定Workspace下的实体和关系数据，返回结果显示某时间区间中的实体数据（返回结果压缩后传输）。
     *
     * @param request - GetEntityStoreDataRequest
     *
     * @returns GetEntityStoreDataResponse
     *
     * @param string                    $workspace
     * @param GetEntityStoreDataRequest $request
     *
     * @return GetEntityStoreDataResponse
     */
    public function getEntityStoreData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetEntityStoreDataHeaders([]);

        return $this->getEntityStoreDataWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * 获取Umodel配置信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUmodelResponse
     *
     * @param string         $workspace
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUmodelResponse
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
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Umodel配置信息.
     *
     * @returns GetUmodelResponse
     *
     * @param string $workspace
     *
     * @return GetUmodelResponse
     */
    public function getUmodel($workspace)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUmodelWithOptions($workspace, $headers, $runtime);
    }

    /**
     * 获取相关联的 Umodel 图数据.
     *
     * @param request - GetUmodelDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUmodelDataResponse
     *
     * @param string               $workspace
     * @param GetUmodelDataRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetUmodelDataResponse
     */
    public function getUmodelDataWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->method) {
            @$query['method'] = $request->method;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUmodelData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/graph',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUmodelDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取相关联的 Umodel 图数据.
     *
     * @param request - GetUmodelDataRequest
     *
     * @returns GetUmodelDataResponse
     *
     * @param string               $workspace
     * @param GetUmodelDataRequest $request
     *
     * @return GetUmodelDataResponse
     */
    public function getUmodelData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUmodelDataWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * 获取工作空间.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspaceResponse
     *
     * @param string         $workspaceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkspaceResponse
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
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作空间.
     *
     * @returns GetWorkspaceResponse
     *
     * @param string $workspaceName
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * 查询告警动作.
     *
     * @param tmpReq - ListAlertActionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlertActionsResponse
     *
     * @param ListAlertActionsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListAlertActionsResponse
     */
    public function listAlertActionsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAlertActionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->alertActionIds) {
            $request->alertActionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->alertActionIds, 'alertActionIds', 'json');
        }

        $query = [];
        if (null !== $request->alertActionIdsShrink) {
            @$query['alertActionIds'] = $request->alertActionIdsShrink;
        }

        if (null !== $request->alertActionName) {
            @$query['alertActionName'] = $request->alertActionName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * 查询告警动作.
     *
     * @param request - ListAlertActionsRequest
     *
     * @returns ListAlertActionsResponse
     *
     * @param ListAlertActionsRequest $request
     *
     * @return ListAlertActionsResponse
     */
    public function listAlertActions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertActionsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取工作空间列表.
     *
     * @param tmpReq - ListWorkspacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWorkspacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->workspaceNameList) {
            $request->workspaceNameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->workspaceNameList, 'workspaceNameList', 'simple');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->workspaceName) {
            @$query['workspaceName'] = $request->workspaceName;
        }

        if (null !== $request->workspaceNameListShrink) {
            @$query['workspaceNameList'] = $request->workspaceNameListShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * 获取工作空间列表.
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
     * 创建工作空间.
     *
     * @param request - PutWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutWorkspaceResponse
     *
     * @param string              $workspaceName
     * @param PutWorkspaceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return PutWorkspaceResponse
     */
    public function putWorkspaceWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->slsProject) {
            @$body['slsProject'] = $request->slsProject;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutWorkspace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PutWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建工作空间.
     *
     * @param request - PutWorkspaceRequest
     *
     * @returns PutWorkspaceResponse
     *
     * @param string              $workspaceName
     * @param PutWorkspaceRequest $request
     *
     * @return PutWorkspaceResponse
     */
    public function putWorkspace($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putWorkspaceWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * 更新Umodel配置信息.
     *
     * @param request - UpdateUmodelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUmodelResponse
     *
     * @param string              $workspace
     * @param UpdateUmodelRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateUmodelResponse
     */
    public function updateUmodelWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->commonSchemaRef) {
            @$body['commonSchemaRef'] = $request->commonSchemaRef;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Umodel配置信息.
     *
     * @param request - UpdateUmodelRequest
     *
     * @returns UpdateUmodelResponse
     *
     * @param string              $workspace
     * @param UpdateUmodelRequest $request
     *
     * @return UpdateUmodelResponse
     */
    public function updateUmodel($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUmodelWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * 写入 Umodel Elements.
     *
     * @param request - UpsertUmodelDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpsertUmodelDataResponse
     *
     * @param string                  $workspace
     * @param UpsertUmodelDataRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpsertUmodelDataResponse
     */
    public function upsertUmodelDataWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->method) {
            @$query['method'] = $request->method;
        }

        $body = [];
        if (null !== $request->elements) {
            @$body['elements'] = $request->elements;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpsertUmodelData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/data',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpsertUmodelDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 写入 Umodel Elements.
     *
     * @param request - UpsertUmodelDataRequest
     *
     * @returns UpsertUmodelDataResponse
     *
     * @param string                  $workspace
     * @param UpsertUmodelDataRequest $request
     *
     * @return UpsertUmodelDataResponse
     */
    public function upsertUmodelData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upsertUmodelDataWithOptions($workspace, $request, $headers, $runtime);
    }
}
