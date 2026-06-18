<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DeleteQuotaRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DeleteQuotaResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DescribeQuotaRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\DescribeQuotaResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\ListQuotaRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\ListQuotaResponse;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\UpdateQuotaRequest;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\UpdateQuotaResponse;
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
}
