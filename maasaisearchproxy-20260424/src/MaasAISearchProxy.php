<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasAISearchProxy\V20260424;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\MaasAISearchProxy\V20260424\Models\OpenDatasetImportDataRequest;
use AlibabaCloud\SDK\MaasAISearchProxy\V20260424\Models\OpenDatasetImportDataResponse;
use AlibabaCloud\SDK\MaasAISearchProxy\V20260424\Models\OpenDatasetResourceUrlRequest;
use AlibabaCloud\SDK\MaasAISearchProxy\V20260424\Models\OpenDatasetResourceUrlResponse;
use AlibabaCloud\SDK\MaasAISearchProxy\V20260424\Models\WebSearchRequest;
use AlibabaCloud\SDK\MaasAISearchProxy\V20260424\Models\WebSearchResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class MaasAISearchProxy extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('maasaisearchproxy', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 提交单条记录导入任务（通过AccessKey认证）.
     *
     * @param request - OpenDatasetImportDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenDatasetImportDataResponse
     *
     * @param OpenDatasetImportDataRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return OpenDatasetImportDataResponse
     */
    public function openDatasetImportDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetId) {
            @$body['datasetId'] = $request->datasetId;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OpenDatasetImportData',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/dataset/open/upsert',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OpenDatasetImportDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交单条记录导入任务（通过AccessKey认证）.
     *
     * @param request - OpenDatasetImportDataRequest
     *
     * @returns OpenDatasetImportDataResponse
     *
     * @param OpenDatasetImportDataRequest $request
     *
     * @return OpenDatasetImportDataResponse
     */
    public function openDatasetImportData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openDatasetImportDataWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取数据集资源 OSS 访问地址（通过AccessKey认证）.
     *
     * @param request - OpenDatasetResourceUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenDatasetResourceUrlResponse
     *
     * @param OpenDatasetResourceUrlRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return OpenDatasetResourceUrlResponse
     */
    public function openDatasetResourceUrlWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetId) {
            @$body['datasetId'] = $request->datasetId;
        }

        if (null !== $request->primaryKey) {
            @$body['primaryKey'] = $request->primaryKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OpenDatasetResourceUrl',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/dataset/open/resources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OpenDatasetResourceUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据集资源 OSS 访问地址（通过AccessKey认证）.
     *
     * @param request - OpenDatasetResourceUrlRequest
     *
     * @returns OpenDatasetResourceUrlResponse
     *
     * @param OpenDatasetResourceUrlRequest $request
     *
     * @return OpenDatasetResourceUrlResponse
     */
    public function openDatasetResourceUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openDatasetResourceUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * 联网搜API.
     *
     * @param request - WebSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WebSearchResponse
     *
     * @param WebSearchRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return WebSearchResponse
     */
    public function webSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->excludeDomain) {
            @$body['excludeDomain'] = $request->excludeDomain;
        }

        if (null !== $request->includeDomain) {
            @$body['includeDomain'] = $request->includeDomain;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->region) {
            @$body['region'] = $request->region;
        }

        if (null !== $request->searchType) {
            @$body['searchType'] = $request->searchType;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'WebSearch',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/web-search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return WebSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 联网搜API.
     *
     * @param request - WebSearchRequest
     *
     * @returns WebSearchResponse
     *
     * @param WebSearchRequest $request
     *
     * @return WebSearchResponse
     */
    public function webSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->webSearchWithOptions($request, $headers, $runtime);
    }
}
