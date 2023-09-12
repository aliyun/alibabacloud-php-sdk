<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppResponse;
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
     * @param CreateAppRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
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
        if (!Utils::isUnset($request->regionId)) {
            $body['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->version)) {
            $body['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
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
     * @param string         $appName
     * @param GetAppRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAppResponse
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
     * @param GetMonitorDataRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetMonitorDataResponse
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
     * @param ListAppsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
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
     * @param string           $appName
     * @param UpdateAppRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAppResponse
     */
    public function updateAppWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authentication)) {
            $body['authentication'] = $request->authentication;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->network)) {
            $body['network'] = $request->network;
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
}
