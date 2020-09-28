<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\AddCustomIdentModelRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\AddCustomIdentModelResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\AddParameterToPidLoopRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\AddParameterToPidLoopResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\AddPidLoopToScheduleRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\AddPidLoopToScheduleResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePidDataProcessesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePidDataProcessesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePidDataSourceAdvanceRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePidDataSourceRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePidDataSourceResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePidLoopRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePidLoopResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePidOrganizationRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePidOrganizationResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePidProjectRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePidProjectResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\DeletePidDataProcessRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\DeletePidDataProcessResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\DeletePidLoopRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\DeletePidLoopResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\DeletePidOrganizationRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\DeletePidOrganizationResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\DeletePidProjectRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\DeletePidProjectResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\DeletePidTagRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\DeletePidTagResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetCustomIdentValuesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetCustomIdentValuesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportChartRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportChartResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportDataTrendRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportDataTrendResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportInfoRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportInfoResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportPidParamRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportPidParamResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDefaultAdjustValuesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDefaultAdjustValuesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetIdentificateValuesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetIdentificateValuesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLoopParameterStepRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLoopParameterStepResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLowModelPerformValuesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLowModelPerformValuesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetOpPvCustomValuesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetOpPvCustomValuesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetParsingTagTaskRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetParsingTagTaskResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopLatestTaskStatusRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopLatestTaskStatusResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidOrganizationParentIdsRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidOrganizationParentIdsResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvCustomSimulationValuesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvCustomSimulationValuesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvIdentSimulationValuesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvIdentSimulationValuesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvOpAdjustValuesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvOpAdjustValuesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportChartRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportChartResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportDataTrendRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportDataTrendResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListIdentModelsRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListIdentModelsResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLoopParameterTagValuesRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLoopParameterTagValuesResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidDataProcessRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidDataProcessResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidLoopEvaluationsRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidLoopEvaluationsResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidLoopsRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidLoopsResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidOrganizationsRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidOrganizationsResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidProjectsRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidProjectsResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidTagsRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidTagsResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListTagValueTrendRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListTagValueTrendResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\MovePidOrganizationRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\MovePidOrganizationResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\SetPidLoopDefaultParameterRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\SetPidLoopDefaultParameterResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\SubmitPidLoopEvaluationRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\SubmitPidLoopEvaluationResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\UpdatePidLoopRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\UpdatePidLoopResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\UpdatePidOrganizationRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\UpdatePidOrganizationResponse;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\UpdatePidProjectRequest;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\UpdatePidProjectResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Brainindustrial extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('brain-industrial', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param GetOpPvCustomValuesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOpPvCustomValuesResponse
     */
    public function getOpPvCustomValues($request, $runtime)
    {
        Utils::validateModel($request);

        return GetOpPvCustomValuesResponse::fromMap($this->doRequest('GetOpPvCustomValues', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param SubmitPidLoopEvaluationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitPidLoopEvaluationResponse
     */
    public function submitPidLoopEvaluation($request, $runtime)
    {
        Utils::validateModel($request);

        return SubmitPidLoopEvaluationResponse::fromMap($this->doRequest('SubmitPidLoopEvaluation', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetDefaultAdjustValuesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDefaultAdjustValuesResponse
     */
    public function getDefaultAdjustValues($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDefaultAdjustValuesResponse::fromMap($this->doRequest('GetDefaultAdjustValues', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetPvOpAdjustValuesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPvOpAdjustValuesResponse
     */
    public function getPvOpAdjustValues($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPvOpAdjustValuesResponse::fromMap($this->doRequest('GetPvOpAdjustValues', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetPvCustomSimulationValuesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetPvCustomSimulationValuesResponse
     */
    public function getPvCustomSimulationValues($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPvCustomSimulationValuesResponse::fromMap($this->doRequest('GetPvCustomSimulationValues', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetIdentificateValuesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetIdentificateValuesResponse
     */
    public function getIdentificateValues($request, $runtime)
    {
        Utils::validateModel($request);

        return GetIdentificateValuesResponse::fromMap($this->doRequest('GetIdentificateValues', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetPvIdentSimulationValuesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetPvIdentSimulationValuesResponse
     */
    public function getPvIdentSimulationValues($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPvIdentSimulationValuesResponse::fromMap($this->doRequest('GetPvIdentSimulationValues', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetCustomIdentValuesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetCustomIdentValuesResponse
     */
    public function getCustomIdentValues($request, $runtime)
    {
        Utils::validateModel($request);

        return GetCustomIdentValuesResponse::fromMap($this->doRequest('GetCustomIdentValues', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetPidProjectReportOverviewRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetPidProjectReportOverviewResponse
     */
    public function getPidProjectReportOverview($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPidProjectReportOverviewResponse::fromMap($this->doRequest('GetPidProjectReportOverview', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetLowModelPerformValuesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetLowModelPerformValuesResponse
     */
    public function getLowModelPerformValues($request, $runtime)
    {
        Utils::validateModel($request);

        return GetLowModelPerformValuesResponse::fromMap($this->doRequest('GetLowModelPerformValues', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListPidLoopEvaluationsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListPidLoopEvaluationsResponse
     */
    public function listPidLoopEvaluations($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPidLoopEvaluationsResponse::fromMap($this->doRequest('ListPidLoopEvaluations', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListLoopParameterTagValuesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListLoopParameterTagValuesResponse
     */
    public function listLoopParameterTagValues($request, $runtime)
    {
        Utils::validateModel($request);

        return ListLoopParameterTagValuesResponse::fromMap($this->doRequest('ListLoopParameterTagValues', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetPidLoopParameterRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPidLoopParameterResponse
     */
    public function getPidLoopParameter($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPidLoopParameterResponse::fromMap($this->doRequest('GetPidLoopParameter', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetDailyReportInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDailyReportInfoResponse
     */
    public function getDailyReportInfo($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDailyReportInfoResponse::fromMap($this->doRequest('GetDailyReportInfo', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetPidLoopRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetPidLoopResponse
     */
    public function getPidLoop($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPidLoopResponse::fromMap($this->doRequest('GetPidLoop', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreatePidProjectRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreatePidProjectResponse
     */
    public function createPidProject($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePidProjectResponse::fromMap($this->doRequest('CreatePidProject', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListIdentModelsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListIdentModelsResponse
     */
    public function listIdentModels($request, $runtime)
    {
        Utils::validateModel($request);

        return ListIdentModelsResponse::fromMap($this->doRequest('ListIdentModels', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListPidDataProcessRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListPidDataProcessResponse
     */
    public function listPidDataProcess($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPidDataProcessResponse::fromMap($this->doRequest('ListPidDataProcess', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddCustomIdentModelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddCustomIdentModelResponse
     */
    public function addCustomIdentModel($request, $runtime)
    {
        Utils::validateModel($request);

        return AddCustomIdentModelResponse::fromMap($this->doRequest('AddCustomIdentModel', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetLoopParameterStepRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetLoopParameterStepResponse
     */
    public function getLoopParameterStep($request, $runtime)
    {
        Utils::validateModel($request);

        return GetLoopParameterStepResponse::fromMap($this->doRequest('GetLoopParameterStep', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListPidLoopsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPidLoopsResponse
     */
    public function listPidLoops($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPidLoopsResponse::fromMap($this->doRequest('ListPidLoops', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param MovePidOrganizationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return MovePidOrganizationResponse
     */
    public function movePidOrganization($request, $runtime)
    {
        Utils::validateModel($request);

        return MovePidOrganizationResponse::fromMap($this->doRequest('MovePidOrganization', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdatePidLoopRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdatePidLoopResponse
     */
    public function updatePidLoop($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdatePidLoopResponse::fromMap($this->doRequest('UpdatePidLoop', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddPidLoopToScheduleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddPidLoopToScheduleResponse
     */
    public function addPidLoopToSchedule($request, $runtime)
    {
        Utils::validateModel($request);

        return AddPidLoopToScheduleResponse::fromMap($this->doRequest('AddPidLoopToSchedule', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetParsingTagTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetParsingTagTaskResponse
     */
    public function getParsingTagTask($request, $runtime)
    {
        Utils::validateModel($request);

        return GetParsingTagTaskResponse::fromMap($this->doRequest('GetParsingTagTask', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetPidLoopLatestTaskStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetPidLoopLatestTaskStatusResponse
     */
    public function getPidLoopLatestTaskStatus($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPidLoopLatestTaskStatusResponse::fromMap($this->doRequest('GetPidLoopLatestTaskStatus', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeletePidLoopRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeletePidLoopResponse
     */
    public function deletePidLoop($request, $runtime)
    {
        Utils::validateModel($request);

        return DeletePidLoopResponse::fromMap($this->doRequest('DeletePidLoop', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetSummaryReportInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetSummaryReportInfoResponse
     */
    public function getSummaryReportInfo($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSummaryReportInfoResponse::fromMap($this->doRequest('GetSummaryReportInfo', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetSummaryReportDataTrendRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSummaryReportDataTrendResponse
     */
    public function getSummaryReportDataTrend($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSummaryReportDataTrendResponse::fromMap($this->doRequest('GetSummaryReportDataTrend', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetSummaryReportChartRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSummaryReportChartResponse
     */
    public function getSummaryReportChart($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSummaryReportChartResponse::fromMap($this->doRequest('GetSummaryReportChart', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetDailyReportDataTrendRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDailyReportDataTrendResponse
     */
    public function getDailyReportDataTrend($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDailyReportDataTrendResponse::fromMap($this->doRequest('GetDailyReportDataTrend', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListTagValueTrendRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListTagValueTrendResponse
     */
    public function listTagValueTrend($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTagValueTrendResponse::fromMap($this->doRequest('ListTagValueTrend', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetDailyReportChartRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDailyReportChartResponse
     */
    public function getDailyReportChart($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDailyReportChartResponse::fromMap($this->doRequest('GetDailyReportChart', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListPidOrganizationsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPidOrganizationsResponse
     */
    public function listPidOrganizations($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPidOrganizationsResponse::fromMap($this->doRequest('ListPidOrganizations', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreatePidDataProcessesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePidDataProcessesResponse
     */
    public function createPidDataProcesses($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePidDataProcessesResponse::fromMap($this->doRequest('CreatePidDataProcesses', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetDailyReportPidParamRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDailyReportPidParamResponse
     */
    public function getDailyReportPidParam($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDailyReportPidParamResponse::fromMap($this->doRequest('GetDailyReportPidParam', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddParameterToPidLoopRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddParameterToPidLoopResponse
     */
    public function addParameterToPidLoop($request, $runtime)
    {
        Utils::validateModel($request);

        return AddParameterToPidLoopResponse::fromMap($this->doRequest('AddParameterToPidLoop', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListPidProjectsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPidProjectsResponse
     */
    public function listPidProjects($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPidProjectsResponse::fromMap($this->doRequest('ListPidProjects', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeletePidOrganizationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeletePidOrganizationResponse
     */
    public function deletePidOrganization($request, $runtime)
    {
        Utils::validateModel($request);

        return DeletePidOrganizationResponse::fromMap($this->doRequest('DeletePidOrganization', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param SetPidLoopDefaultParameterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetPidLoopDefaultParameterResponse
     */
    public function setPidLoopDefaultParameter($request, $runtime)
    {
        Utils::validateModel($request);

        return SetPidLoopDefaultParameterResponse::fromMap($this->doRequest('SetPidLoopDefaultParameter', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetPidOrganizationParentIdsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetPidOrganizationParentIdsResponse
     */
    public function getPidOrganizationParentIds($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPidOrganizationParentIdsResponse::fromMap($this->doRequest('GetPidOrganizationParentIds', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreatePidOrganizationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreatePidOrganizationResponse
     */
    public function createPidOrganization($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePidOrganizationResponse::fromMap($this->doRequest('CreatePidOrganization', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdatePidOrganizationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdatePidOrganizationResponse
     */
    public function updatePidOrganization($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdatePidOrganizationResponse::fromMap($this->doRequest('UpdatePidOrganization', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreatePidLoopRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreatePidLoopResponse
     */
    public function createPidLoop($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePidLoopResponse::fromMap($this->doRequest('CreatePidLoop', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param UpdatePidProjectRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdatePidProjectResponse
     */
    public function updatePidProject($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdatePidProjectResponse::fromMap($this->doRequest('UpdatePidProject', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param ListPidTagsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListPidTagsResponse
     */
    public function listPidTags($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPidTagsResponse::fromMap($this->doRequest('ListPidTags', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeletePidDataProcessRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeletePidDataProcessResponse
     */
    public function deletePidDataProcess($request, $runtime)
    {
        Utils::validateModel($request);

        return DeletePidDataProcessResponse::fromMap($this->doRequest('DeletePidDataProcess', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreatePidDataSourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePidDataSourceResponse
     */
    public function createPidDataSource($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePidDataSourceResponse::fromMap($this->doRequest('CreatePidDataSource', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreatePidDataSourceAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreatePidDataSourceResponse
     */
    public function createPidDataSourceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'brain-industrial',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $createPidDataSourcereq = new CreatePidDataSourceRequest([]);
        RpcUtils::convert($request, $createPidDataSourcereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->ossPathObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $createPidDataSourcereq->ossPath = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->createPidDataSource($createPidDataSourcereq, $runtime);
    }

    /**
     * @param DeletePidProjectRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeletePidProjectResponse
     */
    public function deletePidProject($request, $runtime)
    {
        Utils::validateModel($request);

        return DeletePidProjectResponse::fromMap($this->doRequest('DeletePidProject', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeletePidTagRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePidTagResponse
     */
    public function deletePidTag($request, $runtime)
    {
        Utils::validateModel($request);

        return DeletePidTagResponse::fromMap($this->doRequest('DeletePidTag', 'HTTPS', 'POST', '2020-09-20', 'AK', null, $request, $runtime));
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
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
