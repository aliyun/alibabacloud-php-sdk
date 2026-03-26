<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaaS\V20260318;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\MaaS\V20260318\Models\CreateApiKeyRequest;
use AlibabaCloud\SDK\MaaS\V20260318\Models\CreateApiKeyResponse;
use AlibabaCloud\SDK\MaaS\V20260318\Models\DeleteApiKeyRequest;
use AlibabaCloud\SDK\MaaS\V20260318\Models\DeleteApiKeyResponse;
use AlibabaCloud\SDK\MaaS\V20260318\Models\GetApiKeyRequest;
use AlibabaCloud\SDK\MaaS\V20260318\Models\GetApiKeyResponse;
use AlibabaCloud\SDK\MaaS\V20260318\Models\ListApiKeysRequest;
use AlibabaCloud\SDK\MaaS\V20260318\Models\ListApiKeysResponse;
use AlibabaCloud\SDK\MaaS\V20260318\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\MaaS\V20260318\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\MaaS\V20260318\Models\UpdateApiKeyRequest;
use AlibabaCloud\SDK\MaaS\V20260318\Models\UpdateApiKeyResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class MaaS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('maas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建ApiKey.
     *
     * @param request - CreateApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApiKeyResponse
     *
     * @param CreateApiKeyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateApiKeyResponse
     */
    public function createApiKeyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApiKey',
            'version' => '2026-03-18',
            'protocol' => 'HTTPS',
            'pathname' => '/bailianControl/apiKey/createApiKey',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建ApiKey.
     *
     * @param request - CreateApiKeyRequest
     *
     * @returns CreateApiKeyResponse
     *
     * @param CreateApiKeyRequest $request
     *
     * @return CreateApiKeyResponse
     */
    public function createApiKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createApiKeyWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除apiKey.
     *
     * @param request - DeleteApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApiKeyResponse
     *
     * @param DeleteApiKeyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteApiKeyResponse
     */
    public function deleteApiKeyWithOptions($request, $headers, $runtime)
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
            'action' => 'DeleteApiKey',
            'version' => '2026-03-18',
            'protocol' => 'HTTPS',
            'pathname' => '/bailianControl/apiKey/deleteApiKey',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除apiKey.
     *
     * @param request - DeleteApiKeyRequest
     *
     * @returns DeleteApiKeyResponse
     *
     * @param DeleteApiKeyRequest $request
     *
     * @return DeleteApiKeyResponse
     */
    public function deleteApiKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteApiKeyWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询ApiKey详情.
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
            'version' => '2026-03-18',
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
     * 查询ApiKey详情.
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

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiKeys',
            'version' => '2026-03-18',
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

    /**
     * 业务空间列表.
     *
     * @param request - ListWorkspacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->workspaceName) {
            @$query['workspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaces',
            'version' => '2026-03-18',
            'protocol' => 'HTTPS',
            'pathname' => '/bailianControl/workspaces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 业务空间列表.
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
     * 编辑apiKey的描述.
     *
     * @param request - UpdateApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApiKeyResponse
     *
     * @param UpdateApiKeyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateApiKeyResponse
     */
    public function updateApiKeyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKeyId) {
            @$query['apiKeyId'] = $request->apiKeyId;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApiKey',
            'version' => '2026-03-18',
            'protocol' => 'HTTPS',
            'pathname' => '/bailianControl/apiKey/updateApiKey',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑apiKey的描述.
     *
     * @param request - UpdateApiKeyRequest
     *
     * @returns UpdateApiKeyResponse
     *
     * @param UpdateApiKeyRequest $request
     *
     * @return UpdateApiKeyResponse
     */
    public function updateApiKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApiKeyWithOptions($request, $headers, $runtime);
    }
}
