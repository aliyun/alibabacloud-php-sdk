<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengverifyagent\V20240131;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Umengverifyagent\V20240131\Models\CreateRequest;
use AlibabaCloud\SDK\Umengverifyagent\V20240131\Models\CreateResponse;
use AlibabaCloud\SDK\Umengverifyagent\V20240131\Models\GetMobileWithTokenRequest;
use AlibabaCloud\SDK\Umengverifyagent\V20240131\Models\GetMobileWithTokenResponse;
use AlibabaCloud\SDK\Umengverifyagent\V20240131\Models\QueryAppInfoBySchemeRequest;
use AlibabaCloud\SDK\Umengverifyagent\V20240131\Models\QueryAppInfoBySchemeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Umengverifyagent extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('umeng-verify-agent', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateResponse
     */
    public function createWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['appName'] = $request->appName;
        }
        if (!Utils::isUnset($request->bundleId)) {
            $body['bundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->packName)) {
            $body['packName'] = $request->packName;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->schemeName)) {
            $body['schemeName'] = $request->schemeName;
        }
        if (!Utils::isUnset($request->signName)) {
            $body['signName'] = $request->signName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Create',
            'version'     => '2024-01-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/Create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRequest $request
     *
     * @return CreateResponse
     */
    public function create($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetMobileWithTokenRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetMobileWithTokenResponse
     */
    public function getMobileWithTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiCode)) {
            $body['apiCode'] = $request->apiCode;
        }
        if (!Utils::isUnset($request->operatorId)) {
            $body['operatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->osType)) {
            $body['osType'] = $request->osType;
        }
        if (!Utils::isUnset($request->schemeCode)) {
            $body['schemeCode'] = $request->schemeCode;
        }
        if (!Utils::isUnset($request->token)) {
            $body['token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMobileWithToken',
            'version'     => '2024-01-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/GetMobileWithToken',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMobileWithTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMobileWithTokenRequest $request
     *
     * @return GetMobileWithTokenResponse
     */
    public function getMobileWithToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMobileWithTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryAppInfoBySchemeRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAppInfoBySchemeResponse
     */
    public function queryAppInfoBySchemeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->schemeCode)) {
            $body['schemeCode'] = $request->schemeCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryAppInfoByScheme',
            'version'     => '2024-01-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/QueryAppInfoByScheme',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAppInfoBySchemeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAppInfoBySchemeRequest $request
     *
     * @return QueryAppInfoBySchemeResponse
     */
    public function queryAppInfoByScheme($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAppInfoBySchemeWithOptions($request, $headers, $runtime);
    }
}
