<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CDRS\V20201101\Models\AddCdrsMonitorRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\AddCdrsMonitorResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\AddMonitorRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\AddMonitorResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\BindDeviceRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\BindDeviceResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\CreateProjectRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\CreateProjectResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\DetectTrajectoryRegularPatternRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\DetectTrajectoryRegularPatternResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\GetCdrsMonitorListRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\GetCdrsMonitorListResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\GetCdrsMonitorResultRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\GetCdrsMonitorResultResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\GetMonitorListRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\GetMonitorListResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\GetMonitorResultRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\GetMonitorResultResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListAreaHotSpotMetricsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListAreaHotSpotMetricsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapAoisRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapAoisResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapCameraResultsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapCameraResultsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapCameraResultsShrinkRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapCameraStatisticsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapCameraStatisticsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapImageDetailsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapImageDetailsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapPersonFlowRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapPersonFlowResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapPersonFlowShrinkRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapRangeStatisticRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCityMapRangeStatisticResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCorpMetricsStatisticRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCorpMetricsStatisticResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListCorpMetricsStatisticShrinkRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDataStatisticsByDayRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDataStatisticsByDayResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDataStatisticsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDataStatisticsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDeviceDetailRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDeviceDetailResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDeviceGenderStatisticsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDeviceGenderStatisticsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDevicePersonRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDevicePersonResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDevicePersonStatisticsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDevicePersonStatisticsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDeviceRelationRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListDeviceRelationResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListMapRouteDetailsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListMapRouteDetailsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListMapRouteDetailsShrinkRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonDetailsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonDetailsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonResultRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonResultResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonTagRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonTagResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonTopRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonTopResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonTrackRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonTrackResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListRangeDeviceRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListRangeDeviceResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListStorageStatisticsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListStorageStatisticsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListStructureStatisticsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListStructureStatisticsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListTagMetricsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListTagMetricsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListTagMetricsShrinkRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleDetailsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleDetailsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleResultsRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleResultsResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleTagDistributeRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleTagDistributeResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleTopRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleTopResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleTrackRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleTrackResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\PaginateDeviceRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\PaginateDeviceResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\PaginateProjectRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\PaginateProjectResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\PredictTrajectoryDestinationRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\PredictTrajectoryDestinationResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\QueryTrajectoryByIdRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\QueryTrajectoryByIdResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\RecallTrajectoryByCoordinateTimeRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\RecallTrajectoryByCoordinateTimeResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\RecognizeImageRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\RecognizeImageResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\SearchAggregateObjectRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\SearchAggregateObjectResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\SearchObjectRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\SearchObjectResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\StopCdrsMonitorRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\StopCdrsMonitorResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\StopMonitorRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\StopMonitorResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\UnbindDeviceRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\UnbindDeviceResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\UpdateCdrsMonitorRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\UpdateCdrsMonitorResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\UpdateMonitorRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\UpdateMonitorResponse;
use AlibabaCloud\SDK\CDRS\V20201101\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\CDRS\V20201101\Models\UpdateProjectResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class CDRS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cdrs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param SearchObjectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SearchObjectResponse
     */
    public function searchObjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchObjectResponse::fromMap($this->doRPCRequest('SearchObject', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchObjectRequest $request
     *
     * @return SearchObjectResponse
     */
    public function searchObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchObjectWithOptions($request, $runtime);
    }

    /**
     * @param ListAreaHotSpotMetricsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAreaHotSpotMetricsResponse
     */
    public function listAreaHotSpotMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAreaHotSpotMetricsResponse::fromMap($this->doRPCRequest('ListAreaHotSpotMetrics', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAreaHotSpotMetricsRequest $request
     *
     * @return ListAreaHotSpotMetricsResponse
     */
    public function listAreaHotSpotMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAreaHotSpotMetricsWithOptions($request, $runtime);
    }

    /**
     * @param BindDeviceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return BindDeviceResponse
     */
    public function bindDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindDeviceResponse::fromMap($this->doRPCRequest('BindDevice', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindDeviceRequest $request
     *
     * @return BindDeviceResponse
     */
    public function bindDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindDeviceWithOptions($request, $runtime);
    }

    /**
     * @param GetCdrsMonitorResultRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetCdrsMonitorResultResponse
     */
    public function getCdrsMonitorResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCdrsMonitorResultResponse::fromMap($this->doRPCRequest('GetCdrsMonitorResult', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCdrsMonitorResultRequest $request
     *
     * @return GetCdrsMonitorResultResponse
     */
    public function getCdrsMonitorResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCdrsMonitorResultWithOptions($request, $runtime);
    }

    /**
     * @param ListVehicleDetailsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListVehicleDetailsResponse
     */
    public function listVehicleDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVehicleDetailsResponse::fromMap($this->doRPCRequest('ListVehicleDetails', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVehicleDetailsRequest $request
     *
     * @return ListVehicleDetailsResponse
     */
    public function listVehicleDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVehicleDetailsWithOptions($request, $runtime);
    }

    /**
     * @param GetCdrsMonitorListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetCdrsMonitorListResponse
     */
    public function getCdrsMonitorListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCdrsMonitorListResponse::fromMap($this->doRPCRequest('GetCdrsMonitorList', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCdrsMonitorListRequest $request
     *
     * @return GetCdrsMonitorListResponse
     */
    public function getCdrsMonitorList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCdrsMonitorListWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMonitorRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateMonitorResponse
     */
    public function updateMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMonitorResponse::fromMap($this->doRPCRequest('UpdateMonitor', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMonitorRequest $request
     *
     * @return UpdateMonitorResponse
     */
    public function updateMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMonitorWithOptions($request, $runtime);
    }

    /**
     * @param ListDataStatisticsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListDataStatisticsResponse
     */
    public function listDataStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDataStatisticsResponse::fromMap($this->doRPCRequest('ListDataStatistics', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDataStatisticsRequest $request
     *
     * @return ListDataStatisticsResponse
     */
    public function listDataStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param UnbindDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UnbindDeviceResponse
     */
    public function unbindDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindDeviceResponse::fromMap($this->doRPCRequest('UnbindDevice', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindDeviceRequest $request
     *
     * @return UnbindDeviceResponse
     */
    public function unbindDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ListPersonDetailsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListPersonDetailsResponse
     */
    public function listPersonDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPersonDetailsResponse::fromMap($this->doRPCRequest('ListPersonDetails', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPersonDetailsRequest $request
     *
     * @return ListPersonDetailsResponse
     */
    public function listPersonDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersonDetailsWithOptions($request, $runtime);
    }

    /**
     * @param ListVehicleTagDistributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListVehicleTagDistributeResponse
     */
    public function listVehicleTagDistributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVehicleTagDistributeResponse::fromMap($this->doRPCRequest('ListVehicleTagDistribute', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVehicleTagDistributeRequest $request
     *
     * @return ListVehicleTagDistributeResponse
     */
    public function listVehicleTagDistribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVehicleTagDistributeWithOptions($request, $runtime);
    }

    /**
     * @param ListDevicePersonStatisticsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListDevicePersonStatisticsResponse
     */
    public function listDevicePersonStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDevicePersonStatisticsResponse::fromMap($this->doRPCRequest('ListDevicePersonStatistics', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDevicePersonStatisticsRequest $request
     *
     * @return ListDevicePersonStatisticsResponse
     */
    public function listDevicePersonStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevicePersonStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param AddMonitorRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddMonitorResponse
     */
    public function addMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddMonitorResponse::fromMap($this->doRPCRequest('AddMonitor', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddMonitorRequest $request
     *
     * @return AddMonitorResponse
     */
    public function addMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMonitorWithOptions($request, $runtime);
    }

    /**
     * @param PaginateDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PaginateDeviceResponse
     */
    public function paginateDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PaginateDeviceResponse::fromMap($this->doRPCRequest('PaginateDevice', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PaginateDeviceRequest $request
     *
     * @return PaginateDeviceResponse
     */
    public function paginateDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->paginateDeviceWithOptions($request, $runtime);
    }

    /**
     * @param StopCdrsMonitorRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopCdrsMonitorResponse
     */
    public function stopCdrsMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopCdrsMonitorResponse::fromMap($this->doRPCRequest('StopCdrsMonitor', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopCdrsMonitorRequest $request
     *
     * @return StopCdrsMonitorResponse
     */
    public function stopCdrsMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCdrsMonitorWithOptions($request, $runtime);
    }

    /**
     * @param RecallTrajectoryByCoordinateTimeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RecallTrajectoryByCoordinateTimeResponse
     */
    public function recallTrajectoryByCoordinateTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecallTrajectoryByCoordinateTimeResponse::fromMap($this->doRPCRequest('RecallTrajectoryByCoordinateTime', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecallTrajectoryByCoordinateTimeRequest $request
     *
     * @return RecallTrajectoryByCoordinateTimeResponse
     */
    public function recallTrajectoryByCoordinateTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recallTrajectoryByCoordinateTimeWithOptions($request, $runtime);
    }

    /**
     * @param ListCityMapPersonFlowRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ListCityMapPersonFlowResponse
     */
    public function listCityMapPersonFlowWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCityMapPersonFlowShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->originDataSourceIdList)) {
            $request->originDataSourceIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->originDataSourceIdList, 'OriginDataSourceIdList', 'json');
        }
        if (!Utils::isUnset($tmpReq->targetDataSourceIdList)) {
            $request->targetDataSourceIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->targetDataSourceIdList, 'TargetDataSourceIdList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCityMapPersonFlowResponse::fromMap($this->doRPCRequest('ListCityMapPersonFlow', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCityMapPersonFlowRequest $request
     *
     * @return ListCityMapPersonFlowResponse
     */
    public function listCityMapPersonFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCityMapPersonFlowWithOptions($request, $runtime);
    }

    /**
     * @param AddCdrsMonitorRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddCdrsMonitorResponse
     */
    public function addCdrsMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCdrsMonitorResponse::fromMap($this->doRPCRequest('AddCdrsMonitor', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddCdrsMonitorRequest $request
     *
     * @return AddCdrsMonitorResponse
     */
    public function addCdrsMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCdrsMonitorWithOptions($request, $runtime);
    }

    /**
     * @param ListMapRouteDetailsRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListMapRouteDetailsResponse
     */
    public function listMapRouteDetailsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListMapRouteDetailsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->routeList)) {
            $request->routeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->routeList, 'RouteList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMapRouteDetailsResponse::fromMap($this->doRPCRequest('ListMapRouteDetails', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMapRouteDetailsRequest $request
     *
     * @return ListMapRouteDetailsResponse
     */
    public function listMapRouteDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMapRouteDetailsWithOptions($request, $runtime);
    }

    /**
     * @param ListPersonTopRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListPersonTopResponse
     */
    public function listPersonTopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPersonTopResponse::fromMap($this->doRPCRequest('ListPersonTop', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPersonTopRequest $request
     *
     * @return ListPersonTopResponse
     */
    public function listPersonTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersonTopWithOptions($request, $runtime);
    }

    /**
     * @param GetMonitorResultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMonitorResultResponse
     */
    public function getMonitorResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMonitorResultResponse::fromMap($this->doRPCRequest('GetMonitorResult', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMonitorResultRequest $request
     *
     * @return GetMonitorResultResponse
     */
    public function getMonitorResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMonitorResultWithOptions($request, $runtime);
    }

    /**
     * @param ListCityMapAoisRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCityMapAoisResponse
     */
    public function listCityMapAoisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCityMapAoisResponse::fromMap($this->doRPCRequest('ListCityMapAois', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCityMapAoisRequest $request
     *
     * @return ListCityMapAoisResponse
     */
    public function listCityMapAois($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCityMapAoisWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeImageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeImageResponse
     */
    public function recognizeImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeImageResponse::fromMap($this->doRPCRequest('RecognizeImage', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeImageRequest $request
     *
     * @return RecognizeImageResponse
     */
    public function recognizeImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeImageWithOptions($request, $runtime);
    }

    /**
     * @param GetMonitorListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetMonitorListResponse
     */
    public function getMonitorListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMonitorListResponse::fromMap($this->doRPCRequest('GetMonitorList', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMonitorListRequest $request
     *
     * @return GetMonitorListResponse
     */
    public function getMonitorList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMonitorListWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceRelationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListDeviceRelationResponse
     */
    public function listDeviceRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDeviceRelationResponse::fromMap($this->doRPCRequest('ListDeviceRelation', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeviceRelationRequest $request
     *
     * @return ListDeviceRelationResponse
     */
    public function listDeviceRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceRelationWithOptions($request, $runtime);
    }

    /**
     * @param ListPersonTrackRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPersonTrackResponse
     */
    public function listPersonTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPersonTrackResponse::fromMap($this->doRPCRequest('ListPersonTrack', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPersonTrackRequest $request
     *
     * @return ListPersonTrackResponse
     */
    public function listPersonTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersonTrackWithOptions($request, $runtime);
    }

    /**
     * @param ListCityMapCameraResultsRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ListCityMapCameraResultsResponse
     */
    public function listCityMapCameraResultsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCityMapCameraResultsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dataSourceIdList)) {
            $request->dataSourceIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dataSourceIdList, 'DataSourceIdList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCityMapCameraResultsResponse::fromMap($this->doRPCRequest('ListCityMapCameraResults', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCityMapCameraResultsRequest $request
     *
     * @return ListCityMapCameraResultsResponse
     */
    public function listCityMapCameraResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCityMapCameraResultsWithOptions($request, $runtime);
    }

    /**
     * @param QueryTrajectoryByIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryTrajectoryByIdResponse
     */
    public function queryTrajectoryByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTrajectoryByIdResponse::fromMap($this->doRPCRequest('QueryTrajectoryById', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTrajectoryByIdRequest $request
     *
     * @return QueryTrajectoryByIdResponse
     */
    public function queryTrajectoryById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrajectoryByIdWithOptions($request, $runtime);
    }

    /**
     * @param ListCityMapImageDetailsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListCityMapImageDetailsResponse
     */
    public function listCityMapImageDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCityMapImageDetailsResponse::fromMap($this->doRPCRequest('ListCityMapImageDetails', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCityMapImageDetailsRequest $request
     *
     * @return ListCityMapImageDetailsResponse
     */
    public function listCityMapImageDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCityMapImageDetailsWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProjectResponse::fromMap($this->doRPCRequest('CreateProject', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @param ListVehicleTopRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListVehicleTopResponse
     */
    public function listVehicleTopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVehicleTopResponse::fromMap($this->doRPCRequest('ListVehicleTop', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVehicleTopRequest $request
     *
     * @return ListVehicleTopResponse
     */
    public function listVehicleTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVehicleTopWithOptions($request, $runtime);
    }

    /**
     * @param ListDataStatisticsByDayRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDataStatisticsByDayResponse
     */
    public function listDataStatisticsByDayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDataStatisticsByDayResponse::fromMap($this->doRPCRequest('ListDataStatisticsByDay', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDataStatisticsByDayRequest $request
     *
     * @return ListDataStatisticsByDayResponse
     */
    public function listDataStatisticsByDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataStatisticsByDayWithOptions($request, $runtime);
    }

    /**
     * @param ListVehicleResultsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListVehicleResultsResponse
     */
    public function listVehicleResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVehicleResultsResponse::fromMap($this->doRPCRequest('ListVehicleResults', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVehicleResultsRequest $request
     *
     * @return ListVehicleResultsResponse
     */
    public function listVehicleResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVehicleResultsWithOptions($request, $runtime);
    }

    /**
     * @param SearchAggregateObjectRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SearchAggregateObjectResponse
     */
    public function searchAggregateObjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchAggregateObjectResponse::fromMap($this->doRPCRequest('SearchAggregateObject', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchAggregateObjectRequest $request
     *
     * @return SearchAggregateObjectResponse
     */
    public function searchAggregateObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAggregateObjectWithOptions($request, $runtime);
    }

    /**
     * @param ListCorpMetricsStatisticRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ListCorpMetricsStatisticResponse
     */
    public function listCorpMetricsStatisticWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCorpMetricsStatisticShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userGroupList)) {
            $request->userGroupListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userGroupList, 'UserGroupList', 'json');
        }
        if (!Utils::isUnset($tmpReq->deviceGroupList)) {
            $request->deviceGroupListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceGroupList, 'DeviceGroupList', 'json');
        }
        if (!Utils::isUnset($tmpReq->deviceIdList)) {
            $request->deviceIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceIdList, 'DeviceIdList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCorpMetricsStatisticResponse::fromMap($this->doRPCRequest('ListCorpMetricsStatistic', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCorpMetricsStatisticRequest $request
     *
     * @return ListCorpMetricsStatisticResponse
     */
    public function listCorpMetricsStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCorpMetricsStatisticWithOptions($request, $runtime);
    }

    /**
     * @param DetectTrajectoryRegularPatternRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DetectTrajectoryRegularPatternResponse
     */
    public function detectTrajectoryRegularPatternWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectTrajectoryRegularPatternResponse::fromMap($this->doRPCRequest('DetectTrajectoryRegularPattern', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectTrajectoryRegularPatternRequest $request
     *
     * @return DetectTrajectoryRegularPatternResponse
     */
    public function detectTrajectoryRegularPattern($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectTrajectoryRegularPatternWithOptions($request, $runtime);
    }

    /**
     * @param ListVehicleTrackRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListVehicleTrackResponse
     */
    public function listVehicleTrackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVehicleTrackResponse::fromMap($this->doRPCRequest('ListVehicleTrack', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVehicleTrackRequest $request
     *
     * @return ListVehicleTrackResponse
     */
    public function listVehicleTrack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVehicleTrackWithOptions($request, $runtime);
    }

    /**
     * @param ListStructureStatisticsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListStructureStatisticsResponse
     */
    public function listStructureStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListStructureStatisticsResponse::fromMap($this->doRPCRequest('ListStructureStatistics', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListStructureStatisticsRequest $request
     *
     * @return ListStructureStatisticsResponse
     */
    public function listStructureStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStructureStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param StopMonitorRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopMonitorResponse
     */
    public function stopMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopMonitorResponse::fromMap($this->doRPCRequest('StopMonitor', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopMonitorRequest $request
     *
     * @return StopMonitorResponse
     */
    public function stopMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMonitorWithOptions($request, $runtime);
    }

    /**
     * @param PredictTrajectoryDestinationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return PredictTrajectoryDestinationResponse
     */
    public function predictTrajectoryDestinationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PredictTrajectoryDestinationResponse::fromMap($this->doRPCRequest('PredictTrajectoryDestination', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PredictTrajectoryDestinationRequest $request
     *
     * @return PredictTrajectoryDestinationResponse
     */
    public function predictTrajectoryDestination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predictTrajectoryDestinationWithOptions($request, $runtime);
    }

    /**
     * @param ListRangeDeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRangeDeviceResponse
     */
    public function listRangeDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRangeDeviceResponse::fromMap($this->doRPCRequest('ListRangeDevice', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRangeDeviceRequest $request
     *
     * @return ListRangeDeviceResponse
     */
    public function listRangeDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRangeDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ListCityMapRangeStatisticRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListCityMapRangeStatisticResponse
     */
    public function listCityMapRangeStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCityMapRangeStatisticResponse::fromMap($this->doRPCRequest('ListCityMapRangeStatistic', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCityMapRangeStatisticRequest $request
     *
     * @return ListCityMapRangeStatisticResponse
     */
    public function listCityMapRangeStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCityMapRangeStatisticWithOptions($request, $runtime);
    }

    /**
     * @param ListStorageStatisticsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListStorageStatisticsResponse
     */
    public function listStorageStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListStorageStatisticsResponse::fromMap($this->doRPCRequest('ListStorageStatistics', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListStorageStatisticsRequest $request
     *
     * @return ListStorageStatisticsResponse
     */
    public function listStorageStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStorageStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param PaginateProjectRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PaginateProjectResponse
     */
    public function paginateProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PaginateProjectResponse::fromMap($this->doRPCRequest('PaginateProject', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PaginateProjectRequest $request
     *
     * @return PaginateProjectResponse
     */
    public function paginateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->paginateProjectWithOptions($request, $runtime);
    }

    /**
     * @param ListCityMapCameraStatisticsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListCityMapCameraStatisticsResponse
     */
    public function listCityMapCameraStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCityMapCameraStatisticsResponse::fromMap($this->doRPCRequest('ListCityMapCameraStatistics', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCityMapCameraStatisticsRequest $request
     *
     * @return ListCityMapCameraStatisticsResponse
     */
    public function listCityMapCameraStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCityMapCameraStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCdrsMonitorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateCdrsMonitorResponse
     */
    public function updateCdrsMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCdrsMonitorResponse::fromMap($this->doRPCRequest('UpdateCdrsMonitor', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCdrsMonitorRequest $request
     *
     * @return UpdateCdrsMonitorResponse
     */
    public function updateCdrsMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCdrsMonitorWithOptions($request, $runtime);
    }

    /**
     * @param ListPersonResultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListPersonResultResponse
     */
    public function listPersonResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPersonResultResponse::fromMap($this->doRPCRequest('ListPersonResult', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPersonResultRequest $request
     *
     * @return ListPersonResultResponse
     */
    public function listPersonResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersonResultWithOptions($request, $runtime);
    }

    /**
     * @param ListTagMetricsRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListTagMetricsResponse
     */
    public function listTagMetricsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTagMetricsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tagCode)) {
            $request->tagCodeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagCode, 'TagCode', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagMetricsResponse::fromMap($this->doRPCRequest('ListTagMetrics', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagMetricsRequest $request
     *
     * @return ListTagMetricsResponse
     */
    public function listTagMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagMetricsWithOptions($request, $runtime);
    }

    /**
     * @param ListPersonTagRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListPersonTagResponse
     */
    public function listPersonTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPersonTagResponse::fromMap($this->doRPCRequest('ListPersonTag', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPersonTagRequest $request
     *
     * @return ListPersonTagResponse
     */
    public function listPersonTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersonTagWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProjectResponse::fromMap($this->doRPCRequest('UpdateProject', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }

    /**
     * @param ListDevicePersonRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDevicePersonResponse
     */
    public function listDevicePersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDevicePersonResponse::fromMap($this->doRPCRequest('ListDevicePerson', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDevicePersonRequest $request
     *
     * @return ListDevicePersonResponse
     */
    public function listDevicePerson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevicePersonWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDeviceDetailResponse
     */
    public function listDeviceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDeviceDetailResponse::fromMap($this->doRPCRequest('ListDeviceDetail', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeviceDetailRequest $request
     *
     * @return ListDeviceDetailResponse
     */
    public function listDeviceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceGenderStatisticsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListDeviceGenderStatisticsResponse
     */
    public function listDeviceGenderStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDeviceGenderStatisticsResponse::fromMap($this->doRPCRequest('ListDeviceGenderStatistics', '2020-11-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeviceGenderStatisticsRequest $request
     *
     * @return ListDeviceGenderStatisticsResponse
     */
    public function listDeviceGenderStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceGenderStatisticsWithOptions($request, $runtime);
    }
}
