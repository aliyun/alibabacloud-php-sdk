<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\DeleteApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\DeleteWorkspaceRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\DisableApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\DisableApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\EnableApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\EnableApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListApiKeysRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListApiKeysResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ResetApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ResetApiKeyResponse;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateApiKeyRequest;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\UpdateApiKeyResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ModelStudio extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('modelstudio', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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

        $body = [];
        if (null !== $request->auth) {
            @$body['auth'] = $request->auth;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
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
     * 创建业务空间.
     *
     * @param request - CreateWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceSite) {
            @$query['serviceSite'] = $request->serviceSite;
        }

        if (null !== $request->workspaceName) {
            @$query['workspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWorkspace',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/workspaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建业务空间.
     *
     * @param request - CreateWorkspaceRequest
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除apiKey.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApiKeyResponse
     *
     * @param string         $apiKeyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteApiKeyResponse
     */
    public function deleteApiKeyWithOptions($apiKeyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys/' . Url::percentEncode($apiKeyId) . '',
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
     * @returns DeleteApiKeyResponse
     *
     * @param string $apiKeyId
     *
     * @return DeleteApiKeyResponse
     */
    public function deleteApiKey($apiKeyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteApiKeyWithOptions($apiKeyId, $headers, $runtime);
    }

    /**
     * 删除业务空间.
     *
     * @param request - DeleteWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string                 $workspaceId
     * @param DeleteWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspaceWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteWorkspace',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/workspaces/' . Url::percentEncode($workspaceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除业务空间.
     *
     * @param request - DeleteWorkspaceRequest
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string                 $workspaceId
     * @param DeleteWorkspaceRequest $request
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspace($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 禁用API Key.
     *
     * @param request - DisableApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableApiKeyResponse
     *
     * @param string               $apiKeyId
     * @param DisableApiKeyRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DisableApiKeyResponse
     */
    public function disableApiKeyWithOptions($apiKeyId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DisableApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys/' . Url::percentEncode($apiKeyId) . '/disable',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用API Key.
     *
     * @param request - DisableApiKeyRequest
     *
     * @returns DisableApiKeyResponse
     *
     * @param string               $apiKeyId
     * @param DisableApiKeyRequest $request
     *
     * @return DisableApiKeyResponse
     */
    public function disableApiKey($apiKeyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableApiKeyWithOptions($apiKeyId, $request, $headers, $runtime);
    }

    /**
     * 启用API Key.
     *
     * @param request - EnableApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableApiKeyResponse
     *
     * @param string              $apiKeyId
     * @param EnableApiKeyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return EnableApiKeyResponse
     */
    public function enableApiKeyWithOptions($apiKeyId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'EnableApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys/' . Url::percentEncode($apiKeyId) . '/enable',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用API Key.
     *
     * @param request - EnableApiKeyRequest
     *
     * @returns EnableApiKeyResponse
     *
     * @param string              $apiKeyId
     * @param EnableApiKeyRequest $request
     *
     * @return EnableApiKeyResponse
     */
    public function enableApiKey($apiKeyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableApiKeyWithOptions($apiKeyId, $request, $headers, $runtime);
    }

    /**
     * 查询ApiKey详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApiKeyResponse
     *
     * @param string         $apiKeyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetApiKeyResponse
     */
    public function getApiKeyWithOptions($apiKeyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys/' . Url::percentEncode($apiKeyId) . '',
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
     * @returns GetApiKeyResponse
     *
     * @param string $apiKeyId
     *
     * @return GetApiKeyResponse
     */
    public function getApiKey($apiKeyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getApiKeyWithOptions($apiKeyId, $headers, $runtime);
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
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys',
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

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
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
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/workspaces',
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
     * 重置API Key.
     *
     * @param request - ResetApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetApiKeyResponse
     *
     * @param string             $apiKeyId
     * @param ResetApiKeyRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ResetApiKeyResponse
     */
    public function resetApiKeyWithOptions($apiKeyId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResetApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys/' . Url::percentEncode($apiKeyId) . '/reset',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResetApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重置API Key.
     *
     * @param request - ResetApiKeyRequest
     *
     * @returns ResetApiKeyResponse
     *
     * @param string             $apiKeyId
     * @param ResetApiKeyRequest $request
     *
     * @return ResetApiKeyResponse
     */
    public function resetApiKey($apiKeyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetApiKeyWithOptions($apiKeyId, $request, $headers, $runtime);
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
     * @param string              $apiKeyId
     * @param UpdateApiKeyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateApiKeyResponse
     */
    public function updateApiKeyWithOptions($apiKeyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        $body = [];
        if (null !== $request->auth) {
            @$body['auth'] = $request->auth;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateApiKey',
            'version' => '2026-02-10',
            'protocol' => 'HTTPS',
            'pathname' => '/modelstudio/apikeys/' . Url::percentEncode($apiKeyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
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
     * @param string              $apiKeyId
     * @param UpdateApiKeyRequest $request
     *
     * @return UpdateApiKeyResponse
     */
    public function updateApiKey($apiKeyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApiKeyWithOptions($apiKeyId, $request, $headers, $runtime);
    }
}
