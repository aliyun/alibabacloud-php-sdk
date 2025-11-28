<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CloseChatInstanceSessionsRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CloseChatInstanceSessionsResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CloseChatInstanceSessionsShrinkRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\ConfirmTrainPicAvatarRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\ConfirmTrainPicAvatarResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateBackgroundPicRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateBackgroundPicResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateBroadcastStickerRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateBroadcastStickerResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateBroadcastVideoFromTemplateRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateBroadcastVideoFromTemplateResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatConfigRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatConfigResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateNoTrainPicAvatarRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateNoTrainPicAvatarResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateTrainPicAvatarRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateTrainPicAvatarResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateTTSVoiceCustomRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateTTSVoiceCustomResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\GetBroadcastTemplateRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\GetBroadcastTemplateResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\GetTrainPicAvatarStatusRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\GetTrainPicAvatarStatusResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\GetUploadPolicyRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\GetUploadPolicyResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\ListBroadcastTemplatesRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\ListBroadcastTemplatesResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\ListBroadcastVideosByIdRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\ListBroadcastVideosByIdResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\ListBroadcastVideosByIdShrinkRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\ListPrivateTTSVoicesCustomRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\ListPrivateTTSVoicesCustomResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\ListTemplateMaterialRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\ListTemplateMaterialResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\QueryChatInstanceSessionsRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\QueryChatInstanceSessionsResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\QueryChatInstanceSessionsShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class LingMou extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('lingmou', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 关闭会话实例session.
     *
     * @param tmpReq - CloseChatInstanceSessionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseChatInstanceSessionsResponse
     *
     * @param string                           $instanceId
     * @param CloseChatInstanceSessionsRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CloseChatInstanceSessionsResponse
     */
    public function closeChatInstanceSessionsWithOptions($instanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CloseChatInstanceSessionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sessionIds) {
            $request->sessionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sessionIds, 'sessionIds', 'json');
        }

        $body = [];
        if (null !== $request->sessionIdsShrink) {
            @$body['sessionIds'] = $request->sessionIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloseChatInstanceSessions',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/chat/instances/' . Url::percentEncode($instanceId) . '/sessions/close',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloseChatInstanceSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭会话实例session.
     *
     * @param request - CloseChatInstanceSessionsRequest
     *
     * @returns CloseChatInstanceSessionsResponse
     *
     * @param string                           $instanceId
     * @param CloseChatInstanceSessionsRequest $request
     *
     * @return CloseChatInstanceSessionsResponse
     */
    public function closeChatInstanceSessions($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeChatInstanceSessionsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 用户确认.
     *
     * @param request - ConfirmTrainPicAvatarRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfirmTrainPicAvatarResponse
     *
     * @param ConfirmTrainPicAvatarRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ConfirmTrainPicAvatarResponse
     */
    public function confirmTrainPicAvatarWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->avatarId) {
            @$query['avatarId'] = $request->avatarId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfirmTrainPicAvatar',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/train/confirmTrainPicAvatar',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ConfirmTrainPicAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用户确认.
     *
     * @param request - ConfirmTrainPicAvatarRequest
     *
     * @returns ConfirmTrainPicAvatarResponse
     *
     * @param ConfirmTrainPicAvatarRequest $request
     *
     * @return ConfirmTrainPicAvatarResponse
     */
    public function confirmTrainPicAvatar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->confirmTrainPicAvatarWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建背景素材.
     *
     * @param request - CreateBackgroundPicRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackgroundPicResponse
     *
     * @param CreateBackgroundPicRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateBackgroundPicResponse
     */
    public function createBackgroundPicWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filename) {
            @$query['filename'] = $request->filename;
        }

        if (null !== $request->ossKey) {
            @$query['ossKey'] = $request->ossKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBackgroundPic',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/chat/createBackgroundPic',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateBackgroundPicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建背景素材.
     *
     * @param request - CreateBackgroundPicRequest
     *
     * @returns CreateBackgroundPicResponse
     *
     * @param CreateBackgroundPicRequest $request
     *
     * @return CreateBackgroundPicResponse
     */
    public function createBackgroundPic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBackgroundPicWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建播报贴图.
     *
     * @param request - CreateBroadcastStickerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBroadcastStickerResponse
     *
     * @param CreateBroadcastStickerRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateBroadcastStickerResponse
     */
    public function createBroadcastStickerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileName) {
            @$body['fileName'] = $request->fileName;
        }

        if (null !== $request->ossKey) {
            @$body['ossKey'] = $request->ossKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBroadcastSticker',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/customer/broadcast/material/sticker/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateBroadcastStickerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建播报贴图.
     *
     * @param request - CreateBroadcastStickerRequest
     *
     * @returns CreateBroadcastStickerResponse
     *
     * @param CreateBroadcastStickerRequest $request
     *
     * @return CreateBroadcastStickerResponse
     */
    public function createBroadcastSticker($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBroadcastStickerWithOptions($request, $headers, $runtime);
    }

    /**
     * 基于模板创建播报视频.
     *
     * @param request - CreateBroadcastVideoFromTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBroadcastVideoFromTemplateResponse
     *
     * @param CreateBroadcastVideoFromTemplateRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateBroadcastVideoFromTemplateResponse
     */
    public function createBroadcastVideoFromTemplateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->templateId) {
            @$body['templateId'] = $request->templateId;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        if (null !== $request->videoOptions) {
            @$body['videoOptions'] = $request->videoOptions;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBroadcastVideoFromTemplate',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/amp/customer/broadcast/video/createFromTemplate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateBroadcastVideoFromTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 基于模板创建播报视频.
     *
     * @param request - CreateBroadcastVideoFromTemplateRequest
     *
     * @returns CreateBroadcastVideoFromTemplateResponse
     *
     * @param CreateBroadcastVideoFromTemplateRequest $request
     *
     * @return CreateBroadcastVideoFromTemplateResponse
     */
    public function createBroadcastVideoFromTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBroadcastVideoFromTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * 背景配置.
     *
     * @param request - CreateChatConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatConfigResponse
     *
     * @param CreateChatConfigRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateChatConfigResponse
     */
    public function createChatConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->avatarId) {
            @$query['avatarId'] = $request->avatarId;
        }

        if (null !== $request->backgroundId) {
            @$query['backgroundId'] = $request->backgroundId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateChatConfig',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/chat/createChatConfig',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateChatConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 背景配置.
     *
     * @param request - CreateChatConfigRequest
     *
     * @returns CreateChatConfigResponse
     *
     * @param CreateChatConfigRequest $request
     *
     * @return CreateChatConfigResponse
     */
    public function createChatConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChatConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建数字人会话.
     *
     * @param request - CreateChatSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatSessionResponse
     *
     * @param string                   $id
     * @param CreateChatSessionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateChatSessionResponse
     */
    public function createChatSessionWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->license) {
            @$query['license'] = $request->license;
        }

        if (null !== $request->platform) {
            @$query['platform'] = $request->platform;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateChatSession',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/chat/init/' . Url::percentEncode($id) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateChatSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数字人会话.
     *
     * @param request - CreateChatSessionRequest
     *
     * @returns CreateChatSessionResponse
     *
     * @param string                   $id
     * @param CreateChatSessionRequest $request
     *
     * @return CreateChatSessionResponse
     */
    public function createChatSession($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChatSessionWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 创建对话免训照片数字人.
     *
     * @param request - CreateNoTrainPicAvatarRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNoTrainPicAvatarResponse
     *
     * @param CreateNoTrainPicAvatarRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateNoTrainPicAvatarResponse
     */
    public function createNoTrainPicAvatarWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expressiveness) {
            @$query['expressiveness'] = $request->expressiveness;
        }

        if (null !== $request->gender) {
            @$query['gender'] = $request->gender;
        }

        if (null !== $request->generateAssets) {
            @$query['generateAssets'] = $request->generateAssets;
        }

        if (null !== $request->imageOssPath) {
            @$query['imageOssPath'] = $request->imageOssPath;
        }

        if (null !== $request->jwtToken) {
            @$query['jwtToken'] = $request->jwtToken;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->transparent) {
            @$query['transparent'] = $request->transparent;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNoTrainPicAvatar',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/chat/createNoTrainPicAvatar',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateNoTrainPicAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建对话免训照片数字人.
     *
     * @param request - CreateNoTrainPicAvatarRequest
     *
     * @returns CreateNoTrainPicAvatarResponse
     *
     * @param CreateNoTrainPicAvatarRequest $request
     *
     * @return CreateNoTrainPicAvatarResponse
     */
    public function createNoTrainPicAvatar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createNoTrainPicAvatarWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建TTS音色.
     *
     * @param request - CreateTTSVoiceCustomRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTTSVoiceCustomResponse
     *
     * @param CreateTTSVoiceCustomRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTTSVoiceCustomResponse
     */
    public function createTTSVoiceCustomWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->gender) {
            @$query['gender'] = $request->gender;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->ossKey) {
            @$query['ossKey'] = $request->ossKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTTSVoiceCustom',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/voice/createTTSVoiceCustom',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTTSVoiceCustomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建TTS音色.
     *
     * @param request - CreateTTSVoiceCustomRequest
     *
     * @returns CreateTTSVoiceCustomResponse
     *
     * @param CreateTTSVoiceCustomRequest $request
     *
     * @return CreateTTSVoiceCustomResponse
     */
    public function createTTSVoiceCustom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTTSVoiceCustomWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建图片训练数字人.
     *
     * @param request - CreateTrainPicAvatarRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTrainPicAvatarResponse
     *
     * @param CreateTrainPicAvatarRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTrainPicAvatarResponse
     */
    public function createTrainPicAvatarWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gender) {
            @$query['gender'] = $request->gender;
        }

        if (null !== $request->generateAssets) {
            @$query['generateAssets'] = $request->generateAssets;
        }

        if (null !== $request->imageOssPath) {
            @$query['imageOssPath'] = $request->imageOssPath;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->templateId) {
            @$query['templateId'] = $request->templateId;
        }

        if (null !== $request->transparent) {
            @$query['transparent'] = $request->transparent;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTrainPicAvatar',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/train/createTrainPicAvatar',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTrainPicAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建图片训练数字人.
     *
     * @param request - CreateTrainPicAvatarRequest
     *
     * @returns CreateTrainPicAvatarResponse
     *
     * @param CreateTrainPicAvatarRequest $request
     *
     * @return CreateTrainPicAvatarResponse
     */
    public function createTrainPicAvatar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTrainPicAvatarWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询播报模板详情.
     *
     * @param request - GetBroadcastTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBroadcastTemplateResponse
     *
     * @param GetBroadcastTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetBroadcastTemplateResponse
     */
    public function getBroadcastTemplateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['templateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBroadcastTemplate',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/customer/broadcast/template/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetBroadcastTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询播报模板详情.
     *
     * @param request - GetBroadcastTemplateRequest
     *
     * @returns GetBroadcastTemplateResponse
     *
     * @param GetBroadcastTemplateRequest $request
     *
     * @return GetBroadcastTemplateResponse
     */
    public function getBroadcastTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBroadcastTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询图片训练数字人的状态
     *
     * @param request - GetTrainPicAvatarStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrainPicAvatarStatusResponse
     *
     * @param GetTrainPicAvatarStatusRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTrainPicAvatarStatusResponse
     */
    public function getTrainPicAvatarStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->avatarId) {
            @$query['avatarId'] = $request->avatarId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrainPicAvatarStatus',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/train/getTrainPicAvatarStatus',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTrainPicAvatarStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询图片训练数字人的状态
     *
     * @param request - GetTrainPicAvatarStatusRequest
     *
     * @returns GetTrainPicAvatarStatusResponse
     *
     * @param GetTrainPicAvatarStatusRequest $request
     *
     * @return GetTrainPicAvatarStatusResponse
     */
    public function getTrainPicAvatarStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrainPicAvatarStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取对话免训图片素材上传凭证
     *
     * @param request - GetUploadPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUploadPolicyResponse
     *
     * @param GetUploadPolicyRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetUploadPolicyResponse
     */
    public function getUploadPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jwtToken) {
            @$query['jwtToken'] = $request->jwtToken;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUploadPolicy',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/chat/getUploadPolicy',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取对话免训图片素材上传凭证
     *
     * @param request - GetUploadPolicyRequest
     *
     * @returns GetUploadPolicyResponse
     *
     * @param GetUploadPolicyRequest $request
     *
     * @return GetUploadPolicyResponse
     */
    public function getUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUploadPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举播报模板
     *
     * @param request - ListBroadcastTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBroadcastTemplatesResponse
     *
     * @param ListBroadcastTemplatesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListBroadcastTemplatesResponse
     */
    public function listBroadcastTemplatesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBroadcastTemplates',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/customer/broadcast/template/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListBroadcastTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举播报模板
     *
     * @param request - ListBroadcastTemplatesRequest
     *
     * @returns ListBroadcastTemplatesResponse
     *
     * @param ListBroadcastTemplatesRequest $request
     *
     * @return ListBroadcastTemplatesResponse
     */
    public function listBroadcastTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBroadcastTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * 根据视频id批量查询播报视频（最多查询100个）.
     *
     * @param tmpReq - ListBroadcastVideosByIdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBroadcastVideosByIdResponse
     *
     * @param ListBroadcastVideosByIdRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListBroadcastVideosByIdResponse
     */
    public function listBroadcastVideosByIdWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListBroadcastVideosByIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->videoIds) {
            $request->videoIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->videoIds, 'videoIds', 'json');
        }

        $query = [];
        if (null !== $request->videoIdsShrink) {
            @$query['videoIds'] = $request->videoIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBroadcastVideosById',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/amp/customer/broadcast/video/batchQuery',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListBroadcastVideosByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据视频id批量查询播报视频（最多查询100个）.
     *
     * @param request - ListBroadcastVideosByIdRequest
     *
     * @returns ListBroadcastVideosByIdResponse
     *
     * @param ListBroadcastVideosByIdRequest $request
     *
     * @return ListBroadcastVideosByIdResponse
     */
    public function listBroadcastVideosById($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBroadcastVideosByIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举私有TTS音色.
     *
     * @param request - ListPrivateTTSVoicesCustomRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrivateTTSVoicesCustomResponse
     *
     * @param ListPrivateTTSVoicesCustomRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListPrivateTTSVoicesCustomResponse
     */
    public function listPrivateTTSVoicesCustomWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageIndex) {
            @$query['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrivateTTSVoicesCustom',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/voice/listPrivateTTSVoicesCustom',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPrivateTTSVoicesCustomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举私有TTS音色.
     *
     * @param request - ListPrivateTTSVoicesCustomRequest
     *
     * @returns ListPrivateTTSVoicesCustomResponse
     *
     * @param ListPrivateTTSVoicesCustomRequest $request
     *
     * @return ListPrivateTTSVoicesCustomResponse
     */
    public function listPrivateTTSVoicesCustom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPrivateTTSVoicesCustomWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询底板素材.
     *
     * @param request - ListTemplateMaterialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplateMaterialResponse
     *
     * @param ListTemplateMaterialRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListTemplateMaterialResponse
     */
    public function listTemplateMaterialWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->templateIds) {
            @$query['templateIds'] = $request->templateIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplateMaterial',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/train/listTemplateMaterial',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTemplateMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询底板素材.
     *
     * @param request - ListTemplateMaterialRequest
     *
     * @returns ListTemplateMaterialResponse
     *
     * @param ListTemplateMaterialRequest $request
     *
     * @return ListTemplateMaterialResponse
     */
    public function listTemplateMaterial($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTemplateMaterialWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询会话实例session.
     *
     * @param tmpReq - QueryChatInstanceSessionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryChatInstanceSessionsResponse
     *
     * @param string                           $instanceId
     * @param QueryChatInstanceSessionsRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryChatInstanceSessionsResponse
     */
    public function queryChatInstanceSessionsWithOptions($instanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryChatInstanceSessionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sessionIds) {
            $request->sessionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sessionIds, 'sessionIds', 'json');
        }

        $query = [];
        if (null !== $request->sessionIdsShrink) {
            @$query['sessionIds'] = $request->sessionIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryChatInstanceSessions',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/chat/instances/' . Url::percentEncode($instanceId) . '/sessions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryChatInstanceSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询会话实例session.
     *
     * @param request - QueryChatInstanceSessionsRequest
     *
     * @returns QueryChatInstanceSessionsResponse
     *
     * @param string                           $instanceId
     * @param QueryChatInstanceSessionsRequest $request
     *
     * @return QueryChatInstanceSessionsResponse
     */
    public function queryChatInstanceSessions($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryChatInstanceSessionsWithOptions($instanceId, $request, $headers, $runtime);
    }
}
