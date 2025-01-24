<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIMath\V20241114;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AIMath\V20241114\Models\ChatMessageRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\ChatMessageResponse;
use AlibabaCloud\SDK\AIMath\V20241114\Models\CreateConversationRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\CreateConversationResponse;
use AlibabaCloud\SDK\AIMath\V20241114\Models\CreateRelatedConversationRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\CreateRelatedConversationResponse;
use AlibabaCloud\SDK\AIMath\V20241114\Models\GenAnalysisRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\GenAnalysisResponse;
use AlibabaCloud\SDK\AIMath\V20241114\Models\GenStepRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\GenStepResponse;
use AlibabaCloud\SDK\AIMath\V20241114\Models\GlobalConfirmRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\GlobalConfirmResponse;
use AlibabaCloud\SDK\AIMath\V20241114\Models\UpdateAnalysisRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\UpdateAnalysisResponse;
use AlibabaCloud\SDK\AIMath\V20241114\Models\UpdateStepRequest;
use AlibabaCloud\SDK\AIMath\V20241114\Models\UpdateStepResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AIMath extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aimath', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 聊天消息API.
     *
     * @param request - ChatMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ChatMessageResponse
     *
     * @param ChatMessageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ChatMessageResponse
     */
    public function chatMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->conversationId) {
            @$body['ConversationId'] = $request->conversationId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChatMessage',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ChatMessageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChatMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 聊天消息API.
     *
     * @param request - ChatMessageRequest
     * @returns ChatMessageResponse
     *
     * @param ChatMessageRequest $request
     *
     * @return ChatMessageResponse
     */
    public function chatMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatMessageWithOptions($request, $runtime);
    }

    /**
     * 创建试题相应的对话。
     *
     * @param request - CreateConversationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateConversationResponse
     *
     * @param CreateConversationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateConversationResponse
     */
    public function createConversationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->exerciseAnalysis) {
            @$body['ExerciseAnalysis'] = $request->exerciseAnalysis;
        }

        if (null !== $request->exerciseAnswer) {
            @$body['ExerciseAnswer'] = $request->exerciseAnswer;
        }

        if (null !== $request->exerciseContent) {
            @$body['ExerciseContent'] = $request->exerciseContent;
        }

        if (null !== $request->exerciseType) {
            @$body['ExerciseType'] = $request->exerciseType;
        }

        if (null !== $request->outerBizId) {
            @$body['OuterBizId'] = $request->outerBizId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConversation',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateConversationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateConversationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建试题相应的对话。
     *
     * @param request - CreateConversationRequest
     * @returns CreateConversationResponse
     *
     * @param CreateConversationRequest $request
     *
     * @return CreateConversationResponse
     */
    public function createConversation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConversationWithOptions($request, $runtime);
    }

    /**
     * 创建关联的对话，输入试题code即可开启对话.
     *
     * @param request - CreateRelatedConversationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateRelatedConversationResponse
     *
     * @param CreateRelatedConversationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateRelatedConversationResponse
     */
    public function createRelatedConversationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->exerciseCode) {
            @$body['ExerciseCode'] = $request->exerciseCode;
        }

        if (null !== $request->outerBizId) {
            @$body['OuterBizId'] = $request->outerBizId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRelatedConversation',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRelatedConversationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRelatedConversationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建关联的对话，输入试题code即可开启对话.
     *
     * @param request - CreateRelatedConversationRequest
     * @returns CreateRelatedConversationResponse
     *
     * @param CreateRelatedConversationRequest $request
     *
     * @return CreateRelatedConversationResponse
     */
    public function createRelatedConversation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRelatedConversationWithOptions($request, $runtime);
    }

    /**
     * 生成解题分析.
     *
     * @param request - GenAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GenAnalysisResponse
     *
     * @param GenAnalysisRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GenAnalysisResponse
     */
    public function genAnalysisWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->exerciseContent) {
            @$body['ExerciseContent'] = $request->exerciseContent;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenAnalysis',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GenAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenAnalysisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 生成解题分析.
     *
     * @param request - GenAnalysisRequest
     * @returns GenAnalysisResponse
     *
     * @param GenAnalysisRequest $request
     *
     * @return GenAnalysisResponse
     */
    public function genAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->genAnalysisWithOptions($request, $runtime);
    }

    /**
     * 生成数学解题步骤.
     *
     * @param request - GenStepRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GenStepResponse
     *
     * @param GenStepRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GenStepResponse
     */
    public function genStepWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->exerciseCode) {
            @$body['ExerciseCode'] = $request->exerciseCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenStep',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GenStepResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenStepResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 生成数学解题步骤.
     *
     * @param request - GenStepRequest
     * @returns GenStepResponse
     *
     * @param GenStepRequest $request
     *
     * @return GenStepResponse
     */
    public function genStep($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->genStepWithOptions($request, $runtime);
    }

    /**
     * 全局确认修订完成.
     *
     * @param request - GlobalConfirmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GlobalConfirmResponse
     *
     * @param GlobalConfirmRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GlobalConfirmResponse
     */
    public function globalConfirmWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->exerciseCode) {
            @$body['ExerciseCode'] = $request->exerciseCode;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GlobalConfirm',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GlobalConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GlobalConfirmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 全局确认修订完成.
     *
     * @param request - GlobalConfirmRequest
     * @returns GlobalConfirmResponse
     *
     * @param GlobalConfirmRequest $request
     *
     * @return GlobalConfirmResponse
     */
    public function globalConfirm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->globalConfirmWithOptions($request, $runtime);
    }

    /**
     * 修订解题分析.
     *
     * @param request - UpdateAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateAnalysisResponse
     *
     * @param UpdateAnalysisRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateAnalysisResponse
     */
    public function updateAnalysisWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->contentCode) {
            @$body['ContentCode'] = $request->contentCode;
        }

        if (null !== $request->exerciseCode) {
            @$body['ExerciseCode'] = $request->exerciseCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAnalysis',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAnalysisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修订解题分析.
     *
     * @param request - UpdateAnalysisRequest
     * @returns UpdateAnalysisResponse
     *
     * @param UpdateAnalysisRequest $request
     *
     * @return UpdateAnalysisResponse
     */
    public function updateAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAnalysisWithOptions($request, $runtime);
    }

    /**
     * 修订解题步骤.
     *
     * @param request - UpdateStepRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateStepResponse
     *
     * @param UpdateStepRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateStepResponse
     */
    public function updateStepWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->contentCode) {
            @$body['ContentCode'] = $request->contentCode;
        }

        if (null !== $request->exerciseCode) {
            @$body['ExerciseCode'] = $request->exerciseCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateStep',
            'version'     => '2024-11-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateStepResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateStepResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修订解题步骤.
     *
     * @param request - UpdateStepRequest
     * @returns UpdateStepResponse
     *
     * @param UpdateStepRequest $request
     *
     * @return UpdateStepResponse
     */
    public function updateStep($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStepWithOptions($request, $runtime);
    }
}
