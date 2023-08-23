<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\AbortCampaignRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\AbortCampaignResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\AbortCasesRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\AbortCasesResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\AbortCasesShrinkRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CheckDemoInstanceExistsResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CheckMQRoleAssumptionAuthorityResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateCampaignRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateCampaignResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateCampaignShrinkRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateCorpNumberGroupRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateCorpNumberGroupResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateDemoInstanceRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateDemoInstanceResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetCampaignRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetCampaignResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetHistoricalCampaignReportRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetHistoricalCampaignReportResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetInstanceIdsByAliyunUidV2Request;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetInstanceIdsByAliyunUidV2Response;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetRealtimeCampaignStatsRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetRealtimeCampaignStatsResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ImportAdminsRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ImportAdminsResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\IssueSoftphoneCommandRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\IssueSoftphoneCommandResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListAttemptsRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListAttemptsResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListCampaignsRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListCampaignsResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListCampaignTrendingReportRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListCampaignTrendingReportResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListCasesRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListCasesResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListHistoricalAgentSkillGroupReportRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListHistoricalAgentSkillGroupReportResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListIntervalAgentSkillGroupReportRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListIntervalAgentSkillGroupReportResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListMonoRecordingsRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListMonoRecordingsResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\PauseCampaignRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\PauseCampaignResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ReplaceMigrationAvailableNumbersRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ReplaceMigrationAvailableNumbersResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ResumeCampaignRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ResumeCampaignResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\SaveRTCStatsV2Request;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\SaveRTCStatsV2Response;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\SaveTerminalLogRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\SaveTerminalLogResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\SaveWebRtcInfoRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\SaveWebRtcInfoResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\SubmitCampaignRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\SubmitCampaignResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\UnregisterDeviceRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\UnregisterDeviceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class CloudCallCenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudcallcenter', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AbortCampaignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AbortCampaignResponse
     */
    public function abortCampaignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbortCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AbortCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AbortCampaignRequest $request
     *
     * @return AbortCampaignResponse
     */
    public function abortCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abortCampaignWithOptions($request, $runtime);
    }

    /**
     * @param AbortCasesRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return AbortCasesResponse
     */
    public function abortCasesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AbortCasesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->phoneNumberList)) {
            $request->phoneNumberListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->phoneNumberList, 'PhoneNumberList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->phoneNumberListShrink)) {
            $query['PhoneNumberList'] = $request->phoneNumberListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbortCases',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AbortCasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AbortCasesRequest $request
     *
     * @return AbortCasesResponse
     */
    public function abortCases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abortCasesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return CheckDemoInstanceExistsResponse
     */
    public function checkDemoInstanceExistsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'CheckDemoInstanceExists',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDemoInstanceExistsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CheckDemoInstanceExistsResponse
     */
    public function checkDemoInstanceExists()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDemoInstanceExistsWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return CheckMQRoleAssumptionAuthorityResponse
     */
    public function checkMQRoleAssumptionAuthorityWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'CheckMQRoleAssumptionAuthority',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckMQRoleAssumptionAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CheckMQRoleAssumptionAuthorityResponse
     */
    public function checkMQRoleAssumptionAuthority()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMQRoleAssumptionAuthorityWithOptions($runtime);
    }

    /**
     * @param CreateCampaignRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCampaignResponse
     */
    public function createCampaignWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCampaignShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->caseList)) {
            $request->caseListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->caseList, 'CaseList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->callableTime)) {
            $query['CallableTime'] = $request->callableTime;
        }
        if (!Utils::isUnset($request->caseFileKey)) {
            $query['CaseFileKey'] = $request->caseFileKey;
        }
        if (!Utils::isUnset($request->caseListShrink)) {
            $query['CaseList'] = $request->caseListShrink;
        }
        if (!Utils::isUnset($request->contactFlowId)) {
            $query['ContactFlowId'] = $request->contactFlowId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executingUntilTimeout)) {
            $query['ExecutingUntilTimeout'] = $request->executingUntilTimeout;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxAttemptCount)) {
            $query['MaxAttemptCount'] = $request->maxAttemptCount;
        }
        if (!Utils::isUnset($request->minAttemptInterval)) {
            $query['MinAttemptInterval'] = $request->minAttemptInterval;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->queueId)) {
            $query['QueueId'] = $request->queueId;
        }
        if (!Utils::isUnset($request->simulation)) {
            $query['Simulation'] = $request->simulation;
        }
        if (!Utils::isUnset($request->simulationParameters)) {
            $query['SimulationParameters'] = $request->simulationParameters;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->strategyParameters)) {
            $query['StrategyParameters'] = $request->strategyParameters;
        }
        if (!Utils::isUnset($request->strategyType)) {
            $query['StrategyType'] = $request->strategyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCampaignRequest $request
     *
     * @return CreateCampaignResponse
     */
    public function createCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCampaignWithOptions($request, $runtime);
    }

    /**
     * @param CreateCorpNumberGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCorpNumberGroupResponse
     */
    public function createCorpNumberGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCorpNumberGroup',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCorpNumberGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCorpNumberGroupRequest $request
     *
     * @return CreateCorpNumberGroupResponse
     */
    public function createCorpNumberGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCorpNumberGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateDemoInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDemoInstanceResponse
     */
    public function createDemoInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outboundCallWhitelist)) {
            $query['OutboundCallWhitelist'] = $request->outboundCallWhitelist;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDemoInstance',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDemoInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDemoInstanceRequest $request
     *
     * @return CreateDemoInstanceResponse
     */
    public function createDemoInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDemoInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetCampaignRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetCampaignResponse
     */
    public function getCampaignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCampaignRequest $request
     *
     * @return GetCampaignResponse
     */
    public function getCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCampaignWithOptions($request, $runtime);
    }

    /**
     * @param GetHistoricalCampaignReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHistoricalCampaignReportResponse
     */
    public function getHistoricalCampaignReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHistoricalCampaignReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHistoricalCampaignReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHistoricalCampaignReportRequest $request
     *
     * @return GetHistoricalCampaignReportResponse
     */
    public function getHistoricalCampaignReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistoricalCampaignReportWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceIdsByAliyunUidV2Request $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetInstanceIdsByAliyunUidV2Response
     */
    public function getInstanceIdsByAliyunUidV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunUid)) {
            $query['AliyunUid'] = $request->aliyunUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceIdsByAliyunUidV2',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceIdsByAliyunUidV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceIdsByAliyunUidV2Request $request
     *
     * @return GetInstanceIdsByAliyunUidV2Response
     */
    public function getInstanceIdsByAliyunUidV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceIdsByAliyunUidV2WithOptions($request, $runtime);
    }

    /**
     * @param GetRealtimeCampaignStatsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRealtimeCampaignStatsResponse
     */
    public function getRealtimeCampaignStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRealtimeCampaignStats',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRealtimeCampaignStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRealtimeCampaignStatsRequest $request
     *
     * @return GetRealtimeCampaignStatsResponse
     */
    public function getRealtimeCampaignStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealtimeCampaignStatsWithOptions($request, $runtime);
    }

    /**
     * @param ImportAdminsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ImportAdminsResponse
     */
    public function importAdminsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ramIdList)) {
            $query['RamIdList'] = $request->ramIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportAdmins',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportAdminsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportAdminsRequest $request
     *
     * @return ImportAdminsResponse
     */
    public function importAdmins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importAdminsWithOptions($request, $runtime);
    }

    /**
     * @param IssueSoftphoneCommandRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return IssueSoftphoneCommandResponse
     */
    public function issueSoftphoneCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IssueSoftphoneCommand',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IssueSoftphoneCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IssueSoftphoneCommandRequest $request
     *
     * @return IssueSoftphoneCommandResponse
     */
    public function issueSoftphoneCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->issueSoftphoneCommandWithOptions($request, $runtime);
    }

    /**
     * @param ListAttemptsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAttemptsResponse
     */
    public function listAttemptsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAttempts',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAttemptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAttemptsRequest $request
     *
     * @return ListAttemptsResponse
     */
    public function listAttempts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAttemptsWithOptions($request, $runtime);
    }

    /**
     * @param ListCampaignTrendingReportRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListCampaignTrendingReportResponse
     */
    public function listCampaignTrendingReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCampaignTrendingReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCampaignTrendingReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCampaignTrendingReportRequest $request
     *
     * @return ListCampaignTrendingReportResponse
     */
    public function listCampaignTrendingReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCampaignTrendingReportWithOptions($request, $runtime);
    }

    /**
     * @param ListCampaignsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListCampaignsResponse
     */
    public function listCampaignsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actualStartTimeFrom)) {
            $query['ActualStartTimeFrom'] = $request->actualStartTimeFrom;
        }
        if (!Utils::isUnset($request->actualStartTimeTo)) {
            $query['ActualStartTimeTo'] = $request->actualStartTimeTo;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->planedStartTimeFrom)) {
            $query['PlanedStartTimeFrom'] = $request->planedStartTimeFrom;
        }
        if (!Utils::isUnset($request->planedStartTimeTo)) {
            $query['PlanedStartTimeTo'] = $request->planedStartTimeTo;
        }
        if (!Utils::isUnset($request->queueId)) {
            $query['QueueId'] = $request->queueId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCampaigns',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCampaignsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCampaignsRequest $request
     *
     * @return ListCampaignsResponse
     */
    public function listCampaigns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCampaignsWithOptions($request, $runtime);
    }

    /**
     * @param ListCasesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListCasesResponse
     */
    public function listCasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCases',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCasesRequest $request
     *
     * @return ListCasesResponse
     */
    public function listCases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCasesWithOptions($request, $runtime);
    }

    /**
     * @param ListHistoricalAgentSkillGroupReportRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListHistoricalAgentSkillGroupReportResponse
     */
    public function listHistoricalAgentSkillGroupReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->skillGroupIdList)) {
            $query['SkillGroupIdList'] = $request->skillGroupIdList;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $body = [];
        if (!Utils::isUnset($request->agentIdList)) {
            $body['AgentIdList'] = $request->agentIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListHistoricalAgentSkillGroupReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHistoricalAgentSkillGroupReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHistoricalAgentSkillGroupReportRequest $request
     *
     * @return ListHistoricalAgentSkillGroupReportResponse
     */
    public function listHistoricalAgentSkillGroupReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHistoricalAgentSkillGroupReportWithOptions($request, $runtime);
    }

    /**
     * @param ListIntervalAgentSkillGroupReportRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListIntervalAgentSkillGroupReportResponse
     */
    public function listIntervalAgentSkillGroupReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIntervalAgentSkillGroupReport',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIntervalAgentSkillGroupReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIntervalAgentSkillGroupReportRequest $request
     *
     * @return ListIntervalAgentSkillGroupReportResponse
     */
    public function listIntervalAgentSkillGroupReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntervalAgentSkillGroupReportWithOptions($request, $runtime);
    }

    /**
     * @param ListMonoRecordingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListMonoRecordingsResponse
     */
    public function listMonoRecordingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMonoRecordings',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMonoRecordingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMonoRecordingsRequest $request
     *
     * @return ListMonoRecordingsResponse
     */
    public function listMonoRecordings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMonoRecordingsWithOptions($request, $runtime);
    }

    /**
     * @param PauseCampaignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PauseCampaignResponse
     */
    public function pauseCampaignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PauseCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PauseCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PauseCampaignRequest $request
     *
     * @return PauseCampaignResponse
     */
    public function pauseCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseCampaignWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceMigrationAvailableNumbersRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ReplaceMigrationAvailableNumbersResponse
     */
    public function replaceMigrationAvailableNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->operatorName)) {
            $query['OperatorName'] = $request->operatorName;
        }
        if (!Utils::isUnset($request->operatorUid)) {
            $query['OperatorUid'] = $request->operatorUid;
        }
        if (!Utils::isUnset($request->v1Numbers)) {
            $query['V1Numbers'] = $request->v1Numbers;
        }
        if (!Utils::isUnset($request->v2Numbers)) {
            $query['V2Numbers'] = $request->v2Numbers;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReplaceMigrationAvailableNumbers',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReplaceMigrationAvailableNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReplaceMigrationAvailableNumbersRequest $request
     *
     * @return ReplaceMigrationAvailableNumbersResponse
     */
    public function replaceMigrationAvailableNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceMigrationAvailableNumbersWithOptions($request, $runtime);
    }

    /**
     * @param ResumeCampaignRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeCampaignResponse
     */
    public function resumeCampaignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeCampaignRequest $request
     *
     * @return ResumeCampaignResponse
     */
    public function resumeCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeCampaignWithOptions($request, $runtime);
    }

    /**
     * @param SaveRTCStatsV2Request $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveRTCStatsV2Response
     */
    public function saveRTCStatsV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->generalInfo)) {
            $query['GeneralInfo'] = $request->generalInfo;
        }
        if (!Utils::isUnset($request->googAddress)) {
            $query['GoogAddress'] = $request->googAddress;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->receiverReport)) {
            $query['ReceiverReport'] = $request->receiverReport;
        }
        if (!Utils::isUnset($request->senderReport)) {
            $query['SenderReport'] = $request->senderReport;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveRTCStatsV2',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveRTCStatsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveRTCStatsV2Request $request
     *
     * @return SaveRTCStatsV2Response
     */
    public function saveRTCStatsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveRTCStatsV2WithOptions($request, $runtime);
    }

    /**
     * @param SaveTerminalLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SaveTerminalLogResponse
     */
    public function saveTerminalLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->methodName)) {
            $query['MethodName'] = $request->methodName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->uniqueRequestId)) {
            $query['UniqueRequestId'] = $request->uniqueRequestId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveTerminalLog',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTerminalLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveTerminalLogRequest $request
     *
     * @return SaveTerminalLogResponse
     */
    public function saveTerminalLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTerminalLogWithOptions($request, $runtime);
    }

    /**
     * @param SaveWebRtcInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveWebRtcInfoResponse
     */
    public function saveWebRtcInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentType)) {
            $query['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveWebRtcInfo',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveWebRtcInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveWebRtcInfoRequest $request
     *
     * @return SaveWebRtcInfoResponse
     */
    public function saveWebRtcInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveWebRtcInfoWithOptions($request, $runtime);
    }

    /**
     * @param SubmitCampaignRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitCampaignResponse
     */
    public function submitCampaignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->campaignId)) {
            $query['CampaignId'] = $request->campaignId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitCampaign',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitCampaignRequest $request
     *
     * @return SubmitCampaignResponse
     */
    public function submitCampaign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCampaignWithOptions($request, $runtime);
    }

    /**
     * @param UnregisterDeviceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UnregisterDeviceResponse
     */
    public function unregisterDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnregisterDevice',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnregisterDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnregisterDeviceRequest $request
     *
     * @return UnregisterDeviceResponse
     */
    public function unregisterDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unregisterDeviceWithOptions($request, $runtime);
    }
}
