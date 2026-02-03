<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Nis\V20211216\Models\CreateAndAnalyzeNetworkPathRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\CreateAndAnalyzeNetworkPathResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\CreateNetworkPathRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\CreateNetworkPathResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\CreateNetworkReachableAnalysisRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\CreateNetworkReachableAnalysisResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\DeleteNetworkPathRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DeleteNetworkPathResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\DeleteNetworkPathShrinkRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DeleteNetworkReachableAnalysisRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DeleteNetworkReachableAnalysisResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\DeleteNetworkReachableAnalysisShrinkRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DeleteNisInspectionReportRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DeleteNisInspectionReportResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\DeleteNisInspectionTaskRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DeleteNisInspectionTaskResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionRecommendationResourcesRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionRecommendationResourcesResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsShrinkRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportStatusRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportStatusResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportSummaryRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportSummaryResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionTaskRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionTaskResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisTrafficRankingRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisTrafficRankingResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetInternetTupleRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetInternetTupleResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetInternetTupleShrinkRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNatTopNRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNatTopNResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNetworkReachableAnalysisRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNetworkReachableAnalysisResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisNetworkMetricsRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisNetworkMetricsResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisNetworkMetricsShrinkRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisNetworkRankingRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisNetworkRankingResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisNetworkRankingShrinkRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetTransitRouterFlowTopNRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetTransitRouterFlowTopNResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetTransitRouterFlowTopNShrinkRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetVbrFlowTopNRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetVbrFlowTopNResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetVbrFlowTopNShrinkRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\ListNisInspectionResourceTypeResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\ListNisInspectionTaskReportsRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\ListNisInspectionTaskReportsResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\ListNisInspectionTasksRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\ListNisInspectionTasksResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\StartNisInspectionTaskRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\StartNisInspectionTaskResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\StartNisTrafficRankingRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\StartNisTrafficRankingResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\StartNisTrafficRankingShrinkRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\UpdateNisInspectionTaskRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\UpdateNisInspectionTaskResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Nis extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('nis', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Initiates a task for analyzing network reachability.
     *
     * @remarks
     * You can call this operation to initiate a task for analyzing network reachability by specifying only the information about the source and destination. You do not need to create a network path for reachability analysis. The analysis result is not recorded in the system. If you want to record the path parameters and analysis result in the Network Intelligence Service (NIS) console, we recommend that you call the **createNetworkReachableAnalysis** operation.
     *
     * @param request - CreateAndAnalyzeNetworkPathRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAndAnalyzeNetworkPathResponse
     *
     * @param CreateAndAnalyzeNetworkPathRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateAndAnalyzeNetworkPathResponse
     */
    public function createAndAnalyzeNetworkPathWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAndAnalyzeNetworkPath',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAndAnalyzeNetworkPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a task for analyzing network reachability.
     *
     * @remarks
     * You can call this operation to initiate a task for analyzing network reachability by specifying only the information about the source and destination. You do not need to create a network path for reachability analysis. The analysis result is not recorded in the system. If you want to record the path parameters and analysis result in the Network Intelligence Service (NIS) console, we recommend that you call the **createNetworkReachableAnalysis** operation.
     *
     * @param request - CreateAndAnalyzeNetworkPathRequest
     *
     * @returns CreateAndAnalyzeNetworkPathResponse
     *
     * @param CreateAndAnalyzeNetworkPathRequest $request
     *
     * @return CreateAndAnalyzeNetworkPathResponse
     */
    public function createAndAnalyzeNetworkPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAndAnalyzeNetworkPathWithOptions($request, $runtime);
    }

    /**
     * Creates a network path in the cloud for reachability analysis.
     *
     * @remarks
     *   You can call the **CreateNetworkPath** operation to create network paths in multiple networking scenarios and between multiple resources. After a path is created, the path parameters are saved for repeated analysis.
     * *   You can create up to 100 network paths within one Alibaba Cloud account.
     *
     * @param request - CreateNetworkPathRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNetworkPathResponse
     *
     * @param CreateNetworkPathRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateNetworkPathResponse
     */
    public function createNetworkPathWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkPathDescription) {
            @$query['NetworkPathDescription'] = $request->networkPathDescription;
        }

        if (null !== $request->networkPathName) {
            @$query['NetworkPathName'] = $request->networkPathName;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceIpAddress) {
            @$query['SourceIpAddress'] = $request->sourceIpAddress;
        }

        if (null !== $request->sourcePort) {
            @$query['SourcePort'] = $request->sourcePort;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetIpAddress) {
            @$query['TargetIpAddress'] = $request->targetIpAddress;
        }

        if (null !== $request->targetPort) {
            @$query['TargetPort'] = $request->targetPort;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNetworkPath',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNetworkPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a network path in the cloud for reachability analysis.
     *
     * @remarks
     *   You can call the **CreateNetworkPath** operation to create network paths in multiple networking scenarios and between multiple resources. After a path is created, the path parameters are saved for repeated analysis.
     * *   You can create up to 100 network paths within one Alibaba Cloud account.
     *
     * @param request - CreateNetworkPathRequest
     *
     * @returns CreateNetworkPathResponse
     *
     * @param CreateNetworkPathRequest $request
     *
     * @return CreateNetworkPathResponse
     */
    public function createNetworkPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkPathWithOptions($request, $runtime);
    }

    /**
     * Creates a task for analyzing network reachability.
     *
     * @remarks
     *   The **CreateNetworkReachableAnalysis** operation is used to create a task for analyzing the reachability of the network path that is created by calling the **CreateNetworkPath** operation and record the analysis results.
     * *   The **CreateNetworkReachableAnalysis** operation can be called to repeatedly analyze the reachability of a network path.
     * *   You can create up to 1,000 reachability analysis records within one Alibaba Cloud account.
     *
     * @param request - CreateNetworkReachableAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNetworkReachableAnalysisResponse
     *
     * @param CreateNetworkReachableAnalysisRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateNetworkReachableAnalysisResponse
     */
    public function createNetworkReachableAnalysisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkPathId) {
            @$query['NetworkPathId'] = $request->networkPathId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNetworkReachableAnalysis',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNetworkReachableAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a task for analyzing network reachability.
     *
     * @remarks
     *   The **CreateNetworkReachableAnalysis** operation is used to create a task for analyzing the reachability of the network path that is created by calling the **CreateNetworkPath** operation and record the analysis results.
     * *   The **CreateNetworkReachableAnalysis** operation can be called to repeatedly analyze the reachability of a network path.
     * *   You can create up to 1,000 reachability analysis records within one Alibaba Cloud account.
     *
     * @param request - CreateNetworkReachableAnalysisRequest
     *
     * @returns CreateNetworkReachableAnalysisResponse
     *
     * @param CreateNetworkReachableAnalysisRequest $request
     *
     * @return CreateNetworkReachableAnalysisResponse
     */
    public function createNetworkReachableAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkReachableAnalysisWithOptions($request, $runtime);
    }

    /**
     * Deletes a network path.
     *
     * @param tmpReq - DeleteNetworkPathRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNetworkPathResponse
     *
     * @param DeleteNetworkPathRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteNetworkPathResponse
     */
    public function deleteNetworkPathWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteNetworkPathShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->networkPathIds) {
            $request->networkPathIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->networkPathIds, 'NetworkPathIds', 'json');
        }

        $query = [];
        if (null !== $request->networkPathIdsShrink) {
            @$query['NetworkPathIds'] = $request->networkPathIdsShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNetworkPath',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNetworkPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a network path.
     *
     * @param request - DeleteNetworkPathRequest
     *
     * @returns DeleteNetworkPathResponse
     *
     * @param DeleteNetworkPathRequest $request
     *
     * @return DeleteNetworkPathResponse
     */
    public function deleteNetworkPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkPathWithOptions($request, $runtime);
    }

    /**
     * Deletes a task for analyzing network reachability.
     *
     * @param tmpReq - DeleteNetworkReachableAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNetworkReachableAnalysisResponse
     *
     * @param DeleteNetworkReachableAnalysisRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteNetworkReachableAnalysisResponse
     */
    public function deleteNetworkReachableAnalysisWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteNetworkReachableAnalysisShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->networkReachableAnalysisIds) {
            $request->networkReachableAnalysisIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->networkReachableAnalysisIds, 'NetworkReachableAnalysisIds', 'json');
        }

        $query = [];
        if (null !== $request->networkReachableAnalysisIdsShrink) {
            @$query['NetworkReachableAnalysisIds'] = $request->networkReachableAnalysisIdsShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNetworkReachableAnalysis',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNetworkReachableAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a task for analyzing network reachability.
     *
     * @param request - DeleteNetworkReachableAnalysisRequest
     *
     * @returns DeleteNetworkReachableAnalysisResponse
     *
     * @param DeleteNetworkReachableAnalysisRequest $request
     *
     * @return DeleteNetworkReachableAnalysisResponse
     */
    public function deleteNetworkReachableAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkReachableAnalysisWithOptions($request, $runtime);
    }

    /**
     * 删除报告.
     *
     * @param request - DeleteNisInspectionReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNisInspectionReportResponse
     *
     * @param DeleteNisInspectionReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteNisInspectionReportResponse
     */
    public function deleteNisInspectionReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inspectionReportId) {
            @$query['InspectionReportId'] = $request->inspectionReportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNisInspectionReport',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNisInspectionReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除报告.
     *
     * @param request - DeleteNisInspectionReportRequest
     *
     * @returns DeleteNisInspectionReportResponse
     *
     * @param DeleteNisInspectionReportRequest $request
     *
     * @return DeleteNisInspectionReportResponse
     */
    public function deleteNisInspectionReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNisInspectionReportWithOptions($request, $runtime);
    }

    /**
     * 删除巡检任务
     *
     * @param request - DeleteNisInspectionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNisInspectionTaskResponse
     *
     * @param DeleteNisInspectionTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteNisInspectionTaskResponse
     */
    public function deleteNisInspectionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inspectionTaskId) {
            @$query['InspectionTaskId'] = $request->inspectionTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNisInspectionTask',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNisInspectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除巡检任务
     *
     * @param request - DeleteNisInspectionTaskRequest
     *
     * @returns DeleteNisInspectionTaskResponse
     *
     * @param DeleteNisInspectionTaskRequest $request
     *
     * @return DeleteNisInspectionTaskResponse
     */
    public function deleteNisInspectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNisInspectionTaskWithOptions($request, $runtime);
    }

    /**
     * 受影响资源列表.
     *
     * @param request - DescribeNisInspectionRecommendationResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNisInspectionRecommendationResourcesResponse
     *
     * @param DescribeNisInspectionRecommendationResourcesRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DescribeNisInspectionRecommendationResourcesResponse
     */
    public function describeNisInspectionRecommendationResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inspectionReportId) {
            @$query['InspectionReportId'] = $request->inspectionReportId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->recommendationCode) {
            @$query['RecommendationCode'] = $request->recommendationCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNisInspectionRecommendationResources',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNisInspectionRecommendationResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 受影响资源列表.
     *
     * @param request - DescribeNisInspectionRecommendationResourcesRequest
     *
     * @returns DescribeNisInspectionRecommendationResourcesResponse
     *
     * @param DescribeNisInspectionRecommendationResourcesRequest $request
     *
     * @return DescribeNisInspectionRecommendationResourcesResponse
     */
    public function describeNisInspectionRecommendationResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNisInspectionRecommendationResourcesWithOptions($request, $runtime);
    }

    /**
     * 报告巡检项列表.
     *
     * @param tmpReq - DescribeNisInspectionReportCheckItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNisInspectionReportCheckItemsResponse
     *
     * @param DescribeNisInspectionReportCheckItemsRequest $tmpReq
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeNisInspectionReportCheckItemsResponse
     */
    public function describeNisInspectionReportCheckItemsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeNisInspectionReportCheckItemsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceType) {
            $request->resourceTypeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceType, 'ResourceType', 'json');
        }

        if (null !== $tmpReq->riskLevel) {
            $request->riskLevelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->riskLevel, 'RiskLevel', 'json');
        }

        $query = [];
        if (null !== $request->categoryCode) {
            @$query['CategoryCode'] = $request->categoryCode;
        }

        if (null !== $request->inspectionReportId) {
            @$query['InspectionReportId'] = $request->inspectionReportId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceTypeShrink) {
            @$query['ResourceType'] = $request->resourceTypeShrink;
        }

        if (null !== $request->riskLevelShrink) {
            @$query['RiskLevel'] = $request->riskLevelShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNisInspectionReportCheckItems',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNisInspectionReportCheckItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 报告巡检项列表.
     *
     * @param request - DescribeNisInspectionReportCheckItemsRequest
     *
     * @returns DescribeNisInspectionReportCheckItemsResponse
     *
     * @param DescribeNisInspectionReportCheckItemsRequest $request
     *
     * @return DescribeNisInspectionReportCheckItemsResponse
     */
    public function describeNisInspectionReportCheckItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNisInspectionReportCheckItemsWithOptions($request, $runtime);
    }

    /**
     * 查询报告状态
     *
     * @param request - DescribeNisInspectionReportStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNisInspectionReportStatusResponse
     *
     * @param DescribeNisInspectionReportStatusRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeNisInspectionReportStatusResponse
     */
    public function describeNisInspectionReportStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inspectionReportId) {
            @$query['InspectionReportId'] = $request->inspectionReportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNisInspectionReportStatus',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNisInspectionReportStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询报告状态
     *
     * @param request - DescribeNisInspectionReportStatusRequest
     *
     * @returns DescribeNisInspectionReportStatusResponse
     *
     * @param DescribeNisInspectionReportStatusRequest $request
     *
     * @return DescribeNisInspectionReportStatusResponse
     */
    public function describeNisInspectionReportStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNisInspectionReportStatusWithOptions($request, $runtime);
    }

    /**
     * 报告总结信息.
     *
     * @param request - DescribeNisInspectionReportSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNisInspectionReportSummaryResponse
     *
     * @param DescribeNisInspectionReportSummaryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeNisInspectionReportSummaryResponse
     */
    public function describeNisInspectionReportSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inspectionReportId) {
            @$query['InspectionReportId'] = $request->inspectionReportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNisInspectionReportSummary',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNisInspectionReportSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 报告总结信息.
     *
     * @param request - DescribeNisInspectionReportSummaryRequest
     *
     * @returns DescribeNisInspectionReportSummaryResponse
     *
     * @param DescribeNisInspectionReportSummaryRequest $request
     *
     * @return DescribeNisInspectionReportSummaryResponse
     */
    public function describeNisInspectionReportSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNisInspectionReportSummaryWithOptions($request, $runtime);
    }

    /**
     * 查询巡检任务
     *
     * @param request - DescribeNisInspectionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNisInspectionTaskResponse
     *
     * @param DescribeNisInspectionTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNisInspectionTaskResponse
     */
    public function describeNisInspectionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inspectionTaskId) {
            @$query['InspectionTaskId'] = $request->inspectionTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNisInspectionTask',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNisInspectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询巡检任务
     *
     * @param request - DescribeNisInspectionTaskRequest
     *
     * @returns DescribeNisInspectionTaskResponse
     *
     * @param DescribeNisInspectionTaskRequest $request
     *
     * @return DescribeNisInspectionTaskResponse
     */
    public function describeNisInspectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNisInspectionTaskWithOptions($request, $runtime);
    }

    /**
     * 查询流量分析topN异步任务结果.
     *
     * @param request - DescribeNisTrafficRankingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNisTrafficRankingResponse
     *
     * @param DescribeNisTrafficRankingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNisTrafficRankingResponse
     */
    public function describeNisTrafficRankingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nisTrafficRankingId) {
            @$query['NisTrafficRankingId'] = $request->nisTrafficRankingId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNisTrafficRanking',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNisTrafficRankingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询流量分析topN异步任务结果.
     *
     * @param request - DescribeNisTrafficRankingRequest
     *
     * @returns DescribeNisTrafficRankingResponse
     *
     * @param DescribeNisTrafficRankingRequest $request
     *
     * @return DescribeNisTrafficRankingResponse
     */
    public function describeNisTrafficRanking($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNisTrafficRankingWithOptions($request, $runtime);
    }

    /**
     * Queries the rankings of Internet traffic data in the form of 1-tuple, 2-tuple, or 5-tuple. Internet traffic data can be ranked by metrics such as traffic volumes and the number of packets.
     *
     * @deprecated openAPI GetInternetTuple is deprecated, please use nis::2021-12-16::GetNisNetworkRanking instead
     *
     * @param tmpReq - GetInternetTupleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInternetTupleResponse
     *
     * @param GetInternetTupleRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return GetInternetTupleResponse
     */
    public function getInternetTupleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetInternetTupleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cloudIpList) {
            $request->cloudIpListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cloudIpList, 'CloudIpList', 'json');
        }

        if (null !== $tmpReq->instanceList) {
            $request->instanceListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceList, 'InstanceList', 'json');
        }

        $query = [];
        if (null !== $request->accountIds) {
            @$query['AccountIds'] = $request->accountIds;
        }

        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->cloudIp) {
            @$query['CloudIp'] = $request->cloudIp;
        }

        if (null !== $request->cloudIpListShrink) {
            @$query['CloudIpList'] = $request->cloudIpListShrink;
        }

        if (null !== $request->cloudIsp) {
            @$query['CloudIsp'] = $request->cloudIsp;
        }

        if (null !== $request->cloudPort) {
            @$query['CloudPort'] = $request->cloudPort;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceListShrink) {
            @$query['InstanceList'] = $request->instanceListShrink;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->otherCity) {
            @$query['OtherCity'] = $request->otherCity;
        }

        if (null !== $request->otherCountry) {
            @$query['OtherCountry'] = $request->otherCountry;
        }

        if (null !== $request->otherIp) {
            @$query['OtherIp'] = $request->otherIp;
        }

        if (null !== $request->otherIsp) {
            @$query['OtherIsp'] = $request->otherIsp;
        }

        if (null !== $request->otherPort) {
            @$query['OtherPort'] = $request->otherPort;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->topN) {
            @$query['TopN'] = $request->topN;
        }

        if (null !== $request->tupleType) {
            @$query['TupleType'] = $request->tupleType;
        }

        if (null !== $request->useMultiAccount) {
            @$query['UseMultiAccount'] = $request->useMultiAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInternetTuple',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInternetTupleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the rankings of Internet traffic data in the form of 1-tuple, 2-tuple, or 5-tuple. Internet traffic data can be ranked by metrics such as traffic volumes and the number of packets.
     *
     * @deprecated openAPI GetInternetTuple is deprecated, please use nis::2021-12-16::GetNisNetworkRanking instead
     *
     * @param request - GetInternetTupleRequest
     *
     * @returns GetInternetTupleResponse
     *
     * @param GetInternetTupleRequest $request
     *
     * @return GetInternetTupleResponse
     */
    public function getInternetTuple($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInternetTupleWithOptions($request, $runtime);
    }

    /**
     * Queries the real-time SNAT performance ranking of a NAT gateway.
     *
     * @deprecated openAPI GetNatTopN is deprecated, please use nis::2021-12-16::GetNisNetworkRanking instead
     *
     * @param request - GetNatTopNRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNatTopNResponse
     *
     * @param GetNatTopNRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetNatTopNResponse
     */
    public function getNatTopNWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->topN) {
            @$query['TopN'] = $request->topN;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNatTopN',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNatTopNResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the real-time SNAT performance ranking of a NAT gateway.
     *
     * @deprecated openAPI GetNatTopN is deprecated, please use nis::2021-12-16::GetNisNetworkRanking instead
     *
     * @param request - GetNatTopNRequest
     *
     * @returns GetNatTopNResponse
     *
     * @param GetNatTopNRequest $request
     *
     * @return GetNatTopNResponse
     */
    public function getNatTopN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNatTopNWithOptions($request, $runtime);
    }

    /**
     * Obtains the results of network reachability analysis.
     *
     * @remarks
     * *GetNetworkReachableAnalysis** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can query the state of the task for analyzing network reachability.
     * *   The **init** state indicates that the task is in progress.
     * *   The **finish** state indicates that the task is complete. In this state, you can obtain the analysis result.
     *
     * @param request - GetNetworkReachableAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNetworkReachableAnalysisResponse
     *
     * @param GetNetworkReachableAnalysisRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetNetworkReachableAnalysisResponse
     */
    public function getNetworkReachableAnalysisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkReachableAnalysisId) {
            @$query['NetworkReachableAnalysisId'] = $request->networkReachableAnalysisId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNetworkReachableAnalysis',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNetworkReachableAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the results of network reachability analysis.
     *
     * @remarks
     * *GetNetworkReachableAnalysis** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can query the state of the task for analyzing network reachability.
     * *   The **init** state indicates that the task is in progress.
     * *   The **finish** state indicates that the task is complete. In this state, you can obtain the analysis result.
     *
     * @param request - GetNetworkReachableAnalysisRequest
     *
     * @returns GetNetworkReachableAnalysisResponse
     *
     * @param GetNetworkReachableAnalysisRequest $request
     *
     * @return GetNetworkReachableAnalysisResponse
     */
    public function getNetworkReachableAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkReachableAnalysisWithOptions($request, $runtime);
    }

    /**
     * 获取云网络指标趋势
     *
     * @param tmpReq - GetNisNetworkMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNisNetworkMetricsResponse
     *
     * @param GetNisNetworkMetricsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GetNisNetworkMetricsResponse
     */
    public function getNisNetworkMetricsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetNisNetworkMetricsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dimensions) {
            $request->dimensionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dimensions, 'Dimensions', 'json');
        }

        $query = [];
        if (null !== $request->accountIds) {
            @$query['AccountIds'] = $request->accountIds;
        }

        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->dimensionsShrink) {
            @$query['Dimensions'] = $request->dimensionsShrink;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->scanBy) {
            @$query['ScanBy'] = $request->scanBy;
        }

        if (null !== $request->stepMinutes) {
            @$query['StepMinutes'] = $request->stepMinutes;
        }

        if (null !== $request->useCrossAccount) {
            @$query['UseCrossAccount'] = $request->useCrossAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNisNetworkMetrics',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNisNetworkMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取云网络指标趋势
     *
     * @param request - GetNisNetworkMetricsRequest
     *
     * @returns GetNisNetworkMetricsResponse
     *
     * @param GetNisNetworkMetricsRequest $request
     *
     * @return GetNisNetworkMetricsResponse
     */
    public function getNisNetworkMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNisNetworkMetricsWithOptions($request, $runtime);
    }

    /**
     * 获取云网络指标排名.
     *
     * @param tmpReq - GetNisNetworkRankingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNisNetworkRankingResponse
     *
     * @param GetNisNetworkRankingRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GetNisNetworkRankingResponse
     */
    public function getNisNetworkRankingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetNisNetworkRankingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        $query = [];
        if (null !== $request->accountIds) {
            @$query['AccountIds'] = $request->accountIds;
        }

        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->filterShrink) {
            @$query['Filter'] = $request->filterShrink;
        }

        if (null !== $request->groupBy) {
            @$query['GroupBy'] = $request->groupBy;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->topN) {
            @$query['TopN'] = $request->topN;
        }

        if (null !== $request->useCrossAccount) {
            @$query['UseCrossAccount'] = $request->useCrossAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNisNetworkRanking',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNisNetworkRankingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取云网络指标排名.
     *
     * @param request - GetNisNetworkRankingRequest
     *
     * @returns GetNisNetworkRankingResponse
     *
     * @param GetNisNetworkRankingRequest $request
     *
     * @return GetNisNetworkRankingResponse
     */
    public function getNisNetworkRanking($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNisNetworkRankingWithOptions($request, $runtime);
    }

    /**
     * Queries the rankings of inter-region traffic data in the form of 1-tuple, 2-tuple, or 5-tuple. Inter-region traffic data can be ranked by metrics such as traffic volumes and the number of packets.
     *
     * @deprecated openAPI GetTransitRouterFlowTopN is deprecated, please use nis::2021-12-16::GetNisNetworkRanking instead
     *
     * @param tmpReq - GetTransitRouterFlowTopNRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTransitRouterFlowTopNResponse
     *
     * @param GetTransitRouterFlowTopNRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return GetTransitRouterFlowTopNResponse
     */
    public function getTransitRouterFlowTopNWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetTransitRouterFlowTopNShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accountIds) {
            $request->accountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }

        $query = [];
        if (null !== $request->accountIdsShrink) {
            @$query['AccountIds'] = $request->accountIdsShrink;
        }

        if (null !== $request->bandwithPackageId) {
            @$query['BandwithPackageId'] = $request->bandwithPackageId;
        }

        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupBy) {
            @$query['GroupBy'] = $request->groupBy;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->otherIp) {
            @$query['OtherIp'] = $request->otherIp;
        }

        if (null !== $request->otherPort) {
            @$query['OtherPort'] = $request->otherPort;
        }

        if (null !== $request->otherRegion) {
            @$query['OtherRegion'] = $request->otherRegion;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->thisIp) {
            @$query['ThisIp'] = $request->thisIp;
        }

        if (null !== $request->thisPort) {
            @$query['ThisPort'] = $request->thisPort;
        }

        if (null !== $request->thisRegion) {
            @$query['ThisRegion'] = $request->thisRegion;
        }

        if (null !== $request->topN) {
            @$query['TopN'] = $request->topN;
        }

        if (null !== $request->useMultiAccount) {
            @$query['UseMultiAccount'] = $request->useMultiAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTransitRouterFlowTopN',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTransitRouterFlowTopNResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the rankings of inter-region traffic data in the form of 1-tuple, 2-tuple, or 5-tuple. Inter-region traffic data can be ranked by metrics such as traffic volumes and the number of packets.
     *
     * @deprecated openAPI GetTransitRouterFlowTopN is deprecated, please use nis::2021-12-16::GetNisNetworkRanking instead
     *
     * @param request - GetTransitRouterFlowTopNRequest
     *
     * @returns GetTransitRouterFlowTopNResponse
     *
     * @param GetTransitRouterFlowTopNRequest $request
     *
     * @return GetTransitRouterFlowTopNResponse
     */
    public function getTransitRouterFlowTopN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTransitRouterFlowTopNWithOptions($request, $runtime);
    }

    /**
     * Queries the rankings of hybrid cloud traffic data in the form of 1-tuple, 2-tuple, or 5-tuple. Hybrid cloud traffic data can be ranked by metrics such as traffic volumes and the number of packets.
     *
     * @deprecated openAPI GetVbrFlowTopN is deprecated, please use nis::2021-12-16::GetNisNetworkRanking instead
     *
     * @param tmpReq - GetVbrFlowTopNRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVbrFlowTopNResponse
     *
     * @param GetVbrFlowTopNRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return GetVbrFlowTopNResponse
     */
    public function getVbrFlowTopNWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetVbrFlowTopNShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accountIds) {
            $request->accountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }

        $query = [];
        if (null !== $request->accountIdsShrink) {
            @$query['AccountIds'] = $request->accountIdsShrink;
        }

        if (null !== $request->attachmentId) {
            @$query['AttachmentId'] = $request->attachmentId;
        }

        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cloudIp) {
            @$query['CloudIp'] = $request->cloudIp;
        }

        if (null !== $request->cloudPort) {
            @$query['CloudPort'] = $request->cloudPort;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupBy) {
            @$query['GroupBy'] = $request->groupBy;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->otherIp) {
            @$query['OtherIp'] = $request->otherIp;
        }

        if (null !== $request->otherPort) {
            @$query['OtherPort'] = $request->otherPort;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->topN) {
            @$query['TopN'] = $request->topN;
        }

        if (null !== $request->useMultiAccount) {
            @$query['UseMultiAccount'] = $request->useMultiAccount;
        }

        if (null !== $request->virtualBorderRouterId) {
            @$query['VirtualBorderRouterId'] = $request->virtualBorderRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVbrFlowTopN',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVbrFlowTopNResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the rankings of hybrid cloud traffic data in the form of 1-tuple, 2-tuple, or 5-tuple. Hybrid cloud traffic data can be ranked by metrics such as traffic volumes and the number of packets.
     *
     * @deprecated openAPI GetVbrFlowTopN is deprecated, please use nis::2021-12-16::GetNisNetworkRanking instead
     *
     * @param request - GetVbrFlowTopNRequest
     *
     * @returns GetVbrFlowTopNResponse
     *
     * @param GetVbrFlowTopNRequest $request
     *
     * @return GetVbrFlowTopNResponse
     */
    public function getVbrFlowTopN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVbrFlowTopNWithOptions($request, $runtime);
    }

    /**
     * 巡检资源类型列表.
     *
     * @param request - ListNisInspectionResourceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNisInspectionResourceTypeResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListNisInspectionResourceTypeResponse
     */
    public function listNisInspectionResourceTypeWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListNisInspectionResourceType',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNisInspectionResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 巡检资源类型列表.
     *
     * @returns ListNisInspectionResourceTypeResponse
     *
     * @return ListNisInspectionResourceTypeResponse
     */
    public function listNisInspectionResourceType()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNisInspectionResourceTypeWithOptions($runtime);
    }

    /**
     * 查询巡检报告列表.
     *
     * @param request - ListNisInspectionTaskReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNisInspectionTaskReportsResponse
     *
     * @param ListNisInspectionTaskReportsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListNisInspectionTaskReportsResponse
     */
    public function listNisInspectionTaskReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inspectionTaskId) {
            @$query['InspectionTaskId'] = $request->inspectionTaskId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNisInspectionTaskReports',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNisInspectionTaskReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询巡检报告列表.
     *
     * @param request - ListNisInspectionTaskReportsRequest
     *
     * @returns ListNisInspectionTaskReportsResponse
     *
     * @param ListNisInspectionTaskReportsRequest $request
     *
     * @return ListNisInspectionTaskReportsResponse
     */
    public function listNisInspectionTaskReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNisInspectionTaskReportsWithOptions($request, $runtime);
    }

    /**
     * 巡检任务列表.
     *
     * @param request - ListNisInspectionTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNisInspectionTasksResponse
     *
     * @param ListNisInspectionTasksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListNisInspectionTasksResponse
     */
    public function listNisInspectionTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inspectionName) {
            @$query['InspectionName'] = $request->inspectionName;
        }

        if (null !== $request->inspectionProject) {
            @$query['InspectionProject'] = $request->inspectionProject;
        }

        if (null !== $request->inspectionTaskId) {
            @$query['InspectionTaskId'] = $request->inspectionTaskId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNisInspectionTasks',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNisInspectionTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 巡检任务列表.
     *
     * @param request - ListNisInspectionTasksRequest
     *
     * @returns ListNisInspectionTasksResponse
     *
     * @param ListNisInspectionTasksRequest $request
     *
     * @return ListNisInspectionTasksResponse
     */
    public function listNisInspectionTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNisInspectionTasksWithOptions($request, $runtime);
    }

    /**
     * 请补充描述开启任务
     *
     * @param request - StartNisInspectionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartNisInspectionTaskResponse
     *
     * @param StartNisInspectionTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return StartNisInspectionTaskResponse
     */
    public function startNisInspectionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inspectionTaskId) {
            @$query['InspectionTaskId'] = $request->inspectionTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartNisInspectionTask',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartNisInspectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 请补充描述开启任务
     *
     * @param request - StartNisInspectionTaskRequest
     *
     * @returns StartNisInspectionTaskResponse
     *
     * @param StartNisInspectionTaskRequest $request
     *
     * @return StartNisInspectionTaskResponse
     */
    public function startNisInspectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startNisInspectionTaskWithOptions($request, $runtime);
    }

    /**
     * 获取云网络流量指标排名.
     *
     * @param tmpReq - StartNisTrafficRankingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartNisTrafficRankingResponse
     *
     * @param StartNisTrafficRankingRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return StartNisTrafficRankingResponse
     */
    public function startNisTrafficRankingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartNisTrafficRankingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        if (null !== $tmpReq->groupBy) {
            $request->groupByShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupBy, 'GroupBy', 'json');
        }

        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->filterShrink) {
            @$query['Filter'] = $request->filterShrink;
        }

        if (null !== $request->groupByShrink) {
            @$query['GroupBy'] = $request->groupByShrink;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->storageInterval) {
            @$query['StorageInterval'] = $request->storageInterval;
        }

        if (null !== $request->topN) {
            @$query['TopN'] = $request->topN;
        }

        if (null !== $request->trafficAnalyzerId) {
            @$query['TrafficAnalyzerId'] = $request->trafficAnalyzerId;
        }

        if (null !== $request->trafficScenario) {
            @$query['TrafficScenario'] = $request->trafficScenario;
        }

        if (null !== $request->tupleDimension) {
            @$query['TupleDimension'] = $request->tupleDimension;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartNisTrafficRanking',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartNisTrafficRankingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取云网络流量指标排名.
     *
     * @param request - StartNisTrafficRankingRequest
     *
     * @returns StartNisTrafficRankingResponse
     *
     * @param StartNisTrafficRankingRequest $request
     *
     * @return StartNisTrafficRankingResponse
     */
    public function startNisTrafficRanking($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startNisTrafficRankingWithOptions($request, $runtime);
    }

    /**
     * 修改巡检项.
     *
     * @param request - UpdateNisInspectionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNisInspectionTaskResponse
     *
     * @param UpdateNisInspectionTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateNisInspectionTaskResponse
     */
    public function updateNisInspectionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inspectionTaskId) {
            @$query['InspectionTaskId'] = $request->inspectionTaskId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNisInspectionTask',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNisInspectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改巡检项.
     *
     * @param request - UpdateNisInspectionTaskRequest
     *
     * @returns UpdateNisInspectionTaskResponse
     *
     * @param UpdateNisInspectionTaskRequest $request
     *
     * @return UpdateNisInspectionTaskResponse
     */
    public function updateNisInspectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNisInspectionTaskWithOptions($request, $runtime);
    }
}
