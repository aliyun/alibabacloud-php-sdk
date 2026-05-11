<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\AssociateChatbotInstanceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\AssociateChatbotInstanceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\AuditTTSVoiceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\AuditTTSVoiceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\BeginDialogueRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\BeginDialogueResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\CollectedNumberRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\CollectedNumberResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\CreateDownloadUrlRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\CreateDownloadUrlResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DebugBeginDialogueRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DebugBeginDialogueResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DebugCollectedNumberRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DebugCollectedNumberResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DebugDialogueRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DebugDialogueResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeConversationContextRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeConversationContextResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeConversationRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeConversationResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeExportProgressRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeExportProgressResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeNavigationConfigRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeNavigationConfigResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeRecordingRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeRecordingResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeStatisticalDataRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeStatisticalDataResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeTTSConfigRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeTTSConfigResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DialogueRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DialogueResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DisableInstanceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DisableInstanceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\EnableInstanceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\EnableInstanceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\EndDialogueRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\EndDialogueResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ExportConversationDetailsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ExportConversationDetailsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ExportStatisticalDataRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ExportStatisticalDataResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\GetAsrConfigRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\GetAsrConfigResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\GetRealTimeConcurrencyRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\GetRealTimeConcurrencyResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListChatbotInstancesRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListChatbotInstancesResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationDetailsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationDetailsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListDownloadTasksRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListDownloadTasksResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListInstancesRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListInstancesResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifyAsrConfigRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifyAsrConfigResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifyGreetingConfigRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifyGreetingConfigResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifyInstanceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifyInstanceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifySilenceTimeoutConfigRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifySilenceTimeoutConfigResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifyTTSConfigRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifyTTSConfigResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifyUnrecognizingConfigRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ModifyUnrecognizingConfigResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\QueryConversationsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\QueryConversationsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\SaveRecordingRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\SaveRecordingResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\SilenceTimeoutRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\SilenceTimeoutResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class VoiceNavigator extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('voicenavigator', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - AssociateChatbotInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateChatbotInstanceResponse
     *
     * @param AssociateChatbotInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AssociateChatbotInstanceResponse
     */
    public function associateChatbotInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chatbotInstanceId) {
            @$query['ChatbotInstanceId'] = $request->chatbotInstanceId;
        }

        if (null !== $request->chatbotName) {
            @$query['ChatbotName'] = $request->chatbotName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nluServiceParamsJson) {
            @$query['NluServiceParamsJson'] = $request->nluServiceParamsJson;
        }

        if (null !== $request->nluServiceType) {
            @$query['NluServiceType'] = $request->nluServiceType;
        }

        if (null !== $request->unionSource) {
            @$query['UnionSource'] = $request->unionSource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateChatbotInstance',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateChatbotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AssociateChatbotInstanceRequest
     *
     * @returns AssociateChatbotInstanceResponse
     *
     * @param AssociateChatbotInstanceRequest $request
     *
     * @return AssociateChatbotInstanceResponse
     */
    public function associateChatbotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateChatbotInstanceWithOptions($request, $runtime);
    }

    /**
     * AuditTTSVoice.
     *
     * @param request - AuditTTSVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuditTTSVoiceResponse
     *
     * @param AuditTTSVoiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AuditTTSVoiceResponse
     */
    public function auditTTSVoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessKey) {
            @$query['AccessKey'] = $request->accessKey;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pitchRate) {
            @$query['PitchRate'] = $request->pitchRate;
        }

        if (null !== $request->secretKey) {
            @$query['SecretKey'] = $request->secretKey;
        }

        if (null !== $request->speechRate) {
            @$query['SpeechRate'] = $request->speechRate;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        if (null !== $request->voice) {
            @$query['Voice'] = $request->voice;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuditTTSVoice',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuditTTSVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AuditTTSVoice.
     *
     * @param request - AuditTTSVoiceRequest
     *
     * @returns AuditTTSVoiceResponse
     *
     * @param AuditTTSVoiceRequest $request
     *
     * @return AuditTTSVoiceResponse
     */
    public function auditTTSVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->auditTTSVoiceWithOptions($request, $runtime);
    }

    /**
     * 开启会话.
     *
     * @param request - BeginDialogueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BeginDialogueResponse
     *
     * @param BeginDialogueRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BeginDialogueResponse
     */
    public function beginDialogueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->initialContext) {
            @$query['InitialContext'] = $request->initialContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceOwnerId) {
            @$query['InstanceOwnerId'] = $request->instanceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BeginDialogue',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BeginDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启会话.
     *
     * @param request - BeginDialogueRequest
     *
     * @returns BeginDialogueResponse
     *
     * @param BeginDialogueRequest $request
     *
     * @return BeginDialogueResponse
     */
    public function beginDialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->beginDialogueWithOptions($request, $runtime);
    }

    /**
     * @param request - CollectedNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CollectedNumberResponse
     *
     * @param CollectedNumberRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CollectedNumberResponse
     */
    public function collectedNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->additionalContext) {
            @$query['AdditionalContext'] = $request->additionalContext;
        }

        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceOwnerId) {
            @$query['InstanceOwnerId'] = $request->instanceOwnerId;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CollectedNumber',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CollectedNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CollectedNumberRequest
     *
     * @returns CollectedNumberResponse
     *
     * @param CollectedNumberRequest $request
     *
     * @return CollectedNumberResponse
     */
    public function collectedNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->collectedNumberWithOptions($request, $runtime);
    }

    /**
     * CreateDownloadUrl.
     *
     * @param request - CreateDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDownloadUrlResponse
     *
     * @param CreateDownloadUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDownloadUrlResponse
     */
    public function createDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDownloadUrl',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateDownloadUrl.
     *
     * @param request - CreateDownloadUrlRequest
     *
     * @returns CreateDownloadUrlResponse
     *
     * @param CreateDownloadUrlRequest $request
     *
     * @return CreateDownloadUrlResponse
     */
    public function createDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDownloadUrlWithOptions($request, $runtime);
    }

    /**
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
        $query = [];
        if (null !== $request->concurrency) {
            @$query['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nluServiceParamsJson) {
            @$query['NluServiceParamsJson'] = $request->nluServiceParamsJson;
        }

        if (null !== $request->unionInstanceId) {
            @$query['UnionInstanceId'] = $request->unionInstanceId;
        }

        if (null !== $request->unionSource) {
            @$query['UnionSource'] = $request->unionSource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2018-06-12',
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
     * @param request - DebugBeginDialogueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DebugBeginDialogueResponse
     *
     * @param DebugBeginDialogueRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DebugBeginDialogueResponse
     */
    public function debugBeginDialogueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->initialContext) {
            @$query['InitialContext'] = $request->initialContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DebugBeginDialogue',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DebugBeginDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DebugBeginDialogueRequest
     *
     * @returns DebugBeginDialogueResponse
     *
     * @param DebugBeginDialogueRequest $request
     *
     * @return DebugBeginDialogueResponse
     */
    public function debugBeginDialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->debugBeginDialogueWithOptions($request, $runtime);
    }

    /**
     * DebugCollectedNumber.
     *
     * @param request - DebugCollectedNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DebugCollectedNumberResponse
     *
     * @param DebugCollectedNumberRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DebugCollectedNumberResponse
     */
    public function debugCollectedNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DebugCollectedNumber',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DebugCollectedNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DebugCollectedNumber.
     *
     * @param request - DebugCollectedNumberRequest
     *
     * @returns DebugCollectedNumberResponse
     *
     * @param DebugCollectedNumberRequest $request
     *
     * @return DebugCollectedNumberResponse
     */
    public function debugCollectedNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->debugCollectedNumberWithOptions($request, $runtime);
    }

    /**
     * @param request - DebugDialogueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DebugDialogueResponse
     *
     * @param DebugDialogueRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DebugDialogueResponse
     */
    public function debugDialogueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->additionalContext) {
            @$query['AdditionalContext'] = $request->additionalContext;
        }

        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->utterance) {
            @$query['Utterance'] = $request->utterance;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DebugDialogue',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DebugDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DebugDialogueRequest
     *
     * @returns DebugDialogueResponse
     *
     * @param DebugDialogueRequest $request
     *
     * @return DebugDialogueResponse
     */
    public function debugDialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->debugDialogueWithOptions($request, $runtime);
    }

    /**
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
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2018-06-12',
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
     * @param request - DescribeConversationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConversationResponse
     *
     * @param DescribeConversationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeConversationResponse
     */
    public function describeConversationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeConversation',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeConversationRequest
     *
     * @returns DescribeConversationResponse
     *
     * @param DescribeConversationRequest $request
     *
     * @return DescribeConversationResponse
     */
    public function describeConversation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConversationWithOptions($request, $runtime);
    }

    /**
     * DescribeConversationContext.
     *
     * @param request - DescribeConversationContextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConversationContextResponse
     *
     * @param DescribeConversationContextRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeConversationContextResponse
     */
    public function describeConversationContextWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeConversationContext',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeConversationContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeConversationContext.
     *
     * @param request - DescribeConversationContextRequest
     *
     * @returns DescribeConversationContextResponse
     *
     * @param DescribeConversationContextRequest $request
     *
     * @return DescribeConversationContextResponse
     */
    public function describeConversationContext($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConversationContextWithOptions($request, $runtime);
    }

    /**
     * DescribeExportProgress.
     *
     * @param request - DescribeExportProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExportProgressResponse
     *
     * @param DescribeExportProgressRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeExportProgressResponse
     */
    public function describeExportProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExportProgress',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExportProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeExportProgress.
     *
     * @param request - DescribeExportProgressRequest
     *
     * @returns DescribeExportProgressResponse
     *
     * @param DescribeExportProgressRequest $request
     *
     * @return DescribeExportProgressResponse
     */
    public function describeExportProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExportProgressWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstance',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstanceRequest
     *
     * @returns DescribeInstanceResponse
     *
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeNavigationConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNavigationConfigResponse
     *
     * @param DescribeNavigationConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeNavigationConfigResponse
     */
    public function describeNavigationConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNavigationConfig',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNavigationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeNavigationConfigRequest
     *
     * @returns DescribeNavigationConfigResponse
     *
     * @param DescribeNavigationConfigRequest $request
     *
     * @return DescribeNavigationConfigResponse
     */
    public function describeNavigationConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNavigationConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecordingResponse
     *
     * @param DescribeRecordingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeRecordingResponse
     */
    public function describeRecordingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecording',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRecordingRequest
     *
     * @returns DescribeRecordingResponse
     *
     * @param DescribeRecordingRequest $request
     *
     * @return DescribeRecordingResponse
     */
    public function describeRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordingWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeStatisticalDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStatisticalDataResponse
     *
     * @param DescribeStatisticalDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeStatisticalDataResponse
     */
    public function describeStatisticalDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStatisticalData',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStatisticalDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeStatisticalDataRequest
     *
     * @returns DescribeStatisticalDataResponse
     *
     * @param DescribeStatisticalDataRequest $request
     *
     * @return DescribeStatisticalDataResponse
     */
    public function describeStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStatisticalDataWithOptions($request, $runtime);
    }

    /**
     * 获取TTS配置.
     *
     * @param request - DescribeTTSConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTTSConfigResponse
     *
     * @param DescribeTTSConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTTSConfigResponse
     */
    public function describeTTSConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTTSConfig',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTTSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取TTS配置.
     *
     * @param request - DescribeTTSConfigRequest
     *
     * @returns DescribeTTSConfigResponse
     *
     * @param DescribeTTSConfigRequest $request
     *
     * @return DescribeTTSConfigResponse
     */
    public function describeTTSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTTSConfigWithOptions($request, $runtime);
    }

    /**
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
        if (null !== $request->additionalContext) {
            @$query['AdditionalContext'] = $request->additionalContext;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->emotion) {
            @$query['Emotion'] = $request->emotion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceOwnerId) {
            @$query['InstanceOwnerId'] = $request->instanceOwnerId;
        }

        if (null !== $request->utterance) {
            @$query['Utterance'] = $request->utterance;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Dialogue',
            'version' => '2018-06-12',
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
     * @param request - DisableInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableInstanceResponse
     *
     * @param DisableInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisableInstanceResponse
     */
    public function disableInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableInstance',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DisableInstanceRequest
     *
     * @returns DisableInstanceResponse
     *
     * @param DisableInstanceRequest $request
     *
     * @return DisableInstanceResponse
     */
    public function disableInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - EnableInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableInstanceResponse
     *
     * @param EnableInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableInstanceResponse
     */
    public function enableInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableInstance',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableInstanceRequest
     *
     * @returns EnableInstanceResponse
     *
     * @param EnableInstanceRequest $request
     *
     * @return EnableInstanceResponse
     */
    public function enableInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - EndDialogueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EndDialogueResponse
     *
     * @param EndDialogueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EndDialogueResponse
     */
    public function endDialogueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->hangUpParams) {
            @$query['HangUpParams'] = $request->hangUpParams;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceOwnerId) {
            @$query['InstanceOwnerId'] = $request->instanceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EndDialogue',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EndDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EndDialogueRequest
     *
     * @returns EndDialogueResponse
     *
     * @param EndDialogueRequest $request
     *
     * @return EndDialogueResponse
     */
    public function endDialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->endDialogueWithOptions($request, $runtime);
    }

    /**
     * ExportConversationDetails.
     *
     * @param request - ExportConversationDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportConversationDetailsResponse
     *
     * @param ExportConversationDetailsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ExportConversationDetailsResponse
     */
    public function exportConversationDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTimeLeftRange) {
            @$query['BeginTimeLeftRange'] = $request->beginTimeLeftRange;
        }

        if (null !== $request->beginTimeRightRange) {
            @$query['BeginTimeRightRange'] = $request->beginTimeRightRange;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->debugConversation) {
            @$query['DebugConversation'] = $request->debugConversation;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->options) {
            @$query['Options'] = $request->options;
        }

        if (null !== $request->result) {
            @$query['Result'] = $request->result;
        }

        if (null !== $request->roundsLeftRange) {
            @$query['RoundsLeftRange'] = $request->roundsLeftRange;
        }

        if (null !== $request->roundsRightRange) {
            @$query['RoundsRightRange'] = $request->roundsRightRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportConversationDetails',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportConversationDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ExportConversationDetails.
     *
     * @param request - ExportConversationDetailsRequest
     *
     * @returns ExportConversationDetailsResponse
     *
     * @param ExportConversationDetailsRequest $request
     *
     * @return ExportConversationDetailsResponse
     */
    public function exportConversationDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportConversationDetailsWithOptions($request, $runtime);
    }

    /**
     * @param request - ExportStatisticalDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportStatisticalDataResponse
     *
     * @param ExportStatisticalDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExportStatisticalDataResponse
     */
    public function exportStatisticalDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTimeLeftRange) {
            @$query['BeginTimeLeftRange'] = $request->beginTimeLeftRange;
        }

        if (null !== $request->beginTimeRightRange) {
            @$query['BeginTimeRightRange'] = $request->beginTimeRightRange;
        }

        if (null !== $request->exportType) {
            @$query['ExportType'] = $request->exportType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->timeUnit) {
            @$query['TimeUnit'] = $request->timeUnit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportStatisticalData',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportStatisticalDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ExportStatisticalDataRequest
     *
     * @returns ExportStatisticalDataResponse
     *
     * @param ExportStatisticalDataRequest $request
     *
     * @return ExportStatisticalDataResponse
     */
    public function exportStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportStatisticalDataWithOptions($request, $runtime);
    }

    /**
     * 获取Asr配置.
     *
     * @param request - GetAsrConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsrConfigResponse
     *
     * @param GetAsrConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAsrConfigResponse
     */
    public function getAsrConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configLevel) {
            @$query['ConfigLevel'] = $request->configLevel;
        }

        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAsrConfig',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAsrConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Asr配置.
     *
     * @param request - GetAsrConfigRequest
     *
     * @returns GetAsrConfigResponse
     *
     * @param GetAsrConfigRequest $request
     *
     * @return GetAsrConfigResponse
     */
    public function getAsrConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsrConfigWithOptions($request, $runtime);
    }

    /**
     * GetRealTimeConcurrency.
     *
     * @param request - GetRealTimeConcurrencyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRealTimeConcurrencyResponse
     *
     * @param GetRealTimeConcurrencyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetRealTimeConcurrencyResponse
     */
    public function getRealTimeConcurrencyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRealTimeConcurrency',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRealTimeConcurrencyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetRealTimeConcurrency.
     *
     * @param request - GetRealTimeConcurrencyRequest
     *
     * @returns GetRealTimeConcurrencyResponse
     *
     * @param GetRealTimeConcurrencyRequest $request
     *
     * @return GetRealTimeConcurrencyResponse
     */
    public function getRealTimeConcurrency($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealTimeConcurrencyWithOptions($request, $runtime);
    }

    /**
     * @param request - ListChatbotInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChatbotInstancesResponse
     *
     * @param ListChatbotInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListChatbotInstancesResponse
     */
    public function listChatbotInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChatbotInstances',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListChatbotInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListChatbotInstancesRequest
     *
     * @returns ListChatbotInstancesResponse
     *
     * @param ListChatbotInstancesRequest $request
     *
     * @return ListChatbotInstancesResponse
     */
    public function listChatbotInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChatbotInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListConversationDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConversationDetailsResponse
     *
     * @param ListConversationDetailsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListConversationDetailsResponse
     */
    public function listConversationDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConversationDetails',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConversationDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListConversationDetailsRequest
     *
     * @returns ListConversationDetailsResponse
     *
     * @param ListConversationDetailsRequest $request
     *
     * @return ListConversationDetailsResponse
     */
    public function listConversationDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConversationDetailsWithOptions($request, $runtime);
    }

    /**
     * 查询会话列表.
     *
     * @param request - ListConversationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConversationsResponse
     *
     * @param ListConversationsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListConversationsResponse
     */
    public function listConversationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConversations',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConversationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询会话列表.
     *
     * @param request - ListConversationsRequest
     *
     * @returns ListConversationsResponse
     *
     * @param ListConversationsRequest $request
     *
     * @return ListConversationsResponse
     */
    public function listConversations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConversationsWithOptions($request, $runtime);
    }

    /**
     * 下载列表.
     *
     * @param request - ListDownloadTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDownloadTasksResponse
     *
     * @param ListDownloadTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDownloadTasksResponse
     */
    public function listDownloadTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'ListDownloadTasks',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDownloadTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下载列表.
     *
     * @param request - ListDownloadTasksRequest
     *
     * @returns ListDownloadTasksResponse
     *
     * @param ListDownloadTasksRequest $request
     *
     * @return ListDownloadTasksResponse
     */
    public function listDownloadTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDownloadTasksWithOptions($request, $runtime);
    }

    /**
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
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * 修改Asr配置.
     *
     * @param request - ModifyAsrConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAsrConfigResponse
     *
     * @param ModifyAsrConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyAsrConfigResponse
     */
    public function modifyAsrConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->asrAcousticModelId) {
            @$query['AsrAcousticModelId'] = $request->asrAcousticModelId;
        }

        if (null !== $request->asrClassVocabularyId) {
            @$query['AsrClassVocabularyId'] = $request->asrClassVocabularyId;
        }

        if (null !== $request->asrCustomizationId) {
            @$query['AsrCustomizationId'] = $request->asrCustomizationId;
        }

        if (null !== $request->asrOverrides) {
            @$query['AsrOverrides'] = $request->asrOverrides;
        }

        if (null !== $request->asrVocabularyId) {
            @$query['AsrVocabularyId'] = $request->asrVocabularyId;
        }

        if (null !== $request->configLevel) {
            @$query['ConfigLevel'] = $request->configLevel;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->entryId) {
            @$query['EntryId'] = $request->entryId;
        }

        if (null !== $request->nlsServiceType) {
            @$query['NlsServiceType'] = $request->nlsServiceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAsrConfig',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAsrConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改Asr配置.
     *
     * @param request - ModifyAsrConfigRequest
     *
     * @returns ModifyAsrConfigResponse
     *
     * @param ModifyAsrConfigRequest $request
     *
     * @return ModifyAsrConfigResponse
     */
    public function modifyAsrConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAsrConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyGreetingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGreetingConfigResponse
     *
     * @param ModifyGreetingConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyGreetingConfigResponse
     */
    public function modifyGreetingConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->greetingWords) {
            @$query['GreetingWords'] = $request->greetingWords;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentTrigger) {
            @$query['IntentTrigger'] = $request->intentTrigger;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyGreetingConfig',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGreetingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyGreetingConfigRequest
     *
     * @returns ModifyGreetingConfigResponse
     *
     * @param ModifyGreetingConfigRequest $request
     *
     * @return ModifyGreetingConfigResponse
     */
    public function modifyGreetingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGreetingConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceResponse
     *
     * @param ModifyInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->concurrency) {
            @$query['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstance',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyInstanceRequest
     *
     * @returns ModifyInstanceResponse
     *
     * @param ModifyInstanceRequest $request
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifySilenceTimeoutConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySilenceTimeoutConfigResponse
     *
     * @param ModifySilenceTimeoutConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifySilenceTimeoutConfigResponse
     */
    public function modifySilenceTimeoutConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->finalAction) {
            @$query['FinalAction'] = $request->finalAction;
        }

        if (null !== $request->finalActionParams) {
            @$query['FinalActionParams'] = $request->finalActionParams;
        }

        if (null !== $request->finalPrompt) {
            @$query['FinalPrompt'] = $request->finalPrompt;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentTrigger) {
            @$query['IntentTrigger'] = $request->intentTrigger;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySilenceTimeoutConfig',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySilenceTimeoutConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifySilenceTimeoutConfigRequest
     *
     * @returns ModifySilenceTimeoutConfigResponse
     *
     * @param ModifySilenceTimeoutConfigRequest $request
     *
     * @return ModifySilenceTimeoutConfigResponse
     */
    public function modifySilenceTimeoutConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySilenceTimeoutConfigWithOptions($request, $runtime);
    }

    /**
     * 修改TTS配置.
     *
     * @param request - ModifyTTSConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTTSConfigResponse
     *
     * @param ModifyTTSConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyTTSConfigResponse
     */
    public function modifyTTSConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliCustomizedVoice) {
            @$query['AliCustomizedVoice'] = $request->aliCustomizedVoice;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineXunfei) {
            @$query['EngineXunfei'] = $request->engineXunfei;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nlsServiceType) {
            @$query['NlsServiceType'] = $request->nlsServiceType;
        }

        if (null !== $request->pitchRate) {
            @$query['PitchRate'] = $request->pitchRate;
        }

        if (null !== $request->speechRate) {
            @$query['SpeechRate'] = $request->speechRate;
        }

        if (null !== $request->ttsOverrides) {
            @$query['TtsOverrides'] = $request->ttsOverrides;
        }

        if (null !== $request->voice) {
            @$query['Voice'] = $request->voice;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTTSConfig',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTTSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改TTS配置.
     *
     * @param request - ModifyTTSConfigRequest
     *
     * @returns ModifyTTSConfigResponse
     *
     * @param ModifyTTSConfigRequest $request
     *
     * @return ModifyTTSConfigResponse
     */
    public function modifyTTSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTTSConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyUnrecognizingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUnrecognizingConfigResponse
     *
     * @param ModifyUnrecognizingConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyUnrecognizingConfigResponse
     */
    public function modifyUnrecognizingConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->finalAction) {
            @$query['FinalAction'] = $request->finalAction;
        }

        if (null !== $request->finalActionParams) {
            @$query['FinalActionParams'] = $request->finalActionParams;
        }

        if (null !== $request->finalPrompt) {
            @$query['FinalPrompt'] = $request->finalPrompt;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUnrecognizingConfig',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUnrecognizingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyUnrecognizingConfigRequest
     *
     * @returns ModifyUnrecognizingConfigResponse
     *
     * @param ModifyUnrecognizingConfigRequest $request
     *
     * @return ModifyUnrecognizingConfigResponse
     */
    public function modifyUnrecognizingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUnrecognizingConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryConversationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConversationsResponse
     *
     * @param QueryConversationsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryConversationsResponse
     */
    public function queryConversationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryConversations',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryConversationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryConversationsRequest
     *
     * @returns QueryConversationsResponse
     *
     * @param QueryConversationsRequest $request
     *
     * @return QueryConversationsResponse
     */
    public function queryConversations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConversationsWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveRecordingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveRecordingResponse
     *
     * @param SaveRecordingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SaveRecordingResponse
     */
    public function saveRecordingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceOwnerId) {
            @$query['InstanceOwnerId'] = $request->instanceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->voiceSliceRecordingList) {
            @$query['VoiceSliceRecordingList'] = $request->voiceSliceRecordingList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveRecording',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveRecordingRequest
     *
     * @returns SaveRecordingResponse
     *
     * @param SaveRecordingRequest $request
     *
     * @return SaveRecordingResponse
     */
    public function saveRecording($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveRecordingWithOptions($request, $runtime);
    }

    /**
     * @param request - SilenceTimeoutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SilenceTimeoutResponse
     *
     * @param SilenceTimeoutRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SilenceTimeoutResponse
     */
    public function silenceTimeoutWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->conversationId) {
            @$query['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->initialContext) {
            @$query['InitialContext'] = $request->initialContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceOwnerId) {
            @$query['InstanceOwnerId'] = $request->instanceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SilenceTimeout',
            'version' => '2018-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SilenceTimeoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SilenceTimeoutRequest
     *
     * @returns SilenceTimeoutResponse
     *
     * @param SilenceTimeoutRequest $request
     *
     * @return SilenceTimeoutResponse
     */
    public function silenceTimeout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->silenceTimeoutWithOptions($request, $runtime);
    }
}
