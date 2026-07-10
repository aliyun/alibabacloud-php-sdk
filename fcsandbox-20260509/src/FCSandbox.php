<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\CreateApiKeyRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\CreateApiKeyResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\CreateTeamRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\CreateTeamResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DeleteApiKeyRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DeleteApiKeyResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DeleteQuotaRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DeleteQuotaResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DeleteTeamRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DeleteTeamResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DescribeApiKeyRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DescribeApiKeyResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DescribeQuotaRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DescribeQuotaResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\GetTeamRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\GetTeamResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\ListApiKeysRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\ListApiKeysResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\ListQuotaRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\ListQuotaResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\ListTeamsRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\ListTeamsResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\ResetApiKeyRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\ResetApiKeyResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\UpdateQuotaRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\UpdateQuotaResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\UpdateTeamRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\UpdateTeamResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class FCSandbox extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('fcsandbox', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建 ApiKey.
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateApiKey',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/api-keys',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 ApiKey.
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
     * 创建 Team.
     *
     * @param request - CreateTeamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTeamResponse
     *
     * @param CreateTeamRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTeamResponse
     */
    public function createTeamWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateTeam',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/teams',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTeamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 Team.
     *
     * @param request - CreateTeamRequest
     *
     * @returns CreateTeamResponse
     *
     * @param CreateTeamRequest $request
     *
     * @return CreateTeamResponse
     */
    public function createTeam($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTeamWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除 ApiKey.
     *
     * @param request - DeleteApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApiKeyResponse
     *
     * @param string              $apiKeyID
     * @param DeleteApiKeyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteApiKeyResponse
     */
    public function deleteApiKeyWithOptions($apiKeyID, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteApiKey',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/api-keys/' . Url::percentEncode($apiKeyID) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 ApiKey.
     *
     * @param request - DeleteApiKeyRequest
     *
     * @returns DeleteApiKeyResponse
     *
     * @param string              $apiKeyID
     * @param DeleteApiKeyRequest $request
     *
     * @return DeleteApiKeyResponse
     */
    public function deleteApiKey($apiKeyID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteApiKeyWithOptions($apiKeyID, $request, $headers, $runtime);
    }

    /**
     * 删除 quota 配置.
     *
     * @param request - DeleteQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQuotaResponse
     *
     * @param DeleteQuotaRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteQuotaResponse
     */
    public function deleteQuotaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tagValue) {
            @$query['tagValue'] = $request->tagValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteQuota',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/quotas/tag',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 quota 配置.
     *
     * @param request - DeleteQuotaRequest
     *
     * @returns DeleteQuotaResponse
     *
     * @param DeleteQuotaRequest $request
     *
     * @return DeleteQuotaResponse
     */
    public function deleteQuota($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteQuotaWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除 Team.
     *
     * @param request - DeleteTeamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTeamResponse
     *
     * @param string            $teamID
     * @param DeleteTeamRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteTeamResponse
     */
    public function deleteTeamWithOptions($teamID, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTeam',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/teams/' . Url::percentEncode($teamID) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTeamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 Team.
     *
     * @param request - DeleteTeamRequest
     *
     * @returns DeleteTeamResponse
     *
     * @param string            $teamID
     * @param DeleteTeamRequest $request
     *
     * @return DeleteTeamResponse
     */
    public function deleteTeam($teamID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTeamWithOptions($teamID, $request, $headers, $runtime);
    }

    /**
     * 查看 ApiKey.
     *
     * @param request - DescribeApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiKeyResponse
     *
     * @param string                $apiKeyID
     * @param DescribeApiKeyRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeApiKeyResponse
     */
    public function describeApiKeyWithOptions($apiKeyID, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeApiKey',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/api-keys/' . Url::percentEncode($apiKeyID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看 ApiKey.
     *
     * @param request - DescribeApiKeyRequest
     *
     * @returns DescribeApiKeyResponse
     *
     * @param string                $apiKeyID
     * @param DescribeApiKeyRequest $request
     *
     * @return DescribeApiKeyResponse
     */
    public function describeApiKey($apiKeyID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApiKeyWithOptions($apiKeyID, $request, $headers, $runtime);
    }

    /**
     * 获取 quota 配置.
     *
     * @param request - DescribeQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeQuotaResponse
     *
     * @param DescribeQuotaRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeQuotaResponse
     */
    public function describeQuotaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tagValue) {
            @$query['tagValue'] = $request->tagValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeQuota',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/quotas/tag',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取 quota 配置.
     *
     * @param request - DescribeQuotaRequest
     *
     * @returns DescribeQuotaResponse
     *
     * @param DescribeQuotaRequest $request
     *
     * @return DescribeQuotaResponse
     */
    public function describeQuota($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeQuotaWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取Team详情.
     *
     * @param request - GetTeamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTeamResponse
     *
     * @param string         $teamID
     * @param GetTeamRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTeamResponse
     */
    public function getTeamWithOptions($teamID, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTeam',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/teams/' . Url::percentEncode($teamID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTeamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Team详情.
     *
     * @param request - GetTeamRequest
     *
     * @returns GetTeamResponse
     *
     * @param string         $teamID
     * @param GetTeamRequest $request
     *
     * @return GetTeamResponse
     */
    public function getTeam($teamID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTeamWithOptions($teamID, $request, $headers, $runtime);
    }

    /**
     * 分页查询 ApiKey.
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
        if (null !== $request->apiKeyName) {
            @$query['apiKeyName'] = $request->apiKeyName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupID) {
            @$query['resourceGroupID'] = $request->resourceGroupID;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->teamID) {
            @$query['teamID'] = $request->teamID;
        }

        if (null !== $request->userID) {
            @$query['userID'] = $request->userID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiKeys',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/api-keys',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApiKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询 ApiKey.
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
     * 查询 quota 配置.
     *
     * @param request - ListQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotaResponse
     *
     * @param ListQuotaRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListQuotaResponse
     */
    public function listQuotaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQuota',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/quotas',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 quota 配置.
     *
     * @param request - ListQuotaRequest
     *
     * @returns ListQuotaResponse
     *
     * @param ListQuotaRequest $request
     *
     * @return ListQuotaResponse
     */
    public function listQuota($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotaWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询 Team 列表.
     *
     * @param request - ListTeamsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTeamsResponse
     *
     * @param ListTeamsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTeamsResponse
     */
    public function listTeamsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupID) {
            @$query['resourceGroupID'] = $request->resourceGroupID;
        }

        if (null !== $request->teamName) {
            @$query['teamName'] = $request->teamName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTeams',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/teams',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTeamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 Team 列表.
     *
     * @param request - ListTeamsRequest
     *
     * @returns ListTeamsResponse
     *
     * @param ListTeamsRequest $request
     *
     * @return ListTeamsResponse
     */
    public function listTeams($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTeamsWithOptions($request, $headers, $runtime);
    }

    /**
     * 重置 ApiKey.
     *
     * @param request - ResetApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetApiKeyResponse
     *
     * @param string             $apiKeyID
     * @param ResetApiKeyRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ResetApiKeyResponse
     */
    public function resetApiKeyWithOptions($apiKeyID, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResetApiKey',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/api-keys/' . Url::percentEncode($apiKeyID) . '/reset',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResetApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重置 ApiKey.
     *
     * @param request - ResetApiKeyRequest
     *
     * @returns ResetApiKeyResponse
     *
     * @param string             $apiKeyID
     * @param ResetApiKeyRequest $request
     *
     * @return ResetApiKeyResponse
     */
    public function resetApiKey($apiKeyID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetApiKeyWithOptions($apiKeyID, $request, $headers, $runtime);
    }

    /**
     * 更新 quota 配置.
     *
     * @param request - UpdateQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateQuotaResponse
     *
     * @param UpdateQuotaRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateQuotaResponse
     */
    public function updateQuotaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateQuota',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/quotas/tag',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 quota 配置.
     *
     * @param request - UpdateQuotaRequest
     *
     * @returns UpdateQuotaResponse
     *
     * @param UpdateQuotaRequest $request
     *
     * @return UpdateQuotaResponse
     */
    public function updateQuota($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateQuotaWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新 Team.
     *
     * @param request - UpdateTeamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTeamResponse
     *
     * @param string            $teamID
     * @param UpdateTeamRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateTeamResponse
     */
    public function updateTeamWithOptions($teamID, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateTeam',
            'version' => '2026-05-09',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-05-09/teams/' . Url::percentEncode($teamID) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTeamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 Team.
     *
     * @param request - UpdateTeamRequest
     *
     * @returns UpdateTeamResponse
     *
     * @param string            $teamID
     * @param UpdateTeamRequest $request
     *
     * @return UpdateTeamResponse
     */
    public function updateTeam($teamID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTeamWithOptions($teamID, $request, $headers, $runtime);
    }
}
