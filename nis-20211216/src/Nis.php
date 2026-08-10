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
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisTrafficMetricsRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisTrafficMetricsResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisTrafficMetricsShrinkRequest;
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
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageRequest;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponse;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageShrinkRequest;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-shanghai' => 'nis.aliyuncs.com',
            'ap-southeast-1' => 'nis-intl.aliyuncs.com',
        ];
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
     * Creates a network path for reachability analysis.
     *
     * @remarks
     * - You can call the **CreateNetworkPath** operation to create network paths in multiple networking scenarios and between multiple resources. After a path is created, the path parameters are saved for repeated analysis.
     * - You can create up to 100 network paths within one Alibaba Cloud account.
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
     * Creates a network path for reachability analysis.
     *
     * @remarks
     * - You can call the **CreateNetworkPath** operation to create network paths in multiple networking scenarios and between multiple resources. After a path is created, the path parameters are saved for repeated analysis.
     * - You can create up to 100 network paths within one Alibaba Cloud account.
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
     * - The **CreateNetworkReachableAnalysis** operation is used to create a task for analyzing the reachability of the network path that is created by calling the **CreateNetworkPath** operation and record the analysis results.
     * - The **CreateNetworkReachableAnalysis** operation can be called to repeatedly analyze the reachability of a network path.
     * - You can create up to 1,000 reachability analysis records within one Alibaba Cloud account.
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
     * - The **CreateNetworkReachableAnalysis** operation is used to create a task for analyzing the reachability of the network path that is created by calling the **CreateNetworkPath** operation and record the analysis results.
     * - The **CreateNetworkReachableAnalysis** operation can be called to repeatedly analyze the reachability of a network path.
     * - You can create up to 1,000 reachability analysis records within one Alibaba Cloud account.
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
     * Deletes an inspection report.
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
     * Deletes an inspection report.
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
     * Deletes an inspection task.
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
     * Deletes an inspection task.
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
     * Queries the instances of abnormal items identified in an inspection report.
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
     * Queries the instances of abnormal items identified in an inspection report.
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
     * Describes the details of check items in an inspection report.
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
     * Describes the details of check items in an inspection report.
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
     * Describes the status of an inspection report.
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
     * Describes the status of an inspection report.
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
     * Queries an inspection report summary.
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
     * Queries an inspection report summary.
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
     * Queries the details of an inspection task.
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
     * Queries the details of an inspection task.
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
     * Queries the results of NIS traffic ranking analysis.
     *
     * @remarks
     * [Before using this operation, make sure that you fully understand the billing method and pricing of the NIS Traffic Analyzer.](https://www.alibabacloud.com/help/en/nis/product-overview/billing-method-new-version)
     * Supported analysis scenarios:
     * - All VPC network traffic analysis
     * - Public VPC network traffic analysis
     * - All TR network traffic analysis
     * - Internet Shared Bandwidth metric analysis
     * ## VPC flow log - All VPC flow log query and analysis results
     * ### Request parameters
     * | Name                | Type    | Required | Description                                                                 | Example                                      | Valid values |
     * |---------------------|---------|----------|-----------------------------------------------------------------------------|---------------------------------------------|--------|
     * | NisTrafficRankingId | string  | Yes      | The ID of the network traffic analysis result.                              | task-6462a7b4c4a54b****                     |        |
     * | NextToken           | string  | No       | The paging token. Set this parameter to the NextToken value returned in the previous API call. | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | No       | The paging size. Valid values: 1 to 100. Default value: 20.                 | 20                                          |        |
     * ### Response parameters
     * | Name                | Type    | Description                                    | Example                                      | Valid values |
     * |---------------------|---------|------------------------------------------------|---------------------------------------------|--------|
     * | -                   | object  | RpcResponse                                    |                                             |        |
     * | RequestId           | string  | The request ID.                                | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941        |        |
     * | NisTrafficRankingId | string  | The ID of the network traffic analysis result. | task-7619ecb1db9148bab9f4                   |        |
     * | Status              | string  | The task running status.                       | Complete                                    |        |
     * | NextToken           | string  | The token for the next query.                  | LoeJLhK0fsDqYoXkXieZUqB2vWnccJtVnsyKu9KxFFOMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | The paging size. Valid values: 1 to 100. Default value: 20. | 20                                          |        |
     * | TotalCount          | integer | The total number of entries returned.          | 72                                          |        |
     * | FlowRankingList     | array   | The list of network traffic analysis results.  |                                             |        |
     * #### FlowRankingList element structure
     * | Name               | Type   | Description                                                                                       | Example            | Valid values   |
     * |--------------------|--------|---------------------------------------------------------------------------------------------------|--------------------|----------|
     * | RegionId           | string | The region where the flow log resides.                                                            | ap-southeast-1     |          |
     * | VpcId              | string | The VPC ID.                                                                                       | vpc-m5ec6i0h5xss*** |         |
     * | VSwitchId          | string | The vSwitch ID.                                                                                   | vsw-2zeekevlh****  |          |
     * | NetworkInterfaceId | string | The elastic network interface (ENI) ID.                                                           | eni-8vbf2jxul***   |          |
     * | EcsId              | string | The ECS instance ID of the management node.                                                       | i-uf6i1zi6yhq7h*** |          |
     * | TrafficPath        | string | The traffic path.                                                                                 | all                |          |
     * | Direction          | string | The traffic direction based on the Alibaba Cloud network resource instance. Valid values:
     * ● in: inbound traffic.
     * ● out: outbound traffic. | in                 | -in / -out |
     * | SourceIp           | string | The source IP address.
     * ● This field is returned only when 2-tuple statistics are collected.    | 47.92.245.***      |          |
     * | SourcePort         | string | The source port.
     * ● This field is returned only when 5-tuple statistics are collected.          | 5432               |          |
     * | DestinationIp      | string | The destination IP address.
     * ● This field is returned only when 2-tuple statistics are collected.| 192.168.***.0      |          |
     * | DestinationPort    | string | The destination port.
     * ● This field is returned only when 5-tuple statistics are collected.     | 23                 |          |
     * | Protocol           | string | The network protocol.
     * ● This field is returned only when 5-tuple statistics are collected.     | TCP                |          |
     * | Bytes              | number | The bandwidth.                                                                                    | 100                |          |
     * | Packets            | number | The number of packets.                                                                            | 100                |          |
     * | RoundTripTime      | number | The TCP RTT.                                                                                      | 2                  |          |
     * | BytesRate          | number | The traffic ratio.                                                                                | 0.2                |          |
     * ---
     * ## VPC flow log - Public VPC flow log query and analysis results
     * ### Request parameters
     * | Name                | Type    | Required | Description                                                                 | Example                                      | Valid values |
     * |---------------------|---------|----------|-----------------------------------------------------------------------------|---------------------------------------------|--------|
     * | NisTrafficRankingId | string  | Yes      | The ID of the network traffic analysis result.                              | task-6462a7b4c4a54b****                     |        |
     * | NextToken           | string  | No       | The paging token. Set this parameter to the NextToken value returned in the previous API call. | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | No       | The paging size. Valid values: 1 to 100. Default value: 20.                 | 20                                          |        |
     * ### Response parameters
     * | Name                | Type    | Description                                    | Example                                      | Valid values |
     * |---------------------|---------|------------------------------------------------|---------------------------------------------|--------|
     * | -                   | object  | RpcResponse                                    |                                             |        |
     * | RequestId           | string  | The request ID.                                | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941        |        |
     * | NisTrafficRankingId | string  | The ID of the network traffic analysis result. | task-7619ecb1db9148bab9f4                   |        |
     * | Status              | string  | The task running status.                       | Complete                                    |        |
     * | NextToken           | string  | The token for the next query.                  | LoeJLhK0fsDqYoXkXieZUqB2vWnccJtVnsyKu9KxFFOMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | The paging size. Valid values: 1 to 100. Default value: 20. | 20                                          |        |
     * | TotalCount          | integer | The total number of entries returned.          | 72                                          |        |
     * | FlowRankingList     | array   | The list of network traffic analysis results.  |                                             |        |
     * #### FlowRankingList element structure
     * | Name               | Type   | Description                                                                                       | Example                | Valid values   |
     * |--------------------|--------|---------------------------------------------------------------------------------------------------|------------------------|----------|
     * | RegionId           | string | The region where the flow log resides.                                                            | ap-southeast-1         |          |
     * | VpcId              | string | The VPC ID.                                                                                       | vpc-m5ec6i0h5xss***    |          |
     * | VSwitchId          | string | The vSwitch ID.                                                                                   | vsw-2zeekevlh****      |          |
     * | NetworkInterfaceId | string | The elastic network interface (ENI) ID.                                                           | eni-8vbf2jxul***       |          |
     * | EcsId              | string | The ECS instance ID of the management node.                                                       | i-uf6i1zi6yhq7h***     |          |
     * | TrafficPath        | string | The traffic path.                                                                                 | all                    |          |
     * | Direction          | string | The traffic direction based on the Alibaba Cloud network resource instance. Valid values:
     * ● in: inbound traffic.
     * ● out: outbound traffic. | in                     | -in / -out |
     * | SourceIp           | string | The source IP address.
     * ● This field is returned only when 2-tuple statistics are collected.    | 47.92.245.***          |          |
     * | SourcePort         | string | The source port.
     * ● This field is returned only when 5-tuple statistics are collected.          | 5432                   |          |
     * | DestinationIp      | string | The destination IP address.
     * ● This field is returned only when 2-tuple statistics are collected.| 192.168.***.0          |          |
     * | DestinationPort    | string | The destination port.
     * ● This field is returned only when 5-tuple statistics are collected.     | 23                     |          |
     * | Protocol           | string | The network protocol.
     * ● This field is returned only when 5-tuple statistics are collected.     | TCP                    |          |
     * | ClientCountry      | string | The country of the client.                                                                        | China                  |          |
     * | ClientProvince     | string | The province of the client.                                                                       | Hong Kong SAR          |          |
     * | ClientCity         | string | The city of the client.                                                                           | Kowloon                |          |
     * | ClientIsp          | string | The network service provider.                                                                     | Alibaba Cloud          |          |
     * | ClientAsn          | string | The autonomous system number.                                                                     | 45102                  |          |
     * | Bytes              | number | The bandwidth.                                                                                    | 100                    |          |
     * | Packets            | number | The number of packets.                                                                            | 100                    |          |
     * | RoundTripTime      | number | The TCP RTT.                                                                                      | 2                      |          |
     * | BytesRate          | number | The traffic ratio.                                                                                | 0.2                    |          |
     * ---
     * ## TR flow log - TR cross-region scenario analysis results.
     * ### Request parameters
     * | Name                | Type    | Required | Description                                                                 | Example                                      | Valid values |
     * |---------------------|---------|----------|-----------------------------------------------------------------------------|---------------------------------------------|--------|
     * | NisTrafficRankingId | string  | Yes      | The ID of the network traffic analysis result.                              | task-6462a7b4c4a54b****                     |        |
     * | NextToken           | string  | No       | The paging token. Set this parameter to the NextToken value returned in the previous API call. | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | No       | The paging size. Valid values: 1 to 100. Default value: 20.                 | 20                                          |        |
     * ### Response parameters
     * | Name                | Type    | Description                                    | Example                                      | Valid values |
     * |---------------------|---------|------------------------------------------------|---------------------------------------------|--------|
     * | -                   | object  | RpcResponse                                    |                                             |        |
     * | RequestId           | string  | The request ID.                                | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941        |        |
     * | NisTrafficRankingId | string  | The ID of the network traffic analysis result. | task-7619ecb1db9148bab9f4                   |        |
     * | Status              | string  | The task running status.                       | Complete                                    |        |
     * | NextToken           | string  | The token for the next query.                  | LoeJLhK0fsDqYoXkXieZUqB2vWnccJtVnsyKu9KxFFOMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | The paging size. Valid values: 1 to 100. Default value: 20. | 20                                          |        |
     * | TotalCount          | integer | The total number of entries returned.          | 72                                          |        |
     * | FlowRankingList     | array   | The list of network traffic analysis results.  |                                             |        |
     * #### FlowRankingList element structure
     * | Name                      | Type   | Description                                                                                       | Example                 | Valid values   |
     * |---------------------------|--------|---------------------------------------------------------------------------------------------------|-------------------------|----------|
     * | Direction                 | string | The traffic direction based on the Alibaba Cloud network resource instance. Valid values:
     * ● in: inbound traffic.
     * ● out: outbound traffic. | in                      | -in / -out |
     * | SourceIp                  | string | The source IP address.
     * ● This field is returned only when 2-tuple statistics are collected.    | 47.92.245.***           |          |
     * | SourcePort                | string | The source port.
     * ● This field is returned only when 5-tuple statistics are collected.          | 5432                    |          |
     * | DestinationIp             | string | The destination IP address.
     * ● This field is returned only when 2-tuple statistics are collected.| 192.168.***.0           |          |
     * | DestinationPort           | string | The destination port.
     * ● This field is returned only when 5-tuple statistics are collected.     | 23                      |          |
     * | Protocol                  | string | The network protocol.
     * ● This field is returned only when 5-tuple statistics are collected.     | TCP                     |          |
     * | Dscp                      | string | The Differentiated Services Code Point (DSCP) value.                                              | 0                       |          |
     * | DestinationRegionNo       | string | The destination region ID.                                                                        | ap-southeast-1          |          |
     * | SourceRegionNo            | string | The source region ID.                                                                             | ap-southeast-1          |          |
     * | TransitRouterAttachmentId | string | The network instance connection ID.                                                               | tr-attach-bfde1cd4cj*** |          |
     * | TransitRouterId           | string | The transit router instance ID.                                                                   | tr-2zefvwy2fz3444***    |          |
     * | TransitRouterPairAttachmentId | string | The transit router peering connection instance ID.                                            | tr-attach-okvj1cd4cjp*** |         |
     * | Bytes                     | number | The bandwidth.                                                                                    | 100                     |          |
     * | Packets                   | number | The number of packets.                                                                            | 100                     |          |
     * | BytesRate                 | number | The traffic ratio.                                                                                | 0.2                     |          |
     * | PacketsLostNoRoute        | number | The number of packets dropped due to no route.                                                    | 2                       |          |
     * | PacketsLostBlackhole      | number | The number of packets dropped due to blackhole routes.                                            | 4                       |          |
     * | PacketsLostTTLExpired     | number | The number of packets dropped due to TTL expiration.                                              | 7                       |          |
     * ---
     * ## TR flow log - VPC connection traffic scenario analysis results.
     * ### Request parameters
     * | Name                | Type    | Required | Description                                                                 | Example                                      | Valid values |
     * |---------------------|---------|----------|-----------------------------------------------------------------------------|---------------------------------------------|--------|
     * | NisTrafficRankingId | string  | Yes      | The ID of the network traffic analysis result.                              | task-6462a7b4c4a54b****                     |        |
     * | NextToken           | string  | No       | The paging token. Set this parameter to the NextToken value returned in the previous API call. | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | No       | The paging size. Valid values: 1 to 100. Default value: 20.                 | 20                                          |        |
     * ### Response parameters
     * | Name                | Type    | Description                                    | Example                                      | Valid values |
     * |---------------------|---------|------------------------------------------------|---------------------------------------------|--------|
     * | -                   | object  | RpcResponse                                    |                                             |        |
     * | RequestId           | string  | The request ID.                                | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941        |        |
     * | NisTrafficRankingId | string  | The ID of the network traffic analysis result. | task-7619ecb1db9148bab9f4                   |        |
     * | Status              | string  | The task running status.                       | Complete                                    |        |
     * | NextToken           | string  | The token for the next query.                  | LoeJLhK0fsDqYoXkXieZUqB2vWnccJtVnsyKu9KxFFOMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | The paging size. Valid values: 1 to 100. Default value: 20. | 20                                          |        |
     * | TotalCount          | integer | The total number of entries returned.          | 72                                          |        |
     * | FlowRankingList     | array   | The list of network traffic analysis results.  |                                             |        |
     * #### FlowRankingList element structure
     * | Name                                   | Type   | Description                                                                                       | Example                         | Valid values   |
     * |----------------------------------------|--------|---------------------------------------------------------------------------------------------------|---------------------------------|----------|
     * | Direction                              | string | The traffic direction based on the Alibaba Cloud network resource instance. Valid values:
     * ● in: inbound traffic.
     * ● out: outbound traffic. | in                              | -in / -out |
     * | SourceIp                               | string | The source IP address.
     * ● This field is returned only when 2-tuple statistics are collected.    | 47.92.245.***                   |          |
     * | SourcePort                             | string | The source port.
     * ● This field is returned only when 5-tuple statistics are collected.          | 5432                            |          |
     * | DestinationIp                          | string | The destination IP address.
     * ● This field is returned only when 2-tuple statistics are collected.| 192.168.***.0                   |          |
     * | DestinationPort                        | string | The destination port.
     * ● This field is returned only when 5-tuple statistics are collected.     | 23                              |          |
     * | Protocol                               | string | The network protocol.
     * ● This field is returned only when 5-tuple statistics are collected.     | TCP                             |          |
     * | Dscp                                   | string | The Differentiated Services Code Point (DSCP) value.                                              | 0                               |          |
     * | DestinationRegionNo                    | string | The destination region ID.                                                                        | ap-southeast-1                  |          |
     * | SourceRegionNo                         | string | The source region ID.                                                                             | ap-southeast-1                  |          |
     * | TransitRouterAttachmentId              | string | The network instance connection ID.                                                               | tr-attach-bfde1cd4cj***         |          |
     * | TransitRouterId                        | string | The transit router instance ID.                                                                   | tr-2zefvwy2fz3444***            |          |
     * | TransitRouterPairAttachmentId          | string | The transit router peering connection instance ID.                                                 | tr-attach-okvj1cd4cjp***        |          |
     * | TransitRouterSourceResourceId          | string | The source network instance ID.                                                                   | tr-attach-hvve1cd4cjpj***       |          |
     * | TransitRouterSourceAccountId           | string | The account ID of the source network instance.                                                    | 1906814138***                   |          |
     * | TransitRouterSourceVSwitchId           | string | The vSwitch ID of the source TR ENI.                                                              | vsw-ikfdkevlhxpqxuz****         |          |
     * | TransitRouterSourceNetworkInterface    | string | The source TR ENI.                                                                                | eni-8vbf2jxulma***              |          |
     * | TransitRouterSourceAvailableZone       | string | The source zone ID.                                                                               | ap-southeast-1-j                |          |
     * | TransitRouterDestinationResourceId     | string | The destination network instance ID.                                                              | tr-attach-bfve1cd4cjp****       |          |
     * | TransitRouterDestinationAccountId      | string | The account ID of the destination network instance.                                               | 1906814138***                   |          |
     * | TransitRouterDestinationVSwitchId      | string | The vSwitch ID of the destination TR ENI.                                                         | vsw-ikfdkevlhxpqxuz****         |          |
     * | TransitRouterDestinationNetworkInterface | string | The destination TR ENI.                                                                         | eni-7kcf2jxulma***              |          |
     * | TransitRouterDestinationAvailableZone  | string | The destination zone ID.                                                                          | ap-southeast-1-j                |          |
     * | Bytes                                  | number | The bandwidth.                                                                                    | 100                             |          |
     * | Packets                                | number | The number of packets.                                                                            | 100                             |          |
     * | BytesRate                              | number | The traffic ratio.                                                                                | 0.2                             |          |
     * | PacketsLostNoRoute                     | number | The number of packets dropped due to no route.                                                    | 2                               |          |
     * | PacketsLostBlackhole                   | number | The number of packets dropped due to blackhole routes.                                            | 4                               |          |
     * | PacketsLostTTLExpired                  | number | The number of packets dropped due to TTL expiration.                                              | 7                               |          |
     * ---
     * ## TR flow log - VBR traffic scenario analysis results.
     * ### Request parameters
     * | Name                | Type    | Required | Description                                                                 | Example                                      | Valid values |
     * |---------------------|---------|----------|-----------------------------------------------------------------------------|---------------------------------------------|--------|
     * | NisTrafficRankingId | string  | Yes      | The ID of the network traffic analysis result.                              | task-6462a7b4c4a54b****                     |        |
     * | NextToken           | string  | No       | The paging token. Set this parameter to the NextToken value returned in the previous API call. | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | No       | The paging size. Valid values: 1 to 100. Default value: 20.                 | 20                                          |        |
     * ### Response parameters
     * | Name                | Type    | Description                                    | Example                                      | Valid values |
     * |---------------------|---------|------------------------------------------------|---------------------------------------------|--------|
     * | -                   | object  | RpcResponse                                    |                                             |        |
     * | RequestId           | string  | The request ID.                                | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941        |        |
     * | NisTrafficRankingId | string  | The ID of the network traffic analysis result. | task-7619ecb1db9148bab9f4                   |        |
     * | Status              | string  | The task running status.                       | Complete                                    |        |
     * | NextToken           | string  | The token for the next query.                  | LoeJLhK0fsDqYoXkXieZUqB2vWnccJtVnsyKu9KxFFOMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | The paging size. Valid values: 1 to 100. Default value: 20. | 20                                          |        |
     * | TotalCount          | integer | The total number of entries returned.          | 72                                          |        |
     * | FlowRankingList     | array   | The list of network traffic analysis results.  |                                             |        |
     * #### FlowRankingList element structure
     * | Name                              | Type   | Description                                                                                       | Example                         | Valid values   |
     * |-----------------------------------|--------|---------------------------------------------------------------------------------------------------|---------------------------------|----------|
     * | Direction                         | string | The traffic direction based on the Alibaba Cloud network resource instance. Valid values:
     * ● in: inbound traffic.
     * ● out: outbound traffic. | in                              | -in / -out |
     * | SourceIp                          | string | The source IP address.
     * ● This field is returned only when 2-tuple statistics are collected.    | 47.92.245.***                   |          |
     * | SourcePort                        | string | The source port.
     * ● This field is returned only when 5-tuple statistics are collected.          | 5432                            |          |
     * | DestinationIp                     | string | The destination IP address.
     * ● This field is returned only when 2-tuple statistics are collected.| 192.168.***.0                   |          |
     * | DestinationPort                   | string | The destination port.
     * ● This field is returned only when 5-tuple statistics are collected.     | 23                              |          |
     * | Protocol                          | string | The network protocol.
     * ● This field is returned only when 5-tuple statistics are collected.     | TCP                             |          |
     * | Dscp                              | string | The Differentiated Services Code Point (DSCP) value.                                              | 0                               |          |
     * | DestinationRegionNo               | string | The destination region ID.                                                                        | ap-southeast-1                  |          |
     * | SourceRegionNo                    | string | The source region ID.                                                                             | ap-southeast-1                  |          |
     * | TransitRouterAttachmentId         | string | The network instance connection ID.                                                               | tr-attach-bfde1cd4cj***         |          |
     * | TransitRouterId                   | string | The transit router instance ID.                                                                   | tr-2zefvwy2fz3444***            |          |
     * | TransitRouterPairAttachmentId     | string | The transit router peering connection instance ID.                                                 | tr-attach-okvj1cd4cjp***        |          |
     * | TransitRouterSourceResourceId     | string | The source network instance ID.                                                                   | tr-attach-hvve1cd4cjpj***       |          |
     * | TransitRouterSourceAccountId      | string | The account ID of the source network instance.                                                    | 1906814138***                   |          |
     * | TransitRouterDestinationResourceId| string | The destination network instance ID.                                                              | tr-attach-bfve1cd4cjp****       |          |
     * | TransitRouterDestinationAccountId | string | The account ID of the destination network instance.                                               | 1906814138***                   |          |
     * | Bytes                             | number | The bandwidth.                                                                                    | 100                             |          |
     * | Packets                           | number | The number of packets.                                                                            | 100                             |          |
     * | BytesRate                         | number | The traffic ratio.                                                                                | 0.2                             |          |
     * | PacketsLostNoRoute                | number | The number of packets dropped due to no route.                                                    | 2                               |          |
     * | PacketsLostBlackhole              | number | The number of packets dropped due to blackhole routes.                                            | 4                               |          |
     * | PacketsLostTTLExpired             | number | The number of packets dropped due to TTL expiration.                                              | 7                               |          |
     * ---
     * ## TR flow log - ECR traffic scenario analysis results.
     * ### Request parameters
     * | Name                | Type    | Required | Description                                                                 | Example                                      | Valid values |
     * |---------------------|---------|----------|-----------------------------------------------------------------------------|---------------------------------------------|--------|
     * | NisTrafficRankingId | string  | Yes      | The ID of the network traffic analysis result.                              | task-6462a7b4c4a54b****                     |        |
     * | NextToken           | string  | No       | The paging token. Set this parameter to the NextToken value returned in the previous API call. | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | No       | The paging size. Valid values: 1 to 100. Default value: 20.                 | 20                                          |        |
     * ### Response parameters
     * | Name                | Type    | Description                                    | Example                                      | Valid values |
     * |---------------------|---------|------------------------------------------------|---------------------------------------------|--------|
     * | -                   | object  | RpcResponse                                    |                                             |        |
     * | RequestId           | string  | The request ID.                                | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941        |        |
     * | NisTrafficRankingId | string  | The ID of the network traffic analysis result. | task-7619ecb1db9148bab9f4                   |        |
     * | Status              | string  | The task running status.                       | Complete                                    |        |
     * | NextToken           | string  | The token for the next query.                  | LoeJLhK0fsDqYoXkXieZUqB2vWnccJtVnsyKu9KxFFOMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | The paging size. Valid values: 1 to 100. Default value: 20. | 20                                          |        |
     * | TotalCount          | integer | The total number of entries returned.          | 72                                          |        |
     * | FlowRankingList     | array   | The list of network traffic analysis results.  |                                             |        |
     * #### FlowRankingList element structure
     * | Name                              | Type   | Description                                                                                       | Example                         | Valid values   |
     * |-----------------------------------|--------|---------------------------------------------------------------------------------------------------|---------------------------------|----------|
     * | Direction                         | string | The traffic direction based on the
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
     * Queries the results of NIS traffic ranking analysis.
     *
     * @remarks
     * [Before using this operation, make sure that you fully understand the billing method and pricing of the NIS Traffic Analyzer.](https://www.alibabacloud.com/help/en/nis/product-overview/billing-method-new-version)
     * Supported analysis scenarios:
     * - All VPC network traffic analysis
     * - Public VPC network traffic analysis
     * - All TR network traffic analysis
     * - Internet Shared Bandwidth metric analysis
     * ## VPC flow log - All VPC flow log query and analysis results
     * ### Request parameters
     * | Name                | Type    | Required | Description                                                                 | Example                                      | Valid values |
     * |---------------------|---------|----------|-----------------------------------------------------------------------------|---------------------------------------------|--------|
     * | NisTrafficRankingId | string  | Yes      | The ID of the network traffic analysis result.                              | task-6462a7b4c4a54b****                     |        |
     * | NextToken           | string  | No       | The paging token. Set this parameter to the NextToken value returned in the previous API call. | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | No       | The paging size. Valid values: 1 to 100. Default value: 20.                 | 20                                          |        |
     * ### Response parameters
     * | Name                | Type    | Description                                    | Example                                      | Valid values |
     * |---------------------|---------|------------------------------------------------|---------------------------------------------|--------|
     * | -                   | object  | RpcResponse                                    |                                             |        |
     * | RequestId           | string  | The request ID.                                | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941        |        |
     * | NisTrafficRankingId | string  | The ID of the network traffic analysis result. | task-7619ecb1db9148bab9f4                   |        |
     * | Status              | string  | The task running status.                       | Complete                                    |        |
     * | NextToken           | string  | The token for the next query.                  | LoeJLhK0fsDqYoXkXieZUqB2vWnccJtVnsyKu9KxFFOMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | The paging size. Valid values: 1 to 100. Default value: 20. | 20                                          |        |
     * | TotalCount          | integer | The total number of entries returned.          | 72                                          |        |
     * | FlowRankingList     | array   | The list of network traffic analysis results.  |                                             |        |
     * #### FlowRankingList element structure
     * | Name               | Type   | Description                                                                                       | Example            | Valid values   |
     * |--------------------|--------|---------------------------------------------------------------------------------------------------|--------------------|----------|
     * | RegionId           | string | The region where the flow log resides.                                                            | ap-southeast-1     |          |
     * | VpcId              | string | The VPC ID.                                                                                       | vpc-m5ec6i0h5xss*** |         |
     * | VSwitchId          | string | The vSwitch ID.                                                                                   | vsw-2zeekevlh****  |          |
     * | NetworkInterfaceId | string | The elastic network interface (ENI) ID.                                                           | eni-8vbf2jxul***   |          |
     * | EcsId              | string | The ECS instance ID of the management node.                                                       | i-uf6i1zi6yhq7h*** |          |
     * | TrafficPath        | string | The traffic path.                                                                                 | all                |          |
     * | Direction          | string | The traffic direction based on the Alibaba Cloud network resource instance. Valid values:
     * ● in: inbound traffic.
     * ● out: outbound traffic. | in                 | -in / -out |
     * | SourceIp           | string | The source IP address.
     * ● This field is returned only when 2-tuple statistics are collected.    | 47.92.245.***      |          |
     * | SourcePort         | string | The source port.
     * ● This field is returned only when 5-tuple statistics are collected.          | 5432               |          |
     * | DestinationIp      | string | The destination IP address.
     * ● This field is returned only when 2-tuple statistics are collected.| 192.168.***.0      |          |
     * | DestinationPort    | string | The destination port.
     * ● This field is returned only when 5-tuple statistics are collected.     | 23                 |          |
     * | Protocol           | string | The network protocol.
     * ● This field is returned only when 5-tuple statistics are collected.     | TCP                |          |
     * | Bytes              | number | The bandwidth.                                                                                    | 100                |          |
     * | Packets            | number | The number of packets.                                                                            | 100                |          |
     * | RoundTripTime      | number | The TCP RTT.                                                                                      | 2                  |          |
     * | BytesRate          | number | The traffic ratio.                                                                                | 0.2                |          |
     * ---
     * ## VPC flow log - Public VPC flow log query and analysis results
     * ### Request parameters
     * | Name                | Type    | Required | Description                                                                 | Example                                      | Valid values |
     * |---------------------|---------|----------|-----------------------------------------------------------------------------|---------------------------------------------|--------|
     * | NisTrafficRankingId | string  | Yes      | The ID of the network traffic analysis result.                              | task-6462a7b4c4a54b****                     |        |
     * | NextToken           | string  | No       | The paging token. Set this parameter to the NextToken value returned in the previous API call. | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | No       | The paging size. Valid values: 1 to 100. Default value: 20.                 | 20                                          |        |
     * ### Response parameters
     * | Name                | Type    | Description                                    | Example                                      | Valid values |
     * |---------------------|---------|------------------------------------------------|---------------------------------------------|--------|
     * | -                   | object  | RpcResponse                                    |                                             |        |
     * | RequestId           | string  | The request ID.                                | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941        |        |
     * | NisTrafficRankingId | string  | The ID of the network traffic analysis result. | task-7619ecb1db9148bab9f4                   |        |
     * | Status              | string  | The task running status.                       | Complete                                    |        |
     * | NextToken           | string  | The token for the next query.                  | LoeJLhK0fsDqYoXkXieZUqB2vWnccJtVnsyKu9KxFFOMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | The paging size. Valid values: 1 to 100. Default value: 20. | 20                                          |        |
     * | TotalCount          | integer | The total number of entries returned.          | 72                                          |        |
     * | FlowRankingList     | array   | The list of network traffic analysis results.  |                                             |        |
     * #### FlowRankingList element structure
     * | Name               | Type   | Description                                                                                       | Example                | Valid values   |
     * |--------------------|--------|---------------------------------------------------------------------------------------------------|------------------------|----------|
     * | RegionId           | string | The region where the flow log resides.                                                            | ap-southeast-1         |          |
     * | VpcId              | string | The VPC ID.                                                                                       | vpc-m5ec6i0h5xss***    |          |
     * | VSwitchId          | string | The vSwitch ID.                                                                                   | vsw-2zeekevlh****      |          |
     * | NetworkInterfaceId | string | The elastic network interface (ENI) ID.                                                           | eni-8vbf2jxul***       |          |
     * | EcsId              | string | The ECS instance ID of the management node.                                                       | i-uf6i1zi6yhq7h***     |          |
     * | TrafficPath        | string | The traffic path.                                                                                 | all                    |          |
     * | Direction          | string | The traffic direction based on the Alibaba Cloud network resource instance. Valid values:
     * ● in: inbound traffic.
     * ● out: outbound traffic. | in                     | -in / -out |
     * | SourceIp           | string | The source IP address.
     * ● This field is returned only when 2-tuple statistics are collected.    | 47.92.245.***          |          |
     * | SourcePort         | string | The source port.
     * ● This field is returned only when 5-tuple statistics are collected.          | 5432                   |          |
     * | DestinationIp      | string | The destination IP address.
     * ● This field is returned only when 2-tuple statistics are collected.| 192.168.***.0          |          |
     * | DestinationPort    | string | The destination port.
     * ● This field is returned only when 5-tuple statistics are collected.     | 23                     |          |
     * | Protocol           | string | The network protocol.
     * ● This field is returned only when 5-tuple statistics are collected.     | TCP                    |          |
     * | ClientCountry      | string | The country of the client.                                                                        | China                  |          |
     * | ClientProvince     | string | The province of the client.                                                                       | Hong Kong SAR          |          |
     * | ClientCity         | string | The city of the client.                                                                           | Kowloon                |          |
     * | ClientIsp          | string | The network service provider.                                                                     | Alibaba Cloud          |          |
     * | ClientAsn          | string | The autonomous system number.                                                                     | 45102                  |          |
     * | Bytes              | number | The bandwidth.                                                                                    | 100                    |          |
     * | Packets            | number | The number of packets.                                                                            | 100                    |          |
     * | RoundTripTime      | number | The TCP RTT.                                                                                      | 2                      |          |
     * | BytesRate          | number | The traffic ratio.                                                                                | 0.2                    |          |
     * ---
     * ## TR flow log - TR cross-region scenario analysis results.
     * ### Request parameters
     * | Name                | Type    | Required | Description                                                                 | Example                                      | Valid values |
     * |---------------------|---------|----------|-----------------------------------------------------------------------------|---------------------------------------------|--------|
     * | NisTrafficRankingId | string  | Yes      | The ID of the network traffic analysis result.                              | task-6462a7b4c4a54b****                     |        |
     * | NextToken           | string  | No       | The paging token. Set this parameter to the NextToken value returned in the previous API call. | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | No       | The paging size. Valid values: 1 to 100. Default value: 20.                 | 20                                          |        |
     * ### Response parameters
     * | Name                | Type    | Description                                    | Example                                      | Valid values |
     * |---------------------|---------|------------------------------------------------|---------------------------------------------|--------|
     * | -                   | object  | RpcResponse                                    |                                             |        |
     * | RequestId           | string  | The request ID.                                | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941        |        |
     * | NisTrafficRankingId | string  | The ID of the network traffic analysis result. | task-7619ecb1db9148bab9f4                   |        |
     * | Status              | string  | The task running status.                       | Complete                                    |        |
     * | NextToken           | string  | The token for the next query.                  | LoeJLhK0fsDqYoXkXieZUqB2vWnccJtVnsyKu9KxFFOMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | The paging size. Valid values: 1 to 100. Default value: 20. | 20                                          |        |
     * | TotalCount          | integer | The total number of entries returned.          | 72                                          |        |
     * | FlowRankingList     | array   | The list of network traffic analysis results.  |                                             |        |
     * #### FlowRankingList element structure
     * | Name                      | Type   | Description                                                                                       | Example                 | Valid values   |
     * |---------------------------|--------|---------------------------------------------------------------------------------------------------|-------------------------|----------|
     * | Direction                 | string | The traffic direction based on the Alibaba Cloud network resource instance. Valid values:
     * ● in: inbound traffic.
     * ● out: outbound traffic. | in                      | -in / -out |
     * | SourceIp                  | string | The source IP address.
     * ● This field is returned only when 2-tuple statistics are collected.    | 47.92.245.***           |          |
     * | SourcePort                | string | The source port.
     * ● This field is returned only when 5-tuple statistics are collected.          | 5432                    |          |
     * | DestinationIp             | string | The destination IP address.
     * ● This field is returned only when 2-tuple statistics are collected.| 192.168.***.0           |          |
     * | DestinationPort           | string | The destination port.
     * ● This field is returned only when 5-tuple statistics are collected.     | 23                      |          |
     * | Protocol                  | string | The network protocol.
     * ● This field is returned only when 5-tuple statistics are collected.     | TCP                     |          |
     * | Dscp                      | string | The Differentiated Services Code Point (DSCP) value.                                              | 0                       |          |
     * | DestinationRegionNo       | string | The destination region ID.                                                                        | ap-southeast-1          |          |
     * | SourceRegionNo            | string | The source region ID.                                                                             | ap-southeast-1          |          |
     * | TransitRouterAttachmentId | string | The network instance connection ID.                                                               | tr-attach-bfde1cd4cj*** |          |
     * | TransitRouterId           | string | The transit router instance ID.                                                                   | tr-2zefvwy2fz3444***    |          |
     * | TransitRouterPairAttachmentId | string | The transit router peering connection instance ID.                                            | tr-attach-okvj1cd4cjp*** |         |
     * | Bytes                     | number | The bandwidth.                                                                                    | 100                     |          |
     * | Packets                   | number | The number of packets.                                                                            | 100                     |          |
     * | BytesRate                 | number | The traffic ratio.                                                                                | 0.2                     |          |
     * | PacketsLostNoRoute        | number | The number of packets dropped due to no route.                                                    | 2                       |          |
     * | PacketsLostBlackhole      | number | The number of packets dropped due to blackhole routes.                                            | 4                       |          |
     * | PacketsLostTTLExpired     | number | The number of packets dropped due to TTL expiration.                                              | 7                       |          |
     * ---
     * ## TR flow log - VPC connection traffic scenario analysis results.
     * ### Request parameters
     * | Name                | Type    | Required | Description                                                                 | Example                                      | Valid values |
     * |---------------------|---------|----------|-----------------------------------------------------------------------------|---------------------------------------------|--------|
     * | NisTrafficRankingId | string  | Yes      | The ID of the network traffic analysis result.                              | task-6462a7b4c4a54b****                     |        |
     * | NextToken           | string  | No       | The paging token. Set this parameter to the NextToken value returned in the previous API call. | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | No       | The paging size. Valid values: 1 to 100. Default value: 20.                 | 20                                          |        |
     * ### Response parameters
     * | Name                | Type    | Description                                    | Example                                      | Valid values |
     * |---------------------|---------|------------------------------------------------|---------------------------------------------|--------|
     * | -                   | object  | RpcResponse                                    |                                             |        |
     * | RequestId           | string  | The request ID.                                | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941        |        |
     * | NisTrafficRankingId | string  | The ID of the network traffic analysis result. | task-7619ecb1db9148bab9f4                   |        |
     * | Status              | string  | The task running status.                       | Complete                                    |        |
     * | NextToken           | string  | The token for the next query.                  | LoeJLhK0fsDqYoXkXieZUqB2vWnccJtVnsyKu9KxFFOMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | The paging size. Valid values: 1 to 100. Default value: 20. | 20                                          |        |
     * | TotalCount          | integer | The total number of entries returned.          | 72                                          |        |
     * | FlowRankingList     | array   | The list of network traffic analysis results.  |                                             |        |
     * #### FlowRankingList element structure
     * | Name                                   | Type   | Description                                                                                       | Example                         | Valid values   |
     * |----------------------------------------|--------|---------------------------------------------------------------------------------------------------|---------------------------------|----------|
     * | Direction                              | string | The traffic direction based on the Alibaba Cloud network resource instance. Valid values:
     * ● in: inbound traffic.
     * ● out: outbound traffic. | in                              | -in / -out |
     * | SourceIp                               | string | The source IP address.
     * ● This field is returned only when 2-tuple statistics are collected.    | 47.92.245.***                   |          |
     * | SourcePort                             | string | The source port.
     * ● This field is returned only when 5-tuple statistics are collected.          | 5432                            |          |
     * | DestinationIp                          | string | The destination IP address.
     * ● This field is returned only when 2-tuple statistics are collected.| 192.168.***.0                   |          |
     * | DestinationPort                        | string | The destination port.
     * ● This field is returned only when 5-tuple statistics are collected.     | 23                              |          |
     * | Protocol                               | string | The network protocol.
     * ● This field is returned only when 5-tuple statistics are collected.     | TCP                             |          |
     * | Dscp                                   | string | The Differentiated Services Code Point (DSCP) value.                                              | 0                               |          |
     * | DestinationRegionNo                    | string | The destination region ID.                                                                        | ap-southeast-1                  |          |
     * | SourceRegionNo                         | string | The source region ID.                                                                             | ap-southeast-1                  |          |
     * | TransitRouterAttachmentId              | string | The network instance connection ID.                                                               | tr-attach-bfde1cd4cj***         |          |
     * | TransitRouterId                        | string | The transit router instance ID.                                                                   | tr-2zefvwy2fz3444***            |          |
     * | TransitRouterPairAttachmentId          | string | The transit router peering connection instance ID.                                                 | tr-attach-okvj1cd4cjp***        |          |
     * | TransitRouterSourceResourceId          | string | The source network instance ID.                                                                   | tr-attach-hvve1cd4cjpj***       |          |
     * | TransitRouterSourceAccountId           | string | The account ID of the source network instance.                                                    | 1906814138***                   |          |
     * | TransitRouterSourceVSwitchId           | string | The vSwitch ID of the source TR ENI.                                                              | vsw-ikfdkevlhxpqxuz****         |          |
     * | TransitRouterSourceNetworkInterface    | string | The source TR ENI.                                                                                | eni-8vbf2jxulma***              |          |
     * | TransitRouterSourceAvailableZone       | string | The source zone ID.                                                                               | ap-southeast-1-j                |          |
     * | TransitRouterDestinationResourceId     | string | The destination network instance ID.                                                              | tr-attach-bfve1cd4cjp****       |          |
     * | TransitRouterDestinationAccountId      | string | The account ID of the destination network instance.                                               | 1906814138***                   |          |
     * | TransitRouterDestinationVSwitchId      | string | The vSwitch ID of the destination TR ENI.                                                         | vsw-ikfdkevlhxpqxuz****         |          |
     * | TransitRouterDestinationNetworkInterface | string | The destination TR ENI.                                                                         | eni-7kcf2jxulma***              |          |
     * | TransitRouterDestinationAvailableZone  | string | The destination zone ID.                                                                          | ap-southeast-1-j                |          |
     * | Bytes                                  | number | The bandwidth.                                                                                    | 100                             |          |
     * | Packets                                | number | The number of packets.                                                                            | 100                             |          |
     * | BytesRate                              | number | The traffic ratio.                                                                                | 0.2                             |          |
     * | PacketsLostNoRoute                     | number | The number of packets dropped due to no route.                                                    | 2                               |          |
     * | PacketsLostBlackhole                   | number | The number of packets dropped due to blackhole routes.                                            | 4                               |          |
     * | PacketsLostTTLExpired                  | number | The number of packets dropped due to TTL expiration.                                              | 7                               |          |
     * ---
     * ## TR flow log - VBR traffic scenario analysis results.
     * ### Request parameters
     * | Name                | Type    | Required | Description                                                                 | Example                                      | Valid values |
     * |---------------------|---------|----------|-----------------------------------------------------------------------------|---------------------------------------------|--------|
     * | NisTrafficRankingId | string  | Yes      | The ID of the network traffic analysis result.                              | task-6462a7b4c4a54b****                     |        |
     * | NextToken           | string  | No       | The paging token. Set this parameter to the NextToken value returned in the previous API call. | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | No       | The paging size. Valid values: 1 to 100. Default value: 20.                 | 20                                          |        |
     * ### Response parameters
     * | Name                | Type    | Description                                    | Example                                      | Valid values |
     * |---------------------|---------|------------------------------------------------|---------------------------------------------|--------|
     * | -                   | object  | RpcResponse                                    |                                             |        |
     * | RequestId           | string  | The request ID.                                | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941        |        |
     * | NisTrafficRankingId | string  | The ID of the network traffic analysis result. | task-7619ecb1db9148bab9f4                   |        |
     * | Status              | string  | The task running status.                       | Complete                                    |        |
     * | NextToken           | string  | The token for the next query.                  | LoeJLhK0fsDqYoXkXieZUqB2vWnccJtVnsyKu9KxFFOMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | The paging size. Valid values: 1 to 100. Default value: 20. | 20                                          |        |
     * | TotalCount          | integer | The total number of entries returned.          | 72                                          |        |
     * | FlowRankingList     | array   | The list of network traffic analysis results.  |                                             |        |
     * #### FlowRankingList element structure
     * | Name                              | Type   | Description                                                                                       | Example                         | Valid values   |
     * |-----------------------------------|--------|---------------------------------------------------------------------------------------------------|---------------------------------|----------|
     * | Direction                         | string | The traffic direction based on the Alibaba Cloud network resource instance. Valid values:
     * ● in: inbound traffic.
     * ● out: outbound traffic. | in                              | -in / -out |
     * | SourceIp                          | string | The source IP address.
     * ● This field is returned only when 2-tuple statistics are collected.    | 47.92.245.***                   |          |
     * | SourcePort                        | string | The source port.
     * ● This field is returned only when 5-tuple statistics are collected.          | 5432                            |          |
     * | DestinationIp                     | string | The destination IP address.
     * ● This field is returned only when 2-tuple statistics are collected.| 192.168.***.0                   |          |
     * | DestinationPort                   | string | The destination port.
     * ● This field is returned only when 5-tuple statistics are collected.     | 23                              |          |
     * | Protocol                          | string | The network protocol.
     * ● This field is returned only when 5-tuple statistics are collected.     | TCP                             |          |
     * | Dscp                              | string | The Differentiated Services Code Point (DSCP) value.                                              | 0                               |          |
     * | DestinationRegionNo               | string | The destination region ID.                                                                        | ap-southeast-1                  |          |
     * | SourceRegionNo                    | string | The source region ID.                                                                             | ap-southeast-1                  |          |
     * | TransitRouterAttachmentId         | string | The network instance connection ID.                                                               | tr-attach-bfde1cd4cj***         |          |
     * | TransitRouterId                   | string | The transit router instance ID.                                                                   | tr-2zefvwy2fz3444***            |          |
     * | TransitRouterPairAttachmentId     | string | The transit router peering connection instance ID.                                                 | tr-attach-okvj1cd4cjp***        |          |
     * | TransitRouterSourceResourceId     | string | The source network instance ID.                                                                   | tr-attach-hvve1cd4cjpj***       |          |
     * | TransitRouterSourceAccountId      | string | The account ID of the source network instance.                                                    | 1906814138***                   |          |
     * | TransitRouterDestinationResourceId| string | The destination network instance ID.                                                              | tr-attach-bfve1cd4cjp****       |          |
     * | TransitRouterDestinationAccountId | string | The account ID of the destination network instance.                                               | 1906814138***                   |          |
     * | Bytes                             | number | The bandwidth.                                                                                    | 100                             |          |
     * | Packets                           | number | The number of packets.                                                                            | 100                             |          |
     * | BytesRate                         | number | The traffic ratio.                                                                                | 0.2                             |          |
     * | PacketsLostNoRoute                | number | The number of packets dropped due to no route.                                                    | 2                               |          |
     * | PacketsLostBlackhole              | number | The number of packets dropped due to blackhole routes.                                            | 4                               |          |
     * | PacketsLostTTLExpired             | number | The number of packets dropped due to TTL expiration.                                              | 7                               |          |
     * ---
     * ## TR flow log - ECR traffic scenario analysis results.
     * ### Request parameters
     * | Name                | Type    | Required | Description                                                                 | Example                                      | Valid values |
     * |---------------------|---------|----------|-----------------------------------------------------------------------------|---------------------------------------------|--------|
     * | NisTrafficRankingId | string  | Yes      | The ID of the network traffic analysis result.                              | task-6462a7b4c4a54b****                     |        |
     * | NextToken           | string  | No       | The paging token. Set this parameter to the NextToken value returned in the previous API call. | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | No       | The paging size. Valid values: 1 to 100. Default value: 20.                 | 20                                          |        |
     * ### Response parameters
     * | Name                | Type    | Description                                    | Example                                      | Valid values |
     * |---------------------|---------|------------------------------------------------|---------------------------------------------|--------|
     * | -                   | object  | RpcResponse                                    |                                             |        |
     * | RequestId           | string  | The request ID.                                | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941        |        |
     * | NisTrafficRankingId | string  | The ID of the network traffic analysis result. | task-7619ecb1db9148bab9f4                   |        |
     * | Status              | string  | The task running status.                       | Complete                                    |        |
     * | NextToken           | string  | The token for the next query.                  | LoeJLhK0fsDqYoXkXieZUqB2vWnccJtVnsyKu9KxFFOMQxtV8XckOg5lk7F2bhC+ |        |
     * | MaxResults          | integer | The paging size. Valid values: 1 to 100. Default value: 20. | 20                                          |        |
     * | TotalCount          | integer | The total number of entries returned.          | 72                                          |        |
     * | FlowRankingList     | array   | The list of network traffic analysis results.  |                                             |        |
     * #### FlowRankingList element structure
     * | Name                              | Type   | Description                                                                                       | Example                         | Valid values   |
     * |-----------------------------------|--------|---------------------------------------------------------------------------------------------------|---------------------------------|----------|
     * | Direction                         | string | The traffic direction based on the
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
     * - The **init** state indicates that the task is in progress.
     * - The **finish** state indicates that the task is complete. In this state, you can obtain the analysis result.
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
     * - The **init** state indicates that the task is in progress.
     * - The **finish** state indicates that the task is complete. In this state, you can obtain the analysis result.
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
     * Retrieves detailed monitoring metric trends data for a specified NIS network analysis scenario, including traffic metric trends for network traffic analysis scenarios and performance metric trends for performance observation scenarios.
     *
     * @remarks
     * Data query result synchronization:
     * - API data is synchronized every 6 hours. You can query current network analysis data only after 6 hours.
     * Supported analysis scenarios:
     * - Cross-zone internal network performance observation dashboard scenario
     * - Cross-region internal network performance observation dashboard scenario
     * ## Cross-zone internal network performance observation dashboard scenario
     * **Description**
     * -   If the query time span exceeds 5 days, the query result contains one data entry per day.
     *
     * -   If the query time span exceeds 1 day, the query result contains one data entry per hour.
     *
     * -   If the query time span is less than 1 day, the query result contains one data entry per 5 minutes.
     * ### **Request parameters**
     * | **Name** | **Type** | **Required** | **Description** |
     * | --- | --- | --- | --- |
     * | RegionNo | string | Yes | The Alibaba Cloud region. |
     * | ResourceType | string | Yes | Set to **IntranetProbing** to query cross-zone performance monitoring trends. |
     * | MetricName | string | Yes | The metric for which to query trends. Valid value: **rtt**, the round-trip time of probing. |
     * | Dimensions | object[\\] | Yes | The filter information. |
     * | \\-Name | string | Yes | The filter condition. Valid values:
     *  - **SourceZone**: the source zone of probing. This parameter is required.
     *  - **DestinationZone**: the destination zone of probing. This parameter is required. |
     * | \\-Value | string | Yes | The filter value corresponding to the filter condition. Examples:
     *  - SourceZone: cn-hangzhou-j
     *  - DestinationZone: cn-hangzhou-k |
     * ### **Response parameters**
     * | **Name** | **Type** | **Description** |
     * | --- | --- | --- |
     * | RequestId | string | The request ID. |
     * | Data | object | The cloud network metric trends data object. |
     * | Metrics | array | The collection of metric trends data. |
     * | \\-TimeStamp | long | The UNIX timestamp in milliseconds. |
     * | \\-Value | double | The metric value corresponding to the input parameter **MetricName**. |
     * | Unit | String | The unit of **Value**. |
     * ## **Cross-region internal network performance observation dashboard scenario**
     * **Description**
     * -   If the query time span exceeds 5 days, the query result contains one data entry per day.
     *
     * -   If the query time span exceeds 1 day, the query result contains one data entry per hour.
     *
     * -   If the query time span is less than 1 day, the query result contains one data entry per 5 minutes.
     * ### **Request parameters**
     * | **Name** | **Type** | **Required** | **Description** |
     * | --- | --- | --- | --- |
     * | RegionNo | string | Yes | The Alibaba Cloud region. |
     * | ResourceType | string | Yes | Set to **IntranetProbing** to query cross-region performance observation rankings. |
     * | Direction | string | Yes | The probing direction. Valid values:
     *  - **in**: probing with RegionNo as the destination.
     *  - **out**: probing with RegionNo as the source. |
     * | MetricName | string | Yes | The metric for which to query trends. Valid value: **rtt**, the round-trip time of probing. |
     * | Dimensions | object[\\] | No | The filter information. |
     * | \\-Name | string | No | The filter condition. Valid value: **DestinationRegionNo**, the destination region of probing. This parameter is required. |
     * | \\-Value | string | No | The destination region ID. Example: DestinationRegionNo: cn-shenzhen |
     * ### **Response parameters**
     * | **Name** | **Type** | **Description** |
     * | --- | --- | --- |
     * | RequestId | string | The request ID. |
     * | Data | object | The cloud network metric trends data object. |
     * | Metrics | array | The collection of metric trends data. |
     * | \\-TimeStamp | long | The UNIX timestamp in milliseconds. |
     * | \\-Value | double | The metric value corresponding to the input parameter **MetricName**. |
     * | Unit | String | The unit of **Value**. |
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
     * Retrieves detailed monitoring metric trends data for a specified NIS network analysis scenario, including traffic metric trends for network traffic analysis scenarios and performance metric trends for performance observation scenarios.
     *
     * @remarks
     * Data query result synchronization:
     * - API data is synchronized every 6 hours. You can query current network analysis data only after 6 hours.
     * Supported analysis scenarios:
     * - Cross-zone internal network performance observation dashboard scenario
     * - Cross-region internal network performance observation dashboard scenario
     * ## Cross-zone internal network performance observation dashboard scenario
     * **Description**
     * -   If the query time span exceeds 5 days, the query result contains one data entry per day.
     *
     * -   If the query time span exceeds 1 day, the query result contains one data entry per hour.
     *
     * -   If the query time span is less than 1 day, the query result contains one data entry per 5 minutes.
     * ### **Request parameters**
     * | **Name** | **Type** | **Required** | **Description** |
     * | --- | --- | --- | --- |
     * | RegionNo | string | Yes | The Alibaba Cloud region. |
     * | ResourceType | string | Yes | Set to **IntranetProbing** to query cross-zone performance monitoring trends. |
     * | MetricName | string | Yes | The metric for which to query trends. Valid value: **rtt**, the round-trip time of probing. |
     * | Dimensions | object[\\] | Yes | The filter information. |
     * | \\-Name | string | Yes | The filter condition. Valid values:
     *  - **SourceZone**: the source zone of probing. This parameter is required.
     *  - **DestinationZone**: the destination zone of probing. This parameter is required. |
     * | \\-Value | string | Yes | The filter value corresponding to the filter condition. Examples:
     *  - SourceZone: cn-hangzhou-j
     *  - DestinationZone: cn-hangzhou-k |
     * ### **Response parameters**
     * | **Name** | **Type** | **Description** |
     * | --- | --- | --- |
     * | RequestId | string | The request ID. |
     * | Data | object | The cloud network metric trends data object. |
     * | Metrics | array | The collection of metric trends data. |
     * | \\-TimeStamp | long | The UNIX timestamp in milliseconds. |
     * | \\-Value | double | The metric value corresponding to the input parameter **MetricName**. |
     * | Unit | String | The unit of **Value**. |
     * ## **Cross-region internal network performance observation dashboard scenario**
     * **Description**
     * -   If the query time span exceeds 5 days, the query result contains one data entry per day.
     *
     * -   If the query time span exceeds 1 day, the query result contains one data entry per hour.
     *
     * -   If the query time span is less than 1 day, the query result contains one data entry per 5 minutes.
     * ### **Request parameters**
     * | **Name** | **Type** | **Required** | **Description** |
     * | --- | --- | --- | --- |
     * | RegionNo | string | Yes | The Alibaba Cloud region. |
     * | ResourceType | string | Yes | Set to **IntranetProbing** to query cross-region performance observation rankings. |
     * | Direction | string | Yes | The probing direction. Valid values:
     *  - **in**: probing with RegionNo as the destination.
     *  - **out**: probing with RegionNo as the source. |
     * | MetricName | string | Yes | The metric for which to query trends. Valid value: **rtt**, the round-trip time of probing. |
     * | Dimensions | object[\\] | No | The filter information. |
     * | \\-Name | string | No | The filter condition. Valid value: **DestinationRegionNo**, the destination region of probing. This parameter is required. |
     * | \\-Value | string | No | The destination region ID. Example: DestinationRegionNo: cn-shenzhen |
     * ### **Response parameters**
     * | **Name** | **Type** | **Description** |
     * | --- | --- | --- |
     * | RequestId | string | The request ID. |
     * | Data | object | The cloud network metric trends data object. |
     * | Metrics | array | The collection of metric trends data. |
     * | \\-TimeStamp | long | The UNIX timestamp in milliseconds. |
     * | \\-Value | double | The metric value corresponding to the input parameter **MetricName**. |
     * | Unit | String | The unit of **Value**. |
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
     * Supports ranking analysis of traffic flowing through different cloud network resources by using sorting algorithms and data processing capabilities, and sorts detection metrics of Alibaba Cloud performance observation to help you quickly identify network bottlenecks, optimize resource configurations, and improve overall network performance.
     *
     * @remarks
     * Supported analysis scenarios:
     * ## Internet performance observation dashboard scenario.
     * ### **Request parameters**
     * ### **Response parameters**
     * ## Cross-zone internal network performance observation dashboard scenario.
     * ### **Request parameters**
     * ### **Response parameters**
     * ## **Cross-region internal network performance observation dashboard scenario**
     * ### **Request parameters**
     * ### **Response parameters**
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
     * Supports ranking analysis of traffic flowing through different cloud network resources by using sorting algorithms and data processing capabilities, and sorts detection metrics of Alibaba Cloud performance observation to help you quickly identify network bottlenecks, optimize resource configurations, and improve overall network performance.
     *
     * @remarks
     * Supported analysis scenarios:
     * ## Internet performance observation dashboard scenario.
     * ### **Request parameters**
     * ### **Response parameters**
     * ## Cross-zone internal network performance observation dashboard scenario.
     * ### **Request parameters**
     * ### **Response parameters**
     * ## **Cross-region internal network performance observation dashboard scenario**
     * ### **Request parameters**
     * ### **Response parameters**
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
     * Retrieves the metric trends for network traffic analysis.
     *
     * @param tmpReq - GetNisTrafficMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNisTrafficMetricsResponse
     *
     * @param GetNisTrafficMetricsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GetNisTrafficMetricsResponse
     */
    public function getNisTrafficMetricsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetNisTrafficMetricsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
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

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->scanBy) {
            @$query['ScanBy'] = $request->scanBy;
        }

        if (null !== $request->stepMinutes) {
            @$query['StepMinutes'] = $request->stepMinutes;
        }

        if (null !== $request->storageInterval) {
            @$query['StorageInterval'] = $request->storageInterval;
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
            'action' => 'GetNisTrafficMetrics',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNisTrafficMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the metric trends for network traffic analysis.
     *
     * @param request - GetNisTrafficMetricsRequest
     *
     * @returns GetNisTrafficMetricsResponse
     *
     * @param GetNisTrafficMetricsRequest $request
     *
     * @return GetNisTrafficMetricsResponse
     */
    public function getNisTrafficMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNisTrafficMetricsWithOptions($request, $runtime);
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
     * Lists the resource types available for inspection.
     *
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
     * Lists the resource types available for inspection.
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
     * Queries a list of inspection task reports.
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
     * Queries a list of inspection task reports.
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
     * Lists the network inspection tasks.
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
     * Lists the network inspection tasks.
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
     * Sends an A2A streaming message.
     *
     * @param tmpReq - SendNapalStreamMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendNapalStreamMessageResponse
     *
     * @param SendNapalStreamMessageRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SendNapalStreamMessageResponse
     */
    public function sendNapalStreamMessageWithSSE($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SendNapalStreamMessageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configuration) {
            $request->configurationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configuration, 'Configuration', 'json');
        }

        if (null !== $tmpReq->message) {
            $request->messageShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->message, 'Message', 'json');
        }

        if (null !== $tmpReq->metadata) {
            $request->metadataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metadata, 'Metadata', 'json');
        }

        $body = [];
        if (null !== $request->configurationShrink) {
            @$body['Configuration'] = $request->configurationShrink;
        }

        if (null !== $request->messageShrink) {
            @$body['Message'] = $request->messageShrink;
        }

        if (null !== $request->metadataShrink) {
            @$body['Metadata'] = $request->metadataShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendNapalStreamMessage',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield SendNapalStreamMessageResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Sends an A2A streaming message.
     *
     * @param tmpReq - SendNapalStreamMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendNapalStreamMessageResponse
     *
     * @param SendNapalStreamMessageRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SendNapalStreamMessageResponse
     */
    public function sendNapalStreamMessageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SendNapalStreamMessageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configuration) {
            $request->configurationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configuration, 'Configuration', 'json');
        }

        if (null !== $tmpReq->message) {
            $request->messageShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->message, 'Message', 'json');
        }

        if (null !== $tmpReq->metadata) {
            $request->metadataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metadata, 'Metadata', 'json');
        }

        $body = [];
        if (null !== $request->configurationShrink) {
            @$body['Configuration'] = $request->configurationShrink;
        }

        if (null !== $request->messageShrink) {
            @$body['Message'] = $request->messageShrink;
        }

        if (null !== $request->metadataShrink) {
            @$body['Metadata'] = $request->metadataShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendNapalStreamMessage',
            'version' => '2021-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendNapalStreamMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends an A2A streaming message.
     *
     * @param request - SendNapalStreamMessageRequest
     *
     * @returns SendNapalStreamMessageResponse
     *
     * @param SendNapalStreamMessageRequest $request
     *
     * @return SendNapalStreamMessageResponse
     */
    public function sendNapalStreamMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendNapalStreamMessageWithOptions($request, $runtime);
    }

    /**
     * Starts an inspection task to generate an inspection report.
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
     * Starts an inspection task to generate an inspection report.
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
     * Triggers the NIS traffic analyzer to execute a traffic sorting task within a specified scope.
     *
     * @remarks
     * [Before using this operation, make sure that you fully understand the billing method and pricing of the NIS traffic analyzer.](https://www.alibabacloud.com/help/en/nis/product-overview/billing-method-new-version)
     * Before using this operation, create a traffic analyzer and add a data source.
     * [Create a traffic analyzer](https://www.alibabacloud.com/help/en/nis/user-guide/traffic-analyzer-management#39d1693bce6yp)
     * [Add a data source](https://www.alibabacloud.com/help/en/nis/user-guide/data-source-management#73845748bfstv)
     * Supported analysis scenarios:
     * - All VPC network traffic analysis
     * - Internet VPC network traffic analysis
     * - All TR network traffic analysis
     * - Internet Shared Bandwidth metric analysis
     * ## All VPC flow log analysis.
     * ### Request parameters
     * | Name              | Type     | Required | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | Example                                     | Valid values                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     * |-------------------|----------|------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
     * | RegionNo          | string   | Yes   | The region where the resource resides.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | cn-shanghai                              | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | TrafficAnalyzerId | string   | Yes   | The traffic analyzer ID.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | nta-262****ca07f                         | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | TrafficScenario   | string   | Yes   | The supported analysis scenario:
     * ● All VPC flow log analysis                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Fixed value: VpcFlowLogAll                    | VpcFlowLogAll                                                                                                                                                                                                                                                                                                                                                                                                                                         |
     * | Direction         | string   | Yes   | The network traffic direction based on Alibaba Cloud resources. ● In: Traffic flowing into the elastic network interface (ENI).
     * ● Out: Traffic flowing out of the elastic network interface (ENI).                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | In                         |  - In
     * - Out                                                                                                                                                                                                                                                                                                                                                                                                                                            |
     * | TupleDimension    | string   | Yes   | The traffic storage aggregation dimension.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Tuple1                 | - Tuple1
     * - Tuple2
     * - Tuple5                                                                                                                                                                                                                                                                                                                                                                                                                              |
     * | GroupBy           | array    | No   | Specifies multiple traffic dimensions for aggregation and sorting.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |  | -                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
     * |                   | string   | No   | Based on the TupleDimension field, you can specify the following aggregation dimensions:
     * ● When TupleDimension = Tuple1:
     * 　■  VpcId: VPC ID
     * 　■  VSwitchId: vSwitch ID
     * 　■  NetworkInterfaceId: elastic network interfaces (ENIs) ID
     * 　■  EcsId: ECS instance ID
     * 　■  CloudIp: Cloud IP
     * ● When TupleDimension = Tuple2:
     * 　■ VpcId: VPC ID
     * 　■ VSwitchId: vSwitch ID
     * 　■ NetworkInterfaceId: elastic network interfaces (ENIs) ID
     * 　■ EcsId: ECS instance ID
     * 　■ SourceIp: Source IP
     * 　■ DestinationIp: Destination IP
     * 　■ TrafficPath: Traffic path
     * ● When TupleDimension = Tuple5:
     * 　■ VpcId: VPC ID
     * 　■ VSwitchId: vSwitch ID
     * 　■ NetworkInterfaceId: elastic network interfaces (ENIs) ID
     * 　■ EcsId: ECS instance ID
     * 　■ SourceIp: Source IP
     * 　■ DestinationIp: Destination IP
     * 　■ TrafficPath: Traffic path
     * 　■ SourcePort: Source port
     * 　■ DestinationPort: Destination port
     * 　■ Protocol: Network protocol | ["VpcId"]                                | - VpcId
     * - VSwitchId
     * - CloudIp
     * - SourceIp
     * - DestinationIp
     * - Protocol
     * - SourcePort
     * - DestinationPort
     * - TrafficPath
     * - Country
     * - Province
     * - City
     * - Isp
     * - Asn                                                                                                                                                                                                                                          |
     * | OrderBy           | string   | Yes   | Based on the TrafficScenario field, the following traffic metrics are supported for sorting:
     * TrafficScenario = VpcFlowLogAll / VpcFlowLogInternet (VPC flow log scenario):
     * ● Bytes: Bandwidth
     * ● Packets: Packet count
     * ● RoundTripTime: TCP RTT                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Bytes                                    | - Bytes
     * - Packets
     * - RoundTripTime                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | Filter            | array    | No   | Specifies additional filter conditions for focused traffic analysis.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |                                          | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * |                   | object   | No   | The filter condition for traffic, a Key-Value-Operator object.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |                                          | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | key               | string   | No   | The supported filter condition label keys are as follows:
     * - When `TupleDimension` is 1-tuple:
     * 　- `FlowAction`: The action type executed on traffic after matching the corresponding rule or policy (**required**, the corresponding value does not support multiple selections)
     * 　- `VpcId`: VPC ID (the corresponding value supports multiple selections)
     * 　- `VSwitchId`: vSwitch ID (the corresponding value supports multiple selections)
     * 　- `NetworkInterfaceId`: elastic network interfaces (ENIs) ID (the corresponding value supports multiple selections)
     * 　- `EcsId`: ECS instance ID (the corresponding value supports multiple selections)
     * 　- `CloudIp`: Cloud IP (the corresponding value supports multiple selections)
     * - When `TupleDimension` is 2-tuple:
     * 　- `FlowAction`: The action type executed on traffic after matching the corresponding rule or policy (**required**, the corresponding value does not support multiple selections)
     * 　- `VpcId`: VPC ID (the corresponding value supports multiple selections)
     * 　- `VSwitchId`: vSwitch ID (the corresponding value supports multiple selections)
     * 　- `NetworkInterfaceId`: elastic network interfaces (ENIs) ID (the corresponding value supports multiple selections)
     * 　- `EcsId`: ECS instance ID (the corresponding value supports multiple selections)
     * 　- `SourceIp`: Source IP (the corresponding value supports multiple selections)
     * 　- `DestinationIp`: Destination IP (the corresponding value supports multiple selections)
     * 　- `TrafficPath`: Traffic path (the corresponding value supports multiple selections)
     * - When `TupleDimension` is 5-tuple:
     * 　- `FlowAction`: The action type executed on traffic after matching the corresponding rule or policy (**required**, the corresponding value does not support multiple selections)
     * 　- `VpcId`: VPC ID (the corresponding value supports multiple selections)
     * 　- `VSwitchId`: vSwitch ID (the corresponding value supports multiple selections)
     * 　- `NetworkInterfaceId`: elastic network interfaces (ENIs) ID (the corresponding value supports multiple selections)
     * 　- `EcsId`: ECS instance ID (the corresponding value supports multiple selections)
     * 　- `SourceIp`: Source IP
     * 　- `DestinationIp`: Destination IP
     * 　- `TrafficPath`: Traffic path (the corresponding value supports multiple selections)
     * 　- `SourcePort`: Source port (the corresponding value supports multiple selections)
     * 　- `DestinationPort`: Destination port (the corresponding value supports multiple selections)
     * 　- `Protocol`: Network protocol (the corresponding value supports multiple selections)
     * - In VPC scenarios, you can also filter by traffic metrics:
     * 　- `MinBytes`: The minimum traffic volume for sorting, in bytes (the corresponding value does not support multiple selections)
     * 　- `MaxBytes`: The maximum traffic volume for sorting, in bytes (the corresponding value does not support multiple selections)
     * 　- `MinRoundTripTime`: The minimum RTT for sorting, in ms (the corresponding value does not support multiple selections)
     * 　- `MaxRoundTripTime`: The maximum RTT for sorting, in ms (the corresponding value does not support multiple selections)
     * 　- `MinPackages`: The minimum packet count for sorting (the corresponding value does not support multiple selections)
     * 　- `MaxPackages`: The maximum packet count for sorting (the corresponding value does not support multiple selections) | FlowAction                               | - FlowAction
     * - VpcId
     * - VSwitchId
     * - NetworkInterfaceId
     * - CloudIp
     * - DestinationIp
     * - SourceIp
     * - EcsId
     * - TrafficPath
     * - SourcePort
     * - DestinationPort
     * - Protocol
     * - MinBytes
     * - MaxBytes
     * - MinRoundTripTime
     * - MaxRoundTripTime
     * - MinPackages
     * - MaxPackages                                                                                                                |
     * | value             | array    | No   | The filter condition values.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |                                          | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * |                   | string   | No   | The filter value corresponding to the specified key type.
     * When the key is `FlowAction`, the valid values are:
     * 　- `ACCEPT` (default: `Accept`): Traffic allowed by security groups and network ACLs
     * 　- `REJECT`: Traffic denied by security groups and network ACLs                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Accept                                   | When the key is FlowAction: ACCEPT / REJECT                                                                                                                                                                                                                                                                                                                                                              |
     * | Operator          | string   | No   | For specified key types, some support operators for character string matching on the passed value. The supported values are as follows (default: in):
     * ● in: Equals
     * ● not in: Not equals
     * ● like: Contains
     * Based on the TupleDimension and TrafficScenario fields, the support for `like` is as follows:
     * TrafficScenario = VpcFlowLogAll / VpcFlowLogInternet (VPC flow log scenario):
     * The following keys support `like`:
     * 　○ CloudIp
     * 　○ SourceIp
     * 　○ DestinationIp
     * All other keys support only `in` and `not in` operators.                                                                                                                                                                                                                                                                                                                                                                                                                           | in                                       | - not in
     * - in
     * - like                                                                                                                                                                                                                                                                                                                                                                                                                                   |
     * | BeginTime         | long     | Yes   | The start time of the query as a millisecond UNIX timestamp.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | 1638239092000                            | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | EndTime           | long     | Yes   | The end time of the query as a millisecond UNIX timestamp.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | 1684373700099                            | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | Sort              | string   | No   | The sorting order for traffic analysis:
     * ● ASC: Ascending order.
     * ● DESC: Descending order.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Desc                                     | - Desc
     * - Asc                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     * | TopN              | integer  | No   | The number of entries to return for the traffic sorting query.
     * You can specify a custom number. If this field is not specified, all traffic data that meets the specified conditions is sorted and analyzed within the performance limits of traffic analysis data.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | 10                                       | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | Language          | string   | No   | The language. Valid values: zh-CN, en-US.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | zh-CN                                    | - zh-CN
     * - en-US                                                                                                                                                                                                                                                                                                                                                                                                                                        |
     * | NextToken         | string   | No   | The pagination token. Leave this parameter empty for the first query or when no more results are available. If more results exist, set this to the NextToken value returned by the previous API call.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | MaxResults        | integer  | No   | The page size. Valid values: 1 to 100. Default value: 20.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | 20                                       |                                                                                                                                                                                                                                                                                                                                                                                                                                         |
     * | StorageInterval   | integer  | No   | The storage bucket granularity property.
     * The storage bucket granularity specifies the storage aggregation period for the query. Two granularity levels are supported: high-precision (such as 1 minute) and long-period (such as 1 day). The specific granularity is determined by the traffic analysis sampling interval configured for high-precision or long-period traffic statistics when creating or editing the traffic analyzer.
     * - The supported storage granularity values for the traffic analyzer tuple are:
     * 　- `1`: In minutes (1 minute)
     * 　- `10`: In minutes (10 minutes)
     * 　- `60`: In minutes (60 minutes, i.e., 1 hour)
     * 　- `1440`: In minutes (1440 minutes, i.e., 1 day)
     * - The storage bucket granularity serves two typical purposes:
     * 　- High-precision traffic statistics: such as 1-minute, 10-minute, or 60-minute aggregation
     * 　- Long-period traffic statistics: such as 1440-minute (1-day) aggregation
     * - Specify this field during the query to select the storage aggregation period. For example:
     * 　- Pass `10`: Query short-period data aggregated at 10-minute granularity
     * 　- Pass `1440`: Query long-period data aggregated at 1-day granularity | 10                                       | - 1
     * - 10
     * - 60
     * - 1440                                                                                                                                                                                                                                                                                                                                                                                                                                   |
     * ### Response elements
     * | Name                | Type   | Description                                                                                       | Example value                    | Valid values |
     * |---------------------|--------|--------------------------------------------------------------------------------------------|---------------------------|--------|
     * |       | object | RpcResponse <ArrayList>                                                                    |                           | -      |
     * | RequestId           | string | The request ID.                                                                                   | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941 | -      |
     * | NisTrafficRankingId | string | The result ID of this traffic ranking analysis. Call the DescribeNisTrafficRanking operation to obtain the final analysis results.    | task-6462a7b4c4a54b****   | -      |
     * ## Internet VPC flow log analysis.
     * ### Request parameters
     * | Name              | Type    | Required | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  | Example                                     | Valid values                                                                                                                                                                                                                                                                                                           |
     * |-------------------|---------|------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|------------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
     * | RegionNo          | string  | Yes   | The region where the resource resides.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      | cn-shanghai                              | -                                                                                                                                                                                                                                                                                                                |
     * | TrafficAnalyzerId | string  | Yes   | The traffic analyzer ID.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | nta-262****ca07f                         | -                                                                                                                                                                                                                                                                                                                |
     * | TrafficScenario   | string  | Yes   | The supported analysis scenario:
     * ● Internet VPC flow log analysis                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | Fixed value: VpcFlowLogInternet              | VpcFlowLogInternet                                                                                                                                                                                                                                                                                               |
     * | Direction         | string  | Yes   | The network traffic direction based on Alibaba Cloud resources. ● In: Traffic flowing into the elastic network interfaces (ENIs).
     * ● Out: Traffic flowing out of the elastic network interfaces (ENIs).                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      | In                                       | - In
     * - Out                                                                                                                                                                                                                                                                                                      |
     * | TupleDimension    | string  | Yes   | The traffic storage aggregation dimension.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  | Tuple1                                   | - Tuple1
     * - Tuple2
     * - Tuple5                                                                                                                                                                                                                                                                                    |
     * | GroupBy           | array   | No   | Specifies multiple traffic dimensions for aggregation and sorting.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |                                          | -                                                                                                                                                                                                                                                                                                                |
     * |                   | string  | No   | Based on the TupleDimension field, you can specify the following aggregation dimensions:
     * ● When TupleDimension = Tuple1:
     * 　■ VpcId: VPC ID
     * 　■ VSwitchId: vSwitch ID
     * 　■ NetworkInterfaceId: elastic network interfaces (ENIs) ID
     * 　■ EcsId: ECS instance ID
     * 　■ CloudIp: Cloud IP
     * ● When TupleDimension = Tuple2:
     * 　■ VpcId: VPC ID
     * 　■ VSwitchId: vSwitch ID
     * 　■ NetworkInterfaceId: elastic network interfaces (ENIs) ID
     * 　■ EcsId: ECS instance ID
     * 　■ SourceIp: Source IP
     * 　■ DestinationIp: Destination IP
     * 　■ TrafficPath: Traffic path
     * 　■ `Country`: Client country
     * 　■ `Province`: Client province
     * 　■ `City`: Client city
     * 　■ `Isp`: Internet service provider
     * 　■ `Asn`: Autonomous system number
     * ● When TupleDimension = Tuple5:
     * 　■ VpcId: VPC ID
     * 　■ VSwitchId: vSwitch ID
     * 　■ NetworkInterfaceId: elastic network interfaces (ENIs) ID
     * 　■ EcsId: ECS instance ID
     * 　■ SourceIp: Source IP
     * 　■ DestinationIp: Destination IP
     * 　■ TrafficPath: Traffic path
     * 　■ SourcePort: Source port
     * 　■ DestinationPort: Destination port
     * 　■ Protocol: Network protocol
     * 　■ Country: Client country
     * 　■ Province: Client province
     * 　■ City: Client city
     * 　■ Isp: Internet service provider
     * 　■ Asn: Autonomous system number | ["VpcId"]                                | - VpcId
     * - VSwitchId
     * - CloudIp
     * - SourceIp
     * - DestinationIp
     * - Protocol
     * - SourcePort
     * - DestinationPort
     * - TrafficPath
     * - Country
     * - Province
     * - City
     * - Isp
     * - Asn                                                                                         |
     * | OrderBy           | string  | Yes   | The following traffic metrics are supported for sorting: Bytes, Packets, RoundTripTime.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | Bytes                                    | - Bytes
     * - Packets
     * - RoundTripTime                                                                                                                                                                                                                                                                         |
     * | Filter            | array   | No   | Specifies additional filter conditions for focused traffic analysis.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |                                          | -                                                                                                                                                                                                                                                                                                                |
     * |                   | object  | No   | The filter condition for traffic, a Key-Value-Operator object.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |                                          | -                                                                                                                                                                                                                                                                                                                |
     * | key               | string  | No   | The supported filter condition label keys are as follows:
     * - When `TupleDimension` is 1-tuple:
     * 　- `FlowAction`: The action type executed on traffic after matching the corresponding rule or policy (required, the corresponding value does not support multiple selections)
     * 　- `VpcId`: VPC ID (the corresponding value supports multiple selections)
     * 　- `VSwitchId`: vSwitch ID (the corresponding value supports multiple selections)
     * 　- `NetworkInterfaceId`: elastic network interfaces (ENIs) ID (the corresponding value supports multiple selections)
     * 　- `EcsId`: ECS instance ID (the corresponding value supports multiple selections)
     * 　- `CloudIp`: Cloud IP (the corresponding value supports multiple selections)
     * - When `TupleDimension` is 2-tuple:
     * 　- `FlowAction`: The action type executed on traffic after matching the corresponding rule or policy (required, the corresponding value does not support multiple selections)
     * 　- `VpcId`: VPC ID (the corresponding value supports multiple selections)
     * 　- `VSwitchId`: vSwitch ID (the corresponding value supports multiple selections)
     * 　- `NetworkInterfaceId`: elastic network interfaces (ENIs) ID (the corresponding value supports multiple selections)
     * 　- `EcsId`: ECS instance ID (the corresponding value supports multiple selections)
     * 　- `SourceIp`: Source IP (the corresponding value supports multiple selections)
     * 　- `DestinationIp`: Destination IP (the corresponding value supports multiple selections)
     * 　- `TrafficPath`: Traffic path (the corresponding value supports multiple selections)
     * 　- `ClientCountry`: Filter traffic analysis scope by country (the corresponding value supports multiple selections)
     * 　- `ClientCity`: Filter traffic analysis scope by city (the corresponding value supports multiple selections)
     * 　- `ClientAsn`: Filter traffic analysis scope by ASN (the corresponding value supports multiple selections)
     * 　- `ClientIsp`: Filter traffic analysis scope by client ISP (the corresponding value supports multiple selections)
     * - When `TupleDimension` is 5-tuple:
     * 　- `FlowAction`: The action type executed on traffic after matching the corresponding rule or policy (required, the corresponding value does not support multiple selections)
     * 　- `VpcId`: VPC ID (the corresponding value supports multiple selections)
     * 　- `VSwitchId`: vSwitch ID (the corresponding value supports multiple selections)
     * 　- `NetworkInterfaceId`: elastic network interfaces (ENIs) ID (the corresponding value supports multiple selections)
     * 　- `EcsId`: ECS instance ID (the corresponding value supports multiple selections)
     * 　- `SourceIp`: Source IP
     * 　- `DestinationIp`: Destination IP
     * 　- `TrafficPath`: Traffic path (the corresponding value supports multiple selections)
     * 　- `SourcePort`: Source port (the corresponding value supports multiple selections)
     * 　- `DestinationPort`: Destination port (the corresponding value supports multiple selections)
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
     * Triggers the NIS traffic analyzer to execute a traffic sorting task within a specified scope.
     *
     * @remarks
     * [Before using this operation, make sure that you fully understand the billing method and pricing of the NIS traffic analyzer.](https://www.alibabacloud.com/help/en/nis/product-overview/billing-method-new-version)
     * Before using this operation, create a traffic analyzer and add a data source.
     * [Create a traffic analyzer](https://www.alibabacloud.com/help/en/nis/user-guide/traffic-analyzer-management#39d1693bce6yp)
     * [Add a data source](https://www.alibabacloud.com/help/en/nis/user-guide/data-source-management#73845748bfstv)
     * Supported analysis scenarios:
     * - All VPC network traffic analysis
     * - Internet VPC network traffic analysis
     * - All TR network traffic analysis
     * - Internet Shared Bandwidth metric analysis
     * ## All VPC flow log analysis.
     * ### Request parameters
     * | Name              | Type     | Required | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | Example                                     | Valid values                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     * |-------------------|----------|------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
     * | RegionNo          | string   | Yes   | The region where the resource resides.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | cn-shanghai                              | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | TrafficAnalyzerId | string   | Yes   | The traffic analyzer ID.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | nta-262****ca07f                         | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | TrafficScenario   | string   | Yes   | The supported analysis scenario:
     * ● All VPC flow log analysis                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Fixed value: VpcFlowLogAll                    | VpcFlowLogAll                                                                                                                                                                                                                                                                                                                                                                                                                                         |
     * | Direction         | string   | Yes   | The network traffic direction based on Alibaba Cloud resources. ● In: Traffic flowing into the elastic network interface (ENI).
     * ● Out: Traffic flowing out of the elastic network interface (ENI).                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | In                         |  - In
     * - Out                                                                                                                                                                                                                                                                                                                                                                                                                                            |
     * | TupleDimension    | string   | Yes   | The traffic storage aggregation dimension.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Tuple1                 | - Tuple1
     * - Tuple2
     * - Tuple5                                                                                                                                                                                                                                                                                                                                                                                                                              |
     * | GroupBy           | array    | No   | Specifies multiple traffic dimensions for aggregation and sorting.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |  | -                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
     * |                   | string   | No   | Based on the TupleDimension field, you can specify the following aggregation dimensions:
     * ● When TupleDimension = Tuple1:
     * 　■  VpcId: VPC ID
     * 　■  VSwitchId: vSwitch ID
     * 　■  NetworkInterfaceId: elastic network interfaces (ENIs) ID
     * 　■  EcsId: ECS instance ID
     * 　■  CloudIp: Cloud IP
     * ● When TupleDimension = Tuple2:
     * 　■ VpcId: VPC ID
     * 　■ VSwitchId: vSwitch ID
     * 　■ NetworkInterfaceId: elastic network interfaces (ENIs) ID
     * 　■ EcsId: ECS instance ID
     * 　■ SourceIp: Source IP
     * 　■ DestinationIp: Destination IP
     * 　■ TrafficPath: Traffic path
     * ● When TupleDimension = Tuple5:
     * 　■ VpcId: VPC ID
     * 　■ VSwitchId: vSwitch ID
     * 　■ NetworkInterfaceId: elastic network interfaces (ENIs) ID
     * 　■ EcsId: ECS instance ID
     * 　■ SourceIp: Source IP
     * 　■ DestinationIp: Destination IP
     * 　■ TrafficPath: Traffic path
     * 　■ SourcePort: Source port
     * 　■ DestinationPort: Destination port
     * 　■ Protocol: Network protocol | ["VpcId"]                                | - VpcId
     * - VSwitchId
     * - CloudIp
     * - SourceIp
     * - DestinationIp
     * - Protocol
     * - SourcePort
     * - DestinationPort
     * - TrafficPath
     * - Country
     * - Province
     * - City
     * - Isp
     * - Asn                                                                                                                                                                                                                                          |
     * | OrderBy           | string   | Yes   | Based on the TrafficScenario field, the following traffic metrics are supported for sorting:
     * TrafficScenario = VpcFlowLogAll / VpcFlowLogInternet (VPC flow log scenario):
     * ● Bytes: Bandwidth
     * ● Packets: Packet count
     * ● RoundTripTime: TCP RTT                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Bytes                                    | - Bytes
     * - Packets
     * - RoundTripTime                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | Filter            | array    | No   | Specifies additional filter conditions for focused traffic analysis.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |                                          | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * |                   | object   | No   | The filter condition for traffic, a Key-Value-Operator object.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |                                          | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | key               | string   | No   | The supported filter condition label keys are as follows:
     * - When `TupleDimension` is 1-tuple:
     * 　- `FlowAction`: The action type executed on traffic after matching the corresponding rule or policy (**required**, the corresponding value does not support multiple selections)
     * 　- `VpcId`: VPC ID (the corresponding value supports multiple selections)
     * 　- `VSwitchId`: vSwitch ID (the corresponding value supports multiple selections)
     * 　- `NetworkInterfaceId`: elastic network interfaces (ENIs) ID (the corresponding value supports multiple selections)
     * 　- `EcsId`: ECS instance ID (the corresponding value supports multiple selections)
     * 　- `CloudIp`: Cloud IP (the corresponding value supports multiple selections)
     * - When `TupleDimension` is 2-tuple:
     * 　- `FlowAction`: The action type executed on traffic after matching the corresponding rule or policy (**required**, the corresponding value does not support multiple selections)
     * 　- `VpcId`: VPC ID (the corresponding value supports multiple selections)
     * 　- `VSwitchId`: vSwitch ID (the corresponding value supports multiple selections)
     * 　- `NetworkInterfaceId`: elastic network interfaces (ENIs) ID (the corresponding value supports multiple selections)
     * 　- `EcsId`: ECS instance ID (the corresponding value supports multiple selections)
     * 　- `SourceIp`: Source IP (the corresponding value supports multiple selections)
     * 　- `DestinationIp`: Destination IP (the corresponding value supports multiple selections)
     * 　- `TrafficPath`: Traffic path (the corresponding value supports multiple selections)
     * - When `TupleDimension` is 5-tuple:
     * 　- `FlowAction`: The action type executed on traffic after matching the corresponding rule or policy (**required**, the corresponding value does not support multiple selections)
     * 　- `VpcId`: VPC ID (the corresponding value supports multiple selections)
     * 　- `VSwitchId`: vSwitch ID (the corresponding value supports multiple selections)
     * 　- `NetworkInterfaceId`: elastic network interfaces (ENIs) ID (the corresponding value supports multiple selections)
     * 　- `EcsId`: ECS instance ID (the corresponding value supports multiple selections)
     * 　- `SourceIp`: Source IP
     * 　- `DestinationIp`: Destination IP
     * 　- `TrafficPath`: Traffic path (the corresponding value supports multiple selections)
     * 　- `SourcePort`: Source port (the corresponding value supports multiple selections)
     * 　- `DestinationPort`: Destination port (the corresponding value supports multiple selections)
     * 　- `Protocol`: Network protocol (the corresponding value supports multiple selections)
     * - In VPC scenarios, you can also filter by traffic metrics:
     * 　- `MinBytes`: The minimum traffic volume for sorting, in bytes (the corresponding value does not support multiple selections)
     * 　- `MaxBytes`: The maximum traffic volume for sorting, in bytes (the corresponding value does not support multiple selections)
     * 　- `MinRoundTripTime`: The minimum RTT for sorting, in ms (the corresponding value does not support multiple selections)
     * 　- `MaxRoundTripTime`: The maximum RTT for sorting, in ms (the corresponding value does not support multiple selections)
     * 　- `MinPackages`: The minimum packet count for sorting (the corresponding value does not support multiple selections)
     * 　- `MaxPackages`: The maximum packet count for sorting (the corresponding value does not support multiple selections) | FlowAction                               | - FlowAction
     * - VpcId
     * - VSwitchId
     * - NetworkInterfaceId
     * - CloudIp
     * - DestinationIp
     * - SourceIp
     * - EcsId
     * - TrafficPath
     * - SourcePort
     * - DestinationPort
     * - Protocol
     * - MinBytes
     * - MaxBytes
     * - MinRoundTripTime
     * - MaxRoundTripTime
     * - MinPackages
     * - MaxPackages                                                                                                                |
     * | value             | array    | No   | The filter condition values.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |                                          | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * |                   | string   | No   | The filter value corresponding to the specified key type.
     * When the key is `FlowAction`, the valid values are:
     * 　- `ACCEPT` (default: `Accept`): Traffic allowed by security groups and network ACLs
     * 　- `REJECT`: Traffic denied by security groups and network ACLs                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Accept                                   | When the key is FlowAction: ACCEPT / REJECT                                                                                                                                                                                                                                                                                                                                                              |
     * | Operator          | string   | No   | For specified key types, some support operators for character string matching on the passed value. The supported values are as follows (default: in):
     * ● in: Equals
     * ● not in: Not equals
     * ● like: Contains
     * Based on the TupleDimension and TrafficScenario fields, the support for `like` is as follows:
     * TrafficScenario = VpcFlowLogAll / VpcFlowLogInternet (VPC flow log scenario):
     * The following keys support `like`:
     * 　○ CloudIp
     * 　○ SourceIp
     * 　○ DestinationIp
     * All other keys support only `in` and `not in` operators.                                                                                                                                                                                                                                                                                                                                                                                                                           | in                                       | - not in
     * - in
     * - like                                                                                                                                                                                                                                                                                                                                                                                                                                   |
     * | BeginTime         | long     | Yes   | The start time of the query as a millisecond UNIX timestamp.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | 1638239092000                            | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | EndTime           | long     | Yes   | The end time of the query as a millisecond UNIX timestamp.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | 1684373700099                            | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | Sort              | string   | No   | The sorting order for traffic analysis:
     * ● ASC: Ascending order.
     * ● DESC: Descending order.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Desc                                     | - Desc
     * - Asc                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     * | TopN              | integer  | No   | The number of entries to return for the traffic sorting query.
     * You can specify a custom number. If this field is not specified, all traffic data that meets the specified conditions is sorted and analyzed within the performance limits of traffic analysis data.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | 10                                       | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | Language          | string   | No   | The language. Valid values: zh-CN, en-US.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | zh-CN                                    | - zh-CN
     * - en-US                                                                                                                                                                                                                                                                                                                                                                                                                                        |
     * | NextToken         | string   | No   | The pagination token. Leave this parameter empty for the first query or when no more results are available. If more results exist, set this to the NextToken value returned by the previous API call.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | 2A07PfBPlzmmNi/75Qca9SK73UfY48/+WBiREjfVfXqMQxtV8XckOg5lk7F2bhC+ | -                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     * | MaxResults        | integer  | No   | The page size. Valid values: 1 to 100. Default value: 20.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | 20                                       |                                                                                                                                                                                                                                                                                                                                                                                                                                         |
     * | StorageInterval   | integer  | No   | The storage bucket granularity property.
     * The storage bucket granularity specifies the storage aggregation period for the query. Two granularity levels are supported: high-precision (such as 1 minute) and long-period (such as 1 day). The specific granularity is determined by the traffic analysis sampling interval configured for high-precision or long-period traffic statistics when creating or editing the traffic analyzer.
     * - The supported storage granularity values for the traffic analyzer tuple are:
     * 　- `1`: In minutes (1 minute)
     * 　- `10`: In minutes (10 minutes)
     * 　- `60`: In minutes (60 minutes, i.e., 1 hour)
     * 　- `1440`: In minutes (1440 minutes, i.e., 1 day)
     * - The storage bucket granularity serves two typical purposes:
     * 　- High-precision traffic statistics: such as 1-minute, 10-minute, or 60-minute aggregation
     * 　- Long-period traffic statistics: such as 1440-minute (1-day) aggregation
     * - Specify this field during the query to select the storage aggregation period. For example:
     * 　- Pass `10`: Query short-period data aggregated at 10-minute granularity
     * 　- Pass `1440`: Query long-period data aggregated at 1-day granularity | 10                                       | - 1
     * - 10
     * - 60
     * - 1440                                                                                                                                                                                                                                                                                                                                                                                                                                   |
     * ### Response elements
     * | Name                | Type   | Description                                                                                       | Example value                    | Valid values |
     * |---------------------|--------|--------------------------------------------------------------------------------------------|---------------------------|--------|
     * |       | object | RpcResponse <ArrayList>                                                                    |                           | -      |
     * | RequestId           | string | The request ID.                                                                                   | 4DAC4BE1-BEEA-5D84-BE06-E1B796F3B941 | -      |
     * | NisTrafficRankingId | string | The result ID of this traffic ranking analysis. Call the DescribeNisTrafficRanking operation to obtain the final analysis results.    | task-6462a7b4c4a54b****   | -      |
     * ## Internet VPC flow log analysis.
     * ### Request parameters
     * | Name              | Type    | Required | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  | Example                                     | Valid values                                                                                                                                                                                                                                                                                                           |
     * |-------------------|---------|------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|------------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
     * | RegionNo          | string  | Yes   | The region where the resource resides.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      | cn-shanghai                              | -                                                                                                                                                                                                                                                                                                                |
     * | TrafficAnalyzerId | string  | Yes   | The traffic analyzer ID.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | nta-262****ca07f                         | -                                                                                                                                                                                                                                                                                                                |
     * | TrafficScenario   | string  | Yes   | The supported analysis scenario:
     * ● Internet VPC flow log analysis                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | Fixed value: VpcFlowLogInternet              | VpcFlowLogInternet                                                                                                                                                                                                                                                                                               |
     * | Direction         | string  | Yes   | The network traffic direction based on Alibaba Cloud resources. ● In: Traffic flowing into the elastic network interfaces (ENIs).
     * ● Out: Traffic flowing out of the elastic network interfaces (ENIs).                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      | In                                       | - In
     * - Out                                                                                                                                                                                                                                                                                                      |
     * | TupleDimension    | string  | Yes   | The traffic storage aggregation dimension.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  | Tuple1                                   | - Tuple1
     * - Tuple2
     * - Tuple5                                                                                                                                                                                                                                                                                    |
     * | GroupBy           | array   | No   | Specifies multiple traffic dimensions for aggregation and sorting.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |                                          | -                                                                                                                                                                                                                                                                                                                |
     * |                   | string  | No   | Based on the TupleDimension field, you can specify the following aggregation dimensions:
     * ● When TupleDimension = Tuple1:
     * 　■ VpcId: VPC ID
     * 　■ VSwitchId: vSwitch ID
     * 　■ NetworkInterfaceId: elastic network interfaces (ENIs) ID
     * 　■ EcsId: ECS instance ID
     * 　■ CloudIp: Cloud IP
     * ● When TupleDimension = Tuple2:
     * 　■ VpcId: VPC ID
     * 　■ VSwitchId: vSwitch ID
     * 　■ NetworkInterfaceId: elastic network interfaces (ENIs) ID
     * 　■ EcsId: ECS instance ID
     * 　■ SourceIp: Source IP
     * 　■ DestinationIp: Destination IP
     * 　■ TrafficPath: Traffic path
     * 　■ `Country`: Client country
     * 　■ `Province`: Client province
     * 　■ `City`: Client city
     * 　■ `Isp`: Internet service provider
     * 　■ `Asn`: Autonomous system number
     * ● When TupleDimension = Tuple5:
     * 　■ VpcId: VPC ID
     * 　■ VSwitchId: vSwitch ID
     * 　■ NetworkInterfaceId: elastic network interfaces (ENIs) ID
     * 　■ EcsId: ECS instance ID
     * 　■ SourceIp: Source IP
     * 　■ DestinationIp: Destination IP
     * 　■ TrafficPath: Traffic path
     * 　■ SourcePort: Source port
     * 　■ DestinationPort: Destination port
     * 　■ Protocol: Network protocol
     * 　■ Country: Client country
     * 　■ Province: Client province
     * 　■ City: Client city
     * 　■ Isp: Internet service provider
     * 　■ Asn: Autonomous system number | ["VpcId"]                                | - VpcId
     * - VSwitchId
     * - CloudIp
     * - SourceIp
     * - DestinationIp
     * - Protocol
     * - SourcePort
     * - DestinationPort
     * - TrafficPath
     * - Country
     * - Province
     * - City
     * - Isp
     * - Asn                                                                                         |
     * | OrderBy           | string  | Yes   | The following traffic metrics are supported for sorting: Bytes, Packets, RoundTripTime.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | Bytes                                    | - Bytes
     * - Packets
     * - RoundTripTime                                                                                                                                                                                                                                                                         |
     * | Filter            | array   | No   | Specifies additional filter conditions for focused traffic analysis.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |                                          | -                                                                                                                                                                                                                                                                                                                |
     * |                   | object  | No   | The filter condition for traffic, a Key-Value-Operator object.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |                                          | -                                                                                                                                                                                                                                                                                                                |
     * | key               | string  | No   | The supported filter condition label keys are as follows:
     * - When `TupleDimension` is 1-tuple:
     * 　- `FlowAction`: The action type executed on traffic after matching the corresponding rule or policy (required, the corresponding value does not support multiple selections)
     * 　- `VpcId`: VPC ID (the corresponding value supports multiple selections)
     * 　- `VSwitchId`: vSwitch ID (the corresponding value supports multiple selections)
     * 　- `NetworkInterfaceId`: elastic network interfaces (ENIs) ID (the corresponding value supports multiple selections)
     * 　- `EcsId`: ECS instance ID (the corresponding value supports multiple selections)
     * 　- `CloudIp`: Cloud IP (the corresponding value supports multiple selections)
     * - When `TupleDimension` is 2-tuple:
     * 　- `FlowAction`: The action type executed on traffic after matching the corresponding rule or policy (required, the corresponding value does not support multiple selections)
     * 　- `VpcId`: VPC ID (the corresponding value supports multiple selections)
     * 　- `VSwitchId`: vSwitch ID (the corresponding value supports multiple selections)
     * 　- `NetworkInterfaceId`: elastic network interfaces (ENIs) ID (the corresponding value supports multiple selections)
     * 　- `EcsId`: ECS instance ID (the corresponding value supports multiple selections)
     * 　- `SourceIp`: Source IP (the corresponding value supports multiple selections)
     * 　- `DestinationIp`: Destination IP (the corresponding value supports multiple selections)
     * 　- `TrafficPath`: Traffic path (the corresponding value supports multiple selections)
     * 　- `ClientCountry`: Filter traffic analysis scope by country (the corresponding value supports multiple selections)
     * 　- `ClientCity`: Filter traffic analysis scope by city (the corresponding value supports multiple selections)
     * 　- `ClientAsn`: Filter traffic analysis scope by ASN (the corresponding value supports multiple selections)
     * 　- `ClientIsp`: Filter traffic analysis scope by client ISP (the corresponding value supports multiple selections)
     * - When `TupleDimension` is 5-tuple:
     * 　- `FlowAction`: The action type executed on traffic after matching the corresponding rule or policy (required, the corresponding value does not support multiple selections)
     * 　- `VpcId`: VPC ID (the corresponding value supports multiple selections)
     * 　- `VSwitchId`: vSwitch ID (the corresponding value supports multiple selections)
     * 　- `NetworkInterfaceId`: elastic network interfaces (ENIs) ID (the corresponding value supports multiple selections)
     * 　- `EcsId`: ECS instance ID (the corresponding value supports multiple selections)
     * 　- `SourceIp`: Source IP
     * 　- `DestinationIp`: Destination IP
     * 　- `TrafficPath`: Traffic path (the corresponding value supports multiple selections)
     * 　- `SourcePort`: Source port (the corresponding value supports multiple selections)
     * 　- `DestinationPort`: Destination port (the corresponding value supports multiple selections)
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
     * Updates an inspection task.
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
     * Updates an inspection task.
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
