<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CompleteCodeBundleRequest;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CompleteCodeBundleResponse;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateCodeBundleRequest;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateCodeBundleResponse;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateProjectRequest;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateProjectResponse;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateProjectShrinkRequest;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateScanRequest;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateScanResponse;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateScanSbomExportRequest;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateScanSbomExportResponse;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeProjectsRequest;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeProjectsResponse;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanRequest;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResponse;
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
        $this->_endpointRule = 'regional';
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
     * Finalizes a code bundle after the client completes an OSS PUT operation. This operation validates the uploaded object and sets the code bundle status to ready. If CI metadata that triggers an automatic scan was provided during creation, a scanId is returned.
     *
     * @param request - CompleteCodeBundleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompleteCodeBundleResponse
     *
     * @param string                    $projectId
     * @param string                    $codeBundleId
     * @param CompleteCodeBundleRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CompleteCodeBundleResponse
     */
    public function completeCodeBundleWithOptions($projectId, $codeBundleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->byteSize) {
            @$query['byteSize'] = $request->byteSize;
        }

        if (null !== $request->contentType) {
            @$query['contentType'] = $request->contentType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CompleteCodeBundle',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/projects/' . Url::percentEncode($projectId) . '/codeBundles/' . Url::percentEncode($codeBundleId) . '/complete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CompleteCodeBundleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Finalizes a code bundle after the client completes an OSS PUT operation. This operation validates the uploaded object and sets the code bundle status to ready. If CI metadata that triggers an automatic scan was provided during creation, a scanId is returned.
     *
     * @param request - CompleteCodeBundleRequest
     *
     * @returns CompleteCodeBundleResponse
     *
     * @param string                    $projectId
     * @param string                    $codeBundleId
     * @param CompleteCodeBundleRequest $request
     *
     * @return CompleteCodeBundleResponse
     */
    public function completeCodeBundle($projectId, $codeBundleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->completeCodeBundleWithOptions($projectId, $codeBundleId, $request, $headers, $runtime);
    }

    /**
     * Creates a function code package in pending status and returns a pre-signed OSS PUT upload credential.
     *
     * @param request - CreateCodeBundleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCodeBundleResponse
     *
     * @param string                  $projectId
     * @param CreateCodeBundleRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCodeBundleResponse
     */
    public function createCodeBundleWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ciMetadata) {
            @$query['ciMetadata'] = $request->ciMetadata;
        }

        if (null !== $request->filename) {
            @$query['filename'] = $request->filename;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCodeBundle',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/projects/' . Url::percentEncode($projectId) . '/codeBundles',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCodeBundleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a function code package in pending status and returns a pre-signed OSS PUT upload credential.
     *
     * @param request - CreateCodeBundleRequest
     *
     * @returns CreateCodeBundleResponse
     *
     * @param string                  $projectId
     * @param CreateCodeBundleRequest $request
     *
     * @return CreateCodeBundleResponse
     */
    public function createCodeBundle($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCodeBundleWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * Creates a project.
     *
     * @param tmpReq - CreateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateProjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->engines) {
            $request->enginesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->engines, 'engines', 'json');
        }

        if (null !== $tmpReq->source) {
            $request->sourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->source, 'source', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->enginesShrink) {
            @$query['engines'] = $request->enginesShrink;
        }

        if (null !== $request->instructionPrompt) {
            @$query['instructionPrompt'] = $request->instructionPrompt;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->sourceShrink) {
            @$query['source'] = $request->sourceShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/projects',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a project.
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a scan task based on a code package that is ready.
     *
     * @param request - CreateScanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScanResponse
     *
     * @param string            $projectId
     * @param CreateScanRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateScanResponse
     */
    public function createScanWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->codeBundleId) {
            @$query['codeBundleId'] = $request->codeBundleId;
        }

        if (null !== $request->kind) {
            @$query['kind'] = $request->kind;
        }

        if (null !== $request->taskName) {
            @$query['taskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScan',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/projects/' . Url::percentEncode($projectId) . '/scans',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a scan task based on a code package that is ready.
     *
     * @param request - CreateScanRequest
     *
     * @returns CreateScanResponse
     *
     * @param string            $projectId
     * @param CreateScanRequest $request
     *
     * @return CreateScanResponse
     */
    public function createScan($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createScanWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 生成 SBOM / 许可证清单的短时下载链接.
     *
     * @param request - CreateScanSbomExportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScanSbomExportResponse
     *
     * @param string                      $projectId
     * @param string                      $scanId
     * @param CreateScanSbomExportRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateScanSbomExportResponse
     */
    public function createScanSbomExportWithOptions($projectId, $scanId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->format) {
            @$query['format'] = $request->format;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScanSbomExport',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/projects/' . Url::percentEncode($projectId) . '/scans/' . Url::percentEncode($scanId) . '/reports/sbomExports',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateScanSbomExportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成 SBOM / 许可证清单的短时下载链接.
     *
     * @param request - CreateScanSbomExportRequest
     *
     * @returns CreateScanSbomExportResponse
     *
     * @param string                      $projectId
     * @param string                      $scanId
     * @param CreateScanSbomExportRequest $request
     *
     * @return CreateScanSbomExportResponse
     */
    public function createScanSbomExport($projectId, $scanId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createScanSbomExportWithOptions($projectId, $scanId, $request, $headers, $runtime);
    }

    /**
     * Lists projects under a tenant by page, with support for fuzzy search by name or prompt.
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

        if (null !== $request->sortBy) {
            @$query['sortBy'] = $request->sortBy;
        }

        if (null !== $request->sortOrder) {
            @$query['sortOrder'] = $request->sortOrder;
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
     * Lists projects under a tenant by page, with support for fuzzy search by name or prompt.
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
     * Queries the details of a scan task.
     *
     * @param request - DescribeScanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScanResponse
     *
     * @param string              $projectId
     * @param string              $scanId
     * @param DescribeScanRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeScanResponse
     */
    public function describeScanWithOptions($projectId, $scanId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeScan',
            'version' => '2026-04-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/projects/' . Url::percentEncode($projectId) . '/scans/' . Url::percentEncode($scanId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a scan task.
     *
     * @param request - DescribeScanRequest
     *
     * @returns DescribeScanResponse
     *
     * @param string              $projectId
     * @param string              $scanId
     * @param DescribeScanRequest $request
     *
     * @return DescribeScanResponse
     */
    public function describeScan($projectId, $scanId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeScanWithOptions($projectId, $scanId, $request, $headers, $runtime);
    }

    /**
     * Queries the task result list to retrieve detailed SAST or SCA results of a specific scan.
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
     * Queries the task result list to retrieve detailed SAST or SCA results of a specific scan.
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
     * Lists scan tasks under a specified project with pagination.
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
     * Lists scan tasks under a specified project with pagination.
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
