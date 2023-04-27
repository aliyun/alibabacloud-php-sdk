<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSimQuestionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSimQuestionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSolutionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSolutionResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListUserSayRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListUserSayResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\QueryPerspectivesRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\QueryPerspectivesResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchFaqRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchFaqResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchFaqShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateConnQuestionRequest;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateConnQuestionResponse;
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
     * @param AssociateRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return AssociateResponse
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
     * @param BeginSessionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BeginSessionResponse
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
     * @param CancelInstancePublishTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CancelInstancePublishTaskResponse
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
     * @param CancelPublishTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelPublishTaskResponse
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
     * @param ChatRequest    $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return ChatResponse
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
     * @param ContinueInstancePublishTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ContinueInstancePublishTaskResponse
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
     * @param CreateCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCategoryResponse
     */
    public function createCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
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
     * @param CreateConnQuestionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateConnQuestionResponse
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
     * @param CreateDSEntityRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDSEntityResponse
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
     * @param CreateDSEntityValueRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDSEntityValueResponse
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
     * @param CreateFaqRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateFaqResponse
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
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
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
     * @param CreateInstancePublishTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateInstancePublishTaskResponse
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
     * @param CreateIntentRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateIntentResponse
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
     * @param CreateLgfRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateLgfResponse
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
     * @param CreatePerspectiveRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePerspectiveResponse
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
     * @param CreatePublishTaskRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePublishTaskResponse
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
     * @param CreateSimQuestionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSimQuestionResponse
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
     * @param CreateSolutionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSolutionResponse
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
     * @param CreateUserSayRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateUserSayResponse
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
     * @param DeleteCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCategoryResponse
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
     * @param DeleteConnQuestionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteConnQuestionResponse
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
     * @param DeleteDSEntityRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDSEntityResponse
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
     * @param DeleteDSEntityValueRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDSEntityValueResponse
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
     * @param DeleteFaqRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteFaqResponse
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
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
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
     * @param DeleteIntentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteIntentResponse
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
     * @param DeleteLgfRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteLgfResponse
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
     * @param DeletePerspectiveRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeletePerspectiveResponse
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
     * @param DeleteSimQuestionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteSimQuestionResponse
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
     * @param DeleteSolutionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSolutionResponse
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
     * @param DeleteUserSayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteUserSayResponse
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
     * @param DescribeCategoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCategoryResponse
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
     * @param DescribeDSEntityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDSEntityResponse
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
     * @param DescribeFaqRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeFaqResponse
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
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
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
     * @param DescribeIntentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeIntentResponse
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
     * @param DescribePerspectiveRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePerspectiveResponse
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
     * @param FeedbackRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return FeedbackResponse
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
     * @param GenerateUserAccessTokenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GenerateUserAccessTokenResponse
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
     * @param GetAsyncResultRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAsyncResultResponse
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
     * @param GetInstancePublishTaskStateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetInstancePublishTaskStateResponse
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
     * @param GetPublishTaskStateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPublishTaskStateResponse
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
     * @param InitIMConnectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return InitIMConnectResponse
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
     * @param LinkInstanceCategoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return LinkInstanceCategoryResponse
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
     * @param ListAgentRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListAgentResponse
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
     * @param ListCategoryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCategoryResponse
     */
    public function listCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
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
     * @param ListConnQuestionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListConnQuestionResponse
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
     * @param ListDSEntityRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListDSEntityResponse
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
     * @param ListDSEntityValueRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDSEntityValueResponse
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
     * @param ListInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
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
     * @param ListIntentRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListIntentResponse
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
     * @param ListLgfRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListLgfResponse
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
     * @param ListSimQuestionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListSimQuestionResponse
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
     * @param ListSolutionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSolutionResponse
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
     * @param ListUserSayRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListUserSayResponse
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
     * @param NluRequest     $request
     * @param RuntimeOptions $runtime
     *
     * @return NluResponse
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
     * @param QueryPerspectivesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPerspectivesResponse
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
     * @param SearchFaqRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return SearchFaqResponse
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
     * @param UpdateCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCategoryResponse
     */
    public function updateCategoryWithOptions($request, $runtime)
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
     * @param UpdateConnQuestionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateConnQuestionResponse
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
     * @param UpdateDSEntityRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateDSEntityResponse
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
     * @param UpdateDSEntityValueRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDSEntityValueResponse
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
     * @param UpdateFaqRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateFaqResponse
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
     * @param UpdateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
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
     * @param UpdateIntentRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateIntentResponse
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
     * @param UpdateLgfRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateLgfResponse
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
     * @param UpdatePerspectiveRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdatePerspectiveResponse
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
     * @param UpdateSimQuestionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSimQuestionResponse
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
     * @param UpdateSolutionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateSolutionResponse
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
     * @param UpdateUserSayRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateUserSayResponse
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
