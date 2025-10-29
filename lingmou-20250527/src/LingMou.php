<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CloseChatInstanceSessionsRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CloseChatInstanceSessionsResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CloseChatInstanceSessionsShrinkRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateBackgroundPicRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateBackgroundPicResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatConfigRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatConfigResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateNoTrainPicAvatarRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateNoTrainPicAvatarResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\GetUploadPolicyRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\GetUploadPolicyResponse;
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
