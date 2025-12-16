<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\ActiveInteractionCreateRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\ActiveInteractionCreateResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\ActiveInteractionEuCreateRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\ActiveInteractionEuCreateResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\DeviceRegisterRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\DeviceRegisterResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetPassThroughAuthInfoRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetPassThroughAuthInfoResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetTokenRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetTokenResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\ModelTypeDetermineRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\ModelTypeDetermineResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\ModelTypeDetermineShrinkRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\OmniRealtimeConversationEURequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\OmniRealtimeConversationEUResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class BailianModelOnChip extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bailianmodelonchip', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 主动交互消息传递.
     *
     * @param request - ActiveInteractionCreateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActiveInteractionCreateResponse
     *
     * @param ActiveInteractionCreateRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ActiveInteractionCreateResponse
     */
    public function activeInteractionCreateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->image) {
            @$body['image'] = $request->image;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ActiveInteractionCreate',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/active/interaction/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActiveInteractionCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 主动交互消息传递.
     *
     * @param request - ActiveInteractionCreateRequest
     *
     * @returns ActiveInteractionCreateResponse
     *
     * @param ActiveInteractionCreateRequest $request
     *
     * @return ActiveInteractionCreateResponse
     */
    public function activeInteractionCreate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->activeInteractionCreateWithOptions($request, $headers, $runtime);
    }

    /**
     * 主动交互消息生成eu.
     *
     * @param request - ActiveInteractionEuCreateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActiveInteractionEuCreateResponse
     *
     * @param ActiveInteractionEuCreateRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ActiveInteractionEuCreateResponse
     */
    public function activeInteractionEuCreateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->image) {
            @$body['image'] = $request->image;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ActiveInteractionEuCreate',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/eu/active/interaction/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActiveInteractionEuCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 主动交互消息生成eu.
     *
     * @param request - ActiveInteractionEuCreateRequest
     *
     * @returns ActiveInteractionEuCreateResponse
     *
     * @param ActiveInteractionEuCreateRequest $request
     *
     * @return ActiveInteractionEuCreateResponse
     */
    public function activeInteractionEuCreate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->activeInteractionEuCreateWithOptions($request, $headers, $runtime);
    }

    /**
     * 设备注册.
     *
     * @param request - DeviceRegisterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeviceRegisterResponse
     *
     * @param DeviceRegisterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeviceRegisterResponse
     */
    public function deviceRegisterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->nonce) {
            @$body['nonce'] = $request->nonce;
        }

        if (null !== $request->requestTime) {
            @$body['requestTime'] = $request->requestTime;
        }

        if (null !== $request->signature) {
            @$body['signature'] = $request->signature;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeviceRegister',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/device/v1/register',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeviceRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设备注册.
     *
     * @param request - DeviceRegisterRequest
     *
     * @returns DeviceRegisterResponse
     *
     * @param DeviceRegisterRequest $request
     *
     * @return DeviceRegisterResponse
     */
    public function deviceRegister($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deviceRegisterWithOptions($request, $headers, $runtime);
    }

    /**
     * 云端获取透传鉴权信息.
     *
     * @param request - GetPassThroughAuthInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPassThroughAuthInfoResponse
     *
     * @param GetPassThroughAuthInfoRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetPassThroughAuthInfoResponse
     */
    public function getPassThroughAuthInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->deviceName) {
            @$body['deviceName'] = $request->deviceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPassThroughAuthInfo',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/auth/v1/token/getPassThroughAuthInfo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPassThroughAuthInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 云端获取透传鉴权信息.
     *
     * @param request - GetPassThroughAuthInfoRequest
     *
     * @returns GetPassThroughAuthInfoResponse
     *
     * @param GetPassThroughAuthInfoRequest $request
     *
     * @return GetPassThroughAuthInfoResponse
     */
    public function getPassThroughAuthInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPassThroughAuthInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取网关校验Token.
     *
     * @param request - GetTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->deviceName) {
            @$body['deviceName'] = $request->deviceName;
        }

        if (null !== $request->nonce) {
            @$body['nonce'] = $request->nonce;
        }

        if (null !== $request->requestTime) {
            @$body['requestTime'] = $request->requestTime;
        }

        if (null !== $request->signature) {
            @$body['signature'] = $request->signature;
        }

        if (null !== $request->tokenKey) {
            @$body['tokenKey'] = $request->tokenKey;
        }

        if (null !== $request->tokenType) {
            @$body['tokenType'] = $request->tokenType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetToken',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/auth/v1/token/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取网关校验Token.
     *
     * @param request - GetTokenRequest
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 模型类型识别.
     *
     * @param tmpReq - ModelTypeDetermineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModelTypeDetermineResponse
     *
     * @param ModelTypeDetermineRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ModelTypeDetermineResponse
     */
    public function modelTypeDetermineWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ModelTypeDetermineShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->history) {
            $request->historyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->history, 'history', 'json');
        }

        $body = [];
        if (null !== $request->historyShrink) {
            @$body['history'] = $request->historyShrink;
        }

        if (null !== $request->inputText) {
            @$body['inputText'] = $request->inputText;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModelTypeDetermine',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/model/type/determine',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModelTypeDetermineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 模型类型识别.
     *
     * @param request - ModelTypeDetermineRequest
     *
     * @returns ModelTypeDetermineResponse
     *
     * @param ModelTypeDetermineRequest $request
     *
     * @return ModelTypeDetermineResponse
     */
    public function modelTypeDetermine($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modelTypeDetermineWithOptions($request, $headers, $runtime);
    }

    /**
     * 音频-供机械臂调用.
     *
     * @param request - OmniRealtimeConversationEURequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OmniRealtimeConversationEUResponse
     *
     * @param OmniRealtimeConversationEURequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return OmniRealtimeConversationEUResponse
     */
    public function omniRealtimeConversationEUWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->inputAudio) {
            @$body['inputAudio'] = $request->inputAudio;
        }

        if (null !== $request->userPrompt) {
            @$body['userPrompt'] = $request->userPrompt;
        }

        if (null !== $request->voice) {
            @$body['voice'] = $request->voice;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OmniRealtimeConversationEU',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/eu/active/interaction/audio',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OmniRealtimeConversationEUResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 音频-供机械臂调用.
     *
     * @param request - OmniRealtimeConversationEURequest
     *
     * @returns OmniRealtimeConversationEUResponse
     *
     * @param OmniRealtimeConversationEURequest $request
     *
     * @return OmniRealtimeConversationEUResponse
     */
    public function omniRealtimeConversationEU($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->omniRealtimeConversationEUWithOptions($request, $headers, $runtime);
    }
}
