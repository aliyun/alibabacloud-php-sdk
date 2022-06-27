<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\AdaptGameVersionRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\AdaptGameVersionResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\AddGameToProjectRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\AddGameToProjectResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchDispatchGameSlotRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchDispatchGameSlotResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchStopGameSessionsRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchStopGameSessionsResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CancelGameHangRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CancelGameHangResponse;
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
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameStatusRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameStatusResponse;
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
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetQueuingSizeRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetQueuingSizeResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetSessionRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetSessionResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetStopGameTokenRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetStopGameTokenResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\KickPlayerRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\KickPlayerResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListBoughtGamesRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListBoughtGamesResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListContainerStatusRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListContainerStatusResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListDeployableInstancesRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListDeployableInstancesResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListGameServerIpRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListGameServerIpResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListGamesRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListGamesResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListGameVersionsRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListGameVersionsResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListHistoryContainerStatusRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListHistoryContainerStatusResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListProjectsRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListProjectsResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryGameHangRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryGameHangResponse;
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
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SetGameAliveRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SetGameAliveResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SetGameHangRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SetGameHangResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SkipTrialPolicyRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SkipTrialPolicyResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\StartGameLiveRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\StartGameLiveResponse;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\StopGameLiveRequest;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\StopGameLiveResponse;
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
use Darabonba\OpenApi\Models\Params;
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
        $query = [];
        if (!Utils::isUnset($request->frameRate)) {
            $query['FrameRate'] = $request->frameRate;
        }
        if (!Utils::isUnset($request->resolution)) {
            $query['Resolution'] = $request->resolution;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AdaptGameVersion',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AdaptGameVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGameToProject',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGameToProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->queueUserList)) {
            $body['QueueUserList'] = $request->queueUserList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchDispatchGameSlot',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDispatchGameSlotResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->trackInfo)) {
            $query['TrackInfo'] = $request->trackInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchStopGameSessions',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStopGameSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CancelGameHangRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CancelGameHangResponse
     */
    public function cancelGameHangWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKey)) {
            $body['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->gameSession)) {
            $body['GameSession'] = $request->gameSession;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelGameHang',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelGameHangResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelGameHangRequest $request
     *
     * @return CancelGameHangResponse
     */
    public function cancelGameHang($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelGameHangWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->accountDomain)) {
            $query['AccountDomain'] = $request->accountDomain;
        }
        if (!Utils::isUnset($request->buyerAccountId)) {
            $query['BuyerAccountId'] = $request->buyerAccountId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseOrder',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseOrderResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->gameName)) {
            $query['GameName'] = $request->gameName;
        }
        if (!Utils::isUnset($request->platformType)) {
            $query['PlatformType'] = $request->platformType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGame',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGameResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->downloadType)) {
            $query['DownloadType'] = $request->downloadType;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->frameRate)) {
            $query['FrameRate'] = $request->frameRate;
        }
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->gameVersion)) {
            $query['GameVersion'] = $request->gameVersion;
        }
        if (!Utils::isUnset($request->hash)) {
            $query['Hash'] = $request->hash;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['Instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->resolution)) {
            $query['Resolution'] = $request->resolution;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGameDeployWorkflow',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGameDeployWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->accountDomain)) {
            $query['AccountDomain'] = $request->accountDomain;
        }
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->buyerAccountId)) {
            $query['BuyerAccountId'] = $request->buyerAccountId;
        }
        if (!Utils::isUnset($request->idempotentCode)) {
            $query['IdempotentCode'] = $request->idempotentCode;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->originPrice)) {
            $query['OriginPrice'] = $request->originPrice;
        }
        if (!Utils::isUnset($request->settlementPrice)) {
            $query['SettlementPrice'] = $request->settlementPrice;
        }
        if (!Utils::isUnset($request->skuId)) {
            $query['SkuId'] = $request->skuId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrder',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->currentToken)) {
            $query['CurrentToken'] = $request->currentToken;
        }
        if (!Utils::isUnset($request->session)) {
            $query['Session'] = $request->session;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateToken',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTokenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGame',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGameResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGameVersion',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGameVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->accountDomain)) {
            $query['AccountDomain'] = $request->accountDomain;
        }
        if (!Utils::isUnset($request->buyerAccountId)) {
            $query['BuyerAccountId'] = $request->buyerAccountId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeliveryOrder',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeliveryOrderResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->accessKey)) {
            $body['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->bizParam)) {
            $body['BizParam'] = $request->bizParam;
        }
        if (!Utils::isUnset($request->cancel)) {
            $body['Cancel'] = $request->cancel;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $body['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->gameCommand)) {
            $body['GameCommand'] = $request->gameCommand;
        }
        if (!Utils::isUnset($request->gameId)) {
            $body['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->gameSession)) {
            $body['GameSession'] = $request->gameSession;
        }
        if (!Utils::isUnset($request->gameStartParam)) {
            $body['GameStartParam'] = $request->gameStartParam;
        }
        if (!Utils::isUnset($request->reconnect)) {
            $body['Reconnect'] = $request->reconnect;
        }
        if (!Utils::isUnset($request->regionName)) {
            $body['RegionName'] = $request->regionName;
        }
        if (!Utils::isUnset($request->systemInfo)) {
            $body['SystemInfo'] = $request->systemInfo;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userLevel)) {
            $body['UserLevel'] = $request->userLevel;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DispatchGameSlot',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DispatchGameSlotResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->accessKey)) {
            $query['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->regionName)) {
            $query['RegionName'] = $request->regionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGameCcu',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGameCcuResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetGameStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetGameStatusResponse
     */
    public function getGameStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gameSession)) {
            $query['GameSession'] = $request->gameSession;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGameStatus',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGameStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGameStatusRequest $request
     *
     * @return GetGameStatusResponse
     */
    public function getGameStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGameStatusWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->accessKey)) {
            $query['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGameStock',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGameStockResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGameTrialSurplusDuration',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGameTrialSurplusDurationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGameVersion',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGameVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGameVersionProgress',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGameVersionProgressResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetItem',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetItemResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->accountDomain)) {
            $query['AccountDomain'] = $request->accountDomain;
        }
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->outAccountType)) {
            $query['OutAccountType'] = $request->outAccountType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOutAccountBindDetail',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOutAccountBindDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetQueuingSizeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetQueuingSizeResponse
     */
    public function getQueuingSizeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->userLevel)) {
            $query['UserLevel'] = $request->userLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueuingSize',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueuingSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQueuingSizeRequest $request
     *
     * @return GetQueuingSizeResponse
     */
    public function getQueuingSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueuingSizeWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSession',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSessionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->accessKey)) {
            $query['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStopGameToken',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStopGameTokenResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param KickPlayerRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return KickPlayerResponse
     */
    public function kickPlayerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gameSession)) {
            $query['GameSession'] = $request->gameSession;
        }
        if (!Utils::isUnset($request->kickedAccountId)) {
            $query['KickedAccountId'] = $request->kickedAccountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'KickPlayer',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KickPlayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param KickPlayerRequest $request
     *
     * @return KickPlayerResponse
     */
    public function kickPlayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kickPlayerWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->accountDomain)) {
            $query['AccountDomain'] = $request->accountDomain;
        }
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
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
            'action'      => 'ListBoughtGames',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBoughtGamesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->gameSessionIdList)) {
            $query['GameSessionIdList'] = $request->gameSessionIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListContainerStatus',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListContainerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeployableInstances',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeployableInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListGameServerIpRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListGameServerIpResponse
     */
    public function listGameServerIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ListGameServerIp',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGameServerIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGameServerIpRequest $request
     *
     * @return ListGameServerIpResponse
     */
    public function listGameServerIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGameServerIpWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGameVersions',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGameVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGames',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGamesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lastGameSessionId)) {
            $query['LastGameSessionId'] = $request->lastGameSessionId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHistoryContainerStatus',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHistoryContainerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjects',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGame',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGameResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryGameHangRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryGameHangResponse
     */
    public function queryGameHangWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKey)) {
            $body['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->gameSession)) {
            $body['GameSession'] = $request->gameSession;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryGameHang',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGameHangResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGameHangRequest $request
     *
     * @return QueryGameHangResponse
     */
    public function queryGameHang($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGameHangWithOptions($request, $runtime);
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
        $query = [];
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
            'action'      => 'QueryItems',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryItemsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->accountDomain)) {
            $query['AccountDomain'] = $request->accountDomain;
        }
        if (!Utils::isUnset($request->buyerAccountId)) {
            $query['BuyerAccountId'] = $request->buyerAccountId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrder',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->accountDomain)) {
            $query['AccountDomain'] = $request->accountDomain;
        }
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOutAccountBindStatus',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOutAccountBindStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryProject',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->param)) {
            $query['Param'] = $request->param;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTenant',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTenantResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveGameFromProject',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveGameFromProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SetGameAliveRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SetGameAliveResponse
     */
    public function setGameAliveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKey)) {
            $body['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->gameSession)) {
            $body['GameSession'] = $request->gameSession;
        }
        if (!Utils::isUnset($request->keepAlive)) {
            $body['KeepAlive'] = $request->keepAlive;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetGameAlive',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGameAliveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGameAliveRequest $request
     *
     * @return SetGameAliveResponse
     */
    public function setGameAlive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGameAliveWithOptions($request, $runtime);
    }

    /**
     * @param SetGameHangRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SetGameHangResponse
     */
    public function setGameHangWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKey)) {
            $body['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->gameSession)) {
            $body['GameSession'] = $request->gameSession;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetGameHang',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGameHangResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGameHangRequest $request
     *
     * @return SetGameHangResponse
     */
    public function setGameHang($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGameHangWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->gameSessionId)) {
            $query['GameSessionId'] = $request->gameSessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SkipTrialPolicy',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SkipTrialPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param StartGameLiveRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartGameLiveResponse
     */
    public function startGameLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gameSession)) {
            $query['GameSession'] = $request->gameSession;
        }
        if (!Utils::isUnset($request->videoPushAddress)) {
            $query['VideoPushAddress'] = $request->videoPushAddress;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartGameLive',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartGameLiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartGameLiveRequest $request
     *
     * @return StartGameLiveResponse
     */
    public function startGameLive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startGameLiveWithOptions($request, $runtime);
    }

    /**
     * @param StopGameLiveRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopGameLiveResponse
     */
    public function stopGameLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gameSession)) {
            $query['GameSession'] = $request->gameSession;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopGameLive',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopGameLiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopGameLiveRequest $request
     *
     * @return StopGameLiveResponse
     */
    public function stopGameLive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopGameLiveWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->accessKey)) {
            $body['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->bizParam)) {
            $body['BizParam'] = $request->bizParam;
        }
        if (!Utils::isUnset($request->gameId)) {
            $body['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->gameSession)) {
            $body['GameSession'] = $request->gameSession;
        }
        if (!Utils::isUnset($request->reason)) {
            $body['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopGameSession',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopGameSessionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->cloudGameInstanceIds)) {
            $query['CloudGameInstanceIds'] = $request->cloudGameInstanceIds;
        }
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDeployment',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->activeUserRetentionRateOneDay)) {
            $query['ActiveUserRetentionRateOneDay'] = $request->activeUserRetentionRateOneDay;
        }
        if (!Utils::isUnset($request->activeUserRetentionRateSevenDay)) {
            $query['ActiveUserRetentionRateSevenDay'] = $request->activeUserRetentionRateSevenDay;
        }
        if (!Utils::isUnset($request->activeUserRetentionRateThirtyDay)) {
            $query['ActiveUserRetentionRateThirtyDay'] = $request->activeUserRetentionRateThirtyDay;
        }
        if (!Utils::isUnset($request->arpu)) {
            $query['Arpu'] = $request->arpu;
        }
        if (!Utils::isUnset($request->chargeDate)) {
            $query['ChargeDate'] = $request->chargeDate;
        }
        if (!Utils::isUnset($request->dau)) {
            $query['Dau'] = $request->dau;
        }
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->mau)) {
            $query['Mau'] = $request->mau;
        }
        if (!Utils::isUnset($request->newUserRetentionRateOneDay)) {
            $query['NewUserRetentionRateOneDay'] = $request->newUserRetentionRateOneDay;
        }
        if (!Utils::isUnset($request->newUserRetentionRateSevenDay)) {
            $query['NewUserRetentionRateSevenDay'] = $request->newUserRetentionRateSevenDay;
        }
        if (!Utils::isUnset($request->newUserRetentionRateThirtyDay)) {
            $query['NewUserRetentionRateThirtyDay'] = $request->newUserRetentionRateThirtyDay;
        }
        if (!Utils::isUnset($request->paymentConversionRate)) {
            $query['PaymentConversionRate'] = $request->paymentConversionRate;
        }
        if (!Utils::isUnset($request->playTimeAverageOneDay)) {
            $query['PlayTimeAverageOneDay'] = $request->playTimeAverageOneDay;
        }
        if (!Utils::isUnset($request->playTimeAverageThirtyDay)) {
            $query['PlayTimeAverageThirtyDay'] = $request->playTimeAverageThirtyDay;
        }
        if (!Utils::isUnset($request->playTimeNinetyPointsOneDay)) {
            $query['PlayTimeNinetyPointsOneDay'] = $request->playTimeNinetyPointsOneDay;
        }
        if (!Utils::isUnset($request->playTimeNinetyPointsThirtyDay)) {
            $query['PlayTimeNinetyPointsThirtyDay'] = $request->playTimeNinetyPointsThirtyDay;
        }
        if (!Utils::isUnset($request->playTimeRangeOneDay)) {
            $query['PlayTimeRangeOneDay'] = $request->playTimeRangeOneDay;
        }
        if (!Utils::isUnset($request->playTimeRangeThirtyDay)) {
            $query['PlayTimeRangeThirtyDay'] = $request->playTimeRangeThirtyDay;
        }
        if (!Utils::isUnset($request->userActivationRate)) {
            $query['UserActivationRate'] = $request->userActivationRate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitInternalPurchaseChargeData',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitInternalPurchaseChargeDataResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->orderList)) {
            $query['OrderList'] = $request->orderList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitInternalPurchaseOrders',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitInternalPurchaseOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->batchInfoList)) {
            $query['BatchInfoList'] = $request->batchInfoList;
        }
        if (!Utils::isUnset($request->chargeDate)) {
            $query['ChargeDate'] = $request->chargeDate;
        }
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->orderTotalCount)) {
            $query['OrderTotalCount'] = $request->orderTotalCount;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitInternalPurchaseReadyFlag',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitInternalPurchaseReadyFlagResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->downloadType)) {
            $query['DownloadType'] = $request->downloadType;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->gameId)) {
            $query['GameId'] = $request->gameId;
        }
        if (!Utils::isUnset($request->gameVersion)) {
            $query['GameVersion'] = $request->gameVersion;
        }
        if (!Utils::isUnset($request->hash)) {
            $query['Hash'] = $request->hash;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadGameVersionByDownload',
            'version'     => '2020-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadGameVersionByDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
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
