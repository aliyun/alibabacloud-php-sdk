<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateChatMediaUrlRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateChatMediaUrlResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateCorpNumberGroupRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateCorpNumberGroupResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateDemoInstanceRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\CreateDemoInstanceResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetAccessChannelOfStagingRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetAccessChannelOfStagingResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetCampaignRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetCampaignResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetDocumentRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetDocumentResponse;
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
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListFlashSmsSettingsRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListFlashSmsSettingsResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListFlashSmsSettingsShrinkRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListHistoricalAgentSkillGroupReportRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListHistoricalAgentSkillGroupReportResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListIntervalAgentSkillGroupReportRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListIntervalAgentSkillGroupReportResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListMonoRecordingsRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListMonoRecordingsResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\PauseCampaignRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\PauseCampaignResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ProcessAliMeCallbackOfStagingRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ProcessAliMeCallbackOfStagingResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ProcessCustomIMCallbackRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ProcessCustomIMCallbackResponse;
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
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\SendNotificationRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\SendNotificationResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\SubmitCampaignRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\SubmitCampaignResponse;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\UnregisterDeviceRequest;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\UnregisterDeviceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * abort campaign.
     *
     * @param request - AbortCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AbortCampaignResponse
     *
     * @param AbortCampaignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AbortCampaignResponse
     */
    public function abortCampaignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AbortCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AbortCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * abort campaign.
     *
     * @param request - AbortCampaignRequest
     *
     * @returns AbortCampaignResponse
     *
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
     * abort cases.
     *
     * @param tmpReq - AbortCasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AbortCasesResponse
     *
     * @param AbortCasesRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return AbortCasesResponse
     */
    public function abortCasesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AbortCasesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->phoneNumberList) {
            $request->phoneNumberListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->phoneNumberList, 'PhoneNumberList', 'json');
        }

        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phoneNumberListShrink) {
            @$query['PhoneNumberList'] = $request->phoneNumberListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AbortCases',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AbortCasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * abort cases.
     *
     * @param request - AbortCasesRequest
     *
     * @returns AbortCasesResponse
     *
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
     * @param request - CheckDemoInstanceExistsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDemoInstanceExistsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return CheckDemoInstanceExistsResponse
     */
    public function checkDemoInstanceExistsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'CheckDemoInstanceExists',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDemoInstanceExistsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns CheckDemoInstanceExistsResponse
     *
     * @return CheckDemoInstanceExistsResponse
     */
    public function checkDemoInstanceExists()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDemoInstanceExistsWithOptions($runtime);
    }

    /**
     * @param request - CheckMQRoleAssumptionAuthorityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckMQRoleAssumptionAuthorityResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return CheckMQRoleAssumptionAuthorityResponse
     */
    public function checkMQRoleAssumptionAuthorityWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'CheckMQRoleAssumptionAuthority',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckMQRoleAssumptionAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns CheckMQRoleAssumptionAuthorityResponse
     *
     * @return CheckMQRoleAssumptionAuthorityResponse
     */
    public function checkMQRoleAssumptionAuthority()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMQRoleAssumptionAuthorityWithOptions($runtime);
    }

    /**
     * create campaign.
     *
     * @param tmpReq - CreateCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCampaignResponse
     *
     * @param CreateCampaignRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCampaignResponse
     */
    public function createCampaignWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCampaignShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->caseList) {
            $request->caseListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->caseList, 'CaseList', 'json');
        }

        if (null !== $tmpReq->numberList) {
            $request->numberListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numberList, 'NumberList', 'json');
        }

        $query = [];
        if (null !== $request->callableTime) {
            @$query['CallableTime'] = $request->callableTime;
        }

        if (null !== $request->caseFileKey) {
            @$query['CaseFileKey'] = $request->caseFileKey;
        }

        if (null !== $request->caseListShrink) {
            @$query['CaseList'] = $request->caseListShrink;
        }

        if (null !== $request->contactFlowId) {
            @$query['ContactFlowId'] = $request->contactFlowId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->executingUntilTimeout) {
            @$query['ExecutingUntilTimeout'] = $request->executingUntilTimeout;
        }

        if (null !== $request->flashSmsParameters) {
            @$query['FlashSmsParameters'] = $request->flashSmsParameters;
        }

        if (null !== $request->instGroupId) {
            @$query['InstGroupId'] = $request->instGroupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxAttemptCount) {
            @$query['MaxAttemptCount'] = $request->maxAttemptCount;
        }

        if (null !== $request->minAttemptInterval) {
            @$query['MinAttemptInterval'] = $request->minAttemptInterval;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->numberListShrink) {
            @$query['NumberList'] = $request->numberListShrink;
        }

        if (null !== $request->queueId) {
            @$query['QueueId'] = $request->queueId;
        }

        if (null !== $request->simulation) {
            @$query['Simulation'] = $request->simulation;
        }

        if (null !== $request->simulationParameters) {
            @$query['SimulationParameters'] = $request->simulationParameters;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->strategyParameters) {
            @$query['StrategyParameters'] = $request->strategyParameters;
        }

        if (null !== $request->strategyType) {
            @$query['StrategyType'] = $request->strategyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * create campaign.
     *
     * @param request - CreateCampaignRequest
     *
     * @returns CreateCampaignResponse
     *
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
     * @param request - CreateChatMediaUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatMediaUrlResponse
     *
     * @param CreateChatMediaUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateChatMediaUrlResponse
     */
    public function createChatMediaUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mimeType) {
            @$body['MimeType'] = $request->mimeType;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChatMediaUrl',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateChatMediaUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateChatMediaUrlRequest
     *
     * @returns CreateChatMediaUrlResponse
     *
     * @param CreateChatMediaUrlRequest $request
     *
     * @return CreateChatMediaUrlResponse
     */
    public function createChatMediaUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChatMediaUrlWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateCorpNumberGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCorpNumberGroupResponse
     *
     * @param CreateCorpNumberGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCorpNumberGroupResponse
     */
    public function createCorpNumberGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCorpNumberGroup',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCorpNumberGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateCorpNumberGroupRequest
     *
     * @returns CreateCorpNumberGroupResponse
     *
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
     * @param request - CreateDemoInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDemoInstanceResponse
     *
     * @param CreateDemoInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDemoInstanceResponse
     */
    public function createDemoInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outboundCallWhitelist) {
            @$query['OutboundCallWhitelist'] = $request->outboundCallWhitelist;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDemoInstance',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDemoInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateDemoInstanceRequest
     *
     * @returns CreateDemoInstanceResponse
     *
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
     * GetAccessChannelOfStaging.
     *
     * @param request - GetAccessChannelOfStagingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessChannelOfStagingResponse
     *
     * @param GetAccessChannelOfStagingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetAccessChannelOfStagingResponse
     */
    public function getAccessChannelOfStagingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessChannelOfStaging',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessChannelOfStagingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetAccessChannelOfStaging.
     *
     * @param request - GetAccessChannelOfStagingRequest
     *
     * @returns GetAccessChannelOfStagingResponse
     *
     * @param GetAccessChannelOfStagingRequest $request
     *
     * @return GetAccessChannelOfStagingResponse
     */
    public function getAccessChannelOfStaging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessChannelOfStagingWithOptions($request, $runtime);
    }

    /**
     * 获取预测式外呼活动.
     *
     * @param request - GetCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCampaignResponse
     *
     * @param GetCampaignRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetCampaignResponse
     */
    public function getCampaignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测式外呼活动.
     *
     * @param request - GetCampaignRequest
     *
     * @returns GetCampaignResponse
     *
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
     * GetDocument.
     *
     * @param request - GetDocumentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentResponse
     *
     * @param GetDocumentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetDocumentResponse
     */
    public function getDocumentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->documentId) {
            @$body['DocumentId'] = $request->documentId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->schemaId) {
            @$body['SchemaId'] = $request->schemaId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocument',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetDocument.
     *
     * @param request - GetDocumentRequest
     *
     * @returns GetDocumentResponse
     *
     * @param GetDocumentRequest $request
     *
     * @return GetDocumentResponse
     */
    public function getDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocumentWithOptions($request, $runtime);
    }

    /**
     * 获取预测式外呼活动历史报表.
     *
     * @param request - GetHistoricalCampaignReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHistoricalCampaignReportResponse
     *
     * @param GetHistoricalCampaignReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHistoricalCampaignReportResponse
     */
    public function getHistoricalCampaignReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHistoricalCampaignReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHistoricalCampaignReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测式外呼活动历史报表.
     *
     * @param request - GetHistoricalCampaignReportRequest
     *
     * @returns GetHistoricalCampaignReportResponse
     *
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
     * 根据aliyunuid获取实例.
     *
     * @param request - GetInstanceIdsByAliyunUidV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceIdsByAliyunUidV2Response
     *
     * @param GetInstanceIdsByAliyunUidV2Request $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetInstanceIdsByAliyunUidV2Response
     */
    public function getInstanceIdsByAliyunUidV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunUid) {
            @$query['AliyunUid'] = $request->aliyunUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceIdsByAliyunUidV2',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceIdsByAliyunUidV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据aliyunuid获取实例.
     *
     * @param request - GetInstanceIdsByAliyunUidV2Request
     *
     * @returns GetInstanceIdsByAliyunUidV2Response
     *
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
     * 获取预测式外呼实时状态
     *
     * @param request - GetRealtimeCampaignStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRealtimeCampaignStatsResponse
     *
     * @param GetRealtimeCampaignStatsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRealtimeCampaignStatsResponse
     */
    public function getRealtimeCampaignStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRealtimeCampaignStats',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRealtimeCampaignStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测式外呼实时状态
     *
     * @param request - GetRealtimeCampaignStatsRequest
     *
     * @returns GetRealtimeCampaignStatsResponse
     *
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
     * @param request - ImportAdminsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportAdminsResponse
     *
     * @param ImportAdminsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ImportAdminsResponse
     */
    public function importAdminsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ramIdList) {
            @$query['RamIdList'] = $request->ramIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportAdmins',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportAdminsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ImportAdminsRequest
     *
     * @returns ImportAdminsResponse
     *
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
     * @param request - IssueSoftphoneCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IssueSoftphoneCommandResponse
     *
     * @param IssueSoftphoneCommandRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return IssueSoftphoneCommandResponse
     */
    public function issueSoftphoneCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IssueSoftphoneCommand',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IssueSoftphoneCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - IssueSoftphoneCommandRequest
     *
     * @returns IssueSoftphoneCommandResponse
     *
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
     * 获取预测式外呼呼叫记录.
     *
     * @param request - ListAttemptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAttemptsResponse
     *
     * @param ListAttemptsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAttemptsResponse
     */
    public function listAttemptsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAttempts',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAttemptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测式外呼呼叫记录.
     *
     * @param request - ListAttemptsRequest
     *
     * @returns ListAttemptsResponse
     *
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
     * 获取预测式外呼活动趋势报表.
     *
     * @param request - ListCampaignTrendingReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCampaignTrendingReportResponse
     *
     * @param ListCampaignTrendingReportRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListCampaignTrendingReportResponse
     */
    public function listCampaignTrendingReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCampaignTrendingReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCampaignTrendingReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预测式外呼活动趋势报表.
     *
     * @param request - ListCampaignTrendingReportRequest
     *
     * @returns ListCampaignTrendingReportResponse
     *
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
     * 查询预测式外呼列表.
     *
     * @param request - ListCampaignsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCampaignsResponse
     *
     * @param ListCampaignsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListCampaignsResponse
     */
    public function listCampaignsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actualStartTimeFrom) {
            @$query['ActualStartTimeFrom'] = $request->actualStartTimeFrom;
        }

        if (null !== $request->actualStartTimeTo) {
            @$query['ActualStartTimeTo'] = $request->actualStartTimeTo;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->planedStartTimeFrom) {
            @$query['PlanedStartTimeFrom'] = $request->planedStartTimeFrom;
        }

        if (null !== $request->planedStartTimeTo) {
            @$query['PlanedStartTimeTo'] = $request->planedStartTimeTo;
        }

        if (null !== $request->queueId) {
            @$query['QueueId'] = $request->queueId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCampaigns',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCampaignsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询预测式外呼列表.
     *
     * @param request - ListCampaignsRequest
     *
     * @returns ListCampaignsResponse
     *
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
     * list case.
     *
     * @param request - ListCasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCasesResponse
     *
     * @param ListCasesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListCasesResponse
     */
    public function listCasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCases',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list case.
     *
     * @param request - ListCasesRequest
     *
     * @returns ListCasesResponse
     *
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
     * @param tmpReq - ListFlashSmsSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlashSmsSettingsResponse
     *
     * @param ListFlashSmsSettingsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListFlashSmsSettingsResponse
     */
    public function listFlashSmsSettingsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListFlashSmsSettingsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->skillGroupIdList) {
            $request->skillGroupIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->skillGroupIdList, 'SkillGroupIdList', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroupIdListShrink) {
            @$query['SkillGroupIdList'] = $request->skillGroupIdListShrink;
        }

        if (null !== $request->skillGroupName) {
            @$query['SkillGroupName'] = $request->skillGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFlashSmsSettings',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlashSmsSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListFlashSmsSettingsRequest
     *
     * @returns ListFlashSmsSettingsResponse
     *
     * @param ListFlashSmsSettingsRequest $request
     *
     * @return ListFlashSmsSettingsResponse
     */
    public function listFlashSmsSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlashSmsSettingsWithOptions($request, $runtime);
    }

    /**
     * 查询坐席技能组报表.
     *
     * @param request - ListHistoricalAgentSkillGroupReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHistoricalAgentSkillGroupReportResponse
     *
     * @param ListHistoricalAgentSkillGroupReportRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListHistoricalAgentSkillGroupReportResponse
     */
    public function listHistoricalAgentSkillGroupReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroupIdList) {
            @$query['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $body = [];
        if (null !== $request->agentIdList) {
            @$body['AgentIdList'] = $request->agentIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListHistoricalAgentSkillGroupReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHistoricalAgentSkillGroupReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询坐席技能组报表.
     *
     * @param request - ListHistoricalAgentSkillGroupReportRequest
     *
     * @returns ListHistoricalAgentSkillGroupReportResponse
     *
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
     * 查询坐席技能组报表.
     *
     * @param request - ListIntervalAgentSkillGroupReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntervalAgentSkillGroupReportResponse
     *
     * @param ListIntervalAgentSkillGroupReportRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListIntervalAgentSkillGroupReportResponse
     */
    public function listIntervalAgentSkillGroupReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->showDefaultIfEmpty) {
            @$query['ShowDefaultIfEmpty'] = $request->showDefaultIfEmpty;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntervalAgentSkillGroupReport',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIntervalAgentSkillGroupReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询坐席技能组报表.
     *
     * @param request - ListIntervalAgentSkillGroupReportRequest
     *
     * @returns ListIntervalAgentSkillGroupReportResponse
     *
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
     * 录音查询.
     *
     * @param request - ListMonoRecordingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMonoRecordingsResponse
     *
     * @param ListMonoRecordingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListMonoRecordingsResponse
     */
    public function listMonoRecordingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMonoRecordings',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMonoRecordingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 录音查询.
     *
     * @param request - ListMonoRecordingsRequest
     *
     * @returns ListMonoRecordingsResponse
     *
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
     * 暂停预测式外呼
     *
     * @param request - PauseCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseCampaignResponse
     *
     * @param PauseCampaignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PauseCampaignResponse
     */
    public function pauseCampaignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PauseCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PauseCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 暂停预测式外呼
     *
     * @param request - PauseCampaignRequest
     *
     * @returns PauseCampaignResponse
     *
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
     * ProcessAliMeCallbackOfStaging.
     *
     * @param request - ProcessAliMeCallbackOfStagingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProcessAliMeCallbackOfStagingResponse
     *
     * @param ProcessAliMeCallbackOfStagingRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ProcessAliMeCallbackOfStagingResponse
     */
    public function processAliMeCallbackOfStagingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ProcessAliMeCallbackOfStaging',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProcessAliMeCallbackOfStagingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ProcessAliMeCallbackOfStaging.
     *
     * @param request - ProcessAliMeCallbackOfStagingRequest
     *
     * @returns ProcessAliMeCallbackOfStagingResponse
     *
     * @param ProcessAliMeCallbackOfStagingRequest $request
     *
     * @return ProcessAliMeCallbackOfStagingResponse
     */
    public function processAliMeCallbackOfStaging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processAliMeCallbackOfStagingWithOptions($request, $runtime);
    }

    /**
     * @param request - ProcessCustomIMCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProcessCustomIMCallbackResponse
     *
     * @param ProcessCustomIMCallbackRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ProcessCustomIMCallbackResponse
     */
    public function processCustomIMCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessChannelId) {
            @$body['AccessChannelId'] = $request->accessChannelId;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->messageContent) {
            @$body['MessageContent'] = $request->messageContent;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->senderAvatarMediaId) {
            @$body['SenderAvatarMediaId'] = $request->senderAvatarMediaId;
        }

        if (null !== $request->senderId) {
            @$body['SenderId'] = $request->senderId;
        }

        if (null !== $request->senderName) {
            @$body['SenderName'] = $request->senderName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ProcessCustomIMCallback',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProcessCustomIMCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ProcessCustomIMCallbackRequest
     *
     * @returns ProcessCustomIMCallbackResponse
     *
     * @param ProcessCustomIMCallbackRequest $request
     *
     * @return ProcessCustomIMCallbackResponse
     */
    public function processCustomIMCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processCustomIMCallbackWithOptions($request, $runtime);
    }

    /**
     * ccc migration.
     *
     * @param request - ReplaceMigrationAvailableNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReplaceMigrationAvailableNumbersResponse
     *
     * @param ReplaceMigrationAvailableNumbersRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ReplaceMigrationAvailableNumbersResponse
     */
    public function replaceMigrationAvailableNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->operatorName) {
            @$query['OperatorName'] = $request->operatorName;
        }

        if (null !== $request->operatorUid) {
            @$query['OperatorUid'] = $request->operatorUid;
        }

        if (null !== $request->v1Numbers) {
            @$query['V1Numbers'] = $request->v1Numbers;
        }

        if (null !== $request->v2Numbers) {
            @$query['V2Numbers'] = $request->v2Numbers;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReplaceMigrationAvailableNumbers',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReplaceMigrationAvailableNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ccc migration.
     *
     * @param request - ReplaceMigrationAvailableNumbersRequest
     *
     * @returns ReplaceMigrationAvailableNumbersResponse
     *
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
     * resume campaign.
     *
     * @param request - ResumeCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeCampaignResponse
     *
     * @param ResumeCampaignRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeCampaignResponse
     */
    public function resumeCampaignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * resume campaign.
     *
     * @param request - ResumeCampaignRequest
     *
     * @returns ResumeCampaignResponse
     *
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
     * @param request - SaveRTCStatsV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveRTCStatsV2Response
     *
     * @param SaveRTCStatsV2Request $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveRTCStatsV2Response
     */
    public function saveRTCStatsV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->generalInfo) {
            @$query['GeneralInfo'] = $request->generalInfo;
        }

        if (null !== $request->googAddress) {
            @$query['GoogAddress'] = $request->googAddress;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->receiverReport) {
            @$query['ReceiverReport'] = $request->receiverReport;
        }

        if (null !== $request->senderReport) {
            @$query['SenderReport'] = $request->senderReport;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveRTCStatsV2',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveRTCStatsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveRTCStatsV2Request
     *
     * @returns SaveRTCStatsV2Response
     *
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
     * -.
     *
     * @param request - SaveTerminalLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveTerminalLogResponse
     *
     * @param SaveTerminalLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SaveTerminalLogResponse
     */
    public function saveTerminalLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->methodName) {
            @$query['MethodName'] = $request->methodName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->uniqueRequestId) {
            @$query['UniqueRequestId'] = $request->uniqueRequestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveTerminalLog',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveTerminalLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * -.
     *
     * @param request - SaveTerminalLogRequest
     *
     * @returns SaveTerminalLogResponse
     *
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
     * -.
     *
     * @param request - SaveWebRtcInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveWebRtcInfoResponse
     *
     * @param SaveWebRtcInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveWebRtcInfoResponse
     */
    public function saveWebRtcInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->contentType) {
            @$query['ContentType'] = $request->contentType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveWebRtcInfo',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveWebRtcInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * -.
     *
     * @param request - SaveWebRtcInfoRequest
     *
     * @returns SaveWebRtcInfoResponse
     *
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
     * 推送消息.
     *
     * @param request - SendNotificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendNotificationResponse
     *
     * @param SendNotificationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SendNotificationResponse
     */
    public function sendNotificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->messageBody) {
            @$query['MessageBody'] = $request->messageBody;
        }

        if (null !== $request->notificationTarget) {
            @$query['NotificationTarget'] = $request->notificationTarget;
        }

        if (null !== $request->notificationType) {
            @$query['NotificationType'] = $request->notificationType;
        }

        if (null !== $request->shardingKey) {
            @$query['ShardingKey'] = $request->shardingKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendNotification',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送消息.
     *
     * @param request - SendNotificationRequest
     *
     * @returns SendNotificationResponse
     *
     * @param SendNotificationRequest $request
     *
     * @return SendNotificationResponse
     */
    public function sendNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendNotificationWithOptions($request, $runtime);
    }

    /**
     * submit campaign.
     *
     * @param request - SubmitCampaignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitCampaignResponse
     *
     * @param SubmitCampaignRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitCampaignResponse
     */
    public function submitCampaignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitCampaign',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitCampaignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * submit campaign.
     *
     * @param request - SubmitCampaignRequest
     *
     * @returns SubmitCampaignResponse
     *
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
     * 删除注册设备.
     *
     * @param request - UnregisterDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnregisterDeviceResponse
     *
     * @param UnregisterDeviceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UnregisterDeviceResponse
     */
    public function unregisterDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnregisterDevice',
            'version' => '2020-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnregisterDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除注册设备.
     *
     * @param request - UnregisterDeviceRequest
     *
     * @returns UnregisterDeviceResponse
     *
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
