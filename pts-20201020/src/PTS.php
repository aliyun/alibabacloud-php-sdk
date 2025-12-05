<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\PTS\V20201020\Models\AdjustJMeterSceneSpeedRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\AdjustJMeterSceneSpeedResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\AdjustPtsSceneSpeedRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\AdjustPtsSceneSpeedResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\AdjustPtsSceneSpeedShrinkRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\CreatePtsSceneBaseLineFromReportRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\CreatePtsSceneBaseLineFromReportResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\CreatePtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\CreatePtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsSceneBaseLineRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsSceneBaseLineResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsScenesRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsScenesResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\DeletePtsScenesShrinkRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetAllRegionsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterLogsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterLogsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterReportDetailsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterReportDetailsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSampleMetricsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSampleMetricsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSamplingLogsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSamplingLogsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSceneRunningDataRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterSceneRunningDataResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsDebugSampleLogsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsDebugSampleLogsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportsBySceneIdRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportsBySceneIdResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneBaseLineRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneBaseLineResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningDataRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningDataResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningStatusRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningStatusResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetUserVpcSecurityGroupRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetUserVpcSecurityGroupResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetUserVpcsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetUserVpcsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetUserVpcVSwitchRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetUserVpcVSwitchResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListJMeterReportsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListJMeterReportsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListOpenJMeterScenesRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListOpenJMeterScenesResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListPtsReportsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListPtsReportsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListVpcConfigsRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListVpcConfigsResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\ModifyPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\ModifyPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\RemoveEnvRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\RemoveEnvResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\RemoveOpenJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\RemoveOpenJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvShrinkRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneShrinkRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneShrinkRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartDebuggingJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartDebuggingJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartDebugPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartDebugPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartTestingJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StartTestingJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopDebuggingJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopDebuggingJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopDebugPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopDebugPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopPtsSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopPtsSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopTestingJMeterSceneRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\StopTestingJMeterSceneResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\UpdatePtsSceneBaseLineRequest;
use AlibabaCloud\SDK\PTS\V20201020\Models\UpdatePtsSceneBaseLineResponse;
use AlibabaCloud\SDK\PTS\V20201020\Models\UpdatePtsSceneBaseLineShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PTS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adjusts the JMeter load.
     *
     * @param request - AdjustJMeterSceneSpeedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AdjustJMeterSceneSpeedResponse
     *
     * @param AdjustJMeterSceneSpeedRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AdjustJMeterSceneSpeedResponse
     */
    public function adjustJMeterSceneSpeedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AdjustJMeterSceneSpeed',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AdjustJMeterSceneSpeedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adjusts the JMeter load.
     *
     * @param request - AdjustJMeterSceneSpeedRequest
     *
     * @returns AdjustJMeterSceneSpeedResponse
     *
     * @param AdjustJMeterSceneSpeedRequest $request
     *
     * @return AdjustJMeterSceneSpeedResponse
     */
    public function adjustJMeterSceneSpeed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->adjustJMeterSceneSpeedWithOptions($request, $runtime);
    }

    /**
     * Adjusts the stress in a Performance Testing Service (PTS) scenario.
     *
     * @remarks
     * In concurrency mode, only the concurrency of the first API is passed as that of a session.
     * In requests per second (RPS) mode, the RPS of each API can be adjusted. Make sure that the RPS decreases in the API order in the same session.
     *
     * @param tmpReq - AdjustPtsSceneSpeedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AdjustPtsSceneSpeedResponse
     *
     * @param AdjustPtsSceneSpeedRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return AdjustPtsSceneSpeedResponse
     */
    public function adjustPtsSceneSpeedWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AdjustPtsSceneSpeedShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->apiSpeedList) {
            $request->apiSpeedListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->apiSpeedList, 'ApiSpeedList', 'json');
        }

        $query = [];
        if (null !== $request->apiSpeedListShrink) {
            @$query['ApiSpeedList'] = $request->apiSpeedListShrink;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AdjustPtsSceneSpeed',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AdjustPtsSceneSpeedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adjusts the stress in a Performance Testing Service (PTS) scenario.
     *
     * @remarks
     * In concurrency mode, only the concurrency of the first API is passed as that of a session.
     * In requests per second (RPS) mode, the RPS of each API can be adjusted. Make sure that the RPS decreases in the API order in the same session.
     *
     * @param request - AdjustPtsSceneSpeedRequest
     *
     * @returns AdjustPtsSceneSpeedResponse
     *
     * @param AdjustPtsSceneSpeedRequest $request
     *
     * @return AdjustPtsSceneSpeedResponse
     */
    public function adjustPtsSceneSpeed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->adjustPtsSceneSpeedWithOptions($request, $runtime);
    }

    /**
     * Creates a stress testing scenario.
     *
     * @param request - CreatePtsSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePtsSceneResponse
     *
     * @param CreatePtsSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePtsSceneResponse
     */
    public function createPtsSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePtsScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePtsSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a stress testing scenario.
     *
     * @param request - CreatePtsSceneRequest
     *
     * @returns CreatePtsSceneResponse
     *
     * @param CreatePtsSceneRequest $request
     *
     * @return CreatePtsSceneResponse
     */
    public function createPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPtsSceneWithOptions($request, $runtime);
    }

    /**
     * null.
     *
     * @param request - CreatePtsSceneBaseLineFromReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePtsSceneBaseLineFromReportResponse
     *
     * @param CreatePtsSceneBaseLineFromReportRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreatePtsSceneBaseLineFromReportResponse
     */
    public function createPtsSceneBaseLineFromReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePtsSceneBaseLineFromReport',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePtsSceneBaseLineFromReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * null.
     *
     * @param request - CreatePtsSceneBaseLineFromReportRequest
     *
     * @returns CreatePtsSceneBaseLineFromReportResponse
     *
     * @param CreatePtsSceneBaseLineFromReportRequest $request
     *
     * @return CreatePtsSceneBaseLineFromReportResponse
     */
    public function createPtsSceneBaseLineFromReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPtsSceneBaseLineFromReportWithOptions($request, $runtime);
    }

    /**
     * Deletes a Performance Testing Service (PTS) scenario.
     *
     * @param request - DeletePtsSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePtsSceneResponse
     *
     * @param DeletePtsSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePtsSceneResponse
     */
    public function deletePtsSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePtsScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePtsSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Performance Testing Service (PTS) scenario.
     *
     * @param request - DeletePtsSceneRequest
     *
     * @returns DeletePtsSceneResponse
     *
     * @param DeletePtsSceneRequest $request
     *
     * @return DeletePtsSceneResponse
     */
    public function deletePtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePtsSceneWithOptions($request, $runtime);
    }

    /**
     * @param request - DeletePtsSceneBaseLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePtsSceneBaseLineResponse
     *
     * @param DeletePtsSceneBaseLineRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeletePtsSceneBaseLineResponse
     */
    public function deletePtsSceneBaseLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePtsSceneBaseLine',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePtsSceneBaseLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeletePtsSceneBaseLineRequest
     *
     * @returns DeletePtsSceneBaseLineResponse
     *
     * @param DeletePtsSceneBaseLineRequest $request
     *
     * @return DeletePtsSceneBaseLineResponse
     */
    public function deletePtsSceneBaseLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePtsSceneBaseLineWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - DeletePtsScenesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePtsScenesResponse
     *
     * @param DeletePtsScenesRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DeletePtsScenesResponse
     */
    public function deletePtsScenesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeletePtsScenesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sceneIds) {
            $request->sceneIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sceneIds, 'SceneIds', 'json');
        }

        $query = [];
        if (null !== $request->sceneIdsShrink) {
            @$query['SceneIds'] = $request->sceneIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePtsScenes',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePtsScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeletePtsScenesRequest
     *
     * @returns DeletePtsScenesResponse
     *
     * @param DeletePtsScenesRequest $request
     *
     * @return DeletePtsScenesResponse
     */
    public function deletePtsScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePtsScenesWithOptions($request, $runtime);
    }

    /**
     * Queries all supported regions.
     *
     * @param request - GetAllRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAllRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetAllRegionsResponse
     */
    public function getAllRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetAllRegions',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAllRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all supported regions.
     *
     * @returns GetAllRegionsResponse
     *
     * @return GetAllRegionsResponse
     */
    public function getAllRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllRegionsWithOptions($runtime);
    }

    /**
     * Queries the operational logs of JMeter stress testers. By default, the operational logs of the stress tester identified as number 0 are queried and the total number of stress testers is returned.
     *
     * @param request - GetJMeterLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJMeterLogsResponse
     *
     * @param GetJMeterLogsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetJMeterLogsResponse
     */
    public function getJMeterLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentIndex) {
            @$query['AgentIndex'] = $request->agentIndex;
        }

        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        if (null !== $request->thread) {
            @$query['Thread'] = $request->thread;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJMeterLogs',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJMeterLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the operational logs of JMeter stress testers. By default, the operational logs of the stress tester identified as number 0 are queried and the total number of stress testers is returned.
     *
     * @param request - GetJMeterLogsRequest
     *
     * @returns GetJMeterLogsResponse
     *
     * @param GetJMeterLogsRequest $request
     *
     * @return GetJMeterLogsResponse
     */
    public function getJMeterLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJMeterLogsWithOptions($request, $runtime);
    }

    /**
     * Obtains the details of a JMeter report.
     *
     * @param request - GetJMeterReportDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJMeterReportDetailsResponse
     *
     * @param GetJMeterReportDetailsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetJMeterReportDetailsResponse
     */
    public function getJMeterReportDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJMeterReportDetails',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJMeterReportDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the details of a JMeter report.
     *
     * @param request - GetJMeterReportDetailsRequest
     *
     * @returns GetJMeterReportDetailsResponse
     *
     * @param GetJMeterReportDetailsRequest $request
     *
     * @return GetJMeterReportDetailsResponse
     */
    public function getJMeterReportDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJMeterReportDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries the metrics of JMeter samplers based on specified conditions.
     *
     * @param request - GetJMeterSampleMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJMeterSampleMetricsResponse
     *
     * @param GetJMeterSampleMetricsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetJMeterSampleMetricsResponse
     */
    public function getJMeterSampleMetricsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        if (null !== $request->samplerId) {
            @$query['SamplerId'] = $request->samplerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJMeterSampleMetrics',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJMeterSampleMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metrics of JMeter samplers based on specified conditions.
     *
     * @param request - GetJMeterSampleMetricsRequest
     *
     * @returns GetJMeterSampleMetricsResponse
     *
     * @param GetJMeterSampleMetricsRequest $request
     *
     * @return GetJMeterSampleMetricsResponse
     */
    public function getJMeterSampleMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJMeterSampleMetricsWithOptions($request, $runtime);
    }

    /**
     * Queries the sampling logs of a JMeter sampler.
     *
     * @param request - GetJMeterSamplingLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJMeterSamplingLogsResponse
     *
     * @param GetJMeterSamplingLogsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetJMeterSamplingLogsResponse
     */
    public function getJMeterSamplingLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxRT) {
            @$query['MaxRT'] = $request->maxRT;
        }

        if (null !== $request->minRT) {
            @$query['MinRT'] = $request->minRT;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        if (null !== $request->responseCode) {
            @$query['ResponseCode'] = $request->responseCode;
        }

        if (null !== $request->samplerId) {
            @$query['SamplerId'] = $request->samplerId;
        }

        if (null !== $request->success) {
            @$query['Success'] = $request->success;
        }

        if (null !== $request->thread) {
            @$query['Thread'] = $request->thread;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJMeterSamplingLogs',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJMeterSamplingLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the sampling logs of a JMeter sampler.
     *
     * @param request - GetJMeterSamplingLogsRequest
     *
     * @returns GetJMeterSamplingLogsResponse
     *
     * @param GetJMeterSamplingLogsRequest $request
     *
     * @return GetJMeterSamplingLogsResponse
     */
    public function getJMeterSamplingLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJMeterSamplingLogsWithOptions($request, $runtime);
    }

    /**
     * Queries data that is generated during the stress testing of a JMeter scenario based on the ID of the scenario.
     *
     * @param request - GetJMeterSceneRunningDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJMeterSceneRunningDataResponse
     *
     * @param GetJMeterSceneRunningDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetJMeterSceneRunningDataResponse
     */
    public function getJMeterSceneRunningDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJMeterSceneRunningData',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJMeterSceneRunningDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries data that is generated during the stress testing of a JMeter scenario based on the ID of the scenario.
     *
     * @param request - GetJMeterSceneRunningDataRequest
     *
     * @returns GetJMeterSceneRunningDataResponse
     *
     * @param GetJMeterSceneRunningDataRequest $request
     *
     * @return GetJMeterSceneRunningDataResponse
     */
    public function getJMeterSceneRunningData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJMeterSceneRunningDataWithOptions($request, $runtime);
    }

    /**
     * Queries information about a JMeter scenario.
     *
     * @param request - GetOpenJMeterSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOpenJMeterSceneResponse
     *
     * @param GetOpenJMeterSceneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOpenJMeterSceneResponse
     */
    public function getOpenJMeterSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOpenJMeterScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOpenJMeterSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a JMeter scenario.
     *
     * @param request - GetOpenJMeterSceneRequest
     *
     * @returns GetOpenJMeterSceneResponse
     *
     * @param GetOpenJMeterSceneRequest $request
     *
     * @return GetOpenJMeterSceneResponse
     */
    public function getOpenJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpenJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * Queries the sampling logs for a Performance Testing Service (PTS) debugging task.
     *
     * @param request - GetPtsDebugSampleLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPtsDebugSampleLogsResponse
     *
     * @param GetPtsDebugSampleLogsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetPtsDebugSampleLogsResponse
     */
    public function getPtsDebugSampleLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPtsDebugSampleLogs',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPtsDebugSampleLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the sampling logs for a Performance Testing Service (PTS) debugging task.
     *
     * @param request - GetPtsDebugSampleLogsRequest
     *
     * @returns GetPtsDebugSampleLogsResponse
     *
     * @param GetPtsDebugSampleLogsRequest $request
     *
     * @return GetPtsDebugSampleLogsResponse
     */
    public function getPtsDebugSampleLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsDebugSampleLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a report for a performance testing task in a Performance Testing Service (PTS) scenario.
     *
     * @param request - GetPtsReportDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPtsReportDetailsResponse
     *
     * @param GetPtsReportDetailsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPtsReportDetailsResponse
     */
    public function getPtsReportDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPtsReportDetails',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPtsReportDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a report for a performance testing task in a Performance Testing Service (PTS) scenario.
     *
     * @param request - GetPtsReportDetailsRequest
     *
     * @returns GetPtsReportDetailsResponse
     *
     * @param GetPtsReportDetailsRequest $request
     *
     * @return GetPtsReportDetailsResponse
     */
    public function getPtsReportDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsReportDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries all reports of multiple scenarios that are generated during the stress testing in batch.
     *
     * @param request - GetPtsReportsBySceneIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPtsReportsBySceneIdResponse
     *
     * @param GetPtsReportsBySceneIdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPtsReportsBySceneIdResponse
     */
    public function getPtsReportsBySceneIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPtsReportsBySceneId',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPtsReportsBySceneIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all reports of multiple scenarios that are generated during the stress testing in batch.
     *
     * @param request - GetPtsReportsBySceneIdRequest
     *
     * @returns GetPtsReportsBySceneIdResponse
     *
     * @param GetPtsReportsBySceneIdRequest $request
     *
     * @return GetPtsReportsBySceneIdResponse
     */
    public function getPtsReportsBySceneId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsReportsBySceneIdWithOptions($request, $runtime);
    }

    /**
     * Queries the structure and load settings of a Performance Testing Service (PTS) scenario.
     *
     * @param request - GetPtsSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPtsSceneResponse
     *
     * @param GetPtsSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetPtsSceneResponse
     */
    public function getPtsSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPtsScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPtsSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the structure and load settings of a Performance Testing Service (PTS) scenario.
     *
     * @param request - GetPtsSceneRequest
     *
     * @returns GetPtsSceneResponse
     *
     * @param GetPtsSceneRequest $request
     *
     * @return GetPtsSceneResponse
     */
    public function getPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsSceneWithOptions($request, $runtime);
    }

    /**
     * null.
     *
     * @param request - GetPtsSceneBaseLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPtsSceneBaseLineResponse
     *
     * @param GetPtsSceneBaseLineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPtsSceneBaseLineResponse
     */
    public function getPtsSceneBaseLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPtsSceneBaseLine',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPtsSceneBaseLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * null.
     *
     * @param request - GetPtsSceneBaseLineRequest
     *
     * @returns GetPtsSceneBaseLineResponse
     *
     * @param GetPtsSceneBaseLineRequest $request
     *
     * @return GetPtsSceneBaseLineResponse
     */
    public function getPtsSceneBaseLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsSceneBaseLineWithOptions($request, $runtime);
    }

    /**
     * Queries the runtime data of a stress testing or debugging scenario.
     *
     * @param request - GetPtsSceneRunningDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPtsSceneRunningDataResponse
     *
     * @param GetPtsSceneRunningDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPtsSceneRunningDataResponse
     */
    public function getPtsSceneRunningDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPtsSceneRunningData',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPtsSceneRunningDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the runtime data of a stress testing or debugging scenario.
     *
     * @param request - GetPtsSceneRunningDataRequest
     *
     * @returns GetPtsSceneRunningDataResponse
     *
     * @param GetPtsSceneRunningDataRequest $request
     *
     * @return GetPtsSceneRunningDataResponse
     */
    public function getPtsSceneRunningData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsSceneRunningDataWithOptions($request, $runtime);
    }

    /**
     * Queries the runtime status of a Performance Testing Service (PTS) scenario.
     *
     * @param request - GetPtsSceneRunningStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPtsSceneRunningStatusResponse
     *
     * @param GetPtsSceneRunningStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetPtsSceneRunningStatusResponse
     */
    public function getPtsSceneRunningStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPtsSceneRunningStatus',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPtsSceneRunningStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the runtime status of a Performance Testing Service (PTS) scenario.
     *
     * @param request - GetPtsSceneRunningStatusRequest
     *
     * @returns GetPtsSceneRunningStatusResponse
     *
     * @param GetPtsSceneRunningStatusRequest $request
     *
     * @return GetPtsSceneRunningStatusResponse
     */
    public function getPtsSceneRunningStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPtsSceneRunningStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - GetUserVpcSecurityGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserVpcSecurityGroupResponse
     *
     * @param GetUserVpcSecurityGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetUserVpcSecurityGroupResponse
     */
    public function getUserVpcSecurityGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserVpcSecurityGroup',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserVpcSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetUserVpcSecurityGroupRequest
     *
     * @returns GetUserVpcSecurityGroupResponse
     *
     * @param GetUserVpcSecurityGroupRequest $request
     *
     * @return GetUserVpcSecurityGroupResponse
     */
    public function getUserVpcSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserVpcSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - GetUserVpcVSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserVpcVSwitchResponse
     *
     * @param GetUserVpcVSwitchRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetUserVpcVSwitchResponse
     */
    public function getUserVpcVSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserVpcVSwitch',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserVpcVSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetUserVpcVSwitchRequest
     *
     * @returns GetUserVpcVSwitchResponse
     *
     * @param GetUserVpcVSwitchRequest $request
     *
     * @return GetUserVpcVSwitchResponse
     */
    public function getUserVpcVSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserVpcVSwitchWithOptions($request, $runtime);
    }

    /**
     * @param request - GetUserVpcsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserVpcsResponse
     *
     * @param GetUserVpcsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetUserVpcsResponse
     */
    public function getUserVpcsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserVpcs',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserVpcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetUserVpcsRequest
     *
     * @returns GetUserVpcsResponse
     *
     * @param GetUserVpcsRequest $request
     *
     * @return GetUserVpcsResponse
     */
    public function getUserVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserVpcsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about JMeter environments.
     *
     * @param request - ListEnvsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnvsResponse
     *
     * @param ListEnvsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListEnvsResponse
     */
    public function listEnvsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->envId) {
            @$query['EnvId'] = $request->envId;
        }

        if (null !== $request->envName) {
            @$query['EnvName'] = $request->envName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEnvs',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEnvsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about JMeter environments.
     *
     * @param request - ListEnvsRequest
     *
     * @returns ListEnvsResponse
     *
     * @param ListEnvsRequest $request
     *
     * @return ListEnvsResponse
     */
    public function listEnvs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvsWithOptions($request, $runtime);
    }

    /**
     * Queries JMeter reports based on specified conditions.
     *
     * @param request - ListJMeterReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJMeterReportsResponse
     *
     * @param ListJMeterReportsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListJMeterReportsResponse
     */
    public function listJMeterReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJMeterReports',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJMeterReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries JMeter reports based on specified conditions.
     *
     * @param request - ListJMeterReportsRequest
     *
     * @returns ListJMeterReportsResponse
     *
     * @param ListJMeterReportsRequest $request
     *
     * @return ListJMeterReportsResponse
     */
    public function listJMeterReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJMeterReportsWithOptions($request, $runtime);
    }

    /**
     * Queries JMeter scenarios based on a specified condition.
     *
     * @param request - ListOpenJMeterScenesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOpenJMeterScenesResponse
     *
     * @param ListOpenJMeterScenesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListOpenJMeterScenesResponse
     */
    public function listOpenJMeterScenesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOpenJMeterScenes',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOpenJMeterScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries JMeter scenarios based on a specified condition.
     *
     * @param request - ListOpenJMeterScenesRequest
     *
     * @returns ListOpenJMeterScenesResponse
     *
     * @param ListOpenJMeterScenesRequest $request
     *
     * @return ListOpenJMeterScenesResponse
     */
    public function listOpenJMeterScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOpenJMeterScenesWithOptions($request, $runtime);
    }

    /**
     * Queries Performance Testing Service (PTS) reports based on specified conditions.
     *
     * @param request - ListPtsReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPtsReportsResponse
     *
     * @param ListPtsReportsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListPtsReportsResponse
     */
    public function listPtsReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->beginTime) {
            @$body['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reportId) {
            @$body['ReportId'] = $request->reportId;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListPtsReports',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPtsReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Performance Testing Service (PTS) reports based on specified conditions.
     *
     * @param request - ListPtsReportsRequest
     *
     * @returns ListPtsReportsResponse
     *
     * @param ListPtsReportsRequest $request
     *
     * @return ListPtsReportsResponse
     */
    public function listPtsReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPtsReportsWithOptions($request, $runtime);
    }

    /**
     * Queries Performance Testing Service (PTS) scenarios by page.
     *
     * @param request - ListPtsSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPtsSceneResponse
     *
     * @param ListPtsSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPtsSceneResponse
     */
    public function listPtsSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPtsScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPtsSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Performance Testing Service (PTS) scenarios by page.
     *
     * @param request - ListPtsSceneRequest
     *
     * @returns ListPtsSceneResponse
     *
     * @param ListPtsSceneRequest $request
     *
     * @return ListPtsSceneResponse
     */
    public function listPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPtsSceneWithOptions($request, $runtime);
    }

    /**
     * 获取vpc配置信息列表.
     *
     * @param request - ListVpcConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcConfigsResponse
     *
     * @param ListVpcConfigsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListVpcConfigsResponse
     */
    public function listVpcConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->configName) {
            @$query['ConfigName'] = $request->configName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVpcConfigs',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVpcConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取vpc配置信息列表.
     *
     * @param request - ListVpcConfigsRequest
     *
     * @returns ListVpcConfigsResponse
     *
     * @param ListVpcConfigsRequest $request
     *
     * @return ListVpcConfigsResponse
     */
    public function listVpcConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcConfigsWithOptions($request, $runtime);
    }

    /**
     * null.
     *
     * @param request - ModifyPtsSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPtsSceneResponse
     *
     * @param ModifyPtsSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyPtsSceneResponse
     */
    public function modifyPtsSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPtsScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPtsSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * null.
     *
     * @param request - ModifyPtsSceneRequest
     *
     * @returns ModifyPtsSceneResponse
     *
     * @param ModifyPtsSceneRequest $request
     *
     * @return ModifyPtsSceneResponse
     */
    public function modifyPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPtsSceneWithOptions($request, $runtime);
    }

    /**
     * Removes the JMeter environment that corresponds to a specific JMeter environment ID.
     *
     * @param request - RemoveEnvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveEnvResponse
     *
     * @param RemoveEnvRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RemoveEnvResponse
     */
    public function removeEnvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->envId) {
            @$query['EnvId'] = $request->envId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveEnv',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveEnvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes the JMeter environment that corresponds to a specific JMeter environment ID.
     *
     * @param request - RemoveEnvRequest
     *
     * @returns RemoveEnvResponse
     *
     * @param RemoveEnvRequest $request
     *
     * @return RemoveEnvResponse
     */
    public function removeEnv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeEnvWithOptions($request, $runtime);
    }

    /**
     * Removes a JMeter scenario.
     *
     * @param request - RemoveOpenJMeterSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveOpenJMeterSceneResponse
     *
     * @param RemoveOpenJMeterSceneRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveOpenJMeterSceneResponse
     */
    public function removeOpenJMeterSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveOpenJMeterScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveOpenJMeterSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a JMeter scenario.
     *
     * @param request - RemoveOpenJMeterSceneRequest
     *
     * @returns RemoveOpenJMeterSceneResponse
     *
     * @param RemoveOpenJMeterSceneRequest $request
     *
     * @return RemoveOpenJMeterSceneResponse
     */
    public function removeOpenJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeOpenJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * Creates or updates a JMeter environment.
     *
     * @param tmpReq - SaveEnvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveEnvResponse
     *
     * @param SaveEnvRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return SaveEnvResponse
     */
    public function saveEnvWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SaveEnvShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->env) {
            $request->envShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->env, 'Env', 'json');
        }

        $query = [];
        if (null !== $request->envShrink) {
            @$query['Env'] = $request->envShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveEnv',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveEnvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or updates a JMeter environment.
     *
     * @param request - SaveEnvRequest
     *
     * @returns SaveEnvResponse
     *
     * @param SaveEnvRequest $request
     *
     * @return SaveEnvResponse
     */
    public function saveEnv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveEnvWithOptions($request, $runtime);
    }

    /**
     * Creates or updates a JMeter scenario.
     *
     * @param tmpReq - SaveOpenJMeterSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveOpenJMeterSceneResponse
     *
     * @param SaveOpenJMeterSceneRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return SaveOpenJMeterSceneResponse
     */
    public function saveOpenJMeterSceneWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SaveOpenJMeterSceneShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->openJMeterScene) {
            $request->openJMeterSceneShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->openJMeterScene, 'OpenJMeterScene', 'json');
        }

        $query = [];
        if (null !== $request->openJMeterSceneShrink) {
            @$query['OpenJMeterScene'] = $request->openJMeterSceneShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveOpenJMeterScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveOpenJMeterSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or updates a JMeter scenario.
     *
     * @param request - SaveOpenJMeterSceneRequest
     *
     * @returns SaveOpenJMeterSceneResponse
     *
     * @param SaveOpenJMeterSceneRequest $request
     *
     * @return SaveOpenJMeterSceneResponse
     */
    public function saveOpenJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveOpenJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * Saves or modifies a Performance Testing Service (PTS) scenario.
     *
     * @param tmpReq - SavePtsSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SavePtsSceneResponse
     *
     * @param SavePtsSceneRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return SavePtsSceneResponse
     */
    public function savePtsSceneWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SavePtsSceneShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->scene) {
            $request->sceneShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scene, 'Scene', 'json');
        }

        $query = [];
        if (null !== $request->sceneShrink) {
            @$query['Scene'] = $request->sceneShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SavePtsScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SavePtsSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Saves or modifies a Performance Testing Service (PTS) scenario.
     *
     * @param request - SavePtsSceneRequest
     *
     * @returns SavePtsSceneResponse
     *
     * @param SavePtsSceneRequest $request
     *
     * @return SavePtsSceneResponse
     */
    public function savePtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->savePtsSceneWithOptions($request, $runtime);
    }

    /**
     * Starts the debugging of a scenario to check whether the settings of the scenario take effect.
     *
     * @param request - StartDebugPtsSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDebugPtsSceneResponse
     *
     * @param StartDebugPtsSceneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartDebugPtsSceneResponse
     */
    public function startDebugPtsSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDebugPtsScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDebugPtsSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts the debugging of a scenario to check whether the settings of the scenario take effect.
     *
     * @param request - StartDebugPtsSceneRequest
     *
     * @returns StartDebugPtsSceneResponse
     *
     * @param StartDebugPtsSceneRequest $request
     *
     * @return StartDebugPtsSceneResponse
     */
    public function startDebugPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDebugPtsSceneWithOptions($request, $runtime);
    }

    /**
     * Debugs a JMeter scenario.
     *
     * @param request - StartDebuggingJMeterSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDebuggingJMeterSceneResponse
     *
     * @param StartDebuggingJMeterSceneRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartDebuggingJMeterSceneResponse
     */
    public function startDebuggingJMeterSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDebuggingJMeterScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDebuggingJMeterSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Debugs a JMeter scenario.
     *
     * @param request - StartDebuggingJMeterSceneRequest
     *
     * @returns StartDebuggingJMeterSceneResponse
     *
     * @param StartDebuggingJMeterSceneRequest $request
     *
     * @return StartDebuggingJMeterSceneResponse
     */
    public function startDebuggingJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDebuggingJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * Starts a scenario by using its ID.
     *
     * @param request - StartPtsSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartPtsSceneResponse
     *
     * @param StartPtsSceneRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartPtsSceneResponse
     */
    public function startPtsSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartPtsScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartPtsSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a scenario by using its ID.
     *
     * @param request - StartPtsSceneRequest
     *
     * @returns StartPtsSceneResponse
     *
     * @param StartPtsSceneRequest $request
     *
     * @return StartPtsSceneResponse
     */
    public function startPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startPtsSceneWithOptions($request, $runtime);
    }

    /**
     * Starts performance testing in a JMeter scenario.
     *
     * @param request - StartTestingJMeterSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartTestingJMeterSceneResponse
     *
     * @param StartTestingJMeterSceneRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return StartTestingJMeterSceneResponse
     */
    public function startTestingJMeterSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartTestingJMeterScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartTestingJMeterSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts performance testing in a JMeter scenario.
     *
     * @param request - StartTestingJMeterSceneRequest
     *
     * @returns StartTestingJMeterSceneResponse
     *
     * @param StartTestingJMeterSceneRequest $request
     *
     * @return StartTestingJMeterSceneResponse
     */
    public function startTestingJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTestingJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * Stops the scenario that is in debugging.
     *
     * @param request - StopDebugPtsSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDebugPtsSceneResponse
     *
     * @param StopDebugPtsSceneRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StopDebugPtsSceneResponse
     */
    public function stopDebugPtsSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDebugPtsScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDebugPtsSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops the scenario that is in debugging.
     *
     * @param request - StopDebugPtsSceneRequest
     *
     * @returns StopDebugPtsSceneResponse
     *
     * @param StopDebugPtsSceneRequest $request
     *
     * @return StopDebugPtsSceneResponse
     */
    public function stopDebugPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDebugPtsSceneWithOptions($request, $runtime);
    }

    /**
     * Stops the debugging of a JMeter scenario.
     *
     * @param request - StopDebuggingJMeterSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDebuggingJMeterSceneResponse
     *
     * @param StopDebuggingJMeterSceneRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return StopDebuggingJMeterSceneResponse
     */
    public function stopDebuggingJMeterSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDebuggingJMeterScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDebuggingJMeterSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops the debugging of a JMeter scenario.
     *
     * @param request - StopDebuggingJMeterSceneRequest
     *
     * @returns StopDebuggingJMeterSceneResponse
     *
     * @param StopDebuggingJMeterSceneRequest $request
     *
     * @return StopDebuggingJMeterSceneResponse
     */
    public function stopDebuggingJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDebuggingJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * Stops a scenario by using its ID.
     *
     * @param request - StopPtsSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopPtsSceneResponse
     *
     * @param StopPtsSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopPtsSceneResponse
     */
    public function stopPtsSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopPtsScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopPtsSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a scenario by using its ID.
     *
     * @param request - StopPtsSceneRequest
     *
     * @returns StopPtsSceneResponse
     *
     * @param StopPtsSceneRequest $request
     *
     * @return StopPtsSceneResponse
     */
    public function stopPtsScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopPtsSceneWithOptions($request, $runtime);
    }

    /**
     * Stops performance testing by using a JMeter scenario.
     *
     * @param request - StopTestingJMeterSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTestingJMeterSceneResponse
     *
     * @param StopTestingJMeterSceneRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return StopTestingJMeterSceneResponse
     */
    public function stopTestingJMeterSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopTestingJMeterScene',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopTestingJMeterSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops performance testing by using a JMeter scenario.
     *
     * @param request - StopTestingJMeterSceneRequest
     *
     * @returns StopTestingJMeterSceneResponse
     *
     * @param StopTestingJMeterSceneRequest $request
     *
     * @return StopTestingJMeterSceneResponse
     */
    public function stopTestingJMeterScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTestingJMeterSceneWithOptions($request, $runtime);
    }

    /**
     * null.
     *
     * @param tmpReq - UpdatePtsSceneBaseLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePtsSceneBaseLineResponse
     *
     * @param UpdatePtsSceneBaseLineRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdatePtsSceneBaseLineResponse
     */
    public function updatePtsSceneBaseLineWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePtsSceneBaseLineShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->apiBaselines) {
            $request->apiBaselinesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->apiBaselines, 'ApiBaselines', 'json');
        }

        if (null !== $tmpReq->sceneBaseline) {
            $request->sceneBaselineShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sceneBaseline, 'SceneBaseline', 'json');
        }

        $query = [];
        if (null !== $request->apiBaselinesShrink) {
            @$query['ApiBaselines'] = $request->apiBaselinesShrink;
        }

        if (null !== $request->sceneBaselineShrink) {
            @$query['SceneBaseline'] = $request->sceneBaselineShrink;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePtsSceneBaseLine',
            'version' => '2020-10-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePtsSceneBaseLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * null.
     *
     * @param request - UpdatePtsSceneBaseLineRequest
     *
     * @returns UpdatePtsSceneBaseLineResponse
     *
     * @param UpdatePtsSceneBaseLineRequest $request
     *
     * @return UpdatePtsSceneBaseLineResponse
     */
    public function updatePtsSceneBaseLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePtsSceneBaseLineWithOptions($request, $runtime);
    }
}
