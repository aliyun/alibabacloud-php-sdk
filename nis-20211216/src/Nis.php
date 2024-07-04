<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Initiates a task for analyzing network reachability.
     *  *
     * @description You can call this operation to initiate a task for analyzing network reachability by specifying only the information about the source and destination. You do not need to create a network path for reachability analysis. The analysis result is not recorded in the system. If you want to record the path parameters and analysis result in the Network Intelligence Service (NIS) console, we recommend that you call the **createNetworkReachableAnalysis** operation.
     *  *
     * @param CreateAndAnalyzeNetworkPathRequest $request CreateAndAnalyzeNetworkPathRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAndAnalyzeNetworkPathResponse CreateAndAnalyzeNetworkPathResponse
     */
    public function createAndAnalyzeNetworkPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAndAnalyzeNetworkPath',
            'version'     => '2021-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAndAnalyzeNetworkPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Initiates a task for analyzing network reachability.
     *  *
     * @description You can call this operation to initiate a task for analyzing network reachability by specifying only the information about the source and destination. You do not need to create a network path for reachability analysis. The analysis result is not recorded in the system. If you want to record the path parameters and analysis result in the Network Intelligence Service (NIS) console, we recommend that you call the **createNetworkReachableAnalysis** operation.
     *  *
     * @param CreateAndAnalyzeNetworkPathRequest $request CreateAndAnalyzeNetworkPathRequest
     *
     * @return CreateAndAnalyzeNetworkPathResponse CreateAndAnalyzeNetworkPathResponse
     */
    public function createAndAnalyzeNetworkPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAndAnalyzeNetworkPathWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a network path in the cloud for reachability analysis.
     *  *
     * @description *   You can call the **CreateNetworkPath** operation to create network paths in multiple networking scenarios and between multiple resources. After a path is created, the path parameters are saved for repeated analysis.
     * *   You can create up to 100 network paths within one Alibaba Cloud account.
     *  *
     * @param CreateNetworkPathRequest $request CreateNetworkPathRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetworkPathResponse CreateNetworkPathResponse
     */
    public function createNetworkPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkPathDescription)) {
            $query['NetworkPathDescription'] = $request->networkPathDescription;
        }
        if (!Utils::isUnset($request->networkPathName)) {
            $query['NetworkPathName'] = $request->networkPathName;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceIpAddress)) {
            $query['SourceIpAddress'] = $request->sourceIpAddress;
        }
        if (!Utils::isUnset($request->sourcePort)) {
            $query['SourcePort'] = $request->sourcePort;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetIpAddress)) {
            $query['TargetIpAddress'] = $request->targetIpAddress;
        }
        if (!Utils::isUnset($request->targetPort)) {
            $query['TargetPort'] = $request->targetPort;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetworkPath',
            'version'     => '2021-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNetworkPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a network path in the cloud for reachability analysis.
     *  *
     * @description *   You can call the **CreateNetworkPath** operation to create network paths in multiple networking scenarios and between multiple resources. After a path is created, the path parameters are saved for repeated analysis.
     * *   You can create up to 100 network paths within one Alibaba Cloud account.
     *  *
     * @param CreateNetworkPathRequest $request CreateNetworkPathRequest
     *
     * @return CreateNetworkPathResponse CreateNetworkPathResponse
     */
    public function createNetworkPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkPathWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a task for analyzing network reachability.
     *  *
     * @description *   The **CreateNetworkReachableAnalysis** operation is used to create a task for analyzing the reachability of the network path that is created by calling the **CreateNetworkPath** operation and record the analysis results.
     * *   The **CreateNetworkReachableAnalysis** operation can be called to repeatedly analyze the reachability of a network path.
     * *   You can create up to 1,000 reachability analysis records within one Alibaba Cloud account.
     *  *
     * @param CreateNetworkReachableAnalysisRequest $request CreateNetworkReachableAnalysisRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetworkReachableAnalysisResponse CreateNetworkReachableAnalysisResponse
     */
    public function createNetworkReachableAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkPathId)) {
            $query['NetworkPathId'] = $request->networkPathId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetworkReachableAnalysis',
            'version'     => '2021-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNetworkReachableAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a task for analyzing network reachability.
     *  *
     * @description *   The **CreateNetworkReachableAnalysis** operation is used to create a task for analyzing the reachability of the network path that is created by calling the **CreateNetworkPath** operation and record the analysis results.
     * *   The **CreateNetworkReachableAnalysis** operation can be called to repeatedly analyze the reachability of a network path.
     * *   You can create up to 1,000 reachability analysis records within one Alibaba Cloud account.
     *  *
     * @param CreateNetworkReachableAnalysisRequest $request CreateNetworkReachableAnalysisRequest
     *
     * @return CreateNetworkReachableAnalysisResponse CreateNetworkReachableAnalysisResponse
     */
    public function createNetworkReachableAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkReachableAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a network path.
     *  *
     * @param DeleteNetworkPathRequest $tmpReq  DeleteNetworkPathRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNetworkPathResponse DeleteNetworkPathResponse
     */
    public function deleteNetworkPathWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteNetworkPathShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->networkPathIds)) {
            $request->networkPathIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->networkPathIds, 'NetworkPathIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->networkPathIdsShrink)) {
            $query['NetworkPathIds'] = $request->networkPathIdsShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetworkPath',
            'version'     => '2021-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNetworkPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a network path.
     *  *
     * @param DeleteNetworkPathRequest $request DeleteNetworkPathRequest
     *
     * @return DeleteNetworkPathResponse DeleteNetworkPathResponse
     */
    public function deleteNetworkPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkPathWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a task for analyzing network reachability.
     *  *
     * @param DeleteNetworkReachableAnalysisRequest $tmpReq  DeleteNetworkReachableAnalysisRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNetworkReachableAnalysisResponse DeleteNetworkReachableAnalysisResponse
     */
    public function deleteNetworkReachableAnalysisWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteNetworkReachableAnalysisShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->networkReachableAnalysisIds)) {
            $request->networkReachableAnalysisIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->networkReachableAnalysisIds, 'NetworkReachableAnalysisIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->networkReachableAnalysisIdsShrink)) {
            $query['NetworkReachableAnalysisIds'] = $request->networkReachableAnalysisIdsShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetworkReachableAnalysis',
            'version'     => '2021-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNetworkReachableAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a task for analyzing network reachability.
     *  *
     * @param DeleteNetworkReachableAnalysisRequest $request DeleteNetworkReachableAnalysisRequest
     *
     * @return DeleteNetworkReachableAnalysisResponse DeleteNetworkReachableAnalysisResponse
     */
    public function deleteNetworkReachableAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkReachableAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the rankings of Internet traffic data in the form of 1-tuple, 2-tuple, or 5-tuple. Internet traffic data can be ranked by metrics such as traffic volumes and the number of packets.
     *  *
     * @param GetInternetTupleRequest $tmpReq  GetInternetTupleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInternetTupleResponse GetInternetTupleResponse
     */
    public function getInternetTupleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetInternetTupleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cloudIpList)) {
            $request->cloudIpListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cloudIpList, 'CloudIpList', 'json');
        }
        if (!Utils::isUnset($tmpReq->instanceList)) {
            $request->instanceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceList, 'InstanceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountIds)) {
            $query['AccountIds'] = $request->accountIds;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->cloudIp)) {
            $query['CloudIp'] = $request->cloudIp;
        }
        if (!Utils::isUnset($request->cloudIpListShrink)) {
            $query['CloudIpList'] = $request->cloudIpListShrink;
        }
        if (!Utils::isUnset($request->cloudIsp)) {
            $query['CloudIsp'] = $request->cloudIsp;
        }
        if (!Utils::isUnset($request->cloudPort)) {
            $query['CloudPort'] = $request->cloudPort;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceListShrink)) {
            $query['InstanceList'] = $request->instanceListShrink;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->otherCity)) {
            $query['OtherCity'] = $request->otherCity;
        }
        if (!Utils::isUnset($request->otherCountry)) {
            $query['OtherCountry'] = $request->otherCountry;
        }
        if (!Utils::isUnset($request->otherIp)) {
            $query['OtherIp'] = $request->otherIp;
        }
        if (!Utils::isUnset($request->otherIsp)) {
            $query['OtherIsp'] = $request->otherIsp;
        }
        if (!Utils::isUnset($request->otherPort)) {
            $query['OtherPort'] = $request->otherPort;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->topN)) {
            $query['TopN'] = $request->topN;
        }
        if (!Utils::isUnset($request->tupleType)) {
            $query['TupleType'] = $request->tupleType;
        }
        if (!Utils::isUnset($request->useMultiAccount)) {
            $query['UseMultiAccount'] = $request->useMultiAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInternetTuple',
            'version'     => '2021-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInternetTupleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the rankings of Internet traffic data in the form of 1-tuple, 2-tuple, or 5-tuple. Internet traffic data can be ranked by metrics such as traffic volumes and the number of packets.
     *  *
     * @param GetInternetTupleRequest $request GetInternetTupleRequest
     *
     * @return GetInternetTupleResponse GetInternetTupleResponse
     */
    public function getInternetTuple($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInternetTupleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the real-time SNAT performance ranking of a NAT gateway.
     *  *
     * @param GetNatTopNRequest $request GetNatTopNRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNatTopNResponse GetNatTopNResponse
     */
    public function getNatTopNWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->topN)) {
            $query['TopN'] = $request->topN;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNatTopN',
            'version'     => '2021-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNatTopNResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the real-time SNAT performance ranking of a NAT gateway.
     *  *
     * @param GetNatTopNRequest $request GetNatTopNRequest
     *
     * @return GetNatTopNResponse GetNatTopNResponse
     */
    public function getNatTopN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNatTopNWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the results of network reachability analysis.
     *  *
     * @description **GetNetworkReachableAnalysis** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can query the state of the task for analyzing network reachability.
     * *   The **init** state indicates that the task is in progress.
     * *   The **finish** state indicates that the task is complete. In this state, you can obtain the analysis result.
     *  *
     * @param GetNetworkReachableAnalysisRequest $request GetNetworkReachableAnalysisRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNetworkReachableAnalysisResponse GetNetworkReachableAnalysisResponse
     */
    public function getNetworkReachableAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkReachableAnalysisId)) {
            $query['NetworkReachableAnalysisId'] = $request->networkReachableAnalysisId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNetworkReachableAnalysis',
            'version'     => '2021-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNetworkReachableAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the results of network reachability analysis.
     *  *
     * @description **GetNetworkReachableAnalysis** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can query the state of the task for analyzing network reachability.
     * *   The **init** state indicates that the task is in progress.
     * *   The **finish** state indicates that the task is complete. In this state, you can obtain the analysis result.
     *  *
     * @param GetNetworkReachableAnalysisRequest $request GetNetworkReachableAnalysisRequest
     *
     * @return GetNetworkReachableAnalysisResponse GetNetworkReachableAnalysisResponse
     */
    public function getNetworkReachableAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkReachableAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary 获取云网络指标趋势
     *  *
     * @param GetNisNetworkMetricsRequest $tmpReq  GetNisNetworkMetricsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNisNetworkMetricsResponse GetNisNetworkMetricsResponse
     */
    public function getNisNetworkMetricsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetNisNetworkMetricsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dimensions)) {
            $request->dimensionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dimensions, 'Dimensions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountIds)) {
            $query['AccountIds'] = $request->accountIds;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->dimensionsShrink)) {
            $query['Dimensions'] = $request->dimensionsShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scanBy)) {
            $query['ScanBy'] = $request->scanBy;
        }
        if (!Utils::isUnset($request->useCrossAccount)) {
            $query['UseCrossAccount'] = $request->useCrossAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNisNetworkMetrics',
            'version'     => '2021-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNisNetworkMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取云网络指标趋势
     *  *
     * @param GetNisNetworkMetricsRequest $request GetNisNetworkMetricsRequest
     *
     * @return GetNisNetworkMetricsResponse GetNisNetworkMetricsResponse
     */
    public function getNisNetworkMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNisNetworkMetricsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取云网络指标排名
     *  *
     * @param GetNisNetworkRankingRequest $tmpReq  GetNisNetworkRankingRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNisNetworkRankingResponse GetNisNetworkRankingResponse
     */
    public function getNisNetworkRankingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetNisNetworkRankingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountIds)) {
            $query['AccountIds'] = $request->accountIds;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filterShrink)) {
            $query['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->groupBy)) {
            $query['GroupBy'] = $request->groupBy;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->topN)) {
            $query['TopN'] = $request->topN;
        }
        if (!Utils::isUnset($request->useCrossAccount)) {
            $query['UseCrossAccount'] = $request->useCrossAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNisNetworkRanking',
            'version'     => '2021-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNisNetworkRankingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取云网络指标排名
     *  *
     * @param GetNisNetworkRankingRequest $request GetNisNetworkRankingRequest
     *
     * @return GetNisNetworkRankingResponse GetNisNetworkRankingResponse
     */
    public function getNisNetworkRanking($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNisNetworkRankingWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the rankings of inter-region traffic data in the form of 1-tuple, 2-tuple, or 5-tuple. Inter-region traffic data can be ranked by metrics such as traffic volumes and the number of packets.
     *  *
     * @param GetTransitRouterFlowTopNRequest $tmpReq  GetTransitRouterFlowTopNRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTransitRouterFlowTopNResponse GetTransitRouterFlowTopNResponse
     */
    public function getTransitRouterFlowTopNWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetTransitRouterFlowTopNShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accountIds)) {
            $request->accountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountIdsShrink)) {
            $query['AccountIds'] = $request->accountIdsShrink;
        }
        if (!Utils::isUnset($request->bandwithPackageId)) {
            $query['BandwithPackageId'] = $request->bandwithPackageId;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupBy)) {
            $query['GroupBy'] = $request->groupBy;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->otherIp)) {
            $query['OtherIp'] = $request->otherIp;
        }
        if (!Utils::isUnset($request->otherPort)) {
            $query['OtherPort'] = $request->otherPort;
        }
        if (!Utils::isUnset($request->otherRegion)) {
            $query['OtherRegion'] = $request->otherRegion;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->thisIp)) {
            $query['ThisIp'] = $request->thisIp;
        }
        if (!Utils::isUnset($request->thisPort)) {
            $query['ThisPort'] = $request->thisPort;
        }
        if (!Utils::isUnset($request->thisRegion)) {
            $query['ThisRegion'] = $request->thisRegion;
        }
        if (!Utils::isUnset($request->topN)) {
            $query['TopN'] = $request->topN;
        }
        if (!Utils::isUnset($request->useMultiAccount)) {
            $query['UseMultiAccount'] = $request->useMultiAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTransitRouterFlowTopN',
            'version'     => '2021-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTransitRouterFlowTopNResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the rankings of inter-region traffic data in the form of 1-tuple, 2-tuple, or 5-tuple. Inter-region traffic data can be ranked by metrics such as traffic volumes and the number of packets.
     *  *
     * @param GetTransitRouterFlowTopNRequest $request GetTransitRouterFlowTopNRequest
     *
     * @return GetTransitRouterFlowTopNResponse GetTransitRouterFlowTopNResponse
     */
    public function getTransitRouterFlowTopN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTransitRouterFlowTopNWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the rankings of hybrid cloud traffic data in the form of 1-tuple, 2-tuple, or 5-tuple. Hybrid cloud traffic data can be ranked by metrics such as traffic volumes and the number of packets.
     *  *
     * @param GetVbrFlowTopNRequest $tmpReq  GetVbrFlowTopNRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVbrFlowTopNResponse GetVbrFlowTopNResponse
     */
    public function getVbrFlowTopNWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetVbrFlowTopNShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accountIds)) {
            $request->accountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'AccountIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountIdsShrink)) {
            $query['AccountIds'] = $request->accountIdsShrink;
        }
        if (!Utils::isUnset($request->attachmentId)) {
            $query['AttachmentId'] = $request->attachmentId;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cloudIp)) {
            $query['CloudIp'] = $request->cloudIp;
        }
        if (!Utils::isUnset($request->cloudPort)) {
            $query['CloudPort'] = $request->cloudPort;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupBy)) {
            $query['GroupBy'] = $request->groupBy;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->otherIp)) {
            $query['OtherIp'] = $request->otherIp;
        }
        if (!Utils::isUnset($request->otherPort)) {
            $query['OtherPort'] = $request->otherPort;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->topN)) {
            $query['TopN'] = $request->topN;
        }
        if (!Utils::isUnset($request->useMultiAccount)) {
            $query['UseMultiAccount'] = $request->useMultiAccount;
        }
        if (!Utils::isUnset($request->virtualBorderRouterId)) {
            $query['VirtualBorderRouterId'] = $request->virtualBorderRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVbrFlowTopN',
            'version'     => '2021-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVbrFlowTopNResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the rankings of hybrid cloud traffic data in the form of 1-tuple, 2-tuple, or 5-tuple. Hybrid cloud traffic data can be ranked by metrics such as traffic volumes and the number of packets.
     *  *
     * @param GetVbrFlowTopNRequest $request GetVbrFlowTopNRequest
     *
     * @return GetVbrFlowTopNResponse GetVbrFlowTopNResponse
     */
    public function getVbrFlowTopN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVbrFlowTopNWithOptions($request, $runtime);
    }
}
