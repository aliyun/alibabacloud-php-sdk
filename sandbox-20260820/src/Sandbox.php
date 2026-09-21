<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateApiKeyRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateApiKeyResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateTeamRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateTeamResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateTemplateCacheRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateTemplateCacheResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateVolumeRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateVolumeResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteApiKeyRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteApiKeyResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteQuotaRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteQuotaResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteTeamRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteTeamResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteTemplateCacheRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteTemplateCacheResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteVolumeRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteVolumeResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DescribeApiKeyRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DescribeApiKeyResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DescribeQuotaRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DescribeQuotaResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DescribeTemplateCacheRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DescribeTemplateCacheResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\GetTeamRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\GetTeamResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\GetTemplateRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\GetTemplateResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\GetVolumeRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\GetVolumeResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListApiKeysRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListApiKeysResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListQuotaRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListQuotaResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListTeamsRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListTeamsResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListTemplateCacheRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListTemplateCacheResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListVolumesRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListVolumesResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ResetApiKeyRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ResetApiKeyResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateApiKeyRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateApiKeyResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateQuotaRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateQuotaResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateTeamRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateTeamResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateVolumeRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateVolumeResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Sandbox extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'sandbox-vpc.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sandbox', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/api-keys',
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/teams',
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
     * 创建 Template.
     *
     * @param request - CreateTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateTemplate',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/templates',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 Template.
     *
     * @param request - CreateTemplateRequest
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建模板缓存.
     *
     * @param request - CreateTemplateCacheRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateCacheResponse
     *
     * @param CreateTemplateCacheRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateTemplateCacheResponse
     */
    public function createTemplateCacheWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateTemplateCache',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/template-caches',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTemplateCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建模板缓存.
     *
     * @param request - CreateTemplateCacheRequest
     *
     * @returns CreateTemplateCacheResponse
     *
     * @param CreateTemplateCacheRequest $request
     *
     * @return CreateTemplateCacheResponse
     */
    public function createTemplateCache($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTemplateCacheWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建 Volume.
     *
     * @param request - CreateVolumeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVolumeResponse
     *
     * @param CreateVolumeRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateVolumeResponse
     */
    public function createVolumeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateVolume',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/volumes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 Volume.
     *
     * @param request - CreateVolumeRequest
     *
     * @returns CreateVolumeResponse
     *
     * @param CreateVolumeRequest $request
     *
     * @return CreateVolumeResponse
     */
    public function createVolume($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVolumeWithOptions($request, $headers, $runtime);
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/api-keys/' . Url::percentEncode($apiKeyID) . '',
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/quotas/tag',
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/teams/' . Url::percentEncode($teamID) . '',
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
     * 删除 Template.
     *
     * @param request - DeleteTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplateResponse
     *
     * @param string                $templateID
     * @param DeleteTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($templateID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->teamID) {
            @$query['teamID'] = $request->teamID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTemplate',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/templates/' . Url::percentEncode($templateID) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 Template.
     *
     * @param request - DeleteTemplateRequest
     *
     * @returns DeleteTemplateResponse
     *
     * @param string                $templateID
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($templateID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTemplateWithOptions($templateID, $request, $headers, $runtime);
    }

    /**
     * 删除模板缓存.
     *
     * @param request - DeleteTemplateCacheRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplateCacheResponse
     *
     * @param string                     $templateID
     * @param DeleteTemplateCacheRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteTemplateCacheResponse
     */
    public function deleteTemplateCacheWithOptions($templateID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->teamID) {
            @$query['teamID'] = $request->teamID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTemplateCache',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/template-caches/' . Url::percentEncode($templateID) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTemplateCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除模板缓存.
     *
     * @param request - DeleteTemplateCacheRequest
     *
     * @returns DeleteTemplateCacheResponse
     *
     * @param string                     $templateID
     * @param DeleteTemplateCacheRequest $request
     *
     * @return DeleteTemplateCacheResponse
     */
    public function deleteTemplateCache($templateID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTemplateCacheWithOptions($templateID, $request, $headers, $runtime);
    }

    /**
     * 删除 Volume.
     *
     * @param request - DeleteVolumeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVolumeResponse
     *
     * @param string              $volumeID
     * @param DeleteVolumeRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteVolumeResponse
     */
    public function deleteVolumeWithOptions($volumeID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->teamID) {
            @$query['teamID'] = $request->teamID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVolume',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/volumes/' . Url::percentEncode($volumeID) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 Volume.
     *
     * @param request - DeleteVolumeRequest
     *
     * @returns DeleteVolumeResponse
     *
     * @param string              $volumeID
     * @param DeleteVolumeRequest $request
     *
     * @return DeleteVolumeResponse
     */
    public function deleteVolume($volumeID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVolumeWithOptions($volumeID, $request, $headers, $runtime);
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/api-keys/' . Url::percentEncode($apiKeyID) . '',
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/quotas/tag',
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
     * 查询模板缓存.
     *
     * @param request - DescribeTemplateCacheRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTemplateCacheResponse
     *
     * @param string                       $templateID
     * @param DescribeTemplateCacheRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeTemplateCacheResponse
     */
    public function describeTemplateCacheWithOptions($templateID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->teamID) {
            @$query['teamID'] = $request->teamID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTemplateCache',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/template-caches/' . Url::percentEncode($templateID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeTemplateCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询模板缓存.
     *
     * @param request - DescribeTemplateCacheRequest
     *
     * @returns DescribeTemplateCacheResponse
     *
     * @param string                       $templateID
     * @param DescribeTemplateCacheRequest $request
     *
     * @return DescribeTemplateCacheResponse
     */
    public function describeTemplateCache($templateID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTemplateCacheWithOptions($templateID, $request, $headers, $runtime);
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/teams/' . Url::percentEncode($teamID) . '',
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
     * 查询 Template.
     *
     * @param request - GetTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateResponse
     *
     * @param string             $templateID
     * @param GetTemplateRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($templateID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->teamID) {
            @$query['teamID'] = $request->teamID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTemplate',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/templates/' . Url::percentEncode($templateID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 Template.
     *
     * @param request - GetTemplateRequest
     *
     * @returns GetTemplateResponse
     *
     * @param string             $templateID
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($templateID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateWithOptions($templateID, $request, $headers, $runtime);
    }

    /**
     * 查看 Volume.
     *
     * @param request - GetVolumeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVolumeResponse
     *
     * @param string           $volumeID
     * @param GetVolumeRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetVolumeResponse
     */
    public function getVolumeWithOptions($volumeID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->teamID) {
            @$query['teamID'] = $request->teamID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVolume',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/volumes/' . Url::percentEncode($volumeID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看 Volume.
     *
     * @param request - GetVolumeRequest
     *
     * @returns GetVolumeResponse
     *
     * @param string           $volumeID
     * @param GetVolumeRequest $request
     *
     * @return GetVolumeResponse
     */
    public function getVolume($volumeID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVolumeWithOptions($volumeID, $request, $headers, $runtime);
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/api-keys',
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/quotas',
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

        if (null !== $request->plan) {
            @$query['plan'] = $request->plan;
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/teams',
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
     * 分页查询模板缓存.
     *
     * @param request - ListTemplateCacheRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplateCacheResponse
     *
     * @param ListTemplateCacheRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListTemplateCacheResponse
     */
    public function listTemplateCacheWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->teamID) {
            @$query['teamID'] = $request->teamID;
        }

        if (null !== $request->templateID) {
            @$query['templateID'] = $request->templateID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplateCache',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/template-caches',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTemplateCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询模板缓存.
     *
     * @param request - ListTemplateCacheRequest
     *
     * @returns ListTemplateCacheResponse
     *
     * @param ListTemplateCacheRequest $request
     *
     * @return ListTemplateCacheResponse
     */
    public function listTemplateCache($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTemplateCacheWithOptions($request, $headers, $runtime);
    }

    /**
     * 分页查询 Template.
     *
     * @param request - ListTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplatesResponse
     *
     * @param ListTemplatesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->teamID) {
            @$query['teamID'] = $request->teamID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplates',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询 Template.
     *
     * @param request - ListTemplatesRequest
     *
     * @returns ListTemplatesResponse
     *
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * 分页查询 Volumes.
     *
     * @param request - ListVolumesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVolumesResponse
     *
     * @param ListVolumesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListVolumesResponse
     */
    public function listVolumesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupID) {
            @$query['resourceGroupID'] = $request->resourceGroupID;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->storageClass) {
            @$query['storageClass'] = $request->storageClass;
        }

        if (null !== $request->teamID) {
            @$query['teamID'] = $request->teamID;
        }

        if (null !== $request->userID) {
            @$query['userID'] = $request->userID;
        }

        if (null !== $request->volumeName) {
            @$query['volumeName'] = $request->volumeName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVolumes',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/volumes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询 Volumes.
     *
     * @param request - ListVolumesRequest
     *
     * @returns ListVolumesResponse
     *
     * @param ListVolumesRequest $request
     *
     * @return ListVolumesResponse
     */
    public function listVolumes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVolumesWithOptions($request, $headers, $runtime);
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/api-keys/' . Url::percentEncode($apiKeyID) . '/reset',
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
     * 更新 ApiKey.
     *
     * @param request - UpdateApiKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApiKeyResponse
     *
     * @param string              $apiKeyID
     * @param UpdateApiKeyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateApiKeyResponse
     */
    public function updateApiKeyWithOptions($apiKeyID, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateApiKey',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/api-keys/' . Url::percentEncode($apiKeyID) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateApiKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 ApiKey.
     *
     * @param request - UpdateApiKeyRequest
     *
     * @returns UpdateApiKeyResponse
     *
     * @param string              $apiKeyID
     * @param UpdateApiKeyRequest $request
     *
     * @return UpdateApiKeyResponse
     */
    public function updateApiKey($apiKeyID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApiKeyWithOptions($apiKeyID, $request, $headers, $runtime);
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/quotas/tag',
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
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/teams/' . Url::percentEncode($teamID) . '',
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

    /**
     * 更新 Template.
     *
     * @param request - UpdateTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTemplateResponse
     *
     * @param string                $templateID
     * @param UpdateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($templateID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->teamID) {
            @$query['teamID'] = $request->teamID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateTemplate',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/templates/' . Url::percentEncode($templateID) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 Template.
     *
     * @param request - UpdateTemplateRequest
     *
     * @returns UpdateTemplateResponse
     *
     * @param string                $templateID
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($templateID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTemplateWithOptions($templateID, $request, $headers, $runtime);
    }

    /**
     * 更新 Volume.
     *
     * @param request - UpdateVolumeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVolumeResponse
     *
     * @param string              $volumeID
     * @param UpdateVolumeRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateVolumeResponse
     */
    public function updateVolumeWithOptions($volumeID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->teamID) {
            @$query['teamID'] = $request->teamID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateVolume',
            'version' => '2026-08-20',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/2026-08-20/volumes/' . Url::percentEncode($volumeID) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 Volume.
     *
     * @param request - UpdateVolumeRequest
     *
     * @returns UpdateVolumeResponse
     *
     * @param string              $volumeID
     * @param UpdateVolumeRequest $request
     *
     * @return UpdateVolumeResponse
     */
    public function updateVolume($volumeID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateVolumeWithOptions($volumeID, $request, $headers, $runtime);
    }
}
