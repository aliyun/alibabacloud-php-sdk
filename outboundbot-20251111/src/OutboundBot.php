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
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\BeginSessionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\BeginSessionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\BeginTrialSessionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\BeginTrialSessionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\BridgeTrialWebCallRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\BridgeTrialWebCallResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\BridgeWebCallRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\BridgeWebCallResponse;
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
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateLlmAccessProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateLlmAccessProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateLlmAccessProfileShrinkRequest;
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
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteCorpNumberRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteCorpNumberResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteFlashSmsAccessProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteFlashSmsAccessProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteLlmAccessProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteLlmAccessProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteNumbersRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteNumbersResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteNumbersShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteOutboundCallRestrictionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteOutboundCallRestrictionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteOutboundCallRestrictionShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteVoiceAccessProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteVoiceAccessProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DialogueRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DialogueResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DisableSubscriptionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DisableSubscriptionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\EndSessionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\EndSessionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\EndTrialSessionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\EndTrialSessionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCallDetailRecordRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCallDetailRecordResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCampaignRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCampaignResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCaseDetailRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCaseDetailResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetDataChannelCredentialRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetDataChannelCredentialResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetRecordingRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetRecordingResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetScriptProfileTemplateRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetScriptProfileTemplateResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetSubscriptionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetSubscriptionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetTrialAccessChannelRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetTrialAccessChannelResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetTrialDataChannelCredentialRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetTrialDataChannelCredentialResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListAsrModelsRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListAsrModelsResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCampaignsRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCampaignsResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCasesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCasesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCasesShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCloneVoiceModelsRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCloneVoiceModelsResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCloneVoicesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCloneVoicesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCorpNumbersRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCorpNumbersResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsAccessProfilesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsAccessProfilesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsProvidersRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsProvidersResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsTemplatesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsTemplatesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListInstanceBindingsOfNumberRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListInstanceBindingsOfNumberResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListInstancesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListInstancesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListLlmAccessProfilesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListLlmAccessProfilesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListNumberBindingsOfInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListNumberBindingsOfInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListNumbersRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListNumbersResponse;
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
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\MakePilotCallRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\MakePilotCallResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\PauseCampaignRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\PauseCampaignResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\PublishScriptRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\PublishScriptResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ResumeCampaignRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ResumeCampaignResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\SubmitCampaignRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\SubmitCampaignResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\TrialDialogueRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\TrialDialogueResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateCloneVoiceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateCloneVoiceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateFlashSmsAccessProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateFlashSmsAccessProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateFlashSmsAccessProfileShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateInstanceBindingsOfNumberRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateInstanceBindingsOfNumberResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateInstanceBindingsOfNumberShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateLlmAccessProfileRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateLlmAccessProfileResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateLlmAccessProfileShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateNumberBindingsOfInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateNumberBindingsOfInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateNumberBindingsOfInstanceShrinkRequest;
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
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class OutboundBot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'OutboundBot';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
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
     * Stops an outbound campaign.
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
     * Stops an outbound campaign.
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
     * Terminates outbound call cases.
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
     * Terminates outbound call cases.
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
     * Appends outbound call cases.
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
     * Appends outbound call cases.
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
     * Creates a text conversation session for a specified instance and scenario, and streams the initial reply from the robot.
     *
     * @remarks
     * Creates a text conversation session for a specified instance and scenario, and streams the initial reply from the robot. An available scenario version must exist before you call this operation. Use DraftVersion to select the draft or published version, and use VendorParams to pass the accompanying variables required by the scenario. The response uses Server-Sent Events (SSE), and each data event carries a business response object. Save the returned SessionId for subsequent Dialogue and EndSession calls. A StreamEnd value of true indicates that the current response stream has ended, but the session remains active. The resource identifiers, phone numbers, and authentication credentials in the examples are masked or placeholder values. Use actual resources and service return values in production calls.
     *
     * @param request - BeginSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BeginSessionResponse
     *
     * @param BeginSessionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BeginSessionResponse
     */
    public function beginSessionWithSSE($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->draftVersion) {
            @$query['DraftVersion'] = $request->draftVersion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->vendorParams) {
            @$query['VendorParams'] = $request->vendorParams;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BeginSession',
            'version' => '2025-11-11',
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

                yield BeginSessionResponse::fromMap([
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
     * Creates a text conversation session for a specified instance and scenario, and streams the initial reply from the robot.
     *
     * @remarks
     * Creates a text conversation session for a specified instance and scenario, and streams the initial reply from the robot. An available scenario version must exist before you call this operation. Use DraftVersion to select the draft or published version, and use VendorParams to pass the accompanying variables required by the scenario. The response uses Server-Sent Events (SSE), and each data event carries a business response object. Save the returned SessionId for subsequent Dialogue and EndSession calls. A StreamEnd value of true indicates that the current response stream has ended, but the session remains active. The resource identifiers, phone numbers, and authentication credentials in the examples are masked or placeholder values. Use actual resources and service return values in production calls.
     *
     * @param request - BeginSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BeginSessionResponse
     *
     * @param BeginSessionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BeginSessionResponse
     */
    public function beginSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->draftVersion) {
            @$query['DraftVersion'] = $request->draftVersion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->vendorParams) {
            @$query['VendorParams'] = $request->vendorParams;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BeginSession',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BeginSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a text conversation session for a specified instance and scenario, and streams the initial reply from the robot.
     *
     * @remarks
     * Creates a text conversation session for a specified instance and scenario, and streams the initial reply from the robot. An available scenario version must exist before you call this operation. Use DraftVersion to select the draft or published version, and use VendorParams to pass the accompanying variables required by the scenario. The response uses Server-Sent Events (SSE), and each data event carries a business response object. Save the returned SessionId for subsequent Dialogue and EndSession calls. A StreamEnd value of true indicates that the current response stream has ended, but the session remains active. The resource identifiers, phone numbers, and authentication credentials in the examples are masked or placeholder values. Use actual resources and service return values in production calls.
     *
     * @param request - BeginSessionRequest
     *
     * @returns BeginSessionResponse
     *
     * @param BeginSessionRequest $request
     *
     * @return BeginSessionResponse
     */
    public function beginSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->beginSessionWithOptions($request, $runtime);
    }

    /**
     * Initiates a trial session.
     *
     * @remarks
     * Creates a trial text session in a specified instance and scenario by using the VisitorToken from a trial link, and returns the first-round reply in Server-Sent Events (SSE) format. The service verifies the channel and expiration time corresponding to the token, and then starts the session based on the tenant to which the channel belongs. The token does not replace the business parameters of the scenario and instance. Save the returned SessionId for subsequent calls to TrialDialogue to send user input, and call EndTrialSession to end the session. StreamEnd=true only indicates that the streaming response for the current round has ended. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - BeginTrialSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BeginTrialSessionResponse
     *
     * @param BeginTrialSessionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BeginTrialSessionResponse
     */
    public function beginTrialSessionWithSSE($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->draftVersion) {
            @$query['DraftVersion'] = $request->draftVersion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->vendorParams) {
            @$query['VendorParams'] = $request->vendorParams;
        }

        if (null !== $request->visitorToken) {
            @$query['VisitorToken'] = $request->visitorToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BeginTrialSession',
            'version' => '2025-11-11',
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

                yield BeginTrialSessionResponse::fromMap([
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
     * Initiates a trial session.
     *
     * @remarks
     * Creates a trial text session in a specified instance and scenario by using the VisitorToken from a trial link, and returns the first-round reply in Server-Sent Events (SSE) format. The service verifies the channel and expiration time corresponding to the token, and then starts the session based on the tenant to which the channel belongs. The token does not replace the business parameters of the scenario and instance. Save the returned SessionId for subsequent calls to TrialDialogue to send user input, and call EndTrialSession to end the session. StreamEnd=true only indicates that the streaming response for the current round has ended. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - BeginTrialSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BeginTrialSessionResponse
     *
     * @param BeginTrialSessionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BeginTrialSessionResponse
     */
    public function beginTrialSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->draftVersion) {
            @$query['DraftVersion'] = $request->draftVersion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->vendorParams) {
            @$query['VendorParams'] = $request->vendorParams;
        }

        if (null !== $request->visitorToken) {
            @$query['VisitorToken'] = $request->visitorToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BeginTrialSession',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BeginTrialSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a trial session.
     *
     * @remarks
     * Creates a trial text session in a specified instance and scenario by using the VisitorToken from a trial link, and returns the first-round reply in Server-Sent Events (SSE) format. The service verifies the channel and expiration time corresponding to the token, and then starts the session based on the tenant to which the channel belongs. The token does not replace the business parameters of the scenario and instance. Save the returned SessionId for subsequent calls to TrialDialogue to send user input, and call EndTrialSession to end the session. StreamEnd=true only indicates that the streaming response for the current round has ended. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - BeginTrialSessionRequest
     *
     * @returns BeginTrialSessionResponse
     *
     * @param BeginTrialSessionRequest $request
     *
     * @return BeginTrialSessionResponse
     */
    public function beginTrialSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->beginTrialSessionWithOptions($request, $runtime);
    }

    /**
     * Initiates a trial call.
     *
     * @remarks
     * Initiates a trial web voice call for a specified scenario by using the VisitorToken of a trial link. The service verifies the token, the associated channel, and the validity period, and then delegates the web call service to bridge the web voice channel and the robot channel. The DeviceId must be consistent with the data channel device identifier of the trial client. After the call is initiated, use the returned ChannelId, ServerUrl, and Token to connect to the voice channel. If the data event channel of the trial client is required, you can call GetTrialDataChannelCredential with the same DeviceId. The web voice connection token and the data channel username and password are not the same set of credentials. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - BridgeTrialWebCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BridgeTrialWebCallResponse
     *
     * @param BridgeTrialWebCallRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BridgeTrialWebCallResponse
     */
    public function bridgeTrialWebCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->draftVersion) {
            @$query['DraftVersion'] = $request->draftVersion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sampleRate) {
            @$query['SampleRate'] = $request->sampleRate;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        if (null !== $request->visitorToken) {
            @$query['VisitorToken'] = $request->visitorToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BridgeTrialWebCall',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BridgeTrialWebCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a trial call.
     *
     * @remarks
     * Initiates a trial web voice call for a specified scenario by using the VisitorToken of a trial link. The service verifies the token, the associated channel, and the validity period, and then delegates the web call service to bridge the web voice channel and the robot channel. The DeviceId must be consistent with the data channel device identifier of the trial client. After the call is initiated, use the returned ChannelId, ServerUrl, and Token to connect to the voice channel. If the data event channel of the trial client is required, you can call GetTrialDataChannelCredential with the same DeviceId. The web voice connection token and the data channel username and password are not the same set of credentials. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - BridgeTrialWebCallRequest
     *
     * @returns BridgeTrialWebCallResponse
     *
     * @param BridgeTrialWebCallRequest $request
     *
     * @return BridgeTrialWebCallResponse
     */
    public function bridgeTrialWebCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bridgeTrialWebCallWithOptions($request, $runtime);
    }

    /**
     * Initiates a call.
     *
     * @remarks
     * Initiates a web voice call for a specified instance and scenario by bridging the web voice channel and the robot SIP channel through an RTC gateway. Pass information such as DeviceId, audio sampling rate, and scenario version in the request. TimeoutSeconds specifies the timeout for unanswered calls, defaults to 60 seconds, and does not indicate the maximum duration of an answered call. Upon success, returns the connection context such as SessionId, ChannelId, ServerUrl, and Token. The client must use the returned address and valid credentials to establish the web voice connection. This operation initiates a web interactive voice response instead of dialing a real phone number specified by Number. Resource identity, numbers, and authentication credentials in the examples are masked or placeholder values. Use actual resources and service return values when you invoke the operation.
     *
     * @param request - BridgeWebCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BridgeWebCallResponse
     *
     * @param BridgeWebCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BridgeWebCallResponse
     */
    public function bridgeWebCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->draftVersion) {
            @$query['DraftVersion'] = $request->draftVersion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sampleRate) {
            @$query['SampleRate'] = $request->sampleRate;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BridgeWebCall',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BridgeWebCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a call.
     *
     * @remarks
     * Initiates a web voice call for a specified instance and scenario by bridging the web voice channel and the robot SIP channel through an RTC gateway. Pass information such as DeviceId, audio sampling rate, and scenario version in the request. TimeoutSeconds specifies the timeout for unanswered calls, defaults to 60 seconds, and does not indicate the maximum duration of an answered call. Upon success, returns the connection context such as SessionId, ChannelId, ServerUrl, and Token. The client must use the returned address and valid credentials to establish the web voice connection. This operation initiates a web interactive voice response instead of dialing a real phone number specified by Number. Resource identity, numbers, and authentication credentials in the examples are masked or placeholder values. Use actual resources and service return values when you invoke the operation.
     *
     * @param request - BridgeWebCallRequest
     *
     * @returns BridgeWebCallResponse
     *
     * @param BridgeWebCallRequest $request
     *
     * @return BridgeWebCallResponse
     */
    public function bridgeWebCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bridgeWebCallWithOptions($request, $runtime);
    }

    /**
     * Creates an outbound campaign.
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
     * Creates an outbound campaign.
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
     * Creates a language model access configuration.
     *
     * @remarks
     * Creates a language model access configuration for a specified instance.
     *
     * @param tmpReq - CreateLlmAccessProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLlmAccessProfileResponse
     *
     * @param CreateLlmAccessProfileRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateLlmAccessProfileResponse
     */
    public function createLlmAccessProfileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateLlmAccessProfileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->profile) {
            $request->profileShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->profile, 'Profile', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->profileShrink) {
            @$body['Profile'] = $request->profileShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLlmAccessProfile',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLlmAccessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a language model access configuration.
     *
     * @remarks
     * Creates a language model access configuration for a specified instance.
     *
     * @param request - CreateLlmAccessProfileRequest
     *
     * @returns CreateLlmAccessProfileResponse
     *
     * @param CreateLlmAccessProfileRequest $request
     *
     * @return CreateLlmAccessProfileResponse
     */
    public function createLlmAccessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLlmAccessProfileWithOptions($request, $runtime);
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
     * Creates a script configuration.
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
     * Creates a script configuration.
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
     * Deletes a tenant number.
     *
     * @remarks
     * Deletes a tenant number.
     *
     * @param request - DeleteCorpNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCorpNumberResponse
     *
     * @param DeleteCorpNumberRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCorpNumberResponse
     */
    public function deleteCorpNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->force) {
            @$body['Force'] = $request->force;
        }

        if (null !== $request->number) {
            @$body['Number'] = $request->number;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCorpNumber',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCorpNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a tenant number.
     *
     * @remarks
     * Deletes a tenant number.
     *
     * @param request - DeleteCorpNumberRequest
     *
     * @returns DeleteCorpNumberResponse
     *
     * @param DeleteCorpNumberRequest $request
     *
     * @return DeleteCorpNumberResponse
     */
    public function deleteCorpNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCorpNumberWithOptions($request, $runtime);
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
     * Deletes the language model access configuration.
     *
     * @remarks
     * Deletes the language model access configuration for a specified instance.
     *
     * @param request - DeleteLlmAccessProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLlmAccessProfileResponse
     *
     * @param DeleteLlmAccessProfileRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteLlmAccessProfileResponse
     */
    public function deleteLlmAccessProfileWithOptions($request, $runtime)
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
            'action' => 'DeleteLlmAccessProfile',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLlmAccessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the language model access configuration.
     *
     * @remarks
     * Deletes the language model access configuration for a specified instance.
     *
     * @param request - DeleteLlmAccessProfileRequest
     *
     * @returns DeleteLlmAccessProfileResponse
     *
     * @param DeleteLlmAccessProfileRequest $request
     *
     * @return DeleteLlmAccessProfileResponse
     */
    public function deleteLlmAccessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLlmAccessProfileWithOptions($request, $runtime);
    }

    /**
     * Deletes the numbers of an instance.
     *
     * @remarks
     * Deletes the numbers of a specified instance.
     *
     * @param tmpReq - DeleteNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNumbersResponse
     *
     * @param DeleteNumbersRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteNumbersResponse
     */
    public function deleteNumbersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteNumbersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->numbers) {
            $request->numbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->numbersShrink) {
            @$body['Numbers'] = $request->numbersShrink;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteNumbers',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the numbers of an instance.
     *
     * @remarks
     * Deletes the numbers of a specified instance.
     *
     * @param request - DeleteNumbersRequest
     *
     * @returns DeleteNumbersResponse
     *
     * @param DeleteNumbersRequest $request
     *
     * @return DeleteNumbersResponse
     */
    public function deleteNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNumbersWithOptions($request, $runtime);
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
     * Initiates a session.
     *
     * @remarks
     * Sends a round of user input to a text session created by BeginSession and returns the robot reply and control instructions in Server-Sent Events (SSE) format. The InstanceId, ScriptId, and SessionId must be consistent with those used when the session was initiated. The SessionId must use the value returned by the session initiation operation. The conversation cannot continue if the session context does not exist. Utterance is used for plain text input, and Extras is used to pass structured events such as key presses and silence. You can call this operation multiple times in succession. StreamId identifies the reply round, and StreamEnd=true indicates that the output of the current round has ended. Call EndSession after the entire interaction is completed. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - DialogueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DialogueResponse
     *
     * @param DialogueRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DialogueResponse
     */
    public function dialogueWithSSE($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extras) {
            @$query['Extras'] = $request->extras;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->utterance) {
            @$query['Utterance'] = $request->utterance;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Dialogue',
            'version' => '2025-11-11',
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

                yield DialogueResponse::fromMap([
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
     * Initiates a session.
     *
     * @remarks
     * Sends a round of user input to a text session created by BeginSession and returns the robot reply and control instructions in Server-Sent Events (SSE) format. The InstanceId, ScriptId, and SessionId must be consistent with those used when the session was initiated. The SessionId must use the value returned by the session initiation operation. The conversation cannot continue if the session context does not exist. Utterance is used for plain text input, and Extras is used to pass structured events such as key presses and silence. You can call this operation multiple times in succession. StreamId identifies the reply round, and StreamEnd=true indicates that the output of the current round has ended. Call EndSession after the entire interaction is completed. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - DialogueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DialogueResponse
     *
     * @param DialogueRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DialogueResponse
     */
    public function dialogueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extras) {
            @$query['Extras'] = $request->extras;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->utterance) {
            @$query['Utterance'] = $request->utterance;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Dialogue',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a session.
     *
     * @remarks
     * Sends a round of user input to a text session created by BeginSession and returns the robot reply and control instructions in Server-Sent Events (SSE) format. The InstanceId, ScriptId, and SessionId must be consistent with those used when the session was initiated. The SessionId must use the value returned by the session initiation operation. The conversation cannot continue if the session context does not exist. Utterance is used for plain text input, and Extras is used to pass structured events such as key presses and silence. You can call this operation multiple times in succession. StreamId identifies the reply round, and StreamEnd=true indicates that the output of the current round has ended. Call EndSession after the entire interaction is completed. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - DialogueRequest
     *
     * @returns DialogueResponse
     *
     * @param DialogueRequest $request
     *
     * @return DialogueResponse
     */
    public function dialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dialogueWithOptions($request, $runtime);
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
     * Ends a session.
     *
     * @remarks
     * Ends a text session created by BeginSession, notifies the dialog engine to end the interaction, and clears the text session state. The InstanceId, ScriptId, and SessionId must match those used when the session was started. The Data field in the response returns the SessionId of the ended session. If the text session no longer exists due to prolonged inactivity or cache expiration, the current implementation still returns the SessionId without reporting a session not found error. This operation is used to conclude a text session and is not intended for hanging up web voice or actual phone calls. The resource identifiers, phone numbers, and authentication credentials in the examples are masked or placeholder values. Use actual resources and service return values for real calls.
     *
     * @param request - EndSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EndSessionResponse
     *
     * @param EndSessionRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EndSessionResponse
     */
    public function endSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EndSession',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EndSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Ends a session.
     *
     * @remarks
     * Ends a text session created by BeginSession, notifies the dialog engine to end the interaction, and clears the text session state. The InstanceId, ScriptId, and SessionId must match those used when the session was started. The Data field in the response returns the SessionId of the ended session. If the text session no longer exists due to prolonged inactivity or cache expiration, the current implementation still returns the SessionId without reporting a session not found error. This operation is used to conclude a text session and is not intended for hanging up web voice or actual phone calls. The resource identifiers, phone numbers, and authentication credentials in the examples are masked or placeholder values. Use actual resources and service return values for real calls.
     *
     * @param request - EndSessionRequest
     *
     * @returns EndSessionResponse
     *
     * @param EndSessionRequest $request
     *
     * @return EndSessionResponse
     */
    public function endSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->endSessionWithOptions($request, $runtime);
    }

    /**
     * Ends a trial session.
     *
     * @remarks
     * Ends a trial text session created by BeginTrialSession by using a valid VisitorToken from a trial link. The service first validates the token and then delegates the request to the text session termination service. The InstanceId, ScriptId, and SessionId must maintain session persistence consistent with those of the trial session. The returned Data is the SessionId of the ended session. If the text session context has expired, the termination service can still return the SessionId, but the validation will be marked as failed if the trial token itself is invalid or expired. This operation is not used to hang up web voice calls. The resource identity, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values when you invoke the operation.
     *
     * @param request - EndTrialSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EndTrialSessionResponse
     *
     * @param EndTrialSessionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EndTrialSessionResponse
     */
    public function endTrialSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->visitorToken) {
            @$query['VisitorToken'] = $request->visitorToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EndTrialSession',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EndTrialSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Ends a trial session.
     *
     * @remarks
     * Ends a trial text session created by BeginTrialSession by using a valid VisitorToken from a trial link. The service first validates the token and then delegates the request to the text session termination service. The InstanceId, ScriptId, and SessionId must maintain session persistence consistent with those of the trial session. The returned Data is the SessionId of the ended session. If the text session context has expired, the termination service can still return the SessionId, but the validation will be marked as failed if the trial token itself is invalid or expired. This operation is not used to hang up web voice calls. The resource identity, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values when you invoke the operation.
     *
     * @param request - EndTrialSessionRequest
     *
     * @returns EndTrialSessionResponse
     *
     * @param EndTrialSessionRequest $request
     *
     * @return EndTrialSessionResponse
     */
    public function endTrialSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->endTrialSessionWithOptions($request, $runtime);
    }

    /**
     * Retrieves the call details.
     *
     * @remarks
     *
     * @param request - GetCallDetailRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCallDetailRecordResponse
     *
     * @param GetCallDetailRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCallDetailRecordResponse
     */
    public function getCallDetailRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCallDetailRecord',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCallDetailRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the call details.
     *
     * @remarks
     *
     * @param request - GetCallDetailRecordRequest
     *
     * @returns GetCallDetailRecordResponse
     *
     * @param GetCallDetailRecordRequest $request
     *
     * @return GetCallDetailRecordResponse
     */
    public function getCallDetailRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallDetailRecordWithOptions($request, $runtime);
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
     * Retrieves the details of a case.
     *
     * @remarks
     *
     * @param request - GetCaseDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCaseDetailResponse
     *
     * @param GetCaseDetailRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCaseDetailResponse
     */
    public function getCaseDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caseId) {
            @$query['CaseId'] = $request->caseId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCaseDetail',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCaseDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a case.
     *
     * @remarks
     *
     * @param request - GetCaseDetailRequest
     *
     * @returns GetCaseDetailResponse
     *
     * @param GetCaseDetailRequest $request
     *
     * @return GetCaseDetailResponse
     */
    public function getCaseDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCaseDetailWithOptions($request, $runtime);
    }

    /**
     * Retrieves voice conversation parameters.
     *
     * @remarks
     * Retrieves temporary connection credentials for the client data channel of a specified InstanceId and DeviceId. Requests are verified based on the current POP authentication and instance permission configurations. DeviceId cannot be empty. Unlike GetTrialDataChannelCredential, this operation does not use the VisitorToken for trial links. The client must use the actual Topic, ClientId, Endpoint, UserName, and Password returned to connect to and subscribe to the data channel, and must not infer the address, topic, or authentication information. The same client must keep the DeviceId consistent when initiating BridgeWebCall or MakePilotCall. This operation only retrieves data channel credentials and does not create text sessions, initiate phone calls, or establish web voice channels. The username and password for the data channel are not the same set of credentials as the token returned for web calls. The protocol, the unit of ExpirationTime, and field mappings are subject to the actual RTC gateway deployment version and return conventions. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - GetDataChannelCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataChannelCredentialResponse
     *
     * @param GetDataChannelCredentialRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDataChannelCredentialResponse
     */
    public function getDataChannelCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataChannelCredential',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataChannelCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves voice conversation parameters.
     *
     * @remarks
     * Retrieves temporary connection credentials for the client data channel of a specified InstanceId and DeviceId. Requests are verified based on the current POP authentication and instance permission configurations. DeviceId cannot be empty. Unlike GetTrialDataChannelCredential, this operation does not use the VisitorToken for trial links. The client must use the actual Topic, ClientId, Endpoint, UserName, and Password returned to connect to and subscribe to the data channel, and must not infer the address, topic, or authentication information. The same client must keep the DeviceId consistent when initiating BridgeWebCall or MakePilotCall. This operation only retrieves data channel credentials and does not create text sessions, initiate phone calls, or establish web voice channels. The username and password for the data channel are not the same set of credentials as the token returned for web calls. The protocol, the unit of ExpirationTime, and field mappings are subject to the actual RTC gateway deployment version and return conventions. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - GetDataChannelCredentialRequest
     *
     * @returns GetDataChannelCredentialResponse
     *
     * @param GetDataChannelCredentialRequest $request
     *
     * @return GetDataChannelCredentialResponse
     */
    public function getDataChannelCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataChannelCredentialWithOptions($request, $runtime);
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
     * Retrieves a call recording.
     *
     * @param request - GetRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecordingResponse
     *
     * @param GetRecordingRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetRecordingResponse
     */
    public function getRecordingWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRecording',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a call recording.
     *
     * @param request - GetRecordingRequest
     *
     * @returns GetRecordingResponse
     *
     * @param GetRecordingRequest $request
     *
     * @return GetRecordingResponse
     */
    public function getRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordingWithOptions($request, $runtime);
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
     * Retrieves the trial channel.
     *
     * @remarks
     * Retrieves the corresponding trial access channel and the list of available trial scenarios based on the VisitorToken in a trial link. The service verifies whether the token exists, whether it can locate the channel, and whether it has expired. Upon success, it returns information such as the instance to which the channel belongs, the channel type, display configurations, validity period, and scenario configurations. This operation can be used as an initialization step for the trial page: first read the returned instance and scenarios, and then call the corresponding trial text or web voice operation. This operation does not create a text session or initiate a voice call. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - GetTrialAccessChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrialAccessChannelResponse
     *
     * @param GetTrialAccessChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetTrialAccessChannelResponse
     */
    public function getTrialAccessChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->visitorToken) {
            @$query['VisitorToken'] = $request->visitorToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrialAccessChannel',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTrialAccessChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the trial channel.
     *
     * @remarks
     * Retrieves the corresponding trial access channel and the list of available trial scenarios based on the VisitorToken in a trial link. The service verifies whether the token exists, whether it can locate the channel, and whether it has expired. Upon success, it returns information such as the instance to which the channel belongs, the channel type, display configurations, validity period, and scenario configurations. This operation can be used as an initialization step for the trial page: first read the returned instance and scenarios, and then call the corresponding trial text or web voice operation. This operation does not create a text session or initiate a voice call. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - GetTrialAccessChannelRequest
     *
     * @returns GetTrialAccessChannelResponse
     *
     * @param GetTrialAccessChannelRequest $request
     *
     * @return GetTrialAccessChannelResponse
     */
    public function getTrialAccessChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrialAccessChannelWithOptions($request, $runtime);
    }

    /**
     * Retrieves the parameters for a trial voice conversation.
     *
     * @remarks
     * Retrieves temporary connection credentials for the client data channel for a specified InstanceId and DeviceId by using a valid VisitorToken from a trial link. The response includes information such as Topic, ClientId, Endpoint, UserName, Password, and expiration time. The client must use the actual values returned by the service to connect to and subscribe to the data channel, and must not concatenate addresses, topics, or authentication information. The DeviceId must be consistent with the BridgeTrialWebCall request from the same client. This operation only retrieves data channel credentials and does not initiate text sessions or establish web voice calls. The credential protocol and expiration time unit are subject to the conventions returned by the actual RTC gateway. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - GetTrialDataChannelCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrialDataChannelCredentialResponse
     *
     * @param GetTrialDataChannelCredentialRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetTrialDataChannelCredentialResponse
     */
    public function getTrialDataChannelCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->visitorToken) {
            @$query['VisitorToken'] = $request->visitorToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrialDataChannelCredential',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTrialDataChannelCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the parameters for a trial voice conversation.
     *
     * @remarks
     * Retrieves temporary connection credentials for the client data channel for a specified InstanceId and DeviceId by using a valid VisitorToken from a trial link. The response includes information such as Topic, ClientId, Endpoint, UserName, Password, and expiration time. The client must use the actual values returned by the service to connect to and subscribe to the data channel, and must not concatenate addresses, topics, or authentication information. The DeviceId must be consistent with the BridgeTrialWebCall request from the same client. This operation only retrieves data channel credentials and does not initiate text sessions or establish web voice calls. The credential protocol and expiration time unit are subject to the conventions returned by the actual RTC gateway. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - GetTrialDataChannelCredentialRequest
     *
     * @returns GetTrialDataChannelCredentialResponse
     *
     * @param GetTrialDataChannelCredentialRequest $request
     *
     * @return GetTrialDataChannelCredentialResponse
     */
    public function getTrialDataChannelCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrialDataChannelCredentialWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of ASR models.
     *
     * @param request - ListAsrModelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAsrModelsResponse
     *
     * @param ListAsrModelsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListAsrModelsResponse
     */
    public function listAsrModelsWithOptions($request, $runtime)
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
            'action' => 'ListAsrModels',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAsrModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of ASR models.
     *
     * @param request - ListAsrModelsRequest
     *
     * @returns ListAsrModelsResponse
     *
     * @param ListAsrModelsRequest $request
     *
     * @return ListAsrModelsResponse
     */
    public function listAsrModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsrModelsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of outbound campaigns.
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
     * Queries a list of outbound campaigns.
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
     * Retrieves a list of cases.
     *
     * @remarks
     *
     * @param tmpReq - ListCasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCasesResponse
     *
     * @param ListCasesRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListCasesResponse
     */
    public function listCasesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListCasesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->caseIds) {
            $request->caseIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->caseIds, 'CaseIds', 'json');
        }

        if (null !== $tmpReq->dispositionCodes) {
            $request->dispositionCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dispositionCodes, 'DispositionCodes', 'json');
        }

        if (null !== $tmpReq->dispositionReasons) {
            $request->dispositionReasonsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dispositionReasons, 'DispositionReasons', 'json');
        }

        if (null !== $tmpReq->labelSearch) {
            $request->labelSearchShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelSearch, 'LabelSearch', 'json');
        }

        if (null !== $tmpReq->states) {
            $request->statesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->states, 'States', 'json');
        }

        $query = [];
        if (null !== $request->accessChannelId) {
            @$query['AccessChannelId'] = $request->accessChannelId;
        }

        if (null !== $request->accessChannelType) {
            @$query['AccessChannelType'] = $request->accessChannelType;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->campaignId) {
            @$query['CampaignId'] = $request->campaignId;
        }

        if (null !== $request->caseCompleted) {
            @$query['CaseCompleted'] = $request->caseCompleted;
        }

        if (null !== $request->caseIdsShrink) {
            @$query['CaseIds'] = $request->caseIdsShrink;
        }

        if (null !== $request->dispositionCodesShrink) {
            @$query['DispositionCodes'] = $request->dispositionCodesShrink;
        }

        if (null !== $request->dispositionReasonsShrink) {
            @$query['DispositionReasons'] = $request->dispositionReasonsShrink;
        }

        if (null !== $request->draftVersion) {
            @$query['DraftVersion'] = $request->draftVersion;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->labelSearchShrink) {
            @$query['LabelSearch'] = $request->labelSearchShrink;
        }

        if (null !== $request->maxRingingDuration) {
            @$query['MaxRingingDuration'] = $request->maxRingingDuration;
        }

        if (null !== $request->maxTalkTime) {
            @$query['MaxTalkTime'] = $request->maxTalkTime;
        }

        if (null !== $request->maxTalkTurns) {
            @$query['MaxTalkTurns'] = $request->maxTalkTurns;
        }

        if (null !== $request->minRingingDuration) {
            @$query['MinRingingDuration'] = $request->minRingingDuration;
        }

        if (null !== $request->minTalkTime) {
            @$query['MinTalkTime'] = $request->minTalkTime;
        }

        if (null !== $request->minTalkTurns) {
            @$query['MinTalkTurns'] = $request->minTalkTurns;
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

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->statesShrink) {
            @$query['States'] = $request->statesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCases',
            'version' => '2025-11-11',
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
     * Retrieves a list of cases.
     *
     * @remarks
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
     * Queries the list of tenant numbers.
     *
     * @remarks
     * Queries the list of tenant numbers.
     *
     * @param request - ListCorpNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCorpNumbersResponse
     *
     * @param ListCorpNumbersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCorpNumbersResponse
     */
    public function listCorpNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->number) {
            @$body['Number'] = $request->number;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sipTrunkId) {
            @$body['SipTrunkId'] = $request->sipTrunkId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCorpNumbers',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCorpNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of tenant numbers.
     *
     * @remarks
     * Queries the list of tenant numbers.
     *
     * @param request - ListCorpNumbersRequest
     *
     * @returns ListCorpNumbersResponse
     *
     * @param ListCorpNumbersRequest $request
     *
     * @return ListCorpNumbersResponse
     */
    public function listCorpNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCorpNumbersWithOptions($request, $runtime);
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
     * Queries the instances bound to a number.
     *
     * @remarks
     * Queries the binding information between a number and instances.
     *
     * @param request - ListInstanceBindingsOfNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceBindingsOfNumberResponse
     *
     * @param ListInstanceBindingsOfNumberRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListInstanceBindingsOfNumberResponse
     */
    public function listInstanceBindingsOfNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->number) {
            @$body['Number'] = $request->number;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListInstanceBindingsOfNumber',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstanceBindingsOfNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the instances bound to a number.
     *
     * @remarks
     * Queries the binding information between a number and instances.
     *
     * @param request - ListInstanceBindingsOfNumberRequest
     *
     * @returns ListInstanceBindingsOfNumberResponse
     *
     * @param ListInstanceBindingsOfNumberRequest $request
     *
     * @return ListInstanceBindingsOfNumberResponse
     */
    public function listInstanceBindingsOfNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceBindingsOfNumberWithOptions($request, $runtime);
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
     * Queries the language model access configurations.
     *
     * @remarks
     * Queries the list of language model access configurations of a specified instance by paging.
     *
     * @param request - ListLlmAccessProfilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLlmAccessProfilesResponse
     *
     * @param ListLlmAccessProfilesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListLlmAccessProfilesResponse
     */
    public function listLlmAccessProfilesWithOptions($request, $runtime)
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
            'action' => 'ListLlmAccessProfiles',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLlmAccessProfilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the language model access configurations.
     *
     * @remarks
     * Queries the list of language model access configurations of a specified instance by paging.
     *
     * @param request - ListLlmAccessProfilesRequest
     *
     * @returns ListLlmAccessProfilesResponse
     *
     * @param ListLlmAccessProfilesRequest $request
     *
     * @return ListLlmAccessProfilesResponse
     */
    public function listLlmAccessProfiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLlmAccessProfilesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of numbers bound to an instance.
     *
     * @remarks
     * Queries the binding information between an instance and numbers.
     *
     * @param request - ListNumberBindingsOfInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNumberBindingsOfInstanceResponse
     *
     * @param ListNumberBindingsOfInstanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListNumberBindingsOfInstanceResponse
     */
    public function listNumberBindingsOfInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNumberBindingsOfInstance',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNumberBindingsOfInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of numbers bound to an instance.
     *
     * @remarks
     * Queries the binding information between an instance and numbers.
     *
     * @param request - ListNumberBindingsOfInstanceRequest
     *
     * @returns ListNumberBindingsOfInstanceResponse
     *
     * @param ListNumberBindingsOfInstanceRequest $request
     *
     * @return ListNumberBindingsOfInstanceResponse
     */
    public function listNumberBindingsOfInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNumberBindingsOfInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the phone numbers of an instance.
     *
     * @remarks
     * Queries the phone numbers of a specified instance.
     *
     * @param request - ListNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNumbersResponse
     *
     * @param ListNumbersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListNumbersResponse
     */
    public function listNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->number) {
            @$body['Number'] = $request->number;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sipTrunkId) {
            @$body['SipTrunkId'] = $request->sipTrunkId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNumbers',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the phone numbers of an instance.
     *
     * @remarks
     * Queries the phone numbers of a specified instance.
     *
     * @param request - ListNumbersRequest
     *
     * @returns ListNumbersResponse
     *
     * @param ListNumbersRequest $request
     *
     * @return ListNumbersResponse
     */
    public function listNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNumbersWithOptions($request, $runtime);
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
        if (null !== $request->builderType) {
            @$body['BuilderType'] = $request->builderType;
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
     * Retrieves a list of scenarios based on the flow ID.
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
     * Retrieves a list of scenarios based on the flow ID.
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
     * Initiates an outbound call.
     *
     * @remarks
     * Initiates an outbound call test to the real phone number corresponding to Number by using the specified instance and scenario. Before calling this operation, you must obtain an SMS verification code for the OutboundCallTest scenario for the called number and pass it in VerificationCode. The service verifies the code and initiates the call by using the outbound caller ID configured on the platform. DeviceId is used to bind the client data stream to the current call. CallVariables passes call variables in JSON object format, and Tags passes attached data. Upon success, a SessionId with the test- prefix is returned to associate with the current call. A successful API response does not indicate that the called party has answered or that the conversation has ended. Test only authorized numbers. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use real resources and service return values for actual calls.
     *
     * @param request - MakePilotCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MakePilotCallResponse
     *
     * @param MakePilotCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return MakePilotCallResponse
     */
    public function makePilotCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callVariables) {
            @$query['CallVariables'] = $request->callVariables;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->draftVersion) {
            @$query['DraftVersion'] = $request->draftVersion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->verificationCode) {
            @$query['VerificationCode'] = $request->verificationCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MakePilotCall',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MakePilotCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates an outbound call.
     *
     * @remarks
     * Initiates an outbound call test to the real phone number corresponding to Number by using the specified instance and scenario. Before calling this operation, you must obtain an SMS verification code for the OutboundCallTest scenario for the called number and pass it in VerificationCode. The service verifies the code and initiates the call by using the outbound caller ID configured on the platform. DeviceId is used to bind the client data stream to the current call. CallVariables passes call variables in JSON object format, and Tags passes attached data. Upon success, a SessionId with the test- prefix is returned to associate with the current call. A successful API response does not indicate that the called party has answered or that the conversation has ended. Test only authorized numbers. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use real resources and service return values for actual calls.
     *
     * @param request - MakePilotCallRequest
     *
     * @returns MakePilotCallResponse
     *
     * @param MakePilotCallRequest $request
     *
     * @return MakePilotCallResponse
     */
    public function makePilotCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->makePilotCallWithOptions($request, $runtime);
    }

    /**
     * Pauses an outbound campaign.
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
     * Pauses an outbound campaign.
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
     * Resumes an outbound campaign.
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
     * Resumes an outbound campaign.
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
     * Submits an outbound campaign.
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
     * Submits an outbound campaign.
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
     * Sends a user input to a trial text conversation.
     *
     * @remarks
     * Sends a round of user input to a trial text conversation created by BeginTrialSession and returns the robot reply in Server-Sent Events (SSE) format. Use the same InstanceId, ScriptId, SessionId, and experience link VisitorToken as those used to start the trial conversation. The service validates the token and its expiration time on each call. Utterance is plain text input, and Extras is a JSON array string of structured events such as key presses and silence. StreamEnd=true only ends the response stream for the current turn. Call EndTrialSession when the entire experience ends. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - TrialDialogueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrialDialogueResponse
     *
     * @param TrialDialogueRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return TrialDialogueResponse
     */
    public function trialDialogueWithSSE($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extras) {
            @$query['Extras'] = $request->extras;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->utterance) {
            @$query['Utterance'] = $request->utterance;
        }

        if (null !== $request->visitorToken) {
            @$query['VisitorToken'] = $request->visitorToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TrialDialogue',
            'version' => '2025-11-11',
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

                yield TrialDialogueResponse::fromMap([
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
     * Sends a user input to a trial text conversation.
     *
     * @remarks
     * Sends a round of user input to a trial text conversation created by BeginTrialSession and returns the robot reply in Server-Sent Events (SSE) format. Use the same InstanceId, ScriptId, SessionId, and experience link VisitorToken as those used to start the trial conversation. The service validates the token and its expiration time on each call. Utterance is plain text input, and Extras is a JSON array string of structured events such as key presses and silence. StreamEnd=true only ends the response stream for the current turn. Call EndTrialSession when the entire experience ends. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - TrialDialogueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrialDialogueResponse
     *
     * @param TrialDialogueRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return TrialDialogueResponse
     */
    public function trialDialogueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extras) {
            @$query['Extras'] = $request->extras;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->utterance) {
            @$query['Utterance'] = $request->utterance;
        }

        if (null !== $request->visitorToken) {
            @$query['VisitorToken'] = $request->visitorToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TrialDialogue',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TrialDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a user input to a trial text conversation.
     *
     * @remarks
     * Sends a round of user input to a trial text conversation created by BeginTrialSession and returns the robot reply in Server-Sent Events (SSE) format. Use the same InstanceId, ScriptId, SessionId, and experience link VisitorToken as those used to start the trial conversation. The service validates the token and its expiration time on each call. Utterance is plain text input, and Extras is a JSON array string of structured events such as key presses and silence. StreamEnd=true only ends the response stream for the current turn. Call EndTrialSession when the entire experience ends. The resource identifiers, numbers, and authentication credentials in the examples are desensitized or placeholder values. Use actual resources and service return values for actual calls.
     *
     * @param request - TrialDialogueRequest
     *
     * @returns TrialDialogueResponse
     *
     * @param TrialDialogueRequest $request
     *
     * @return TrialDialogueResponse
     */
    public function trialDialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->trialDialogueWithOptions($request, $runtime);
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
     * Updates the instances bound to a number.
     *
     * @remarks
     * Updates the binding between a number and instances.
     *
     * @param tmpReq - UpdateInstanceBindingsOfNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceBindingsOfNumberResponse
     *
     * @param UpdateInstanceBindingsOfNumberRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateInstanceBindingsOfNumberResponse
     */
    public function updateInstanceBindingsOfNumberWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateInstanceBindingsOfNumberShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $body = [];
        if (null !== $request->instanceIdsShrink) {
            @$body['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->number) {
            @$body['Number'] = $request->number;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceBindingsOfNumber',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceBindingsOfNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the instances bound to a number.
     *
     * @remarks
     * Updates the binding between a number and instances.
     *
     * @param request - UpdateInstanceBindingsOfNumberRequest
     *
     * @returns UpdateInstanceBindingsOfNumberResponse
     *
     * @param UpdateInstanceBindingsOfNumberRequest $request
     *
     * @return UpdateInstanceBindingsOfNumberResponse
     */
    public function updateInstanceBindingsOfNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceBindingsOfNumberWithOptions($request, $runtime);
    }

    /**
     * Updates the language model access configuration.
     *
     * @remarks
     * Updates the language model access configuration for a specified instance.
     *
     * @param tmpReq - UpdateLlmAccessProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLlmAccessProfileResponse
     *
     * @param UpdateLlmAccessProfileRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateLlmAccessProfileResponse
     */
    public function updateLlmAccessProfileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateLlmAccessProfileShrinkRequest([]);
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

        if (null !== $request->profileShrink) {
            @$body['Profile'] = $request->profileShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLlmAccessProfile',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLlmAccessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the language model access configuration.
     *
     * @remarks
     * Updates the language model access configuration for a specified instance.
     *
     * @param request - UpdateLlmAccessProfileRequest
     *
     * @returns UpdateLlmAccessProfileResponse
     *
     * @param UpdateLlmAccessProfileRequest $request
     *
     * @return UpdateLlmAccessProfileResponse
     */
    public function updateLlmAccessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLlmAccessProfileWithOptions($request, $runtime);
    }

    /**
     * Updates the phone numbers bound to an instance.
     *
     * @remarks
     * Updates the binding relationship between an instance and phone numbers.
     *
     * @param tmpReq - UpdateNumberBindingsOfInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNumberBindingsOfInstanceResponse
     *
     * @param UpdateNumberBindingsOfInstanceRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateNumberBindingsOfInstanceResponse
     */
    public function updateNumberBindingsOfInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateNumberBindingsOfInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->numbers) {
            $request->numbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->numbersShrink) {
            @$body['Numbers'] = $request->numbersShrink;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateNumberBindingsOfInstance',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNumberBindingsOfInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the phone numbers bound to an instance.
     *
     * @remarks
     * Updates the binding relationship between an instance and phone numbers.
     *
     * @param request - UpdateNumberBindingsOfInstanceRequest
     *
     * @returns UpdateNumberBindingsOfInstanceResponse
     *
     * @param UpdateNumberBindingsOfInstanceRequest $request
     *
     * @return UpdateNumberBindingsOfInstanceResponse
     */
    public function updateNumberBindingsOfInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNumberBindingsOfInstanceWithOptions($request, $runtime);
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
