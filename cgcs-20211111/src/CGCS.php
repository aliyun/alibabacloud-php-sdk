<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppSessionResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsResponse;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionRequest;
use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionResponse;
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
        $this->_endpointRule = '';
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
