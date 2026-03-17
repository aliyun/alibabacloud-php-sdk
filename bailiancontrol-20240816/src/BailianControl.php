<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianControl\V20240816;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\BailianControl\V20240816\Models\GetApiKeyRequest;
use AlibabaCloud\SDK\BailianControl\V20240816\Models\GetApiKeyResponse;
use AlibabaCloud\SDK\BailianControl\V20240816\Models\ListApiKeysRequest;
use AlibabaCloud\SDK\BailianControl\V20240816\Models\ListApiKeysResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class BailianControl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bailiancontrol', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 查询 apiKey.
     *
     * @param request - GetApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApiKeyResponse
     *
     * @param GetApiKeyRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetApiKeyResponse
     */
    public function getApiKeyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApiKey',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/bailianControl/apiKey/getApiKey',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 apiKey.
     *
     * @param request - GetApiKeyRequest
     *
     * @returns GetApiKeyResponse
     *
     * @param GetApiKeyRequest $request
     *
     * @return GetApiKeyResponse
     */
    public function getApiKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getApiKeyWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取ApiKey列表.
     *
     * @param request - ListApiKeysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApiKeysResponse
     *
     * @param ListApiKeysRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListApiKeysResponse
     */
    public function listApiKeysWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->skip) {
            @$query['skip'] = $request->skip;
        }

        if (null !== $request->uid) {
            @$query['uid'] = $request->uid;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiKeys',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/bailianControl/apiKeys',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApiKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取ApiKey列表.
     *
     * @param request - ListApiKeysRequest
     *
     * @returns ListApiKeysResponse
     *
     * @param ListApiKeysRequest $request
     *
     * @return ListApiKeysResponse
     */
    public function listApiKeys($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApiKeysWithOptions($request, $headers, $runtime);
    }
}
