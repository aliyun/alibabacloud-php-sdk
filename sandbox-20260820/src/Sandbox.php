<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateTemplateCacheRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateTemplateCacheResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteTemplateCacheRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteTemplateCacheResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DescribeTemplateCacheRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\DescribeTemplateCacheResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\GetTemplateRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\GetTemplateResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListTemplateCacheRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListTemplateCacheResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\UpdateTemplateResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Sandbox extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
}
