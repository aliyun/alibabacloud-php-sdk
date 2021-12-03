<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\AdaptGameVersionRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\AdaptGameVersionResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\AddGameToProjectRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\AddGameToProjectResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchDispatchGameSlotRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchDispatchGameSlotResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchStopGameSessionsRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchStopGameSessionsResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CloseOrderRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CloseOrderResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateGameDeployWorkflowRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateGameDeployWorkflowResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateGameRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateGameResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateOrderRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateOrderResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateProjectRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateProjectResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateTokenRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateTokenResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DeleteGameRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DeleteGameResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DeleteGameVersionRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DeleteGameVersionResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DeliveryOrderRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DeliveryOrderResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DispatchGameSlotRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DispatchGameSlotResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameCcuRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameCcuResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameStockRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameStockResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameTrialSurplusDurationRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameTrialSurplusDurationResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameVersionProgressRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameVersionProgressResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameVersionRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameVersionResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetItemRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetItemResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetOutAccountBindDetailRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetOutAccountBindDetailResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetSessionRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetSessionResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetStopGameTokenRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetStopGameTokenResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListBoughtGamesRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListBoughtGamesResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListContainerStatusRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListContainerStatusResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListDeployableInstancesRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListDeployableInstancesResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListGamesRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListGamesResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListGameVersionsRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListGameVersionsResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListHistoryContainerStatusRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListHistoryContainerStatusResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListProjectsRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListProjectsResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryGameRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryGameResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryItemsRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryItemsResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryOrderRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryOrderResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryOutAccountBindStatusRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryOutAccountBindStatusResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryProjectRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryProjectResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryTenantRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryTenantResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\RemoveGameFromProjectRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\RemoveGameFromProjectResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SkipTrialPolicyRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SkipTrialPolicyResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\StopGameSessionRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\StopGameSessionResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SubmitDeploymentRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SubmitDeploymentResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SubmitInternalPurchaseChargeDataRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SubmitInternalPurchaseChargeDataResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SubmitInternalPurchaseOrdersRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SubmitInternalPurchaseOrdersResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SubmitInternalPurchaseReadyFlagRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SubmitInternalPurchaseReadyFlagResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\UploadGameVersionByDownloadRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\UploadGameVersionByDownloadResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class CloudGameAPI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudgameapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AdaptGameVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AdaptGameVersionResponse
     */
    public function adaptGameVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AdaptGameVersionResponse::fromMap($this->doRPCRequest('AdaptGameVersion', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AdaptGameVersionRequest $request
     *
     * @return AdaptGameVersionResponse
     */
    public function adaptGameVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->adaptGameVersionWithOptions($request, $runtime);
    }

    /**
     * @param AddGameToProjectRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddGameToProjectResponse
     */
    public function addGameToProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddGameToProjectResponse::fromMap($this->doRPCRequest('AddGameToProject', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddGameToProjectRequest $request
     *
     * @return AddGameToProjectResponse
     */
    public function addGameToProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGameToProjectWithOptions($request, $runtime);
    }

    /**
     * @param BatchDispatchGameSlotRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BatchDispatchGameSlotResponse
     */
    public function batchDispatchGameSlotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchDispatchGameSlotResponse::fromMap($this->doRPCRequest('BatchDispatchGameSlot', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchDispatchGameSlotRequest $request
     *
     * @return BatchDispatchGameSlotResponse
     */
    public function batchDispatchGameSlot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDispatchGameSlotWithOptions($request, $runtime);
    }

    /**
     * @param BatchStopGameSessionsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BatchStopGameSessionsResponse
     */
    public function batchStopGameSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchStopGameSessionsResponse::fromMap($this->doRPCRequest('BatchStopGameSessions', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchStopGameSessionsRequest $request
     *
     * @return BatchStopGameSessionsResponse
     */
    public function batchStopGameSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopGameSessionsWithOptions($request, $runtime);
    }

    /**
     * @param CloseOrderRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CloseOrderResponse
     */
    public function closeOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloseOrderResponse::fromMap($this->doRPCRequest('CloseOrder', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CloseOrderRequest $request
     *
     * @return CloseOrderResponse
     */
    public function closeOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateGameRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateGameResponse
     */
    public function createGameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGameResponse::fromMap($this->doRPCRequest('CreateGame', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGameRequest $request
     *
     * @return CreateGameResponse
     */
    public function createGame($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGameWithOptions($request, $runtime);
    }

    /**
     * @param CreateGameDeployWorkflowRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateGameDeployWorkflowResponse
     */
    public function createGameDeployWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGameDeployWorkflowResponse::fromMap($this->doRPCRequest('CreateGameDeployWorkflow', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGameDeployWorkflowRequest $request
     *
     * @return CreateGameDeployWorkflowResponse
     */
    public function createGameDeployWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGameDeployWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOrderResponse::fromMap($this->doRPCRequest('CreateOrder', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateOrderRequest $request
     *
     * @return CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProjectResponse::fromMap($this->doRPCRequest('CreateProject', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateTokenRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTokenResponse
     */
    public function createTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTokenResponse::fromMap($this->doRPCRequest('CreateToken', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTokenRequest $request
     *
     * @return CreateTokenResponse
     */
    public function createToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTokenWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGameRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteGameResponse
     */
    public function deleteGameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGameResponse::fromMap($this->doRPCRequest('DeleteGame', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteGameRequest $request
     *
     * @return DeleteGameResponse
     */
    public function deleteGame($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGameWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGameVersionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteGameVersionResponse
     */
    public function deleteGameVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGameVersionResponse::fromMap($this->doRPCRequest('DeleteGameVersion', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteGameVersionRequest $request
     *
     * @return DeleteGameVersionResponse
     */
    public function deleteGameVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGameVersionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProjectResponse::fromMap($this->doRPCRequest('DeleteProject', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeliveryOrderRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeliveryOrderResponse
     */
    public function deliveryOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeliveryOrderResponse::fromMap($this->doRPCRequest('DeliveryOrder', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeliveryOrderRequest $request
     *
     * @return DeliveryOrderResponse
     */
    public function deliveryOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deliveryOrderWithOptions($request, $runtime);
    }

    /**
     * @param DispatchGameSlotRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DispatchGameSlotResponse
     */
    public function dispatchGameSlotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DispatchGameSlotResponse::fromMap($this->doRPCRequest('DispatchGameSlot', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DispatchGameSlotRequest $request
     *
     * @return DispatchGameSlotResponse
     */
    public function dispatchGameSlot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dispatchGameSlotWithOptions($request, $runtime);
    }

    /**
     * @param GetGameCcuRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetGameCcuResponse
     */
    public function getGameCcuWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGameCcuResponse::fromMap($this->doRPCRequest('GetGameCcu', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGameCcuRequest $request
     *
     * @return GetGameCcuResponse
     */
    public function getGameCcu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGameCcuWithOptions($request, $runtime);
    }

    /**
     * @param GetGameStockRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetGameStockResponse
     */
    public function getGameStockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGameStockResponse::fromMap($this->doRPCRequest('GetGameStock', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGameStockRequest $request
     *
     * @return GetGameStockResponse
     */
    public function getGameStock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGameStockWithOptions($request, $runtime);
    }

    /**
     * @param GetGameTrialSurplusDurationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetGameTrialSurplusDurationResponse
     */
    public function getGameTrialSurplusDurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGameTrialSurplusDurationResponse::fromMap($this->doRPCRequest('GetGameTrialSurplusDuration', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGameTrialSurplusDurationRequest $request
     *
     * @return GetGameTrialSurplusDurationResponse
     */
    public function getGameTrialSurplusDuration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGameTrialSurplusDurationWithOptions($request, $runtime);
    }

    /**
     * @param GetGameVersionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetGameVersionResponse
     */
    public function getGameVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGameVersionResponse::fromMap($this->doRPCRequest('GetGameVersion', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGameVersionRequest $request
     *
     * @return GetGameVersionResponse
     */
    public function getGameVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGameVersionWithOptions($request, $runtime);
    }

    /**
     * @param GetGameVersionProgressRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetGameVersionProgressResponse
     */
    public function getGameVersionProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGameVersionProgressResponse::fromMap($this->doRPCRequest('GetGameVersionProgress', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGameVersionProgressRequest $request
     *
     * @return GetGameVersionProgressResponse
     */
    public function getGameVersionProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGameVersionProgressWithOptions($request, $runtime);
    }

    /**
     * @param GetItemRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetItemResponse
     */
    public function getItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetItemResponse::fromMap($this->doRPCRequest('GetItem', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetItemRequest $request
     *
     * @return GetItemResponse
     */
    public function getItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getItemWithOptions($request, $runtime);
    }

    /**
     * @param GetOutAccountBindDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetOutAccountBindDetailResponse
     */
    public function getOutAccountBindDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOutAccountBindDetailResponse::fromMap($this->doRPCRequest('GetOutAccountBindDetail', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOutAccountBindDetailRequest $request
     *
     * @return GetOutAccountBindDetailResponse
     */
    public function getOutAccountBindDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOutAccountBindDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetSessionRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetSessionResponse
     */
    public function getSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSessionResponse::fromMap($this->doRPCRequest('GetSession', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSessionRequest $request
     *
     * @return GetSessionResponse
     */
    public function getSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSessionWithOptions($request, $runtime);
    }

    /**
     * @param GetStopGameTokenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetStopGameTokenResponse
     */
    public function getStopGameTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetStopGameTokenResponse::fromMap($this->doRPCRequest('GetStopGameToken', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetStopGameTokenRequest $request
     *
     * @return GetStopGameTokenResponse
     */
    public function getStopGameToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStopGameTokenWithOptions($request, $runtime);
    }

    /**
     * @param ListBoughtGamesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListBoughtGamesResponse
     */
    public function listBoughtGamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBoughtGamesResponse::fromMap($this->doRPCRequest('ListBoughtGames', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListBoughtGamesRequest $request
     *
     * @return ListBoughtGamesResponse
     */
    public function listBoughtGames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBoughtGamesWithOptions($request, $runtime);
    }

    /**
     * @param ListContainerStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListContainerStatusResponse
     */
    public function listContainerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListContainerStatusResponse::fromMap($this->doRPCRequest('ListContainerStatus', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListContainerStatusRequest $request
     *
     * @return ListContainerStatusResponse
     */
    public function listContainerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContainerStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListDeployableInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDeployableInstancesResponse
     */
    public function listDeployableInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDeployableInstancesResponse::fromMap($this->doRPCRequest('ListDeployableInstances', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeployableInstancesRequest $request
     *
     * @return ListDeployableInstancesResponse
     */
    public function listDeployableInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeployableInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListGameVersionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListGameVersionsResponse
     */
    public function listGameVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListGameVersionsResponse::fromMap($this->doRPCRequest('ListGameVersions', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListGameVersionsRequest $request
     *
     * @return ListGameVersionsResponse
     */
    public function listGameVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGameVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListGamesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListGamesResponse
     */
    public function listGamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListGamesResponse::fromMap($this->doRPCRequest('ListGames', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListGamesRequest $request
     *
     * @return ListGamesResponse
     */
    public function listGames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGamesWithOptions($request, $runtime);
    }

    /**
     * @param ListHistoryContainerStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListHistoryContainerStatusResponse
     */
    public function listHistoryContainerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHistoryContainerStatusResponse::fromMap($this->doRPCRequest('ListHistoryContainerStatus', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListHistoryContainerStatusRequest $request
     *
     * @return ListHistoryContainerStatusResponse
     */
    public function listHistoryContainerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHistoryContainerStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProjectsResponse::fromMap($this->doRPCRequest('ListProjects', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($request, $runtime);
    }

    /**
     * @param QueryGameRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryGameResponse
     */
    public function queryGameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryGameResponse::fromMap($this->doRPCRequest('QueryGame', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryGameRequest $request
     *
     * @return QueryGameResponse
     */
    public function queryGame($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGameWithOptions($request, $runtime);
    }

    /**
     * @param QueryItemsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryItemsResponse
     */
    public function queryItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryItemsResponse::fromMap($this->doRPCRequest('QueryItems', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryItemsRequest $request
     *
     * @return QueryItemsResponse
     */
    public function queryItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryItemsWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryOrderResponse
     */
    public function queryOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOrderResponse::fromMap($this->doRPCRequest('QueryOrder', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryOrderRequest $request
     *
     * @return QueryOrderResponse
     */
    public function queryOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderWithOptions($request, $runtime);
    }

    /**
     * @param QueryOutAccountBindStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryOutAccountBindStatusResponse
     */
    public function queryOutAccountBindStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOutAccountBindStatusResponse::fromMap($this->doRPCRequest('QueryOutAccountBindStatus', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryOutAccountBindStatusRequest $request
     *
     * @return QueryOutAccountBindStatusResponse
     */
    public function queryOutAccountBindStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOutAccountBindStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryProjectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryProjectResponse
     */
    public function queryProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryProjectResponse::fromMap($this->doRPCRequest('QueryProject', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryProjectRequest $request
     *
     * @return QueryProjectResponse
     */
    public function queryProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProjectWithOptions($request, $runtime);
    }

    /**
     * @param QueryTenantRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryTenantResponse
     */
    public function queryTenantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTenantResponse::fromMap($this->doRPCRequest('QueryTenant', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTenantRequest $request
     *
     * @return QueryTenantResponse
     */
    public function queryTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTenantWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGameFromProjectRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveGameFromProjectResponse
     */
    public function removeGameFromProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveGameFromProjectResponse::fromMap($this->doRPCRequest('RemoveGameFromProject', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveGameFromProjectRequest $request
     *
     * @return RemoveGameFromProjectResponse
     */
    public function removeGameFromProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGameFromProjectWithOptions($request, $runtime);
    }

    /**
     * @param SkipTrialPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SkipTrialPolicyResponse
     */
    public function skipTrialPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SkipTrialPolicyResponse::fromMap($this->doRPCRequest('SkipTrialPolicy', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SkipTrialPolicyRequest $request
     *
     * @return SkipTrialPolicyResponse
     */
    public function skipTrialPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->skipTrialPolicyWithOptions($request, $runtime);
    }

    /**
     * @param StopGameSessionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopGameSessionResponse
     */
    public function stopGameSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopGameSessionResponse::fromMap($this->doRPCRequest('StopGameSession', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopGameSessionRequest $request
     *
     * @return StopGameSessionResponse
     */
    public function stopGameSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopGameSessionWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDeploymentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitDeploymentResponse
     */
    public function submitDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitDeploymentResponse::fromMap($this->doRPCRequest('SubmitDeployment', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitDeploymentRequest $request
     *
     * @return SubmitDeploymentResponse
     */
    public function submitDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDeploymentWithOptions($request, $runtime);
    }

    /**
     * @param SubmitInternalPurchaseChargeDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SubmitInternalPurchaseChargeDataResponse
     */
    public function submitInternalPurchaseChargeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitInternalPurchaseChargeDataResponse::fromMap($this->doRPCRequest('SubmitInternalPurchaseChargeData', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitInternalPurchaseChargeDataRequest $request
     *
     * @return SubmitInternalPurchaseChargeDataResponse
     */
    public function submitInternalPurchaseChargeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitInternalPurchaseChargeDataWithOptions($request, $runtime);
    }

    /**
     * @param SubmitInternalPurchaseOrdersRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SubmitInternalPurchaseOrdersResponse
     */
    public function submitInternalPurchaseOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitInternalPurchaseOrdersResponse::fromMap($this->doRPCRequest('SubmitInternalPurchaseOrders', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitInternalPurchaseOrdersRequest $request
     *
     * @return SubmitInternalPurchaseOrdersResponse
     */
    public function submitInternalPurchaseOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitInternalPurchaseOrdersWithOptions($request, $runtime);
    }

    /**
     * @param SubmitInternalPurchaseReadyFlagRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SubmitInternalPurchaseReadyFlagResponse
     */
    public function submitInternalPurchaseReadyFlagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitInternalPurchaseReadyFlagResponse::fromMap($this->doRPCRequest('SubmitInternalPurchaseReadyFlag', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitInternalPurchaseReadyFlagRequest $request
     *
     * @return SubmitInternalPurchaseReadyFlagResponse
     */
    public function submitInternalPurchaseReadyFlag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitInternalPurchaseReadyFlagWithOptions($request, $runtime);
    }

    /**
     * @param UploadGameVersionByDownloadRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UploadGameVersionByDownloadResponse
     */
    public function uploadGameVersionByDownloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadGameVersionByDownloadResponse::fromMap($this->doRPCRequest('UploadGameVersionByDownload', '2020-07-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadGameVersionByDownloadRequest $request
     *
     * @return UploadGameVersionByDownloadResponse
     */
    public function uploadGameVersionByDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadGameVersionByDownloadWithOptions($request, $runtime);
    }
}
