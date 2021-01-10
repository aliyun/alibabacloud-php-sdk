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
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListChatbotInstancesRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListChatbotInstancesResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationDetailsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationDetailsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListInstancesRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListInstancesResponse;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateChatbotInstanceResponse::fromMap($this->doRPCRequest('AssociateChatbotInstance', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AuditTTSVoiceResponse::fromMap($this->doRPCRequest('AuditTTSVoice', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BeginDialogueResponse::fromMap($this->doRPCRequest('BeginDialogue', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CollectedNumberResponse::fromMap($this->doRPCRequest('CollectedNumber', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceResponse::fromMap($this->doRPCRequest('CreateInstance', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DebugBeginDialogueResponse::fromMap($this->doRPCRequest('DebugBeginDialogue', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DebugCollectedNumberResponse::fromMap($this->doRPCRequest('DebugCollectedNumber', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DebugDialogueResponse::fromMap($this->doRPCRequest('DebugDialogue', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceResponse::fromMap($this->doRPCRequest('DeleteInstance', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeConversationResponse::fromMap($this->doRPCRequest('DescribeConversation', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeConversationContextResponse::fromMap($this->doRPCRequest('DescribeConversationContext', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeExportProgressResponse::fromMap($this->doRPCRequest('DescribeExportProgress', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeInstanceResponse::fromMap($this->doRPCRequest('DescribeInstance', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeNavigationConfigResponse::fromMap($this->doRPCRequest('DescribeNavigationConfig', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeRecordingResponse::fromMap($this->doRPCRequest('DescribeRecording', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeStatisticalDataResponse::fromMap($this->doRPCRequest('DescribeStatisticalData', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeTTSConfigResponse::fromMap($this->doRPCRequest('DescribeTTSConfig', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DialogueResponse::fromMap($this->doRPCRequest('Dialogue', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableInstanceResponse::fromMap($this->doRPCRequest('DisableInstance', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableInstanceResponse::fromMap($this->doRPCRequest('EnableInstance', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EndDialogueResponse::fromMap($this->doRPCRequest('EndDialogue', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExportConversationDetailsResponse::fromMap($this->doRPCRequest('ExportConversationDetails', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExportStatisticalDataResponse::fromMap($this->doRPCRequest('ExportStatisticalData', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListChatbotInstancesResponse::fromMap($this->doRPCRequest('ListChatbotInstances', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListConversationDetailsResponse::fromMap($this->doRPCRequest('ListConversationDetails', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListConversationsResponse::fromMap($this->doRPCRequest('ListConversations', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListInstancesResponse::fromMap($this->doRPCRequest('ListInstances', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param ModifyGreetingConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyGreetingConfigResponse
     */
    public function modifyGreetingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyGreetingConfigResponse::fromMap($this->doRPCRequest('ModifyGreetingConfig', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceResponse::fromMap($this->doRPCRequest('ModifyInstance', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySilenceTimeoutConfigResponse::fromMap($this->doRPCRequest('ModifySilenceTimeoutConfig', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyTTSConfigResponse::fromMap($this->doRPCRequest('ModifyTTSConfig', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyUnrecognizingConfigResponse::fromMap($this->doRPCRequest('ModifyUnrecognizingConfig', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return QueryConversationsResponse::fromMap($this->doRPCRequest('QueryConversations', '2018-06-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveRecordingResponse::fromMap($this->doRPCRequest('SaveRecording', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SilenceTimeoutResponse::fromMap($this->doRPCRequest('SilenceTimeout', '2018-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
