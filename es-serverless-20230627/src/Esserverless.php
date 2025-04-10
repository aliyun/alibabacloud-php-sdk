<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CancelSpecReviewTaskResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateEndpointRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateEndpointResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\DeleteDictRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\DeleteDictResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\DeleteEndpointResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppQuotaResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetMonitorDataRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetMonitorDataResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetSnapshotSettingResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetSpecReviewTaskResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListAppsRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListAppsResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListDictsRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListDictsResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListEndpointsRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListEndpointsResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListIndicesResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListSnapshotRepositoriesResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListSnapshotsRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListSnapshotsResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListSpecReviewTasksRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListSpecReviewTasksResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateDictRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateDictResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateEndpointRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateEndpointResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateSnapshotSettingRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateSnapshotSettingResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Esserverless extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('es-serverless', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 撤销规格审批.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelSpecReviewTaskResponse
     *
     * @param string         $appName
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelSpecReviewTaskResponse
     */
    public function cancelSpecReviewTaskWithOptions($appName, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CancelSpecReviewTask',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/spec-review-tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelSpecReviewTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelSpecReviewTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 撤销规格审批.
     *
     * @returns CancelSpecReviewTaskResponse
     *
     * @param string $appName
     * @param string $taskId
     *
     * @return CancelSpecReviewTaskResponse
     */
    public function cancelSpecReviewTask($appName, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelSpecReviewTaskWithOptions($appName, $taskId, $headers, $runtime);
    }

    /**
     * 创建Serverless应用.
     *
     * @param request - CreateAppRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppResponse
     *
     * @param CreateAppRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['appName'] = $request->appName;
        }

        if (null !== $request->authentication) {
            @$body['authentication'] = $request->authentication;
        }

        if (null !== $request->chargeType) {
            @$body['chargeType'] = $request->chargeType;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->network) {
            @$body['network'] = $request->network;
        }

        if (null !== $request->privateNetwork) {
            @$body['privateNetwork'] = $request->privateNetwork;
        }

        if (null !== $request->quotaInfo) {
            @$body['quotaInfo'] = $request->quotaInfo;
        }

        if (null !== $request->regionId) {
            @$body['regionId'] = $request->regionId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApp',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建Serverless应用.
     *
     * @param request - CreateAppRequest
     *
     * @returns CreateAppResponse
     *
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建端点.
     *
     * @param request - CreateEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEndpointResponse
     *
     * @param CreateEndpointRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateEndpointResponse
     */
    public function createEndpointWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $body = [];
        if (null !== $request->endpointZones) {
            @$body['endpointZones'] = $request->endpointZones;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->vpcId) {
            @$body['vpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEndpoint',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/endpoints',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建端点.
     *
     * @param request - CreateEndpointRequest
     *
     * @returns CreateEndpointResponse
     *
     * @param CreateEndpointRequest $request
     *
     * @return CreateEndpointResponse
     */
    public function createEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEndpointWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建快照.
     *
     * @param request - CreateSnapshotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSnapshotResponse
     *
     * @param string                $appName
     * @param string                $repository
     * @param CreateSnapshotRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($appName, $repository, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->indices) {
            @$body['indices'] = $request->indices;
        }

        if (null !== $request->snapshot) {
            @$body['snapshot'] = $request->snapshot;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSnapshot',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/snapshot-repositories/' . Url::percentEncode($repository) . '/snapshots',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSnapshotResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建快照.
     *
     * @param request - CreateSnapshotRequest
     *
     * @returns CreateSnapshotResponse
     *
     * @param string                $appName
     * @param string                $repository
     * @param CreateSnapshotRequest $request
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshot($appName, $repository, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSnapshotWithOptions($appName, $repository, $request, $headers, $runtime);
    }

    /**
     * 删除Serverless应用。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppResponse
     *
     * @param string         $appName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($appName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteApp',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除Serverless应用。
     *
     * @returns DeleteAppResponse
     *
     * @param string $appName
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($appName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAppWithOptions($appName, $headers, $runtime);
    }

    /**
     * 删除词典.
     *
     * @param request - DeleteDictRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDictResponse
     *
     * @param string            $appName
     * @param DeleteDictRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteDictResponse
     */
    public function deleteDictWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDict',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/dicts/actions/remove',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDictResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDictResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除词典.
     *
     * @param request - DeleteDictRequest
     *
     * @returns DeleteDictResponse
     *
     * @param string            $appName
     * @param DeleteDictRequest $request
     *
     * @return DeleteDictResponse
     */
    public function deleteDict($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDictWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 删除端点.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEndpointResponse
     *
     * @param string         $endpointId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEndpointResponse
     */
    public function deleteEndpointWithOptions($endpointId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteEndpoint',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/endpoints/' . Url::percentEncode($endpointId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除端点.
     *
     * @returns DeleteEndpointResponse
     *
     * @param string $endpointId
     *
     * @return DeleteEndpointResponse
     */
    public function deleteEndpoint($endpointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEndpointWithOptions($endpointId, $headers, $runtime);
    }

    /**
     * 删除快照.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSnapshotResponse
     *
     * @param string         $appName
     * @param string         $repository
     * @param string         $snapshot
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($appName, $repository, $snapshot, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSnapshot',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/snapshot-repositories/' . Url::percentEncode($repository) . '/snapshots/' . Url::percentEncode($snapshot) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSnapshotResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除快照.
     *
     * @returns DeleteSnapshotResponse
     *
     * @param string $appName
     * @param string $repository
     * @param string $snapshot
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshot($appName, $repository, $snapshot)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSnapshotWithOptions($appName, $repository, $snapshot, $headers, $runtime);
    }

    /**
     * 获取Serverless应用详情.
     *
     * @param request - GetAppRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppResponse
     *
     * @param string         $appName
     * @param GetAppRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAppResponse
     */
    public function getAppWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->detailed) {
            @$query['detailed'] = $request->detailed;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApp',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取Serverless应用详情.
     *
     * @param request - GetAppRequest
     *
     * @returns GetAppResponse
     *
     * @param string        $appName
     * @param GetAppRequest $request
     *
     * @return GetAppResponse
     */
    public function getApp($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 获取Serverless应用配额详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppQuotaResponse
     *
     * @param string         $appName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAppQuotaResponse
     */
    public function getAppQuotaWithOptions($appName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAppQuota',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/quota',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAppQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAppQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取Serverless应用配额详情.
     *
     * @returns GetAppQuotaResponse
     *
     * @param string $appName
     *
     * @return GetAppQuotaResponse
     */
    public function getAppQuota($appName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppQuotaWithOptions($appName, $headers, $runtime);
    }

    /**
     * 获取监控数据.
     *
     * @param request - GetMonitorDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMonitorDataResponse
     *
     * @param GetMonitorDataRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetMonitorDataResponse
     */
    public function getMonitorDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'GetMonitorData',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/emon/metrics/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMonitorDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取监控数据.
     *
     * @param request - GetMonitorDataRequest
     *
     * @returns GetMonitorDataResponse
     *
     * @param GetMonitorDataRequest $request
     *
     * @return GetMonitorDataResponse
     */
    public function getMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMonitorDataWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取自动备份配置.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSnapshotSettingResponse
     *
     * @param string         $appName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSnapshotSettingResponse
     */
    public function getSnapshotSettingWithOptions($appName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSnapshotSetting',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/auto-snapshot-setting',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSnapshotSettingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSnapshotSettingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取自动备份配置.
     *
     * @returns GetSnapshotSettingResponse
     *
     * @param string $appName
     *
     * @return GetSnapshotSettingResponse
     */
    public function getSnapshotSetting($appName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSnapshotSettingWithOptions($appName, $headers, $runtime);
    }

    /**
     * 获取配额审批详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSpecReviewTaskResponse
     *
     * @param string         $appName
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSpecReviewTaskResponse
     */
    public function getSpecReviewTaskWithOptions($appName, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSpecReviewTask',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/spec-review-tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSpecReviewTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSpecReviewTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取配额审批详情.
     *
     * @returns GetSpecReviewTaskResponse
     *
     * @param string $appName
     * @param string $taskId
     *
     * @return GetSpecReviewTaskResponse
     */
    public function getSpecReviewTask($appName, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSpecReviewTaskWithOptions($appName, $taskId, $headers, $runtime);
    }

    /**
     * 查看Serverless应用列表.
     *
     * @param request - ListAppsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppsResponse
     *
     * @param ListAppsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
     */
    public function listAppsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['appName'] = $request->appName;
        }

        if (null !== $request->createTime) {
            @$query['createTime'] = $request->createTime;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->orderType) {
            @$query['orderType'] = $request->orderType;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApps',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAppsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAppsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查看Serverless应用列表.
     *
     * @param request - ListAppsRequest
     *
     * @returns ListAppsResponse
     *
     * @param ListAppsRequest $request
     *
     * @return ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取词典列表.
     *
     * @param request - ListDictsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDictsResponse
     *
     * @param string           $appName
     * @param ListDictsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListDictsResponse
     */
    public function listDictsWithOptions($appName, $request, $headers, $runtime)
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
            'action' => 'ListDicts',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/dicts',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDictsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDictsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取词典列表.
     *
     * @param request - ListDictsRequest
     *
     * @returns ListDictsResponse
     *
     * @param string           $appName
     * @param ListDictsRequest $request
     *
     * @return ListDictsResponse
     */
    public function listDicts($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDictsWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 获取端点信息列表.
     *
     * @param request - ListEndpointsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEndpointsResponse
     *
     * @param ListEndpointsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListEndpointsResponse
     */
    public function listEndpointsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        if (null !== $request->vpcId) {
            @$query['vpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEndpoints',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/endpoints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEndpointsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取端点信息列表.
     *
     * @param request - ListEndpointsRequest
     *
     * @returns ListEndpointsResponse
     *
     * @param ListEndpointsRequest $request
     *
     * @return ListEndpointsResponse
     */
    public function listEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEndpointsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查看索引列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIndicesResponse
     *
     * @param string         $appName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListIndicesResponse
     */
    public function listIndicesWithOptions($appName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListIndices',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/indices',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIndicesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查看索引列表.
     *
     * @returns ListIndicesResponse
     *
     * @param string $appName
     *
     * @return ListIndicesResponse
     */
    public function listIndices($appName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndicesWithOptions($appName, $headers, $runtime);
    }

    /**
     * 获取快照仓库列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSnapshotRepositoriesResponse
     *
     * @param string         $appName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSnapshotRepositoriesResponse
     */
    public function listSnapshotRepositoriesWithOptions($appName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListSnapshotRepositories',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/snapshot-repositories',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSnapshotRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSnapshotRepositoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取快照仓库列表.
     *
     * @returns ListSnapshotRepositoriesResponse
     *
     * @param string $appName
     *
     * @return ListSnapshotRepositoriesResponse
     */
    public function listSnapshotRepositories($appName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSnapshotRepositoriesWithOptions($appName, $headers, $runtime);
    }

    /**
     * 获取仓库的快照列表.
     *
     * @param request - ListSnapshotsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSnapshotsResponse
     *
     * @param string               $appName
     * @param ListSnapshotsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshotsWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->repository) {
            @$query['repository'] = $request->repository;
        }

        if (null !== $request->snapshot) {
            @$query['snapshot'] = $request->snapshot;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSnapshots',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/snapshots',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSnapshotsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取仓库的快照列表.
     *
     * @param request - ListSnapshotsRequest
     *
     * @returns ListSnapshotsResponse
     *
     * @param string               $appName
     * @param ListSnapshotsRequest $request
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshots($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSnapshotsWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 获取规格审批列表.
     *
     * @param request - ListSpecReviewTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSpecReviewTasksResponse
     *
     * @param string                     $appName
     * @param ListSpecReviewTasksRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListSpecReviewTasksResponse
     */
    public function listSpecReviewTasksWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSpecReviewTasks',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/spec-review-tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSpecReviewTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSpecReviewTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取规格审批列表.
     *
     * @param request - ListSpecReviewTasksRequest
     *
     * @returns ListSpecReviewTasksResponse
     *
     * @param string                     $appName
     * @param ListSpecReviewTasksRequest $request
     *
     * @return ListSpecReviewTasksResponse
     */
    public function listSpecReviewTasks($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSpecReviewTasksWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 编辑Serverless应用.
     *
     * @param request - UpdateAppRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppResponse
     *
     * @param string           $appName
     * @param UpdateAppRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAppResponse
     */
    public function updateAppWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applyReason) {
            @$body['applyReason'] = $request->applyReason;
        }

        if (null !== $request->authentication) {
            @$body['authentication'] = $request->authentication;
        }

        if (null !== $request->contactInfo) {
            @$body['contactInfo'] = $request->contactInfo;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->limiterInfo) {
            @$body['limiterInfo'] = $request->limiterInfo;
        }

        if (null !== $request->network) {
            @$body['network'] = $request->network;
        }

        if (null !== $request->privateNetwork) {
            @$body['privateNetwork'] = $request->privateNetwork;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateApp',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 编辑Serverless应用.
     *
     * @param request - UpdateAppRequest
     *
     * @returns UpdateAppResponse
     *
     * @param string           $appName
     * @param UpdateAppRequest $request
     *
     * @return UpdateAppResponse
     */
    public function updateApp($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 创建或更新词典.
     *
     * @param request - UpdateDictRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDictResponse
     *
     * @param string            $appName
     * @param UpdateDictRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateDictResponse
     */
    public function updateDictWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowCover) {
            @$query['allowCover'] = $request->allowCover;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->files) {
            @$body['files'] = $request->files;
        }

        if (null !== $request->sourceType) {
            @$body['sourceType'] = $request->sourceType;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDict',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/dicts',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDictResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDictResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建或更新词典.
     *
     * @param request - UpdateDictRequest
     *
     * @returns UpdateDictResponse
     *
     * @param string            $appName
     * @param UpdateDictRequest $request
     *
     * @return UpdateDictResponse
     */
    public function updateDict($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDictWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 修改端点信息.
     *
     * @param request - UpdateEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEndpointResponse
     *
     * @param string                $endpointId
     * @param UpdateEndpointRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateEndpointResponse
     */
    public function updateEndpointWithOptions($endpointId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endpointZones) {
            @$body['endpointZones'] = $request->endpointZones;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEndpoint',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/endpoints/' . Url::percentEncode($endpointId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改端点信息.
     *
     * @param request - UpdateEndpointRequest
     *
     * @returns UpdateEndpointResponse
     *
     * @param string                $endpointId
     * @param UpdateEndpointRequest $request
     *
     * @return UpdateEndpointResponse
     */
    public function updateEndpoint($endpointId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEndpointWithOptions($endpointId, $request, $headers, $runtime);
    }

    /**
     * 修改自动备份配置.
     *
     * @param request - UpdateSnapshotSettingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSnapshotSettingResponse
     *
     * @param string                       $appName
     * @param UpdateSnapshotSettingRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSnapshotSettingResponse
     */
    public function updateSnapshotSettingWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->quartzRegex) {
            @$body['quartzRegex'] = $request->quartzRegex;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSnapshotSetting',
            'version' => '2023-06-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/es-serverless/instances/' . Url::percentEncode($appName) . '/auto-snapshot-setting',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateSnapshotSettingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSnapshotSettingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改自动备份配置.
     *
     * @param request - UpdateSnapshotSettingRequest
     *
     * @returns UpdateSnapshotSettingResponse
     *
     * @param string                       $appName
     * @param UpdateSnapshotSettingRequest $request
     *
     * @return UpdateSnapshotSettingResponse
     */
    public function updateSnapshotSetting($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSnapshotSettingWithOptions($appName, $request, $headers, $runtime);
    }
}
