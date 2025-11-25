<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallGroupRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallGroupResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallGroupShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallSignalRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallSignalResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\GroupCallRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\GroupCallResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\GroupCallShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SignalCallRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SignalCallResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\VoiceGroupCallRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\VoiceGroupCallResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\VoiceGroupCallShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\VoiceSingleCallRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\VoiceSingleCallResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dyvmsapiintl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dyvmsapi-intl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Initiates a voice group call to multiple phone numbers. The content of the group call is that of approved templates. You can log on to the VMS console and choose Voice Call Template to view the template ID. This feature enqueues the phone numbers to be called. The time when the phone numbers are called is uncertain.
     *
     * @param tmpReq - BackendCallGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BackendCallGroupResponse
     *
     * @param BackendCallGroupRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return BackendCallGroupResponse
     */
    public function backendCallGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BackendCallGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->calledNumber) {
            $request->calledNumberShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->calledNumber, 'CalledNumber', 'json');
        }

        $query = [];
        if (null !== $request->calledNumberShrink) {
            @$query['CalledNumber'] = $request->calledNumberShrink;
        }

        if (null !== $request->callerIdNumber) {
            @$query['CallerIdNumber'] = $request->callerIdNumber;
        }

        if (null !== $request->countryId) {
            @$query['CountryId'] = $request->countryId;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendType) {
            @$query['SendType'] = $request->sendType;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->timingStart) {
            @$query['TimingStart'] = $request->timingStart;
        }

        if (null !== $request->ttsCode) {
            @$query['TtsCode'] = $request->ttsCode;
        }

        if (null !== $request->voiceCode) {
            @$query['VoiceCode'] = $request->voiceCode;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BackendCallGroup',
            'version' => '2021-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BackendCallGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a voice group call to multiple phone numbers. The content of the group call is that of approved templates. You can log on to the VMS console and choose Voice Call Template to view the template ID. This feature enqueues the phone numbers to be called. The time when the phone numbers are called is uncertain.
     *
     * @param request - BackendCallGroupRequest
     *
     * @returns BackendCallGroupResponse
     *
     * @param BackendCallGroupRequest $request
     *
     * @return BackendCallGroupResponse
     */
    public function backendCallGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->backendCallGroupWithOptions($request, $runtime);
    }

    /**
     * Sends a voice verification code and voice notification with variables to a phone number.
     *
     * @param request - BackendCallSignalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BackendCallSignalResponse
     *
     * @param BackendCallSignalRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BackendCallSignalResponse
     */
    public function backendCallSignalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callerIdNumber) {
            @$query['CallerIdNumber'] = $request->callerIdNumber;
        }

        if (null !== $request->countryId) {
            @$query['CountryId'] = $request->countryId;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        if (null !== $request->ttsCode) {
            @$query['TtsCode'] = $request->ttsCode;
        }

        if (null !== $request->ttsParam) {
            @$query['TtsParam'] = $request->ttsParam;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BackendCallSignal',
            'version' => '2021-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BackendCallSignalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a voice verification code and voice notification with variables to a phone number.
     *
     * @param request - BackendCallSignalRequest
     *
     * @returns BackendCallSignalResponse
     *
     * @param BackendCallSignalRequest $request
     *
     * @return BackendCallSignalResponse
     */
    public function backendCallSignal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->backendCallSignalWithOptions($request, $runtime);
    }

    /**
     * 向指定号码发送语音验证码和带参数变量的语音通知，支持语音文件模板或文本转语音模板
     *
     * @param tmpReq - GroupCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GroupCallResponse
     *
     * @param GroupCallRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return GroupCallResponse
     */
    public function groupCallWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GroupCallShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->calledNumber) {
            $request->calledNumberShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->calledNumber, 'CalledNumber', 'json');
        }

        $query = [];
        if (null !== $request->calledNumberShrink) {
            @$query['CalledNumber'] = $request->calledNumberShrink;
        }

        if (null !== $request->callerIdNumber) {
            @$query['CallerIdNumber'] = $request->callerIdNumber;
        }

        if (null !== $request->countryId) {
            @$query['CountryId'] = $request->countryId;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendType) {
            @$query['SendType'] = $request->sendType;
        }

        if (null !== $request->signature) {
            @$query['Signature'] = $request->signature;
        }

        if (null !== $request->signatureNonce) {
            @$query['SignatureNonce'] = $request->signatureNonce;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->timestamp) {
            @$query['Timestamp'] = $request->timestamp;
        }

        if (null !== $request->timingStart) {
            @$query['TimingStart'] = $request->timingStart;
        }

        if (null !== $request->ttsCode) {
            @$query['TtsCode'] = $request->ttsCode;
        }

        if (null !== $request->ttsParam) {
            @$query['TtsParam'] = $request->ttsParam;
        }

        if (null !== $request->voiceCode) {
            @$query['VoiceCode'] = $request->voiceCode;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GroupCall',
            'version' => '2021-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GroupCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 向指定号码发送语音验证码和带参数变量的语音通知，支持语音文件模板或文本转语音模板
     *
     * @param request - GroupCallRequest
     *
     * @returns GroupCallResponse
     *
     * @param GroupCallRequest $request
     *
     * @return GroupCallResponse
     */
    public function groupCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->groupCallWithOptions($request, $runtime);
    }

    /**
     * 向指定号码发送语音验证码和带参数变量的语音通知，支持语音文件模板或文本转语音模板
     *
     * @param request - SignalCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SignalCallResponse
     *
     * @param SignalCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SignalCallResponse
     */
    public function signalCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callerIdNumber) {
            @$query['CallerIdNumber'] = $request->callerIdNumber;
        }

        if (null !== $request->countryId) {
            @$query['CountryId'] = $request->countryId;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendType) {
            @$query['SendType'] = $request->sendType;
        }

        if (null !== $request->signature) {
            @$query['Signature'] = $request->signature;
        }

        if (null !== $request->signatureNonce) {
            @$query['SignatureNonce'] = $request->signatureNonce;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->timestamp) {
            @$query['Timestamp'] = $request->timestamp;
        }

        if (null !== $request->timingStart) {
            @$query['TimingStart'] = $request->timingStart;
        }

        if (null !== $request->ttsCode) {
            @$query['TtsCode'] = $request->ttsCode;
        }

        if (null !== $request->ttsParam) {
            @$query['TtsParam'] = $request->ttsParam;
        }

        if (null !== $request->voiceCode) {
            @$query['VoiceCode'] = $request->voiceCode;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SignalCall',
            'version' => '2021-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SignalCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 向指定号码发送语音验证码和带参数变量的语音通知，支持语音文件模板或文本转语音模板
     *
     * @param request - SignalCallRequest
     *
     * @returns SignalCallResponse
     *
     * @param SignalCallRequest $request
     *
     * @return SignalCallResponse
     */
    public function signalCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signalCallWithOptions($request, $runtime);
    }

    /**
     * Sends a voice notification to multiple phone numbers. A voice file or text-to-speech (TTS) template is supported.
     *
     * @param tmpReq - VoiceGroupCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VoiceGroupCallResponse
     *
     * @param VoiceGroupCallRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return VoiceGroupCallResponse
     */
    public function voiceGroupCallWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new VoiceGroupCallShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->calledNumber) {
            $request->calledNumberShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->calledNumber, 'CalledNumber', 'json');
        }

        $query = [];
        if (null !== $request->calledNumberShrink) {
            @$query['CalledNumber'] = $request->calledNumberShrink;
        }

        if (null !== $request->callerIdNumber) {
            @$query['CallerIdNumber'] = $request->callerIdNumber;
        }

        if (null !== $request->countryId) {
            @$query['CountryId'] = $request->countryId;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendType) {
            @$query['SendType'] = $request->sendType;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->timingStart) {
            @$query['TimingStart'] = $request->timingStart;
        }

        if (null !== $request->ttsCode) {
            @$query['TtsCode'] = $request->ttsCode;
        }

        if (null !== $request->ttsParam) {
            @$query['TtsParam'] = $request->ttsParam;
        }

        if (null !== $request->voiceCode) {
            @$query['VoiceCode'] = $request->voiceCode;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VoiceGroupCall',
            'version' => '2021-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VoiceGroupCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a voice notification to multiple phone numbers. A voice file or text-to-speech (TTS) template is supported.
     *
     * @param request - VoiceGroupCallRequest
     *
     * @returns VoiceGroupCallResponse
     *
     * @param VoiceGroupCallRequest $request
     *
     * @return VoiceGroupCallResponse
     */
    public function voiceGroupCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->voiceGroupCallWithOptions($request, $runtime);
    }

    /**
     * Sends a voice verification code or voice notification with variables to a phone number. A voice file or text-to-speech (TTS) template is supported.
     *
     * @param request - VoiceSingleCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VoiceSingleCallResponse
     *
     * @param VoiceSingleCallRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return VoiceSingleCallResponse
     */
    public function voiceSingleCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callerIdNumber) {
            @$query['CallerIdNumber'] = $request->callerIdNumber;
        }

        if (null !== $request->countryId) {
            @$query['CountryId'] = $request->countryId;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendType) {
            @$query['SendType'] = $request->sendType;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->timingStart) {
            @$query['TimingStart'] = $request->timingStart;
        }

        if (null !== $request->ttsCode) {
            @$query['TtsCode'] = $request->ttsCode;
        }

        if (null !== $request->ttsParam) {
            @$query['TtsParam'] = $request->ttsParam;
        }

        if (null !== $request->voiceCode) {
            @$query['VoiceCode'] = $request->voiceCode;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VoiceSingleCall',
            'version' => '2021-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VoiceSingleCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a voice verification code or voice notification with variables to a phone number. A voice file or text-to-speech (TTS) template is supported.
     *
     * @param request - VoiceSingleCallRequest
     *
     * @returns VoiceSingleCallResponse
     *
     * @param VoiceSingleCallRequest $request
     *
     * @return VoiceSingleCallResponse
     */
    public function voiceSingleCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->voiceSingleCallWithOptions($request, $runtime);
    }
}
