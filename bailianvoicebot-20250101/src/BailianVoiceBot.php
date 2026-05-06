<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\BridgeWebCallRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\BridgeWebCallResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationVersionRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationVersionResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationVersionShrinkRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateCloneVoiceRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateCloneVoiceResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateVariableRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateVariableResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateVocabularyRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateVocabularyResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateVocabularyShrinkRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateVoiceAccessProfileRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateVoiceAccessProfileResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateVoiceAccessProfileShrinkRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteCloneVoiceRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteCloneVoiceResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteVariableRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteVariableResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteVocabularyRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteVocabularyResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteVoiceAccessProfileRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteVoiceAccessProfileResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DisableSubscriptionRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DisableSubscriptionResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ExportVocabularyRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ExportVocabularyResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ExportVocabularyShrinkRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GenerateFileUploadParamsRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GenerateFileUploadParamsResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetDataChannelCredentialRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetDataChannelCredentialResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetSubscriptionRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetSubscriptionResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetVocabularyRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetVocabularyResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ImportVocabularyRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ImportVocabularyResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListBackgroundMusicsRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListBackgroundMusicsResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListCloneVoiceModelsRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListCloneVoiceModelsResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListCloneVoiceRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListCloneVoiceResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListNluModelsRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListNluModelsResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListVariableRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListVariableResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListVocabularyRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListVocabularyResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListVoiceAccessProfileRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListVoiceAccessProfileResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListVoiceEnginesRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListVoiceEnginesResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListVoicesRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListVoicesResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\PreviewVoiceRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\PreviewVoiceResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\PreviewVoiceShrinkRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\PublishApplicationVersionRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\PublishApplicationVersionResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationVersionRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationVersionResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationVersionShrinkRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateCloneVoiceRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateCloneVoiceResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateSubscriptionRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateSubscriptionResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateSubscriptionShrinkRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateVariableRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateVariableResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateVocabularyRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateVocabularyResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateVocabularyShrinkRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateVoiceAccessProfileRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateVoiceAccessProfileResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateVoiceAccessProfileShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class BailianVoiceBot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bailianvoicebot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建软电话测试通话.
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
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->audioCodec) {
            @$query['AudioCodec'] = $request->audioCodec;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->sampleRate) {
            @$query['SampleRate'] = $request->sampleRate;
        }

        if (null !== $request->sandbox) {
            @$query['Sandbox'] = $request->sandbox;
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
            'version' => '2025-01-01',
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
     * 创建软电话测试通话.
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
     * 创建应用.
     *
     * @param request - CreateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->concurrency) {
            @$query['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nluAccessType) {
            @$query['NluAccessType'] = $request->nluAccessType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplication',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用.
     *
     * @param request - CreateApplicationRequest
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * 创景场景版本.
     *
     * @param tmpReq - CreateApplicationVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationVersionResponse
     *
     * @param CreateApplicationVersionRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateApplicationVersionResponse
     */
    public function createApplicationVersionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateApplicationVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->interactionConfig) {
            $request->interactionConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->interactionConfig, 'InteractionConfig', 'json');
        }

        if (null !== $tmpReq->ragConfig) {
            $request->ragConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ragConfig, 'RagConfig', 'json');
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

        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->interactionConfigShrink) {
            @$query['InteractionConfig'] = $request->interactionConfigShrink;
        }

        if (null !== $request->ragConfigShrink) {
            @$query['RagConfig'] = $request->ragConfigShrink;
        }

        if (null !== $request->scriptProfileShrink) {
            @$query['ScriptProfile'] = $request->scriptProfileShrink;
        }

        if (null !== $request->sourceVersionId) {
            @$query['SourceVersionId'] = $request->sourceVersionId;
        }

        if (null !== $request->synthesizerConfigShrink) {
            @$query['SynthesizerConfig'] = $request->synthesizerConfigShrink;
        }

        if (null !== $request->transcriberConfigShrink) {
            @$query['TranscriberConfig'] = $request->transcriberConfigShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplicationVersion',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创景场景版本.
     *
     * @param request - CreateApplicationVersionRequest
     *
     * @returns CreateApplicationVersionResponse
     *
     * @param CreateApplicationVersionRequest $request
     *
     * @return CreateApplicationVersionResponse
     */
    public function createApplicationVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationVersionWithOptions($request, $runtime);
    }

    /**
     * 创建克隆音.
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->fileKey) {
            @$body['FileKey'] = $request->fileKey;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCloneVoice',
            'version' => '2025-01-01',
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
     * 创建克隆音.
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVariable',
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
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
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
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
            'version' => '2025-01-01',
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
     * 删除应用.
     *
     * @param request - DeleteApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApplicationResponse
     *
     * @param DeleteApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApplication',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除应用.
     *
     * @param request - DeleteApplicationRequest
     *
     * @returns DeleteApplicationResponse
     *
     * @param DeleteApplicationRequest $request
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->cloneVoiceId) {
            @$body['CloneVoiceId'] = $request->cloneVoiceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCloneVoice',
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->variableId) {
            @$body['VariableId'] = $request->variableId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVariable',
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->vocabularyId) {
            @$body['VocabularyId'] = $request->vocabularyId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVocabulary',
            'version' => '2025-01-01',
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
     * 删除三方语音配置.
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

        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVoiceAccessProfile',
            'version' => '2025-01-01',
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
     * 删除三方语音配置.
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableSubscription',
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->vocabularyIdsShrink) {
            @$body['VocabularyIds'] = $request->vocabularyIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportVocabulary',
            'version' => '2025-01-01',
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
     * 获取文件上传信息.
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

        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateFileUploadParams',
            'version' => '2025-01-01',
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
     * 获取文件上传信息.
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
     * Get应用.
     *
     * @param request - GetApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationResponse
     *
     * @param GetApplicationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplication',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get应用.
     *
     * @param request - GetApplicationRequest
     *
     * @returns GetApplicationResponse
     *
     * @param GetApplicationRequest $request
     *
     * @return GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationWithOptions($request, $runtime);
    }

    /**
     * 获取数据通道凭证
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
        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataChannelCredential',
            'version' => '2025-01-01',
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
     * 获取数据通道凭证
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSubscription',
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->vocabularyId) {
            @$body['VocabularyId'] = $request->vocabularyId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVocabulary',
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->fileKey) {
            @$body['FileKey'] = $request->fileKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportVocabulary',
            'version' => '2025-01-01',
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
     * 查询应用.
     *
     * @param request - ListApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplications',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用.
     *
     * @param request - ListApplicationsRequest
     *
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     *
     * @return ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
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
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
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
            'version' => '2025-01-01',
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
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNluModels',
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
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
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
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
            'version' => '2025-01-01',
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
     * 获取三方语音配置列表.
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
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
            'version' => '2025-01-01',
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
     * 获取三方语音配置列表.
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
            'version' => '2025-01-01',
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
     * 获取音色列表.
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
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
            'version' => '2025-01-01',
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
     * 获取音色列表.
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
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
            'version' => '2025-01-01',
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
     * 发布版本.
     *
     * @param request - PublishApplicationVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishApplicationVersionResponse
     *
     * @param PublishApplicationVersionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PublishApplicationVersionResponse
     */
    public function publishApplicationVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishApplicationVersion',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishApplicationVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布版本.
     *
     * @param request - PublishApplicationVersionRequest
     *
     * @returns PublishApplicationVersionResponse
     *
     * @param PublishApplicationVersionRequest $request
     *
     * @return PublishApplicationVersionResponse
     */
    public function publishApplicationVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishApplicationVersionWithOptions($request, $runtime);
    }

    /**
     * 修改应用.
     *
     * @param request - UpdateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationResponse
     *
     * @param UpdateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->concurrency) {
            @$query['Concurrency'] = $request->concurrency;
        }

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
            'action' => 'UpdateApplication',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用.
     *
     * @param request - UpdateApplicationRequest
     *
     * @returns UpdateApplicationResponse
     *
     * @param UpdateApplicationRequest $request
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationWithOptions($request, $runtime);
    }

    /**
     * 修改场景版本.
     *
     * @param tmpReq - UpdateApplicationVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationVersionResponse
     *
     * @param UpdateApplicationVersionRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateApplicationVersionResponse
     */
    public function updateApplicationVersionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateApplicationVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->interactionConfig) {
            $request->interactionConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->interactionConfig, 'InteractionConfig', 'json');
        }

        if (null !== $tmpReq->ragConfig) {
            $request->ragConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ragConfig, 'RagConfig', 'json');
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

        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->interactionConfigShrink) {
            @$query['InteractionConfig'] = $request->interactionConfigShrink;
        }

        if (null !== $request->ragConfigShrink) {
            @$query['RagConfig'] = $request->ragConfigShrink;
        }

        if (null !== $request->scriptProfileShrink) {
            @$query['ScriptProfile'] = $request->scriptProfileShrink;
        }

        if (null !== $request->synthesizerConfigShrink) {
            @$query['SynthesizerConfig'] = $request->synthesizerConfigShrink;
        }

        if (null !== $request->transcriberConfigShrink) {
            @$query['TranscriberConfig'] = $request->transcriberConfigShrink;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationVersion',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改场景版本.
     *
     * @param request - UpdateApplicationVersionRequest
     *
     * @returns UpdateApplicationVersionResponse
     *
     * @param UpdateApplicationVersionRequest $request
     *
     * @return UpdateApplicationVersionResponse
     */
    public function updateApplicationVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationVersionWithOptions($request, $runtime);
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->cloneVoiceId) {
            @$body['CloneVoiceId'] = $request->cloneVoiceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCloneVoice',
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->endpoint) {
            @$body['Endpoint'] = $request->endpoint;
        }

        if (null !== $request->eventSubscriptionsShrink) {
            @$body['EventSubscriptions'] = $request->eventSubscriptionsShrink;
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
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->variableId) {
            @$body['VariableId'] = $request->variableId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVariable',
            'version' => '2025-01-01',
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
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
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
            'version' => '2025-01-01',
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
     * 更新三方语音配置.
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

        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
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
            'version' => '2025-01-01',
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
     * 更新三方语音配置.
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
