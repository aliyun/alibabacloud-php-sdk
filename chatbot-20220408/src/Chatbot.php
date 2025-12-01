<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ApplyForStreamAccessTokenRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ApplyForStreamAccessTokenResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\AssociateRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\AssociateResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\AssociateShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\BeginSessionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\BeginSessionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CancelChatRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CancelChatResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CancelInstancePublishTaskRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CancelInstancePublishTaskResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CancelPublishTaskRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CancelPublishTaskResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ContinueInstancePublishTaskRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ContinueInstancePublishTaskResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateConnQuestionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateConnQuestionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDocRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDocResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDocShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDSEntityRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDSEntityResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDSEntityValueRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDSEntityValueResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDSEntityValueShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateFaqRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateFaqResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateFaqShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateInstancePublishTaskRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateInstancePublishTaskResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateIntentRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateIntentResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateIntentShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateLgfRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateLgfResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateLgfShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreatePerspectiveRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreatePerspectiveResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreatePublishTaskRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreatePublishTaskResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreatePublishTaskShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateSimQuestionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateSimQuestionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateSolutionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateSolutionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateSolutionShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateTagGroupRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateTagGroupResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateTagRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateTagResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateUserSayRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateUserSayResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateUserSayShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteConnQuestionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteConnQuestionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteDocRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteDocResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteDSEntityRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteDSEntityResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteDSEntityValueRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteDSEntityValueResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteFaqRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteFaqResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteIntentRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteIntentResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteLgfRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteLgfResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeletePerspectiveRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeletePerspectiveResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteSimQuestionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteSimQuestionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteSolutionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteSolutionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteTagGroupRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteTagGroupResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteTagRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteTagResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteUserSayRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DeleteUserSayResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDSEntityRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDSEntityResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeFaqRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeFaqResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeIntentRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeIntentResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribePerspectiveRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribePerspectiveResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeTagGroupRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeTagGroupResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeTagRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeTagResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\FeedbackRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\FeedbackResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GenerateUserAccessTokenRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GenerateUserAccessTokenResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetAgentInfoRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetAgentInfoResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetAsyncResultRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetAsyncResultResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetBotSessionDataRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetBotSessionDataResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetInstancePublishTaskStateRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetInstancePublishTaskStateResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetPublishTaskStateRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetPublishTaskStateResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\InitIMConnectRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\InitIMConnectResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\LinkInstanceCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\LinkInstanceCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListAgentRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListAgentResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListConnQuestionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListConnQuestionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListDSEntityRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListDSEntityResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListDSEntityValueRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListDSEntityValueResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListInstanceRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListInstanceResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListIntentRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListIntentResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListLgfRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListLgfResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSaasInfoRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSaasInfoResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSaasPermissionGroupInfosRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSaasPermissionGroupInfosResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSimQuestionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSimQuestionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSolutionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSolutionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListTagGroupRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListTagGroupResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListTagRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListTagResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListTongyiChatHistorysRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListTongyiChatHistorysResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListTongyiConversationLogsRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListTongyiConversationLogsResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListUserSayRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListUserSayResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\QueryPerspectivesRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\QueryPerspectivesResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\RetryDocRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\RetryDocResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchDocRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchDocResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchDocShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchFaqRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchFaqResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchFaqShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateConnQuestionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateConnQuestionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDocRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDocResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDocShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDSEntityRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDSEntityResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDSEntityValueRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDSEntityValueResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDSEntityValueShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateFaqRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateFaqResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateFaqShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateIntentRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateIntentResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateIntentShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateLgfRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateLgfResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateLgfShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdatePerspectiveRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdatePerspectiveResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateSimQuestionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateSimQuestionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateSolutionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateSolutionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateSolutionShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateTagGroupRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateTagGroupResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateTagRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateTagResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateUserSayRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateUserSayResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateUserSayShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Chatbot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('chatbot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 申请流式网关AccessToken.
     *
     * @param request - ApplyForStreamAccessTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyForStreamAccessTokenResponse
     *
     * @param ApplyForStreamAccessTokenRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ApplyForStreamAccessTokenResponse
     */
    public function applyForStreamAccessTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyForStreamAccessToken',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyForStreamAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请流式网关AccessToken.
     *
     * @param request - ApplyForStreamAccessTokenRequest
     *
     * @returns ApplyForStreamAccessTokenResponse
     *
     * @param ApplyForStreamAccessTokenRequest $request
     *
     * @return ApplyForStreamAccessTokenResponse
     */
    public function applyForStreamAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyForStreamAccessTokenWithOptions($request, $runtime);
    }

    /**
     * 会话-联想API.
     *
     * @param tmpReq - AssociateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateResponse
     *
     * @param AssociateRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return AssociateResponse
     */
    public function associateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AssociateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->perspective) {
            $request->perspectiveShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->perspective, 'Perspective', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->perspectiveShrink) {
            @$query['Perspective'] = $request->perspectiveShrink;
        }

        if (null !== $request->recommendNum) {
            @$query['RecommendNum'] = $request->recommendNum;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->utterance) {
            @$query['Utterance'] = $request->utterance;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Associate',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 会话-联想API.
     *
     * @param request - AssociateRequest
     *
     * @returns AssociateResponse
     *
     * @param AssociateRequest $request
     *
     * @return AssociateResponse
     */
    public function associate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateWithOptions($request, $runtime);
    }

    /**
     * 获取欢迎语.
     *
     * @param request - BeginSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BeginSessionResponse
     *
     * @param BeginSessionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BeginSessionResponse
     */
    public function beginSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sandBox) {
            @$body['SandBox'] = $request->sandBox;
        }

        if (null !== $request->vendorParam) {
            @$body['VendorParam'] = $request->vendorParam;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BeginSession',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BeginSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取欢迎语.
     *
     * @param request - BeginSessionRequest
     *
     * @returns BeginSessionResponse
     *
     * @param BeginSessionRequest $request
     *
     * @return BeginSessionResponse
     */
    public function beginSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->beginSessionWithOptions($request, $runtime);
    }

    /**
     * 取消对应对话.
     *
     * @param request - CancelChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelChatResponse
     *
     * @param CancelChatRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelChatResponse
     */
    public function cancelChatWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentKey) {
            @$body['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->answer) {
            @$body['Answer'] = $request->answer;
        }

        if (null !== $request->chatId) {
            @$body['ChatId'] = $request->chatId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelChat',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消对应对话.
     *
     * @param request - CancelChatRequest
     *
     * @returns CancelChatResponse
     *
     * @param CancelChatRequest $request
     *
     * @return CancelChatResponse
     */
    public function cancelChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelChatWithOptions($request, $runtime);
    }

    /**
     * 取消机器人发布.
     *
     * @param request - CancelInstancePublishTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelInstancePublishTaskResponse
     *
     * @param CancelInstancePublishTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CancelInstancePublishTaskResponse
     */
    public function cancelInstancePublishTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelInstancePublishTask',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelInstancePublishTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消机器人发布.
     *
     * @param request - CancelInstancePublishTaskRequest
     *
     * @returns CancelInstancePublishTaskResponse
     *
     * @param CancelInstancePublishTaskRequest $request
     *
     * @return CancelInstancePublishTaskResponse
     */
    public function cancelInstancePublishTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelInstancePublishTaskWithOptions($request, $runtime);
    }

    /**
     * 取消发布任务
     *
     * @param request - CancelPublishTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelPublishTaskResponse
     *
     * @param CancelPublishTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelPublishTaskResponse
     */
    public function cancelPublishTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelPublishTask',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelPublishTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消发布任务
     *
     * @param request - CancelPublishTaskRequest
     *
     * @returns CancelPublishTaskResponse
     *
     * @param CancelPublishTaskRequest $request
     *
     * @return CancelPublishTaskResponse
     */
    public function cancelPublishTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPublishTaskWithOptions($request, $runtime);
    }

    /**
     * 会话API.
     *
     * @param tmpReq - ChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatResponse
     *
     * @param ChatRequest    $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return ChatResponse
     */
    public function chatWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChatShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->perspective) {
            $request->perspectiveShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->perspective, 'Perspective', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentName) {
            @$query['IntentName'] = $request->intentName;
        }

        if (null !== $request->knowledgeId) {
            @$query['KnowledgeId'] = $request->knowledgeId;
        }

        if (null !== $request->perspectiveShrink) {
            @$query['Perspective'] = $request->perspectiveShrink;
        }

        if (null !== $request->sandBox) {
            @$query['SandBox'] = $request->sandBox;
        }

        if (null !== $request->senderId) {
            @$query['SenderId'] = $request->senderId;
        }

        if (null !== $request->senderNick) {
            @$query['SenderNick'] = $request->senderNick;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->utterance) {
            @$query['Utterance'] = $request->utterance;
        }

        if (null !== $request->vendorParam) {
            @$query['VendorParam'] = $request->vendorParam;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Chat',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 会话API.
     *
     * @param request - ChatRequest
     *
     * @returns ChatResponse
     *
     * @param ChatRequest $request
     *
     * @return ChatResponse
     */
    public function chat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatWithOptions($request, $runtime);
    }

    /**
     * 继续机器人发布.
     *
     * @param request - ContinueInstancePublishTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContinueInstancePublishTaskResponse
     *
     * @param ContinueInstancePublishTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ContinueInstancePublishTaskResponse
     */
    public function continueInstancePublishTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ContinueInstancePublishTask',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ContinueInstancePublishTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 继续机器人发布.
     *
     * @param request - ContinueInstancePublishTaskRequest
     *
     * @returns ContinueInstancePublishTaskResponse
     *
     * @param ContinueInstancePublishTaskRequest $request
     *
     * @return ContinueInstancePublishTaskResponse
     */
    public function continueInstancePublishTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueInstancePublishTaskWithOptions($request, $runtime);
    }

    /**
     * 新增类目.
     *
     * @param request - CreateCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCategoryResponse
     *
     * @param CreateCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCategoryResponse
     */
    public function createCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->bizCode) {
            @$body['BizCode'] = $request->bizCode;
        }

        if (null !== $request->knowledgeType) {
            @$body['KnowledgeType'] = $request->knowledgeType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->parentCategoryId) {
            @$body['ParentCategoryId'] = $request->parentCategoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCategory',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增类目.
     *
     * @param request - CreateCategoryRequest
     *
     * @returns CreateCategoryResponse
     *
     * @param CreateCategoryRequest $request
     *
     * @return CreateCategoryResponse
     */
    public function createCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCategoryWithOptions($request, $runtime);
    }

    /**
     * 新建FAQ关联问.
     *
     * @param request - CreateConnQuestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConnQuestionResponse
     *
     * @param CreateConnQuestionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateConnQuestionResponse
     */
    public function createConnQuestionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->connQuestionId) {
            @$body['ConnQuestionId'] = $request->connQuestionId;
        }

        if (null !== $request->knowledgeId) {
            @$body['KnowledgeId'] = $request->knowledgeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConnQuestion',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConnQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建FAQ关联问.
     *
     * @param request - CreateConnQuestionRequest
     *
     * @returns CreateConnQuestionResponse
     *
     * @param CreateConnQuestionRequest $request
     *
     * @return CreateConnQuestionResponse
     */
    public function createConnQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConnQuestionWithOptions($request, $runtime);
    }

    /**
     * 实体-创建.
     *
     * @param request - CreateDSEntityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDSEntityResponse
     *
     * @param CreateDSEntityRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDSEntityResponse
     */
    public function createDSEntityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->entityName) {
            @$query['EntityName'] = $request->entityName;
        }

        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDSEntity',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDSEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实体-创建.
     *
     * @param request - CreateDSEntityRequest
     *
     * @returns CreateDSEntityResponse
     *
     * @param CreateDSEntityRequest $request
     *
     * @return CreateDSEntityResponse
     */
    public function createDSEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDSEntityWithOptions($request, $runtime);
    }

    /**
     * 实体成员-创建.
     *
     * @param tmpReq - CreateDSEntityValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDSEntityValueResponse
     *
     * @param CreateDSEntityValueRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDSEntityValueResponse
     */
    public function createDSEntityValueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDSEntityValueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->synonyms) {
            $request->synonymsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->synonyms, 'Synonyms', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->synonymsShrink) {
            @$body['Synonyms'] = $request->synonymsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDSEntityValue',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDSEntityValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实体成员-创建.
     *
     * @param request - CreateDSEntityValueRequest
     *
     * @returns CreateDSEntityValueResponse
     *
     * @param CreateDSEntityValueRequest $request
     *
     * @return CreateDSEntityValueResponse
     */
    public function createDSEntityValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDSEntityValueWithOptions($request, $runtime);
    }

    /**
     * 创建文档.
     *
     * @param tmpReq - CreateDocRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDocResponse
     *
     * @param CreateDocRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateDocResponse
     */
    public function createDocWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDocShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->docMetadata) {
            $request->docMetadataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docMetadata, 'DocMetadata', 'json');
        }

        if (null !== $tmpReq->tagIds) {
            $request->tagIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagIds, 'TagIds', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->docMetadataShrink) {
            @$query['DocMetadata'] = $request->docMetadataShrink;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->meta) {
            @$query['Meta'] = $request->meta;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->tagIdsShrink) {
            @$query['TagIds'] = $request->tagIdsShrink;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDoc',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建文档.
     *
     * @param request - CreateDocRequest
     *
     * @returns CreateDocResponse
     *
     * @param CreateDocRequest $request
     *
     * @return CreateDocResponse
     */
    public function createDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDocWithOptions($request, $runtime);
    }

    /**
     * 新建FAQ.
     *
     * @param tmpReq - CreateFaqRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFaqResponse
     *
     * @param CreateFaqRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateFaqResponse
     */
    public function createFaqWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFaqShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tagIdList) {
            $request->tagIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagIdList, 'TagIdList', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->solutionContent) {
            @$body['SolutionContent'] = $request->solutionContent;
        }

        if (null !== $request->solutionType) {
            @$body['SolutionType'] = $request->solutionType;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->tagIdListShrink) {
            @$body['TagIdList'] = $request->tagIdListShrink;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFaq',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFaqResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建FAQ.
     *
     * @param request - CreateFaqRequest
     *
     * @returns CreateFaqResponse
     *
     * @param CreateFaqRequest $request
     *
     * @return CreateFaqResponse
     */
    public function createFaq($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFaqWithOptions($request, $runtime);
    }

    /**
     * 机器人-创建.
     *
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
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->introduction) {
            @$query['Introduction'] = $request->introduction;
        }

        if (null !== $request->languageCode) {
            @$query['LanguageCode'] = $request->languageCode;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->robotType) {
            @$query['RobotType'] = $request->robotType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2022-04-08',
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
     * 机器人-创建.
     *
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
     * 创建机器人发布任务
     *
     * @param request - CreateInstancePublishTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstancePublishTaskResponse
     *
     * @param CreateInstancePublishTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateInstancePublishTaskResponse
     */
    public function createInstancePublishTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstancePublishTask',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstancePublishTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建机器人发布任务
     *
     * @param request - CreateInstancePublishTaskRequest
     *
     * @returns CreateInstancePublishTaskResponse
     *
     * @param CreateInstancePublishTaskRequest $request
     *
     * @return CreateInstancePublishTaskResponse
     */
    public function createInstancePublishTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstancePublishTaskWithOptions($request, $runtime);
    }

    /**
     * 意图-创建.
     *
     * @param tmpReq - CreateIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIntentResponse
     *
     * @param CreateIntentRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateIntentResponse
     */
    public function createIntentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateIntentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->intentDefinition) {
            $request->intentDefinitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->intentDefinition, 'IntentDefinition', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentDefinitionShrink) {
            @$query['IntentDefinition'] = $request->intentDefinitionShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIntent',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 意图-创建.
     *
     * @param request - CreateIntentRequest
     *
     * @returns CreateIntentResponse
     *
     * @param CreateIntentRequest $request
     *
     * @return CreateIntentResponse
     */
    public function createIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntentWithOptions($request, $runtime);
    }

    /**
     * 意图-LGF-创建.
     *
     * @param tmpReq - CreateLgfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLgfResponse
     *
     * @param CreateLgfRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateLgfResponse
     */
    public function createLgfWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateLgfShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->lgfDefinition) {
            $request->lgfDefinitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->lgfDefinition, 'LgfDefinition', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lgfDefinitionShrink) {
            @$query['LgfDefinition'] = $request->lgfDefinitionShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLgf',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLgfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 意图-LGF-创建.
     *
     * @param request - CreateLgfRequest
     *
     * @returns CreateLgfResponse
     *
     * @param CreateLgfRequest $request
     *
     * @return CreateLgfResponse
     */
    public function createLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLgfWithOptions($request, $runtime);
    }

    /**
     * 视角-创建.
     *
     * @param request - CreatePerspectiveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePerspectiveResponse
     *
     * @param CreatePerspectiveRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePerspectiveResponse
     */
    public function createPerspectiveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
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
            'action' => 'CreatePerspective',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePerspectiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视角-创建.
     *
     * @param request - CreatePerspectiveRequest
     *
     * @returns CreatePerspectiveResponse
     *
     * @param CreatePerspectiveRequest $request
     *
     * @return CreatePerspectiveResponse
     */
    public function createPerspective($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPerspectiveWithOptions($request, $runtime);
    }

    /**
     * 创建发布任务
     *
     * @param tmpReq - CreatePublishTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePublishTaskResponse
     *
     * @param CreatePublishTaskRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePublishTaskResponse
     */
    public function createPublishTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePublishTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataIdList) {
            $request->dataIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataIdList, 'DataIdList', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->dataIdListShrink) {
            @$query['DataIdList'] = $request->dataIdListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePublishTask',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePublishTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建发布任务
     *
     * @param request - CreatePublishTaskRequest
     *
     * @returns CreatePublishTaskResponse
     *
     * @param CreatePublishTaskRequest $request
     *
     * @return CreatePublishTaskResponse
     */
    public function createPublishTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublishTaskWithOptions($request, $runtime);
    }

    /**
     * 新建FAQ相似问.
     *
     * @param request - CreateSimQuestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSimQuestionResponse
     *
     * @param CreateSimQuestionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSimQuestionResponse
     */
    public function createSimQuestionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->knowledgeId) {
            @$body['KnowledgeId'] = $request->knowledgeId;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSimQuestion',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSimQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建FAQ相似问.
     *
     * @param request - CreateSimQuestionRequest
     *
     * @returns CreateSimQuestionResponse
     *
     * @param CreateSimQuestionRequest $request
     *
     * @return CreateSimQuestionResponse
     */
    public function createSimQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSimQuestionWithOptions($request, $runtime);
    }

    /**
     * 新建FAQ答案.
     *
     * @param tmpReq - CreateSolutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSolutionResponse
     *
     * @param CreateSolutionRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSolutionResponse
     */
    public function createSolutionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSolutionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tagIdList) {
            $request->tagIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagIdList, 'TagIdList', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->contentType) {
            @$query['ContentType'] = $request->contentType;
        }

        if (null !== $request->knowledgeId) {
            @$query['KnowledgeId'] = $request->knowledgeId;
        }

        if (null !== $request->perspectiveCodes) {
            @$query['PerspectiveCodes'] = $request->perspectiveCodes;
        }

        $body = [];
        if (null !== $request->tagIdListShrink) {
            @$body['TagIdList'] = $request->tagIdListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSolution',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建FAQ答案.
     *
     * @param request - CreateSolutionRequest
     *
     * @returns CreateSolutionResponse
     *
     * @param CreateSolutionRequest $request
     *
     * @return CreateSolutionResponse
     */
    public function createSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSolutionWithOptions($request, $runtime);
    }

    /**
     * 标签创建.
     *
     * @param request - CreateTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTagResponse
     *
     * @param CreateTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateTagResponse
     */
    public function createTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->tagName) {
            @$body['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTag',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 标签创建.
     *
     * @param request - CreateTagRequest
     *
     * @returns CreateTagResponse
     *
     * @param CreateTagRequest $request
     *
     * @return CreateTagResponse
     */
    public function createTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagWithOptions($request, $runtime);
    }

    /**
     * 标签组创建.
     *
     * @param request - CreateTagGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTagGroupResponse
     *
     * @param CreateTagGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTagGroupResponse
     */
    public function createTagGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTagGroup',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 标签组创建.
     *
     * @param request - CreateTagGroupRequest
     *
     * @returns CreateTagGroupResponse
     *
     * @param CreateTagGroupRequest $request
     *
     * @return CreateTagGroupResponse
     */
    public function createTagGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagGroupWithOptions($request, $runtime);
    }

    /**
     * 意图-话术-创建.
     *
     * @param tmpReq - CreateUserSayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserSayResponse
     *
     * @param CreateUserSayRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateUserSayResponse
     */
    public function createUserSayWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateUserSayShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userSayDefinition) {
            $request->userSayDefinitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userSayDefinition, 'UserSayDefinition', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userSayDefinitionShrink) {
            @$query['UserSayDefinition'] = $request->userSayDefinitionShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUserSay',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserSayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 意图-话术-创建.
     *
     * @param request - CreateUserSayRequest
     *
     * @returns CreateUserSayResponse
     *
     * @param CreateUserSayRequest $request
     *
     * @return CreateUserSayResponse
     */
    public function createUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserSayWithOptions($request, $runtime);
    }

    /**
     * 删除类目.
     *
     * @param request - DeleteCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCategoryResponse
     *
     * @param DeleteCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCategory',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除类目.
     *
     * @param request - DeleteCategoryRequest
     *
     * @returns DeleteCategoryResponse
     *
     * @param DeleteCategoryRequest $request
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCategoryWithOptions($request, $runtime);
    }

    /**
     * 删除FAQ关联问.
     *
     * @param request - DeleteConnQuestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConnQuestionResponse
     *
     * @param DeleteConnQuestionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteConnQuestionResponse
     */
    public function deleteConnQuestionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->outlineId) {
            @$body['OutlineId'] = $request->outlineId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteConnQuestion',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteConnQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除FAQ关联问.
     *
     * @param request - DeleteConnQuestionRequest
     *
     * @returns DeleteConnQuestionResponse
     *
     * @param DeleteConnQuestionRequest $request
     *
     * @return DeleteConnQuestionResponse
     */
    public function deleteConnQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConnQuestionWithOptions($request, $runtime);
    }

    /**
     * 实体-删除.
     *
     * @param request - DeleteDSEntityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDSEntityResponse
     *
     * @param DeleteDSEntityRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDSEntityResponse
     */
    public function deleteDSEntityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDSEntity',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDSEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实体-删除.
     *
     * @param request - DeleteDSEntityRequest
     *
     * @returns DeleteDSEntityResponse
     *
     * @param DeleteDSEntityRequest $request
     *
     * @return DeleteDSEntityResponse
     */
    public function deleteDSEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDSEntityWithOptions($request, $runtime);
    }

    /**
     * 实体成员-删除.
     *
     * @param request - DeleteDSEntityValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDSEntityValueResponse
     *
     * @param DeleteDSEntityValueRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDSEntityValueResponse
     */
    public function deleteDSEntityValueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->entityValueId) {
            @$query['EntityValueId'] = $request->entityValueId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDSEntityValue',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDSEntityValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实体成员-删除.
     *
     * @param request - DeleteDSEntityValueRequest
     *
     * @returns DeleteDSEntityValueResponse
     *
     * @param DeleteDSEntityValueRequest $request
     *
     * @return DeleteDSEntityValueResponse
     */
    public function deleteDSEntityValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDSEntityValueWithOptions($request, $runtime);
    }

    /**
     * 文档删除.
     *
     * @param request - DeleteDocRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDocResponse
     *
     * @param DeleteDocRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteDocResponse
     */
    public function deleteDocWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->knowledgeId) {
            @$query['KnowledgeId'] = $request->knowledgeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDoc',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档删除.
     *
     * @param request - DeleteDocRequest
     *
     * @returns DeleteDocResponse
     *
     * @param DeleteDocRequest $request
     *
     * @return DeleteDocResponse
     */
    public function deleteDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocWithOptions($request, $runtime);
    }

    /**
     * 删除FAQ，如果是已发布的知识，删除之后，变成已删除未发布，需要发布才能真正删除.
     *
     * @param request - DeleteFaqRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFaqResponse
     *
     * @param DeleteFaqRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteFaqResponse
     */
    public function deleteFaqWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->knowledgeId) {
            @$body['KnowledgeId'] = $request->knowledgeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFaq',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFaqResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除FAQ，如果是已发布的知识，删除之后，变成已删除未发布，需要发布才能真正删除.
     *
     * @param request - DeleteFaqRequest
     *
     * @returns DeleteFaqResponse
     *
     * @param DeleteFaqRequest $request
     *
     * @return DeleteFaqResponse
     */
    public function deleteFaq($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaqWithOptions($request, $runtime);
    }

    /**
     * 机器人-删除.
     *
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
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2022-04-08',
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
     * 机器人-删除.
     *
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
     * 意图-删除.
     *
     * @param request - DeleteIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIntentResponse
     *
     * @param DeleteIntentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteIntentResponse
     */
    public function deleteIntentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIntent',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 意图-删除.
     *
     * @param request - DeleteIntentRequest
     *
     * @returns DeleteIntentResponse
     *
     * @param DeleteIntentRequest $request
     *
     * @return DeleteIntentResponse
     */
    public function deleteIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIntentWithOptions($request, $runtime);
    }

    /**
     * 意图-LGF-删除.
     *
     * @param request - DeleteLgfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLgfResponse
     *
     * @param DeleteLgfRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteLgfResponse
     */
    public function deleteLgfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->lgfId) {
            @$query['LgfId'] = $request->lgfId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLgf',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLgfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 意图-LGF-删除.
     *
     * @param request - DeleteLgfRequest
     *
     * @returns DeleteLgfResponse
     *
     * @param DeleteLgfRequest $request
     *
     * @return DeleteLgfResponse
     */
    public function deleteLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLgfWithOptions($request, $runtime);
    }

    /**
     * 视角-删除.
     *
     * @param request - DeletePerspectiveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePerspectiveResponse
     *
     * @param DeletePerspectiveRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeletePerspectiveResponse
     */
    public function deletePerspectiveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->perspectiveId) {
            @$query['PerspectiveId'] = $request->perspectiveId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePerspective',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePerspectiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视角-删除.
     *
     * @param request - DeletePerspectiveRequest
     *
     * @returns DeletePerspectiveResponse
     *
     * @param DeletePerspectiveRequest $request
     *
     * @return DeletePerspectiveResponse
     */
    public function deletePerspective($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePerspectiveWithOptions($request, $runtime);
    }

    /**
     * 删除FAQ相似问.
     *
     * @param request - DeleteSimQuestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSimQuestionResponse
     *
     * @param DeleteSimQuestionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteSimQuestionResponse
     */
    public function deleteSimQuestionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->simQuestionId) {
            @$body['SimQuestionId'] = $request->simQuestionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSimQuestion',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSimQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除FAQ相似问.
     *
     * @param request - DeleteSimQuestionRequest
     *
     * @returns DeleteSimQuestionResponse
     *
     * @param DeleteSimQuestionRequest $request
     *
     * @return DeleteSimQuestionResponse
     */
    public function deleteSimQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSimQuestionWithOptions($request, $runtime);
    }

    /**
     * 删除FAQ答案.
     *
     * @param request - DeleteSolutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSolutionResponse
     *
     * @param DeleteSolutionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSolutionResponse
     */
    public function deleteSolutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->solutionId) {
            @$body['SolutionId'] = $request->solutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSolution',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除FAQ答案.
     *
     * @param request - DeleteSolutionRequest
     *
     * @returns DeleteSolutionResponse
     *
     * @param DeleteSolutionRequest $request
     *
     * @return DeleteSolutionResponse
     */
    public function deleteSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSolutionWithOptions($request, $runtime);
    }

    /**
     * 标签删除.
     *
     * @param request - DeleteTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTagResponse
     *
     * @param DeleteTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteTagResponse
     */
    public function deleteTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTag',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 标签删除.
     *
     * @param request - DeleteTagRequest
     *
     * @returns DeleteTagResponse
     *
     * @param DeleteTagRequest $request
     *
     * @return DeleteTagResponse
     */
    public function deleteTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagWithOptions($request, $runtime);
    }

    /**
     * 标签组删除.
     *
     * @param request - DeleteTagGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTagGroupResponse
     *
     * @param DeleteTagGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTagGroupResponse
     */
    public function deleteTagGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTagGroup',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 标签组删除.
     *
     * @param request - DeleteTagGroupRequest
     *
     * @returns DeleteTagGroupResponse
     *
     * @param DeleteTagGroupRequest $request
     *
     * @return DeleteTagGroupResponse
     */
    public function deleteTagGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagGroupWithOptions($request, $runtime);
    }

    /**
     * 意图-用户话术-删除.
     *
     * @param request - DeleteUserSayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserSayResponse
     *
     * @param DeleteUserSayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteUserSayResponse
     */
    public function deleteUserSayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->userSayId) {
            @$query['UserSayId'] = $request->userSayId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserSay',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserSayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 意图-用户话术-删除.
     *
     * @param request - DeleteUserSayRequest
     *
     * @returns DeleteUserSayResponse
     *
     * @param DeleteUserSayRequest $request
     *
     * @return DeleteUserSayResponse
     */
    public function deleteUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserSayWithOptions($request, $runtime);
    }

    /**
     * 查看单个类目信息.
     *
     * @param request - DescribeCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCategoryResponse
     *
     * @param DescribeCategoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCategoryResponse
     */
    public function describeCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCategory',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看单个类目信息.
     *
     * @param request - DescribeCategoryRequest
     *
     * @returns DescribeCategoryResponse
     *
     * @param DescribeCategoryRequest $request
     *
     * @return DescribeCategoryResponse
     */
    public function describeCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCategoryWithOptions($request, $runtime);
    }

    /**
     * 实体-详情.
     *
     * @param request - DescribeDSEntityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDSEntityResponse
     *
     * @param DescribeDSEntityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDSEntityResponse
     */
    public function describeDSEntityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDSEntity',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDSEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实体-详情.
     *
     * @param request - DescribeDSEntityRequest
     *
     * @returns DescribeDSEntityResponse
     *
     * @param DescribeDSEntityRequest $request
     *
     * @return DescribeDSEntityResponse
     */
    public function describeDSEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDSEntityWithOptions($request, $runtime);
    }

    /**
     * 文档详情.
     *
     * @param request - DescribeDocRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDocResponse
     *
     * @param DescribeDocRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeDocResponse
     */
    public function describeDocWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->knowledgeId) {
            @$query['KnowledgeId'] = $request->knowledgeId;
        }

        if (null !== $request->showDetail) {
            @$query['ShowDetail'] = $request->showDetail;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDoc',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档详情.
     *
     * @param request - DescribeDocRequest
     *
     * @returns DescribeDocResponse
     *
     * @param DescribeDocRequest $request
     *
     * @return DescribeDocResponse
     */
    public function describeDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDocWithOptions($request, $runtime);
    }

    /**
     * 知识详情.
     *
     * @param request - DescribeFaqRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFaqResponse
     *
     * @param DescribeFaqRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeFaqResponse
     */
    public function describeFaqWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->knowledgeId) {
            @$body['KnowledgeId'] = $request->knowledgeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeFaq',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFaqResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 知识详情.
     *
     * @param request - DescribeFaqRequest
     *
     * @returns DescribeFaqResponse
     *
     * @param DescribeFaqRequest $request
     *
     * @return DescribeFaqResponse
     */
    public function describeFaq($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaqWithOptions($request, $runtime);
    }

    /**
     * 机器人-详情.
     *
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
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstance',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机器人-详情.
     *
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
     * 意图-详情.
     *
     * @param request - DescribeIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIntentResponse
     *
     * @param DescribeIntentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeIntentResponse
     */
    public function describeIntentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->intentId) {
            @$body['IntentId'] = $request->intentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeIntent',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 意图-详情.
     *
     * @param request - DescribeIntentRequest
     *
     * @returns DescribeIntentResponse
     *
     * @param DescribeIntentRequest $request
     *
     * @return DescribeIntentResponse
     */
    public function describeIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIntentWithOptions($request, $runtime);
    }

    /**
     * 视角-详情.
     *
     * @param request - DescribePerspectiveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePerspectiveResponse
     *
     * @param DescribePerspectiveRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePerspectiveResponse
     */
    public function describePerspectiveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->perspectiveId) {
            @$query['PerspectiveId'] = $request->perspectiveId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePerspective',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePerspectiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视角-详情.
     *
     * @param request - DescribePerspectiveRequest
     *
     * @returns DescribePerspectiveResponse
     *
     * @param DescribePerspectiveRequest $request
     *
     * @return DescribePerspectiveResponse
     */
    public function describePerspective($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePerspectiveWithOptions($request, $runtime);
    }

    /**
     * 标签详情.
     *
     * @param request - DescribeTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagResponse
     *
     * @param DescribeTagRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeTagResponse
     */
    public function describeTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTag',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 标签详情.
     *
     * @param request - DescribeTagRequest
     *
     * @returns DescribeTagResponse
     *
     * @param DescribeTagRequest $request
     *
     * @return DescribeTagResponse
     */
    public function describeTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagWithOptions($request, $runtime);
    }

    /**
     * 标签组详情.
     *
     * @param request - DescribeTagGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagGroupResponse
     *
     * @param DescribeTagGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeTagGroupResponse
     */
    public function describeTagGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTagGroup',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 标签组详情.
     *
     * @param request - DescribeTagGroupRequest
     *
     * @returns DescribeTagGroupResponse
     *
     * @param DescribeTagGroupRequest $request
     *
     * @return DescribeTagGroupResponse
     */
    public function describeTagGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagGroupWithOptions($request, $runtime);
    }

    /**
     * 问答点赞、点踩API.
     *
     * @param request - FeedbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FeedbackResponse
     *
     * @param FeedbackRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return FeedbackResponse
     */
    public function feedbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->feedback) {
            @$query['Feedback'] = $request->feedback;
        }

        if (null !== $request->feedbackContent) {
            @$query['FeedbackContent'] = $request->feedbackContent;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Feedback',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 问答点赞、点踩API.
     *
     * @param request - FeedbackRequest
     *
     * @returns FeedbackResponse
     *
     * @param FeedbackRequest $request
     *
     * @return FeedbackResponse
     */
    public function feedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->feedbackWithOptions($request, $runtime);
    }

    /**
     * 生成用户免登Token.
     *
     * @param request - GenerateUserAccessTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateUserAccessTokenResponse
     *
     * @param GenerateUserAccessTokenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GenerateUserAccessTokenResponse
     */
    public function generateUserAccessTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->extraInfo) {
            @$query['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->foreignId) {
            @$query['ForeignId'] = $request->foreignId;
        }

        if (null !== $request->nick) {
            @$query['Nick'] = $request->nick;
        }

        if (null !== $request->telephone) {
            @$query['Telephone'] = $request->telephone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateUserAccessToken',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateUserAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成用户免登Token.
     *
     * @param request - GenerateUserAccessTokenRequest
     *
     * @returns GenerateUserAccessTokenResponse
     *
     * @param GenerateUserAccessTokenRequest $request
     *
     * @return GenerateUserAccessTokenResponse
     */
    public function generateUserAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUserAccessTokenWithOptions($request, $runtime);
    }

    /**
     * 获取业务空间信息.
     *
     * @param request - GetAgentInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentInfoResponse
     *
     * @param GetAgentInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAgentInfoResponse
     */
    public function getAgentInfoWithOptions($request, $runtime)
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
            'action' => 'GetAgentInfo',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取业务空间信息.
     *
     * @param request - GetAgentInfoRequest
     *
     * @returns GetAgentInfoResponse
     *
     * @param GetAgentInfoRequest $request
     *
     * @return GetAgentInfoResponse
     */
    public function getAgentInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentInfoWithOptions($request, $runtime);
    }

    /**
     * 获取异步函数执行结果接口.
     *
     * @param request - GetAsyncResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncResultResponse
     *
     * @param GetAsyncResultRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAsyncResultResponse
     */
    public function getAsyncResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAsyncResult',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAsyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取异步函数执行结果接口.
     *
     * @param request - GetAsyncResultRequest
     *
     * @returns GetAsyncResultResponse
     *
     * @param GetAsyncResultRequest $request
     *
     * @return GetAsyncResultResponse
     */
    public function getAsyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncResultWithOptions($request, $runtime);
    }

    /**
     * 查询机器人接待人次和对话轮次
     *
     * @param request - GetBotSessionDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBotSessionDataResponse
     *
     * @param GetBotSessionDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBotSessionDataResponse
     */
    public function getBotSessionDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->robotInstanceId) {
            @$query['RobotInstanceId'] = $request->robotInstanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBotSessionData',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBotSessionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询机器人接待人次和对话轮次
     *
     * @param request - GetBotSessionDataRequest
     *
     * @returns GetBotSessionDataResponse
     *
     * @param GetBotSessionDataRequest $request
     *
     * @return GetBotSessionDataResponse
     */
    public function getBotSessionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBotSessionDataWithOptions($request, $runtime);
    }

    /**
     * 查询机器人发布进度.
     *
     * @param request - GetInstancePublishTaskStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstancePublishTaskStateResponse
     *
     * @param GetInstancePublishTaskStateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetInstancePublishTaskStateResponse
     */
    public function getInstancePublishTaskStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstancePublishTaskState',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstancePublishTaskStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询机器人发布进度.
     *
     * @param request - GetInstancePublishTaskStateRequest
     *
     * @returns GetInstancePublishTaskStateResponse
     *
     * @param GetInstancePublishTaskStateRequest $request
     *
     * @return GetInstancePublishTaskStateResponse
     */
    public function getInstancePublishTaskState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstancePublishTaskStateWithOptions($request, $runtime);
    }

    /**
     * 查询发布进度.
     *
     * @param request - GetPublishTaskStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPublishTaskStateResponse
     *
     * @param GetPublishTaskStateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPublishTaskStateResponse
     */
    public function getPublishTaskStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPublishTaskState',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPublishTaskStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询发布进度.
     *
     * @param request - GetPublishTaskStateRequest
     *
     * @returns GetPublishTaskStateResponse
     *
     * @param GetPublishTaskStateRequest $request
     *
     * @return GetPublishTaskStateResponse
     */
    public function getPublishTaskState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublishTaskStateWithOptions($request, $runtime);
    }

    /**
     * 初始化im连接信息.
     *
     * @param request - InitIMConnectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitIMConnectResponse
     *
     * @param InitIMConnectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return InitIMConnectResponse
     */
    public function initIMConnectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        if (null !== $request->userAccessToken) {
            @$query['UserAccessToken'] = $request->userAccessToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitIMConnect',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitIMConnectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 初始化im连接信息.
     *
     * @param request - InitIMConnectRequest
     *
     * @returns InitIMConnectResponse
     *
     * @param InitIMConnectRequest $request
     *
     * @return InitIMConnectResponse
     */
    public function initIMConnect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initIMConnectWithOptions($request, $runtime);
    }

    /**
     * 机器人-绑定类目.
     *
     * @param request - LinkInstanceCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LinkInstanceCategoryResponse
     *
     * @param LinkInstanceCategoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return LinkInstanceCategoryResponse
     */
    public function linkInstanceCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->abilityType) {
            @$query['AbilityType'] = $request->abilityType;
        }

        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->categoryIds) {
            @$body['CategoryIds'] = $request->categoryIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LinkInstanceCategory',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LinkInstanceCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机器人-绑定类目.
     *
     * @param request - LinkInstanceCategoryRequest
     *
     * @returns LinkInstanceCategoryResponse
     *
     * @param LinkInstanceCategoryRequest $request
     *
     * @return LinkInstanceCategoryResponse
     */
    public function linkInstanceCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->linkInstanceCategoryWithOptions($request, $runtime);
    }

    /**
     * 获取业务空间列表.
     *
     * @param request - ListAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentResponse
     *
     * @param ListAgentRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListAgentResponse
     */
    public function listAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentName) {
            @$query['AgentName'] = $request->agentName;
        }

        if (null !== $request->goodsCodes) {
            @$query['GoodsCodes'] = $request->goodsCodes;
        }

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
            'action' => 'ListAgent',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取业务空间列表.
     *
     * @param request - ListAgentRequest
     *
     * @returns ListAgentResponse
     *
     * @param ListAgentRequest $request
     *
     * @return ListAgentResponse
     */
    public function listAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentWithOptions($request, $runtime);
    }

    /**
     * 类目列表.
     *
     * @param request - ListCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCategoryResponse
     *
     * @param ListCategoryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCategoryResponse
     */
    public function listCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->knowledgeType) {
            @$body['KnowledgeType'] = $request->knowledgeType;
        }

        if (null !== $request->parentCategoryId) {
            @$body['ParentCategoryId'] = $request->parentCategoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCategory',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 类目列表.
     *
     * @param request - ListCategoryRequest
     *
     * @returns ListCategoryResponse
     *
     * @param ListCategoryRequest $request
     *
     * @return ListCategoryResponse
     */
    public function listCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCategoryWithOptions($request, $runtime);
    }

    /**
     * 查询FAQ关联问列表.
     *
     * @param request - ListConnQuestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConnQuestionResponse
     *
     * @param ListConnQuestionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListConnQuestionResponse
     */
    public function listConnQuestionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->knowledgeId) {
            @$body['KnowledgeId'] = $request->knowledgeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListConnQuestion',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConnQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询FAQ关联问列表.
     *
     * @param request - ListConnQuestionRequest
     *
     * @returns ListConnQuestionResponse
     *
     * @param ListConnQuestionRequest $request
     *
     * @return ListConnQuestionResponse
     */
    public function listConnQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnQuestionWithOptions($request, $runtime);
    }

    /**
     * 实体-列表.
     *
     * @param request - ListDSEntityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDSEntityResponse
     *
     * @param ListDSEntityRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListDSEntityResponse
     */
    public function listDSEntityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

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
            'action' => 'ListDSEntity',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDSEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实体-列表.
     *
     * @param request - ListDSEntityRequest
     *
     * @returns ListDSEntityResponse
     *
     * @param ListDSEntityRequest $request
     *
     * @return ListDSEntityResponse
     */
    public function listDSEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDSEntityWithOptions($request, $runtime);
    }

    /**
     * 实体成员-列表.
     *
     * @param request - ListDSEntityValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDSEntityValueResponse
     *
     * @param ListDSEntityValueRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDSEntityValueResponse
     */
    public function listDSEntityValueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $body = [];
        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        if (null !== $request->entityValueId) {
            @$body['EntityValueId'] = $request->entityValueId;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDSEntityValue',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDSEntityValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实体成员-列表.
     *
     * @param request - ListDSEntityValueRequest
     *
     * @returns ListDSEntityValueResponse
     *
     * @param ListDSEntityValueRequest $request
     *
     * @return ListDSEntityValueResponse
     */
    public function listDSEntityValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDSEntityValueWithOptions($request, $runtime);
    }

    /**
     * 机器人-修改.
     *
     * @param request - ListInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceResponse
     *
     * @param ListInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->robotType) {
            @$query['RobotType'] = $request->robotType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstance',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机器人-修改.
     *
     * @param request - ListInstanceRequest
     *
     * @returns ListInstanceResponse
     *
     * @param ListInstanceRequest $request
     *
     * @return ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceWithOptions($request, $runtime);
    }

    /**
     * 意图-列表.
     *
     * @param request - ListIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntentResponse
     *
     * @param ListIntentRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListIntentResponse
     */
    public function listIntentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentName) {
            @$query['IntentName'] = $request->intentName;
        }

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
            'action' => 'ListIntent',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 意图-列表.
     *
     * @param request - ListIntentRequest
     *
     * @returns ListIntentResponse
     *
     * @param ListIntentRequest $request
     *
     * @return ListIntentResponse
     */
    public function listIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntentWithOptions($request, $runtime);
    }

    /**
     * 意图-LGF-列表.
     *
     * @param request - ListLgfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLgfResponse
     *
     * @param ListLgfRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListLgfResponse
     */
    public function listLgfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        if (null !== $request->lgfText) {
            @$query['LgfText'] = $request->lgfText;
        }

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
            'action' => 'ListLgf',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLgfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 意图-LGF-列表.
     *
     * @param request - ListLgfRequest
     *
     * @returns ListLgfResponse
     *
     * @param ListLgfRequest $request
     *
     * @return ListLgfResponse
     */
    public function listLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLgfWithOptions($request, $runtime);
    }

    /**
     * 获取业务空间下可集成的SaaS信息列表.
     *
     * @param request - ListSaasInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSaasInfoResponse
     *
     * @param ListSaasInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSaasInfoResponse
     */
    public function listSaasInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->saasGroupCodes) {
            @$query['SaasGroupCodes'] = $request->saasGroupCodes;
        }

        if (null !== $request->saasName) {
            @$query['SaasName'] = $request->saasName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSaasInfo',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSaasInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取业务空间下可集成的SaaS信息列表.
     *
     * @param request - ListSaasInfoRequest
     *
     * @returns ListSaasInfoResponse
     *
     * @param ListSaasInfoRequest $request
     *
     * @return ListSaasInfoResponse
     */
    public function listSaasInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSaasInfoWithOptions($request, $runtime);
    }

    /**
     * 获取业务空间下可集成的权限组信息.
     *
     * @param request - ListSaasPermissionGroupInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSaasPermissionGroupInfosResponse
     *
     * @param ListSaasPermissionGroupInfosRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListSaasPermissionGroupInfosResponse
     */
    public function listSaasPermissionGroupInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSaasPermissionGroupInfos',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSaasPermissionGroupInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取业务空间下可集成的权限组信息.
     *
     * @param request - ListSaasPermissionGroupInfosRequest
     *
     * @returns ListSaasPermissionGroupInfosResponse
     *
     * @param ListSaasPermissionGroupInfosRequest $request
     *
     * @return ListSaasPermissionGroupInfosResponse
     */
    public function listSaasPermissionGroupInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSaasPermissionGroupInfosWithOptions($request, $runtime);
    }

    /**
     * FAQ相似问列表.
     *
     * @param request - ListSimQuestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSimQuestionResponse
     *
     * @param ListSimQuestionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListSimQuestionResponse
     */
    public function listSimQuestionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->knowledgeId) {
            @$body['KnowledgeId'] = $request->knowledgeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSimQuestion',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSimQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * FAQ相似问列表.
     *
     * @param request - ListSimQuestionRequest
     *
     * @returns ListSimQuestionResponse
     *
     * @param ListSimQuestionRequest $request
     *
     * @return ListSimQuestionResponse
     */
    public function listSimQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSimQuestionWithOptions($request, $runtime);
    }

    /**
     * FAQ答案列表.
     *
     * @param request - ListSolutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSolutionResponse
     *
     * @param ListSolutionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSolutionResponse
     */
    public function listSolutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->knowledgeId) {
            @$body['KnowledgeId'] = $request->knowledgeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSolution',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * FAQ答案列表.
     *
     * @param request - ListSolutionRequest
     *
     * @returns ListSolutionResponse
     *
     * @param ListSolutionRequest $request
     *
     * @return ListSolutionResponse
     */
    public function listSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSolutionWithOptions($request, $runtime);
    }

    /**
     * 标签查询.
     *
     * @param request - ListTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResponse
     *
     * @param ListTagRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListTagResponse
     */
    public function listTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tagName) {
            @$body['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTag',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 标签查询.
     *
     * @param request - ListTagRequest
     *
     * @returns ListTagResponse
     *
     * @param ListTagRequest $request
     *
     * @return ListTagResponse
     */
    public function listTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagWithOptions($request, $runtime);
    }

    /**
     * 标签组查询.
     *
     * @param request - ListTagGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagGroupResponse
     *
     * @param ListTagGroupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListTagGroupResponse
     */
    public function listTagGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTagGroup',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 标签组查询.
     *
     * @param request - ListTagGroupRequest
     *
     * @returns ListTagGroupResponse
     *
     * @param ListTagGroupRequest $request
     *
     * @return ListTagGroupResponse
     */
    public function listTagGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagGroupWithOptions($request, $runtime);
    }

    /**
     * Tongyi对话明细查询接口.
     *
     * @param request - ListTongyiChatHistorysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTongyiChatHistorysResponse
     *
     * @param ListTongyiChatHistorysRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListTongyiChatHistorysResponse
     */
    public function listTongyiChatHistorysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->robotInstanceId) {
            @$query['RobotInstanceId'] = $request->robotInstanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTongyiChatHistorys',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTongyiChatHistorysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tongyi对话明细查询接口.
     *
     * @param request - ListTongyiChatHistorysRequest
     *
     * @returns ListTongyiChatHistorysResponse
     *
     * @param ListTongyiChatHistorysRequest $request
     *
     * @return ListTongyiChatHistorysResponse
     */
    public function listTongyiChatHistorys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTongyiChatHistorysWithOptions($request, $runtime);
    }

    /**
     * 查询通义晓蜜的单个会话对话记录.
     *
     * @param request - ListTongyiConversationLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTongyiConversationLogsResponse
     *
     * @param ListTongyiConversationLogsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListTongyiConversationLogsResponse
     */
    public function listTongyiConversationLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->robotInstanceId) {
            @$query['RobotInstanceId'] = $request->robotInstanceId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTongyiConversationLogs',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTongyiConversationLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询通义晓蜜的单个会话对话记录.
     *
     * @param request - ListTongyiConversationLogsRequest
     *
     * @returns ListTongyiConversationLogsResponse
     *
     * @param ListTongyiConversationLogsRequest $request
     *
     * @return ListTongyiConversationLogsResponse
     */
    public function listTongyiConversationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTongyiConversationLogsWithOptions($request, $runtime);
    }

    /**
     * 话术-列表.
     *
     * @param request - ListUserSayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserSayResponse
     *
     * @param ListUserSayRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListUserSayResponse
     */
    public function listUserSayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

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
            'action' => 'ListUserSay',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserSayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 话术-列表.
     *
     * @param request - ListUserSayRequest
     *
     * @returns ListUserSayResponse
     *
     * @param ListUserSayRequest $request
     *
     * @return ListUserSayResponse
     */
    public function listUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserSayWithOptions($request, $runtime);
    }

    /**
     * 统一NLU接口.
     *
     * @param request - NluRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns NluResponse
     *
     * @param NluRequest     $request
     * @param RuntimeOptions $runtime
     *
     * @return NluResponse
     */
    public function nluWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
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
            'action' => 'Nlu',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return NluResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 统一NLU接口.
     *
     * @param request - NluRequest
     *
     * @returns NluResponse
     *
     * @param NluRequest $request
     *
     * @return NluResponse
     */
    public function nlu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->nluWithOptions($request, $runtime);
    }

    /**
     * 视角-列表.
     *
     * @param request - QueryPerspectivesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPerspectivesResponse
     *
     * @param QueryPerspectivesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPerspectivesResponse
     */
    public function queryPerspectivesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPerspectives',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPerspectivesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视角-列表.
     *
     * @param request - QueryPerspectivesRequest
     *
     * @returns QueryPerspectivesResponse
     *
     * @param QueryPerspectivesRequest $request
     *
     * @return QueryPerspectivesResponse
     */
    public function queryPerspectives($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPerspectivesWithOptions($request, $runtime);
    }

    /**
     * 文档重试.
     *
     * @param request - RetryDocRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryDocResponse
     *
     * @param RetryDocRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return RetryDocResponse
     */
    public function retryDocWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->knowledgeId) {
            @$query['KnowledgeId'] = $request->knowledgeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RetryDoc',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetryDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档重试.
     *
     * @param request - RetryDocRequest
     *
     * @returns RetryDocResponse
     *
     * @param RetryDocRequest $request
     *
     * @return RetryDocResponse
     */
    public function retryDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryDocWithOptions($request, $runtime);
    }

    /**
     * 文档搜索.
     *
     * @param tmpReq - SearchDocRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchDocResponse
     *
     * @param SearchDocRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return SearchDocResponse
     */
    public function searchDocWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchDocShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categoryIds) {
            $request->categoryIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categoryIds, 'CategoryIds', 'json');
        }

        if (null !== $tmpReq->tagIds) {
            $request->tagIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagIds, 'TagIds', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->categoryIdsShrink) {
            @$query['CategoryIds'] = $request->categoryIdsShrink;
        }

        if (null !== $request->createTimeBegin) {
            @$query['CreateTimeBegin'] = $request->createTimeBegin;
        }

        if (null !== $request->createTimeEnd) {
            @$query['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createUserName) {
            @$query['CreateUserName'] = $request->createUserName;
        }

        if (null !== $request->endTimeBegin) {
            @$query['EndTimeBegin'] = $request->endTimeBegin;
        }

        if (null !== $request->endTimeEnd) {
            @$query['EndTimeEnd'] = $request->endTimeEnd;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->modifyTimeBegin) {
            @$query['ModifyTimeBegin'] = $request->modifyTimeBegin;
        }

        if (null !== $request->modifyTimeEnd) {
            @$query['ModifyTimeEnd'] = $request->modifyTimeEnd;
        }

        if (null !== $request->modifyUserName) {
            @$query['ModifyUserName'] = $request->modifyUserName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->processStatus) {
            @$query['ProcessStatus'] = $request->processStatus;
        }

        if (null !== $request->searchScope) {
            @$query['SearchScope'] = $request->searchScope;
        }

        if (null !== $request->startTimeBegin) {
            @$query['StartTimeBegin'] = $request->startTimeBegin;
        }

        if (null !== $request->startTimeEnd) {
            @$query['StartTimeEnd'] = $request->startTimeEnd;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagIdsShrink) {
            @$query['TagIds'] = $request->tagIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchDoc',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档搜索.
     *
     * @param request - SearchDocRequest
     *
     * @returns SearchDocResponse
     *
     * @param SearchDocRequest $request
     *
     * @return SearchDocResponse
     */
    public function searchDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchDocWithOptions($request, $runtime);
    }

    /**
     * 知识搜索.
     *
     * @param tmpReq - SearchFaqRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchFaqResponse
     *
     * @param SearchFaqRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return SearchFaqResponse
     */
    public function searchFaqWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchFaqShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categoryIds) {
            $request->categoryIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categoryIds, 'CategoryIds', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->categoryIdsShrink) {
            @$body['CategoryIds'] = $request->categoryIdsShrink;
        }

        if (null !== $request->createTimeBegin) {
            @$body['CreateTimeBegin'] = $request->createTimeBegin;
        }

        if (null !== $request->createTimeEnd) {
            @$body['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createUserName) {
            @$body['CreateUserName'] = $request->createUserName;
        }

        if (null !== $request->endTimeBegin) {
            @$body['EndTimeBegin'] = $request->endTimeBegin;
        }

        if (null !== $request->endTimeEnd) {
            @$body['EndTimeEnd'] = $request->endTimeEnd;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->modifyTimeBegin) {
            @$body['ModifyTimeBegin'] = $request->modifyTimeBegin;
        }

        if (null !== $request->modifyTimeEnd) {
            @$body['ModifyTimeEnd'] = $request->modifyTimeEnd;
        }

        if (null !== $request->modifyUserName) {
            @$body['ModifyUserName'] = $request->modifyUserName;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchScope) {
            @$body['SearchScope'] = $request->searchScope;
        }

        if (null !== $request->startTimeBegin) {
            @$body['StartTimeBegin'] = $request->startTimeBegin;
        }

        if (null !== $request->startTimeEnd) {
            @$body['StartTimeEnd'] = $request->startTimeEnd;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchFaq',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchFaqResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 知识搜索.
     *
     * @param request - SearchFaqRequest
     *
     * @returns SearchFaqResponse
     *
     * @param SearchFaqRequest $request
     *
     * @return SearchFaqResponse
     */
    public function searchFaq($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchFaqWithOptions($request, $runtime);
    }

    /**
     * 大模型问答调试信息.
     *
     * @param request - TongyiChatDebugInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TongyiChatDebugInfoResponse
     *
     * @param TongyiChatDebugInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TongyiChatDebugInfoResponse
     */
    public function tongyiChatDebugInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TongyiChatDebugInfo',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TongyiChatDebugInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 大模型问答调试信息.
     *
     * @param request - TongyiChatDebugInfoRequest
     *
     * @returns TongyiChatDebugInfoResponse
     *
     * @param TongyiChatDebugInfoRequest $request
     *
     * @return TongyiChatDebugInfoResponse
     */
    public function tongyiChatDebugInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tongyiChatDebugInfoWithOptions($request, $runtime);
    }

    /**
     * 编辑类目.
     *
     * @param request - UpdateCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCategoryResponse
     *
     * @param UpdateCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCategoryResponse
     */
    public function updateCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->bizCode) {
            @$body['BizCode'] = $request->bizCode;
        }

        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCategory',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑类目.
     *
     * @param request - UpdateCategoryRequest
     *
     * @returns UpdateCategoryResponse
     *
     * @param UpdateCategoryRequest $request
     *
     * @return UpdateCategoryResponse
     */
    public function updateCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCategoryWithOptions($request, $runtime);
    }

    /**
     * 更新FAQ关联问.
     *
     * @param request - UpdateConnQuestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConnQuestionResponse
     *
     * @param UpdateConnQuestionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateConnQuestionResponse
     */
    public function updateConnQuestionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->connQuestionId) {
            @$body['ConnQuestionId'] = $request->connQuestionId;
        }

        if (null !== $request->outlineId) {
            @$body['OutlineId'] = $request->outlineId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConnQuestion',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConnQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新FAQ关联问.
     *
     * @param request - UpdateConnQuestionRequest
     *
     * @returns UpdateConnQuestionResponse
     *
     * @param UpdateConnQuestionRequest $request
     *
     * @return UpdateConnQuestionResponse
     */
    public function updateConnQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnQuestionWithOptions($request, $runtime);
    }

    /**
     * 实体-更新.
     *
     * @param request - UpdateDSEntityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDSEntityResponse
     *
     * @param UpdateDSEntityRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateDSEntityResponse
     */
    public function updateDSEntityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->entityName) {
            @$query['EntityName'] = $request->entityName;
        }

        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDSEntity',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDSEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实体-更新.
     *
     * @param request - UpdateDSEntityRequest
     *
     * @returns UpdateDSEntityResponse
     *
     * @param UpdateDSEntityRequest $request
     *
     * @return UpdateDSEntityResponse
     */
    public function updateDSEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDSEntityWithOptions($request, $runtime);
    }

    /**
     * 实体成员-更新.
     *
     * @param tmpReq - UpdateDSEntityValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDSEntityValueResponse
     *
     * @param UpdateDSEntityValueRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDSEntityValueResponse
     */
    public function updateDSEntityValueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDSEntityValueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->synonyms) {
            $request->synonymsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->synonyms, 'Synonyms', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->entityValueId) {
            @$query['EntityValueId'] = $request->entityValueId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->synonymsShrink) {
            @$body['Synonyms'] = $request->synonymsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDSEntityValue',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDSEntityValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实体成员-更新.
     *
     * @param request - UpdateDSEntityValueRequest
     *
     * @returns UpdateDSEntityValueResponse
     *
     * @param UpdateDSEntityValueRequest $request
     *
     * @return UpdateDSEntityValueResponse
     */
    public function updateDSEntityValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDSEntityValueWithOptions($request, $runtime);
    }

    /**
     * 文档变更.
     *
     * @param tmpReq - UpdateDocRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDocResponse
     *
     * @param UpdateDocRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateDocResponse
     */
    public function updateDocWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDocShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->docMetadata) {
            $request->docMetadataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docMetadata, 'DocMetadata', 'json');
        }

        if (null !== $tmpReq->tagIds) {
            $request->tagIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagIds, 'TagIds', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->docMetadataShrink) {
            @$query['DocMetadata'] = $request->docMetadataShrink;
        }

        if (null !== $request->docName) {
            @$query['DocName'] = $request->docName;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->knowledgeId) {
            @$query['KnowledgeId'] = $request->knowledgeId;
        }

        if (null !== $request->meta) {
            @$query['Meta'] = $request->meta;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->tagIdsShrink) {
            @$query['TagIds'] = $request->tagIdsShrink;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDoc',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档变更.
     *
     * @param request - UpdateDocRequest
     *
     * @returns UpdateDocResponse
     *
     * @param UpdateDocRequest $request
     *
     * @return UpdateDocResponse
     */
    public function updateDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDocWithOptions($request, $runtime);
    }

    /**
     * 更新FAQ.
     *
     * @param tmpReq - UpdateFaqRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFaqResponse
     *
     * @param UpdateFaqRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateFaqResponse
     */
    public function updateFaqWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateFaqShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tagIdList) {
            $request->tagIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagIdList, 'TagIdList', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->knowledgeId) {
            @$body['KnowledgeId'] = $request->knowledgeId;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->tagIdListShrink) {
            @$body['TagIdList'] = $request->tagIdListShrink;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFaq',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFaqResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新FAQ.
     *
     * @param request - UpdateFaqRequest
     *
     * @returns UpdateFaqResponse
     *
     * @param UpdateFaqRequest $request
     *
     * @return UpdateFaqResponse
     */
    public function updateFaq($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFaqWithOptions($request, $runtime);
    }

    /**
     * 机器人-修改.
     *
     * @param request - UpdateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->introduction) {
            @$query['Introduction'] = $request->introduction;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机器人-修改.
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceWithOptions($request, $runtime);
    }

    /**
     * 意图-更新.
     *
     * @param tmpReq - UpdateIntentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIntentResponse
     *
     * @param UpdateIntentRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateIntentResponse
     */
    public function updateIntentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateIntentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->intentDefinition) {
            $request->intentDefinitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->intentDefinition, 'IntentDefinition', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intentDefinitionShrink) {
            @$query['IntentDefinition'] = $request->intentDefinitionShrink;
        }

        if (null !== $request->intentId) {
            @$query['IntentId'] = $request->intentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIntent',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 意图-更新.
     *
     * @param request - UpdateIntentRequest
     *
     * @returns UpdateIntentResponse
     *
     * @param UpdateIntentRequest $request
     *
     * @return UpdateIntentResponse
     */
    public function updateIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIntentWithOptions($request, $runtime);
    }

    /**
     * 意图-LGF-更新.
     *
     * @param tmpReq - UpdateLgfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLgfResponse
     *
     * @param UpdateLgfRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateLgfResponse
     */
    public function updateLgfWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateLgfShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->lgfDefinition) {
            $request->lgfDefinitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->lgfDefinition, 'LgfDefinition', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lgfDefinitionShrink) {
            @$query['LgfDefinition'] = $request->lgfDefinitionShrink;
        }

        if (null !== $request->lgfId) {
            @$query['LgfId'] = $request->lgfId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLgf',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLgfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 意图-LGF-更新.
     *
     * @param request - UpdateLgfRequest
     *
     * @returns UpdateLgfResponse
     *
     * @param UpdateLgfRequest $request
     *
     * @return UpdateLgfResponse
     */
    public function updateLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLgfWithOptions($request, $runtime);
    }

    /**
     * 视角-修改.
     *
     * @param request - UpdatePerspectiveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePerspectiveResponse
     *
     * @param UpdatePerspectiveRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdatePerspectiveResponse
     */
    public function updatePerspectiveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->perspectiveId) {
            @$query['PerspectiveId'] = $request->perspectiveId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePerspective',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePerspectiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视角-修改.
     *
     * @param request - UpdatePerspectiveRequest
     *
     * @returns UpdatePerspectiveResponse
     *
     * @param UpdatePerspectiveRequest $request
     *
     * @return UpdatePerspectiveResponse
     */
    public function updatePerspective($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePerspectiveWithOptions($request, $runtime);
    }

    /**
     * 更新FAQ相似问.
     *
     * @param request - UpdateSimQuestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSimQuestionResponse
     *
     * @param UpdateSimQuestionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSimQuestionResponse
     */
    public function updateSimQuestionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->simQuestionId) {
            @$body['SimQuestionId'] = $request->simQuestionId;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSimQuestion',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSimQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新FAQ相似问.
     *
     * @param request - UpdateSimQuestionRequest
     *
     * @returns UpdateSimQuestionResponse
     *
     * @param UpdateSimQuestionRequest $request
     *
     * @return UpdateSimQuestionResponse
     */
    public function updateSimQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSimQuestionWithOptions($request, $runtime);
    }

    /**
     * 更新FAQ答案.
     *
     * @param tmpReq - UpdateSolutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSolutionResponse
     *
     * @param UpdateSolutionRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateSolutionResponse
     */
    public function updateSolutionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSolutionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tagIdList) {
            $request->tagIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagIdList, 'TagIdList', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->contentType) {
            @$body['ContentType'] = $request->contentType;
        }

        if (null !== $request->perspectiveCodes) {
            @$body['PerspectiveCodes'] = $request->perspectiveCodes;
        }

        if (null !== $request->solutionId) {
            @$body['SolutionId'] = $request->solutionId;
        }

        if (null !== $request->tagIdListShrink) {
            @$body['TagIdList'] = $request->tagIdListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSolution',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新FAQ答案.
     *
     * @param request - UpdateSolutionRequest
     *
     * @returns UpdateSolutionResponse
     *
     * @param UpdateSolutionRequest $request
     *
     * @return UpdateSolutionResponse
     */
    public function updateSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSolutionWithOptions($request, $runtime);
    }

    /**
     * 标签编辑.
     *
     * @param request - UpdateTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTagResponse
     *
     * @param UpdateTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateTagResponse
     */
    public function updateTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tagName) {
            @$body['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTag',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 标签编辑.
     *
     * @param request - UpdateTagRequest
     *
     * @returns UpdateTagResponse
     *
     * @param UpdateTagRequest $request
     *
     * @return UpdateTagResponse
     */
    public function updateTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTagWithOptions($request, $runtime);
    }

    /**
     * 标签组编辑.
     *
     * @param request - UpdateTagGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTagGroupResponse
     *
     * @param UpdateTagGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTagGroupResponse
     */
    public function updateTagGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTagGroup',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 标签组编辑.
     *
     * @param request - UpdateTagGroupRequest
     *
     * @returns UpdateTagGroupResponse
     *
     * @param UpdateTagGroupRequest $request
     *
     * @return UpdateTagGroupResponse
     */
    public function updateTagGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTagGroupWithOptions($request, $runtime);
    }

    /**
     * 意图-话术-更新.
     *
     * @param tmpReq - UpdateUserSayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserSayResponse
     *
     * @param UpdateUserSayRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateUserSayResponse
     */
    public function updateUserSayWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateUserSayShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userSayDefinition) {
            $request->userSayDefinitionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userSayDefinition, 'UserSayDefinition', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userSayDefinitionShrink) {
            @$query['UserSayDefinition'] = $request->userSayDefinitionShrink;
        }

        if (null !== $request->userSayId) {
            @$query['UserSayId'] = $request->userSayId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUserSay',
            'version' => '2022-04-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserSayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 意图-话术-更新.
     *
     * @param request - UpdateUserSayRequest
     *
     * @returns UpdateUserSayResponse
     *
     * @param UpdateUserSayRequest $request
     *
     * @return UpdateUserSayResponse
     */
    public function updateUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserSayWithOptions($request, $runtime);
    }
}
