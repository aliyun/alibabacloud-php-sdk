<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ActivatePerspectiveRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ActivatePerspectiveResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\AddSynonymRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\AddSynonymResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\AppendEntityMemberRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\AppendEntityMemberResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\AppendEntityMemberShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\AssociateRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\AssociateResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ChatRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ChatResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateBotRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateBotResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateCoreWordRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateCoreWordResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateDialogRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateDialogResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateEntityRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateEntityResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateEntityShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateIntentRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateIntentResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateIntentShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateKnowledgeRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateKnowledgeResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateKnowledgeShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreatePerspectiveRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreatePerspectiveResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteBotRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteBotResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteCoreWordRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteCoreWordResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteDialogRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteDialogResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteEntityRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteEntityResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteIntentRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteIntentResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteKnowledgeRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DeleteKnowledgeResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeBotRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeBotResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeCoreWordRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeCoreWordResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeDialogFlowRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeDialogFlowResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeDialogRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeDialogResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeEntitiesRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeEntitiesResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeIntentRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeIntentResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeKnowledgeRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeKnowledgeResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribePerspectiveRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribePerspectiveResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DisableDialogFlowRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DisableDialogFlowResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DisableKnowledgeRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DisableKnowledgeResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\FeedbackRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\FeedbackResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\GetAsyncResultRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\GetAsyncResultResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\GetBotChatDataRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\GetBotChatDataResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\GetBotDsStatDataRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\GetBotDsStatDataResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\GetBotKnowledgeStatDataRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\GetBotKnowledgeStatDataResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\GetBotSessionDataRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\GetBotSessionDataResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\GetConversationListRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\GetConversationListResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotChatHistorysRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotChatHistorysResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotColdDsDatasRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotColdDsDatasResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotColdKnowledgesRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotColdKnowledgesResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotDsDetailsRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotDsDetailsResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotHotDsDatasRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotHotDsDatasResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotHotKnowledgesRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotHotKnowledgesResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotKnowledgeDetailsRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotKnowledgeDetailsResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotReceptionDetailDatasRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListBotReceptionDetailDatasResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListConversationLogsRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ListConversationLogsResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\MoveKnowledgeCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\MoveKnowledgeCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\PublishDialogFlowRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\PublishDialogFlowResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\PublishKnowledgeRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\PublishKnowledgeResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryBotsRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryBotsResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryCategoriesRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryCategoriesResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryCoreWordsRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryCoreWordsResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryDialogsRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryDialogsResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryEntitiesRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryEntitiesResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryIntentsRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryIntentsResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryKnowledgesRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryKnowledgesResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryPerspectivesRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryPerspectivesResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QuerySystemEntitiesRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QuerySystemEntitiesResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\RemoveEntityMemberRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\RemoveEntityMemberResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\RemoveEntityMemberShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\RemoveSynonymRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\RemoveSynonymResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\TestDialogFlowRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\TestDialogFlowResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateCategoryRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateCategoryResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateCoreWordRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateCoreWordResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateDialogFlowRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateDialogFlowResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateDialogFlowShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateDialogRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateDialogResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateEntityRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateEntityResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateEntityShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateIntentRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateIntentResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateIntentShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateKnowledgeRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateKnowledgeResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateKnowledgeShrinkRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdatePerspectiveRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdatePerspectiveResponse;
use AlibabaCloud\Tea\Tea;
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
     * @param ActivatePerspectiveRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ActivatePerspectiveResponse
     */
    public function activatePerspectiveWithOptions($request, $runtime)
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
            'action'      => 'ActivatePerspective',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivatePerspectiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ActivatePerspectiveRequest $request
     *
     * @return ActivatePerspectiveResponse
     */
    public function activatePerspective($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activatePerspectiveWithOptions($request, $runtime);
    }

    /**
     * @param AddSynonymRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddSynonymResponse
     */
    public function addSynonymWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->coreWordName)) {
            $query['CoreWordName'] = $request->coreWordName;
        }
        if (!Utils::isUnset($request->synonym)) {
            $query['Synonym'] = $request->synonym;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSynonym',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSynonymResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSynonymRequest $request
     *
     * @return AddSynonymResponse
     */
    public function addSynonym($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSynonymWithOptions($request, $runtime);
    }

    /**
     * @param AppendEntityMemberRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return AppendEntityMemberResponse
     */
    public function appendEntityMemberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AppendEntityMemberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->member)) {
            $request->memberShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->member), 'Member', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->applyType)) {
            $query['ApplyType'] = $request->applyType;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->memberShrink)) {
            $query['Member'] = $request->memberShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AppendEntityMember',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppendEntityMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppendEntityMemberRequest $request
     *
     * @return AppendEntityMemberResponse
     */
    public function appendEntityMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appendEntityMemberWithOptions($request, $runtime);
    }

    /**
     * @param AssociateRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AssociateResponse
     */
    public function associateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->perspective)) {
            $query['Perspective'] = $request->perspective;
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
            'version'     => '2017-10-11',
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
     * @param ChatRequest    $request
     * @param RuntimeOptions $runtime
     *
     * @return ChatResponse
     */
    public function chatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->intentName)) {
            $query['IntentName'] = $request->intentName;
        }
        if (!Utils::isUnset($request->knowledgeId)) {
            $query['KnowledgeId'] = $request->knowledgeId;
        }
        if (!Utils::isUnset($request->perspective)) {
            $query['Perspective'] = $request->perspective;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
            'version'     => '2017-10-11',
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
     * @param CreateBotRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateBotResponse
     */
    public function createBotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->avatar)) {
            $query['Avatar'] = $request->avatar;
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
            'action'      => 'CreateBot',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBotRequest $request
     *
     * @return CreateBotResponse
     */
    public function createBot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBotWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->bizCode)) {
            $query['BizCode'] = $request->bizCode;
        }
        if (!Utils::isUnset($request->knowledgeType)) {
            $query['KnowledgeType'] = $request->knowledgeType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentCategoryId)) {
            $query['ParentCategoryId'] = $request->parentCategoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCategory',
            'version'     => '2017-10-11',
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
     * @param CreateCoreWordRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCoreWordResponse
     */
    public function createCoreWordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->coreWordName)) {
            $query['CoreWordName'] = $request->coreWordName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCoreWord',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCoreWordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCoreWordRequest $request
     *
     * @return CreateCoreWordResponse
     */
    public function createCoreWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCoreWordWithOptions($request, $runtime);
    }

    /**
     * @param CreateDialogRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDialogResponse
     */
    public function createDialogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dialogName)) {
            $query['DialogName'] = $request->dialogName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDialog',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDialogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDialogRequest $request
     *
     * @return CreateDialogResponse
     */
    public function createDialog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDialogWithOptions($request, $runtime);
    }

    /**
     * @param CreateEntityRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateEntityResponse
     */
    public function createEntityWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEntityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        if (!Utils::isUnset($request->entityName)) {
            $query['EntityName'] = $request->entityName;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->membersShrink)) {
            $query['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->regex)) {
            $query['Regex'] = $request->regex;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEntity',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEntityRequest $request
     *
     * @return CreateEntityResponse
     */
    public function createEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEntityWithOptions($request, $runtime);
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
            $request->intentDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->intentDefinition), 'IntentDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        if (!Utils::isUnset($request->intentDefinitionShrink)) {
            $query['IntentDefinition'] = $request->intentDefinitionShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIntent',
            'version'     => '2017-10-11',
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
     * @param CreateKnowledgeRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateKnowledgeResponse
     */
    public function createKnowledgeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateKnowledgeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->knowledge)) {
            $request->knowledgeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->knowledge), 'Knowledge', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->knowledgeShrink)) {
            $body['Knowledge'] = $request->knowledgeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateKnowledge',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateKnowledgeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateKnowledgeRequest $request
     *
     * @return CreateKnowledgeResponse
     */
    public function createKnowledge($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKnowledgeWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePerspective',
            'version'     => '2017-10-11',
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
     * @param DeleteBotRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteBotResponse
     */
    public function deleteBotWithOptions($request, $runtime)
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
            'action'      => 'DeleteBot',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBotRequest $request
     *
     * @return DeleteBotResponse
     */
    public function deleteBot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBotWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCategory',
            'version'     => '2017-10-11',
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
     * @param DeleteCoreWordRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCoreWordResponse
     */
    public function deleteCoreWordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->coreWordName)) {
            $query['CoreWordName'] = $request->coreWordName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCoreWord',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCoreWordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCoreWordRequest $request
     *
     * @return DeleteCoreWordResponse
     */
    public function deleteCoreWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCoreWordWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDialogRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDialogResponse
     */
    public function deleteDialogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDialog',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDialogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDialogRequest $request
     *
     * @return DeleteDialogResponse
     */
    public function deleteDialog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDialogWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEntityRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteEntityResponse
     */
    public function deleteEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEntity',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEntityRequest $request
     *
     * @return DeleteEntityResponse
     */
    public function deleteEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEntityWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIntent',
            'version'     => '2017-10-11',
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
     * @param DeleteKnowledgeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteKnowledgeResponse
     */
    public function deleteKnowledgeWithOptions($request, $runtime)
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
            'action'      => 'DeleteKnowledge',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteKnowledgeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteKnowledgeRequest $request
     *
     * @return DeleteKnowledgeResponse
     */
    public function deleteKnowledge($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKnowledgeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBotRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeBotResponse
     */
    public function describeBotWithOptions($request, $runtime)
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
            'action'      => 'DescribeBot',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBotRequest $request
     *
     * @return DescribeBotResponse
     */
    public function describeBot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBotWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCategory',
            'version'     => '2017-10-11',
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
     * @param DescribeCoreWordRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCoreWordResponse
     */
    public function describeCoreWordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->coreWordName)) {
            $query['CoreWordName'] = $request->coreWordName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCoreWord',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCoreWordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCoreWordRequest $request
     *
     * @return DescribeCoreWordResponse
     */
    public function describeCoreWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCoreWordWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDialogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDialogResponse
     */
    public function describeDialogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDialog',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDialogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDialogRequest $request
     *
     * @return DescribeDialogResponse
     */
    public function describeDialog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDialogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDialogFlowRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDialogFlowResponse
     */
    public function describeDialogFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDialogFlow',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDialogFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDialogFlowRequest $request
     *
     * @return DescribeDialogFlowResponse
     */
    public function describeDialogFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDialogFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEntitiesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeEntitiesResponse
     */
    public function describeEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEntities',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEntitiesRequest $request
     *
     * @return DescribeEntitiesResponse
     */
    public function describeEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEntitiesWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->intentId)) {
            $query['IntentId'] = $request->intentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIntent',
            'version'     => '2017-10-11',
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
     * @param DescribeKnowledgeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeKnowledgeResponse
     */
    public function describeKnowledgeWithOptions($request, $runtime)
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
            'action'      => 'DescribeKnowledge',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeKnowledgeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeKnowledgeRequest $request
     *
     * @return DescribeKnowledgeResponse
     */
    public function describeKnowledge($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKnowledgeWithOptions($request, $runtime);
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
            'version'     => '2017-10-11',
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
     * @param DisableDialogFlowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisableDialogFlowResponse
     */
    public function disableDialogFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableDialogFlow',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableDialogFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableDialogFlowRequest $request
     *
     * @return DisableDialogFlowResponse
     */
    public function disableDialogFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDialogFlowWithOptions($request, $runtime);
    }

    /**
     * @param DisableKnowledgeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DisableKnowledgeResponse
     */
    public function disableKnowledgeWithOptions($request, $runtime)
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
            'action'      => 'DisableKnowledge',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableKnowledgeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableKnowledgeRequest $request
     *
     * @return DisableKnowledgeResponse
     */
    public function disableKnowledge($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableKnowledgeWithOptions($request, $runtime);
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
            'version'     => '2017-10-11',
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
            'version'     => '2017-10-11',
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
     * @param GetBotChatDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetBotChatDataResponse
     */
    public function getBotChatDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'GetBotChatData',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBotChatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBotChatDataRequest $request
     *
     * @return GetBotChatDataResponse
     */
    public function getBotChatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBotChatDataWithOptions($request, $runtime);
    }

    /**
     * @param GetBotDsStatDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetBotDsStatDataResponse
     */
    public function getBotDsStatDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'GetBotDsStatData',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBotDsStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBotDsStatDataRequest $request
     *
     * @return GetBotDsStatDataResponse
     */
    public function getBotDsStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBotDsStatDataWithOptions($request, $runtime);
    }

    /**
     * @param GetBotKnowledgeStatDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetBotKnowledgeStatDataResponse
     */
    public function getBotKnowledgeStatDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'GetBotKnowledgeStatData',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBotKnowledgeStatDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBotKnowledgeStatDataRequest $request
     *
     * @return GetBotKnowledgeStatDataResponse
     */
    public function getBotKnowledgeStatData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBotKnowledgeStatDataWithOptions($request, $runtime);
    }

    /**
     * @param GetBotSessionDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBotSessionDataResponse
     */
    public function getBotSessionDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'GetBotSessionData',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBotSessionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetConversationListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConversationListResponse
     */
    public function getConversationListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
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
        if (!Utils::isUnset($request->senderId)) {
            $query['SenderId'] = $request->senderId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConversationList',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConversationListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConversationListRequest $request
     *
     * @return GetConversationListResponse
     */
    public function getConversationList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConversationListWithOptions($request, $runtime);
    }

    /**
     * @param ListBotChatHistorysRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListBotChatHistorysResponse
     */
    public function listBotChatHistorysWithOptions($request, $runtime)
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
            'action'      => 'ListBotChatHistorys',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBotChatHistorysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBotChatHistorysRequest $request
     *
     * @return ListBotChatHistorysResponse
     */
    public function listBotChatHistorys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBotChatHistorysWithOptions($request, $runtime);
    }

    /**
     * @param ListBotColdDsDatasRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListBotColdDsDatasResponse
     */
    public function listBotColdDsDatasWithOptions($request, $runtime)
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
            'action'      => 'ListBotColdDsDatas',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBotColdDsDatasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBotColdDsDatasRequest $request
     *
     * @return ListBotColdDsDatasResponse
     */
    public function listBotColdDsDatas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBotColdDsDatasWithOptions($request, $runtime);
    }

    /**
     * @param ListBotColdKnowledgesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListBotColdKnowledgesResponse
     */
    public function listBotColdKnowledgesWithOptions($request, $runtime)
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
            'action'      => 'ListBotColdKnowledges',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBotColdKnowledgesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBotColdKnowledgesRequest $request
     *
     * @return ListBotColdKnowledgesResponse
     */
    public function listBotColdKnowledges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBotColdKnowledgesWithOptions($request, $runtime);
    }

    /**
     * @param ListBotDsDetailsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListBotDsDetailsResponse
     */
    public function listBotDsDetailsWithOptions($request, $runtime)
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
            'action'      => 'ListBotDsDetails',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBotDsDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBotDsDetailsRequest $request
     *
     * @return ListBotDsDetailsResponse
     */
    public function listBotDsDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBotDsDetailsWithOptions($request, $runtime);
    }

    /**
     * @param ListBotHotDsDatasRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListBotHotDsDatasResponse
     */
    public function listBotHotDsDatasWithOptions($request, $runtime)
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
            'action'      => 'ListBotHotDsDatas',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBotHotDsDatasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBotHotDsDatasRequest $request
     *
     * @return ListBotHotDsDatasResponse
     */
    public function listBotHotDsDatas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBotHotDsDatasWithOptions($request, $runtime);
    }

    /**
     * @param ListBotHotKnowledgesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListBotHotKnowledgesResponse
     */
    public function listBotHotKnowledgesWithOptions($request, $runtime)
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
            'action'      => 'ListBotHotKnowledges',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBotHotKnowledgesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBotHotKnowledgesRequest $request
     *
     * @return ListBotHotKnowledgesResponse
     */
    public function listBotHotKnowledges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBotHotKnowledgesWithOptions($request, $runtime);
    }

    /**
     * @param ListBotKnowledgeDetailsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListBotKnowledgeDetailsResponse
     */
    public function listBotKnowledgeDetailsWithOptions($request, $runtime)
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
            'action'      => 'ListBotKnowledgeDetails',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBotKnowledgeDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBotKnowledgeDetailsRequest $request
     *
     * @return ListBotKnowledgeDetailsResponse
     */
    public function listBotKnowledgeDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBotKnowledgeDetailsWithOptions($request, $runtime);
    }

    /**
     * @param ListBotReceptionDetailDatasRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListBotReceptionDetailDatasResponse
     */
    public function listBotReceptionDetailDatasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'action'      => 'ListBotReceptionDetailDatas',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBotReceptionDetailDatasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBotReceptionDetailDatasRequest $request
     *
     * @return ListBotReceptionDetailDatasResponse
     */
    public function listBotReceptionDetailDatas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBotReceptionDetailDatasWithOptions($request, $runtime);
    }

    /**
     * @param ListConversationLogsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListConversationLogsResponse
     */
    public function listConversationLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConversationLogs',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConversationLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConversationLogsRequest $request
     *
     * @return ListConversationLogsResponse
     */
    public function listConversationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConversationLogsWithOptions($request, $runtime);
    }

    /**
     * @param MoveKnowledgeCategoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return MoveKnowledgeCategoryResponse
     */
    public function moveKnowledgeCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->knowledgeId)) {
            $query['KnowledgeId'] = $request->knowledgeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveKnowledgeCategory',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveKnowledgeCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MoveKnowledgeCategoryRequest $request
     *
     * @return MoveKnowledgeCategoryResponse
     */
    public function moveKnowledgeCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveKnowledgeCategoryWithOptions($request, $runtime);
    }

    /**
     * @param PublishDialogFlowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PublishDialogFlowResponse
     */
    public function publishDialogFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishDialogFlow',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishDialogFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishDialogFlowRequest $request
     *
     * @return PublishDialogFlowResponse
     */
    public function publishDialogFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishDialogFlowWithOptions($request, $runtime);
    }

    /**
     * @param PublishKnowledgeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PublishKnowledgeResponse
     */
    public function publishKnowledgeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->async)) {
            $query['Async'] = $request->async;
        }
        if (!Utils::isUnset($request->knowledgeId)) {
            $query['KnowledgeId'] = $request->knowledgeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishKnowledge',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishKnowledgeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishKnowledgeRequest $request
     *
     * @return PublishKnowledgeResponse
     */
    public function publishKnowledge($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishKnowledgeWithOptions($request, $runtime);
    }

    /**
     * @param QueryBotsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryBotsResponse
     */
    public function queryBotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
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
            'action'      => 'QueryBots',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBotsRequest $request
     *
     * @return QueryBotsResponse
     */
    public function queryBots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBotsWithOptions($request, $runtime);
    }

    /**
     * @param QueryCategoriesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryCategoriesResponse
     */
    public function queryCategoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->knowledgeType)) {
            $query['KnowledgeType'] = $request->knowledgeType;
        }
        if (!Utils::isUnset($request->parentCategoryId)) {
            $query['ParentCategoryId'] = $request->parentCategoryId;
        }
        if (!Utils::isUnset($request->showChildrens)) {
            $query['ShowChildrens'] = $request->showChildrens;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCategories',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCategoriesRequest $request
     *
     * @return QueryCategoriesResponse
     */
    public function queryCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCategoriesWithOptions($request, $runtime);
    }

    /**
     * @param QueryCoreWordsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryCoreWordsResponse
     */
    public function queryCoreWordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->coreWordName)) {
            $query['CoreWordName'] = $request->coreWordName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->synonym)) {
            $query['Synonym'] = $request->synonym;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCoreWords',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCoreWordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCoreWordsRequest $request
     *
     * @return QueryCoreWordsResponse
     */
    public function queryCoreWords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCoreWordsWithOptions($request, $runtime);
    }

    /**
     * @param QueryDialogsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryDialogsResponse
     */
    public function queryDialogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dialogName)) {
            $query['DialogName'] = $request->dialogName;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDialogs',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDialogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDialogsRequest $request
     *
     * @return QueryDialogsResponse
     */
    public function queryDialogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDialogsWithOptions($request, $runtime);
    }

    /**
     * @param QueryEntitiesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryEntitiesResponse
     */
    public function queryEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        if (!Utils::isUnset($request->entityName)) {
            $query['EntityName'] = $request->entityName;
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
            'action'      => 'QueryEntities',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryEntitiesRequest $request
     *
     * @return QueryEntitiesResponse
     */
    public function queryEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEntitiesWithOptions($request, $runtime);
    }

    /**
     * @param QueryIntentsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryIntentsResponse
     */
    public function queryIntentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
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
            'action'      => 'QueryIntents',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryIntentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryIntentsRequest $request
     *
     * @return QueryIntentsResponse
     */
    public function queryIntents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIntentsWithOptions($request, $runtime);
    }

    /**
     * @param QueryKnowledgesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryKnowledgesResponse
     */
    public function queryKnowledgesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->coreWordName)) {
            $query['CoreWordName'] = $request->coreWordName;
        }
        if (!Utils::isUnset($request->knowledgeTitle)) {
            $query['KnowledgeTitle'] = $request->knowledgeTitle;
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
            'action'      => 'QueryKnowledges',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryKnowledgesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryKnowledgesRequest $request
     *
     * @return QueryKnowledgesResponse
     */
    public function queryKnowledges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryKnowledgesWithOptions($request, $runtime);
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
            'version'     => '2017-10-11',
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
     * @param QuerySystemEntitiesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySystemEntitiesResponse
     */
    public function querySystemEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->entityName)) {
            $query['EntityName'] = $request->entityName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySystemEntities',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySystemEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySystemEntitiesRequest $request
     *
     * @return QuerySystemEntitiesResponse
     */
    public function querySystemEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySystemEntitiesWithOptions($request, $runtime);
    }

    /**
     * @param RemoveEntityMemberRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveEntityMemberResponse
     */
    public function removeEntityMemberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveEntityMemberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->member)) {
            $request->memberShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->member), 'Member', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->memberShrink)) {
            $query['Member'] = $request->memberShrink;
        }
        if (!Utils::isUnset($request->removeType)) {
            $query['RemoveType'] = $request->removeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveEntityMember',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveEntityMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveEntityMemberRequest $request
     *
     * @return RemoveEntityMemberResponse
     */
    public function removeEntityMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeEntityMemberWithOptions($request, $runtime);
    }

    /**
     * @param RemoveSynonymRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RemoveSynonymResponse
     */
    public function removeSynonymWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->coreWordName)) {
            $query['CoreWordName'] = $request->coreWordName;
        }
        if (!Utils::isUnset($request->synonym)) {
            $query['Synonym'] = $request->synonym;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveSynonym',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveSynonymResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveSynonymRequest $request
     *
     * @return RemoveSynonymResponse
     */
    public function removeSynonym($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSynonymWithOptions($request, $runtime);
    }

    /**
     * @param TestDialogFlowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TestDialogFlowResponse
     */
    public function testDialogFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TestDialogFlow',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TestDialogFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TestDialogFlowRequest $request
     *
     * @return TestDialogFlowResponse
     */
    public function testDialogFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testDialogFlowWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCategory',
            'version'     => '2017-10-11',
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
     * @param UpdateCoreWordRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCoreWordResponse
     */
    public function updateCoreWordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->coreWordCode)) {
            $query['CoreWordCode'] = $request->coreWordCode;
        }
        if (!Utils::isUnset($request->coreWordName)) {
            $query['CoreWordName'] = $request->coreWordName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCoreWord',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCoreWordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCoreWordRequest $request
     *
     * @return UpdateCoreWordResponse
     */
    public function updateCoreWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCoreWordWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDialogRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateDialogResponse
     */
    public function updateDialogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        if (!Utils::isUnset($request->dialogName)) {
            $query['DialogName'] = $request->dialogName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDialog',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDialogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDialogRequest $request
     *
     * @return UpdateDialogResponse
     */
    public function updateDialog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDialogWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDialogFlowRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDialogFlowResponse
     */
    public function updateDialogFlowWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDialogFlowShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->moduleDefinition)) {
            $request->moduleDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->moduleDefinition), 'ModuleDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        $body = [];
        if (!Utils::isUnset($request->moduleDefinitionShrink)) {
            $body['ModuleDefinition'] = $request->moduleDefinitionShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDialogFlow',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDialogFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDialogFlowRequest $request
     *
     * @return UpdateDialogFlowResponse
     */
    public function updateDialogFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDialogFlowWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEntityRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateEntityResponse
     */
    public function updateEntityWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateEntityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
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
        if (!Utils::isUnset($request->regex)) {
            $query['Regex'] = $request->regex;
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEntity',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEntityRequest $request
     *
     * @return UpdateEntityResponse
     */
    public function updateEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEntityWithOptions($request, $runtime);
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
            $request->intentDefinitionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->intentDefinition), 'IntentDefinition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
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
            'version'     => '2017-10-11',
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
     * @param UpdateKnowledgeRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateKnowledgeResponse
     */
    public function updateKnowledgeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateKnowledgeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->knowledge)) {
            $request->knowledgeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->knowledge), 'Knowledge', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->knowledgeShrink)) {
            $body['Knowledge'] = $request->knowledgeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateKnowledge',
            'version'     => '2017-10-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateKnowledgeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateKnowledgeRequest $request
     *
     * @return UpdateKnowledgeResponse
     */
    public function updateKnowledge($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateKnowledgeWithOptions($request, $runtime);
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
            'version'     => '2017-10-11',
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
}
