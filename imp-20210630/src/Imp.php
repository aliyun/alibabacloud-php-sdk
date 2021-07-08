<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateAppRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateAppResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateAppTemplateRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateAppTemplateResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateAppTemplateShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteAppRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteAppTemplateRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteAppTemplateResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetAppRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetAppResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetAppTemplateRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetAppTemplateResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetAuthTokenRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetAuthTokenResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetImpProductStatusResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveDomainStatusRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveDomainStatusResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveDomainStatusShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListAppsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListAppsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListAppTemplatesRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListAppTemplatesResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\PublishLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\PublishLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppTemplateConfigRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppTemplateConfigResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppTemplateConfigShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppTemplateRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppTemplateResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateRoomResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Imp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateLiveRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateLiveResponse
     */
    public function createLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLiveResponse::fromMap($this->doRPCRequest('CreateLive', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateLiveRequest $request
     *
     * @return CreateLiveResponse
     */
    public function createLive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAppResponse::fromMap($this->doRPCRequest('DeleteApp', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRoomRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRoomResponse
     */
    public function updateRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRoomResponse::fromMap($this->doRPCRequest('UpdateRoom', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRoomRequest $request
     *
     * @return UpdateRoomResponse
     */
    public function updateRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRoomWithOptions($request, $runtime);
    }

    /**
     * @param GetAppTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAppTemplateResponse
     */
    public function getAppTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAppTemplateResponse::fromMap($this->doRPCRequest('GetAppTemplate', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAppTemplateRequest $request
     *
     * @return GetAppTemplateResponse
     */
    public function getAppTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetRoomRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRoomResponse
     */
    public function getRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRoomResponse::fromMap($this->doRPCRequest('GetRoom', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRoomRequest $request
     *
     * @return GetRoomResponse
     */
    public function getRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoomWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppTemplateRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAppTemplateResponse
     */
    public function createAppTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->componentList)) {
            $request->componentListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->componentList, 'ComponentList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAppTemplateResponse::fromMap($this->doRPCRequest('CreateAppTemplate', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAppTemplateRequest $request
     *
     * @return CreateAppTemplateResponse
     */
    public function createAppTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListAppsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
     */
    public function listAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAppsResponse::fromMap($this->doRPCRequest('ListApps', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAppsRequest $request
     *
     * @return ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListRoomsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRoomsResponse
     */
    public function listRoomsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRoomsResponse::fromMap($this->doRPCRequest('ListRooms', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRoomsRequest $request
     *
     * @return ListRoomsResponse
     */
    public function listRooms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoomsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAppTemplateResponse
     */
    public function deleteAppTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAppTemplateResponse::fromMap($this->doRPCRequest('DeleteAppTemplate', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAppTemplateRequest $request
     *
     * @return DeleteAppTemplateResponse
     */
    public function deleteAppTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListAppTemplatesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAppTemplatesResponse
     */
    public function listAppTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAppTemplatesResponse::fromMap($this->doRPCRequest('ListAppTemplates', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAppTemplatesRequest $request
     *
     * @return ListAppTemplatesResponse
     */
    public function listAppTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListComponentsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListComponentsResponse
     */
    public function listComponentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListComponentsResponse::fromMap($this->doRPCRequest('ListComponents', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListComponentsRequest $request
     *
     * @return ListComponentsResponse
     */
    public function listComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listComponentsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateLiveResponse
     */
    public function updateLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLiveResponse::fromMap($this->doRPCRequest('UpdateLive', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateLiveRequest $request
     *
     * @return UpdateLiveResponse
     */
    public function updateLive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppTemplateConfigRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAppTemplateConfigResponse
     */
    public function updateAppTemplateConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAppTemplateConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configList)) {
            $request->configListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configList, 'ConfigList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppTemplateConfigResponse::fromMap($this->doRPCRequest('UpdateAppTemplateConfig', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppTemplateConfigRequest $request
     *
     * @return UpdateAppTemplateConfigResponse
     */
    public function updateAppTemplateConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppTemplateConfigWithOptions($request, $runtime);
    }

    /**
     * @param StopLiveRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopLiveResponse
     */
    public function stopLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopLiveResponse::fromMap($this->doRPCRequest('StopLive', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopLiveRequest $request
     *
     * @return StopLiveResponse
     */
    public function stopLive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLiveWithOptions($request, $runtime);
    }

    /**
     * @param GetAppRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetAppResponse
     */
    public function getAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAppResponse::fromMap($this->doRPCRequest('GetApp', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAppRequest $request
     *
     * @return GetAppResponse
     */
    public function getApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteLiveResponse
     */
    public function deleteLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLiveResponse::fromMap($this->doRPCRequest('DeleteLive', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteLiveRequest $request
     *
     * @return DeleteLiveResponse
     */
    public function deleteLive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveDomainStatusRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return GetLiveDomainStatusResponse
     */
    public function getLiveDomainStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetLiveDomainStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->liveDomainList)) {
            $request->liveDomainListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->liveDomainList, 'LiveDomainList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLiveDomainStatusResponse::fromMap($this->doRPCRequest('GetLiveDomainStatus', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLiveDomainStatusRequest $request
     *
     * @return GetLiveDomainStatusResponse
     */
    public function getLiveDomainStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveDomainStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetAuthTokenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAuthTokenResponse
     */
    public function getAuthTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAuthTokenResponse::fromMap($this->doRPCRequest('GetAuthToken', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAuthTokenRequest $request
     *
     * @return GetAuthTokenResponse
     */
    public function getAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthTokenWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAppTemplateResponse
     */
    public function updateAppTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppTemplateResponse::fromMap($this->doRPCRequest('UpdateAppTemplate', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppTemplateRequest $request
     *
     * @return UpdateAppTemplateResponse
     */
    public function updateAppTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppTemplateWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetImpProductStatusResponse
     */
    public function getImpProductStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetImpProductStatusResponse::fromMap($this->doRPCRequest('GetImpProductStatus', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetImpProductStatusResponse
     */
    public function getImpProductStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImpProductStatusWithOptions($runtime);
    }

    /**
     * @param PublishLiveRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return PublishLiveResponse
     */
    public function publishLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishLiveResponse::fromMap($this->doRPCRequest('PublishLive', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PublishLiveRequest $request
     *
     * @return PublishLiveResponse
     */
    public function publishLive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishLiveWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetLiveResponse
     */
    public function getLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLiveResponse::fromMap($this->doRPCRequest('GetLive', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLiveRequest $request
     *
     * @return GetLiveResponse
     */
    public function getLive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRoomRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRoomResponse
     */
    public function deleteRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRoomResponse::fromMap($this->doRPCRequest('DeleteRoom', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRoomRequest $request
     *
     * @return DeleteRoomResponse
     */
    public function deleteRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoomWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAppResponse::fromMap($this->doRPCRequest('CreateApp', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateRoomRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoomResponse
     */
    public function createRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRoomResponse::fromMap($this->doRPCRequest('CreateRoom', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRoomRequest $request
     *
     * @return CreateRoomResponse
     */
    public function createRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoomWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAppResponse
     */
    public function updateAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppResponse::fromMap($this->doRPCRequest('UpdateApp', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppRequest $request
     *
     * @return UpdateAppResponse
     */
    public function updateApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppWithOptions($request, $runtime);
    }
}
