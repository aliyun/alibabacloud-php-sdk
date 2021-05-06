<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupMembersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupMembersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupMembersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceBlacklistRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceBlacklistResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceBlacklistShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceWhitelistRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceWhitelistResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupSilenceWhitelistShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CancelSilenceAllGroupMembersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CancelSilenceAllGroupMembersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CancelSilenceAllGroupMembersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateGroupShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateRoomRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateRoomResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DeleteAppRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DestroyRoomRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DestroyRoomResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DismissGroupRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DismissGroupResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DismissGroupShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupByIdRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupByIdResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupByIdShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupMemberByIdsRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupMemberByIdsResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetGroupMemberByIdsShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetIMConfigRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetIMConfigResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetLoginTokenRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetLoginTokenResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetLoginTokenShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUploadUrlRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUploadUrlResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUploadUrlShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUrlRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUrlResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUrlShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMessageByIdRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMessageByIdResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMessageByIdShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetUserMuteSettingRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetUserMuteSettingResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetUserMuteSettingShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatConversationRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatConversationResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatConversationShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatMemberRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatMemberResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatMemberShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportSingleConversationRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportSingleConversationResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportSingleConversationShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\InitTenantRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\InitTenantResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\KickOffRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\KickOffResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\KickOffShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListDetailReportStatisticsRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListDetailReportStatisticsResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListDetailReportStatisticsShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupAllMembersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupAllMembersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupAllMembersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupSilenceMembersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupSilenceMembersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupSilenceMembersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\MuteUsersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\MuteUsersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\MuteUsersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RecallMessageRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RecallMessageResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RecallMessageShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMemberExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMemberExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMemberExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMembersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMembersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupMembersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceBlacklistRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceBlacklistResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceBlacklistShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceWhitelistRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceWhitelistResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceWhitelistShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveMessageExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveMessageExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveMessageExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveSingleChatExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveSingleChatExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveSingleChatExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveUserConversationExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveUserConversationExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveUserConversationExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveUserExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveUserExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupMemberExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupMemberExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupMemberExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupOwnerRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupOwnerResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetGroupOwnerShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetMessageExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetMessageExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetMessageExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetSingleChatExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetSingleChatExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetSingleChatExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetUserConversationExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetUserConversationExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetUserConversationExtensionByKeysShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetUserExtensionByKeysRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SetUserExtensionByKeysResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SilenceAllGroupMembersRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SilenceAllGroupMembersResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SilenceAllGroupMembersShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppNameRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppNameResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppNameShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppStatusRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppStatusResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppStatusShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupIconRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupIconResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupIconShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupMembersRoleRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupMembersRoleResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupMembersRoleShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupTitleRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupTitleResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupTitleShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateMsgRecallIntervalRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateMsgRecallIntervalResponse;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateMsgRecallIntervalShrinkRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateTenantStatusRequest;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateTenantStatusResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Liveinteraction extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('live-interaction', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddGroupMembersRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return AddGroupMembersResponse
     */
    public function addGroupMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGroupMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddGroupMembersResponse::fromMap($this->doRPCRequest('AddGroupMembers', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddGroupMembersRequest $request
     *
     * @return AddGroupMembersResponse
     */
    public function addGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @param AddGroupSilenceBlacklistRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return AddGroupSilenceBlacklistResponse
     */
    public function addGroupSilenceBlacklistWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGroupSilenceBlacklistShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddGroupSilenceBlacklistResponse::fromMap($this->doRPCRequest('AddGroupSilenceBlacklist', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddGroupSilenceBlacklistRequest $request
     *
     * @return AddGroupSilenceBlacklistResponse
     */
    public function addGroupSilenceBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGroupSilenceBlacklistWithOptions($request, $runtime);
    }

    /**
     * @param AddGroupSilenceWhitelistRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return AddGroupSilenceWhitelistResponse
     */
    public function addGroupSilenceWhitelistWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddGroupSilenceWhitelistShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddGroupSilenceWhitelistResponse::fromMap($this->doRPCRequest('AddGroupSilenceWhitelist', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddGroupSilenceWhitelistRequest $request
     *
     * @return AddGroupSilenceWhitelistResponse
     */
    public function addGroupSilenceWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGroupSilenceWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param CancelSilenceAllGroupMembersRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelSilenceAllGroupMembersResponse
     */
    public function cancelSilenceAllGroupMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CancelSilenceAllGroupMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelSilenceAllGroupMembersResponse::fromMap($this->doRPCRequest('CancelSilenceAllGroupMembers', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelSilenceAllGroupMembersRequest $request
     *
     * @return CancelSilenceAllGroupMembersResponse
     */
    public function cancelSilenceAllGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSilenceAllGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGroupResponse::fromMap($this->doRPCRequest('CreateGroup', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
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

        return CreateRoomResponse::fromMap($this->doRPCRequest('CreateRoom', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DeleteAppResponse::fromMap($this->doRPCRequest('DeleteApp', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DestroyRoomRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DestroyRoomResponse
     */
    public function destroyRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DestroyRoomResponse::fromMap($this->doRPCRequest('DestroyRoom', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DestroyRoomRequest $request
     *
     * @return DestroyRoomResponse
     */
    public function destroyRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyRoomWithOptions($request, $runtime);
    }

    /**
     * @param DismissGroupRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return DismissGroupResponse
     */
    public function dismissGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DismissGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DismissGroupResponse::fromMap($this->doRPCRequest('DismissGroup', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DismissGroupRequest $request
     *
     * @return DismissGroupResponse
     */
    public function dismissGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dismissGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetCommonConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCommonConfigResponse
     */
    public function getCommonConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCommonConfigResponse::fromMap($this->doRPCRequest('GetCommonConfig', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCommonConfigRequest $request
     *
     * @return GetCommonConfigResponse
     */
    public function getCommonConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommonConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetGroupByIdRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return GetGroupByIdResponse
     */
    public function getGroupByIdWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetGroupByIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGroupByIdResponse::fromMap($this->doRPCRequest('GetGroupById', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGroupByIdRequest $request
     *
     * @return GetGroupByIdResponse
     */
    public function getGroupById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetGroupMemberByIdsRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return GetGroupMemberByIdsResponse
     */
    public function getGroupMemberByIdsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetGroupMemberByIdsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGroupMemberByIdsResponse::fromMap($this->doRPCRequest('GetGroupMemberByIds', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGroupMemberByIdsRequest $request
     *
     * @return GetGroupMemberByIdsResponse
     */
    public function getGroupMemberByIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupMemberByIdsWithOptions($request, $runtime);
    }

    /**
     * @param GetIMConfigRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetIMConfigResponse
     */
    public function getIMConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetIMConfigResponse::fromMap($this->doRPCRequest('GetIMConfig', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetIMConfigRequest $request
     *
     * @return GetIMConfigResponse
     */
    public function getIMConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIMConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetLoginTokenRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return GetLoginTokenResponse
     */
    public function getLoginTokenWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetLoginTokenShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLoginTokenResponse::fromMap($this->doRPCRequest('GetLoginToken', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLoginTokenRequest $request
     *
     * @return GetLoginTokenResponse
     */
    public function getLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaUploadUrlRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return GetMediaUploadUrlResponse
     */
    public function getMediaUploadUrlWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetMediaUploadUrlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMediaUploadUrlResponse::fromMap($this->doRPCRequest('GetMediaUploadUrl', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMediaUploadUrlRequest $request
     *
     * @return GetMediaUploadUrlResponse
     */
    public function getMediaUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaUrlRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return GetMediaUrlResponse
     */
    public function getMediaUrlWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetMediaUrlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMediaUrlResponse::fromMap($this->doRPCRequest('GetMediaUrl', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMediaUrlRequest $request
     *
     * @return GetMediaUrlResponse
     */
    public function getMediaUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetMessageByIdRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return GetMessageByIdResponse
     */
    public function getMessageByIdWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetMessageByIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMessageByIdResponse::fromMap($this->doRPCRequest('GetMessageById', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMessageByIdRequest $request
     *
     * @return GetMessageByIdResponse
     */
    public function getMessageById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessageByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetUserMuteSettingRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserMuteSettingResponse
     */
    public function getUserMuteSettingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetUserMuteSettingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserMuteSettingResponse::fromMap($this->doRPCRequest('GetUserMuteSetting', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserMuteSettingRequest $request
     *
     * @return GetUserMuteSettingResponse
     */
    public function getUserMuteSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserMuteSettingWithOptions($request, $runtime);
    }

    /**
     * @param ImportGroupChatConversationRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return ImportGroupChatConversationResponse
     */
    public function importGroupChatConversationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportGroupChatConversationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportGroupChatConversationResponse::fromMap($this->doRPCRequest('ImportGroupChatConversation', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImportGroupChatConversationRequest $request
     *
     * @return ImportGroupChatConversationResponse
     */
    public function importGroupChatConversation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importGroupChatConversationWithOptions($request, $runtime);
    }

    /**
     * @param ImportGroupChatMemberRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ImportGroupChatMemberResponse
     */
    public function importGroupChatMemberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportGroupChatMemberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportGroupChatMemberResponse::fromMap($this->doRPCRequest('ImportGroupChatMember', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImportGroupChatMemberRequest $request
     *
     * @return ImportGroupChatMemberResponse
     */
    public function importGroupChatMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importGroupChatMemberWithOptions($request, $runtime);
    }

    /**
     * @param ImportMessageRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ImportMessageResponse
     */
    public function importMessageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportMessageResponse::fromMap($this->doRPCRequest('ImportMessage', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImportMessageRequest $request
     *
     * @return ImportMessageResponse
     */
    public function importMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importMessageWithOptions($request, $runtime);
    }

    /**
     * @param ImportSingleConversationRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ImportSingleConversationResponse
     */
    public function importSingleConversationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportSingleConversationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportSingleConversationResponse::fromMap($this->doRPCRequest('ImportSingleConversation', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImportSingleConversationRequest $request
     *
     * @return ImportSingleConversationResponse
     */
    public function importSingleConversation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importSingleConversationWithOptions($request, $runtime);
    }

    /**
     * @param InitTenantRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return InitTenantResponse
     */
    public function initTenantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InitTenantResponse::fromMap($this->doRPCRequest('InitTenant', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InitTenantRequest $request
     *
     * @return InitTenantResponse
     */
    public function initTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initTenantWithOptions($request, $runtime);
    }

    /**
     * @param KickOffRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return KickOffResponse
     */
    public function kickOffWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new KickOffShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return KickOffResponse::fromMap($this->doRPCRequest('KickOff', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param KickOffRequest $request
     *
     * @return KickOffResponse
     */
    public function kickOff($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kickOffWithOptions($request, $runtime);
    }

    /**
     * @param ListAppInfosRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListAppInfosResponse
     */
    public function listAppInfosWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAppInfosShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAppInfosResponse::fromMap($this->doRPCRequest('ListAppInfos', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAppInfosRequest $request
     *
     * @return ListAppInfosResponse
     */
    public function listAppInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInfosWithOptions($request, $runtime);
    }

    /**
     * @param ListDetailReportStatisticsRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return ListDetailReportStatisticsResponse
     */
    public function listDetailReportStatisticsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDetailReportStatisticsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDetailReportStatisticsResponse::fromMap($this->doRPCRequest('ListDetailReportStatistics', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDetailReportStatisticsRequest $request
     *
     * @return ListDetailReportStatisticsResponse
     */
    public function listDetailReportStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDetailReportStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param ListGroupAllMembersRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListGroupAllMembersResponse
     */
    public function listGroupAllMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGroupAllMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListGroupAllMembersResponse::fromMap($this->doRPCRequest('ListGroupAllMembers', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListGroupAllMembersRequest $request
     *
     * @return ListGroupAllMembersResponse
     */
    public function listGroupAllMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupAllMembersWithOptions($request, $runtime);
    }

    /**
     * @param ListGroupSilenceMembersRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ListGroupSilenceMembersResponse
     */
    public function listGroupSilenceMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGroupSilenceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListGroupSilenceMembersResponse::fromMap($this->doRPCRequest('ListGroupSilenceMembers', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListGroupSilenceMembersRequest $request
     *
     * @return ListGroupSilenceMembersResponse
     */
    public function listGroupSilenceMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupSilenceMembersWithOptions($request, $runtime);
    }

    /**
     * @param MuteUsersRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return MuteUsersResponse
     */
    public function muteUsersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new MuteUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MuteUsersResponse::fromMap($this->doRPCRequest('MuteUsers', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MuteUsersRequest $request
     *
     * @return MuteUsersResponse
     */
    public function muteUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->muteUsersWithOptions($request, $runtime);
    }

    /**
     * @param RecallMessageRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return RecallMessageResponse
     */
    public function recallMessageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RecallMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecallMessageResponse::fromMap($this->doRPCRequest('RecallMessage', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecallMessageRequest $request
     *
     * @return RecallMessageResponse
     */
    public function recallMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recallMessageWithOptions($request, $runtime);
    }

    /**
     * @param RemoveExtensionByKeysRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveExtensionByKeysResponse
     */
    public function removeExtensionByKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveExtensionByKeysResponse::fromMap($this->doRPCRequest('RemoveExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveExtensionByKeysRequest $request
     *
     * @return RemoveExtensionByKeysResponse
     */
    public function removeExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGroupExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return RemoveGroupExtensionByKeysResponse
     */
    public function removeGroupExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveGroupExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveGroupExtensionByKeysResponse::fromMap($this->doRPCRequest('RemoveGroupExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveGroupExtensionByKeysRequest $request
     *
     * @return RemoveGroupExtensionByKeysResponse
     */
    public function removeGroupExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGroupMemberExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveGroupMemberExtensionByKeysResponse
     */
    public function removeGroupMemberExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveGroupMemberExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveGroupMemberExtensionByKeysResponse::fromMap($this->doRPCRequest('RemoveGroupMemberExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveGroupMemberExtensionByKeysRequest $request
     *
     * @return RemoveGroupMemberExtensionByKeysResponse
     */
    public function removeGroupMemberExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupMemberExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGroupMembersRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveGroupMembersResponse
     */
    public function removeGroupMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveGroupMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveGroupMembersResponse::fromMap($this->doRPCRequest('RemoveGroupMembers', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveGroupMembersRequest $request
     *
     * @return RemoveGroupMembersResponse
     */
    public function removeGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGroupSilenceBlacklistRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveGroupSilenceBlacklistResponse
     */
    public function removeGroupSilenceBlacklistWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveGroupSilenceBlacklistShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveGroupSilenceBlacklistResponse::fromMap($this->doRPCRequest('RemoveGroupSilenceBlacklist', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveGroupSilenceBlacklistRequest $request
     *
     * @return RemoveGroupSilenceBlacklistResponse
     */
    public function removeGroupSilenceBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupSilenceBlacklistWithOptions($request, $runtime);
    }

    /**
     * @param RemoveGroupSilenceWhitelistRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveGroupSilenceWhitelistResponse
     */
    public function removeGroupSilenceWhitelistWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveGroupSilenceWhitelistShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveGroupSilenceWhitelistResponse::fromMap($this->doRPCRequest('RemoveGroupSilenceWhitelist', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveGroupSilenceWhitelistRequest $request
     *
     * @return RemoveGroupSilenceWhitelistResponse
     */
    public function removeGroupSilenceWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeGroupSilenceWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param RemoveMessageExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveMessageExtensionByKeysResponse
     */
    public function removeMessageExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveMessageExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveMessageExtensionByKeysResponse::fromMap($this->doRPCRequest('RemoveMessageExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveMessageExtensionByKeysRequest $request
     *
     * @return RemoveMessageExtensionByKeysResponse
     */
    public function removeMessageExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeMessageExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param RemoveSingleChatExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return RemoveSingleChatExtensionByKeysResponse
     */
    public function removeSingleChatExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveSingleChatExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveSingleChatExtensionByKeysResponse::fromMap($this->doRPCRequest('RemoveSingleChatExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveSingleChatExtensionByKeysRequest $request
     *
     * @return RemoveSingleChatExtensionByKeysResponse
     */
    public function removeSingleChatExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSingleChatExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param RemoveUserConversationExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                               $runtime
     *
     * @return RemoveUserConversationExtensionByKeysResponse
     */
    public function removeUserConversationExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveUserConversationExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveUserConversationExtensionByKeysResponse::fromMap($this->doRPCRequest('RemoveUserConversationExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveUserConversationExtensionByKeysRequest $request
     *
     * @return RemoveUserConversationExtensionByKeysResponse
     */
    public function removeUserConversationExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserConversationExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param RemoveUserExtensionByKeysRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveUserExtensionByKeysResponse
     */
    public function removeUserExtensionByKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveUserExtensionByKeysResponse::fromMap($this->doRPCRequest('RemoveUserExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveUserExtensionByKeysRequest $request
     *
     * @return RemoveUserExtensionByKeysResponse
     */
    public function removeUserExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SendMessageRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return SendMessageResponse
     */
    public function sendMessageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendMessageResponse::fromMap($this->doRPCRequest('SendMessage', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendMessageRequest $request
     *
     * @return SendMessageResponse
     */
    public function sendMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageWithOptions($request, $runtime);
    }

    /**
     * @param SetExtensionByKeysRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetExtensionByKeysResponse
     */
    public function setExtensionByKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetExtensionByKeysResponse::fromMap($this->doRPCRequest('SetExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetExtensionByKeysRequest $request
     *
     * @return SetExtensionByKeysResponse
     */
    public function setExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SetGroupExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return SetGroupExtensionByKeysResponse
     */
    public function setGroupExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetGroupExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetGroupExtensionByKeysResponse::fromMap($this->doRPCRequest('SetGroupExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetGroupExtensionByKeysRequest $request
     *
     * @return SetGroupExtensionByKeysResponse
     */
    public function setGroupExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGroupExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SetGroupMemberExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return SetGroupMemberExtensionByKeysResponse
     */
    public function setGroupMemberExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetGroupMemberExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetGroupMemberExtensionByKeysResponse::fromMap($this->doRPCRequest('SetGroupMemberExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetGroupMemberExtensionByKeysRequest $request
     *
     * @return SetGroupMemberExtensionByKeysResponse
     */
    public function setGroupMemberExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGroupMemberExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SetGroupOwnerRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return SetGroupOwnerResponse
     */
    public function setGroupOwnerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetGroupOwnerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetGroupOwnerResponse::fromMap($this->doRPCRequest('SetGroupOwner', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetGroupOwnerRequest $request
     *
     * @return SetGroupOwnerResponse
     */
    public function setGroupOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGroupOwnerWithOptions($request, $runtime);
    }

    /**
     * @param SetMessageExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SetMessageExtensionByKeysResponse
     */
    public function setMessageExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetMessageExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetMessageExtensionByKeysResponse::fromMap($this->doRPCRequest('SetMessageExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetMessageExtensionByKeysRequest $request
     *
     * @return SetMessageExtensionByKeysResponse
     */
    public function setMessageExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMessageExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SetSingleChatExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return SetSingleChatExtensionByKeysResponse
     */
    public function setSingleChatExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetSingleChatExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetSingleChatExtensionByKeysResponse::fromMap($this->doRPCRequest('SetSingleChatExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetSingleChatExtensionByKeysRequest $request
     *
     * @return SetSingleChatExtensionByKeysResponse
     */
    public function setSingleChatExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSingleChatExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SetUserConversationExtensionByKeysRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return SetUserConversationExtensionByKeysResponse
     */
    public function setUserConversationExtensionByKeysWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetUserConversationExtensionByKeysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetUserConversationExtensionByKeysResponse::fromMap($this->doRPCRequest('SetUserConversationExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetUserConversationExtensionByKeysRequest $request
     *
     * @return SetUserConversationExtensionByKeysResponse
     */
    public function setUserConversationExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserConversationExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SetUserExtensionByKeysRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetUserExtensionByKeysResponse
     */
    public function setUserExtensionByKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetUserExtensionByKeysResponse::fromMap($this->doRPCRequest('SetUserExtensionByKeys', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetUserExtensionByKeysRequest $request
     *
     * @return SetUserExtensionByKeysResponse
     */
    public function setUserExtensionByKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserExtensionByKeysWithOptions($request, $runtime);
    }

    /**
     * @param SilenceAllGroupMembersRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SilenceAllGroupMembersResponse
     */
    public function silenceAllGroupMembersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SilenceAllGroupMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SilenceAllGroupMembersResponse::fromMap($this->doRPCRequest('SilenceAllGroupMembers', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SilenceAllGroupMembersRequest $request
     *
     * @return SilenceAllGroupMembersResponse
     */
    public function silenceAllGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->silenceAllGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppNameRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAppNameResponse
     */
    public function updateAppNameWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAppNameShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppNameResponse::fromMap($this->doRPCRequest('UpdateAppName', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppNameRequest $request
     *
     * @return UpdateAppNameResponse
     */
    public function updateAppName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppStatusRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAppStatusResponse
     */
    public function updateAppStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAppStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppStatusResponse::fromMap($this->doRPCRequest('UpdateAppStatus', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppStatusRequest $request
     *
     * @return UpdateAppStatusResponse
     */
    public function updateAppStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCallbackConfigRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCallbackConfigResponse
     */
    public function updateCallbackConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateCallbackConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCallbackConfigResponse::fromMap($this->doRPCRequest('UpdateCallbackConfig', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCallbackConfigRequest $request
     *
     * @return UpdateCallbackConfigResponse
     */
    public function updateCallbackConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCallbackConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupIconRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateGroupIconResponse
     */
    public function updateGroupIconWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGroupIconShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGroupIconResponse::fromMap($this->doRPCRequest('UpdateGroupIcon', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateGroupIconRequest $request
     *
     * @return UpdateGroupIconResponse
     */
    public function updateGroupIcon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupIconWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupMembersRoleRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGroupMembersRoleResponse
     */
    public function updateGroupMembersRoleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGroupMembersRoleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGroupMembersRoleResponse::fromMap($this->doRPCRequest('UpdateGroupMembersRole', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateGroupMembersRoleRequest $request
     *
     * @return UpdateGroupMembersRoleResponse
     */
    public function updateGroupMembersRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupMembersRoleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupTitleRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateGroupTitleResponse
     */
    public function updateGroupTitleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGroupTitleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGroupTitleResponse::fromMap($this->doRPCRequest('UpdateGroupTitle', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateGroupTitleRequest $request
     *
     * @return UpdateGroupTitleResponse
     */
    public function updateGroupTitle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupTitleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMsgRecallIntervalRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMsgRecallIntervalResponse
     */
    public function updateMsgRecallIntervalWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMsgRecallIntervalShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMsgRecallIntervalResponse::fromMap($this->doRPCRequest('UpdateMsgRecallInterval', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMsgRecallIntervalRequest $request
     *
     * @return UpdateMsgRecallIntervalResponse
     */
    public function updateMsgRecallInterval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMsgRecallIntervalWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTenantStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateTenantStatusResponse
     */
    public function updateTenantStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTenantStatusResponse::fromMap($this->doRPCRequest('UpdateTenantStatus', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTenantStatusRequest $request
     *
     * @return UpdateTenantStatusResponse
     */
    public function updateTenantStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTenantStatusWithOptions($request, $runtime);
    }
}
