<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAdaptationRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAdaptationResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAdaptationShrinkRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\DeleteAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAdaptationRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAdaptationResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyAppRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyAppResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyAppVersionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ModifyAppVersionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class CGCS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cgcs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateAdaptationRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAdaptationResponse
     */
    public function createAdaptationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAdaptationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adaptTarget)) {
            $request->adaptTargetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->adaptTarget), 'AdaptTarget', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->adaptTargetShrink)) {
            $body['AdaptTarget'] = $request->adaptTargetShrink;
        }
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAdaptation',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAdaptationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAdaptationRequest $request
     *
     * @return CreateAdaptationResponse
     */
    public function createAdaptation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAdaptationWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2021-11-11',
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
     * @param CreateAppSessionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAppSessionResponse
     */
    public function createAppSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->customSessionId)) {
            $query['CustomSessionId'] = $request->customSessionId;
        }
        if (!Utils::isUnset($request->customUserId)) {
            $query['CustomUserId'] = $request->customUserId;
        }
        if (!Utils::isUnset($request->enablePostpaid)) {
            $query['EnablePostpaid'] = $request->enablePostpaid;
        }
        if (!Utils::isUnset($request->startParameters)) {
            $query['StartParameters'] = $request->startParameters;
        }
        if (!Utils::isUnset($request->systemInfo)) {
            $query['SystemInfo'] = $request->systemInfo;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppSession',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppSessionRequest $request
     *
     * @return CreateAppSessionResponse
     */
    public function createAppSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppSessionWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAppVersionResponse
     */
    public function createAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersionName)) {
            $body['AppVersionName'] = $request->appVersionName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAppVersion',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppVersionRequest $request
     *
     * @return CreateAppVersionResponse
     */
    public function createAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppVersionWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteApp',
            'version'     => '2021-11-11',
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
     * @param DeleteAppVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAppVersionResponse
     */
    public function deleteAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppVersion',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAppVersionRequest $request
     *
     * @return DeleteAppVersionResponse
     */
    public function deleteAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param GetAdaptationRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAdaptationResponse
     */
    public function getAdaptationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->adaptApplyId)) {
            $body['AdaptApplyId'] = $request->adaptApplyId;
        }
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAdaptation',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAdaptationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAdaptationRequest $request
     *
     * @return GetAdaptationResponse
     */
    public function getAdaptation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAdaptationWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetApp',
            'version'     => '2021-11-11',
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
     * @param GetAppSessionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAppSessionResponse
     */
    public function getAppSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customSessionId)) {
            $query['CustomSessionId'] = $request->customSessionId;
        }
        if (!Utils::isUnset($request->platformSessionId)) {
            $query['PlatformSessionId'] = $request->platformSessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppSession',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAppSessionRequest $request
     *
     * @return GetAppSessionResponse
     */
    public function getAppSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppSessionWithOptions($request, $runtime);
    }

    /**
     * @param GetAppVersionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAppVersionResponse
     */
    public function getAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAppVersion',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAppVersionRequest $request
     *
     * @return GetAppVersionResponse
     */
    public function getAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param ListAppRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListAppResponse
     */
    public function listAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keySearch)) {
            $body['KeySearch'] = $request->keySearch;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListApp',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppRequest $request
     *
     * @return ListAppResponse
     */
    public function listApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppWithOptions($request, $runtime);
    }

    /**
     * @param ListAppSessionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAppSessionsResponse
     */
    public function listAppSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->customSessionIds)) {
            $query['CustomSessionIds'] = $request->customSessionIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->platformSessionIds)) {
            $query['PlatformSessionIds'] = $request->platformSessionIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppSessions',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppSessionsRequest $request
     *
     * @return ListAppSessionsResponse
     */
    public function listAppSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppSessionsWithOptions($request, $runtime);
    }

    /**
     * @param ListAppVersionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAppVersionResponse
     */
    public function listAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAppVersion',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppVersionRequest $request
     *
     * @return ListAppVersionResponse
     */
    public function listAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyAppResponse
     */
    public function modifyAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyApp',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAppRequest $request
     *
     * @return ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAppVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyAppVersionResponse
     */
    public function modifyAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appVersionId)) {
            $body['AppVersionId'] = $request->appVersionId;
        }
        if (!Utils::isUnset($request->appVersionName)) {
            $body['AppVersionName'] = $request->appVersionName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyAppVersion',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAppVersionRequest $request
     *
     * @return ModifyAppVersionResponse
     */
    public function modifyAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppVersionWithOptions($request, $runtime);
    }

    /**
     * @param StopAppSessionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopAppSessionResponse
     */
    public function stopAppSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customSessionId)) {
            $query['CustomSessionId'] = $request->customSessionId;
        }
        if (!Utils::isUnset($request->platformSessionId)) {
            $query['PlatformSessionId'] = $request->platformSessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopAppSession',
            'version'     => '2021-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopAppSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopAppSessionRequest $request
     *
     * @return StopAppSessionResponse
     */
    public function stopAppSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAppSessionWithOptions($request, $runtime);
    }
}
