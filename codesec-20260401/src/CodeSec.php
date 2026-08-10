<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeProjectsRequest;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeProjectsResponse;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineRequest;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponse;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScansRequest;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScansResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class CodeSec extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('codesec', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * List projects for tenant.
     *
     * @param request - DescribeProjectsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProjectsResponse
     *
     * @param DescribeProjectsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeProjectsResponse
     */
    public function describeProjectsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProjects',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/projects',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List projects for tenant.
     *
     * @param request - DescribeProjectsRequest
     *
     * @returns DescribeProjectsResponse
     *
     * @param DescribeProjectsRequest $request
     *
     * @return DescribeProjectsResponse
     */
    public function describeProjects($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeProjectsWithOptions($request, $headers, $runtime);
    }

    /**
     * List findings for one engine (SAST / SCA).
     *
     * @param request - DescribeScanResultsByEngineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScanResultsByEngineResponse
     *
     * @param string                             $projectId
     * @param string                             $scanId
     * @param string                             $engine
     * @param DescribeScanResultsByEngineRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeScanResultsByEngineResponse
     */
    public function describeScanResultsByEngineWithOptions($projectId, $scanId, $engine, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baselineState) {
            @$query['baselineState'] = $request->baselineState;
        }

        if (null !== $request->lang) {
            @$query['lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->packageName) {
            @$query['packageName'] = $request->packageName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScanResultsByEngine',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/projects/' . Url::percentEncode($projectId) . '/scans/' . Url::percentEncode($scanId) . '/results/' . Url::percentEncode($engine) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeScanResultsByEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List findings for one engine (SAST / SCA).
     *
     * @param request - DescribeScanResultsByEngineRequest
     *
     * @returns DescribeScanResultsByEngineResponse
     *
     * @param string                             $projectId
     * @param string                             $scanId
     * @param string                             $engine
     * @param DescribeScanResultsByEngineRequest $request
     *
     * @return DescribeScanResultsByEngineResponse
     */
    public function describeScanResultsByEngine($projectId, $scanId, $engine, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeScanResultsByEngineWithOptions($projectId, $scanId, $engine, $request, $headers, $runtime);
    }

    /**
     * List scans for project.
     *
     * @param request - DescribeScansRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScansResponse
     *
     * @param string               $projectId
     * @param DescribeScansRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeScansResponse
     */
    public function describeScansWithOptions($projectId, $request, $headers, $runtime)
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

        if (null !== $request->taskName) {
            @$query['taskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScans',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/projects/' . Url::percentEncode($projectId) . '/scans',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeScansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List scans for project.
     *
     * @param request - DescribeScansRequest
     *
     * @returns DescribeScansResponse
     *
     * @param string               $projectId
     * @param DescribeScansRequest $request
     *
     * @return DescribeScansResponse
     */
    public function describeScans($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeScansWithOptions($projectId, $request, $headers, $runtime);
    }
}
