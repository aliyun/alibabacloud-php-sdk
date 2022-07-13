<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Imp\V20210630\Models\BanAllCommentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\BanAllCommentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\BanCommentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\BanCommentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CancelBanAllCommentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CancelBanAllCommentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CancelBanCommentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CancelBanCommentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CancelUserAdminRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CancelUserAdminResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateClassRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateClassResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRecordSliceFileRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRecordSliceFileResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRoomShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateRoomShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateSensitiveWordRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateSensitiveWordResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateSensitiveWordShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteClassRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteClassResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteCommentByCreatorIdRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteCommentByCreatorIdResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteCommentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteCommentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteConferenceRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteConferenceResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteLiveRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteLiveRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteRecordFileInfoRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteRecordFileInfoResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteSensitiveWordRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteSensitiveWordResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DeleteSensitiveWordShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DescribeMeterImpPlayBackTimeByLiveIdRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DescribeMeterImpPlayBackTimeByLiveIdResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\DescribeMeterImpWatchLiveTimeByLiveIdRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\DescribeMeterImpWatchLiveTimeByLiveIdResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetAuthTokenRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetAuthTokenResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetClassDetailRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetClassDetailResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetClassRecordRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetClassRecordResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetConferenceRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetConferenceResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRecordRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRecordResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomStatisticsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomStatisticsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomUserStatisticsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomUserStatisticsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetRecordFileInfoRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetRecordFileInfoResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetStandardRoomJumpUrlRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetStandardRoomJumpUrlResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\KickRoomUserRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\KickRoomUserResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListClassesRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListClassesResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListCommentsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListCommentsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListConferenceUsersRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListConferenceUsersResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveFilesRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveFilesResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsByIdRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsByIdResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsByIdShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomsRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomsResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomUsersRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomUsersResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListSensitiveWordRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListSensitiveWordResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\PublishLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\PublishLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\PublishLiveRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\PublishLiveRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\RemoveMemberRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\RemoveMemberResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCommentRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCommentResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCommentShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCustomMessageToAllRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCustomMessageToAllResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCustomMessageToUsersRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\SendCustomMessageToUsersResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\SetUserAdminRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\SetUserAdminResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopClassRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopClassResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopLiveRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\StopLiveRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateClassRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateClassResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateLiveRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateLiveResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateLiveRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateLiveRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateLiveRoomShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateRoomRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateRoomResponse;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateRoomShrinkRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateShareScreenLayoutRequest;
use AlibabaCloud\SDK\Imp\V20210630\Models\UpdateShareScreenLayoutResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
     * @param BanAllCommentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BanAllCommentResponse
     */
    public function banAllCommentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BanAllComment',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BanAllCommentResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param BanCommentRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return BanCommentResponse
     */
    public function banCommentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->banCommentTime)) {
            $body['BanCommentTime'] = $request->banCommentTime;
        }
        if (!Utils::isUnset($request->banCommentUser)) {
            $body['BanCommentUser'] = $request->banCommentUser;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BanComment',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BanCommentResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CancelBanAllCommentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelBanAllCommentResponse
     */
    public function cancelBanAllCommentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelBanAllComment',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelBanAllCommentResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CancelBanCommentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CancelBanCommentResponse
     */
    public function cancelBanCommentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->banCommentUser)) {
            $body['BanCommentUser'] = $request->banCommentUser;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelBanComment',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelBanCommentResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CancelUserAdminRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelUserAdminResponse
     */
    public function cancelUserAdminWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelUserAdmin',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelUserAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelUserAdminRequest $request
     *
     * @return CancelUserAdminResponse
     */
    public function cancelUserAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUserAdminWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->createNickname)) {
            $body['CreateNickname'] = $request->createNickname;
        }
        if (!Utils::isUnset($request->createUserId)) {
            $body['CreateUserId'] = $request->createUserId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateClass',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClassResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateLiveRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateLiveResponse
     */
    public function createLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->anchorId)) {
            $body['AnchorId'] = $request->anchorId;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->codeLevel)) {
            $body['CodeLevel'] = $request->codeLevel;
        }
        if (!Utils::isUnset($request->introduction)) {
            $body['Introduction'] = $request->introduction;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLive',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLiveResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateLiveRecordSliceFileRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateLiveRecordSliceFileResponse
     */
    public function createLiveRecordSliceFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLiveRecordSliceFile',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLiveRecordSliceFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLiveRecordSliceFileRequest $request
     *
     * @return CreateLiveRecordSliceFileResponse
     */
    public function createLiveRecordSliceFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveRecordSliceFileWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->anchorId)) {
            $body['AnchorId'] = $request->anchorId;
        }
        if (!Utils::isUnset($request->anchorNick)) {
            $body['AnchorNick'] = $request->anchorNick;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->coverUrl)) {
            $body['CoverUrl'] = $request->coverUrl;
        }
        if (!Utils::isUnset($request->enableLinkMic)) {
            $body['EnableLinkMic'] = $request->enableLinkMic;
        }
        if (!Utils::isUnset($request->extensionShrink)) {
            $body['Extension'] = $request->extensionShrink;
        }
        if (!Utils::isUnset($request->notice)) {
            $body['Notice'] = $request->notice;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLiveRoom',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLiveRoomResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->extensionShrink)) {
            $body['Extension'] = $request->extensionShrink;
        }
        if (!Utils::isUnset($request->notice)) {
            $body['Notice'] = $request->notice;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->roomOwnerId)) {
            $body['RoomOwnerId'] = $request->roomOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRoom',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRoomResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateSensitiveWordRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSensitiveWordResponse
     */
    public function createSensitiveWordWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSensitiveWordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->wordList)) {
            $request->wordListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->wordList, 'WordList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->wordListShrink)) {
            $body['WordList'] = $request->wordListShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSensitiveWord',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSensitiveWordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSensitiveWordRequest $request
     *
     * @return CreateSensitiveWordResponse
     */
    public function createSensitiveWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSensitiveWordWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->classId)) {
            $body['ClassId'] = $request->classId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteClass',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClassResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteCommentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteCommentResponse
     */
    public function deleteCommentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->commentIdList)) {
            $bodyFlat['CommentIdList'] = $request->commentIdList;
        }
        if (!Utils::isUnset($request->creatorId)) {
            $body['CreatorId'] = $request->creatorId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteComment',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCommentResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteCommentByCreatorIdRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCommentByCreatorIdResponse
     */
    public function deleteCommentByCreatorIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->commentIdList)) {
            $bodyFlat['CommentIdList'] = $request->commentIdList;
        }
        if (!Utils::isUnset($request->creatorId)) {
            $body['CreatorId'] = $request->creatorId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCommentByCreatorId',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCommentByCreatorIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCommentByCreatorIdRequest $request
     *
     * @return DeleteCommentByCreatorIdResponse
     */
    public function deleteCommentByCreatorId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCommentByCreatorIdWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['ConferenceId'] = $request->conferenceId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteConference',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteLiveRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteLiveResponse
     */
    public function deleteLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteLive',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteLiveRoomRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteLiveRoomResponse
     */
    public function deleteLiveRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveRoom',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveRoomRequest $request
     *
     * @return DeleteLiveRoomResponse
     */
    public function deleteLiveRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRoomWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRecordFileInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteRecordFileInfoResponse
     */
    public function deleteRecordFileInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
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
            'action'      => 'DeleteRecordFileInfo',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRecordFileInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRecordFileInfoRequest $request
     *
     * @return DeleteRecordFileInfoResponse
     */
    public function deleteRecordFileInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecordFileInfoWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRoom',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRoomResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteSensitiveWordRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSensitiveWordResponse
     */
    public function deleteSensitiveWordWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteSensitiveWordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->wordList)) {
            $request->wordListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->wordList, 'WordList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->wordListShrink)) {
            $body['WordList'] = $request->wordListShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSensitiveWord',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSensitiveWordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSensitiveWordRequest $request
     *
     * @return DeleteSensitiveWordResponse
     */
    public function deleteSensitiveWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSensitiveWordWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterImpPlayBackTimeByLiveIdRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeMeterImpPlayBackTimeByLiveIdResponse
     */
    public function describeMeterImpPlayBackTimeByLiveIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->liveId)) {
            $query['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterImpPlayBackTimeByLiveId',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterImpPlayBackTimeByLiveIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterImpPlayBackTimeByLiveIdRequest $request
     *
     * @return DescribeMeterImpPlayBackTimeByLiveIdResponse
     */
    public function describeMeterImpPlayBackTimeByLiveId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImpPlayBackTimeByLiveIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterImpWatchLiveTimeByLiveIdRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeMeterImpWatchLiveTimeByLiveIdResponse
     */
    public function describeMeterImpWatchLiveTimeByLiveIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->liveId)) {
            $query['LiveId'] = $request->liveId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterImpWatchLiveTimeByLiveId',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterImpWatchLiveTimeByLiveIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterImpWatchLiveTimeByLiveIdRequest $request
     *
     * @return DescribeMeterImpWatchLiveTimeByLiveIdResponse
     */
    public function describeMeterImpWatchLiveTimeByLiveId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImpWatchLiveTimeByLiveIdWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $body['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAuthToken',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetClassDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetClassDetailResponse
     */
    public function getClassDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->classId)) {
            $body['ClassId'] = $request->classId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetClassDetail',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClassDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetClassRecordRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetClassRecordResponse
     */
    public function getClassRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->classId)) {
            $body['ClassId'] = $request->classId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetClassRecord',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClassRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetClassRecordRequest $request
     *
     * @return GetClassRecordResponse
     */
    public function getClassRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClassRecordWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->conferenceId)) {
            $body['ConferenceId'] = $request->conferenceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetConference',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetLiveRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetLiveResponse
     */
    public function getLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLive',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetLiveRecordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetLiveRecordResponse
     */
    public function getLiveRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLiveRecord',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLiveRecordRequest $request
     *
     * @return GetLiveRecordResponse
     */
    public function getLiveRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveRecordWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLiveRoom',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveRoomResponse::fromMap($this->callApi($params, $req, $runtime));
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

    /**
     * @param GetLiveRoomStatisticsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetLiveRoomStatisticsResponse
     */
    public function getLiveRoomStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLiveRoomStatistics',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveRoomStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetLiveRoomUserStatisticsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetLiveRoomUserStatisticsResponse
     */
    public function getLiveRoomUserStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLiveRoomUserStatistics',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveRoomUserStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetRecordFileInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRecordFileInfoResponse
     */
    public function getRecordFileInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
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
            'action'      => 'GetRecordFileInfo',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRecordFileInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRecordFileInfoRequest $request
     *
     * @return GetRecordFileInfoResponse
     */
    public function getRecordFileInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordFileInfoWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRoom',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRoomResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetStandardRoomJumpUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetStandardRoomJumpUrlResponse
     */
    public function getStandardRoomJumpUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $body['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userNick)) {
            $body['UserNick'] = $request->userNick;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetStandardRoomJumpUrl',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStandardRoomJumpUrlResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param KickRoomUserRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return KickRoomUserResponse
     */
    public function kickRoomUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->blockTime)) {
            $body['BlockTime'] = $request->blockTime;
        }
        if (!Utils::isUnset($request->kickUser)) {
            $body['KickUser'] = $request->kickUser;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'KickRoomUser',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KickRoomUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param KickRoomUserRequest $request
     *
     * @return KickRoomUserResponse
     */
    public function kickRoomUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kickRoomUserWithOptions($request, $runtime);
    }

    /**
     * @param ListClassesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListClassesResponse
     */
    public function listClassesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListClasses',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClassesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClassesRequest $request
     *
     * @return ListClassesResponse
     */
    public function listClasses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClassesWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->creatorId)) {
            $body['CreatorId'] = $request->creatorId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->sortType)) {
            $body['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListComments',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCommentsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListConferenceUsersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListConferenceUsersResponse
     */
    public function listConferenceUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->conferenceId)) {
            $body['ConferenceId'] = $request->conferenceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListConferenceUsers',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConferenceUsersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListLiveFilesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListLiveFilesResponse
     */
    public function listLiveFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->liveId)) {
            $query['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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
            'action'      => 'ListLiveFiles',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLiveFilesRequest $request
     *
     * @return ListLiveFilesResponse
     */
    public function listLiveFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveFilesWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListLiveRooms',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveRoomsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->liveIdListShrink)) {
            $body['LiveIdList'] = $request->liveIdListShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListLiveRoomsById',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveRoomsByIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListRoomUsersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListRoomUsersResponse
     */
    public function listRoomUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRoomUsers',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRoomUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRoomUsersRequest $request
     *
     * @return ListRoomUsersResponse
     */
    public function listRoomUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoomUsersWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRooms',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRoomsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListSensitiveWordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSensitiveWordResponse
     */
    public function listSensitiveWordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSensitiveWord',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSensitiveWordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSensitiveWordRequest $request
     *
     * @return ListSensitiveWordResponse
     */
    public function listSensitiveWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitiveWordWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishLive',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishLiveResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param PublishLiveRoomRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PublishLiveRoomResponse
     */
    public function publishLiveRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishLiveRoom',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishLiveRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishLiveRoomRequest $request
     *
     * @return PublishLiveRoomResponse
     */
    public function publishLiveRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishLiveRoomWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->conferenceId)) {
            $body['ConferenceId'] = $request->conferenceId;
        }
        if (!Utils::isUnset($request->fromUserId)) {
            $body['FromUserId'] = $request->fromUserId;
        }
        if (!Utils::isUnset($request->toUserId)) {
            $body['ToUserId'] = $request->toUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveMember',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveMemberResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->extensionShrink)) {
            $body['Extension'] = $request->extensionShrink;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->senderId)) {
            $body['SenderId'] = $request->senderId;
        }
        if (!Utils::isUnset($request->senderNick)) {
            $body['SenderNick'] = $request->senderNick;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendComment',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendCommentResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SendCustomMessageToAllRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SendCustomMessageToAllResponse
     */
    public function sendCustomMessageToAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->body)) {
            $body['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendCustomMessageToAll',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendCustomMessageToAllResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SendCustomMessageToUsersRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SendCustomMessageToUsersResponse
     */
    public function sendCustomMessageToUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->body)) {
            $body['Body'] = $request->body;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->receiverList)) {
            $bodyFlat['ReceiverList'] = $request->receiverList;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendCustomMessageToUsers',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendCustomMessageToUsersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SetUserAdminRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SetUserAdminResponse
     */
    public function setUserAdminWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetUserAdmin',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetUserAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetUserAdminRequest $request
     *
     * @return SetUserAdminResponse
     */
    public function setUserAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserAdminWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->classId)) {
            $body['ClassId'] = $request->classId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopClass',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopClassResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param StopLiveRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopLiveResponse
     */
    public function stopLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopLive',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopLiveResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param StopLiveRoomRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopLiveRoomResponse
     */
    public function stopLiveRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopLiveRoom',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopLiveRoomResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateClassRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateClassResponse
     */
    public function updateClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->classId)) {
            $body['ClassId'] = $request->classId;
        }
        if (!Utils::isUnset($request->createNickname)) {
            $body['CreateNickname'] = $request->createNickname;
        }
        if (!Utils::isUnset($request->createUserId)) {
            $body['CreateUserId'] = $request->createUserId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateClass',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateClassResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateLiveRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateLiveResponse
     */
    public function updateLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->introduction)) {
            $body['Introduction'] = $request->introduction;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLive',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateLiveRoomRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateLiveRoomResponse
     */
    public function updateLiveRoomWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLiveRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extension)) {
            $request->extensionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extension, 'Extension', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->anchorId)) {
            $body['AnchorId'] = $request->anchorId;
        }
        if (!Utils::isUnset($request->anchorNick)) {
            $body['AnchorNick'] = $request->anchorNick;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->coverUrl)) {
            $body['CoverUrl'] = $request->coverUrl;
        }
        if (!Utils::isUnset($request->extensionShrink)) {
            $body['Extension'] = $request->extensionShrink;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->notice)) {
            $body['Notice'] = $request->notice;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveRoom',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveRoomRequest $request
     *
     * @return UpdateLiveRoomResponse
     */
    public function updateLiveRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveRoomWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->extensionShrink)) {
            $body['Extension'] = $request->extensionShrink;
        }
        if (!Utils::isUnset($request->notice)) {
            $body['Notice'] = $request->notice;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->roomOwnerId)) {
            $body['RoomOwnerId'] = $request->roomOwnerId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRoom',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRoomResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateShareScreenLayoutRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateShareScreenLayoutResponse
     */
    public function updateShareScreenLayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->classId)) {
            $body['ClassId'] = $request->classId;
        }
        if (!Utils::isUnset($request->enableOverlay)) {
            $body['EnableOverlay'] = $request->enableOverlay;
        }
        if (!Utils::isUnset($request->overlayHeight)) {
            $body['OverlayHeight'] = $request->overlayHeight;
        }
        if (!Utils::isUnset($request->overlayWidth)) {
            $body['OverlayWidth'] = $request->overlayWidth;
        }
        if (!Utils::isUnset($request->overlayX)) {
            $body['OverlayX'] = $request->overlayX;
        }
        if (!Utils::isUnset($request->overlayY)) {
            $body['OverlayY'] = $request->overlayY;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateShareScreenLayout',
            'version'     => '2021-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateShareScreenLayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateShareScreenLayoutRequest $request
     *
     * @return UpdateShareScreenLayoutResponse
     */
    public function updateShareScreenLayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateShareScreenLayoutWithOptions($request, $runtime);
    }
}
