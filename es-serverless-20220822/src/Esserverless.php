<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20220822;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\CreateAppRequest;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\CreateAppResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\CreateDataStreamRequest;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\CreateDataStreamResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\DeleteAccessTokenResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\DeleteDataStreamResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\DescibeRegionsResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\DisableAccessTokenResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\EnableAccessTokenResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\GenerateAcccessTokenResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\GetAppResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\GetDataStreamResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\GetRegionInfoResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\ListAccessTokensRequest;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\ListAccessTokensResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\ListAppsRequest;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\ListAppsResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\ListDataStreamsRequest;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\ListDataStreamsResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\UpdateAppRequest;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\UpdateAppResponse;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\UpdateDataStreamRequest;
use AlibabaCloud\SDK\Esserverless\V20220822\Models\UpdateDataStreamResponse;
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
        if (!Utils::isUnset($request->chargeType)) {
            $body['chargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/instances',
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
     * @param string                  $appName
     * @param CreateDataStreamRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataStreamResponse
     */
    public function createDataStreamWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataStreamName)) {
            $body['dataStreamName'] = $request->dataStreamName;
        }
        if (!Utils::isUnset($request->deletePhase)) {
            $body['deletePhase'] = $request->deletePhase;
        }
        if (!Utils::isUnset($request->dynamic)) {
            $body['dynamic'] = $request->dynamic;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->template)) {
            $body['template'] = $request->template;
        }
        if (!Utils::isUnset($request->timeStampKey)) {
            $body['timeStampKey'] = $request->timeStampKey;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataStream',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/data-streams',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $appName
     * @param CreateDataStreamRequest $request
     *
     * @return CreateDataStreamResponse
     */
    public function createDataStream($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataStreamWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @param string         $tokenId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAccessTokenResponse
     */
    public function deleteAccessTokenWithOptions($tokenId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessToken',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/tokens/' . OpenApiUtilClient::getEncodeParam($tokenId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $tokenId
     *
     * @return DeleteAccessTokenResponse
     */
    public function deleteAccessToken($tokenId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAccessTokenWithOptions($tokenId, $headers, $runtime);
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
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '',
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
     * @param string         $dataStreamName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDataStreamResponse
     */
    public function deleteDataStreamWithOptions($appName, $dataStreamName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDataStream',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/data-streams/' . OpenApiUtilClient::getEncodeParam($dataStreamName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appName
     * @param string $dataStreamName
     *
     * @return DeleteDataStreamResponse
     */
    public function deleteDataStream($appName, $dataStreamName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataStreamWithOptions($appName, $dataStreamName, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescibeRegionsResponse
     */
    public function descibeRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescibeRegions',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/regions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescibeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescibeRegionsResponse
     */
    public function descibeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->descibeRegionsWithOptions($headers, $runtime);
    }

    /**
     * @param string         $tokenId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DisableAccessTokenResponse
     */
    public function disableAccessTokenWithOptions($tokenId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DisableAccessToken',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/tokens/' . OpenApiUtilClient::getEncodeParam($tokenId) . '/actions/disable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $tokenId
     *
     * @return DisableAccessTokenResponse
     */
    public function disableAccessToken($tokenId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableAccessTokenWithOptions($tokenId, $headers, $runtime);
    }

    /**
     * @param string         $tokenId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return EnableAccessTokenResponse
     */
    public function enableAccessTokenWithOptions($tokenId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'EnableAccessToken',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/tokens/' . OpenApiUtilClient::getEncodeParam($tokenId) . '/actions/enable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $tokenId
     *
     * @return EnableAccessTokenResponse
     */
    public function enableAccessToken($tokenId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableAccessTokenWithOptions($tokenId, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GenerateAcccessTokenResponse
     */
    public function generateAcccessTokenWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GenerateAcccessToken',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/tokens',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateAcccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GenerateAcccessTokenResponse
     */
    public function generateAcccessToken()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateAcccessTokenWithOptions($headers, $runtime);
    }

    /**
     * @param string         $appName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAppResponse
     */
    public function getAppWithOptions($appName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetApp',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appName
     *
     * @return GetAppResponse
     */
    public function getApp($appName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppWithOptions($appName, $headers, $runtime);
    }

    /**
     * @param string         $appName
     * @param string         $dataStreamName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDataStreamResponse
     */
    public function getDataStreamWithOptions($appName, $dataStreamName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDataStream',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/data-streams/' . OpenApiUtilClient::getEncodeParam($dataStreamName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appName
     * @param string $dataStreamName
     *
     * @return GetDataStreamResponse
     */
    public function getDataStream($appName, $dataStreamName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataStreamWithOptions($appName, $dataStreamName, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRegionInfoResponse
     */
    public function getRegionInfoWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRegionInfo',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/regions/info',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRegionInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetRegionInfoResponse
     */
    public function getRegionInfo()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegionInfoWithOptions($headers, $runtime);
    }

    /**
     * @param ListAccessTokensRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListAccessTokensResponse
     */
    public function listAccessTokensWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tokenId)) {
            $query['tokenId'] = $request->tokenId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccessTokens',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/tokens',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAccessTokensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAccessTokensRequest $request
     *
     * @return ListAccessTokensResponse
     */
    public function listAccessTokens($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAccessTokensWithOptions($request, $headers, $runtime);
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
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
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
            'action'      => 'ListApps',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/instances',
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
     * @param string                 $appName
     * @param ListDataStreamsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataStreamsResponse
     */
    public function listDataStreamsWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataStreamName)) {
            $query['dataStreamName'] = $request->dataStreamName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataStreams',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/data-streams',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataStreamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $appName
     * @param ListDataStreamsRequest $request
     *
     * @return ListDataStreamsResponse
     */
    public function listDataStreams($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataStreamsWithOptions($appName, $request, $headers, $runtime);
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
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateApp',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '',
            'method'      => 'PUT',
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

    /**
     * @param string                  $dataStreamName
     * @param string                  $appName
     * @param UpdateDataStreamRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDataStreamResponse
     */
    public function updateDataStreamWithOptions($dataStreamName, $appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deletePhase)) {
            $body['deletePhase'] = $request->deletePhase;
        }
        if (!Utils::isUnset($request->dynamic)) {
            $body['dynamic'] = $request->dynamic;
        }
        if (!Utils::isUnset($request->template)) {
            $body['template'] = $request->template;
        }
        if (!Utils::isUnset($request->timeStampKey)) {
            $body['timeStampKey'] = $request->timeStampKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataStream',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/xops/instances/' . OpenApiUtilClient::getEncodeParam($appName) . '/data-streams/' . OpenApiUtilClient::getEncodeParam($dataStreamName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $dataStreamName
     * @param string                  $appName
     * @param UpdateDataStreamRequest $request
     *
     * @return UpdateDataStreamResponse
     */
    public function updateDataStream($dataStreamName, $appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDataStreamWithOptions($dataStreamName, $appName, $request, $headers, $runtime);
    }
}
