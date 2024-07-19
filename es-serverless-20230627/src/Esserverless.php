<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 撤销规格审批
     *  *
     * @param string         $appName
     * @param string         $taskId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelSpecReviewTaskResponse CancelSpecReviewTaskResponse
     */
    public function cancelSpecReviewTaskWithOptions($appName, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CancelSpecReviewTask',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/spec-review-tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelSpecReviewTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 撤销规格审批
     *  *
     * @param string $appName
     * @param string $taskId
     *
     * @return CancelSpecReviewTaskResponse CancelSpecReviewTaskResponse
     */
    public function cancelSpecReviewTask($appName, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelSpecReviewTaskWithOptions($appName, $taskId, $headers, $runtime);
    }

    /**
     * @summary 创建Serverless应用
     *  *
     * @param CreateAppRequest $request CreateAppRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createAppWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['appName'] = $request->appName;
        }
        if (!Utils::isUnset($request->authentication)) {
            $body['authentication'] = $request->authentication;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['chargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->network)) {
            $body['network'] = $request->network;
        }
        if (!Utils::isUnset($request->privateNetwork)) {
            $body['privateNetwork'] = $request->privateNetwork;
        }
        if (!Utils::isUnset($request->quotaInfo)) {
            $body['quotaInfo'] = $request->quotaInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->version)) {
            $body['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建Serverless应用
     *  *
     * @param CreateAppRequest $request CreateAppRequest
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建端点
     *  *
     * @param CreateEndpointRequest $request CreateEndpointRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEndpointResponse CreateEndpointResponse
     */
    public function createEndpointWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->endpointZones)) {
            $body['endpointZones'] = $request->endpointZones;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['vpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEndpoint',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/endpoints',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建端点
     *  *
     * @param CreateEndpointRequest $request CreateEndpointRequest
     *
     * @return CreateEndpointResponse CreateEndpointResponse
     */
    public function createEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEndpointWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建快照
     *  *
     * @param string                $appName
     * @param string                $repository
     * @param CreateSnapshotRequest $request    CreateSnapshotRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateSnapshotResponse CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($appName, $repository, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->indices)) {
            $body['indices'] = $request->indices;
        }
        if (!Utils::isUnset($request->snapshot)) {
            $body['snapshot'] = $request->snapshot;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSnapshot',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/snapshot-repositories/' . OpenApiUtilClient::getEncodeParam($repository) . '/snapshots',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建快照
     *  *
     * @param string                $appName
     * @param string                $repository
     * @param CreateSnapshotRequest $request    CreateSnapshotRequest
     *
     * @return CreateSnapshotResponse CreateSnapshotResponse
     */
    public function createSnapshot($appName, $repository, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSnapshotWithOptions($appName, $repository, $request, $headers, $runtime);
    }

    /**
     * @summary 删除Serverless应用。
     *  *
     * @param string         $appName
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppResponse DeleteAppResponse
     */
    public function deleteAppWithOptions($appName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteApp',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除Serverless应用。
     *  *
     * @param string $appName
     *
     * @return DeleteAppResponse DeleteAppResponse
     */
    public function deleteApp($appName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAppWithOptions($appName, $headers, $runtime);
    }

    /**
     * @summary 删除词典
     *  *
     * @param string            $appName
     * @param DeleteDictRequest $request DeleteDictRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDictResponse DeleteDictResponse
     */
    public function deleteDictWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDict',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/dicts/actions/remove',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除词典
     *  *
     * @param string            $appName
     * @param DeleteDictRequest $request DeleteDictRequest
     *
     * @return DeleteDictResponse DeleteDictResponse
     */
    public function deleteDict($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDictWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 删除端点
     *  *
     * @param string         $endpointId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteEndpointResponse DeleteEndpointResponse
     */
    public function deleteEndpointWithOptions($endpointId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteEndpoint',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/endpoints/' . OpenApiUtilClient::getEncodeParam($endpointId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除端点
     *  *
     * @param string $endpointId
     *
     * @return DeleteEndpointResponse DeleteEndpointResponse
     */
    public function deleteEndpoint($endpointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEndpointWithOptions($endpointId, $headers, $runtime);
    }

    /**
     * @summary 删除快照
     *  *
     * @param string         $appName
     * @param string         $repository
     * @param string         $snapshot
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteSnapshotResponse DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($appName, $repository, $snapshot, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteSnapshot',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/snapshot-repositories/' . OpenApiUtilClient::getEncodeParam($repository) . '/snapshots/' . OpenApiUtilClient::getEncodeParam($snapshot) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除快照
     *  *
     * @param string $appName
     * @param string $repository
     * @param string $snapshot
     *
     * @return DeleteSnapshotResponse DeleteSnapshotResponse
     */
    public function deleteSnapshot($appName, $repository, $snapshot)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSnapshotWithOptions($appName, $repository, $snapshot, $headers, $runtime);
    }

    /**
     * @summary 获取Serverless应用详情
     *  *
     * @param string         $appName
     * @param GetAppRequest  $request GetAppRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppResponse GetAppResponse
     */
    public function getAppWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->detailed)) {
            $query['detailed'] = $request->detailed;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApp',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取Serverless应用详情
     *  *
     * @param string        $appName
     * @param GetAppRequest $request GetAppRequest
     *
     * @return GetAppResponse GetAppResponse
     */
    public function getApp($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 获取Serverless应用配额详情
     *  *
     * @param string         $appName
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppQuotaResponse GetAppQuotaResponse
     */
    public function getAppQuotaWithOptions($appName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAppQuota',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/quota',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAppQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取Serverless应用配额详情
     *  *
     * @param string $appName
     *
     * @return GetAppQuotaResponse GetAppQuotaResponse
     */
    public function getAppQuota($appName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppQuotaWithOptions($appName, $headers, $runtime);
    }

    /**
     * @summary 获取监控数据
     *  *
     * @param GetMonitorDataRequest $request GetMonitorDataRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMonitorDataResponse GetMonitorDataResponse
     */
    public function getMonitorDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'GetMonitorData',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/emon/metrics/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取监控数据
     *  *
     * @param GetMonitorDataRequest $request GetMonitorDataRequest
     *
     * @return GetMonitorDataResponse GetMonitorDataResponse
     */
    public function getMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMonitorDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取自动备份配置
     *  *
     * @param string         $appName
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSnapshotSettingResponse GetSnapshotSettingResponse
     */
    public function getSnapshotSettingWithOptions($appName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSnapshotSetting',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/auto-snapshot-setting',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSnapshotSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取自动备份配置
     *  *
     * @param string $appName
     *
     * @return GetSnapshotSettingResponse GetSnapshotSettingResponse
     */
    public function getSnapshotSetting($appName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSnapshotSettingWithOptions($appName, $headers, $runtime);
    }

    /**
     * @summary 获取配额审批详情
     *  *
     * @param string         $appName
     * @param string         $taskId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSpecReviewTaskResponse GetSpecReviewTaskResponse
     */
    public function getSpecReviewTaskWithOptions($appName, $taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSpecReviewTask',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/spec-review-tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSpecReviewTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取配额审批详情
     *  *
     * @param string $appName
     * @param string $taskId
     *
     * @return GetSpecReviewTaskResponse GetSpecReviewTaskResponse
     */
    public function getSpecReviewTask($appName, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSpecReviewTaskWithOptions($appName, $taskId, $headers, $runtime);
    }

    /**
     * @summary 查看Serverless应用列表
     *  *
     * @param ListAppsRequest $request ListAppsRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppsResponse ListAppsResponse
     */
    public function listAppsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['appName'] = $request->appName;
        }
        if (!Utils::isUnset($request->createTime)) {
            $query['createTime'] = $request->createTime;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['orderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApps',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看Serverless应用列表
     *  *
     * @param ListAppsRequest $request ListAppsRequest
     *
     * @return ListAppsResponse ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取词典列表
     *  *
     * @param string           $appName
     * @param ListDictsRequest $request ListDictsRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDictsResponse ListDictsResponse
     */
    public function listDictsWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDicts',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/dicts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDictsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取词典列表
     *  *
     * @param string           $appName
     * @param ListDictsRequest $request ListDictsRequest
     *
     * @return ListDictsResponse ListDictsResponse
     */
    public function listDicts($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDictsWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 获取端点信息列表
     *  *
     * @param ListEndpointsRequest $request ListEndpointsRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEndpointsResponse ListEndpointsResponse
     */
    public function listEndpointsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['vpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEndpoints',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/endpoints',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取端点信息列表
     *  *
     * @param ListEndpointsRequest $request ListEndpointsRequest
     *
     * @return ListEndpointsResponse ListEndpointsResponse
     */
    public function listEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEndpointsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查看索引列表
     *  *
     * @param string         $appName
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIndicesResponse ListIndicesResponse
     */
    public function listIndicesWithOptions($appName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListIndices',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/indices',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看索引列表
     *  *
     * @param string $appName
     *
     * @return ListIndicesResponse ListIndicesResponse
     */
    public function listIndices($appName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndicesWithOptions($appName, $headers, $runtime);
    }

    /**
     * @summary 获取快照仓库列表
     *  *
     * @param string         $appName
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSnapshotRepositoriesResponse ListSnapshotRepositoriesResponse
     */
    public function listSnapshotRepositoriesWithOptions($appName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSnapshotRepositories',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/snapshot-repositories',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSnapshotRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取快照仓库列表
     *  *
     * @param string $appName
     *
     * @return ListSnapshotRepositoriesResponse ListSnapshotRepositoriesResponse
     */
    public function listSnapshotRepositories($appName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSnapshotRepositoriesWithOptions($appName, $headers, $runtime);
    }

    /**
     * @summary 获取仓库的快照列表
     *  *
     * @param string               $appName
     * @param ListSnapshotsRequest $request ListSnapshotsRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSnapshotsResponse ListSnapshotsResponse
     */
    public function listSnapshotsWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->repository)) {
            $query['repository'] = $request->repository;
        }
        if (!Utils::isUnset($request->snapshot)) {
            $query['snapshot'] = $request->snapshot;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSnapshots',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/snapshots',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取仓库的快照列表
     *  *
     * @param string               $appName
     * @param ListSnapshotsRequest $request ListSnapshotsRequest
     *
     * @return ListSnapshotsResponse ListSnapshotsResponse
     */
    public function listSnapshots($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSnapshotsWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 获取规格审批列表
     *  *
     * @param string                     $appName
     * @param ListSpecReviewTasksRequest $request ListSpecReviewTasksRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSpecReviewTasksResponse ListSpecReviewTasksResponse
     */
    public function listSpecReviewTasksWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSpecReviewTasks',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/spec-review-tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSpecReviewTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取规格审批列表
     *  *
     * @param string                     $appName
     * @param ListSpecReviewTasksRequest $request ListSpecReviewTasksRequest
     *
     * @return ListSpecReviewTasksResponse ListSpecReviewTasksResponse
     */
    public function listSpecReviewTasks($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSpecReviewTasksWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 编辑Serverless应用
     *  *
     * @param string           $appName
     * @param UpdateAppRequest $request UpdateAppRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAppResponse UpdateAppResponse
     */
    public function updateAppWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applyReason)) {
            $body['applyReason'] = $request->applyReason;
        }
        if (!Utils::isUnset($request->authentication)) {
            $body['authentication'] = $request->authentication;
        }
        if (!Utils::isUnset($request->contactInfo)) {
            $body['contactInfo'] = $request->contactInfo;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->limiterInfo)) {
            $body['limiterInfo'] = $request->limiterInfo;
        }
        if (!Utils::isUnset($request->network)) {
            $body['network'] = $request->network;
        }
        if (!Utils::isUnset($request->privateNetwork)) {
            $body['privateNetwork'] = $request->privateNetwork;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateApp',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑Serverless应用
     *  *
     * @param string           $appName
     * @param UpdateAppRequest $request UpdateAppRequest
     *
     * @return UpdateAppResponse UpdateAppResponse
     */
    public function updateApp($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 创建或更新词典
     *  *
     * @param string            $appName
     * @param UpdateDictRequest $request UpdateDictRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDictResponse UpdateDictResponse
     */
    public function updateDictWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowCover)) {
            $query['allowCover'] = $request->allowCover;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->files)) {
            $body['files'] = $request->files;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['sourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDict',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/dicts',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建或更新词典
     *  *
     * @param string            $appName
     * @param UpdateDictRequest $request UpdateDictRequest
     *
     * @return UpdateDictResponse UpdateDictResponse
     */
    public function updateDict($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDictWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 修改端点信息
     *  *
     * @param string                $endpointId
     * @param UpdateEndpointRequest $request    UpdateEndpointRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateEndpointResponse UpdateEndpointResponse
     */
    public function updateEndpointWithOptions($endpointId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endpointZones)) {
            $body['endpointZones'] = $request->endpointZones;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEndpoint',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/endpoints/' . OpenApiUtilClient::getEncodeParam($endpointId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改端点信息
     *  *
     * @param string                $endpointId
     * @param UpdateEndpointRequest $request    UpdateEndpointRequest
     *
     * @return UpdateEndpointResponse UpdateEndpointResponse
     */
    public function updateEndpoint($endpointId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEndpointWithOptions($endpointId, $request, $headers, $runtime);
    }

    /**
     * @summary 修改自动备份配置
     *  *
     * @param string                       $appName
     * @param UpdateSnapshotSettingRequest $request UpdateSnapshotSettingRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSnapshotSettingResponse UpdateSnapshotSettingResponse
     */
    public function updateSnapshotSettingWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enable)) {
            $body['enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->quartzRegex)) {
            $body['quartzRegex'] = $request->quartzRegex;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSnapshotSetting',
            'version'     => '2023-06-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/es-serverless/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/auto-snapshot-setting',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSnapshotSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改自动备份配置
     *  *
     * @param string                       $appName
     * @param UpdateSnapshotSettingRequest $request UpdateSnapshotSettingRequest
     *
     * @return UpdateSnapshotSettingResponse UpdateSnapshotSettingResponse
     */
    public function updateSnapshotSetting($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSnapshotSettingWithOptions($appName, $request, $headers, $runtime);
    }
}
