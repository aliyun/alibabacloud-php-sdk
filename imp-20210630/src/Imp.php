<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Imp\V20210630\Models\AddMemberRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\AddMemberResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\AgreeLinkMicRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\AgreeLinkMicResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ApplyLinkMicRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ApplyLinkMicResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\AttachStandardRoomHttpsCertificateRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\AttachStandardRoomHttpsCertificateResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\BanAllCommentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\BanAllCommentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\BanCommentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\BanCommentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CancelApplyLinkMicRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CancelApplyLinkMicResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CancelBanAllCommentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CancelBanAllCommentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CancelBanCommentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CancelBanCommentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateAppRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateAppResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateAppTemplateRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateAppTemplateResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateAppTemplateShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateClassRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateClassResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateConferenceRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateConferenceResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRoomShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateRoomShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteAppRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteAppTemplateRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteAppTemplateResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteClassRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteClassResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteCommentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteCommentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteConferenceRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteConferenceResponse;
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
use AlibabaCloud\SDK\Imp\V20210630\Models\GetClassDetailRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetClassDetailResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetConferenceRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetConferenceResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetDomainOwnerVerifyContentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetDomainOwnerVerifyContentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetImpProductStatusResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveDomainStatusRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveDomainStatusResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveDomainStatusShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomStatisticsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomStatisticsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomUserStatisticsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomUserStatisticsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetStandardRoomHttpsCertificateRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetStandardRoomHttpsCertificateResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetStandardRoomJumpUrlRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetStandardRoomJumpUrlResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListApplyLinkMicUsersRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListApplyLinkMicUsersResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListAppsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListAppsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListAppTemplatesRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListAppTemplatesResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListCommentsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListCommentsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListConferenceUsersRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListConferenceUsersResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsByIdRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsByIdResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsByIdShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomLivesRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomLivesResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomLivesShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\PublishLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\PublishLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\RejectLinkMicRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\RejectLinkMicResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\RemoveMemberRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\RemoveMemberResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCommentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCommentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCommentShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCustomMessageToAllRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCustomMessageToAllResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCustomMessageToUsersRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCustomMessageToUsersResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopClassRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopClassResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopLiveRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopLiveRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppTemplateConfigRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppTemplateConfigResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppTemplateConfigShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppTemplateRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateAppTemplateResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateClassRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateClassResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateConferenceRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateConferenceResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateRoomShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\VerifyDomainOwnerRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\VerifyDomainOwnerResponse;
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
     * @param RemoveMemberRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RemoveMemberResponse
     */
    public function removeMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveMemberResponse::fromMap($this->doRPCRequest('RemoveMember', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveMemberRequest $request
     *
     * @return RemoveMemberResponse
     */
    public function removeMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeMemberWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCommentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteCommentResponse
     */
    public function deleteCommentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCommentResponse::fromMap($this->doRPCRequest('DeleteComment', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCommentRequest $request
     *
     * @return DeleteCommentResponse
     */
    public function deleteComment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCommentWithOptions($request, $runtime);
    }

    /**
     * @param ListApplyLinkMicUsersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListApplyLinkMicUsersResponse
     */
    public function listApplyLinkMicUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListApplyLinkMicUsersResponse::fromMap($this->doRPCRequest('ListApplyLinkMicUsers', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListApplyLinkMicUsersRequest $request
     *
     * @return ListApplyLinkMicUsersResponse
     */
    public function listApplyLinkMicUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplyLinkMicUsersWithOptions($request, $runtime);
    }

    /**
     * @param GetClassDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetClassDetailResponse
     */
    public function getClassDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetClassDetailResponse::fromMap($this->doRPCRequest('GetClassDetail', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetClassDetailRequest $request
     *
     * @return GetClassDetailResponse
     */
    public function getClassDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClassDetailWithOptions($request, $runtime);
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
     * @param GetLiveRoomUserStatisticsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetLiveRoomUserStatisticsResponse
     */
    public function getLiveRoomUserStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLiveRoomUserStatisticsResponse::fromMap($this->doRPCRequest('GetLiveRoomUserStatistics', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLiveRoomUserStatisticsRequest $request
     *
     * @return GetLiveRoomUserStatisticsResponse
     */
    public function getLiveRoomUserStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveRoomUserStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param BanCommentRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return BanCommentResponse
     */
    public function banCommentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BanCommentResponse::fromMap($this->doRPCRequest('BanComment', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BanCommentRequest $request
     *
     * @return BanCommentResponse
     */
    public function banComment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->banCommentWithOptions($request, $runtime);
    }

    /**
     * @param GetStandardRoomHttpsCertificateRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetStandardRoomHttpsCertificateResponse
     */
    public function getStandardRoomHttpsCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetStandardRoomHttpsCertificateResponse::fromMap($this->doRPCRequest('GetStandardRoomHttpsCertificate', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetStandardRoomHttpsCertificateRequest $request
     *
     * @return GetStandardRoomHttpsCertificateResponse
     */
    public function getStandardRoomHttpsCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStandardRoomHttpsCertificateWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveRoomsByIdRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ListLiveRoomsByIdResponse
     */
    public function listLiveRoomsByIdWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListLiveRoomsByIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->liveIdList)) {
            $request->liveIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->liveIdList, 'LiveIdList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLiveRoomsByIdResponse::fromMap($this->doRPCRequest('ListLiveRoomsById', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListLiveRoomsByIdRequest $request
     *
     * @return ListLiveRoomsByIdResponse
     */
    public function listLiveRoomsById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRoomsByIdWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClassRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteClassResponse
     */
    public function deleteClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteClassResponse::fromMap($this->doRPCRequest('DeleteClass', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteClassRequest $request
     *
     * @return DeleteClassResponse
     */
    public function deleteClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClassWithOptions($request, $runtime);
    }

    /**
     * @param AddMemberRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddMemberResponse
     */
    public function addMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddMemberResponse::fromMap($this->doRPCRequest('AddMember', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddMemberRequest $request
     *
     * @return AddMemberResponse
     */
    public function addMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMemberWithOptions($request, $runtime);
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
     * @param AttachStandardRoomHttpsCertificateRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return AttachStandardRoomHttpsCertificateResponse
     */
    public function attachStandardRoomHttpsCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachStandardRoomHttpsCertificateResponse::fromMap($this->doRPCRequest('AttachStandardRoomHttpsCertificate', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachStandardRoomHttpsCertificateRequest $request
     *
     * @return AttachStandardRoomHttpsCertificateResponse
     */
    public function attachStandardRoomHttpsCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachStandardRoomHttpsCertificateWithOptions($request, $runtime);
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
     * @param UpdateClassRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateClassResponse
     */
    public function updateClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateClassResponse::fromMap($this->doRPCRequest('UpdateClass', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateClassRequest $request
     *
     * @return UpdateClassResponse
     */
    public function updateClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClassWithOptions($request, $runtime);
    }

    /**
     * @param CreateConferenceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConferenceResponse
     */
    public function createConferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateConferenceResponse::fromMap($this->doRPCRequest('CreateConference', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateConferenceRequest $request
     *
     * @return CreateConferenceResponse
     */
    public function createConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConferenceWithOptions($request, $runtime);
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
     * @param ListCommentsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCommentsResponse
     */
    public function listCommentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCommentsResponse::fromMap($this->doRPCRequest('ListComments', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCommentsRequest $request
     *
     * @return ListCommentsResponse
     */
    public function listComments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommentsWithOptions($request, $runtime);
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
     * @param SendCustomMessageToAllRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SendCustomMessageToAllResponse
     */
    public function sendCustomMessageToAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendCustomMessageToAllResponse::fromMap($this->doRPCRequest('SendCustomMessageToAll', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendCustomMessageToAllRequest $request
     *
     * @return SendCustomMessageToAllResponse
     */
    public function sendCustomMessageToAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCustomMessageToAllWithOptions($request, $runtime);
    }

    /**
     * @param AgreeLinkMicRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AgreeLinkMicResponse
     */
    public function agreeLinkMicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AgreeLinkMicResponse::fromMap($this->doRPCRequest('AgreeLinkMic', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AgreeLinkMicRequest $request
     *
     * @return AgreeLinkMicResponse
     */
    public function agreeLinkMic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->agreeLinkMicWithOptions($request, $runtime);
    }

    /**
     * @param GetDomainOwnerVerifyContentRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetDomainOwnerVerifyContentResponse
     */
    public function getDomainOwnerVerifyContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDomainOwnerVerifyContentResponse::fromMap($this->doRPCRequest('GetDomainOwnerVerifyContent', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDomainOwnerVerifyContentRequest $request
     *
     * @return GetDomainOwnerVerifyContentResponse
     */
    public function getDomainOwnerVerifyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDomainOwnerVerifyContentWithOptions($request, $runtime);
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
     * @param DeleteConferenceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteConferenceResponse
     */
    public function deleteConferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteConferenceResponse::fromMap($this->doRPCRequest('DeleteConference', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteConferenceRequest $request
     *
     * @return DeleteConferenceResponse
     */
    public function deleteConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConferenceWithOptions($request, $runtime);
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

    /**
     * @param VerifyDomainOwnerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return VerifyDomainOwnerResponse
     */
    public function verifyDomainOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyDomainOwnerResponse::fromMap($this->doRPCRequest('VerifyDomainOwner', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param VerifyDomainOwnerRequest $request
     *
     * @return VerifyDomainOwnerResponse
     */
    public function verifyDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyDomainOwnerWithOptions($request, $runtime);
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
     * @param GetStandardRoomJumpUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetStandardRoomJumpUrlResponse
     */
    public function getStandardRoomJumpUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetStandardRoomJumpUrlResponse::fromMap($this->doRPCRequest('GetStandardRoomJumpUrl', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetStandardRoomJumpUrlRequest $request
     *
     * @return GetStandardRoomJumpUrlResponse
     */
    public function getStandardRoomJumpUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStandardRoomJumpUrlWithOptions($request, $runtime);
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
     * @param ListRoomLivesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListRoomLivesResponse
     */
    public function listRoomLivesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListRoomLivesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->roomIdList)) {
            $request->roomIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomIdList, 'RoomIdList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRoomLivesResponse::fromMap($this->doRPCRequest('ListRoomLives', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRoomLivesRequest $request
     *
     * @return ListRoomLivesResponse
     */
    public function listRoomLives($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoomLivesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRoomRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRoomResponse
     */
    public function updateRoomWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extension)) {
            $request->extensionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extension, 'Extension', 'json');
        }
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
     * @param SendCommentRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return SendCommentResponse
     */
    public function sendCommentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendCommentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extension)) {
            $request->extensionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extension, 'Extension', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendCommentResponse::fromMap($this->doRPCRequest('SendComment', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendCommentRequest $request
     *
     * @return SendCommentResponse
     */
    public function sendComment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCommentWithOptions($request, $runtime);
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
     * @param GetConferenceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetConferenceResponse
     */
    public function getConferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetConferenceResponse::fromMap($this->doRPCRequest('GetConference', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetConferenceRequest $request
     *
     * @return GetConferenceResponse
     */
    public function getConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConferenceWithOptions($request, $runtime);
    }

    /**
     * @param RejectLinkMicRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RejectLinkMicResponse
     */
    public function rejectLinkMicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RejectLinkMicResponse::fromMap($this->doRPCRequest('RejectLinkMic', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RejectLinkMicRequest $request
     *
     * @return RejectLinkMicResponse
     */
    public function rejectLinkMic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectLinkMicWithOptions($request, $runtime);
    }

    /**
     * @param CreateClassRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateClassResponse
     */
    public function createClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateClassResponse::fromMap($this->doRPCRequest('CreateClass', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateClassRequest $request
     *
     * @return CreateClassResponse
     */
    public function createClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClassWithOptions($request, $runtime);
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
     * @param CancelBanAllCommentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelBanAllCommentResponse
     */
    public function cancelBanAllCommentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelBanAllCommentResponse::fromMap($this->doRPCRequest('CancelBanAllComment', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelBanAllCommentRequest $request
     *
     * @return CancelBanAllCommentResponse
     */
    public function cancelBanAllComment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelBanAllCommentWithOptions($request, $runtime);
    }

    /**
     * @param ListConferenceUsersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListConferenceUsersResponse
     */
    public function listConferenceUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListConferenceUsersResponse::fromMap($this->doRPCRequest('ListConferenceUsers', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListConferenceUsersRequest $request
     *
     * @return ListConferenceUsersResponse
     */
    public function listConferenceUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConferenceUsersWithOptions($request, $runtime);
    }

    /**
     * @param CancelBanCommentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CancelBanCommentResponse
     */
    public function cancelBanCommentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelBanCommentResponse::fromMap($this->doRPCRequest('CancelBanComment', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelBanCommentRequest $request
     *
     * @return CancelBanCommentResponse
     */
    public function cancelBanComment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelBanCommentWithOptions($request, $runtime);
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
     * @param CreateLiveRoomRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateLiveRoomResponse
     */
    public function createLiveRoomWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLiveRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extension)) {
            $request->extensionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extension, 'Extension', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLiveRoomResponse::fromMap($this->doRPCRequest('CreateLiveRoom', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateLiveRoomRequest $request
     *
     * @return CreateLiveRoomResponse
     */
    public function createLiveRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveRoomWithOptions($request, $runtime);
    }

    /**
     * @param ApplyLinkMicRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ApplyLinkMicResponse
     */
    public function applyLinkMicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyLinkMicResponse::fromMap($this->doRPCRequest('ApplyLinkMic', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ApplyLinkMicRequest $request
     *
     * @return ApplyLinkMicResponse
     */
    public function applyLinkMic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyLinkMicWithOptions($request, $runtime);
    }

    /**
     * @param CancelApplyLinkMicRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CancelApplyLinkMicResponse
     */
    public function cancelApplyLinkMicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelApplyLinkMicResponse::fromMap($this->doRPCRequest('CancelApplyLinkMic', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelApplyLinkMicRequest $request
     *
     * @return CancelApplyLinkMicResponse
     */
    public function cancelApplyLinkMic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelApplyLinkMicWithOptions($request, $runtime);
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
     * @param ListLiveRoomsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListLiveRoomsResponse
     */
    public function listLiveRoomsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLiveRoomsResponse::fromMap($this->doRPCRequest('ListLiveRooms', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListLiveRoomsRequest $request
     *
     * @return ListLiveRoomsResponse
     */
    public function listLiveRooms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRoomsWithOptions($request, $runtime);
    }

    /**
     * @param StopLiveRoomRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopLiveRoomResponse
     */
    public function stopLiveRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopLiveRoomResponse::fromMap($this->doRPCRequest('StopLiveRoom', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopLiveRoomRequest $request
     *
     * @return StopLiveRoomResponse
     */
    public function stopLiveRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLiveRoomWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveRoomStatisticsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetLiveRoomStatisticsResponse
     */
    public function getLiveRoomStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLiveRoomStatisticsResponse::fromMap($this->doRPCRequest('GetLiveRoomStatistics', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLiveRoomStatisticsRequest $request
     *
     * @return GetLiveRoomStatisticsResponse
     */
    public function getLiveRoomStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveRoomStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param SendCustomMessageToUsersRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SendCustomMessageToUsersResponse
     */
    public function sendCustomMessageToUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendCustomMessageToUsersResponse::fromMap($this->doRPCRequest('SendCustomMessageToUsers', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendCustomMessageToUsersRequest $request
     *
     * @return SendCustomMessageToUsersResponse
     */
    public function sendCustomMessageToUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCustomMessageToUsersWithOptions($request, $runtime);
    }

    /**
     * @param BanAllCommentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BanAllCommentResponse
     */
    public function banAllCommentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BanAllCommentResponse::fromMap($this->doRPCRequest('BanAllComment', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BanAllCommentRequest $request
     *
     * @return BanAllCommentResponse
     */
    public function banAllComment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->banAllCommentWithOptions($request, $runtime);
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
     * @param CreateRoomRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoomResponse
     */
    public function createRoomWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extension)) {
            $request->extensionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extension, 'Extension', 'json');
        }
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
     * @param UpdateConferenceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateConferenceResponse
     */
    public function updateConferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateConferenceResponse::fromMap($this->doRPCRequest('UpdateConference', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateConferenceRequest $request
     *
     * @return UpdateConferenceResponse
     */
    public function updateConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConferenceWithOptions($request, $runtime);
    }

    /**
     * @param StopClassRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StopClassResponse
     */
    public function stopClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopClassResponse::fromMap($this->doRPCRequest('StopClass', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopClassRequest $request
     *
     * @return StopClassResponse
     */
    public function stopClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopClassWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveRoomRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetLiveRoomResponse
     */
    public function getLiveRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLiveRoomResponse::fromMap($this->doRPCRequest('GetLiveRoom', '2021-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLiveRoomRequest $request
     *
     * @return GetLiveRoomResponse
     */
    public function getLiveRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveRoomWithOptions($request, $runtime);
    }
}
