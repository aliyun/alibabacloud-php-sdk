<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\GenerateUploadUrlRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\GenerateUploadUrlResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AssociateChatbotInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AssociateChatbotInstanceResponse
     */
    public function associateChatbotInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chatbotInstanceId)) {
            $query['ChatbotInstanceId'] = $request->chatbotInstanceId;
        }
        if (!Utils::isUnset($request->chatbotName)) {
            $query['ChatbotName'] = $request->chatbotName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateChatbotInstance',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateChatbotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AuditTTSVoiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AuditTTSVoiceResponse
     */
    public function auditTTSVoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->speechRate)) {
            $query['SpeechRate'] = $request->speechRate;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->voice)) {
            $query['Voice'] = $request->voice;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuditTTSVoice',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuditTTSVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param BeginDialogueRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BeginDialogueResponse
     */
    public function beginDialogueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->conversationId)) {
            $query['ConversationId'] = $request->conversationId;
        }
        if (!Utils::isUnset($request->initialContext)) {
            $query['InitialContext'] = $request->initialContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceOwnerId)) {
            $query['InstanceOwnerId'] = $request->instanceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BeginDialogue',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BeginDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CollectedNumberRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CollectedNumberResponse
     */
    public function collectedNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->conversationId)) {
            $query['ConversationId'] = $request->conversationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceOwnerId)) {
            $query['InstanceOwnerId'] = $request->instanceOwnerId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CollectedNumber',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CollectedNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateDownloadUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDownloadUrlResponse
     */
    public function createDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDownloadUrl',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->concurrency)) {
            $query['Concurrency'] = $request->concurrency;
        }
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
            'action'      => 'CreateInstance',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DebugBeginDialogueRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DebugBeginDialogueResponse
     */
    public function debugBeginDialogueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->conversationId)) {
            $query['ConversationId'] = $request->conversationId;
        }
        if (!Utils::isUnset($request->initialContext)) {
            $query['InitialContext'] = $request->initialContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DebugBeginDialogue',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DebugBeginDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DebugCollectedNumberRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DebugCollectedNumberResponse
     */
    public function debugCollectedNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->conversationId)) {
            $query['ConversationId'] = $request->conversationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DebugCollectedNumber',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DebugCollectedNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DebugDialogueRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DebugDialogueResponse
     */
    public function debugDialogueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->additionalContext)) {
            $query['AdditionalContext'] = $request->additionalContext;
        }
        if (!Utils::isUnset($request->conversationId)) {
            $query['ConversationId'] = $request->conversationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->utterance)) {
            $query['Utterance'] = $request->utterance;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DebugDialogue',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DebugDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeConversationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeConversationResponse
     */
    public function describeConversationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConversation',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeConversationContextRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeConversationContextResponse
     */
    public function describeConversationContextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConversationContext',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConversationContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeExportProgressRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeExportProgressResponse
     */
    public function describeExportProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExportProgress',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExportProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeNavigationConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeNavigationConfigResponse
     */
    public function describeNavigationConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNavigationConfig',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNavigationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRecordingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeRecordingResponse
     */
    public function describeRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecording',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeStatisticalDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeStatisticalDataResponse
     */
    public function describeStatisticalDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStatisticalData',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStatisticalDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeTTSConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTTSConfigResponse
     */
    public function describeTTSConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTTSConfig',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTTSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DialogueRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DialogueResponse
     */
    public function dialogueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->additionalContext)) {
            $query['AdditionalContext'] = $request->additionalContext;
        }
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->conversationId)) {
            $query['ConversationId'] = $request->conversationId;
        }
        if (!Utils::isUnset($request->emotion)) {
            $query['Emotion'] = $request->emotion;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceOwnerId)) {
            $query['InstanceOwnerId'] = $request->instanceOwnerId;
        }
        if (!Utils::isUnset($request->utterance)) {
            $query['Utterance'] = $request->utterance;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Dialogue',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DisableInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisableInstanceResponse
     */
    public function disableInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableInstance',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param EnableInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableInstanceResponse
     */
    public function enableInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableInstance',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param EndDialogueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EndDialogueResponse
     */
    public function endDialogueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->conversationId)) {
            $query['ConversationId'] = $request->conversationId;
        }
        if (!Utils::isUnset($request->hangUpParams)) {
            $query['HangUpParams'] = $request->hangUpParams;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceOwnerId)) {
            $query['InstanceOwnerId'] = $request->instanceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EndDialogue',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EndDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ExportConversationDetailsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ExportConversationDetailsResponse
     */
    public function exportConversationDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTimeLeftRange)) {
            $query['BeginTimeLeftRange'] = $request->beginTimeLeftRange;
        }
        if (!Utils::isUnset($request->beginTimeRightRange)) {
            $query['BeginTimeRightRange'] = $request->beginTimeRightRange;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->options)) {
            $query['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->roundsLeftRange)) {
            $query['RoundsLeftRange'] = $request->roundsLeftRange;
        }
        if (!Utils::isUnset($request->roundsRightRange)) {
            $query['RoundsRightRange'] = $request->roundsRightRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportConversationDetails',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportConversationDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ExportStatisticalDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExportStatisticalDataResponse
     */
    public function exportStatisticalDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTimeLeftRange)) {
            $query['BeginTimeLeftRange'] = $request->beginTimeLeftRange;
        }
        if (!Utils::isUnset($request->beginTimeRightRange)) {
            $query['BeginTimeRightRange'] = $request->beginTimeRightRange;
        }
        if (!Utils::isUnset($request->exportType)) {
            $query['ExportType'] = $request->exportType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->timeUnit)) {
            $query['TimeUnit'] = $request->timeUnit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportStatisticalData',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportStatisticalDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GenerateUploadUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateUploadUrlResponse
     */
    public function generateUploadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callerBid)) {
            $body['CallerBid'] = $request->callerBid;
        }
        if (!Utils::isUnset($request->callerIp)) {
            $body['CallerIp'] = $request->callerIp;
        }
        if (!Utils::isUnset($request->callerParentId)) {
            $body['CallerParentId'] = $request->callerParentId;
        }
        if (!Utils::isUnset($request->callerType)) {
            $body['CallerType'] = $request->callerType;
        }
        if (!Utils::isUnset($request->callerUid)) {
            $body['CallerUid'] = $request->callerUid;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $body['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->environment)) {
            $body['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceOwnerId)) {
            $body['InstanceOwnerId'] = $request->instanceOwnerId;
        }
        if (!Utils::isUnset($request->key)) {
            $body['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->mfaPresent)) {
            $body['MfaPresent'] = $request->mfaPresent;
        }
        if (!Utils::isUnset($request->proxyOriginalSecurityTransport)) {
            $body['ProxyOriginalSecurityTransport'] = $request->proxyOriginalSecurityTransport;
        }
        if (!Utils::isUnset($request->proxyOriginalSourceIp)) {
            $body['ProxyOriginalSourceIp'] = $request->proxyOriginalSourceIp;
        }
        if (!Utils::isUnset($request->proxyTrustTransportInfo)) {
            $body['ProxyTrustTransportInfo'] = $request->proxyTrustTransportInfo;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $body['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->securityTransport)) {
            $body['SecurityTransport'] = $request->securityTransport;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->tenantName)) {
            $body['TenantName'] = $request->tenantName;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->xspaceServicerId)) {
            $body['XspaceServicerId'] = $request->xspaceServicerId;
        }
        if (!Utils::isUnset($request->xspaceTenantBuId)) {
            $body['XspaceTenantBuId'] = $request->xspaceTenantBuId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateUploadUrl',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateUploadUrlRequest $request
     *
     * @return GenerateUploadUrlResponse
     */
    public function generateUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetAsrConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAsrConfigResponse
     */
    public function getAsrConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configLevel)) {
            $query['ConfigLevel'] = $request->configLevel;
        }
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAsrConfig',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsrConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetRealTimeConcurrencyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetRealTimeConcurrencyResponse
     */
    public function getRealTimeConcurrencyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRealTimeConcurrency',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRealTimeConcurrencyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListChatbotInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListChatbotInstancesResponse
     */
    public function listChatbotInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListChatbotInstances',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListChatbotInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListConversationDetailsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListConversationDetailsResponse
     */
    public function listConversationDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConversationDetails',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConversationDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListConversationsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListConversationsResponse
     */
    public function listConversationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConversations',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConversationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListDownloadTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDownloadTasksResponse
     */
    public function listDownloadTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDownloadTasks',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDownloadTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyAsrConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyAsrConfigResponse
     */
    public function modifyAsrConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asrAcousticModelId)) {
            $query['AsrAcousticModelId'] = $request->asrAcousticModelId;
        }
        if (!Utils::isUnset($request->asrClassVocabularyId)) {
            $query['AsrClassVocabularyId'] = $request->asrClassVocabularyId;
        }
        if (!Utils::isUnset($request->asrCustomizationId)) {
            $query['AsrCustomizationId'] = $request->asrCustomizationId;
        }
        if (!Utils::isUnset($request->asrVocabularyId)) {
            $query['AsrVocabularyId'] = $request->asrVocabularyId;
        }
        if (!Utils::isUnset($request->configLevel)) {
            $query['ConfigLevel'] = $request->configLevel;
        }
        if (!Utils::isUnset($request->entryId)) {
            $query['EntryId'] = $request->entryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAsrConfig',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAsrConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyGreetingConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyGreetingConfigResponse
     */
    public function modifyGreetingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->greetingWords)) {
            $query['GreetingWords'] = $request->greetingWords;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentTrigger)) {
            $query['IntentTrigger'] = $request->intentTrigger;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGreetingConfig',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGreetingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->concurrency)) {
            $query['Concurrency'] = $request->concurrency;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstance',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifySilenceTimeoutConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifySilenceTimeoutConfigResponse
     */
    public function modifySilenceTimeoutConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->finalAction)) {
            $query['FinalAction'] = $request->finalAction;
        }
        if (!Utils::isUnset($request->finalActionParams)) {
            $query['FinalActionParams'] = $request->finalActionParams;
        }
        if (!Utils::isUnset($request->finalPrompt)) {
            $query['FinalPrompt'] = $request->finalPrompt;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentTrigger)) {
            $query['IntentTrigger'] = $request->intentTrigger;
        }
        if (!Utils::isUnset($request->prompt)) {
            $query['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySilenceTimeoutConfig',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySilenceTimeoutConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyTTSConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyTTSConfigResponse
     */
    public function modifyTTSConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nlsServiceType)) {
            $query['NlsServiceType'] = $request->nlsServiceType;
        }
        if (!Utils::isUnset($request->speechRate)) {
            $query['SpeechRate'] = $request->speechRate;
        }
        if (!Utils::isUnset($request->voice)) {
            $query['Voice'] = $request->voice;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTTSConfig',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTTSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyUnrecognizingConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyUnrecognizingConfigResponse
     */
    public function modifyUnrecognizingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->finalAction)) {
            $query['FinalAction'] = $request->finalAction;
        }
        if (!Utils::isUnset($request->finalActionParams)) {
            $query['FinalActionParams'] = $request->finalActionParams;
        }
        if (!Utils::isUnset($request->finalPrompt)) {
            $query['FinalPrompt'] = $request->finalPrompt;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->prompt)) {
            $query['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUnrecognizingConfig',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUnrecognizingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryConversationsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryConversationsResponse
     */
    public function queryConversationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryConversations',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConversationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SaveRecordingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SaveRecordingResponse
     */
    public function saveRecordingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->conversationId)) {
            $query['ConversationId'] = $request->conversationId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceOwnerId)) {
            $query['InstanceOwnerId'] = $request->instanceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->voiceSliceRecordingList)) {
            $query['VoiceSliceRecordingList'] = $request->voiceSliceRecordingList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveRecording',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveRecordingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SilenceTimeoutRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SilenceTimeoutResponse
     */
    public function silenceTimeoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->conversationId)) {
            $query['ConversationId'] = $request->conversationId;
        }
        if (!Utils::isUnset($request->initialContext)) {
            $query['InitialContext'] = $request->initialContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceOwnerId)) {
            $query['InstanceOwnerId'] = $request->instanceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SilenceTimeout',
            'version'     => '2018-06-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SilenceTimeoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
