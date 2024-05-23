<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateEndpointRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateEndpointResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppQuotaResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetMonitorDataRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetMonitorDataResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListAppsRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListAppsResponse;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateAppResponse;
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
}
