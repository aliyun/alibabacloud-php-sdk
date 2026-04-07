<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateCloneVoiceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateCloneVoiceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionShrinkRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateVariableRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateVariableResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateVocabularyRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateVocabularyResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateVocabularyShrinkRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateVoiceAccessProfileRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateVoiceAccessProfileResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateVoiceAccessProfileShrinkRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DeleteCloneVoiceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DeleteCloneVoiceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DeleteScriptRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DeleteScriptResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DeleteVariableRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DeleteVariableResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DeleteVocabularyRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DeleteVocabularyResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DeleteVoiceAccessProfileRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DeleteVoiceAccessProfileResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DisableSubscriptionRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\DisableSubscriptionResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ExportScriptRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ExportScriptResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ExportVocabularyRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ExportVocabularyResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ExportVocabularyShrinkRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GenerateFileUploadParamsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GenerateFileUploadParamsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetCallDetailRecordRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetCallDetailRecordResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetRealtimeInstanceStatsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetRealtimeInstanceStatsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetRecordingRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetRecordingResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetSubscriptionRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetSubscriptionResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetVocabularyRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetVocabularyResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ImportVocabularyRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ImportVocabularyResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListBackgroundMusicsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListBackgroundMusicsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListCallDetailRecordsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListCallDetailRecordsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListCallDetailRecordsShrinkRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListCloneVoiceModelsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListCloneVoiceModelsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListCloneVoiceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListCloneVoiceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListNluModelsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListNluModelsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListScriptProfileTemplatesRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListScriptProfileTemplatesResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListScriptsRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListScriptsResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListScriptsShrinkRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVariableRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVariableResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVocabularyRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVocabularyResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoiceAccessProfileRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoiceAccessProfileResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoiceEnginesRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoiceEnginesResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoicesRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoicesResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\PreviewVoiceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\PreviewVoiceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\PreviewVoiceShrinkRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\PublishScriptRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\PublishScriptResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateCloneVoiceRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateCloneVoiceResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateScriptRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateScriptResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateSubscriptionRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateSubscriptionResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateSubscriptionShrinkRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateVariableRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateVariableResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateVocabularyRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateVocabularyResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateVocabularyShrinkRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateVoiceAccessProfileRequest;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateVoiceAccessProfileResponse;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateVoiceAccessProfileShrinkRequest;
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
     * 创建实例.
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
     * 创建实例.
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
     * 创建实例.
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
     * 创建实例.
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
     * 创建场景配置.
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

        if (null !== $tmpReq->labelConfig) {
            $request->labelConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelConfig, 'LabelConfig', 'json');
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

        if (null !== $request->labelConfigShrink) {
            @$body['LabelConfig'] = $request->labelConfigShrink;
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
     * 创建场景配置.
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
     * 创建变量.
     *
     * @param request - CreateVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVariableResponse
     *
     * @param CreateVariableRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateVariableResponse
     */
    public function createVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
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
            'action' => 'CreateVariable',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建变量.
     *
     * @param request - CreateVariableRequest
     *
     * @returns CreateVariableResponse
     *
     * @param CreateVariableRequest $request
     *
     * @return CreateVariableResponse
     */
    public function createVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVariableWithOptions($request, $runtime);
    }

    /**
     * 创建实例.
     *
     * @param tmpReq - CreateVocabularyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVocabularyResponse
     *
     * @param CreateVocabularyRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateVocabularyResponse
     */
    public function createVocabularyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateVocabularyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->words) {
            $request->wordsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->words, 'Words', 'json');
        }

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

        if (null !== $request->wordsShrink) {
            @$body['Words'] = $request->wordsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVocabulary',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVocabularyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实例.
     *
     * @param request - CreateVocabularyRequest
     *
     * @returns CreateVocabularyResponse
     *
     * @param CreateVocabularyRequest $request
     *
     * @return CreateVocabularyResponse
     */
    public function createVocabulary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVocabularyWithOptions($request, $runtime);
    }

    /**
     * 创建实例.
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
     * 创建实例.
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
     * 删除场景.
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
     * 删除场景.
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
     * 删除场景.
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
     * 删除场景.
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
     * 删除变量.
     *
     * @param request - DeleteVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVariableResponse
     *
     * @param DeleteVariableRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteVariableResponse
     */
    public function deleteVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->variableId) {
            @$body['VariableId'] = $request->variableId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVariable',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除变量.
     *
     * @param request - DeleteVariableRequest
     *
     * @returns DeleteVariableResponse
     *
     * @param DeleteVariableRequest $request
     *
     * @return DeleteVariableResponse
     */
    public function deleteVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVariableWithOptions($request, $runtime);
    }

    /**
     * 删除场景.
     *
     * @param request - DeleteVocabularyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVocabularyResponse
     *
     * @param DeleteVocabularyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteVocabularyResponse
     */
    public function deleteVocabularyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->vocabularyId) {
            @$body['VocabularyId'] = $request->vocabularyId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVocabulary',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVocabularyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除场景.
     *
     * @param request - DeleteVocabularyRequest
     *
     * @returns DeleteVocabularyResponse
     *
     * @param DeleteVocabularyRequest $request
     *
     * @return DeleteVocabularyResponse
     */
    public function deleteVocabulary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVocabularyWithOptions($request, $runtime);
    }

    /**
     * 删除场景.
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
     * 删除场景.
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
     * 禁用消息订阅.
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
     * 禁用消息订阅.
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
     * 获取实例详情.
     *
     * @param request - ExportScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportScriptResponse
     *
     * @param ExportScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExportScriptResponse
     */
    public function exportScriptWithOptions($request, $runtime)
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
            'action' => 'ExportScript',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例详情.
     *
     * @param request - ExportScriptRequest
     *
     * @returns ExportScriptResponse
     *
     * @param ExportScriptRequest $request
     *
     * @return ExportScriptResponse
     */
    public function exportScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportScriptWithOptions($request, $runtime);
    }

    /**
     * 导出热词.
     *
     * @param tmpReq - ExportVocabularyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportVocabularyResponse
     *
     * @param ExportVocabularyRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ExportVocabularyResponse
     */
    public function exportVocabularyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportVocabularyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->vocabularyIds) {
            $request->vocabularyIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vocabularyIds, 'VocabularyIds', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->vocabularyIdsShrink) {
            @$body['VocabularyIds'] = $request->vocabularyIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportVocabulary',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportVocabularyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出热词.
     *
     * @param request - ExportVocabularyRequest
     *
     * @returns ExportVocabularyResponse
     *
     * @param ExportVocabularyRequest $request
     *
     * @return ExportVocabularyResponse
     */
    public function exportVocabulary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportVocabularyWithOptions($request, $runtime);
    }

    /**
     * 获取实例详情.
     *
     * @param request - GenerateFileUploadParamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateFileUploadParamsResponse
     *
     * @param GenerateFileUploadParamsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateFileUploadParamsResponse
     */
    public function generateFileUploadParamsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessType) {
            @$body['BusinessType'] = $request->businessType;
        }

        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateFileUploadParams',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateFileUploadParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例详情.
     *
     * @param request - GenerateFileUploadParamsRequest
     *
     * @returns GenerateFileUploadParamsResponse
     *
     * @param GenerateFileUploadParamsRequest $request
     *
     * @return GenerateFileUploadParamsResponse
     */
    public function generateFileUploadParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateFileUploadParamsWithOptions($request, $runtime);
    }

    /**
     * 获取通话详情.
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
     * 获取通话详情.
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
     * 获取实例实时指标.
     *
     * @param request - GetRealtimeInstanceStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRealtimeInstanceStatsResponse
     *
     * @param GetRealtimeInstanceStatsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRealtimeInstanceStatsResponse
     */
    public function getRealtimeInstanceStatsWithOptions($request, $runtime)
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
            'action' => 'GetRealtimeInstanceStats',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRealtimeInstanceStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例实时指标.
     *
     * @param request - GetRealtimeInstanceStatsRequest
     *
     * @returns GetRealtimeInstanceStatsResponse
     *
     * @param GetRealtimeInstanceStatsRequest $request
     *
     * @return GetRealtimeInstanceStatsResponse
     */
    public function getRealtimeInstanceStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealtimeInstanceStatsWithOptions($request, $runtime);
    }

    /**
     * 获取录音.
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
     * 获取录音.
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
     * 获取实例详情.
     *
     * @param request - GetScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScriptResponse
     *
     * @param GetScriptRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetScriptResponse
     */
    public function getScriptWithOptions($request, $runtime)
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
            'action' => 'GetScript',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例详情.
     *
     * @param request - GetScriptRequest
     *
     * @returns GetScriptResponse
     *
     * @param GetScriptRequest $request
     *
     * @return GetScriptResponse
     */
    public function getScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScriptWithOptions($request, $runtime);
    }

    /**
     * 获取MQ配置.
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
     * 获取MQ配置.
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
     * 获取实例详情.
     *
     * @param request - GetVocabularyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVocabularyResponse
     *
     * @param GetVocabularyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetVocabularyResponse
     */
    public function getVocabularyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->vocabularyId) {
            @$body['VocabularyId'] = $request->vocabularyId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVocabulary',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVocabularyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例详情.
     *
     * @param request - GetVocabularyRequest
     *
     * @returns GetVocabularyResponse
     *
     * @param GetVocabularyRequest $request
     *
     * @return GetVocabularyResponse
     */
    public function getVocabulary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVocabularyWithOptions($request, $runtime);
    }

    /**
     * 导入热词.
     *
     * @param request - ImportVocabularyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportVocabularyResponse
     *
     * @param ImportVocabularyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ImportVocabularyResponse
     */
    public function importVocabularyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileKey) {
            @$body['FileKey'] = $request->fileKey;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportVocabulary',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportVocabularyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导入热词.
     *
     * @param request - ImportVocabularyRequest
     *
     * @returns ImportVocabularyResponse
     *
     * @param ImportVocabularyRequest $request
     *
     * @return ImportVocabularyResponse
     */
    public function importVocabulary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importVocabularyWithOptions($request, $runtime);
    }

    /**
     * 获取背景音列表.
     *
     * @param request - ListBackgroundMusicsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBackgroundMusicsResponse
     *
     * @param ListBackgroundMusicsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListBackgroundMusicsResponse
     */
    public function listBackgroundMusicsWithOptions($request, $runtime)
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
            'action' => 'ListBackgroundMusics',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBackgroundMusicsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取背景音列表.
     *
     * @param request - ListBackgroundMusicsRequest
     *
     * @returns ListBackgroundMusicsResponse
     *
     * @param ListBackgroundMusicsRequest $request
     *
     * @return ListBackgroundMusicsResponse
     */
    public function listBackgroundMusics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBackgroundMusicsWithOptions($request, $runtime);
    }

    /**
     * 获取实例详情.
     *
     * @param tmpReq - ListCallDetailRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCallDetailRecordsResponse
     *
     * @param ListCallDetailRecordsRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ListCallDetailRecordsResponse
     */
    public function listCallDetailRecordsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListCallDetailRecordsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dispositionCodes) {
            $request->dispositionCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dispositionCodes, 'DispositionCodes', 'json');
        }

        if (null !== $tmpReq->dispositionReasons) {
            $request->dispositionReasonsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dispositionReasons, 'DispositionReasons', 'json');
        }

        if (null !== $tmpReq->sessionIds) {
            $request->sessionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sessionIds, 'SessionIds', 'json');
        }

        $query = [];
        if (null !== $request->accessChannelId) {
            @$query['AccessChannelId'] = $request->accessChannelId;
        }

        if (null !== $request->accessChannelType) {
            @$query['AccessChannelType'] = $request->accessChannelType;
        }

        if (null !== $request->draftVersion) {
            @$query['DraftVersion'] = $request->draftVersion;
        }

        if (null !== $request->issueResolved) {
            @$query['IssueResolved'] = $request->issueResolved;
        }

        if (null !== $request->maxTalkTurns) {
            @$query['MaxTalkTurns'] = $request->maxTalkTurns;
        }

        if (null !== $request->minTalkTurns) {
            @$query['MinTalkTurns'] = $request->minTalkTurns;
        }

        $body = [];
        if (null !== $request->callee) {
            @$body['Callee'] = $request->callee;
        }

        if (null !== $request->caller) {
            @$body['Caller'] = $request->caller;
        }

        if (null !== $request->dispositionCodesShrink) {
            @$body['DispositionCodes'] = $request->dispositionCodesShrink;
        }

        if (null !== $request->dispositionReasonsShrink) {
            @$body['DispositionReasons'] = $request->dispositionReasonsShrink;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scriptId) {
            @$body['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->sessionIdsShrink) {
            @$body['SessionIds'] = $request->sessionIdsShrink;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCallDetailRecords',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCallDetailRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例详情.
     *
     * @param request - ListCallDetailRecordsRequest
     *
     * @returns ListCallDetailRecordsResponse
     *
     * @param ListCallDetailRecordsRequest $request
     *
     * @return ListCallDetailRecordsResponse
     */
    public function listCallDetailRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallDetailRecordsWithOptions($request, $runtime);
    }

    /**
     * 获取实例详情.
     *
     * @param request - ListCloneVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloneVoiceResponse
     *
     * @param ListCloneVoiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListCloneVoiceResponse
     */
    public function listCloneVoiceWithOptions($request, $runtime)
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
            'action' => 'ListCloneVoice',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloneVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例详情.
     *
     * @param request - ListCloneVoiceRequest
     *
     * @returns ListCloneVoiceResponse
     *
     * @param ListCloneVoiceRequest $request
     *
     * @return ListCloneVoiceResponse
     */
    public function listCloneVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloneVoiceWithOptions($request, $runtime);
    }

    /**
     * 获取克隆音色可用模型列表.
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
     * 获取克隆音色可用模型列表.
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
     * 获取对话模型列表.
     *
     * @param request - ListNluModelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNluModelsResponse
     *
     * @param ListNluModelsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListNluModelsResponse
     */
    public function listNluModelsWithOptions($request, $runtime)
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
            'action' => 'ListNluModels',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNluModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取对话模型列表.
     *
     * @param request - ListNluModelsRequest
     *
     * @returns ListNluModelsResponse
     *
     * @param ListNluModelsRequest $request
     *
     * @return ListNluModelsResponse
     */
    public function listNluModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNluModelsWithOptions($request, $runtime);
    }

    /**
     * 获取场景配置模板列表.
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
     * 获取场景配置模板列表.
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
     * 获取实例详情.
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

        if (null !== $request->number) {
            @$body['Number'] = $request->number;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scriptIdsShrink) {
            @$body['ScriptIds'] = $request->scriptIdsShrink;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
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
     * 获取实例详情.
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
     * 获取变量列表.
     *
     * @param request - ListVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVariableResponse
     *
     * @param ListVariableRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListVariableResponse
     */
    public function listVariableWithOptions($request, $runtime)
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

        if (null !== $request->searchPattern) {
            @$body['SearchPattern'] = $request->searchPattern;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVariable',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取变量列表.
     *
     * @param request - ListVariableRequest
     *
     * @returns ListVariableResponse
     *
     * @param ListVariableRequest $request
     *
     * @return ListVariableResponse
     */
    public function listVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVariableWithOptions($request, $runtime);
    }

    /**
     * 获取实例详情.
     *
     * @param request - ListVocabularyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVocabularyResponse
     *
     * @param ListVocabularyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListVocabularyResponse
     */
    public function listVocabularyWithOptions($request, $runtime)
    {
        $request->validate();
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

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVocabulary',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVocabularyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例详情.
     *
     * @param request - ListVocabularyRequest
     *
     * @returns ListVocabularyResponse
     *
     * @param ListVocabularyRequest $request
     *
     * @return ListVocabularyResponse
     */
    public function listVocabulary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVocabularyWithOptions($request, $runtime);
    }

    /**
     * 获取实例详情.
     *
     * @param request - ListVoiceAccessProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVoiceAccessProfileResponse
     *
     * @param ListVoiceAccessProfileRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListVoiceAccessProfileResponse
     */
    public function listVoiceAccessProfileWithOptions($request, $runtime)
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
            'action' => 'ListVoiceAccessProfile',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVoiceAccessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例详情.
     *
     * @param request - ListVoiceAccessProfileRequest
     *
     * @returns ListVoiceAccessProfileResponse
     *
     * @param ListVoiceAccessProfileRequest $request
     *
     * @return ListVoiceAccessProfileResponse
     */
    public function listVoiceAccessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVoiceAccessProfileWithOptions($request, $runtime);
    }

    /**
     * 获取引擎列表.
     *
     * @param request - ListVoiceEnginesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVoiceEnginesResponse
     *
     * @param ListVoiceEnginesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListVoiceEnginesResponse
     */
    public function listVoiceEnginesWithOptions($request, $runtime)
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
            'action' => 'ListVoiceEngines',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVoiceEnginesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取引擎列表.
     *
     * @param request - ListVoiceEnginesRequest
     *
     * @returns ListVoiceEnginesResponse
     *
     * @param ListVoiceEnginesRequest $request
     *
     * @return ListVoiceEnginesResponse
     */
    public function listVoiceEngines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVoiceEnginesWithOptions($request, $runtime);
    }

    /**
     * 获取实例详情.
     *
     * @param request - ListVoicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVoicesResponse
     *
     * @param ListVoicesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListVoicesResponse
     */
    public function listVoicesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nlsAccessType) {
            @$body['NlsAccessType'] = $request->nlsAccessType;
        }

        if (null !== $request->nlsEngine) {
            @$body['NlsEngine'] = $request->nlsEngine;
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
            'action' => 'ListVoices',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVoicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例详情.
     *
     * @param request - ListVoicesRequest
     *
     * @returns ListVoicesResponse
     *
     * @param ListVoicesRequest $request
     *
     * @return ListVoicesResponse
     */
    public function listVoices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVoicesWithOptions($request, $runtime);
    }

    /**
     * 试听.
     *
     * @param tmpReq - PreviewVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreviewVoiceResponse
     *
     * @param PreviewVoiceRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return PreviewVoiceResponse
     */
    public function previewVoiceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PreviewVoiceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->nlsAccessType) {
            @$body['NlsAccessType'] = $request->nlsAccessType;
        }

        if (null !== $request->nlsEngine) {
            @$body['NlsEngine'] = $request->nlsEngine;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        if (null !== $request->text) {
            @$body['Text'] = $request->text;
        }

        if (null !== $request->voice) {
            @$body['Voice'] = $request->voice;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PreviewVoice',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PreviewVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 试听.
     *
     * @param request - PreviewVoiceRequest
     *
     * @returns PreviewVoiceResponse
     *
     * @param PreviewVoiceRequest $request
     *
     * @return PreviewVoiceResponse
     */
    public function previewVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->previewVoiceWithOptions($request, $runtime);
    }

    /**
     * 更新实例.
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
     * 更新实例.
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
     * 更新实例.
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
     * 更新实例.
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
     * 更新实例.
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
     * 更新实例.
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
     * 创建或更新MQ配置.
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
     * 创建或更新MQ配置.
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
     * 更新变量.
     *
     * @param request - UpdateVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVariableResponse
     *
     * @param UpdateVariableRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateVariableResponse
     */
    public function updateVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->variableId) {
            @$body['VariableId'] = $request->variableId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVariable',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新变量.
     *
     * @param request - UpdateVariableRequest
     *
     * @returns UpdateVariableResponse
     *
     * @param UpdateVariableRequest $request
     *
     * @return UpdateVariableResponse
     */
    public function updateVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVariableWithOptions($request, $runtime);
    }

    /**
     * 更新实例.
     *
     * @param tmpReq - UpdateVocabularyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVocabularyResponse
     *
     * @param UpdateVocabularyRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateVocabularyResponse
     */
    public function updateVocabularyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateVocabularyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->words) {
            $request->wordsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->words, 'Words', 'json');
        }

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

        if (null !== $request->vocabularyId) {
            @$body['VocabularyId'] = $request->vocabularyId;
        }

        if (null !== $request->wordsShrink) {
            @$body['Words'] = $request->wordsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVocabulary',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVocabularyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实例.
     *
     * @param request - UpdateVocabularyRequest
     *
     * @returns UpdateVocabularyResponse
     *
     * @param UpdateVocabularyRequest $request
     *
     * @return UpdateVocabularyResponse
     */
    public function updateVocabulary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVocabularyWithOptions($request, $runtime);
    }

    /**
     * 更新实例.
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
     * 更新实例.
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
