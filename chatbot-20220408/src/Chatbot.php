<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ApplyForStreamAccessTokenRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ApplyForStreamAccessTokenResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\AssociateRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\AssociateResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\AssociateShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\BeginSessionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\BeginSessionResponse;
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
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDSEntityRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDSEntityResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDSEntityValueRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDSEntityValueResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDSEntityValueShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateFaqRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateFaqResponse;
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
use AlibabaCloud\SDK\Chatbot\V20220408\Models\FeedbackRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\FeedbackResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GenerateUserAccessTokenRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GenerateUserAccessTokenResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetAgentInfoRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetAgentInfoResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetAsyncResultRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\GetAsyncResultResponse;
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
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListTongyiChatHistorysRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListTongyiChatHistorysResponse;
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
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateConnQuestionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateConnQuestionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDocRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDocResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDSEntityRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDSEntityResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDSEntityValueRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDSEntityValueResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDSEntityValueShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateFaqRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateFaqResponse;
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
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateUserSayRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateUserSayResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateUserSayShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 申请流式网关AccessToken
     *  *
     * @param ApplyForStreamAccessTokenRequest $request ApplyForStreamAccessTokenRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyForStreamAccessTokenResponse ApplyForStreamAccessTokenResponse
     */
    public function applyForStreamAccessTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyForStreamAccessToken',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyForStreamAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 申请流式网关AccessToken
     *  *
     * @param ApplyForStreamAccessTokenRequest $request ApplyForStreamAccessTokenRequest
     *
     * @return ApplyForStreamAccessTokenResponse ApplyForStreamAccessTokenResponse
     */
    public function applyForStreamAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyForStreamAccessTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 会话-联想API
     *  *
     * @param AssociateRequest $tmpReq  AssociateRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateResponse AssociateResponse
     */
    public function associateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AssociateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->perspective)) {
            $request->perspectiveShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->perspective, 'Perspective', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->perspectiveShrink)) {
            $query['Perspective'] = $request->perspectiveShrink;
        }
        if (!Utils::isUnset($request->recommendNum)) {
            $query['RecommendNum'] = $request->recommendNum;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->utterance)) {
            $query['Utterance'] = $request->utterance;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Associate',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 会话-联想API
     *  *
     * @param AssociateRequest $request AssociateRequest
     *
     * @return AssociateResponse AssociateResponse
     */
    public function associate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateWithOptions($request, $runtime);
    }

    /**
     * @summary 获取欢迎语
     *  *
     * @param BeginSessionRequest $request BeginSessionRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return BeginSessionResponse BeginSessionResponse
     */
    public function beginSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BeginSession',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BeginSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取欢迎语
     *  *
     * @param BeginSessionRequest $request BeginSessionRequest
     *
     * @return BeginSessionResponse BeginSessionResponse
     */
    public function beginSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->beginSessionWithOptions($request, $runtime);
    }

    /**
     * @summary 取消机器人发布
     *  *
     * @param CancelInstancePublishTaskRequest $request CancelInstancePublishTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelInstancePublishTaskResponse CancelInstancePublishTaskResponse
     */
    public function cancelInstancePublishTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelInstancePublishTask',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelInstancePublishTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消机器人发布
     *  *
     * @param CancelInstancePublishTaskRequest $request CancelInstancePublishTaskRequest
     *
     * @return CancelInstancePublishTaskResponse CancelInstancePublishTaskResponse
     */
    public function cancelInstancePublishTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelInstancePublishTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 取消发布任务
     *  *
     * @param CancelPublishTaskRequest $request CancelPublishTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelPublishTaskResponse CancelPublishTaskResponse
     */
    public function cancelPublishTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelPublishTask',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelPublishTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消发布任务
     *  *
     * @param CancelPublishTaskRequest $request CancelPublishTaskRequest
     *
     * @return CancelPublishTaskResponse CancelPublishTaskResponse
     */
    public function cancelPublishTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPublishTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 会话API
     *  *
     * @param ChatRequest    $tmpReq  ChatRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ChatResponse ChatResponse
     */
    public function chatWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ChatShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->perspective)) {
            $request->perspectiveShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->perspective, 'Perspective', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentName)) {
            $query['IntentName'] = $request->intentName;
        }
        if (!Utils::isUnset($request->knowledgeId)) {
            $query['KnowledgeId'] = $request->knowledgeId;
        }
        if (!Utils::isUnset($request->perspectiveShrink)) {
            $query['Perspective'] = $request->perspectiveShrink;
        }
        if (!Utils::isUnset($request->sandBox)) {
            $query['SandBox'] = $request->sandBox;
        }
        if (!Utils::isUnset($request->senderId)) {
            $query['SenderId'] = $request->senderId;
        }
        if (!Utils::isUnset($request->senderNick)) {
            $query['SenderNick'] = $request->senderNick;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->utterance)) {
            $query['Utterance'] = $request->utterance;
        }
        if (!Utils::isUnset($request->vendorParam)) {
            $query['VendorParam'] = $request->vendorParam;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Chat',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 会话API
     *  *
     * @param ChatRequest $request ChatRequest
     *
     * @return ChatResponse ChatResponse
     */
    public function chat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatWithOptions($request, $runtime);
    }

    /**
     * @summary 继续机器人发布
     *  *
     * @param ContinueInstancePublishTaskRequest $request ContinueInstancePublishTaskRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ContinueInstancePublishTaskResponse ContinueInstancePublishTaskResponse
     */
    public function continueInstancePublishTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ContinueInstancePublishTask',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ContinueInstancePublishTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 继续机器人发布
     *  *
     * @param ContinueInstancePublishTaskRequest $request ContinueInstancePublishTaskRequest
     *
     * @return ContinueInstancePublishTaskResponse ContinueInstancePublishTaskResponse
     */
    public function continueInstancePublishTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueInstancePublishTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 新增类目
     *  *
     * @param CreateCategoryRequest $request CreateCategoryRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCategoryResponse CreateCategoryResponse
     */
    public function createCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->bizCode)) {
            $body['BizCode'] = $request->bizCode;
        }
        if (!Utils::isUnset($request->knowledgeType)) {
            $body['KnowledgeType'] = $request->knowledgeType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentCategoryId)) {
            $body['ParentCategoryId'] = $request->parentCategoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCategory',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增类目
     *  *
     * @param CreateCategoryRequest $request CreateCategoryRequest
     *
     * @return CreateCategoryResponse CreateCategoryResponse
     */
    public function createCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCategoryWithOptions($request, $runtime);
    }

    /**
     * @summary 新建FAQ关联问
     *  *
     * @param CreateConnQuestionRequest $request CreateConnQuestionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConnQuestionResponse CreateConnQuestionResponse
     */
    public function createConnQuestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->connQuestionId)) {
            $body['ConnQuestionId'] = $request->connQuestionId;
        }
        if (!Utils::isUnset($request->knowledgeId)) {
            $body['KnowledgeId'] = $request->knowledgeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConnQuestion',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConnQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建FAQ关联问
     *  *
     * @param CreateConnQuestionRequest $request CreateConnQuestionRequest
     *
     * @return CreateConnQuestionResponse CreateConnQuestionResponse
     */
    public function createConnQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConnQuestionWithOptions($request, $runtime);
    }

    /**
     * @summary 实体-创建
     *  *
     * @param CreateDSEntityRequest $request CreateDSEntityRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDSEntityResponse CreateDSEntityResponse
     */
    public function createDSEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->entityName)) {
            $query['EntityName'] = $request->entityName;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDSEntity',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDSEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实体-创建
     *  *
     * @param CreateDSEntityRequest $request CreateDSEntityRequest
     *
     * @return CreateDSEntityResponse CreateDSEntityResponse
     */
    public function createDSEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDSEntityWithOptions($request, $runtime);
    }

    /**
     * @summary 实体成员-创建
     *  *
     * @param CreateDSEntityValueRequest $tmpReq  CreateDSEntityValueRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDSEntityValueResponse CreateDSEntityValueResponse
     */
    public function createDSEntityValueWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDSEntityValueShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->synonyms)) {
            $request->synonymsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->synonyms, 'Synonyms', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->synonymsShrink)) {
            $body['Synonyms'] = $request->synonymsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDSEntityValue',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDSEntityValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实体成员-创建
     *  *
     * @param CreateDSEntityValueRequest $request CreateDSEntityValueRequest
     *
     * @return CreateDSEntityValueResponse CreateDSEntityValueResponse
     */
    public function createDSEntityValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDSEntityValueWithOptions($request, $runtime);
    }

    /**
     * @summary 创建文档
     *  *
     * @param CreateDocRequest $request CreateDocRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDocResponse CreateDocResponse
     */
    public function createDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->meta)) {
            $query['Meta'] = $request->meta;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDoc',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建文档
     *  *
     * @param CreateDocRequest $request CreateDocRequest
     *
     * @return CreateDocResponse CreateDocResponse
     */
    public function createDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDocWithOptions($request, $runtime);
    }

    /**
     * @summary 新建FAQ
     *  *
     * @param CreateFaqRequest $request CreateFaqRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFaqResponse CreateFaqResponse
     */
    public function createFaqWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->solutionContent)) {
            $body['SolutionContent'] = $request->solutionContent;
        }
        if (!Utils::isUnset($request->solutionType)) {
            $body['SolutionType'] = $request->solutionType;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFaq',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFaqResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建FAQ
     *  *
     * @param CreateFaqRequest $request CreateFaqRequest
     *
     * @return CreateFaqResponse CreateFaqResponse
     */
    public function createFaq($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFaqWithOptions($request, $runtime);
    }

    /**
     * @summary 机器人-创建
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->introduction)) {
            $query['Introduction'] = $request->introduction;
        }
        if (!Utils::isUnset($request->languageCode)) {
            $query['LanguageCode'] = $request->languageCode;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->robotType)) {
            $query['RobotType'] = $request->robotType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2022-04-08',
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
     * @summary 机器人-创建
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建机器人发布任务
     *  *
     * @param CreateInstancePublishTaskRequest $request CreateInstancePublishTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstancePublishTaskResponse CreateInstancePublishTaskResponse
     */
    public function createInstancePublishTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstancePublishTask',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstancePublishTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建机器人发布任务
     *  *
     * @param CreateInstancePublishTaskRequest $request CreateInstancePublishTaskRequest
     *
     * @return CreateInstancePublishTaskResponse CreateInstancePublishTaskResponse
     */
    public function createInstancePublishTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstancePublishTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 意图-创建
     *  *
     * @param CreateIntentRequest $tmpReq  CreateIntentRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIntentResponse CreateIntentResponse
     */
    public function createIntentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateIntentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->intentDefinition)) {
            $request->intentDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->intentDefinition, 'IntentDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentDefinitionShrink)) {
            $query['IntentDefinition'] = $request->intentDefinitionShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIntent',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图-创建
     *  *
     * @param CreateIntentRequest $request CreateIntentRequest
     *
     * @return CreateIntentResponse CreateIntentResponse
     */
    public function createIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntentWithOptions($request, $runtime);
    }

    /**
     * @summary 意图-LGF-创建
     *  *
     * @param CreateLgfRequest $tmpReq  CreateLgfRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLgfResponse CreateLgfResponse
     */
    public function createLgfWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLgfShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->lgfDefinition)) {
            $request->lgfDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lgfDefinition, 'LgfDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lgfDefinitionShrink)) {
            $query['LgfDefinition'] = $request->lgfDefinitionShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLgf',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLgfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图-LGF-创建
     *  *
     * @param CreateLgfRequest $request CreateLgfRequest
     *
     * @return CreateLgfResponse CreateLgfResponse
     */
    public function createLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLgfWithOptions($request, $runtime);
    }

    /**
     * @summary 视角-创建
     *  *
     * @param CreatePerspectiveRequest $request CreatePerspectiveRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePerspectiveResponse CreatePerspectiveResponse
     */
    public function createPerspectiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
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
            'action'      => 'CreatePerspective',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePerspectiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视角-创建
     *  *
     * @param CreatePerspectiveRequest $request CreatePerspectiveRequest
     *
     * @return CreatePerspectiveResponse CreatePerspectiveResponse
     */
    public function createPerspective($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPerspectiveWithOptions($request, $runtime);
    }

    /**
     * @summary 创建发布任务
     *  *
     * @param CreatePublishTaskRequest $tmpReq  CreatePublishTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePublishTaskResponse CreatePublishTaskResponse
     */
    public function createPublishTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePublishTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dataIdList)) {
            $request->dataIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dataIdList, 'DataIdList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->dataIdListShrink)) {
            $query['DataIdList'] = $request->dataIdListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePublishTask',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePublishTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建发布任务
     *  *
     * @param CreatePublishTaskRequest $request CreatePublishTaskRequest
     *
     * @return CreatePublishTaskResponse CreatePublishTaskResponse
     */
    public function createPublishTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublishTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 新建FAQ相似问
     *  *
     * @param CreateSimQuestionRequest $request CreateSimQuestionRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSimQuestionResponse CreateSimQuestionResponse
     */
    public function createSimQuestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->knowledgeId)) {
            $body['KnowledgeId'] = $request->knowledgeId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSimQuestion',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSimQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建FAQ相似问
     *  *
     * @param CreateSimQuestionRequest $request CreateSimQuestionRequest
     *
     * @return CreateSimQuestionResponse CreateSimQuestionResponse
     */
    public function createSimQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSimQuestionWithOptions($request, $runtime);
    }

    /**
     * @summary 新建FAQ答案
     *  *
     * @param CreateSolutionRequest $request CreateSolutionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSolutionResponse CreateSolutionResponse
     */
    public function createSolutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentType)) {
            $query['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->knowledgeId)) {
            $query['KnowledgeId'] = $request->knowledgeId;
        }
        if (!Utils::isUnset($request->perspectiveCodes)) {
            $query['PerspectiveCodes'] = $request->perspectiveCodes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSolution',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建FAQ答案
     *  *
     * @param CreateSolutionRequest $request CreateSolutionRequest
     *
     * @return CreateSolutionResponse CreateSolutionResponse
     */
    public function createSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSolutionWithOptions($request, $runtime);
    }

    /**
     * @summary 意图-话术-创建
     *  *
     * @param CreateUserSayRequest $tmpReq  CreateUserSayRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserSayResponse CreateUserSayResponse
     */
    public function createUserSayWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateUserSayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userSayDefinition)) {
            $request->userSayDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userSayDefinition, 'UserSayDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userSayDefinitionShrink)) {
            $query['UserSayDefinition'] = $request->userSayDefinitionShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserSay',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserSayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图-话术-创建
     *  *
     * @param CreateUserSayRequest $request CreateUserSayRequest
     *
     * @return CreateUserSayResponse CreateUserSayResponse
     */
    public function createUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserSayWithOptions($request, $runtime);
    }

    /**
     * @summary 删除类目
     *  *
     * @param DeleteCategoryRequest $request DeleteCategoryRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCategoryResponse DeleteCategoryResponse
     */
    public function deleteCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCategory',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除类目
     *  *
     * @param DeleteCategoryRequest $request DeleteCategoryRequest
     *
     * @return DeleteCategoryResponse DeleteCategoryResponse
     */
    public function deleteCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCategoryWithOptions($request, $runtime);
    }

    /**
     * @summary 删除FAQ关联问
     *  *
     * @param DeleteConnQuestionRequest $request DeleteConnQuestionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteConnQuestionResponse DeleteConnQuestionResponse
     */
    public function deleteConnQuestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->outlineId)) {
            $body['OutlineId'] = $request->outlineId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteConnQuestion',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConnQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除FAQ关联问
     *  *
     * @param DeleteConnQuestionRequest $request DeleteConnQuestionRequest
     *
     * @return DeleteConnQuestionResponse DeleteConnQuestionResponse
     */
    public function deleteConnQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConnQuestionWithOptions($request, $runtime);
    }

    /**
     * @summary 实体-删除
     *  *
     * @param DeleteDSEntityRequest $request DeleteDSEntityRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDSEntityResponse DeleteDSEntityResponse
     */
    public function deleteDSEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDSEntity',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDSEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实体-删除
     *  *
     * @param DeleteDSEntityRequest $request DeleteDSEntityRequest
     *
     * @return DeleteDSEntityResponse DeleteDSEntityResponse
     */
    public function deleteDSEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDSEntityWithOptions($request, $runtime);
    }

    /**
     * @summary 实体成员-删除
     *  *
     * @param DeleteDSEntityValueRequest $request DeleteDSEntityValueRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDSEntityValueResponse DeleteDSEntityValueResponse
     */
    public function deleteDSEntityValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->entityValueId)) {
            $query['EntityValueId'] = $request->entityValueId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDSEntityValue',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDSEntityValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实体成员-删除
     *  *
     * @param DeleteDSEntityValueRequest $request DeleteDSEntityValueRequest
     *
     * @return DeleteDSEntityValueResponse DeleteDSEntityValueResponse
     */
    public function deleteDSEntityValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDSEntityValueWithOptions($request, $runtime);
    }

    /**
     * @summary 文档删除
     *  *
     * @param DeleteDocRequest $request DeleteDocRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDocResponse DeleteDocResponse
     */
    public function deleteDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->knowledgeId)) {
            $query['KnowledgeId'] = $request->knowledgeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDoc',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档删除
     *  *
     * @param DeleteDocRequest $request DeleteDocRequest
     *
     * @return DeleteDocResponse DeleteDocResponse
     */
    public function deleteDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocWithOptions($request, $runtime);
    }

    /**
     * @summary 删除FAQ，如果是已发布的知识，删除之后，变成已删除未发布，需要发布才能真正删除
     *  *
     * @param DeleteFaqRequest $request DeleteFaqRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFaqResponse DeleteFaqResponse
     */
    public function deleteFaqWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->knowledgeId)) {
            $body['KnowledgeId'] = $request->knowledgeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFaq',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFaqResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除FAQ，如果是已发布的知识，删除之后，变成已删除未发布，需要发布才能真正删除
     *  *
     * @param DeleteFaqRequest $request DeleteFaqRequest
     *
     * @return DeleteFaqResponse DeleteFaqResponse
     */
    public function deleteFaq($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaqWithOptions($request, $runtime);
    }

    /**
     * @summary 机器人-删除
     *  *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2022-04-08',
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
     * @summary 机器人-删除
     *  *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 意图-删除
     *  *
     * @param DeleteIntentRequest $request DeleteIntentRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIntentResponse DeleteIntentResponse
     */
    public function deleteIntentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIntent',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图-删除
     *  *
     * @param DeleteIntentRequest $request DeleteIntentRequest
     *
     * @return DeleteIntentResponse DeleteIntentResponse
     */
    public function deleteIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIntentWithOptions($request, $runtime);
    }

    /**
     * @summary 意图-LGF-删除
     *  *
     * @param DeleteLgfRequest $request DeleteLgfRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLgfResponse DeleteLgfResponse
     */
    public function deleteLgfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->lgfId)) {
            $query['LgfId'] = $request->lgfId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLgf',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLgfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图-LGF-删除
     *  *
     * @param DeleteLgfRequest $request DeleteLgfRequest
     *
     * @return DeleteLgfResponse DeleteLgfResponse
     */
    public function deleteLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLgfWithOptions($request, $runtime);
    }

    /**
     * @summary 视角-删除
     *  *
     * @param DeletePerspectiveRequest $request DeletePerspectiveRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePerspectiveResponse DeletePerspectiveResponse
     */
    public function deletePerspectiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->perspectiveId)) {
            $query['PerspectiveId'] = $request->perspectiveId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePerspective',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePerspectiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视角-删除
     *  *
     * @param DeletePerspectiveRequest $request DeletePerspectiveRequest
     *
     * @return DeletePerspectiveResponse DeletePerspectiveResponse
     */
    public function deletePerspective($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePerspectiveWithOptions($request, $runtime);
    }

    /**
     * @summary 删除FAQ相似问
     *  *
     * @param DeleteSimQuestionRequest $request DeleteSimQuestionRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSimQuestionResponse DeleteSimQuestionResponse
     */
    public function deleteSimQuestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->simQuestionId)) {
            $body['SimQuestionId'] = $request->simQuestionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSimQuestion',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSimQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除FAQ相似问
     *  *
     * @param DeleteSimQuestionRequest $request DeleteSimQuestionRequest
     *
     * @return DeleteSimQuestionResponse DeleteSimQuestionResponse
     */
    public function deleteSimQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSimQuestionWithOptions($request, $runtime);
    }

    /**
     * @summary 删除FAQ答案
     *  *
     * @param DeleteSolutionRequest $request DeleteSolutionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSolutionResponse DeleteSolutionResponse
     */
    public function deleteSolutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->solutionId)) {
            $body['SolutionId'] = $request->solutionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSolution',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除FAQ答案
     *  *
     * @param DeleteSolutionRequest $request DeleteSolutionRequest
     *
     * @return DeleteSolutionResponse DeleteSolutionResponse
     */
    public function deleteSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSolutionWithOptions($request, $runtime);
    }

    /**
     * @summary 意图-用户话术-删除
     *  *
     * @param DeleteUserSayRequest $request DeleteUserSayRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserSayResponse DeleteUserSayResponse
     */
    public function deleteUserSayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->userSayId)) {
            $query['UserSayId'] = $request->userSayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserSay',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserSayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图-用户话术-删除
     *  *
     * @param DeleteUserSayRequest $request DeleteUserSayRequest
     *
     * @return DeleteUserSayResponse DeleteUserSayResponse
     */
    public function deleteUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserSayWithOptions($request, $runtime);
    }

    /**
     * @summary 查看单个类目信息
     *  *
     * @param DescribeCategoryRequest $request DescribeCategoryRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCategoryResponse DescribeCategoryResponse
     */
    public function describeCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCategory',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看单个类目信息
     *  *
     * @param DescribeCategoryRequest $request DescribeCategoryRequest
     *
     * @return DescribeCategoryResponse DescribeCategoryResponse
     */
    public function describeCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCategoryWithOptions($request, $runtime);
    }

    /**
     * @summary 实体-详情
     *  *
     * @param DescribeDSEntityRequest $request DescribeDSEntityRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDSEntityResponse DescribeDSEntityResponse
     */
    public function describeDSEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDSEntity',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDSEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实体-详情
     *  *
     * @param DescribeDSEntityRequest $request DescribeDSEntityRequest
     *
     * @return DescribeDSEntityResponse DescribeDSEntityResponse
     */
    public function describeDSEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDSEntityWithOptions($request, $runtime);
    }

    /**
     * @summary 文档详情
     *  *
     * @param DescribeDocRequest $request DescribeDocRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDocResponse DescribeDocResponse
     */
    public function describeDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->knowledgeId)) {
            $query['KnowledgeId'] = $request->knowledgeId;
        }
        if (!Utils::isUnset($request->showDetail)) {
            $query['ShowDetail'] = $request->showDetail;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDoc',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档详情
     *  *
     * @param DescribeDocRequest $request DescribeDocRequest
     *
     * @return DescribeDocResponse DescribeDocResponse
     */
    public function describeDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDocWithOptions($request, $runtime);
    }

    /**
     * @summary 知识详情
     *  *
     * @param DescribeFaqRequest $request DescribeFaqRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFaqResponse DescribeFaqResponse
     */
    public function describeFaqWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->knowledgeId)) {
            $body['KnowledgeId'] = $request->knowledgeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFaq',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFaqResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 知识详情
     *  *
     * @param DescribeFaqRequest $request DescribeFaqRequest
     *
     * @return DescribeFaqResponse DescribeFaqResponse
     */
    public function describeFaq($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaqWithOptions($request, $runtime);
    }

    /**
     * @summary 机器人-详情
     *  *
     * @param DescribeInstanceRequest $request DescribeInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机器人-详情
     *  *
     * @param DescribeInstanceRequest $request DescribeInstanceRequest
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 意图-详情
     *  *
     * @param DescribeIntentRequest $request DescribeIntentRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIntentResponse DescribeIntentResponse
     */
    public function describeIntentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->intentId)) {
            $body['IntentId'] = $request->intentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeIntent',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图-详情
     *  *
     * @param DescribeIntentRequest $request DescribeIntentRequest
     *
     * @return DescribeIntentResponse DescribeIntentResponse
     */
    public function describeIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIntentWithOptions($request, $runtime);
    }

    /**
     * @summary 视角-详情
     *  *
     * @param DescribePerspectiveRequest $request DescribePerspectiveRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePerspectiveResponse DescribePerspectiveResponse
     */
    public function describePerspectiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->perspectiveId)) {
            $query['PerspectiveId'] = $request->perspectiveId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePerspective',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePerspectiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视角-详情
     *  *
     * @param DescribePerspectiveRequest $request DescribePerspectiveRequest
     *
     * @return DescribePerspectiveResponse DescribePerspectiveResponse
     */
    public function describePerspective($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePerspectiveWithOptions($request, $runtime);
    }

    /**
     * @summary 问答点赞、点踩API
     *  *
     * @param FeedbackRequest $request FeedbackRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return FeedbackResponse FeedbackResponse
     */
    public function feedbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->feedback)) {
            $query['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->feedbackContent)) {
            $query['FeedbackContent'] = $request->feedbackContent;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->messageId)) {
            $query['MessageId'] = $request->messageId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Feedback',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 问答点赞、点踩API
     *  *
     * @param FeedbackRequest $request FeedbackRequest
     *
     * @return FeedbackResponse FeedbackResponse
     */
    public function feedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->feedbackWithOptions($request, $runtime);
    }

    /**
     * @summary 生成用户免登Token
     *  *
     * @param GenerateUserAccessTokenRequest $request GenerateUserAccessTokenRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateUserAccessTokenResponse GenerateUserAccessTokenResponse
     */
    public function generateUserAccessTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $query['ExtraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->foreignId)) {
            $query['ForeignId'] = $request->foreignId;
        }
        if (!Utils::isUnset($request->nick)) {
            $query['Nick'] = $request->nick;
        }
        if (!Utils::isUnset($request->telephone)) {
            $query['Telephone'] = $request->telephone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateUserAccessToken',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateUserAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 生成用户免登Token
     *  *
     * @param GenerateUserAccessTokenRequest $request GenerateUserAccessTokenRequest
     *
     * @return GenerateUserAccessTokenResponse GenerateUserAccessTokenResponse
     */
    public function generateUserAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUserAccessTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 获取业务空间信息
     *  *
     * @param GetAgentInfoRequest $request GetAgentInfoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentInfoResponse GetAgentInfoResponse
     */
    public function getAgentInfoWithOptions($request, $runtime)
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
            'action'      => 'GetAgentInfo',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAgentInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取业务空间信息
     *  *
     * @param GetAgentInfoRequest $request GetAgentInfoRequest
     *
     * @return GetAgentInfoResponse GetAgentInfoResponse
     */
    public function getAgentInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取异步函数执行结果接口
     *  *
     * @param GetAsyncResultRequest $request GetAsyncResultRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAsyncResultResponse GetAsyncResultResponse
     */
    public function getAsyncResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncResult',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取异步函数执行结果接口
     *  *
     * @param GetAsyncResultRequest $request GetAsyncResultRequest
     *
     * @return GetAsyncResultResponse GetAsyncResultResponse
     */
    public function getAsyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncResultWithOptions($request, $runtime);
    }

    /**
     * @summary 查询机器人发布进度
     *  *
     * @param GetInstancePublishTaskStateRequest $request GetInstancePublishTaskStateRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstancePublishTaskStateResponse GetInstancePublishTaskStateResponse
     */
    public function getInstancePublishTaskStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstancePublishTaskState',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstancePublishTaskStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询机器人发布进度
     *  *
     * @param GetInstancePublishTaskStateRequest $request GetInstancePublishTaskStateRequest
     *
     * @return GetInstancePublishTaskStateResponse GetInstancePublishTaskStateResponse
     */
    public function getInstancePublishTaskState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstancePublishTaskStateWithOptions($request, $runtime);
    }

    /**
     * @summary 查询发布进度
     *  *
     * @param GetPublishTaskStateRequest $request GetPublishTaskStateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPublishTaskStateResponse GetPublishTaskStateResponse
     */
    public function getPublishTaskStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPublishTaskState',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPublishTaskStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询发布进度
     *  *
     * @param GetPublishTaskStateRequest $request GetPublishTaskStateRequest
     *
     * @return GetPublishTaskStateResponse GetPublishTaskStateResponse
     */
    public function getPublishTaskState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublishTaskStateWithOptions($request, $runtime);
    }

    /**
     * @summary 初始化im连接信息
     *  *
     * @param InitIMConnectRequest $request InitIMConnectRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return InitIMConnectResponse InitIMConnectResponse
     */
    public function initIMConnectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->userAccessToken)) {
            $query['UserAccessToken'] = $request->userAccessToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InitIMConnect',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitIMConnectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 初始化im连接信息
     *  *
     * @param InitIMConnectRequest $request InitIMConnectRequest
     *
     * @return InitIMConnectResponse InitIMConnectResponse
     */
    public function initIMConnect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initIMConnectWithOptions($request, $runtime);
    }

    /**
     * @summary 机器人-绑定类目
     *  *
     * @param LinkInstanceCategoryRequest $request LinkInstanceCategoryRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return LinkInstanceCategoryResponse LinkInstanceCategoryResponse
     */
    public function linkInstanceCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->categoryIds)) {
            $body['CategoryIds'] = $request->categoryIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LinkInstanceCategory',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LinkInstanceCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机器人-绑定类目
     *  *
     * @param LinkInstanceCategoryRequest $request LinkInstanceCategoryRequest
     *
     * @return LinkInstanceCategoryResponse LinkInstanceCategoryResponse
     */
    public function linkInstanceCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->linkInstanceCategoryWithOptions($request, $runtime);
    }

    /**
     * @summary 获取业务空间列表
     *  *
     * @param ListAgentRequest $request ListAgentRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAgentResponse ListAgentResponse
     */
    public function listAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentName)) {
            $query['AgentName'] = $request->agentName;
        }
        if (!Utils::isUnset($request->goodsCodes)) {
            $query['GoodsCodes'] = $request->goodsCodes;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAgent',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取业务空间列表
     *  *
     * @param ListAgentRequest $request ListAgentRequest
     *
     * @return ListAgentResponse ListAgentResponse
     */
    public function listAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentWithOptions($request, $runtime);
    }

    /**
     * @summary 类目列表
     *  *
     * @param ListCategoryRequest $request ListCategoryRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCategoryResponse ListCategoryResponse
     */
    public function listCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->knowledgeType)) {
            $body['KnowledgeType'] = $request->knowledgeType;
        }
        if (!Utils::isUnset($request->parentCategoryId)) {
            $body['ParentCategoryId'] = $request->parentCategoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListCategory',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 类目列表
     *  *
     * @param ListCategoryRequest $request ListCategoryRequest
     *
     * @return ListCategoryResponse ListCategoryResponse
     */
    public function listCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCategoryWithOptions($request, $runtime);
    }

    /**
     * @summary 查询FAQ关联问列表
     *  *
     * @param ListConnQuestionRequest $request ListConnQuestionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConnQuestionResponse ListConnQuestionResponse
     */
    public function listConnQuestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->knowledgeId)) {
            $body['KnowledgeId'] = $request->knowledgeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListConnQuestion',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConnQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询FAQ关联问列表
     *  *
     * @param ListConnQuestionRequest $request ListConnQuestionRequest
     *
     * @return ListConnQuestionResponse ListConnQuestionResponse
     */
    public function listConnQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnQuestionWithOptions($request, $runtime);
    }

    /**
     * @summary 实体-列表
     *  *
     * @param ListDSEntityRequest $request ListDSEntityRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDSEntityResponse ListDSEntityResponse
     */
    public function listDSEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDSEntity',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDSEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实体-列表
     *  *
     * @param ListDSEntityRequest $request ListDSEntityRequest
     *
     * @return ListDSEntityResponse ListDSEntityResponse
     */
    public function listDSEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDSEntityWithOptions($request, $runtime);
    }

    /**
     * @summary 实体成员-列表
     *  *
     * @param ListDSEntityValueRequest $request ListDSEntityValueRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDSEntityValueResponse ListDSEntityValueResponse
     */
    public function listDSEntityValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->entityId)) {
            $body['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->entityValueId)) {
            $body['EntityValueId'] = $request->entityValueId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDSEntityValue',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDSEntityValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实体成员-列表
     *  *
     * @param ListDSEntityValueRequest $request ListDSEntityValueRequest
     *
     * @return ListDSEntityValueResponse ListDSEntityValueResponse
     */
    public function listDSEntityValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDSEntityValueWithOptions($request, $runtime);
    }

    /**
     * @summary 机器人-修改
     *  *
     * @param ListInstanceRequest $request ListInstanceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceResponse ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->robotType)) {
            $query['RobotType'] = $request->robotType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstance',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机器人-修改
     *  *
     * @param ListInstanceRequest $request ListInstanceRequest
     *
     * @return ListInstanceResponse ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 意图-列表
     *  *
     * @param ListIntentRequest $request ListIntentRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIntentResponse ListIntentResponse
     */
    public function listIntentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentName)) {
            $query['IntentName'] = $request->intentName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIntent',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图-列表
     *  *
     * @param ListIntentRequest $request ListIntentRequest
     *
     * @return ListIntentResponse ListIntentResponse
     */
    public function listIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntentWithOptions($request, $runtime);
    }

    /**
     * @summary 意图-LGF-列表
     *  *
     * @param ListLgfRequest $request ListLgfRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLgfResponse ListLgfResponse
     */
    public function listLgfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->lgfText)) {
            $query['LgfText'] = $request->lgfText;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLgf',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLgfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图-LGF-列表
     *  *
     * @param ListLgfRequest $request ListLgfRequest
     *
     * @return ListLgfResponse ListLgfResponse
     */
    public function listLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLgfWithOptions($request, $runtime);
    }

    /**
     * @summary 获取业务空间下可集成的SaaS信息列表
     *  *
     * @param ListSaasInfoRequest $request ListSaasInfoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSaasInfoResponse ListSaasInfoResponse
     */
    public function listSaasInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->saasGroupCodes)) {
            $query['SaasGroupCodes'] = $request->saasGroupCodes;
        }
        if (!Utils::isUnset($request->saasName)) {
            $query['SaasName'] = $request->saasName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSaasInfo',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSaasInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取业务空间下可集成的SaaS信息列表
     *  *
     * @param ListSaasInfoRequest $request ListSaasInfoRequest
     *
     * @return ListSaasInfoResponse ListSaasInfoResponse
     */
    public function listSaasInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSaasInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取业务空间下可集成的权限组信息
     *  *
     * @param ListSaasPermissionGroupInfosRequest $request ListSaasPermissionGroupInfosRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSaasPermissionGroupInfosResponse ListSaasPermissionGroupInfosResponse
     */
    public function listSaasPermissionGroupInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSaasPermissionGroupInfos',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSaasPermissionGroupInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取业务空间下可集成的权限组信息
     *  *
     * @param ListSaasPermissionGroupInfosRequest $request ListSaasPermissionGroupInfosRequest
     *
     * @return ListSaasPermissionGroupInfosResponse ListSaasPermissionGroupInfosResponse
     */
    public function listSaasPermissionGroupInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSaasPermissionGroupInfosWithOptions($request, $runtime);
    }

    /**
     * @summary FAQ相似问列表
     *  *
     * @param ListSimQuestionRequest $request ListSimQuestionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSimQuestionResponse ListSimQuestionResponse
     */
    public function listSimQuestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->knowledgeId)) {
            $body['KnowledgeId'] = $request->knowledgeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSimQuestion',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSimQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary FAQ相似问列表
     *  *
     * @param ListSimQuestionRequest $request ListSimQuestionRequest
     *
     * @return ListSimQuestionResponse ListSimQuestionResponse
     */
    public function listSimQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSimQuestionWithOptions($request, $runtime);
    }

    /**
     * @summary FAQ答案列表
     *  *
     * @param ListSolutionRequest $request ListSolutionRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSolutionResponse ListSolutionResponse
     */
    public function listSolutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->knowledgeId)) {
            $body['KnowledgeId'] = $request->knowledgeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSolution',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary FAQ答案列表
     *  *
     * @param ListSolutionRequest $request ListSolutionRequest
     *
     * @return ListSolutionResponse ListSolutionResponse
     */
    public function listSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSolutionWithOptions($request, $runtime);
    }

    /**
     * @summary Tongyi对话明细查询接口
     *  *
     * @param ListTongyiChatHistorysRequest $request ListTongyiChatHistorysRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTongyiChatHistorysResponse ListTongyiChatHistorysResponse
     */
    public function listTongyiChatHistorysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->robotInstanceId)) {
            $query['RobotInstanceId'] = $request->robotInstanceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTongyiChatHistorys',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTongyiChatHistorysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Tongyi对话明细查询接口
     *  *
     * @param ListTongyiChatHistorysRequest $request ListTongyiChatHistorysRequest
     *
     * @return ListTongyiChatHistorysResponse ListTongyiChatHistorysResponse
     */
    public function listTongyiChatHistorys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTongyiChatHistorysWithOptions($request, $runtime);
    }

    /**
     * @summary 话术-列表
     *  *
     * @param ListUserSayRequest $request ListUserSayRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserSayResponse ListUserSayResponse
     */
    public function listUserSayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserSay',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserSayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 话术-列表
     *  *
     * @param ListUserSayRequest $request ListUserSayRequest
     *
     * @return ListUserSayResponse ListUserSayResponse
     */
    public function listUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserSayWithOptions($request, $runtime);
    }

    /**
     * @summary 统一NLU接口
     *  *
     * @param NluRequest     $request NluRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return NluResponse NluResponse
     */
    public function nluWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
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
            'action'      => 'Nlu',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return NluResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 统一NLU接口
     *  *
     * @param NluRequest $request NluRequest
     *
     * @return NluResponse NluResponse
     */
    public function nlu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->nluWithOptions($request, $runtime);
    }

    /**
     * @summary 视角-列表
     *  *
     * @param QueryPerspectivesRequest $request QueryPerspectivesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPerspectivesResponse QueryPerspectivesResponse
     */
    public function queryPerspectivesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPerspectives',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPerspectivesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视角-列表
     *  *
     * @param QueryPerspectivesRequest $request QueryPerspectivesRequest
     *
     * @return QueryPerspectivesResponse QueryPerspectivesResponse
     */
    public function queryPerspectives($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPerspectivesWithOptions($request, $runtime);
    }

    /**
     * @summary 文档重试
     *  *
     * @param RetryDocRequest $request RetryDocRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return RetryDocResponse RetryDocResponse
     */
    public function retryDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->knowledgeId)) {
            $query['KnowledgeId'] = $request->knowledgeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetryDoc',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档重试
     *  *
     * @param RetryDocRequest $request RetryDocRequest
     *
     * @return RetryDocResponse RetryDocResponse
     */
    public function retryDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryDocWithOptions($request, $runtime);
    }

    /**
     * @summary 文档搜索
     *  *
     * @param SearchDocRequest $tmpReq  SearchDocRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchDocResponse SearchDocResponse
     */
    public function searchDocWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchDocShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->categoryIds)) {
            $request->categoryIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->categoryIds, 'CategoryIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->categoryIdsShrink)) {
            $query['CategoryIds'] = $request->categoryIdsShrink;
        }
        if (!Utils::isUnset($request->createTimeBegin)) {
            $query['CreateTimeBegin'] = $request->createTimeBegin;
        }
        if (!Utils::isUnset($request->createTimeEnd)) {
            $query['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createUserName)) {
            $query['CreateUserName'] = $request->createUserName;
        }
        if (!Utils::isUnset($request->endTimeBegin)) {
            $query['EndTimeBegin'] = $request->endTimeBegin;
        }
        if (!Utils::isUnset($request->endTimeEnd)) {
            $query['EndTimeEnd'] = $request->endTimeEnd;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->modifyTimeBegin)) {
            $query['ModifyTimeBegin'] = $request->modifyTimeBegin;
        }
        if (!Utils::isUnset($request->modifyTimeEnd)) {
            $query['ModifyTimeEnd'] = $request->modifyTimeEnd;
        }
        if (!Utils::isUnset($request->modifyUserName)) {
            $query['ModifyUserName'] = $request->modifyUserName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->processStatus)) {
            $query['ProcessStatus'] = $request->processStatus;
        }
        if (!Utils::isUnset($request->searchScope)) {
            $query['SearchScope'] = $request->searchScope;
        }
        if (!Utils::isUnset($request->startTimeBegin)) {
            $query['StartTimeBegin'] = $request->startTimeBegin;
        }
        if (!Utils::isUnset($request->startTimeEnd)) {
            $query['StartTimeEnd'] = $request->startTimeEnd;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchDoc',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档搜索
     *  *
     * @param SearchDocRequest $request SearchDocRequest
     *
     * @return SearchDocResponse SearchDocResponse
     */
    public function searchDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchDocWithOptions($request, $runtime);
    }

    /**
     * @summary 知识搜索
     *  *
     * @param SearchFaqRequest $tmpReq  SearchFaqRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchFaqResponse SearchFaqResponse
     */
    public function searchFaqWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchFaqShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->categoryIds)) {
            $request->categoryIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->categoryIds, 'CategoryIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->categoryIdsShrink)) {
            $body['CategoryIds'] = $request->categoryIdsShrink;
        }
        if (!Utils::isUnset($request->createTimeBegin)) {
            $body['CreateTimeBegin'] = $request->createTimeBegin;
        }
        if (!Utils::isUnset($request->createTimeEnd)) {
            $body['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createUserName)) {
            $body['CreateUserName'] = $request->createUserName;
        }
        if (!Utils::isUnset($request->endTimeBegin)) {
            $body['EndTimeBegin'] = $request->endTimeBegin;
        }
        if (!Utils::isUnset($request->endTimeEnd)) {
            $body['EndTimeEnd'] = $request->endTimeEnd;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->modifyTimeBegin)) {
            $body['ModifyTimeBegin'] = $request->modifyTimeBegin;
        }
        if (!Utils::isUnset($request->modifyTimeEnd)) {
            $body['ModifyTimeEnd'] = $request->modifyTimeEnd;
        }
        if (!Utils::isUnset($request->modifyUserName)) {
            $body['ModifyUserName'] = $request->modifyUserName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchScope)) {
            $body['SearchScope'] = $request->searchScope;
        }
        if (!Utils::isUnset($request->startTimeBegin)) {
            $body['StartTimeBegin'] = $request->startTimeBegin;
        }
        if (!Utils::isUnset($request->startTimeEnd)) {
            $body['StartTimeEnd'] = $request->startTimeEnd;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchFaq',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchFaqResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 知识搜索
     *  *
     * @param SearchFaqRequest $request SearchFaqRequest
     *
     * @return SearchFaqResponse SearchFaqResponse
     */
    public function searchFaq($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchFaqWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑类目
     *  *
     * @param UpdateCategoryRequest $request UpdateCategoryRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCategoryResponse UpdateCategoryResponse
     */
    public function updateCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->bizCode)) {
            $body['BizCode'] = $request->bizCode;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCategory',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑类目
     *  *
     * @param UpdateCategoryRequest $request UpdateCategoryRequest
     *
     * @return UpdateCategoryResponse UpdateCategoryResponse
     */
    public function updateCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCategoryWithOptions($request, $runtime);
    }

    /**
     * @summary 更新FAQ关联问
     *  *
     * @param UpdateConnQuestionRequest $request UpdateConnQuestionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateConnQuestionResponse UpdateConnQuestionResponse
     */
    public function updateConnQuestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->connQuestionId)) {
            $body['ConnQuestionId'] = $request->connQuestionId;
        }
        if (!Utils::isUnset($request->outlineId)) {
            $body['OutlineId'] = $request->outlineId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConnQuestion',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConnQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新FAQ关联问
     *  *
     * @param UpdateConnQuestionRequest $request UpdateConnQuestionRequest
     *
     * @return UpdateConnQuestionResponse UpdateConnQuestionResponse
     */
    public function updateConnQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnQuestionWithOptions($request, $runtime);
    }

    /**
     * @summary 实体-更新
     *  *
     * @param UpdateDSEntityRequest $request UpdateDSEntityRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDSEntityResponse UpdateDSEntityResponse
     */
    public function updateDSEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->entityName)) {
            $query['EntityName'] = $request->entityName;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDSEntity',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDSEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实体-更新
     *  *
     * @param UpdateDSEntityRequest $request UpdateDSEntityRequest
     *
     * @return UpdateDSEntityResponse UpdateDSEntityResponse
     */
    public function updateDSEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDSEntityWithOptions($request, $runtime);
    }

    /**
     * @summary 实体成员-更新
     *  *
     * @param UpdateDSEntityValueRequest $tmpReq  UpdateDSEntityValueRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDSEntityValueResponse UpdateDSEntityValueResponse
     */
    public function updateDSEntityValueWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDSEntityValueShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->synonyms)) {
            $request->synonymsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->synonyms, 'Synonyms', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->entityValueId)) {
            $query['EntityValueId'] = $request->entityValueId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->synonymsShrink)) {
            $body['Synonyms'] = $request->synonymsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDSEntityValue',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDSEntityValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实体成员-更新
     *  *
     * @param UpdateDSEntityValueRequest $request UpdateDSEntityValueRequest
     *
     * @return UpdateDSEntityValueResponse UpdateDSEntityValueResponse
     */
    public function updateDSEntityValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDSEntityValueWithOptions($request, $runtime);
    }

    /**
     * @summary 文档变更
     *  *
     * @param UpdateDocRequest $request UpdateDocRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDocResponse UpdateDocResponse
     */
    public function updateDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->docName)) {
            $query['DocName'] = $request->docName;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->knowledgeId)) {
            $query['KnowledgeId'] = $request->knowledgeId;
        }
        if (!Utils::isUnset($request->meta)) {
            $query['Meta'] = $request->meta;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDoc',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档变更
     *  *
     * @param UpdateDocRequest $request UpdateDocRequest
     *
     * @return UpdateDocResponse UpdateDocResponse
     */
    public function updateDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDocWithOptions($request, $runtime);
    }

    /**
     * @summary 更新FAQ
     *  *
     * @param UpdateFaqRequest $request UpdateFaqRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFaqResponse UpdateFaqResponse
     */
    public function updateFaqWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->knowledgeId)) {
            $body['KnowledgeId'] = $request->knowledgeId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFaq',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFaqResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新FAQ
     *  *
     * @param UpdateFaqRequest $request UpdateFaqRequest
     *
     * @return UpdateFaqResponse UpdateFaqResponse
     */
    public function updateFaq($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFaqWithOptions($request, $runtime);
    }

    /**
     * @summary 机器人-修改
     *  *
     * @param UpdateInstanceRequest $request UpdateInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->introduction)) {
            $query['Introduction'] = $request->introduction;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstance',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机器人-修改
     *  *
     * @param UpdateInstanceRequest $request UpdateInstanceRequest
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 意图-更新
     *  *
     * @param UpdateIntentRequest $tmpReq  UpdateIntentRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIntentResponse UpdateIntentResponse
     */
    public function updateIntentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateIntentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->intentDefinition)) {
            $request->intentDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->intentDefinition, 'IntentDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentDefinitionShrink)) {
            $query['IntentDefinition'] = $request->intentDefinitionShrink;
        }
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIntent',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIntentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图-更新
     *  *
     * @param UpdateIntentRequest $request UpdateIntentRequest
     *
     * @return UpdateIntentResponse UpdateIntentResponse
     */
    public function updateIntent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIntentWithOptions($request, $runtime);
    }

    /**
     * @summary 意图-LGF-更新
     *  *
     * @param UpdateLgfRequest $tmpReq  UpdateLgfRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLgfResponse UpdateLgfResponse
     */
    public function updateLgfWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLgfShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->lgfDefinition)) {
            $request->lgfDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lgfDefinition, 'LgfDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lgfDefinitionShrink)) {
            $query['LgfDefinition'] = $request->lgfDefinitionShrink;
        }
        if (!Utils::isUnset($request->lgfId)) {
            $query['LgfId'] = $request->lgfId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLgf',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLgfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图-LGF-更新
     *  *
     * @param UpdateLgfRequest $request UpdateLgfRequest
     *
     * @return UpdateLgfResponse UpdateLgfResponse
     */
    public function updateLgf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLgfWithOptions($request, $runtime);
    }

    /**
     * @summary 视角-修改
     *  *
     * @param UpdatePerspectiveRequest $request UpdatePerspectiveRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePerspectiveResponse UpdatePerspectiveResponse
     */
    public function updatePerspectiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->perspectiveId)) {
            $query['PerspectiveId'] = $request->perspectiveId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePerspective',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePerspectiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视角-修改
     *  *
     * @param UpdatePerspectiveRequest $request UpdatePerspectiveRequest
     *
     * @return UpdatePerspectiveResponse UpdatePerspectiveResponse
     */
    public function updatePerspective($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePerspectiveWithOptions($request, $runtime);
    }

    /**
     * @summary 更新FAQ相似问
     *  *
     * @param UpdateSimQuestionRequest $request UpdateSimQuestionRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSimQuestionResponse UpdateSimQuestionResponse
     */
    public function updateSimQuestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->simQuestionId)) {
            $body['SimQuestionId'] = $request->simQuestionId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSimQuestion',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSimQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新FAQ相似问
     *  *
     * @param UpdateSimQuestionRequest $request UpdateSimQuestionRequest
     *
     * @return UpdateSimQuestionResponse UpdateSimQuestionResponse
     */
    public function updateSimQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSimQuestionWithOptions($request, $runtime);
    }

    /**
     * @summary 更新FAQ答案
     *  *
     * @param UpdateSolutionRequest $request UpdateSolutionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSolutionResponse UpdateSolutionResponse
     */
    public function updateSolutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentType)) {
            $body['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->perspectiveCodes)) {
            $body['PerspectiveCodes'] = $request->perspectiveCodes;
        }
        if (!Utils::isUnset($request->solutionId)) {
            $body['SolutionId'] = $request->solutionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSolution',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新FAQ答案
     *  *
     * @param UpdateSolutionRequest $request UpdateSolutionRequest
     *
     * @return UpdateSolutionResponse UpdateSolutionResponse
     */
    public function updateSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSolutionWithOptions($request, $runtime);
    }

    /**
     * @summary 意图-话术-更新
     *  *
     * @param UpdateUserSayRequest $tmpReq  UpdateUserSayRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserSayResponse UpdateUserSayResponse
     */
    public function updateUserSayWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateUserSayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userSayDefinition)) {
            $request->userSayDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userSayDefinition, 'UserSayDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userSayDefinitionShrink)) {
            $query['UserSayDefinition'] = $request->userSayDefinitionShrink;
        }
        if (!Utils::isUnset($request->userSayId)) {
            $query['UserSayId'] = $request->userSayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserSay',
            'version'     => '2022-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserSayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 意图-话术-更新
     *  *
     * @param UpdateUserSayRequest $request UpdateUserSayRequest
     *
     * @return UpdateUserSayResponse UpdateUserSayResponse
     */
    public function updateUserSay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserSayWithOptions($request, $runtime);
    }
}
