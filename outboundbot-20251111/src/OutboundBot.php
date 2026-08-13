<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\AbortCampaignRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\AbortCampaignResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\AbortCasesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\AbortCasesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\AbortCasesShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\AppendCasesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\AppendCasesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\AppendCasesShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateCampaignRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateCampaignResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateCampaignShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateCloneVoiceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateCloneVoiceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateFlashSmsAccessProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateFlashSmsAccessProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateFlashSmsAccessProfileShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateOutboundCallRestrictionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateOutboundCallRestrictionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateOutboundCallRestrictionShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateScriptVersionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateScriptVersionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateScriptVersionShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateVoiceAccessProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateVoiceAccessProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateVoiceAccessProfileShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteCloneVoiceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteCloneVoiceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteFlashSmsAccessProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteFlashSmsAccessProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteOutboundCallRestrictionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteOutboundCallRestrictionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteOutboundCallRestrictionShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteVoiceAccessProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteVoiceAccessProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DisableSubscriptionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DisableSubscriptionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCampaignRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCampaignResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetScriptProfileTemplateRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetScriptProfileTemplateResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetSubscriptionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetSubscriptionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCampaignsRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCampaignsResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCloneVoiceModelsRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCloneVoiceModelsResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCloneVoicesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCloneVoicesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsAccessProfilesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsAccessProfilesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsProvidersRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsProvidersResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsTemplatesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsTemplatesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListInstancesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListInstancesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListOutboundCallRestrictionsRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListOutboundCallRestrictionsResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListScriptProfileTemplatesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListScriptProfileTemplatesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListScriptsByFlowRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListScriptsByFlowResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListScriptsRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListScriptsResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListScriptsShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListSystemConfigsRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListSystemConfigsResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListVoiceAccessProfilesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListVoiceAccessProfilesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\PauseCampaignRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\PauseCampaignResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\PublishScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\PublishScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ResumeCampaignRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ResumeCampaignResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\SubmitCampaignRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\SubmitCampaignResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateCloneVoiceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateCloneVoiceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateFlashSmsAccessProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateFlashSmsAccessProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateFlashSmsAccessProfileShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateScriptVersionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateScriptVersionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateScriptVersionShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateSubscriptionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateSubscriptionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateSubscriptionShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateSystemConfigsRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateSystemConfigsResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateSystemConfigsShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateVoiceAccessProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateVoiceAccessProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateVoiceAccessProfileShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class OutboundBot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-shanghai' => 'outboundbot.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('outboundbot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Stops an outbound call campaign.
     *
     * @remarks
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
            'version' => '2025-11-11',
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
     * Stops an outbound call campaign.
     *
     * @remarks
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
     * Stops an outbound call case.
     *
     * @remarks
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
        if (null !== $tmpReq->phoneNumbers) {
            $request->phoneNumbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->phoneNumbers, 'PhoneNumbers', 'json');
        }

        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phoneNumbersShrink) {
            @$query['PhoneNumbers'] = $request->phoneNumbersShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AbortCases',
            'version' => '2025-11-11',
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
     * Stops an outbound call case.
     *
     * @remarks
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
     * Appends contacts to an outbound call campaign.
     *
     * @remarks
     *
     * @param tmpReq - AppendCasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AppendCasesResponse
     *
     * @param AppendCasesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return AppendCasesResponse
     */
    public function appendCasesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AppendCasesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cases) {
            $request->casesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cases, 'Cases', 'json');
        }

        $query = [];
        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->casesShrink) {
            @$body['Cases'] = $request->casesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AppendCases',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AppendCasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Appends contacts to an outbound call campaign.
     *
     * @remarks
     *
     * @param request - AppendCasesRequest
     *
     * @returns AppendCasesResponse
     *
     * @param AppendCasesRequest $request
     *
     * @return AppendCasesResponse
     */
    public function appendCases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appendCasesWithOptions($request, $runtime);
    }

    /**
     * Creates an outbound call task.
     *
     * @remarks
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
        if (null !== $tmpReq->cases) {
            $request->casesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cases, 'Cases', 'json');
        }

        if (null !== $tmpReq->numbers) {
            $request->numbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }

        $query = [];
        if (null !== $request->attemptOrder) {
            @$query['AttemptOrder'] = $request->attemptOrder;
        }

        if (null !== $request->callableTime) {
            @$query['CallableTime'] = $request->callableTime;
        }

        if (null !== $request->caseFileKey) {
            @$query['CaseFileKey'] = $request->caseFileKey;
        }

        if (null !== $request->dialingTimeoutSeconds) {
            @$query['DialingTimeoutSeconds'] = $request->dialingTimeoutSeconds;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->fixedQuota) {
            @$query['FixedQuota'] = $request->fixedQuota;
        }

        if (null !== $request->flashSmsParameters) {
            @$query['FlashSmsParameters'] = $request->flashSmsParameters;
        }

        if (null !== $request->holidayRestricted) {
            @$query['HolidayRestricted'] = $request->holidayRestricted;
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

        if (null !== $request->numbersShrink) {
            @$query['Numbers'] = $request->numbersShrink;
        }

        if (null !== $request->redialRestrictions) {
            @$query['RedialRestrictions'] = $request->redialRestrictions;
        }

        if (null !== $request->runUntilEndTime) {
            @$query['RunUntilEndTime'] = $request->runUntilEndTime;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->weight) {
            @$query['Weight'] = $request->weight;
        }

        $body = [];
        if (null !== $request->casesShrink) {
            @$body['Cases'] = $request->casesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCampaign',
            'version' => '2025-11-11',
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
     * Creates an outbound call task.
     *
     * @remarks
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
     * Creates an instance.
     *
     * @param request - CreateCloneVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloneVoiceResponse
     *
     * @param CreateCloneVoiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCloneVoiceResponse
     */
    public function createCloneVoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileKey) {
            @$body['FileKey'] = $request->fileKey;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCloneVoice',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloneVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance.
     *
     * @param request - CreateCloneVoiceRequest
     *
     * @returns CreateCloneVoiceResponse
     *
     * @param CreateCloneVoiceRequest $request
     *
     * @return CreateCloneVoiceResponse
     */
    public function createCloneVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloneVoiceWithOptions($request, $runtime);
    }

    /**
     * Creates a flash message configuration.
     *
     * @param tmpReq - CreateFlashSmsAccessProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlashSmsAccessProfileResponse
     *
     * @param CreateFlashSmsAccessProfileRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateFlashSmsAccessProfileResponse
     */
    public function createFlashSmsAccessProfileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFlashSmsAccessProfileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accessProfile) {
            $request->accessProfileShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accessProfile, 'AccessProfile', 'json');
        }

        $body = [];
        if (null !== $request->accessProfileShrink) {
            @$body['AccessProfile'] = $request->accessProfileShrink;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->providerId) {
            @$body['ProviderId'] = $request->providerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFlashSmsAccessProfile',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFlashSmsAccessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a flash message configuration.
     *
     * @param request - CreateFlashSmsAccessProfileRequest
     *
     * @returns CreateFlashSmsAccessProfileResponse
     *
     * @param CreateFlashSmsAccessProfileRequest $request
     *
     * @return CreateFlashSmsAccessProfileResponse
     */
    public function createFlashSmsAccessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlashSmsAccessProfileWithOptions($request, $runtime);
    }

    /**
     * Creates an instance.
     *
     * @param request - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->concurrency) {
            @$body['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->serviceMode) {
            @$body['ServiceMode'] = $request->serviceMode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates an instance.
     *
     * @param tmpReq - CreateOutboundCallRestrictionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOutboundCallRestrictionResponse
     *
     * @param CreateOutboundCallRestrictionRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateOutboundCallRestrictionResponse
     */
    public function createOutboundCallRestrictionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOutboundCallRestrictionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->outboundCallRestriction) {
            $request->outboundCallRestrictionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outboundCallRestriction, 'OutboundCallRestriction', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->outboundCallRestrictionShrink) {
            @$body['OutboundCallRestriction'] = $request->outboundCallRestrictionShrink;
        }

        if (null !== $request->policy) {
            @$body['Policy'] = $request->policy;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOutboundCallRestriction',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOutboundCallRestrictionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance.
     *
     * @param request - CreateOutboundCallRestrictionRequest
     *
     * @returns CreateOutboundCallRestrictionResponse
     *
     * @param CreateOutboundCallRestrictionRequest $request
     *
     * @return CreateOutboundCallRestrictionResponse
     */
    public function createOutboundCallRestriction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOutboundCallRestrictionWithOptions($request, $runtime);
    }

    /**
     * Creates an instance.
     *
     * @param request - CreateScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScriptResponse
     *
     * @param CreateScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateScriptResponse
     */
    public function createScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->nluEngine) {
            @$body['NluEngine'] = $request->nluEngine;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateScript',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance.
     *
     * @param request - CreateScriptRequest
     *
     * @returns CreateScriptResponse
     *
     * @param CreateScriptRequest $request
     *
     * @return CreateScriptResponse
     */
    public function createScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScriptWithOptions($request, $runtime);
    }

    /**
     * Creates a scenario configuration.
     *
     * @param tmpReq - CreateScriptVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScriptVersionResponse
     *
     * @param CreateScriptVersionRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateScriptVersionResponse
     */
    public function createScriptVersionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateScriptVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->interactionConfig) {
            $request->interactionConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->interactionConfig, 'InteractionConfig', 'json');
        }

        if (null !== $tmpReq->labelConfigs) {
            $request->labelConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelConfigs, 'LabelConfigs', 'json');
        }

        if (null !== $tmpReq->scriptProfile) {
            $request->scriptProfileShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scriptProfile, 'ScriptProfile', 'json');
        }

        if (null !== $tmpReq->synthesizerConfig) {
            $request->synthesizerConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->synthesizerConfig, 'SynthesizerConfig', 'json');
        }

        if (null !== $tmpReq->transcriberConfig) {
            $request->transcriberConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transcriberConfig, 'TranscriberConfig', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interactionConfigShrink) {
            @$body['InteractionConfig'] = $request->interactionConfigShrink;
        }

        if (null !== $request->labelConfigsShrink) {
            @$body['LabelConfigs'] = $request->labelConfigsShrink;
        }

        if (null !== $request->scriptId) {
            @$body['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->scriptProfileShrink) {
            @$body['ScriptProfile'] = $request->scriptProfileShrink;
        }

        if (null !== $request->sourceVersionId) {
            @$body['SourceVersionId'] = $request->sourceVersionId;
        }

        if (null !== $request->synthesizerConfigShrink) {
            @$body['SynthesizerConfig'] = $request->synthesizerConfigShrink;
        }

        if (null !== $request->transcriberConfigShrink) {
            @$body['TranscriberConfig'] = $request->transcriberConfigShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateScriptVersion',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScriptVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a scenario configuration.
     *
     * @param request - CreateScriptVersionRequest
     *
     * @returns CreateScriptVersionResponse
     *
     * @param CreateScriptVersionRequest $request
     *
     * @return CreateScriptVersionResponse
     */
    public function createScriptVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScriptVersionWithOptions($request, $runtime);
    }

    /**
     * Creates an instance.
     *
     * @param tmpReq - CreateVoiceAccessProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVoiceAccessProfileResponse
     *
     * @param CreateVoiceAccessProfileRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateVoiceAccessProfileResponse
     */
    public function createVoiceAccessProfileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateVoiceAccessProfileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->profile) {
            $request->profileShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->profile, 'Profile', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nlsEngine) {
            @$body['NlsEngine'] = $request->nlsEngine;
        }

        if (null !== $request->profileShrink) {
            @$body['Profile'] = $request->profileShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVoiceAccessProfile',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVoiceAccessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance.
     *
     * @param request - CreateVoiceAccessProfileRequest
     *
     * @returns CreateVoiceAccessProfileResponse
     *
     * @param CreateVoiceAccessProfileRequest $request
     *
     * @return CreateVoiceAccessProfileResponse
     */
    public function createVoiceAccessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVoiceAccessProfileWithOptions($request, $runtime);
    }

    /**
     * Deletes a scene.
     *
     * @param request - DeleteCloneVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloneVoiceResponse
     *
     * @param DeleteCloneVoiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCloneVoiceResponse
     */
    public function deleteCloneVoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cloneVoiceId) {
            @$body['CloneVoiceId'] = $request->cloneVoiceId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCloneVoice',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloneVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a scene.
     *
     * @param request - DeleteCloneVoiceRequest
     *
     * @returns DeleteCloneVoiceResponse
     *
     * @param DeleteCloneVoiceRequest $request
     *
     * @return DeleteCloneVoiceResponse
     */
    public function deleteCloneVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloneVoiceWithOptions($request, $runtime);
    }

    /**
     * Deletes a flash message configuration.
     *
     * @param request - DeleteFlashSmsAccessProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlashSmsAccessProfileResponse
     *
     * @param DeleteFlashSmsAccessProfileRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteFlashSmsAccessProfileResponse
     */
    public function deleteFlashSmsAccessProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessProfileId) {
            @$body['AccessProfileId'] = $request->accessProfileId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFlashSmsAccessProfile',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFlashSmsAccessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a flash message configuration.
     *
     * @param request - DeleteFlashSmsAccessProfileRequest
     *
     * @returns DeleteFlashSmsAccessProfileResponse
     *
     * @param DeleteFlashSmsAccessProfileRequest $request
     *
     * @return DeleteFlashSmsAccessProfileResponse
     */
    public function deleteFlashSmsAccessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlashSmsAccessProfileWithOptions($request, $runtime);
    }

    /**
     * Retrieves instance details.
     *
     * @param request - DeleteInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves instance details.
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes blacklists and whitelists.
     *
     * @param tmpReq - DeleteOutboundCallRestrictionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOutboundCallRestrictionResponse
     *
     * @param DeleteOutboundCallRestrictionRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteOutboundCallRestrictionResponse
     */
    public function deleteOutboundCallRestrictionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteOutboundCallRestrictionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->restrictionIdList) {
            $request->restrictionIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->restrictionIdList, 'RestrictionIdList', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->restrictionIdListShrink) {
            @$body['RestrictionIdList'] = $request->restrictionIdListShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteOutboundCallRestriction',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOutboundCallRestrictionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes blacklists and whitelists.
     *
     * @param request - DeleteOutboundCallRestrictionRequest
     *
     * @returns DeleteOutboundCallRestrictionResponse
     *
     * @param DeleteOutboundCallRestrictionRequest $request
     *
     * @return DeleteOutboundCallRestrictionResponse
     */
    public function deleteOutboundCallRestriction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOutboundCallRestrictionWithOptions($request, $runtime);
    }

    /**
     * Deletes a scenario.
     *
     * @param request - DeleteScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScriptResponse
     *
     * @param DeleteScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteScriptResponse
     */
    public function deleteScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$body['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteScript',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a scenario.
     *
     * @param request - DeleteScriptRequest
     *
     * @returns DeleteScriptResponse
     *
     * @param DeleteScriptRequest $request
     *
     * @return DeleteScriptResponse
     */
    public function deleteScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScriptWithOptions($request, $runtime);
    }

    /**
     * Deletes a third-party voice configuration.
     *
     * @param request - DeleteVoiceAccessProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVoiceAccessProfileResponse
     *
     * @param DeleteVoiceAccessProfileRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteVoiceAccessProfileResponse
     */
    public function deleteVoiceAccessProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessProfileId) {
            @$body['AccessProfileId'] = $request->accessProfileId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVoiceAccessProfile',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVoiceAccessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a third-party voice configuration.
     *
     * @param request - DeleteVoiceAccessProfileRequest
     *
     * @returns DeleteVoiceAccessProfileResponse
     *
     * @param DeleteVoiceAccessProfileRequest $request
     *
     * @return DeleteVoiceAccessProfileResponse
     */
    public function deleteVoiceAccessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVoiceAccessProfileWithOptions($request, $runtime);
    }

    /**
     * Disables message subscription.
     *
     * @param request - DisableSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableSubscriptionResponse
     *
     * @param DisableSubscriptionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableSubscriptionResponse
     */
    public function disableSubscriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableSubscription',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables message subscription.
     *
     * @param request - DisableSubscriptionRequest
     *
     * @returns DisableSubscriptionResponse
     *
     * @param DisableSubscriptionRequest $request
     *
     * @return DisableSubscriptionResponse
     */
    public function disableSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSubscriptionWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an outbound campaign.
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
            'version' => '2025-11-11',
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
     * Retrieves the details of an outbound campaign.
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
     * Retrieves the details of an instance.
     *
     * @param request - GetInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an instance.
     *
     * @param request - GetInstanceRequest
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * Retrieves a prompt scenario template.
     *
     * @param request - GetScriptProfileTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScriptProfileTemplateResponse
     *
     * @param GetScriptProfileTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetScriptProfileTemplateResponse
     */
    public function getScriptProfileTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetScriptProfileTemplate',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScriptProfileTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a prompt scenario template.
     *
     * @param request - GetScriptProfileTemplateRequest
     *
     * @returns GetScriptProfileTemplateResponse
     *
     * @param GetScriptProfileTemplateRequest $request
     *
     * @return GetScriptProfileTemplateResponse
     */
    public function getScriptProfileTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScriptProfileTemplateWithOptions($request, $runtime);
    }

    /**
     * Retrieves the MQ configuration.
     *
     * @param request - GetSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSubscriptionResponse
     *
     * @param GetSubscriptionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetSubscriptionResponse
     */
    public function getSubscriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSubscription',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the MQ configuration.
     *
     * @param request - GetSubscriptionRequest
     *
     * @returns GetSubscriptionResponse
     *
     * @param GetSubscriptionRequest $request
     *
     * @return GetSubscriptionResponse
     */
    public function getSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubscriptionWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of outbound call campaigns.
     *
     * @remarks
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

        if (null !== $request->plannedStartTimeFrom) {
            @$query['PlannedStartTimeFrom'] = $request->plannedStartTimeFrom;
        }

        if (null !== $request->plannedStartTimeTo) {
            @$query['PlannedStartTimeTo'] = $request->plannedStartTimeTo;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCampaigns',
            'version' => '2025-11-11',
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
     * Retrieves the list of outbound call campaigns.
     *
     * @remarks
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
     * Retrieves the list of available models for voice cloning.
     *
     * @param request - ListCloneVoiceModelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloneVoiceModelsResponse
     *
     * @param ListCloneVoiceModelsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListCloneVoiceModelsResponse
     */
    public function listCloneVoiceModelsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCloneVoiceModels',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloneVoiceModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of available models for voice cloning.
     *
     * @param request - ListCloneVoiceModelsRequest
     *
     * @returns ListCloneVoiceModelsResponse
     *
     * @param ListCloneVoiceModelsRequest $request
     *
     * @return ListCloneVoiceModelsResponse
     */
    public function listCloneVoiceModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloneVoiceModelsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of cloned voices.
     *
     * @param request - ListCloneVoicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloneVoicesResponse
     *
     * @param ListCloneVoicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCloneVoicesResponse
     */
    public function listCloneVoicesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCloneVoices',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloneVoicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of cloned voices.
     *
     * @param request - ListCloneVoicesRequest
     *
     * @returns ListCloneVoicesResponse
     *
     * @param ListCloneVoicesRequest $request
     *
     * @return ListCloneVoicesResponse
     */
    public function listCloneVoices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloneVoicesWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of flash SMS configurations.
     *
     * @param request - ListFlashSmsAccessProfilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlashSmsAccessProfilesResponse
     *
     * @param ListFlashSmsAccessProfilesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListFlashSmsAccessProfilesResponse
     */
    public function listFlashSmsAccessProfilesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFlashSmsAccessProfiles',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlashSmsAccessProfilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of flash SMS configurations.
     *
     * @param request - ListFlashSmsAccessProfilesRequest
     *
     * @returns ListFlashSmsAccessProfilesResponse
     *
     * @param ListFlashSmsAccessProfilesRequest $request
     *
     * @return ListFlashSmsAccessProfilesResponse
     */
    public function listFlashSmsAccessProfiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlashSmsAccessProfilesWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of flash message providers.
     *
     * @param request - ListFlashSmsProvidersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlashSmsProvidersResponse
     *
     * @param ListFlashSmsProvidersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListFlashSmsProvidersResponse
     */
    public function listFlashSmsProvidersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFlashSmsProviders',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlashSmsProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of flash message providers.
     *
     * @param request - ListFlashSmsProvidersRequest
     *
     * @returns ListFlashSmsProvidersResponse
     *
     * @param ListFlashSmsProvidersRequest $request
     *
     * @return ListFlashSmsProvidersResponse
     */
    public function listFlashSmsProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlashSmsProvidersWithOptions($request, $runtime);
    }

    /**
     * Retrieves flash SMS templates.
     *
     * @param request - ListFlashSmsTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlashSmsTemplatesResponse
     *
     * @param ListFlashSmsTemplatesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListFlashSmsTemplatesResponse
     */
    public function listFlashSmsTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->providerId) {
            @$body['ProviderId'] = $request->providerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFlashSmsTemplates',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlashSmsTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves flash SMS templates.
     *
     * @param request - ListFlashSmsTemplatesRequest
     *
     * @returns ListFlashSmsTemplatesResponse
     *
     * @param ListFlashSmsTemplatesRequest $request
     *
     * @return ListFlashSmsTemplatesResponse
     */
    public function listFlashSmsTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlashSmsTemplatesWithOptions($request, $runtime);
    }

    /**
     * Retrieves instance details.
     *
     * @param request - ListInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves instance details.
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * Retrieves the blacklists and whitelists.
     *
     * @param request - ListOutboundCallRestrictionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOutboundCallRestrictionsResponse
     *
     * @param ListOutboundCallRestrictionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListOutboundCallRestrictionsResponse
     */
    public function listOutboundCallRestrictionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policy) {
            @$body['Policy'] = $request->policy;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListOutboundCallRestrictions',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOutboundCallRestrictionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the blacklists and whitelists.
     *
     * @param request - ListOutboundCallRestrictionsRequest
     *
     * @returns ListOutboundCallRestrictionsResponse
     *
     * @param ListOutboundCallRestrictionsRequest $request
     *
     * @return ListOutboundCallRestrictionsResponse
     */
    public function listOutboundCallRestrictions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOutboundCallRestrictionsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of scenario configuration templates.
     *
     * @param request - ListScriptProfileTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScriptProfileTemplatesResponse
     *
     * @param ListScriptProfileTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListScriptProfileTemplatesResponse
     */
    public function listScriptProfileTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nluEngine) {
            @$body['NluEngine'] = $request->nluEngine;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListScriptProfileTemplates',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScriptProfileTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of scenario configuration templates.
     *
     * @param request - ListScriptProfileTemplatesRequest
     *
     * @returns ListScriptProfileTemplatesResponse
     *
     * @param ListScriptProfileTemplatesRequest $request
     *
     * @return ListScriptProfileTemplatesResponse
     */
    public function listScriptProfileTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptProfileTemplatesWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an instance.
     *
     * @param tmpReq - ListScriptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScriptsResponse
     *
     * @param ListScriptsRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ListScriptsResponse
     */
    public function listScriptsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListScriptsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->scriptIds) {
            $request->scriptIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scriptIds, 'ScriptIds', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->publishOnly) {
            @$body['PublishOnly'] = $request->publishOnly;
        }

        if (null !== $request->scriptIdsShrink) {
            @$body['ScriptIds'] = $request->scriptIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListScripts',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an instance.
     *
     * @param request - ListScriptsRequest
     *
     * @returns ListScriptsResponse
     *
     * @param ListScriptsRequest $request
     *
     * @return ListScriptsResponse
     */
    public function listScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of scenarios associated with a flow by flow ID.
     *
     * @param request - ListScriptsByFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScriptsByFlowResponse
     *
     * @param ListScriptsByFlowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListScriptsByFlowResponse
     */
    public function listScriptsByFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->flowId) {
            @$body['FlowId'] = $request->flowId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListScriptsByFlow',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScriptsByFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of scenarios associated with a flow by flow ID.
     *
     * @param request - ListScriptsByFlowRequest
     *
     * @returns ListScriptsByFlowResponse
     *
     * @param ListScriptsByFlowRequest $request
     *
     * @return ListScriptsByFlowResponse
     */
    public function listScriptsByFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptsByFlowWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of system configurations.
     *
     * @param request - ListSystemConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSystemConfigsResponse
     *
     * @param ListSystemConfigsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSystemConfigsResponse
     */
    public function listSystemConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->objectId) {
            @$body['ObjectId'] = $request->objectId;
        }

        if (null !== $request->objectType) {
            @$body['ObjectType'] = $request->objectType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSystemConfigs',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSystemConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of system configurations.
     *
     * @param request - ListSystemConfigsRequest
     *
     * @returns ListSystemConfigsResponse
     *
     * @param ListSystemConfigsRequest $request
     *
     * @return ListSystemConfigsResponse
     */
    public function listSystemConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemConfigsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of voice access configurations.
     *
     * @param request - ListVoiceAccessProfilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVoiceAccessProfilesResponse
     *
     * @param ListVoiceAccessProfilesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListVoiceAccessProfilesResponse
     */
    public function listVoiceAccessProfilesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVoiceAccessProfiles',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVoiceAccessProfilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of voice access configurations.
     *
     * @param request - ListVoiceAccessProfilesRequest
     *
     * @returns ListVoiceAccessProfilesResponse
     *
     * @param ListVoiceAccessProfilesRequest $request
     *
     * @return ListVoiceAccessProfilesResponse
     */
    public function listVoiceAccessProfiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVoiceAccessProfilesWithOptions($request, $runtime);
    }

    /**
     * Pauses an outbound call campaign.
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
            'version' => '2025-11-11',
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
     * Pauses an outbound call campaign.
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
     * Updates an instance.
     *
     * @param request - PublishScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishScriptResponse
     *
     * @param PublishScriptRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PublishScriptResponse
     */
    public function publishScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$body['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->versionId) {
            @$body['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishScript',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an instance.
     *
     * @param request - PublishScriptRequest
     *
     * @returns PublishScriptResponse
     *
     * @param PublishScriptRequest $request
     *
     * @return PublishScriptResponse
     */
    public function publishScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishScriptWithOptions($request, $runtime);
    }

    /**
     * 恢复外呼活动.
     *
     * @remarks
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
            'version' => '2025-11-11',
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
     * 恢复外呼活动.
     *
     * @remarks
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
     * 提交外呼活动.
     *
     * @remarks
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
            'version' => '2025-11-11',
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
     * 提交外呼活动.
     *
     * @remarks
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
     * Updates an instance.
     *
     * @param request - UpdateCloneVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloneVoiceResponse
     *
     * @param UpdateCloneVoiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCloneVoiceResponse
     */
    public function updateCloneVoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cloneVoiceId) {
            @$body['CloneVoiceId'] = $request->cloneVoiceId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCloneVoice',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloneVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an instance.
     *
     * @param request - UpdateCloneVoiceRequest
     *
     * @returns UpdateCloneVoiceResponse
     *
     * @param UpdateCloneVoiceRequest $request
     *
     * @return UpdateCloneVoiceResponse
     */
    public function updateCloneVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloneVoiceWithOptions($request, $runtime);
    }

    /**
     * Updates the flash message configuration.
     *
     * @param tmpReq - UpdateFlashSmsAccessProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFlashSmsAccessProfileResponse
     *
     * @param UpdateFlashSmsAccessProfileRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateFlashSmsAccessProfileResponse
     */
    public function updateFlashSmsAccessProfileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateFlashSmsAccessProfileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accessProfile) {
            $request->accessProfileShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accessProfile, 'AccessProfile', 'json');
        }

        $body = [];
        if (null !== $request->accessProfileShrink) {
            @$body['AccessProfile'] = $request->accessProfileShrink;
        }

        if (null !== $request->accessProfileId) {
            @$body['AccessProfileId'] = $request->accessProfileId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->providerId) {
            @$body['ProviderId'] = $request->providerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFlashSmsAccessProfile',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFlashSmsAccessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the flash message configuration.
     *
     * @param request - UpdateFlashSmsAccessProfileRequest
     *
     * @returns UpdateFlashSmsAccessProfileResponse
     *
     * @param UpdateFlashSmsAccessProfileRequest $request
     *
     * @return UpdateFlashSmsAccessProfileResponse
     */
    public function updateFlashSmsAccessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlashSmsAccessProfileWithOptions($request, $runtime);
    }

    /**
     * Updates an instance.
     *
     * @param request - UpdateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->concurrency) {
            @$body['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an instance.
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceWithOptions($request, $runtime);
    }

    /**
     * Updates an instance.
     *
     * @param request - UpdateScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateScriptResponse
     *
     * @param UpdateScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateScriptResponse
     */
    public function updateScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->scriptId) {
            @$body['ScriptId'] = $request->scriptId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateScript',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an instance.
     *
     * @param request - UpdateScriptRequest
     *
     * @returns UpdateScriptResponse
     *
     * @param UpdateScriptRequest $request
     *
     * @return UpdateScriptResponse
     */
    public function updateScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScriptWithOptions($request, $runtime);
    }

    /**
     * Updates the scenario configuration.
     *
     * @remarks
     *
     * @param tmpReq - UpdateScriptVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateScriptVersionResponse
     *
     * @param UpdateScriptVersionRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateScriptVersionResponse
     */
    public function updateScriptVersionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateScriptVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->interactionConfig) {
            $request->interactionConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->interactionConfig, 'InteractionConfig', 'json');
        }

        if (null !== $tmpReq->labelConfigs) {
            $request->labelConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelConfigs, 'LabelConfigs', 'json');
        }

        if (null !== $tmpReq->scriptProfile) {
            $request->scriptProfileShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scriptProfile, 'ScriptProfile', 'json');
        }

        if (null !== $tmpReq->synthesizerConfig) {
            $request->synthesizerConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->synthesizerConfig, 'SynthesizerConfig', 'json');
        }

        if (null !== $tmpReq->transcriberConfig) {
            $request->transcriberConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transcriberConfig, 'TranscriberConfig', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interactionConfigShrink) {
            @$body['InteractionConfig'] = $request->interactionConfigShrink;
        }

        if (null !== $request->labelConfigsShrink) {
            @$body['LabelConfigs'] = $request->labelConfigsShrink;
        }

        if (null !== $request->scriptId) {
            @$body['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->scriptProfileShrink) {
            @$body['ScriptProfile'] = $request->scriptProfileShrink;
        }

        if (null !== $request->synthesizerConfigShrink) {
            @$body['SynthesizerConfig'] = $request->synthesizerConfigShrink;
        }

        if (null !== $request->transcriberConfigShrink) {
            @$body['TranscriberConfig'] = $request->transcriberConfigShrink;
        }

        if (null !== $request->versionId) {
            @$body['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateScriptVersion',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateScriptVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the scenario configuration.
     *
     * @remarks
     *
     * @param request - UpdateScriptVersionRequest
     *
     * @returns UpdateScriptVersionResponse
     *
     * @param UpdateScriptVersionRequest $request
     *
     * @return UpdateScriptVersionResponse
     */
    public function updateScriptVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScriptVersionWithOptions($request, $runtime);
    }

    /**
     * Creates or updates a message queue (MQ) configuration.
     *
     * @param tmpReq - UpdateSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSubscriptionResponse
     *
     * @param UpdateSubscriptionRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscriptionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSubscriptionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->eventSubscriptions) {
            $request->eventSubscriptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventSubscriptions, 'EventSubscriptions', 'json');
        }

        $body = [];
        if (null !== $request->endpoint) {
            @$body['Endpoint'] = $request->endpoint;
        }

        if (null !== $request->eventSubscriptionsShrink) {
            @$body['EventSubscriptions'] = $request->eventSubscriptionsShrink;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mqInstanceId) {
            @$body['MqInstanceId'] = $request->mqInstanceId;
        }

        if (null !== $request->mqType) {
            @$body['MqType'] = $request->mqType;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->producerId) {
            @$body['ProducerId'] = $request->producerId;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSubscription',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or updates a message queue (MQ) configuration.
     *
     * @param request - UpdateSubscriptionRequest
     *
     * @returns UpdateSubscriptionResponse
     *
     * @param UpdateSubscriptionRequest $request
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubscriptionWithOptions($request, $runtime);
    }

    /**
     * Updates system configurations.
     *
     * @param tmpReq - UpdateSystemConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSystemConfigsResponse
     *
     * @param UpdateSystemConfigsRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateSystemConfigsResponse
     */
    public function updateSystemConfigsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSystemConfigsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configs) {
            $request->configsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configs, 'Configs', 'json');
        }

        $body = [];
        if (null !== $request->configsShrink) {
            @$body['Configs'] = $request->configsShrink;
        }

        if (null !== $request->objectId) {
            @$body['ObjectId'] = $request->objectId;
        }

        if (null !== $request->objectType) {
            @$body['ObjectType'] = $request->objectType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSystemConfigs',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSystemConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates system configurations.
     *
     * @param request - UpdateSystemConfigsRequest
     *
     * @returns UpdateSystemConfigsResponse
     *
     * @param UpdateSystemConfigsRequest $request
     *
     * @return UpdateSystemConfigsResponse
     */
    public function updateSystemConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSystemConfigsWithOptions($request, $runtime);
    }

    /**
     * Updates an instance.
     *
     * @param tmpReq - UpdateVoiceAccessProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVoiceAccessProfileResponse
     *
     * @param UpdateVoiceAccessProfileRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateVoiceAccessProfileResponse
     */
    public function updateVoiceAccessProfileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateVoiceAccessProfileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->profile) {
            $request->profileShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->profile, 'Profile', 'json');
        }

        $body = [];
        if (null !== $request->accessProfileId) {
            @$body['AccessProfileId'] = $request->accessProfileId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nlsEngine) {
            @$body['NlsEngine'] = $request->nlsEngine;
        }

        if (null !== $request->profileShrink) {
            @$body['Profile'] = $request->profileShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVoiceAccessProfile',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVoiceAccessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an instance.
     *
     * @param request - UpdateVoiceAccessProfileRequest
     *
     * @returns UpdateVoiceAccessProfileResponse
     *
     * @param UpdateVoiceAccessProfileRequest $request
     *
     * @return UpdateVoiceAccessProfileResponse
     */
    public function updateVoiceAccessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVoiceAccessProfileWithOptions($request, $runtime);
    }
}
