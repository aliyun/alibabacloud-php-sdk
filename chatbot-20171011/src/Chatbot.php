<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ActivatePerspectiveRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\ActivatePerspectiveResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\AddSynonymRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\AddSynonymResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\AppendEntityMemberRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\AppendEntityMemberResponse;
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
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateIntentRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateIntentResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateKnowledgeRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateKnowledgeResponse;
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
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeDialogRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeDialogResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribePerspectiveRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribePerspectiveResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DisableDialogFlowRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DisableDialogFlowResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DisableKnowledgeRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DisableKnowledgeResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\FeedbackRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\FeedbackResponse;
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
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryDialogsRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryDialogsResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryPerspectivesResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QuerySystemEntitiesRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QuerySystemEntitiesResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\RemoveEntityMemberRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\RemoveEntityMemberResponse;
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
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateDialogRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateDialogResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateEntityRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateEntityResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateIntentRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateIntentResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateKnowledgeRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateKnowledgeResponse;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdatePerspectiveRequest;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdatePerspectiveResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ActivatePerspectiveResponse::fromMap($this->doRPCRequest('ActivatePerspective', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSynonymResponse::fromMap($this->doRPCRequest('AddSynonym', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AppendEntityMemberRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AppendEntityMemberResponse
     */
    public function appendEntityMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AppendEntityMemberResponse::fromMap($this->doRPCRequest('AppendEntityMember', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateResponse::fromMap($this->doRPCRequest('Associate', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChatResponse::fromMap($this->doRPCRequest('Chat', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBotResponse::fromMap($this->doRPCRequest('CreateBot', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCategoryResponse::fromMap($this->doRPCRequest('CreateCategory', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCoreWordResponse::fromMap($this->doRPCRequest('CreateCoreWord', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDialogResponse::fromMap($this->doRPCRequest('CreateDialog', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateEntityRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateEntityResponse
     */
    public function createEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEntityResponse::fromMap($this->doRPCRequest('CreateEntity', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateIntentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateIntentResponse
     */
    public function createIntentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIntentResponse::fromMap($this->doRPCRequest('CreateIntent', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateKnowledgeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateKnowledgeResponse
     */
    public function createKnowledgeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateKnowledgeResponse::fromMap($this->doRPCRequest('CreateKnowledge', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteBotRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteBotResponse
     */
    public function deleteBotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBotResponse::fromMap($this->doRPCRequest('DeleteBot', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCategoryResponse::fromMap($this->doRPCRequest('DeleteCategory', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCoreWordResponse::fromMap($this->doRPCRequest('DeleteCoreWord', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDialogResponse::fromMap($this->doRPCRequest('DeleteDialog', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEntityResponse::fromMap($this->doRPCRequest('DeleteEntity', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIntentResponse::fromMap($this->doRPCRequest('DeleteIntent', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteKnowledgeResponse::fromMap($this->doRPCRequest('DeleteKnowledge', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBotResponse::fromMap($this->doRPCRequest('DescribeBot', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCategoryResponse::fromMap($this->doRPCRequest('DescribeCategory', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCoreWordResponse::fromMap($this->doRPCRequest('DescribeCoreWord', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDialogResponse::fromMap($this->doRPCRequest('DescribeDialog', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribePerspectiveRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePerspectiveResponse
     */
    public function describePerspectiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePerspectiveResponse::fromMap($this->doRPCRequest('DescribePerspective', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableDialogFlowResponse::fromMap($this->doRPCRequest('DisableDialogFlow', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableKnowledgeResponse::fromMap($this->doRPCRequest('DisableKnowledge', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FeedbackResponse::fromMap($this->doRPCRequest('Feedback', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetBotChatDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetBotChatDataResponse
     */
    public function getBotChatDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBotChatDataResponse::fromMap($this->doRPCRequest('GetBotChatData', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBotDsStatDataResponse::fromMap($this->doRPCRequest('GetBotDsStatData', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBotKnowledgeStatDataResponse::fromMap($this->doRPCRequest('GetBotKnowledgeStatData', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBotSessionDataResponse::fromMap($this->doRPCRequest('GetBotSessionData', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetConversationListResponse::fromMap($this->doRPCRequest('GetConversationList', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBotChatHistorysResponse::fromMap($this->doRPCRequest('ListBotChatHistorys', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBotColdDsDatasResponse::fromMap($this->doRPCRequest('ListBotColdDsDatas', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBotColdKnowledgesResponse::fromMap($this->doRPCRequest('ListBotColdKnowledges', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBotDsDetailsResponse::fromMap($this->doRPCRequest('ListBotDsDetails', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBotHotDsDatasResponse::fromMap($this->doRPCRequest('ListBotHotDsDatas', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBotHotKnowledgesResponse::fromMap($this->doRPCRequest('ListBotHotKnowledges', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBotKnowledgeDetailsResponse::fromMap($this->doRPCRequest('ListBotKnowledgeDetails', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBotReceptionDetailDatasResponse::fromMap($this->doRPCRequest('ListBotReceptionDetailDatas', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListConversationLogsResponse::fromMap($this->doRPCRequest('ListConversationLogs', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveKnowledgeCategoryResponse::fromMap($this->doRPCRequest('MoveKnowledgeCategory', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishDialogFlowResponse::fromMap($this->doRPCRequest('PublishDialogFlow', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishKnowledgeResponse::fromMap($this->doRPCRequest('PublishKnowledge', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryBotsResponse::fromMap($this->doRPCRequest('QueryBots', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryDialogsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryDialogsResponse
     */
    public function queryDialogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDialogsResponse::fromMap($this->doRPCRequest('QueryDialogs', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return QueryPerspectivesResponse
     */
    public function queryPerspectivesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return QueryPerspectivesResponse::fromMap($this->doRPCRequest('QueryPerspectives', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return QueryPerspectivesResponse
     */
    public function queryPerspectives()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPerspectivesWithOptions($runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySystemEntitiesResponse::fromMap($this->doRPCRequest('QuerySystemEntities', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RemoveEntityMemberRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveEntityMemberResponse
     */
    public function removeEntityMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveEntityMemberResponse::fromMap($this->doRPCRequest('RemoveEntityMember', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveSynonymResponse::fromMap($this->doRPCRequest('RemoveSynonym', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TestDialogFlowResponse::fromMap($this->doRPCRequest('TestDialogFlow', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCategoryResponse::fromMap($this->doRPCRequest('UpdateCategory', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCoreWordResponse::fromMap($this->doRPCRequest('UpdateCoreWord', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDialogResponse::fromMap($this->doRPCRequest('UpdateDialog', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateDialogFlowRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDialogFlowResponse
     */
    public function updateDialogFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDialogFlowResponse::fromMap($this->doRPCRequest('UpdateDialogFlow', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateEntityRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateEntityResponse
     */
    public function updateEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEntityResponse::fromMap($this->doRPCRequest('UpdateEntity', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateIntentRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateIntentResponse
     */
    public function updateIntentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateIntentResponse::fromMap($this->doRPCRequest('UpdateIntent', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateKnowledgeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateKnowledgeResponse
     */
    public function updateKnowledgeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateKnowledgeResponse::fromMap($this->doRPCRequest('UpdateKnowledge', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdatePerspectiveResponse::fromMap($this->doRPCRequest('UpdatePerspective', '2017-10-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
